<?php
/*****************************************************************************
 *                                                                           *
 * Lego Edition SP - lego.shop-script.org                                    *
 * Copyright (c) 2012 Sergey Piekhota. All rights reserved.                  * 
 *                                                                           *
 ****************************************************************************/
	if (!isset($_REQUEST["type"])) $_REQUEST["type"] = "";
	$ajax_flag = $_REQUEST["type"] == "ajax" ? 1 : 0;

	if ($ajax_flag) include("../cfg/ajax_connect.inc.php"); // ajax

if (CONF_VOTES_ON==1)
{
	if (((isset($_POST["vote_send"])) && ($_POST["vote_send"])) || ((isset($_GET["vote_res"])) && ($ajax_flag)))
	  {

		$id = isset($_POST["vote_val"]) ? $_POST["vote_val"] : $_GET["vote_res"];
		$idvote = isset($_POST["vote_send"]) ? $_POST["vote_send"] : $_GET["vote_res"];

		if ($id != "none") db_query("UPDATE ".VOTES_CONTENT_TABLE." SET `result`=`result`+'1' WHERE votesID='".$idvote."' AND ID='".$id."'") or die (db_error());


		setcookie("vote_id_".$idvote, $id, time() + 109500, "/"); // ������ �������� - 1 ���
		

		if (!$ajax_flag) header("Location: ".$_SERVER['HTTP_REFERER']);
	  }


	$q = db_query("SELECT vt.votesID, title, enable, ID, question, result FROM ".VOTES_TABLE." as vt LEFT JOIN ".VOTES_CONTENT_TABLE." USING(votesID) WHERE enable='1' and question != '' ORDER BY ID ASC") or die (db_error());

	$vt_cnt = 0;
	$vote_is = Array();

	while ($p=mysql_fetch_row($q))
	  {
	    $vote_is[] = $p;
	    $vt_cnt += $p[5];
	  }

  
	if ((isset($_COOKIE["vote_id_".$vote_is[0][0]]))) //showing results
	  {
                $vote_total=0;  
		for ($i=0; $i<count($vote_is);$i++)
                {  
		    $vote_is[$i][6] = $vt_cnt != 0 ? round($vote_is[$i][5]*100/$vt_cnt) : 0;
                    $vote_total +=$vote_is[$i][5];
                } 
		if (!$ajax_flag) {
		    $smarty->assign("vote_res", $vote_is);  
		    $smarty->assign("vote_total", $vote_total);
		}
	  }
	else 
	  {
		if (!$ajax_flag) {$smarty->assign("vote_is", $vote_is);}
	  }

  if ($ajax_flag) print json_encode_win($vote_is);
} 

?>