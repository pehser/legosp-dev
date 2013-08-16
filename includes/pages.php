<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 Supme. All rights reserved.                            *
 * Sergey Piekhota (Jabber: pehser@jabber.ru)                                *
 * Copyright (c) 2010                                                        *  
 *                                                                           *
 ****************************************************************************/

	// auxiliary information page presentation
if (CONF_PAGES_ONHOME == 1)
    {
        $count_page=4;
        if (defined('CONF_PAGES_ONHOME_COUNT')) $count_page=CONF_PAGES_ONHOME_COUNT;
       
        $q = db_query("SELECT * FROM ".PAGES_TABLE." WHERE enable=1 LIMIT 0,".$count_page) or die (db_error());
	$pages=array();
        $i = 0;
        while ($p = db_assoc_q($q))
            {
		if ($p['hurl'] != "" && CONF_CHPU) {$p['hurl'] = REDIRECT_PAGES."/".$p['hurl'];} else {$p['hurl']="index.php?pages=".$p['id'];}
                $pages[] = $p;
		$i++;
            }
        unset($p);
        $smarty->assign("home_pages_list", $pages);
    }


if (isset($_GET["pages"]))    
    if ($_GET["pages"])

    {
	//calculate a path
	$path = Array();
	if (CONF_CHPU) $row[0] = REDIRECT_PAGES."/";
	else $row[0] = 'index.php?pages';
	$row[1] = ADMIN_PAGES;
	$path[] = $row;

        $q = db_query("SELECT title, text, date, brief, Pict, enable, meta_title, meta_keywords, meta_desc, hurl, canonical FROM ".PAGES_TABLE.' WHERE hurl='.int_text($_GET["pages"]).' OR id='.(int)$_GET["pages"]) or die (db_error());
        $p = mysql_fetch_row($q);


	if (!$p) {
		//not found
		header("Location: http://".CONF_SHOP_URL."/404/");
		exit;
		}

	if ($p[9] != "" && CONF_CHPU)
		$row[0] = REDIRECT_PAGES."/".$p[9];
	else	$row[0] = "index.php?pages=".$_GET["pages"];

	$row[1] = $p[0];
	$path[] = $row;

	$smarty->assign("product_category_path",$path);

	$smarty->assign("meta_title", $p[6]);
	$smarty->assign("meta_keywords", $p[7]);
	$smarty->assign("meta_desc", $p[8]);
	$smarty->assign("rel_canonical", $p[10]);
        $smarty->assign("pagetext", $p);
        $smarty->assign("main_content_template", "pages.tpl.html");
    }
    else
    {
	//calculate a path
	$path = Array();
	if (CONF_CHPU) $row[0] = REDIRECT_PAGES."/";
	else $row[0] = 'index.php?pages';
	$row[1] = ADMIN_PAGES;
	$path[] = $row;

	$smarty->assign("product_category_path",$path);
        if (!isset($_GET['offset'])) $offset=0; else $offset=$_GET['offset'];
        $sl=$offset;  $sql="SELECT id, title, date, brief, Pict, enable, hurl FROM ".PAGES_TABLE." where enable=1 ORDER BY date DESC ";
        if (!isset($_GET['show_all'])) $sql .=" LIMIT ".$sl.", ".CONF_PAGES_PER_PAGE; 
        $q = db_query($sql) or die (db_error());
        $g_count=db_r("SELECT count(*) FROM ".PAGES_TABLE.' where enable=1');  
        $i=0;
        $pages=array();
        while ($p=mysql_fetch_row($q))
            {
		if ($p[6] != "" && CONF_CHPU) {$p[6] = REDIRECT_PAGES."/".$p[6];} else {$p[6]="index.php?pages=".$p[0];}
                $pages[] = $p;
             }
        $navigator = "";
        showNavigator($g_count, $offset, CONF_PAGES_PER_PAGE, REDIRECT_PAGES."/&amp;",$navigator);
        $smarty->assign("catalog_navigator", $navigator);
	$smarty->assign("meta_title", CONF_SHOP_NAME." | ".ADMIN_PAGES);
	$smarty->assign("meta_keywords", CONF_SHOP_NAME." | ".ADMIN_PAGES);
	$smarty->assign("meta_desc", CONF_SHOP_NAME." | ".ADMIN_PAGES);
        $smarty->assign("pageslist", $pages);
        $smarty->assign("main_content_template", "pages.tpl.html");
    }
?>