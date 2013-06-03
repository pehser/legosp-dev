<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:51:49
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/product_detailed.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:16230277725138efd5094f95-75590643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6830003755844b07add9a2b98054695162cbd7e9' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/product_detailed.tpl.html',
      1 => 1360849046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16230277725138efd5094f95-75590643',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
?>

<script type="text/javascript">
 function urlcrt() 

 {

   return "./add2cart/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[14]) ? $_smarty_tpl->getVariable('product_info')->value[14] : null);?>
&opions=1";

 } 

</script>
  <div class="box">
   
   
<?php if ($_smarty_tpl->getVariable('product_info')->value!=null){?>
<h3 class="box-name"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[32]) ? $_smarty_tpl->getVariable('product_info')->value[32] : null);?>
 <?php if ((isset($_SESSION['access'])? $_SESSION['access'] : null)==3){?><a class="p_edit" href="admin.php?dpt=catalog&sub=products_edit&productID=<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
" id="iframe">Изменить</a>
<?php }?></h3>

<div class="left a-center" style="width:224px;margin-bottom:20px;">
    <?php if ((isset($_smarty_tpl->getVariable('product_info')->value[5]) ? $_smarty_tpl->getVariable('product_info')->value[5] : null)||$_smarty_tpl->getVariable('p_default')->value){?>
      <a id="adpdp<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
" href="./products_pictures/<?php if ($_smarty_tpl->getVariable('p_default')->value){?><?php echo $_smarty_tpl->getVariable('p_default')->value;?>
-B.jpg<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[9]) ? $_smarty_tpl->getVariable('product_info')->value[9] : null);?>
<?php }?>" rel="example_group"><img src="./products_pictures/<?php if ($_smarty_tpl->getVariable('p_default')->value){?><?php echo $_smarty_tpl->getVariable('p_default')->value;?>
.jpg<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[5]) ? $_smarty_tpl->getVariable('product_info')->value[5] : null);?>
<?php }?>" class="img center" alt="<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[1]) ? $_smarty_tpl->getVariable('product_info')->value[1] : null);?>
" id="dp<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
"></a>
	  <a href="./products_pictures/<?php if ($_smarty_tpl->getVariable('p_default')->value){?><?php echo $_smarty_tpl->getVariable('p_default')->value;?>
-B.jpg<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[9]) ? $_smarty_tpl->getVariable('product_info')->value[9] : null);?>
<?php }?>" rel="example_group">увеличить...</a>
    <?php }else{ ?>
      <img  src="./products_pictures/nophoto.jpg" id="dp<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
" width="220" height="220" alt="<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[1]) ? $_smarty_tpl->getVariable('product_info')->value[1] : null);?>
" rel="thickbox"/>
    <?php }?>
</div><div class="right" style="width:420px;margin-bottom:20px;">

  <p style="margin-bottom:4px;"><b><?php echo @author;?>
:&nbsp;</b><a href="./brand/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[21]) ? $_smarty_tpl->getVariable('product_info')->value[21] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[20]) ? $_smarty_tpl->getVariable('product_info')->value[20] : null);?>
</a></p>
  <p style="margin-bottom:4px;"><b><?php echo @STRING_MODEL;?>
