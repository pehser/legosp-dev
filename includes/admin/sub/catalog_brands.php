<?php
/*****************************************************************************
 *                                                                           *
 * Lego SP - lego.shop-script.org                                            *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/

if(!defined('WORKING_THROUGH_ADMIN_SCRIPT'))
{
	die('Acces denied to this module');
}

	if (!strcmp($sub, "brands"))
	{
	        $smarty->assign("admin_sub_dpt", "catalog_brands.tpl.html");

		if (isset($_GET["save_successful"])) //show successful save confirmation message
			$smarty->assign("save_successful", ADMIN_UPDATE_SUCCESSFUL);
		else
			$smarty->assign("save_successful", "");

		if (isset($_GET["del_brand"])) // delete page
		{
			//old picture
			$q = db_query("SELECT Pict FROM ".BRAND_TABLE." WHERE brandID='".$_GET["del_brand"]."'") or die (db_error());
			$row = db_fetch_row($q);

			//remove old picture...
			if (($row[0]) && file_exists("./products_pictures/$row[0]"))
			unlink("./products_pictures/$row[0]");

			$q = db_query("DELETE FROM ".BRAND_TABLE." WHERE brandID='".$_GET["del_brand"]."'") or die (db_error());

			header("Location: ".CONF_ADMIN_FILE."?dpt=catalog&sub=brands");
		}

		if (isset($_GET["brands"])) // edit page
		{
			$p = db_assoc("SELECT * FROM ".BRAND_TABLE." WHERE brandID='".$_GET["brands"]."'") or die (db_error());


			$smarty->assign("new_brand", $_GET["brands"]);
		        $smarty->assign("brand_info", $p);
		        $smarty->assign("admin_sub_dpt", "catalog_brands_edit.tpl.html");
		}
		elseif (isset($_GET["addbrands"]))
		{
			$smarty->assign("new_brand", "0");
			$smarty->assign("brand_info", '');
			$smarty->assign("admin_sub_dpt", "catalog_brands_edit.tpl.html");
		}
		elseif (isset($_POST['brands_edit']))
		{
		  foreach ($_POST['brands_edit'] as $key => $value)
		  {
		    if (!isset($value['enabled']) || $value['enabled']!=1) $value['enabled']=0;
		    update_field(BRAND_TABLE,$value,'brandID='.$key);
		    header("Location: ".CONF_ADMIN_FILE.'?dpt=catalog&sub='.$sub);
		  }
		}

		if (isset($_POST["add_brand"]))
		{
			if ($_POST["brand"]['hurl']=="") {$_POST["brand"]['hurl']=to_url($_POST["brand"]['name'])."/";}
			if ($_POST["add_brand"])
			{	
                                
                                $pid=(int)$_POST["add_brand"];
                                if (!isset($_POST['brand']['enabled']) || $_POST['brand']['enabled']!=1) $_POST['brand']['enabled']=0;
                                

				if (isset($_FILES['brand_pic']) && $_FILES['brand_pic']['name'] && preg_match('/\.(jpg|jpeg|gif|jpe|pcx|bmp|png)$/i', $_FILES['brand_pic']['name'])) //upload
                     		{

			                //remove old picture... 		
                                        $old_pic = db_r("SELECT Pict FROM ".BRAND_TABLE." WHERE brandID='".$pid."'");
                                        if ($old_pic && file_exists('./products_pictures/'.$old_pic)) unlink('./products_pictures/'.$old_pic);
                                        $brand_pic = file_url($_FILES['brand_pic']['name']);
				      if (!move_uploaded_file($_FILES['brand_pic']['tmp_name'], './products_pictures/'.$brand_pic)) //failed to upload
						$smarty->assign("error", "loading error");
					else $_POST['brand']['Pict']=$brand_pic;
                                  }
                                  update_field(BRAND_TABLE,$_POST['brand'],'brandID='.$_POST["add_brand"]);
                                  
			}
			else //save new page
			{
			   if ($_POST['brand']['name'])
			   {

				if (isset($_FILES['brand_pic']) && $_FILES['brand_pic']['name'] && preg_match('/\.(jpg|jpeg|gif|jpe|pcx|bmp|png)$/i', $_FILES['brand_pic']['name'])) //upload
					{
					$brand_pic = file_url($_FILES['brand_pic']['name']);
					$r = move_uploaded_file($_FILES['brand_pic']['tmp_name'], './products_pictures/'.$brand_pic);
                                          $_POST['brand']['Pict']=$brand_pic;
					
					}
				 add_field(BRAND_TABLE,$_POST['brand']);
			   }
			}



			header("Location: ".CONF_ADMIN_FILE."?dpt=catalog&sub=brands");
		}

		if (isset($_GET["picture_remove"]) && isset($_GET["brands"]) && ($_GET["brands"])) // remove picture
		{
			$q = db_query("SELECT Pict FROM ".BRAND_TABLE." WHERE brandID='".$_GET["brands"]."'") or die (db_error());
			$row = db_fetch_row($q);

			if (file_exists("./products_pictures/$row[0]"))	unlink("./products_pictures/$row[0]");
			
			db_query("UPDATE ".BRAND_TABLE." SET Pict='' WHERE brandID='".$_GET["brands"]."'") or die (db_error());

			header("Location: ".CONF_ADMIN_FILE."?dpt=catalog&sub=brands&brands=".$_GET["brands"]);
		}

		$smarty->assign('brand_list', db_arAll("SELECT brandID,name,enabled,sort FROM ".BRAND_TABLE));

		//set sub-department template
		
	}

?>
