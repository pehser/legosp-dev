<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 Supme. All rights reserved.                     *
 *                                                                           *
 ****************************************************************************/

	// auxiliary information page presentation


if (isset($_GET["sitemap"]))    
    {

        $sitemap_categorys=All_Categories(0,0);
        $smarty->assign("sitemap_categorys", $sitemap_categorys);  
        $smarty->assign("main_content_template", "sitemap.tpl.html");
    }
?>