:&nbsp;</b><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[1]) ? $_smarty_tpl->getVariable('product_info')->value[1] : null);?>
</p>
  <?php if ((isset($_smarty_tpl->getVariable('product_info')->value[12]) ? $_smarty_tpl->getVariable('product_info')->value[12] : null)!=''){?>
    <p style="margin-bottom:4px;"><b><?php echo @ADMIN_PRODUCT_CODE;?>
:&nbsp;</b>[<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[12]) ? $_smarty_tpl->getVariable('product_info')->value[12] : null);?>
]</p>
  <?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('product_info')->value[8]) ? $_smarty_tpl->getVariable('product_info')->value[8] : null)>0){?> 
   <p style="margin-bottom:4px;"><b><?php echo @ADMIN_PRODUCT_RATING;?>
:</b>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']<(isset($_smarty_tpl->getVariable('product_info')->value[3]) ? $_smarty_tpl->getVariable('product_info')->value[3] : null)){?><img src="./images/icon_bes.png" alt="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" /><?php }else{ ?><img src="./images/black_star.png" alt="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" /><?php }?><?php endfor; endif; ?></p>
  <?php }?>
  <?php if (count($_smarty_tpl->getVariable('options2')->value)){?>
  <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null), null, null);?> 
            <?php $_smarty_tpl->tpl_vars["p"] = new Smarty_variable(0, null, null);?>  
            <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('options2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
              <p style="margin-bottom:4px;"><b><?php echo (isset($_smarty_tpl->tpl_vars['option']->value['name']) ? $_smarty_tpl->tpl_vars['option']->value['name'] : null);?>
:&nbsp;</b>
                  <?php if (count((isset($_smarty_tpl->tpl_vars['option']->value['var']) ? $_smarty_tpl->tpl_vars['option']->value['var'] : null))>1){?> 
                  <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?> 
                  <?php $_smarty_tpl->tpl_vars["new_price"] = new Smarty_variable("0", null, null);?> 
                    <select class="product_option_<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['productID']) ? $_smarty_tpl->tpl_vars['option']->value['productID'] : null);?>
" onChange="GetNewPrice_new(<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['productID']) ? $_smarty_tpl->tpl_vars['option']->value['productID'] : null);?>
,<?php echo $_smarty_tpl->getVariable('i')->value;?>
,0)" name="product_option_<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['productID']) ? $_smarty_tpl->tpl_vars['option']->value['productID'] : null);?>
_<?php echo (isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null);?>
" id="product_option[<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['productID']) ? $_smarty_tpl->tpl_vars['option']->value['productID'] : null);?>
][<?php echo $_smarty_tpl->getVariable('i')->value;?>
]">
                       <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['option']->value['var']) ? $_smarty_tpl->tpl_vars['option']->value['var'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
?>
 	                  <option <?php if ((isset($_smarty_tpl->tpl_vars['var']->value['default']) ? $_smarty_tpl->tpl_vars['var']->value['default'] : null)){?> <?php $_smarty_tpl->tpl_vars['p'] = new Smarty_variable($_smarty_tpl->getVariable('p')->value+(isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null), null, null);?>  <?php $_smarty_tpl->tpl_vars["newfoto"] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['var']->value['picture']) ? $_smarty_tpl->tpl_vars['var']->value['picture'] : null), null, null);?> selected<?php }?>  rel="0" value="<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['variantID']) ? $_smarty_tpl->tpl_vars['var']->value['variantID'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['picture']) ? $_smarty_tpl->tpl_vars['var']->value['picture'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['var']->value['name']) ? $_smarty_tpl->tpl_vars['var']->value['name'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null)!=0){?> <?php $_smarty_tpl->tpl_vars["new_price"] = new Smarty_variable("1", null, null);?> (<?php if ((isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null)>0){?>+<?php }?><?php echo smarty_function_math(array('equation'=>"x/y",'x'=>(isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null),'y'=>@CURRENCY_val,'format'=>"%.2f"),$_smarty_tpl);?>
)<?php }?></option>
		       <?php }} ?>
                    </select></p>
                    
                  <?php }else{ ?>  
                  <?php echo (isset($_smarty_tpl->tpl_vars['option']->value['var'][0]['name']) ? $_smarty_tpl->tpl_vars['option']->value['var'][0]['name'] : null);?>

                     <input type="hidden" id="product_option[<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['productID']) ? $_smarty_tpl->tpl_vars['option']->value['productID'] : null);?>
][666]" value="<?php echo (isset($_smarty_tpl->getVariable('var')->value['variantID']) ? $_smarty_tpl->getVariable('var')->value['variantID'] : null);?>
:<?php echo (isset($_smarty_tpl->getVariable('var')->value['price_surplus']) ? $_smarty_tpl->getVariable('var')->value['price_surplus'] : null);?>
:<?php echo (isset($_smarty_tpl->getVariable('var')->value['picture']) ? $_smarty_tpl->getVariable('var')->value['picture'] : null);?>
" >   
                  <?php }?>
                 <!--<br />-->
    <?php }} ?>
   <?php }?>
   <p <?php if (!$_smarty_tpl->getVariable('new_price')->value){?> style="display:none;" <?php }?>>
          <?php echo @STRING_NEWPRICE;?>
