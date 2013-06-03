<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2006 Articus consulting group. All rights reserved.         *
 *                                                                           *
 ****************************************************************************/

	//general settings

if(!defined('WORKING_THROUGH_ADMIN_SCRIPT'))
{
	die;
}

	if (!strcmp($sub, "live_counts"))
	{
		$f = implode("",file("./core/aux_pages/live_counts"));
		$smarty->assign("live_counts_text", $f);

		if (isset($_GET["save_successful"])) //show successful save confirmation message
			$smarty->assign("configuration_saved", 1);
		else
			$smarty->assign("configuration_saved", 0);

		if (isset($_POST["save_counts"])) //save system settings
		{


			//save cfg file
			$f = fopen("./core/aux_pages/live_counts","w");

			fputs($f,stripslashes($_POST["live_counts_text"]));
			fclose($f);

			header("Location: admin.php?dpt=system&sub=live_counts&save_successful");
		}


		//set sub-department template
		$smarty->assign("admin_sub_dpt", "system_live_counts.tpl.html");
	}

?>