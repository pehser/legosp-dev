<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 WebAsyst LLC. All rights reserved.                     *
 *                                                                           *
 ****************************************************************************/
       

	//define statments
	if (!isset($_REQUEST["type"])) $_REQUEST["type"] = "";

	//ajax flag

	$ajax_flag = $_REQUEST["type"] == "ajax" ? 1 : 0;

	// shopping cart

	if ($ajax_flag) include("../cfg/ajax_connect.inc.php"); //section fo ajax

	//calculate shopping cart value
         
	if (isset($_GET["shopping_cart"]) || isset($_POST["shopping_cart"]))
	{
                
                
               # echo "yes"; exit;
		//calculate a path
		$path = Array();
		if (CONF_CHPU) $row[0] = "cart/";
		else  $row[0] = 'index.php?shopping_cart=yes';
		$row[1] = CART_TITLE;
		$path[] = $row;

/* !ajax */	if (!$ajax_flag) $smarty->assign("product_category_path",$path);

		if (isset($_GET["add2cart"]) && $_GET["add2cart"] !="") //add product to cart with productID=$add or hurl
		{
			$q = db_query("select in_stock, productID from ".PRODUCTS_TABLE." WHERE productID='".$_GET["add2cart"]."' OR hurl='".$_GET["add2cart"]."'") or die (db_error());
			$is = db_fetch_row($q); 
			$get_add2cart = $is[1];
			$is = $is[0];
			if (!isset($_GET['kol'])) $_GET['kol']=1;
                        $pcount= (CONF_FLOAT_QUANTITY == 1) ? (float)$_GET['kol']:(int)$_GET['kol'];
                        
			//$_SESSION[gids] contains product IDs
			//$_SESSION[counts] contains product quantities ($_SESSION[counts][$i] corresponds to $_SESSION[gids][$i])
			//$_SESSION[gids][$i] == 0 means $i-element is 'empty'

			if (!isset($_SESSION["gids"]))
			{
				
				$_SESSION["gids"] = array();
                                $_SESSION["counts"] = array();
                                $_SESSION["opt"] = array();
                                
			}

			//check for current item in the current shopping cart content
			$i=0;
			#while ($i<count($_SESSION["gids"])
                        /*if (!CONF_SHOW_ADD2CART_INSTOCK) 
                         if $is-*/ 
                        $i=0;
                        foreach ($_SESSION["gids"] as $key => $ar_gids)
                        {
                          if ($ar_gids==$get_add2cart && $_SESSION["opt"][$key] == $_GET['opt']) break;
                          $i++;
                        }
                        /*for ($i=0; $i<count($_SESSION["gids"]); $i++)
                        {  
                          
                         if (($_SESSION["gids"][$i] == $get_add2cart) and ($_SESSION["opt"][$i] == $_GET['opt'])) 
                         {
                           
                           break;
                          }
                         
                        } */
			if ($i < count($_SESSION["gids"])) //increase current product's quantity
			{
				if (!CONF_SHOW_ADD2CART_INSTOCK) if (($is-$_SESSION["counts"][$key]-$pcount)<0) {echo "-1"; return 0;}
				$_SESSION["counts"][$key]+=$pcount;
			}
			else //no item - add it to $gids array
			{
				if (!CONF_SHOW_ADD2CART_INSTOCK) if (($is-$pcount)<0) {echo "-1"; return 0;}
				$_SESSION["gids"][] = $get_add2cart;
                                
                                $_SESSION["opt"][] = $_GET['opt']; 
                                $Price=db_r('select Price from '.PRODUCTS_TABLE.' where productID='.$get_add2cart);
                                $Parametrs_array = explode(',',$_GET['opt']);
                                if (count($Parametrs_array))
                                {  
                                  foreach($Parametrs_array as $Parametrs)
                                  {
                                    $Parametrs_opt_array = explode(':',$Parametrs);
                                    if (count($Parametrs_opt_array)==2) 
                                     {
                                        
                                       $Price +=db_r('select price_surplus from '.PRODUCT_OPTIONS_V_TABLE.' where variantID='.$Parametrs_opt_array[1].' and productID='.$get_add2cart);
                                         
                                     }
                                  }
                                }
                                $_SESSION["newprice"][]=($Price);
				$_SESSION["counts"][] = $pcount;
 			}
                

/* !ajax */		if (!$ajax_flag)
                        {
                         if (isset($_GET['modal'])) header("Location: http://".CONF_SHOP_URL.'/index.php?shopping_cart=yes&modal=1');
                         elseif (CONF_CHPU) header("Location: http://".CONF_SHOP_URL."/cart/");
                         else header("Location: http://".CONF_SHOP_URL."/index.php?shopping_cart=yes");
                        }
                        
                         
                        
		}


		if (isset($_GET["remove"]) && $_GET["remove"] > 0) //remove from cart product with productID == $remove
		{
		        #session_unset();
		        echo "<pre>";
		        print_r($_SESSION);  
		        echo "</pre>";
		        if (isset($_SESSION["gids"]) && count($_SESSION["gids"])>0)
		        $k=array_search((int)$_GET["remove"],$_SESSION["gids"]);
		        #echo "d";
		        #exit;
		        if ($k!==FALSE)
		        unset($_SESSION["gids"][$k],$_SESSION["count"][$k],$_SESSION["opt"][$k],$_SESSION["min_q"][$k],$_SESSION["newprice"][$k]);
		        
/* !ajax */		if (!$ajax_flag) 
                         if (CONF_CHPU) header("Location: http://".CONF_SHOP_URL."/cart/");
                         else header("Location: http://".CONF_SHOP_URL."/index.php?shopping_cart=yes");
		}



		 if (isset($_POST["update"])) //update shopping cart content
		 {

			foreach ($_POST as $key => $val)
				if (strstr($key, "count_"))
				{
                                   
					if ($val > 0)
					{
						for ($i=0; $i<count($_SESSION["gids"]); $i++)
						{
							if ($_SESSION["gids"][$i] == str_replace("count_","",$key))
							{

                                                           $_SESSION["counts"][$i] = (CONF_FLOAT_QUANTITY == 1) ? (float)$val:(int)$val;
							}
						}
					}
					else //remove
					{
						$i=0;
						while ($_SESSION["gids"][$i] != str_replace("count_","",$key) && $i<count($_SESSION["gids"])) $i++;
/* ajax */					$json_data['cart']['hide'][] = $_SESSION["gids"][$i];
						$_SESSION["gids"][$i] = 0;
					}
				  }
			//shipping
			if (isset($_POST["shipping"])) // && $_POST["shipping"] > 0)
				{
				$q = db_query("SELECT value, code FROM ".SHARE_TABLE." WHERE id='".$_POST["shipping"]."'") or die (db_error());
				if ($row = db_fetch_row($q))
				   {
                                        $row[0]=$row[0]/CURRENCY_val;
					$_SESSION["shipping"][0] = $_POST["shipping"];
					$_SESSION["shipping"][1] = $row[0]; ;
					$_SESSION["shipping"][2] = $row[1];
					$_SESSION["shipping"][3] = show_price($row[0]);
				   }
				}
                        else 
                        {
                                $q = db_query("SELECT id, value, code FROM ".SHARE_TABLE." WHERE `default`=1") or die (db_error());
				if ($row = db_fetch_row($q))
				   {
                                       $row[1]=$row[1]/CURRENCY_val;
					$_SESSION["shipping"][0] = $row[0];
					$_SESSION["shipping"][1] = $row[1]; ;
					$_SESSION["shipping"][2] = $row[2];
					$_SESSION["shipping"][3] = show_price($row[1]);
				   }
				 
                        }  
			if ((!isset($_SESSION["shipping"])) || ($_POST["shipping"] == 0)) {$_SESSION["shipping"] = Array('0', '0', STRING_SHIPPING_SELF, show_price(0));}

		//		else
		//		   {
		//			if ((!isset($_SESSION["shipping"])) || ($_POST["shipping"] == 0)) {$_SESSION["shipping"] = Array('0', '0', STRING_SHIPPING_SELF, show_price(0));}
		//		   }
		//	else {if (isset($_SESSION["shipping"])) unset($_SESSION["shipping"]);}

			//present
			if (isset($_POST["presents"]))
				$_SESSION["present"][0] = $_POST["presents"];
			else	if (isset($_SESSION["present"])) unset($_SESSION["present"]);

			//fast order
			if (!isset($_POST["get_fast_order"])) $_POST["get_fast_order"] = 0;
			if (!strcmp($_POST["get_fast_order"], "on")) $_POST["get_fast_order"] = 1; else $_POST["get_fast_order"] = 0;

			if ($_POST["get_fast_order"] > 0) {$_SESSION["get_fast_order"] = CONF_FAST_ORDER_COST;}
				else {unset($_SESSION["get_fast_order"]);}

/* !ajax */		#if (!$ajax_flag) header("Location: http://".CONF_SHOP_URL."/cart/");

		}
                elseif (!isset($_SESSION["shipping"]))
                {
                  
                  $q = db_query("SELECT id, value, code FROM ".SHARE_TABLE." WHERE `default`=1") or die (db_error());
				if ($row = db_fetch_row($q))
				   {
                                        $row[0]=$row[0]/CURRENCY_val;
					$_SESSION["shipping"][0] = $row[0];
					$_SESSION["shipping"][1] = $row[1]; 
					$_SESSION["shipping"][2] = $row[2];
					$_SESSION["shipping"][3] = show_price($row[1]);
				   }  
                }  
		if (isset($_GET["clear_cart"])) //completely clear shopping cart
		{
			//clear cart
			if (isset($_SESSION["gids"])) unset($_SESSION["gids"]);
			if (isset($_SESSION["counts"])) unset($_SESSION["counts"]);
                        if (isset($_SESSION["opt"])) unset($_SESSION["opt"]);
                        if (isset($_SESSION["newprice"])) unset($_SESSION["newprice"]);
			if (isset($_SESSION["shipping"])) unset($_SESSION["shipping"]);
			if (isset($_SESSION["get_fast_order"])) unset($_SESSION["get_fast_order"]);
			if (isset($_SESSION["discount"])) unset($_SESSION["discount"]);
			if (isset($_SESSION["present"])) unset($_SESSION["present"]);

/* !ajax */		if (!$ajax_flag) if (CONF_CHPU) header("Location: http://".CONF_SHOP_URL."/cart/");
                         else header("Location: http://".CONF_SHOP_URL."/index.php?shopping_cart=yes");
		}



		//shopping cart items count
		$c = 0; $in_stock=array();
		if (isset($_SESSION["gids"]))
			for ($j=0; $j<count($_SESSION["gids"]); $j++)
				if (($_SESSION["gids"][$j]) ) 
                                  {
                                    $c += $_SESSION["counts"][$j];
                                    $in_stock[$_SESSION["gids"][$j]]=db_r("select in_stock from ".PRODUCTS_TABLE." WHERE productID=".$_SESSION["gids"][$j]);
                                  }
                if (!$ajax_flag)  {
                 $smarty->assign("in_stock", $in_stock);     
               }
                 
		//not empty?
		if (isset($_SESSION["gids"]) && $c)
		{
			$k = 0; $rk=0; //total cart value 
			$products = Array(); $opt=$_SESSION["opt"]; $variants='';
                        foreach ($_SESSION["gids"] as $key => $cat_gids)
			  if ($cat_gids)
			  {
				$q = db_query("SELECT name, Price, product_code, hurl, picture,min_qunatity FROM ".PRODUCTS_TABLE." WHERE productID='".$cat_gids."'") or die (db_error());
				if ($r = db_fetch_row($q))
				{

				if ($r[3] != "") {$r[3] = REDIRECT_PRODUCT."/".$r[3];} else {$r[3] = "index.php?productID=".$cat_gids;}
				if (file_exists("./products_pictures/".$r[4]) && preg_match('/\.(jpg|jpeg|gif|png)$/i', $r[4],$fend))
				  {
				    $s=preg_replace('/\.(jpg|jpeg|gif|png)$/i','',$r[4]);
				    $r[4] = $s.'-SC'.$fend[0];
				  }
				else
				  {$r[4] = "";}
                                $_SESSION['min_q'][$key]=$r[5];
                                if ($_SESSION["opt"][$key])
                                { 
                                  
                                  preg_match_all("'(?P<option>\w+):(?P<variant>\d+)'",$_SESSION["opt"][$key],$tmp);
                                  $variants='(';
                                  for( $ti=0; $ti<count($tmp['option']); $ti++)
                                  {
                                   $o=db_query("select name from ".PRODUCT_OPTIONS_TABLE." where optionID=".$tmp['option'][$ti]);
                                   $ro = db_fetch_row($o);   
                                   $variants .=$ro[0];
                                   $v=db_query("select name from ".PRODUCT_OPTIONS_VAL_TABLE." where variantID=".$tmp['variant'][$ti]);   
                                   $ro = db_fetch_row($v);   
                                   $variants .=':'.$ro[0]; 
                                   $v=db_query("select picture from ".PRODUCT_OPTIONS_V_TABLE." where variantID=".$tmp['variant'][$ti]." and productID=".$cat_gids); 
                                   $ro = db_fetch_row($v); 
                                   if (isset($ro[1]) && !trim($ro[1]) && (file_exists("./products_pictures/".$ro[0].'-SC.jpg'))) $r[4]=$ro[0].'-SC.jpg';
                                     
                                
                                   if (($ti+1)<count($tmp['option'])) $variants .=',';
                                    unset($ro,$o,$v); 
                                  } 
                                  unset($tmp); 
                                   $variants .=')';
                                  
                                 }
                                $real_p=$r[1]; 

                                if ($r[1]!=$_SESSION['newprice'][$key] && $_SESSION['newprice'][$key]) { $r[1]=$_SESSION['newprice'][$key] ; $real_p=$_SESSION['newprice'][$key];}
                                $r[1]=$r[1]/CURRENCY_val; 
                                
                               
                                if (!isset($variants)) $variants='';
				$tmp = array("id"=>$cat_gids, "name"=>$r[0].$variants, "quantity"=>$_SESSION["counts"][$key], "cost"=>show_price($_SESSION["counts"][$key]*$r[1]), "product_code"=>$r[2], "hurl"=>$r[3], "picture"=>$r[4],"min_q"=>$r[5]);
                                unset($variants);
				$products[] = $tmp;

				$k += $_SESSION["counts"][$key]*$r[1];
                                $rk += $_SESSION["counts"][$key]*$real_p;
				}
                                
                          #preg_match_all("'(^|;)*($|:)'",$_SESSION["opt"][$i],$tmp);
                            
			  }
                        
			//discount
                        
			$q = db_query("SELECT id, type_val FROM ".SHARE_TABLE." WHERE type='1' AND value<'".$rk."' ORDER BY value DESC") or die (db_error());
			
			if ($row_d = db_fetch_row($q)) 
			    {
                                
				$row_d[2] = ($k / 100 * ($row_d[1]));
				$row_d[3] = show_price($row_d[2]);
    		                $_SESSION["discount"] = $row_d;
        			$k -= $row_d[2];
/* !ajax */			if (!$ajax_flag) $smarty->assign("discount", $_SESSION["discount"]);
				$json_data['cart']['discount'] = $_SESSION["discount"];
			    }
			else {if (isset($_SESSION["discount"])) unset($_SESSION["discount"]);}

                        
			//present
			$present_list = Array();
			$q = db_query("SELECT id, type_val, ".PRODUCTS_TABLE.".name, ".PRODUCTS_TABLE.".hurl FROM ".SHARE_TABLE." JOIN ".PRODUCTS_TABLE." ON ".PRODUCTS_TABLE.".productID=type_val WHERE type='5' AND value<'".$k."' ORDER BY value DESC") or die (db_error());
			
			if ($q)
			{
			  while ($row = db_fetch_row($q)) 
			    {
				if ($row[3] != "") {$row[3] = REDIRECT_PRODUCT."/".$row[3];} else {$row[3] = "index.php?productID=".$row[1];}
				$present_list[] = $row;
				if ((isset($_POST["presents"]) && $_POST["presents"] == $row[0]) || CONF_PRESENT_SELECT == 0 && !isset($_SESSION['present'])) 
                                   $_SESSION['present'] = $row;
			    }
                         
/* !ajax */		 if (!$ajax_flag) $smarty->assign("present_list", $present_list);
			}
/* !ajax */		if (!$ajax_flag) $smarty->assign("present_selected", $_SESSION['present'][0]);

			//shipping

			if (($k < CONF_SHIPPING_FREE_VAL) || (CONF_SHIPPING_FREE_ON == 0))
			    {
					$shiping_list = Array();

					$q = db_query("SELECT id, value, code FROM ".SHARE_TABLE." WHERE type=3 ORDER BY code ASC") or die (db_error());
					while ($row=db_fetch_row($q))
						{
                                                $row[1]=$row[1]/CURRENCY_val;
						$row[3] = show_price($row[1]);
						$shipping_list[] = $row;
						}

					if (!isset($_SESSION["shipping"])) {$_SESSION["shipping"] = Array('0', '0', STRING_SHIPPING_SELF, show_price(0));}

					$k += $_SESSION["shipping"][1];
					$_SESSION["shipping"][3]=show_price($_SESSION["shipping"][1]);
/* !ajax */				if (!$ajax_flag) $smarty->assign("shipping_selected", $_SESSION["shipping"]);
			    }
			else
			    {
/* !ajax */			if (!$ajax_flag) $smarty->assign("shipping_free", 1);
				$_SESSION["shipping"] = Array('0', '0', STRING_SHIPPING_FREE, show_price(0));
			    }

/* !ajax */		if (!$ajax_flag) $smarty->assign("shipping_list", $shipping_list);

			//fast order
                        if (isset($_SESSION["get_fast_order"])) $k += $_SESSION["get_fast_order"];
/* !ajax */		if (!$ajax_flag) $smarty->assign("get_fast_order", $_SESSION["get_fast_order"]);

			//total...
                       
/* !ajax */		if (!$ajax_flag) $smarty->assign("cart_content", $products);
/* !ajax */		if (!$ajax_flag) $smarty->assign("cart_total", show_price($k));
                        else $k -=$_SESSION["shipping"][1];
			$json_data['info']['count'] = $c;
			$json_data['info']['cost'] = show_price($k);

/* ajax */		$json_data['cart_empty'] = 0;

		}
		else
		{
/* !ajax */		if (!$ajax_flag) $smarty->assign("cart_total", "");
		}

		$json_data['info']['count'] = $c;
		$json_data['info']['cost'] = show_price($k);
                if (DB_CHARSET!='cp1251') $json_data['info']['cost']=Utf8Win($json_data['info']['cost']);    
/* !ajax */	if (!$ajax_flag) 
                {
                  
                    
                     if (CONF_CHPU) $urln='cart/order/'; 
                     else $urln='index.php?order_custinfo=yes';
                   
                  $smarty->assign("nurl", $urln);
  

                   if (isset($_GET['modal']))
                   {
                     $smarty->display("./css/css_".CONF_COLOR_SCHEME."/theme/shopping_cart.tpl.html");    
                     exit; 
                   }  
                   else $smarty->assign("main_content_template", "shopping_cart.tpl.html");
                }   
	if ($ajax_flag)  echo json_safe_encode($json_data);

	}
?>