: <?php echo @CONF_CURRENCY_ID_LEFT;?>
<font id="vnewprice<?php echo $_smarty_tpl->getVariable('id')->value;?>
" ><?php echo smarty_function_math(array('equation'=>"x+y/z",'x'=>(isset($_smarty_tpl->getVariable('product_info')->value[4]) ? $_smarty_tpl->getVariable('product_info')->value[4] : null),'y'=>$_smarty_tpl->getVariable('p')->value,'z'=>@CURRENCY_val,'format'=>"%.2f",'assign'=>"newsum"),$_smarty_tpl);?>
<?php echo print_price($_smarty_tpl->getVariable('newsum')->value);?>
</font><?php echo @CONF_CURRENCY_ID_RIGHT;?>

   </p>
   <p style="margin:6px 0;"><span class="pprice b"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[24]) ? $_smarty_tpl->getVariable('product_info')->value[24] : null);?>
</span> <?php if ((isset($_smarty_tpl->getVariable('product_info')->value[10]) ? $_smarty_tpl->getVariable('product_info')->value[10] : null)>0&&(isset($_smarty_tpl->getVariable('product_info')->value[10]) ? $_smarty_tpl->getVariable('product_info')->value[10] : null)>(isset($_smarty_tpl->getVariable('product_info')->value[4]) ? $_smarty_tpl->getVariable('product_info')->value[4] : null)&&(isset($_smarty_tpl->getVariable('product_info')->value[4]) ? $_smarty_tpl->getVariable('product_info')->value[4] : null)>0){?> <span class="old"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value[25]) ? $_smarty_tpl->getVariable('product_info')->value[25] : null);?>
</span><?php }?></p>
   <?php if ((isset($_smarty_tpl->getVariable('product_info')->value[28]) ? $_smarty_tpl->getVariable('product_info')->value[28] : null)==1&&(isset($_smarty_tpl->getVariable('product_info')->value['real']) ? $_smarty_tpl->getVariable('product_info')->value['real'] : null)>0){?><p><a href="./add2cart/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[14]) ? $_smarty_tpl->getVariable('product_info')->value[14] : null);?>
" class="medium blue awesome"><?php echo @ADD_TO_CART_STRING;?>
 &raquo;</a></p><?php }?>

