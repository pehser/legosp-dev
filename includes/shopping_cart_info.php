<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 WebAsyst LLC. All rights reserved.                     *
 *                                                                           *
 ****************************************************************************/

	// shopping cart brief info

	//calculate shopping cart value
	$k=0;
	$cnt = 0;
	if (isset($_SESSION["gids"])) //...session vars
	{
	   foreach ($_SESSION["gids"] as $key => $id_p)
	   {
  	     $t = db_query("SELECT Price FROM ".PRODUCTS_TABLE." WHERE productID='".$id_p."'") or die (db_error());
	     $rr = db_fetch_row($t);
             if ($rr[0] !=$_SESSION['newprice'][$key] && $_SESSION['newprice'][$key]!=0) $rr[0]=$_SESSION['newprice'][$key]/CURRENCY_val ;
             else  $rr[0]=$rr[0]/CURRENCY_val;  
             $rr[0]=round($rr[0],2); 
	     $k += $_SESSION["counts"][$key] * $rr[0];
	     $cnt += $_SESSION["counts"][$key];
	   }
	}

	//minimal
      if (isset($_SESSION["discount"]))
      { 
        $disc=$_SESSION["discount"][1];
        $disc=$k*$disc/100;
        $k -=$disc;
      } 
     	$smarty->assign("shopping_cart_value", $k);
	$smarty->assign("shopping_cart_value_shown", show_price($k));
	$smarty->assign("shopping_cart_items", $cnt);

?>