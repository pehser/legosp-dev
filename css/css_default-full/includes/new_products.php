<?php
        if (isset($_GET["novinki"])) $limit = 20; else $limit = 2;
        $q = db_query("SELECT productID, ".PRODUCTS_TABLE.".name, Price, ".PRODUCTS_TABLE.".picture,in_stock,".PRODUCTS_TABLE.".hurl, ".CATEGORIES_TABLE.".enabled FROM ".PRODUCTS_TABLE." RIGHT JOIN ".CATEGORIES_TABLE." USING (categoryID) WHERE ".PRODUCTS_TABLE.".enabled='1' AND ".CATEGORIES_TABLE.".enabled='1' GROUP BY ".PRODUCTS_TABLE.".name ORDER BY productID DESC LIMIT 1,$limit") or die (db_error());
        $result = Array();

        while ($row = db_fetch_row($q))
         {

	if (!file_exists("./products_pictures/".$row[3]) || $row[3] == "")
	  {$row[3] = "";}
	else 
	  {
	    $s = rtrim($row[3], '.jpg');
	    $row[3] = $s."-H.jpg";
	  }


                if ($row[5] != "" && CONF_CHPU) 
                   $row[6] = REDIRECT_PRODUCT."/".$row[5];
                else
                   $row[6] = $row[5] = "index.php?productID=".$row[0];
                
                $row[7]=show_price($row[2]/CURRENCY_val);

                if (isset($_GET["novinki"])) 
                 {
                    if (($row[4] > 0) && (CONF_SHOW_ADD2CART > 0)) {$row[9]=1;}
	            else if ((CONF_SHOW_ADD2CART_INSTOCK>0) && (CONF_SHOW_ADD2CART>0)) {$row[9]=1;}
	            else {$row[9]=0;}
                 }

	if ($row[3] != "") $result[] = $row;
        }

         if (isset($_GET["novinki"])) 
         {
            $path = Array();
            if (CONF_CHPU){$par[0] = "./new/";}else{$par[0] = 'index.php?novinki=yes';}
            $par[1] = HOT_NEW;
            $path[] = $par;
            $smarty->assign("product_category_path",$path);

            $smarty->assign("main_content_template", "new_product_list.tpl.html");
         }

      $smarty->assign("new_products", $result);
?>