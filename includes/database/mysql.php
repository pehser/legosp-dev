<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2005 WebAsyst LLC. All rights reserved.                     *
 *                                                                           *
 * Lego SP                                                                   *
 * Copyright (c) 2010 Sergey Piekhota                                        *
 ****************************************************************************/

//	database functions :: MySQL

function add_in($fields){
 	 $set='';
	foreach ($fields as $field => $value){
	  $set .=$value.',';
 	}
        $set=substr($set, 0, strlen($set)-1);   
        return $set;
	}

function getDbCollation($db)
{
   return db_r("SELECT DEFAULT_COLLATION_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = '".$db."'");
}

function db_connect($host,$user,$pass) //create connection
{
	$r = mysql_connect($host,$user,$pass);
        
	if(preg_match('/^5\./',mysql_get_server_info($r)))db_query('SET SESSION sql_mode=0');
	return $r;
}

function db_select_db($name) //select database
{       $rez=mysql_select_db($name); 
        db_query("SET NAMES ".DB_CHARSET);   
	return $rez;
}

function db_query($s) //database query
{       
        GLOBAL $esql; 
        if ($esql) echo "<p>".$s."</p>";
	return mysql_query($s);
}

function db_fetch_row($q) //row fetching
{
	return mysql_fetch_row($q);
}

function db_insert_id()
{
	return mysql_insert_id();
}

function db_error() //database error message
{
	return mysql_error();
}

function db_assoc($s){
         $result = db_query($s); 
          if ($result)
            return mysql_fetch_assoc($result);
          else return false; 
	}

function db_assoc_q($q){
          if ($q)
            return mysql_fetch_assoc($q);
          else return false; 
	}

function db_affected_rows()
{
   return mysql_affected_rows();
}

function db_arAll($s){
	// выгребает все значения из выборки в один ассоциативный массив
		$result=db_query($s);
                

		$all_data=array();
                if ($result)
		while ($rg=@mysql_fetch_array($result,MYSQL_ASSOC)){
			array_push($all_data,$rg);

		}
                #mysql_free_result($result);
		return $all_data;
	}
function db_r($s){
          $result=db_query($s);
          if (!$result || mysql_num_rows($result)==0) return '';
          else return mysql_result($result,0);
	}

function isTextValue($field_type) {
		switch ($field_type) {
			case "tinytext":
			case "text":
			case "mediumtext":
			case "longtext":
			case "binary":
			case "varbinary":
			case "tinyblob":
			case "blob":
			case "mediumblob":
			case "longblob":
				return True;
				break;
			default:
				return False;
		}
	}


function db_num_rows($q)
{
  if ($q) return mysql_num_rows($q);
  else return 0;
}

function db_num_fields($q)
{
  if ($q) return mysql_num_fields($q);
  else return 0;
}

function int_text($val)
{
   if(get_magic_quotes_gpc()) $val=stripslashes($val);
   $val="'".mysql_real_escape_string($val)."'";    
   return $val;
}

function add_set($fields)
{
        
        $set='';
	foreach ($fields as $field => $value)
        {
          
          
             #echo $value; echo '=';
             if(get_magic_quotes_gpc()) $value=stripslashes($value);
	     $value="'".mysql_real_escape_string($value)."'";    
	     #echo $value."<br>";
           if (DB_CHARSET!='cp1251' && !is_utf8($value))
           {
              $value=win2utf($value);
           }   
	  $set .="`" . $field . "`=" .$value.',';
	}
        $set=substr($set, 0, strlen($set)-1); 
        #exit;
        return $set;
        
}


function add_field($table, $fields){
                
	return db_query("INSERT INTO `" . $table . "` SET " . add_set($fields));
		 
	}

function update_field($table, $fields,$where="1>0"){
                
	 return $q=db_query("UPDATE `" . $table . "` SET " . add_set($fields) . " WHERE " . $where);
		
	}
function validate_form_string($inp)
{
  if(is_array($inp))
        return array_map(__METHOD__, $inp);

    if(!empty($inp) && is_string($inp)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    } 
}

function db_create($db,$charset='UTF8')
{ 

  $general=$charset.'_general_ci';
 return db_query('CREATE DATABASE $db CHARACTER SET '.$charset.' COLLATE '.$general);
}
?>