<?php if ((isset($_smarty_tpl->getVariable('product_thumb')->value[0]) ? $_smarty_tpl->getVariable('product_thumb')->value[0] : null)!=null){?>
  <p class="product_thumb" style="margin-bottom:4px;">
      <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('product_thumb')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <a href="./products_thumb/<?php echo (isset($_smarty_tpl->getVariable('product_thumb')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? $_smarty_tpl->getVariable('product_thumb')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']] : null);?>
" rel="example_group" title="<?php echo (isset($_smarty_tpl->getVariable('product_desc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? $_smarty_tpl->getVariable('product_desc')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']] : null);?>
"><img src="./products_thumb/P_<?php echo (isset($_smarty_tpl->getVariable('product_thumb')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]) ? $_smarty_tpl->getVariable('product_thumb')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']] : null);?>
" width="80" class="img" alt=""></a></li>
      <?php endfor; endif; ?>
  </p>
<?php }?>
<p class="b">Поделись с друзьями</p>
<div class="share42init"></div>
<script type="text/javascript">share42('http://dev.lego/css/css_<?php echo @CONF_COLOR_SCHEME;?>
/javascript/')</script>

</div><div class="clr"></div>


<div class="tabs">
	<a rel="#tab_description"><?php echo @ADMIN_PRODUCT_DESC;?>
</a>
<?php if ($_smarty_tpl->getVariable('accompany')->value){?>
	<a rel="#tab_related"><?php echo @STRING_RELATED_ITEMS;?>
</a>
<?php }?>
<?php if (@CONF_REVIEW_WRITE){?><a rel="#tab_review"><?php echo @PRODUCT_REVIEW_TITLE;?>
<?php if ($_smarty_tpl->getVariable('reviews')->value){?> (<?php echo count($_smarty_tpl->getVariable('reviews')->value);?>
)<?php }?></a><?php }?>
</div>
<div id="tab_description" class="page">
	<div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px; text-align: justify;">
	  <?php echo (isset($_smarty_tpl->getVariable('product_info')->value[2]) ? $_smarty_tpl->getVariable('product_info')->value[2] : null);?>

	</div>
</div>
<?php if (@CONF_REVIEW_WRITE){?>

      <div id="tab_review" class="page">
	<div id="review"></div>
<?php if ($_smarty_tpl->getVariable('reviews')->value){?>
	<div id="read">
	  <div class="heading"><?php echo @PRODUCT_REVIEW_ALL;?>
</div>
	  <div class="div_review">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('reviews')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
	    <b><?php echo (isset($_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) ? $_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2] : null);?>
</b><br />
	    <hr />
	    <?php echo (isset($_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null);?>
<br />
	    <font class="date_review">[<?php echo (isset($_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][5]) ? $_smarty_tpl->getVariable('reviews')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][5] : null);?>
]</font>
	    <br /><br />
<?php endfor; endif; ?>
	  </div>
	  <div class="pdv"><a onclick="document.getElementById('read').style.display='none'; document.getElementById('write').style.display='block';" class="medium blue awesome"><?php echo @PRODUCT_REVIEW_WRITE;?>
</a>
	  </div>
	</div>

	<div id="write" style="display: none;">
	  <div class="heading" id="review_title"><?php echo @PRODUCT_REVIEW_WRITE;?>
</div>
	  <div class="div_review_write">

<div id="results"></div><br />
	    <form action="index.php" class="cmxform" method="post" id="review_form">
              
	      <b><?php echo @PRODUCT_REVIEW_NAME;?>
</b><br />
	      <input type="text" name="name" id="first_name" value="<?php echo (isset($_SESSION['userinf']['cust_firstname'])? $_SESSION['userinf']['cust_firstname'] : null);?>
" size="40" class="text medium required" /><br />
	      <b><?php echo @PRODUCT_REVIEW_EMAIL;?>
</b><br />
	      <input type="text" name="email" id="email" value="<?php echo (isset($_SESSION['userinf']['cust_email'])? $_SESSION['userinf']['cust_email'] : null);?>
" size="40" class="text medium required email" /><br />

	      <br />
	      <b><?php echo @PRODUCT_REVIEW_HELLO;?>
</b>
		  
		  <p>
	      <textarea name="review" id="review" class="textarea required"></textarea>
	      <input type="hidden" id="last_name" value="none" />
	      <input type="hidden" id="phone" value="8 (000) 000-00-00" />
	      <input name="productID" id="productID" value="<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
" type="hidden" /></p>

	      
	      <b><?php echo @VOTING_FOR_ITEM_TITLE;?>
</b>
	      <span><?php echo @MARK_POOR;?>
</span>&nbsp;
	      <input type="radio" name="mark" value="0.1" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="1" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="2.5" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="3.8" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="5" style="margin: 0;" checked="checked" />&nbsp;
	      <span><?php echo @MARK_EXCELLENT;?>
</span><br />
	      <input type="hidden" name="vote" value="yes" />
              <?php if (!((isset($_SESSION['cust_id'])? $_SESSION['cust_id'] : null) !== null)){?> 
	      <br />
		  <p>
	      <b><?php echo @STRING_SEND_CAPCHA;?>
:</b>
	      <br />
	      <input class='text required error' minlength='3' type="text" name="captcha" id="captcha"/>
	      <br />
	      <img id="cap" src="./core/core_captcha.php?bg=F7F7F7" alt="<?php echo @STRING_SEND_CAPCHA;?>
" onclick="go_cap()" style="cursor:pointer;" title="Обновить капчу"/></p>
              <?php }?> 

            
 
	    </form>

	  </div>
	  <div class="pdv"><a onclick="document.getElementById('write').style.display='none'; document.getElementById('read').style.display='block';" class="medium blue awesome"><?php echo @PRODUCT_REVIEW_ALL;?>
</a>
		<td align="right"><a  class="medium blue awesome review"><?php echo @PRODUCT_REVIEW_WRITE;?>
</a>
	  </div>
	</div>
<?php }else{ ?>
	<div>
	  <div class="heading"><?php echo @PRODUCT_REVIEW_WRITE;?>
</div>
	  <div class="div_review_write">

           <div id="results"></div><br>
	    <form action="index.php" method="post" id="review_form">
             
	      <b><?php echo @PRODUCT_REVIEW_NAME;?>
</b><br />
	      <input type="text" name="name" id="first_name" value="" size="40" class="text medium required" /><br />
	      <b><?php echo @PRODUCT_REVIEW_EMAIL;?>
</b><br />
	      <input type="text" name="email" id="email" value="" size="40" class="text medium required email"/><br />

	      <p>
	      <b><?php echo @PRODUCT_REVIEW_HELLO;?>
</b>
 
	      <textarea name="review" class="textarea required"></textarea>
	      <input type="hidden" id="last_name" value="none" />
	      <input type="hidden" id="phone" value="8 (000) 000-00-00" />
	      <input name="productID" id="productID" value="<?php echo (isset($_smarty_tpl->getVariable('product_info')->value[11]) ? $_smarty_tpl->getVariable('product_info')->value[11] : null);?>
" type="hidden" /></p>
		  
	      <b><?php echo @VOTING_FOR_ITEM_TITLE;?>
</b>
	      <span><?php echo @MARK_POOR;?>
</span>&nbsp;
	      <input type="radio" name="mark" value="0.1" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="1" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="2.5" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="3.8" style="margin: 0;" />&nbsp;
	      <input type="radio" name="mark" value="5" style="margin: 0;" checked="checked" />&nbsp;
	      <span><?php echo @MARK_EXCELLENT;?>
</span><br />
	      <input type="hidden" name="vote" value="yes" />
              <?php if (!((isset($_SESSION['cust_id'])? $_SESSION['cust_id'] : null) !== null)){?>  
	      <br />
		  <p>
	      <b><?php echo @STRING_SEND_CAPCHA;?>
:</b>
	      <br />
	      <input class='text required error' minlength='3' type="text" name="captcha" id="captcha" class="required"/>
	      <img id="cap" src="./core/core_captcha.php?bg=F7F7F7" alt="<?php echo @STRING_SEND_CAPCHA;?>
" onclick="go_cap()" style="cursor:pointer;" title="Обновить капчу"/></p>
              <?php }?> 
	    </form>
	  </div>
	  <div class="pdv"><a class="medium blue awesome review"><?php echo @PRODUCT_REVIEW_WRITE;?>
</a></div>
	</div>
<?php }?>
      </div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('accompany')->value){?>
      <div id="tab_related" class="page">
	<div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px;">
	  <table width="100%" cellpadding="0" cellspacing="0">
	    <tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['name'] = 'i2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('accompany')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i2']['total']);
?>
	      <td style="text-align: center;">
<?php if ((isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][3]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][3] : null)){?>
	        <a href="./<?php echo (isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][5]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][5] : null);?>
"><img src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][3]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][3] : null);?>
" alt="<?php echo (isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][2]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][2] : null);?>
" /></a>
	        <br />
<?php }?>
	        <a href="./<?php echo (isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][5]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][5] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][2]) ? $_smarty_tpl->getVariable('accompany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i2']['index']][2] : null);?>
</a>
	      </td>
<?php endfor; endif; ?>
	     </tr>
	  </table>
	</div>
      </div>
<?php }?>
<div>	
</div>
<input type="hidden" id="newprice<?php echo $_smarty_tpl->getVariable('id')->value;?>
" value="<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>(isset($_smarty_tpl->getVariable('product_info')->value['real']) ? $_smarty_tpl->getVariable('product_info')->value['real'] : null),'y'=>$_smarty_tpl->getVariable('p')->value,'format'=>"%.2f"),$_smarty_tpl);?>
">
<input type="hidden" id="sprice<?php echo $_smarty_tpl->getVariable('id')->value;?>
" value="<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['real']) ? $_smarty_tpl->getVariable('product_info')->value['real'] : null);?>
">

<?php }?>

</div>