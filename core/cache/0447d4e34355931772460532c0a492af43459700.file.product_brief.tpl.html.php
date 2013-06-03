<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:52:39
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/product_brief.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:17072592625138f007d968a0-83224941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0447d4e34355931772460532c0a492af43459700' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/product_brief.tpl.html',
      1 => 1360849049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17072592625138f007d968a0-83224941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.replace.php';
?><div class="stradv">
 <div class="left w1"><a href="/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['hurl']) ? $_smarty_tpl->getVariable('product_info')->value['hurl'] : null);?>
">
<?php if ((isset($_smarty_tpl->getVariable('product_info')->value['thumbnail']) ? $_smarty_tpl->getVariable('product_info')->value['thumbnail'] : null)||(isset($_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value]) ? $_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value] : null)){?>
		  <img class="img" id="dp<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['productID']) ? $_smarty_tpl->getVariable('product_info')->value['productID'] : null);?>
" src="/products_pictures/<?php if ((isset($_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value]) ? $_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value] : null)){?><?php echo (isset($_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value]) ? $_smarty_tpl->getVariable('p_default')->value[$_smarty_tpl->getVariable('id')->value] : null);?>
-S.jpg<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['thumbnail']) ? $_smarty_tpl->getVariable('product_info')->value['thumbnail'] : null);?>
<?php }?>" alt="<?php echo smarty_modifier_escape((isset($_smarty_tpl->getVariable('product_info')->value['name']) ? $_smarty_tpl->getVariable('product_info')->value['name'] : null),'htmlall');?>
" width="80" height="80" />
                  <?php $_smarty_tpl->tpl_vars["pict"] = new Smarty_variable((isset($_smarty_tpl->getVariable('product_info')->value['thumbnail']) ? $_smarty_tpl->getVariable('product_info')->value['thumbnail'] : null), null, null);?>
<?php }else{ ?>
		  <img class="img" id="dp<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['productID']) ? $_smarty_tpl->getVariable('product_info')->value['productID'] : null);?>
" width="80" height="80" src="/products_pictures/nophoto.jpg" alt="No photo"/>
                  <?php $_smarty_tpl->tpl_vars["pict"] = new Smarty_variable('nophoto.jpg', null, null);?> 
                  
<?php }?>
<input type="hidden" id="simg<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['productID']) ? $_smarty_tpl->getVariable('product_info')->value['productID'] : null);?>
" value="<?php echo $_smarty_tpl->getVariable('pict')->value;?>
">  
</div>
 <div class="left w2"><h4><a href="/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['hurl']) ? $_smarty_tpl->getVariable('product_info')->value['hurl'] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['name']) ? $_smarty_tpl->getVariable('product_info')->value['name'] : null);?>
