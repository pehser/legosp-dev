<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2009 Supme. All rights reserved.                     *
 *                                                                           *
 ****************************************************************************/

if(!defined('WORKING_THROUGH_ADMIN_SCRIPT'))
{
	echo 'Acces denied to this module';
	die;
}

	if (!strcmp($sub, "news"))
	{

		if (isset($_GET["del_news"])) // delete page
		{
			//old picture
			$q = db_query("SELECT Pict FROM ".NEWS_TABLE." WHERE id='".$_GET["del_news"]."'") or die (db_error());
			$row = db_fetch_row($q);

			//remove old picture...
			if (($row[0]) && file_exists("./products_pictures/$row[0]"))
			unlink("./products_pictures/$row[0]");

			$q = db_query("DELETE FROM ".NEWS_TABLE." WHERE id='".$_GET["del_news"]."'") or die (db_error());

			header("Location: admin.php?dpt=inform&sub=news");
		}

		if (isset($_GET["news"])) // edit page
		{
			$p = db_assoc('SELECT * FROM '.NEWS_TABLE." WHERE id=".(int)$_GET["news"]);
			$smarty->assign("new_news", $_GET["news"]);
			$smarty->assign("newsedit", $p);
			$smarty->assign("admin_sub_dpt", "inform_news_edit.tpl.html");
		}
		elseif (isset($_GET["addnews"]))
		{
		         $smarty->assign("admin_sub_dpt", "inform_news_edit.tpl.html");
		}
		else
		{       $news_list = db_arAll('SELECT * FROM '.NEWS_TABLE);
			$smarty->assign("allnews_list", $news_list);
			$smarty->assign("admin_sub_dpt", "inform_news.tpl.html");
		}

		if (isset($_POST["add_news"]))
		{
			
			if (!isset($_POST["news"]['enable'])) $_POST["news"]['enable']=0;
			if ($_POST["add_news"])
			{
			         $_POST["add_news"]=(int)$_POST["add_news"];
			        	 
			         if (!$_POST['news']['hurl']) $_POST['news']['hurl']='news-'.$_POST["add_news"].'/';	         
			        
				//old picture
				$old_picture = db_r("SELECT Pict FROM ".NEWS_TABLE." WHERE id=".$_POST["add_news"]) ;
				if (isset($_FILES['news_pic']) && $_FILES['news_pic']['name'] && preg_match('/\.(jpg|jpeg|gif|png)$/i', $_FILES['news_pic']['name'])) //upload
				{
				  if ($old_picture && file_exists('./products_pictures/'.$old_picture))   unlink('./products_pictures/'.$old_picture);
				  $news_pic = file_url($_FILES['news_pic']['name']);
				  move_uploaded_file($_FILES['news_pic']['tmp_name'], './products_pictures/'.$news_pic);
				  $_POST['news']['Pict']=$news_pic;
				}
				update_field(NEWS_TABLE,$_POST['news'],'id='. $_POST["add_news"]);
			}
			else //save new page
			{
			   if ($_POST['news']["title"])
			   {
				if (isset($_FILES['news_pic']) && $_FILES['news_pic']['name'] && preg_match('/\.(jpg|jpeg|gif|jpe|pcx|bmp)$/i', $_FILES['news_pic']['name'])) //upload
					{
  					  $news_pic = file_url($_FILES['news_pic']['name']);
					  $r = move_uploaded_file($_FILES['news_pic']['tmp_name'], './products_pictures/'.$news_pic);
					  $_POST['news']['Pict']=$news_pic;
					}
		                 add_field(NEWS_TABLE, $_POST['news']); 	
			   }
			}
			header('Location: admin.php?dpt=inform&sub=news');
		}
                 
		if (isset($_GET["picture_remove"])) // remove picture
		{
		        $_GET["picture_remove"]=(int)$_GET["picture_remove"];
			$q = db_query('SELECT Pict FROM '.NEWS_TABLE." WHERE id=".$_GET["picture_remove"]) or die (db_error());
			$row = db_fetch_row($q);
			if (file_exists("./products_pictures/$row[0]"))	unlink("./products_pictures/$row[0]");
			db_query("UPDATE ".NEWS_TABLE." SET Pict='' WHERE id=".$_GET["picture_remove"]) or die (db_error());
			header("Location: admin.php?dpt=inform&sub=news&news=".$_GET["picture_remove"]);
		}
		

		$news_list=array();

		$q = db_query("SELECT id, title, enable FROM ".NEWS_TABLE." ") or die (db_error());
		$i=0;
		while ($nm=mysql_fetch_array($q))
		{ 
			$news_list[0][] = $nm["id"];
			$news_list[2][] = $nm["enable"];

			if (isset($_GET["news"]) && $nm["id"] == $_GET["news"])
				$news_list[1][] = "<b>".$nm["title"]."</b>";
			else
				$news_list[1][] = $nm["title"];
			$i++;
 		}

		$smarty->assign("news_list", $news_list);
		$smarty->assign("news_list_count", $i);

		//set sub-department template
		#$smarty->assign("admin_sub_dpt", "inform_news.tpl.html");
	}

?>