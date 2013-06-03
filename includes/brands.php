<?php
/*****************************************************************************
*                                                                           *
* Lego SP - lego.shop-script.org                                            *
* Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  *
*                                                                           *
****************************************************************************/
$brandres = Array();
$get_brand = 0;
$i = 0; 
$result = db_query("SELECT * FROM " . BRAND_TABLE. ' where enabled=1 group by sort  ASC') or die(db_error());
if (isset($_GET['brand'])) $get_brand = $_GET['brand'];
elseif (isset($_GET['brand_hurl'])) $get_brand = $_GET['brand_hurl'] . '/';
while ($row = db_fetch_row($result)) {
    $brandres[$i][0] = $row[0];
    $brandres[$i][1] = $row[1];
    $brandres[$i][3] = $row[3];
    $brandres[$i][4] = $row[5];
    if ($row[9] != "" && CONF_CHPU) {
        $brandres[$i][2] = REDIRECT_BRAND . "/" . $row[9];
    } else {
        $brandres[$i][2] = "index.php?brand=" . $row[0];
    }
    $i++;
}
$smarty->assign("brand_list", $brandres);
//show all products of selected brand
if (isset($_GET[REDIRECT_BRAND . '_hurl']) && trim($_GET[REDIRECT_BRAND . '_hurl'])) $_GET['brand'] = $_GET[REDIRECT_BRAND . '_hurl'] . '/';
if (isset($_GET['brand']) && $_GET['brand']) {
     
    $selected_brand=db_assoc("SELECT * FROM " . BRAND_TABLE. ' where enabled=1 and (brandID='.(int)$_GET['brand'].' or hurl='.int_text($_GET['brand']).')');
    //get selected brand info
    if (!$selected_brand) {
        header("Location: http://" . CONF_SHOP_URL . "/404/");
        exit;
    } else {
    
        if ($selected_brand['hurl'] != "" && CONF_CHPU) $selected_brand['hurl'] = REDIRECT_BRAND . "/" . $selected_brand['hurl'];
        else $selected_brand['hurl'] = "index.php?brand=" . $selected_brand['brandID'];
        $smarty->assign("selected_brand", $selected_brand);
        $smarty->assign("meta_title", $selected_brand['meta_title']);
        $smarty->assign("meta_keywords", $selected_brand['meta_keywords']);
        $smarty->assign("meta_desc", $selected_brand['meta_desc']);
        $smarty->assign("rel_canonical", $selected_brand['canonical']);
        //sort options
        $sort_options['sort_values'] = Array($selected_brand['hurl'] . "&amp;sort=name&amp;order=ASC", $selected_brand['hurl'] . "&amp;sort=name&amp;order=DESC", $selected_brand['hurl'] . "&amp;sort=Price&amp;order=ASC", $selected_brand['hurl'] . "&amp;sort=Price&amp;order=DESC", $selected_brand['hurl'] . "&amp;sort=customers_rating&amp;order=DESC", $selected_brand['hurl'] . "&amp;sort=in_stock&amp;order=DESC", $selected_brand['hurl'] . "&amp;sort=product_code&amp;order=ASC");
        $sort_options['sort_names'] = Array(ADMIN_SORT_BY_NAME_ASC, ADMIN_SORT_BY_NAME_DESC, ADMIN_SORT_BY_PRICE_ASC, ADMIN_SORT_BY_PRICE_DESC, ADMIN_SORT_BY_RATING, ADMIN_SORT_BY_IN_STOCK, ADMIN_SORT_BY_CODE);
        $sort_options['sort_selected'] = $selected_brand[9] . "&amp;sort=" . $_SESSION["sort"] . "&amp;order=" . $_SESSION["order"];
        $smarty->assign("sort_options", $sort_options);
    }
    //path to brand
    
    
    
    $path= array($selected_brand['hurl'],$selected_brand['name']);
    $smarty->assign("product_category_path", $path);
    $smarty->assign("main_content_template", "brands.tpl.html");
    $g_count = db_r("SELECT count(*) FROM " . PRODUCTS_TABLE . " WHERE " . $catw . " enabled=1 and brandID=".(int)$selected_brand['brandID']) or die(db_error());
    $smarty->assign("catalog_navigator", NULL);
    $smarty->assign("products_to_show", NULL);
    $smarty->assign("products_to_show_count", NULL);
    if ($g_count) // there are products in the category
    {
        if ($offset > $g_count) $offset = 0;
        $sql = 'SELECT P.*,B.name brand_name, B.hurl brand_hurl, count(R.reviewID) count_review FROM `' . PRODUCTS_TABLE . '` AS P LEFT JOIN `' . REVIEW_TABLE . '` as R USING(productID) LEFT JOIN `' . BRAND_TABLE . '` as B USING (brandID)  INNER JOIN `' . CATEGORIES_TABLE . '` AS C ON (P.categoryID = C.categoryID) WHERE P.brandID=' .(int)$selected_brand['brandID'] . ' AND P.enabled =1 AND C.enabled =1 GROUP BY `P`.`productID` ORDER BY P.' . $_SESSION['sort'] . ' ' . $_SESSION['order'];
        if (!isset($_GET['show_all'])) $sql.= ' LIMIT ' . $offset . ' , ' . CONF_PRODUCTS_PER_PAGE;
        $result=products_to_show($sql);
        $idp = '(' . substr($result['id_products'], 0, strlen($result['id_products']) - 1) . ')';
        $smarty->assign("products_to_show", $result['result']);
        $smarty->assign("products_to_show_count", count($result['result']));
        unset($result);
        $options_info = options_list($idp, CONF_SHOW_PRODUCT_VARIANTS_INSTOCK);
        $smarty->assign("options", $options_info['options']);
        $smarty->assign("p_default", $options_info['pic_default']);
        //number of products to show on this page
        if (!isset($_GET["show_all"])) {
            $min = CONF_PRODUCTS_PER_PAGE;
            if ($min > $g_count - $offset) $min = $g_count - $offset;
        } else {
            $min = $g_count;
            $offset = "show_all";
        }
        #$smarty->assign("products_to_show_count", $min);
        $navigator = ""; //navigation links
        showNavigator($g_count, $offset, CONF_PRODUCTS_PER_PAGE, $selected_brand[9] . "&amp;", $navigator);
        //showNavigator($g_count, $offset, CONF_PRODUCTS_PER_PAGE, $nav_path."&amp;",$navigator);
        $smarty->assign("catalog_navigator", $navigator);
    }
}
?>