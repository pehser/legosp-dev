<?PHP
  
  class lego_function
  {

function Utf8Win($str,$type="w")
    {
 
        if (function_exists('mb_convert_encoding'))
        return  mb_convert_encoding($str,'windows-1251','utf-8');    
        static $conv='';
        if (!is_array($conv))
        {
            $conv = array();
            for($x=128;$x<=143;$x++)
            {
                $conv['u'][]=chr(209).chr($x);
                $conv['w'][]=chr($x+112);
            }
            for($x=144;$x<=191;$x++)
            {
                $conv['u'][]=chr(208).chr($x);
                $conv['w'][]=chr($x+48);
            }
            $conv['u'][]=chr(208).chr(129); // 
            $conv['w'][]=chr(168);
            $conv['u'][]=chr(209).chr(145); // 
            $conv['w'][]=chr(184);
            $conv['u'][]=chr(208).chr(135); // 
            $conv['w'][]=chr(175);
            $conv['u'][]=chr(209).chr(151); // 
            $conv['w'][]=chr(191);
            $conv['u'][]=chr(208).chr(134); // 
            $conv['w'][]=chr(178);
            $conv['u'][]=chr(209).chr(150); // 
            $conv['w'][]=chr(179);
            $conv['u'][]=chr(210).chr(144); // 
            $conv['w'][]=chr(165);
            $conv['u'][]=chr(210).chr(145); // 
            $conv['w'][]=chr(180);
            $conv['u'][]=chr(208).chr(132); // 
            $conv['w'][]=chr(170);
            $conv['u'][]=chr(209).chr(148); // 
            $conv['w'][]=chr(186);
            $conv['u'][]=chr(226).chr(132).chr(150); // 
            $conv['w'][]=chr(185);
        }
        if ($type == 'w') { return str_replace($conv['u'],$conv['w'],$str); }
        elseif ($type == 'u') { return str_replace($conv['w'], $conv['u'],$str); }
        else { return $str; }
    }


private function fract($num = 0) {
 if(floor($num)==0) return false;
   $out = explode('.', $num);
 if (!isset($out[1])) return false;
 return $out[1];
}

    public function show_price($price)
    {
	if ($this->fract($price))
		$price = number_format($price, 2, ',', ' ');
	else	$price = number_format($price, 0, '', ' ');
	$csign_left  = (defined("CONF_CURRENCY_ID_LEFT")) ? CONF_CURRENCY_ID_LEFT : "US $";
	$csign_right = (defined("CONF_CURRENCY_ID_RIGHT")) ? CONF_CURRENCY_ID_RIGHT : "";
	return $csign_left.$price.$csign_right;
    }
    public static function currency()
    {
      if (isset($_POST['current_currency'])) 
      {
         $CID=$_POST['current_currency'];
         $_SESSION['CURRENCY_ID']=$CID;  
      }
      elseif (isset($_SESSION['CURRENCY_ID'])) $CID=$_SESSION['CURRENCY_ID'];
      else  $CID=CONF_CURRENCY_ID;
      $c=db_assoc('select * from '.CURRENCY_TABLE.' where CID='.$CID);
      if ($c['where2show']) { @define("CONF_CURRENCY_ID_RIGHT",$c['code']); @define('CONF_CURRENCY_ID_LEFT','');}
      elseif ($c)  
      {  
        define('CONF_CURRENCY_ID_LEFT',$c['code']); define("CONF_CURRENCY_ID_RIGHT",''); 
      }
      else {@define('CONF_CURRENCY_ID_LEFT',''); @define("CONF_CURRENCY_ID_RIGHT",''); }
       
      @define('CONF_CURRENCY_ISO3',$c['currency_iso_3']);  
      if (!$c['currency_value']) $c['currency_value']=1;
      @define('CURRENCY_val', $c['currency_value']);
      @define('CURRENCY_ID', $CID);
    } 

  }


  class adminClass extends lego_function
  {
    public function category_list()
    {
    $sqlresult =  mysql_query( 'SELECT categoryID,name,parent,products_count_admin,enabled FROM `'.CATEGORIES_TABLE.'` ORDER BY ' . CONF_SORT_CATEGORY . ' ' . CONF_SORT_CATEGORY_BY );
  $raw = array();
  while( $item = mysql_fetch_assoc( $sqlresult ) ){
    $item['subitems'] = array();
    $raw[ $item['categoryID'] ] = $item;
    }
  // строим само дерево
  $tree = array();
  foreach( $raw as $id=>&$item )
    if( array_key_exists( $item['parent'], $raw )  )  // если есть родительская вершина в дереве
      $raw[ $item['parent'] ]['subitems'][ $id ] =& $item;
    else // иначе - это вершина верхнего уровня
      $tree[ $id ] =& $item;
  // дерево построенно, возвращаем его из ф-ии

  return $tree;
    }
    
    
public function to_url($text) {
    $text=trim($text); 
    if (DB_CHARSET!='cp1251') $text=$this->Utf8Win($text);  
    $tr = array(
        "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
        "Д"=>"d","Е"=>"e","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya", 
        " "=> "_", "."=> "", ":"=>"","/"=> "_"
    );
    $text=strtr($text,$tr);
    return $text;
}    

public function file_url($text) {
    $text=trim($text); 
    $tr = array(
        "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
        "Д"=>"d","Е"=>"e","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya", 
        " "=> "_", "/"=> "_"
    );
    return strtr($text,$tr);
}


  }

  
?>