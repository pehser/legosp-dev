<?php
include("../cfg/ajax_connect.inc.php");
//�������� ������ ����� $_POST
if (isset($_POST['search'])) {
    // ������������ � ����
   
  
    // ������� �� ��������� �������� ������! ���������� ��!
    if (DB_CHARSET=='cp1251') 
    $_POST['search']=Utf8Win($_POST['search']);
    $word = mysql_real_escape_string($_POST['search']); 
     
    // ������ ������

    $sql="SELECT productID,name,Price,in_stock FROM ".PRODUCTS_TABLE." where name LIKE '%" . $word . "%' or product_code='".$word."'";
    $row = db_arAll($sql);  $end_result='<table width="100%" cellspacing=0>';
    // �������� ����������
    if(count($row)) {
        foreach($row as $r) {
            $end_result     .= "<tr style='background:#FFF;";
            if ((CONF_SHOW_ADD2CART_INSTOCK) || (!CONF_SHOW_ADD2CART_INSTOCK && $r['in_stock']>0)) $end_result     .= "cursor:pointer' onclick='addproduct(".$r['productID'].")' "; else $end_result .="'";
            $end_result     .= "class='grid'><td id='name_".$r['productID']."'>" .$r['name'].'</td><td>'.CONF_CURRENCY_ID_LEFT.'<font id="price_'.$r['productID'].'">'.$r['Price'].'</font>'.CONF_CURRENCY_ID_RIGHT.'</td><td>'.IN_STOCK.': '.$r['in_stock'].'</td></tr>';
        }
       $end_result .="</table>";
        
    } else {
        $end_result= '<h3 style="background:#FFF; color: red;">�� ������ ������� ������ �� �������</h3>';
    }
    if (DB_CHARSET=='cp1251') $end_result=win2utf($end_result);
    echo $end_result;
}

if (isset($_POST['addcategory']))
{
    $html=''; 
   
    $q= db_query('select parent,name from '.CATEGORIES_TABLE.' where categoryID='.(int)$_POST['addcategory']);
    $row = db_fetch_row($q);
    $par= $row[0];
    $cname = $row[1];
    while($par > 0)
     {
        $scat=$par;
        $q= db_query('select parent,name from '.CATEGORIES_TABLE.' where categoryID='.$scat);
        $row = db_fetch_row($q);
        $par= $row[0];
        $cname =$row[1].'->'.$cname;  
     } 


    if ($cname) $html=$cname.'<input type=hidden name="appended_categories[]" value="'.$_POST['addcategory'].'">';  
    echo $html;
}


?>