<?php
/*****************************************************************************
 *                                                                           *
 * LegoSP - lego.shop-script.org                                             *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/

if(!defined('WORKING_THROUGH_ADMIN_SCRIPT'))
{
	die;
}
	//show new orders page if selected
	if (!strcmp($sub, "categories"))
	{
          
		if (isset($_POST['category_e']) && count($_POST['category_e'])>0)
                 {               
                  db_query('UPDATE '.CATEGORIES_TABLE.' SET enabled=0;');
                  db_query('UPDATE '.CATEGORIES_TABLE.' SET enabled=1 WHERE categoryID in ('.add_in($_POST['category_e']).');');
 		 header('Location: '.CONF_ADMIN_FILE.'?dpt=catalog&sub=categories'); exit;
		}
		elseif (isset($_GET["del"]) && isset($_GET["c_id"])) //delete category
		{

			$_GET["c_id"]=(int)$_GET["c_id"];
			$picture = db_r("SELECT picture FROM ".CATEGORIES_TABLE." WHERE categoryID='".$_GET["c_id"]."' and categoryID<>0");
			if ($picture && file_exists('./products_pictures/'.$picture)) unlink('./products_pictures/'.$picture);
			//delete from db
			$q = db_query("DELETE FROM ".CATEGORIES_TABLE." WHERE categoryID='".$_GET["c_id"]."' and categoryID<>0") or die (db_error());
			deleteSubCategories($_GET["c_id"]);
			update_products_Count_Value_For_Categories(0);
			header("Location: ".CONF_ADMIN_FILE."?dpt=catalog&sub=categories");
			exit;
		}
		//calculate how many products are there in the root category
		$cnt = db_r("SELECT count(*) FROM ".PRODUCTS_TABLE." WHERE categoryID=0");
		$smarty->assign("products_in_root_category",$cnt);
		//create a category tree
		$admin_category = new adminClass();
		$c = $admin_category->category_list();
		$smarty->assign("categories", $c);
                 unset($c);
		//set main template
		$smarty->assign("admin_sub_dpt", "catalog_categories.tpl.html");
	}

?>