</a></h4>
<p class="small">
<?php if ((isset($_smarty_tpl->getVariable('product_info')->value['brand_name']) ? $_smarty_tpl->getVariable('product_info')->value['brand_name'] : null)){?><?php echo @author;?>
:<a href="/<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['brand_about_hurl']) ? $_smarty_tpl->getVariable('product_info')->value['brand_about_hurl'] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['brand_name']) ? $_smarty_tpl->getVariable('product_info')->value['brand_name'] : null);?>
</a> |<?php }?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((isset($_smarty_tpl->getVariable('product_info')->value['productID']) ? $_smarty_tpl->getVariable('product_info')->value['productID'] : null), null, null);?>
<?php $_smarty_tpl->tpl_vars["new_price"] = new Smarty_variable("0", null, null);?> 
<?php $_smarty_tpl->tpl_vars["p"] = new Smarty_variable(0, null, null);?> 
<?php if ((((isset($_smarty_tpl->getVariable('options')->value[$_smarty_tpl->getVariable('id')->value]) ? $_smarty_tpl->getVariable('options')->value[$_smarty_tpl->getVariable('id')->value] : null) !== null))){?>
 <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['option_name'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('options')->value[$_smarty_tpl->getVariable('id')->value]) ? $_smarty_tpl->getVariable('options')->value[$_smarty_tpl->getVariable('id')->value] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['option']->iteration=0;
if ($_smarty_tpl->tpl_vars['option']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
 $_smarty_tpl->tpl_vars['option_name']->value = $_smarty_tpl->tpl_vars['option']->key;
 $_smarty_tpl->tpl_vars['option']->iteration++;
 $_smarty_tpl->tpl_vars['option']->last = $_smarty_tpl->tpl_vars['option']->iteration === $_smarty_tpl->tpl_vars['option']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['option']['last'] = $_smarty_tpl->tpl_vars['option']->last;
?>
  <b><?php echo (isset($_smarty_tpl->tpl_vars['option_name']->value) ? $_smarty_tpl->tpl_vars['option_name']->value : null);?>
: </b>
  <?php if (count((isset($_smarty_tpl->tpl_vars['option']->value) ? $_smarty_tpl->tpl_vars['option']->value : null))>1){?>
   <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
    <select class="product_option_<?php echo $_smarty_tpl->getVariable('id')->value;?>
" name="product_option_<?php echo $_smarty_tpl->getVariable('id')->value;?>
_<?php echo (isset($_smarty_tpl->tpl_vars['option']->value[0]['optionID']) ? $_smarty_tpl->tpl_vars['option']->value[0]['optionID'] : null);?>
" id="product_option[<?php echo $_smarty_tpl->getVariable('id')->value;?>
][<?php echo $_smarty_tpl->getVariable('i')->value;?>
]" onChange="GetNewPrice_new(<?php echo $_smarty_tpl->getVariable('id')->value;?>
,<?php echo $_smarty_tpl->getVariable('i')->value;?>
,1)" style="height: 20px; font-size: 11px;">
      <?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['option']->value) ? $_smarty_tpl->tpl_vars['option']->value : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
?>
 	<option <?php if ((isset($_smarty_tpl->tpl_vars['var']->value['default']) ? $_smarty_tpl->tpl_vars['var']->value['default'] : null)){?>selected  <?php echo smarty_function_math(array('assign'=>"p",'equation'=>"x+z",'x'=>(isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null),'z'=>$_smarty_tpl->getVariable('p')->value,'format'=>"%.2f"),$_smarty_tpl);?>
 <?php }?> rel="0" value="<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['variantID']) ? $_smarty_tpl->tpl_vars['var']->value['variantID'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['var']->value['picture']) ? $_smarty_tpl->tpl_vars['var']->value['picture'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['var']->value['name_var']) ? $_smarty_tpl->tpl_vars['var']->value['name_var'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null)!=0){?> <?php $_smarty_tpl->tpl_vars["new_price"] = new Smarty_variable("1", null, null);?> (<?php if ((isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null)>0){?>+<?php }?><?php echo smarty_function_math(array('equation'=>"x/y",'x'=>(isset($_smarty_tpl->tpl_vars['var']->value['price_surplus']) ? $_smarty_tpl->tpl_vars['var']->value['price_surplus'] : null),'y'=>@CURRENCY_val,'format'=>"%.2f"),$_smarty_tpl);?>
)<?php }?></option>
      <?php }} ?>
    </select>
   <?php }elseif((isset($_smarty_tpl->tpl_vars['option']->value['or_op']) ? $_smarty_tpl->tpl_vars['option']->value['or_op'] : null)){?>  
      <?php echo (isset($_smarty_tpl->tpl_vars['option']->value['or_op']) ? $_smarty_tpl->tpl_vars['option']->value['or_op'] : null);?>
    
   <?php }else{ ?>      
      <?php echo (isset($_smarty_tpl->tpl_vars['option']->value[0]['name_var']) ? $_smarty_tpl->tpl_vars['option']->value[0]['name_var'] : null);?>

   <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['option']['last']){?> | <?php }?>
   <?php }?>

  <?php }} ?>
<?php }?>
</p>
 <p><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['brief_description']) ? $_smarty_tpl->getVariable('product_info')->value['brief_description'] : null);?>
</p></div>
 <div class="right w3">
  <p><span class="pprice b"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['Price_letters']) ? $_smarty_tpl->getVariable('product_info')->value['Price_letters'] : null);?>
</span> 
<?php if ((isset($_smarty_tpl->getVariable('product_info')->value['list_price']) ? $_smarty_tpl->getVariable('product_info')->value['list_price'] : null)>0&&(isset($_smarty_tpl->getVariable('product_info')->value['list_price']) ? $_smarty_tpl->getVariable('product_info')->value['list_price'] : null)>(isset($_smarty_tpl->getVariable('product_info')->value['Price']) ? $_smarty_tpl->getVariable('product_info')->value['Price'] : null)&&(isset($_smarty_tpl->getVariable('product_info')->value['Price']) ? $_smarty_tpl->getVariable('product_info')->value['Price'] : null)>0){?>
<span class="old"><?php echo (isset($_smarty_tpl->getVariable('product_info')->value['list_price_letters']) ? $_smarty_tpl->getVariable('product_info')->value['list_price_letters'] : null);?>
</span>
<?php }?>
<?php if ((isset($_smarty_tpl->getVariable('product_info')->value[28]) ? $_smarty_tpl->getVariable('product_info')->value[28] : null)>0&&(isset($_smarty_tpl->getVariable('product_info')->value['real']) ? $_smarty_tpl->getVariable('product_info')->value['real'] : null)>0){?>
<p>
<a id='tocart_<?php echo (isset($_smarty_tpl->getVariable('product_info')->value['productID']) ? $_smarty_tpl->getVariable('product_info')->value['productID'] : null);?>
' class="medium blue awesome" href="/add2cart/<?php echo smarty_modifier_replace((isset($_smarty_tpl->getVariable('product_info')->value['hurl']) ? $_smarty_tpl->getVariable('product_info')->value['hurl'] : null),'product/','');?>
"><?php echo @ADD_TO_CART_STRING;?>
 &raquo;</a>
</p>
<?php }?>
</p><?php if ((isset($_smarty_tpl->getVariable('product_info')->value['count_review']) ? $_smarty_tpl->getVariable('product_info')->value['count_review'] : null)){?><p><?php echo @ADMIN_REVIEW;?>
: <?php echo (isset($_smarty_tpl->getVariable('product_info')->value['count_review']) ? $_smarty_tpl->getVariable('product_info')->value['count_review'] : null);?>
</p><?php }?>
 </div>
<div class="clr"></div></div>