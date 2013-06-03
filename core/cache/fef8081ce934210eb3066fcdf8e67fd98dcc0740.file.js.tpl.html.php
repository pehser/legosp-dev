<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:52:39
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/js.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:764374825138f007d0bf10-82909422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fef8081ce934210eb3066fcdf8e67fd98dcc0740' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/js.tpl.html',
      1 => 1360849046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '764374825138f007d0bf10-82909422',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<script language='JavaScript'>
  function GetNewPrice(id,oid)
  {
    spriceid='#sprice'+id; 
    imgid='#simg'+id;
    snewpic=$(imgid).val();
    summ=Math.round($(spriceid).val()*100)/100;
    product_option_Class="product_option_"+id;
    product_option_id="product_option["+id+"]";
    var array_po=getElementsByClass(product_option_Class);
    for (var oi=0; oi<array_po.length; oi++)
    {
     product_option_id_i=product_option_id+"["+(oi+1)+"]"; 
     ps=document.getElementById(product_option_id_i).value.split(':')[1];
     if (!ps) ps=0;
     summ +=Math.round(ps*100)/100;
    }
    product_option_id="product_option["+id+"]["+oid+"]";
   
    if (document.getElementById(product_option_id).value.split(':')[2])
    {
      snewpic=pct+'-S.jpg';
      idsel='./products_pictures/'+snewpic;
      document.getElementById('dp'+id).src=idsel;  
        
    } 
    val='#dp'+id;
    
    vpriceid='#vnewprice'+id; 
    
 
    cur=<?php echo @CURRENCY_val;?>
;  
 
    cur=Math.round(cur*1000)/1000;
     summ=Math.round(summ/cur*100)/100;
    $(vpriceid).html(currencyFormat(summ,0.01)); 
   $(vpriceid).html($(val).src);
   
  }

</script>
