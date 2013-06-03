<?php
/*****************************************************************************
 *                                                                           *
 * Lego Edition SP - lego.shop-script.org                                    *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/
if (CONF_SHOW_MENU==1)
{
   $c = All_Categories(0,0);
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
	$out = processCategories(0,$path,$categoryID);
	$smarty->assign("categories_tree",$out);
        unset($out,$path,$curr); 
}
?>