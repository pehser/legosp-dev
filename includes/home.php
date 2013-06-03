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
	$q = db_query('SELECT pt.productID, name, picture, Price,list_price, brief_description, hurl FROM '.SPECIAL_OFFERS_TABLE." as st left join ".PRODUCTS_TABLE." as pt on pt.productID=st.productID where picture!=''  order by sort_order") or die (db_error());
	while ($row1 = db_assoc_q($q))
	{
		
		if (file_exists("./products_pictures/".$row1['picture']) && preg_match('/\.(jpg|jpeg|gif|png)$/i', $row1['picture'],$fend))
		{
		   $s=preg_replace('/\.(jpg|jpeg|gif|png)$/i','',$row1['picture']);
		   $row1['picture'] = $s.'-S'.$fend[0];
                   $row1['Price'] = round($row1['Price']/CURRENCY_val,2);
		   $row1['Price'] = show_price($row1['Price']);
                   $row1['list_price'] = round($row1['list_price']/CURRENCY_val,2);
		   $row1['list_price'] = show_price($row1['list_price']); 

		   if ($row1['hurl'] != "" && CONF_CHPU) {$row1['hurl'] = REDIRECT_PRODUCT."/".$row1['hurl'];} else {$row1['hurl'] = "index.php?productID=".$row1['productID'];}
		   $result[] = $row1;
		}
		
	}
	unset($row1);
	$smarty->assign("special_offers",$result);
   }

?>