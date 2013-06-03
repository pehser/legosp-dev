<?php
       session_start();
       if (isset($_SESSION["order_id"]))
       {
        include("../cfg/general.inc.php");
	include("../cfg/connect.inc.php");
	include("../cfg/appearence.inc.php");
	include("../includes/database/mysql.php");
	include("../cfg/company.inc.php");
	include("../cfg/tables.inc.php");
	include("../cfg/product.inc.php");
	include("../cfg/shipping.inc.php");
	include("../cfg/functions.php");
	include_once ("./cfg/language_list.php");

	//current language session variable
if (!isset($_SESSION["current_language"]) || $_SESSION["current_language"] < 0 || $_SESSION["current_language"] > count($lang_list)) $_SESSION["current_language"] = 0; //set default language
//include a language file
if (isset($lang_list[$_SESSION["current_language"]]) && file_exists(ROOT_DIR . "/languages/" . $lang_list[$_SESSION["current_language"]]->filename)) include (ROOT_DIR . "/languages/" . $lang_list[$_SESSION["current_language"]]->filename); //include current language file
else {
    die("<font color=red><b>ERROR: Couldn't find language file!</b></font>");
}

	db_connect(DB_HOST,DB_USER,DB_PASS) or die (db_error());
	db_select_db(DB_NAME) or die (db_error());
        currency(); 
        
		$q = db_query("SELECT orderID, cust_firstname, cust_lastname, cust_email, cust_city, cust_address, cust_phone, comment, manager FROM ".ORDERS_TABLE." WHERE orderID=".(int)$_SESSION["order_id"]) or die (db_error());
		$result = db_fetch_row($q);

		$q = db_query("SELECT online_name FROM ".MANAGER_TABLE." WHERE ID='".$result[8]."'") or die (db_error());
		$m_row = db_fetch_row($q);
		$total=0;
		$q = db_query("SELECT name, Price, Quantity FROM ".ORDERED_CARTS_TABLE." WHERE orderID=".$result[0]."") or die(db_error());
		while ($row = db_fetch_row($q))
		{	
                        $row[1]=round($row[1]/CURRENCY_val,2);  	
			if (substr_count($row[0],ADMIN_DISCOUNT_STRING) > 0)
			{
			    $total -= $row[1]*$row[2];
			    $tmp = explode(" ",$row[0]);
			    $row[4] = "<br /><b>".show_price($row[1]*$row[2])."</b>";
			    $row[0] = "<br /><b>".$tmp[0]."</b>";
			    $row[1] = "";
			    $row[2] = "<br /><b>".$tmp[1]."%</b>";
			    $res[] = Array();
			    $res[] = $row;
			}
			else
			{
			    $total += $row[1]*$row[2];

			    $row[4] = show_price($row[1]*$row[2]);
			    $row[1] = show_price($row[1]);
			    $res[] = $row;
			}	
		}

		$result[8] = $m_row[0];
		$result[9] = show_price($total); //order value
                require '../smarty/smarty.class.php'; 
                $smarty = new Smarty;
                $smarty->assign("result", $result);
                $smarty->assign("res", $res);
                $smarty->display("../css/css_".CONF_COLOR_SCHEME."/theme/printorder.tpl.html"); 
           }     

?>
