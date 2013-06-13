<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 Supme. All rights reserved.                     *
 *                                                                           *
 ****************************************************************************/

	// payments page

if (isset($_GET["payment"]))
{

    	if (isset($_POST["payment_type"]))
		$payment_type = $_POST["payment_type"];
	else	$payment_type = 0;

	//payments
	$q = db_query("SELECT * FROM ".PAYMENT_TABLE." LEFT JOIN ".PAYOPTION_TABLE." USING (payID)") or die (db_error());
	$tmp_arr = Array();
	while ($row = mysql_fetch_assoc($q))
	  {

	    $tmp_arr[$row['type']."_".$row['payoption']] = $row['payvalue'];
	    $smarty -> assign($row['type']."_".$row['payoption'], $row['payvalue']);
	  }

	//price
	$payment['id'] = $_SESSION["order_id"];

	$q = db_query("SELECT Price, Quantity FROM ".ORDERED_CARTS_TABLE.' WHERE orderID='.(int)$_SESSION["order_id"]) or die(db_error());
        while ($row = db_fetch_row($q)) $total += $row[0]*$row[1];

	$addprice = round($total/100*$tmp_arr[$payment_type."_addprice"], 2);

	$payment['addprice'] = $tmp_arr[$payment_type."_addprice"];

	$tmp_price = explode(".", $addprice+$total);
	$payment['price'] = show_price($total);
	$payment['price_rub'] = $tmp_price[0];
	$payment['price_kop'] = $tmp_price[1];
	if (!$payment['price_kop']) {$payment['price_kop'] = 0;}

	$tmp_price_us = explode(".", round(($addprice+$total)/CURR_USD, 2));
	$payment['price_usd'] = $tmp_price_us[0];
	$payment['price_usc'] = $tmp_price_us[1];
	if (!$payment['price_usc']) {$payment['price_usc'] = 0;}

	$smarty->assign("payment", $payment);

	$tmp_arr['all_description'] = str_replace("%orderid%", $_SESSION["order_id"], $tmp_arr['all_description']);
	$tmp_arr['all_description'] = str_replace("%ordertotal%", $payment['price'], $tmp_arr['all_description']);
	$smarty -> assign("payment_description", $tmp_arr['all_description']);

	//

	$robox_crc = md5($tmp_arr['robox_login'].':'.(float)$payment['price_rub'].':'.(int)$_SESSION['order_id'].':'.$tmp_arr['robox_pass']);
	$smarty -> assign("robox_crc", $robox_crc);

	$smarty->assign("payment_type", $payment_type);
	$smarty->assign("payment_name", $tmp_arr[$payment_type.'_name']);

        $smarty->assign("main_content_template", "payment.tpl.html");
}
?>