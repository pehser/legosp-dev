<?php

/*****************************************************************************
 *                                                                           *
 * Lego SP - lego.shop-script.org                                            *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/
	// front-end homepage
    if (!$categoryID && !isset($productID))
    {   
        $f = file("./core/aux_pages/index");
	        $out = implode("", $f);
        #if (DB_CHARSET!='cp1251') $out=win2utf($out);   
	$smarty->assign("index", $out);  
	//special offers
	$result = array();
	$sql='SELECT P.productID, P.name, P.picture, P.Price real_PRICE, cast(P.Price+IFNULL((select sum(`price_surplus`) from `'.PRODUCT_OPTIONS_V_TABLE.'` where `productID`=P.productID and `default`=1),0) as decimal(10,2)) Price, list_price, brief_description, hurl FROM '.SPECIAL_OFFERS_TABLE." as st join ".PRODUCTS_TABLE." as P USING (productID) where picture!='' ";
	if (!CONF_SHOW_PRODUCT_INSTOCK)
	 $sql .=' and P.in_stock>0 ';
	$sql .=' order by sort_order';
	$result=products_to_show($sql);
	unset($sql);
	$smarty->assign("special_offers",$result['result']);
   }

?>