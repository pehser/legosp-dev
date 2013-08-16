<?php
/*****************************************************************************
 *                                                                           *
 * Lego Edition SP - legosp.net                                              *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/
if (CONF_SHOW_MENU==1)
{
   $c = All_list_Categories(0,1);
   $smarty->assign("categories_tree",$c);
   unset($c);
}
else
{
	$path = array($categoryID);
	$curr = $categoryID;
	do
	{
		$curr= db_r("SELECT parent FROM ".CATEGORIES_TABLE." WHERE categoryID='".$curr."' ORDER BY categoryID ASC");
                $curr = $curr ? $curr : 0; 
		$path[] = $curr;


	} while ($curr);
	$path = array_reverse($path);
	$c = All_list_Categories($path,1);
	$smarty->assign("categories_tree",$c);
        unset($c,$path,$curr); 
}
?>