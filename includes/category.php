<?php
/*****************************************************************************
*                                                                           *
* Lego SP - lego.shop-script.org                                            *
* Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  *
*                                                                           *
****************************************************************************/
//show all products of selected category
if (isset($categoryID) && !isset($productID) && $categoryID) {
    //get selected category info
    $sql = "SELECT categoryID, name, description, picture, meta_title, meta_keywords, meta_desc, hurl, canonical, h1, parent  FROM " . CATEGORIES_TABLE . " WHERE enabled=1 and categoryID='" . $categoryID . "'";
    if (isset($_SESSION["cust_id"])) $sql.= ' and hidden!=2';
    else $sql.= ' and hidden!=1';
    $q = db_query($sql) or die(db_error());
    $row = db_fetch_row($q);
    if ($row) {
        if (!file_exists("./products_pictures/" . $row[3])) $row[3] = "";
        if ($row[7] != "" && CONF_CHPU) $row[11] = REDIRECT_CATALOG . "/" . $row[7] . "about/";
        else $row[11] = "index.php?about&amp;category=" . $row[0];
        if ($row[7] != "" && CONF_CHPU) $row[7] = REDIRECT_CATALOG . "/" . $row[7];
        else $row[7] = "index.php?categoryID=" . $row[0];
        $smarty->assign("selected_category", $row);
        $curr_url = $row[7];
        if (isset($_GET['offset']))
        {
         if ($_GET['offset']<CONF_PRODUCTS_PER_PAGE)
          $row[4] .=' - страница 1';
         else $row[4] .=' - страница '.($_GET['offset']/CONF_PRODUCTS_PER_PAGE+1);
        } 
        $smarty->assign("meta_title", $row[4]);
        $smarty->assign("meta_keywords", $row[5]);
        $smarty->assign("meta_desc", $row[6]);
        if ($row[8] != '') $smarty->assign("rel_canonical", $row[8]);
        //sort options
        $sort_options['sort_values'] = Array($row[7] . "&amp;sort=name&amp;order=ASC", $row[7] . "&amp;sort=name&amp;order=DESC", $row[7] . "&amp;sort=Price&amp;order=ASC", $row[7] . "&amp;sort=Price&amp;order=DESC", $row[7] . "&amp;sort=customers_rating&amp;order=DESC", $row[7] . "&amp;sort=in_stock&amp;order=DESC", $row[7] . "&amp;sort=in_stock&amp;order=ASC", $row[7] . "&amp;sort=product_code&amp;order=ASC");
        $sort_options['sort_names'] = Array(ADMIN_SORT_BY_NAME_ASC, ADMIN_SORT_BY_NAME_DESC, ADMIN_SORT_BY_PRICE_ASC, ADMIN_SORT_BY_PRICE_DESC, ADMIN_SORT_BY_RATING, ADMIN_SORT_BY_IN_STOCK, ADMIN_SORT_BY_IN_STOCK_ASC, ADMIN_SORT_BY_CODE);
        $sort_options['sort_selected'] = $row[7] . "&amp;sort=" . $_SESSION["sort"] . "&amp;order=" . $_SESSION["order"];
        $smarty->assign("sort_options", $sort_options);
    } else {
        header("Location: http://" . CONF_SHOP_URL . "/404/"); //category not found
        exit;
    }
    $smarty->assign("main_content_template", "category.tpl.html");
    //calculate a path to the category
    $path = array();
    $curr = $categoryID;
    do {
        $q = db_query("SELECT parent, name, hurl FROM " . CATEGORIES_TABLE . " WHERE enabled=1 and categoryID='" . $curr . "'") or die(db_error());
        $row = db_fetch_row($q);
        if ($row[2] != "" && CONF_CHPU) {
            $tmp = REDIRECT_CATALOG . "/" . $row[2];
        } else {
            $tmp = "index.php?categoryID=" . $curr;
        }
        $curr = $row[0]; //get parent ID
        $row[0] = $tmp;
        $path[] = $row;
    }
    while ($curr);
    //now reverse $path
    $path = array_reverse($path);
    $smarty->assign("product_category_path", $path);
    $smarty->assign("product_category_path_count", count($path) - 1);
    unset($row, $path);
    //show active products
    $g_count = db_r('SELECT count(P.productID) FROM `' . PRODUCTS_TABLE . '` AS P LEFT JOIN `' . CATEGORIY_PRODUCT_TABLE . '` AS CP USING (productID) INNER JOIN `' . CATEGORIES_TABLE . '` AS C ON (P.categoryID = C.categoryID) WHERE (P.categoryID =' . (int)$categoryID . ' OR CP.categoryID =' . (int)$categoryID . ') AND P.enabled =1 AND C.enabled =1');
    $sql_show_active_products = "SELECT " . PRODUCTS_TABLE . ".categoryID, " . PRODUCTS_TABLE . ".name, brief_description, customers_rating, Price, picture, in_stock, thumbnail, customer_votes, big_picture, list_price, " . PRODUCTS_TABLE . ".productID, product_code, " . PRODUCTS_TABLE . ".hurl, items_sold, " . PRODUCTS_TABLE . ".brandID, " . BRAND_TABLE . ".name, " . BRAND_TABLE . ".hurl FROM " . PRODUCTS_TABLE . ' LEFT JOIN ' . BRAND_TABLE . " USING(brandID) WHERE " . PRODUCTS_TABLE . '.categoryID=' . (int)$categoryID . ' and enabled=1';
    $sql_notfiltr_filtr = $sql_show_active_products;
    $sql_show_active_products.= " GROUP BY `" . PRODUCTS_TABLE . '`.`productID` ORDER BY ' . PRODUCTS_TABLE . "." . $_SESSION["sort"] . " " . $_SESSION["order"];
    #$q_show_active_products = db_query($sql_show_active_products);
    $smarty->assign("catalog_navigator", NULL);
    $smarty->assign("products_to_show", NULL);
    $smarty->assign("products_to_show_count", NULL);
    if ($g_count) // there are products in the category
    {
        if ($offset > $g_count) $offset = 0;
        //fetch all products
        $result = array();
        $i = 0;
        $idp = 0;
        $sql = 'SELECT P.*,B.name brand_name, B.hurl brand_hurl, count(R.reviewID) count_review FROM `' . PRODUCTS_TABLE . '` AS P LEFT JOIN `' . CATEGORIY_PRODUCT_TABLE . '` AS CP USING (productID) LEFT JOIN `' . REVIEW_TABLE . '` as R USING(productID) LEFT JOIN `' . BRAND_TABLE . '` as B USING (brandID)  INNER JOIN `' . CATEGORIES_TABLE . '` AS C ON (P.categoryID = C.categoryID) WHERE (P.categoryID =' . (int)$categoryID . ' OR CP.categoryID =' . (int)$categoryID . ') AND P.enabled =1 AND C.enabled =1 GROUP BY `P`.`productID` ORDER BY P.' . $_SESSION['sort'] . ' ' . $_SESSION['order'];
        if (!isset($_GET['show_all'])) $sql.= ' LIMIT ' . $offset . ' , ' . CONF_PRODUCTS_PER_PAGE;
        $result=products_to_show($sql);
        $idp = '(' . substr($result['id_products'], 0, strlen($result['id_products']) - 1) . ')';
        $smarty->assign("products_to_show", $result['result']);
        $smarty->assign("products_to_show_count", count($result['result']));
	$smarty->assign("products_found", $g_search_count);
       
        unset($result); 
        $options_info=options_list($idp,CONF_SHOW_PRODUCT_VARIANTS_INSTOCK);
        $smarty->assign("options",$options_info['options']);
        $smarty->assign("p_default", $options_info['pic_default']);
        unset($options, $frow, $sql_op, $idp, $row);
        //number of products to show on this page
        if (!isset($_GET["show_all"])) {
            $min = CONF_PRODUCTS_PER_PAGE;
            if ($min > $g_count - $offset) $min = $g_count - $offset;
        } else {
            $min = $g_count;
            $offset = "show_all";
        }
        $smarty->assign("products_to_show_count", $min);
        unset($min);
        $navigator = ""; //navigation links
        showNavigator($g_count, $offset, CONF_PRODUCTS_PER_PAGE, $curr_url . "&amp;", $navigator);
        $smarty->assign("catalog_products_count", $g_count);
        $smarty->assign("catalog_navigator", $navigator);
        unset($navigator, $g_count);
    } else if (CONF_SHOW_BEST_CHOICE == 1) //there are no items in the category. search for items in it's subcategories if CONF_SHOW_BEST_CHOICE is set
    {
        $sub_categ = get_Subs($categoryID);
        if (count($sub_categ)) {
            $g_count = db_r('SELECT count(P.productID) FROM `' . PRODUCTS_TABLE . '` AS P LEFT JOIN `' . CATEGORIY_PRODUCT_TABLE . '` AS CP USING (productID) INNER JOIN `' . CATEGORIES_TABLE . '` AS C ON (P.categoryID = C.categoryID) WHERE (P.categoryID in (' . add_in($sub_categ) . ') OR CP.categoryID in (' . add_in($sub_categ) . ')) AND P.enabled =1 AND C.enabled =1');
        }
        if ($g_count) // there are products in the category
        {
            if ($offset > $g_count) $offset = 0;
            //fetch all products
            $result = array();
            $i = 0;
            $idp = 0;
            $sql = 'SELECT P.*,B.name brand_name, B.hurl brand_hurl, count(R.reviewID) count_review FROM `' . PRODUCTS_TABLE . '` AS P LEFT JOIN `' . CATEGORIY_PRODUCT_TABLE . '` AS CP USING (productID) LEFT JOIN `' . REVIEW_TABLE . '` as R USING(productID) LEFT JOIN `' . BRAND_TABLE . '` as B USING (brandID)  INNER JOIN `' . CATEGORIES_TABLE . '` AS C ON (P.categoryID = C.categoryID) WHERE (P.categoryID in (' . add_in($sub_categ) . ') OR CP.categoryID in (' . add_in($sub_categ) . ')) AND P.enabled =1 AND C.enabled =1 GROUP BY `P`.`productID` ORDER BY P.' . $_SESSION['sort'] . ' ' . $_SESSION['order'];
            if (!isset($_GET['show_all'])) $sql.= ' LIMIT ' . $offset . ' , ' . CONF_PRODUCTS_PER_PAGE;
            $result=products_to_show($sql);
            $idp = '(' . substr($result['id_products'], 0, strlen($result['id_products']) - 1) . ')';
            $smarty->assign("products_to_show", $result['result']);
            $smarty->assign("products_to_show_count", count($result['result']));
            unset($result);
            $options_info=options_list($idp,CONF_SHOW_PRODUCT_VARIANTS_INSTOCK);
            $smarty->assign("options",$options_info['options']);
            $smarty->assign("p_default", $options_info['pic_default']);

            //number of products to show on this page
            if (!isset($_GET["show_all"])) {
                $min = CONF_PRODUCTS_PER_PAGE;
                if ($min > $g_count - $offset) $min = $g_count - $offset;
            } else {
                $min = $g_count;
                $offset = "show_all";
            }
            $navigator = ""; //navigation links
            showNavigator($g_count, $offset, CONF_PRODUCTS_PER_PAGE, $curr_url . "&amp;", $navigator);
            $smarty->assign("catalog_products_count", $g_count);
            $smarty->assign("catalog_navigator", $navigator);
            $smarty->assign("products_to_show_best_choice", min($g_count, CONF_PRODUCTS_PER_PAGE));
        }
    }
}
?>