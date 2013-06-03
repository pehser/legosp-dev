<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 22:27:56
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/search_expanded.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:9478948515138f84c1c9398-71382666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e99ba11dd1980fcd68c78d8435df3855198ebbb' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/search_expanded.tpl.html',
      1 => 1360849050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9478948515138f84c1c9398-71382666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
?>
<script type="text/javascript">
function testKey(e)
{
  // Make sure to use event.charCode if available
  var key = (typeof e.charCode == 'undefined' ? e.keyCode : e.charCode);

  // Ignore special keys
  if (e.ctrlKey || e.altKey || key < 32)
    return true;

  key = String.fromCharCode(key);
  return /[\d\.]/.test(key);
}
function cheksub(e)
{
   
        var str = "";
        var searchString    = $(".search_button").val();
        // получаем то, что написал пользователь
        subcat=0; 
        if ($("#subcat").attr('checked'))
        subcat=1;
        // формируем строку запроса
        var data            = 'search='+ searchString+'&sub='+subcat;

        // если searchString не пустая
        if(searchString) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "http://<?php echo @CONF_SHOP_URL;?>
/includes/search_simple.php?search_expanded_ajax=1",
                data: data,
               beforeSend: function(html) { // запустится до вызова запроса
                    $("#results").html('');
               }, 
               success: function(html){ // запустится после получения резуотатов
                    $("#results").show();
                    $("#results").append(html);
              }
            });
        }
}

</script>


<script>


$(document).ready(function() {

    $(".search_button").change(function() {
        var str = "";
        var searchString    = $(this).val();
        // получаем то, что написал пользователь
        subcat=0; 
        if ($("#subcat").attr('checked'))
        subcat=1; 
        // формируем строку запроса
        var data            = 'search='+ searchString+'&sub='+subcat;

        // если searchString не пустая
        if(searchString) {
            // делаем ajax запрос
            $.ajax({
                type: "POST",
                url: "http://<?php echo @CONF_SHOP_URL;?>
/includes/search_simple.php?search_expanded_ajax=1",
                data: data,
               beforeSend: function(html) { // запустится до вызова запроса
                    $("#results").html('');
               }, 
               success: function(html){ // запустится после получения резуотатов
                    $("#results").show();
                    $("#results").append(html);
              }
            });
        }
        return false;
    });
   

});

</script>
<div class="top">
      <h1>
      <?php echo @STRING_ADVANCED_SEACH_TITLE;?>

      </h1>
</div>
<div class="middle">
<?php if ($_smarty_tpl->getVariable('products_to_show_count')->value>@CONF_PRODUCTS_PER_PAGE){?>
<p style="text-align: right;">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('products_to_show_count')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = ((int)@CONF_PRODUCTS_PER_PAGE) == 0 ? 1 : (int)@CONF_PRODUCTS_PER_PAGE;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
 <a onclick="document.getElementById('page').value='<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
'; $('#search_form').submit();"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
</a>
<?php endfor; endif; ?>
</p>
<?php }?>
 <form method="POST" action="./search_expanded/" id="search_form">
<div>
  <?php echo @ADMIN_CATEGORY_TITLE_PR;?>
: <select name="categorySelect" class="search_button">
   <option value="0"><?php echo @STRING_UNIMPORTANT;?>
</option>
   <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('search_categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
     <option  <?php if ((isset($_smarty_tpl->getVariable('post')->value['categorySelect']) ? $_smarty_tpl->getVariable('post')->value['categorySelect'] : null)==(isset($_smarty_tpl->tpl_vars['cat']->value['categoryID']) ? $_smarty_tpl->tpl_vars['cat']->value['categoryID'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['cat']->value['categoryID']) ? $_smarty_tpl->tpl_vars['cat']->value['categoryID'] : null);?>
"><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=(isset($_smarty_tpl->tpl_vars['cat']->value['level']) ? $_smarty_tpl->tpl_vars['cat']->value['level'] : null)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>&nbsp;&nbsp;&nbsp;<?php endfor; endif; ?><?php echo (isset($_smarty_tpl->tpl_vars['cat']->value['name']) ? $_smarty_tpl->tpl_vars['cat']->value['name'] : null);?>
</option>
   <?php }} ?>
   </select>
   <input type="checkbox" id="subcat" onclick="cheksub('e')" name="search_in_subcategory" <?php if ((isset($_smarty_tpl->getVariable('post')->value['search_in_subcategory']) ? $_smarty_tpl->getVariable('post')->value['search_in_subcategory'] : null)){?> CHECKED <?php }?> value="1"> <?php echo @STRING_SEARCH_IN_SUBCATEGORIES;?>
 
</div>
   <input type="text" style="color: rgb(153, 153, 153);" onkeydown="this.style.color = '000000'" onclick="this.value = '';" onblur="if(this.value=='') this.value='<?php echo @STRING_SEARCH;?>
';" id="keyword" name="keyword"  value="<?php if ((isset($_smarty_tpl->getVariable('post')->value['keyword']) ? $_smarty_tpl->getVariable('post')->value['keyword'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('post')->value['keyword']) ? $_smarty_tpl->getVariable('post')->value['keyword'] : null);?>
<?php }else{ ?><?php echo @STRING_SEARCH;?>
<?php }?>">
   <br> 
   <?php echo @STRING_PRICE_FROM;?>
: <input type="text" value="<?php if ((isset($_smarty_tpl->getVariable('post')->value['search_price_from']) ? $_smarty_tpl->getVariable('post')->value['search_price_from'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('post')->value['search_price_from']) ? $_smarty_tpl->getVariable('post')->value['search_price_from'] : null);?>
<?php }?>" onkeypress="return testKey(event)" size="10" name="search_price_from"> <br>
   <?php echo @STRING_PRICE_TO;?>
: <input type="text" value="<?php if ((isset($_smarty_tpl->getVariable('post')->value['search_price_to']) ? $_smarty_tpl->getVariable('post')->value['search_price_to'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('post')->value['search_price_to']) ? $_smarty_tpl->getVariable('post')->value['search_price_to'] : null);?>
<?php }?>" onkeypress="return testKey(event)" size="10" name="search_price_to"> <br>
   <input type="hidden" value="yes" name="search">
   <input type="hidden" value="1" id="page" name="page">
<div id="results">
   <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('options_search')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?> 
     <p><b><?php echo (isset($_smarty_tpl->tpl_vars['option']->value['name']) ? $_smarty_tpl->tpl_vars['option']->value['name'] : null);?>
</b>
     <?php if ((count((isset($_smarty_tpl->tpl_vars['option']->value['variant']) ? $_smarty_tpl->tpl_vars['option']->value['variant'] : null))>1)){?>
     <select name="variant[<?php echo (isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null);?>
]">    
       <option value="0"><?php echo @STRING_UNIMPORTANT;?>
</option>
     <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['option']->value['variant']) ? $_smarty_tpl->tpl_vars['option']->value['variant'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value){
?>
       <option <?php if ((isset($_smarty_tpl->getVariable('post')->value['variant'][(isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null)]) ? $_smarty_tpl->getVariable('post')->value['variant'][(isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null)] : null)==(isset($_smarty_tpl->tpl_vars['variant']->value['variantID']) ? $_smarty_tpl->tpl_vars['variant']->value['variantID'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['variant']->value['variantID']) ? $_smarty_tpl->tpl_vars['variant']->value['variantID'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['variant']->value['name']) ? $_smarty_tpl->tpl_vars['variant']->value['name'] : null);?>
</option>
     <?php }} ?> 
     </select>
     <?php }else{ ?>
         <?php echo (isset($_smarty_tpl->tpl_vars['option']->value['variant'][0]['name']) ? $_smarty_tpl->tpl_vars['option']->value['variant'][0]['name'] : null);?>
 <input type="checkbox" <?php if ((isset($_smarty_tpl->getVariable('post')->value['variant_chek'][(isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null)]) ? $_smarty_tpl->getVariable('post')->value['variant_chek'][(isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null)] : null)==(isset($_smarty_tpl->tpl_vars['option']->value['variant'][0]['variantID']) ? $_smarty_tpl->tpl_vars['option']->value['variant'][0]['variantID'] : null)){?>CHECKED<?php }?> id="description" name="variant_chek[<?php echo (isset($_smarty_tpl->tpl_vars['key']->value) ? $_smarty_tpl->tpl_vars['key']->value : null);?>
]" value="<?php echo (isset($_smarty_tpl->tpl_vars['option']->value['variant'][0]['variantID']) ? $_smarty_tpl->tpl_vars['option']->value['variant'][0]['variantID'] : null);?>
">
     </p> 
     <?php }?>
   <?php }} ?>
</div>
<p><input type="submit" name="advanced_search_in_category" value="<?php echo @STRING_GO_SEARCH;?>
">     <button type="reset" onclick="$('#clear_form').submit();" >Clear</button></p>

 </form>  

  <?php if (($_smarty_tpl->getVariable('products_to_show_count')->value !== null)){?>
	<p style="text-align: right;"><?php echo $_smarty_tpl->getVariable('catalog_navigator')->value;?>
</p><br />
	<table id="products" style="text-align: center; vertical-align: top; width: 100%;" cellpadding="0" cellspacing="0">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['name'] = 'i1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('products_to_show')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] = (int)$_smarty_tpl->getVariable('products_to_show_count')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total']);
?>
<?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['i1']['index'] % @CONF_COLUMNS_PER_PAGE)){?><tr><?php }?>
	<td style="text-align: center; vertical-align: top; padding: 5px; width: <?php echo smarty_function_math(array('equation'=>"x/y",'x'=>100,'y'=>sprintf("%d",@CONF_COLUMNS_PER_PAGE)),$_smarty_tpl);?>
%">
<?php $_template = new Smarty_Internal_Template("product_brief.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('product_info',(isset($_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']]) ? $_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']] : null));$_template->assign('options',$_smarty_tpl->getVariable('options')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	    </td>
<?php if (!(($_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']+1) % @CONF_COLUMNS_PER_PAGE)){?></tr><?php }?>
<?php endfor; endif; ?>
  <?php }?>
       </table>
</div>
<form method="POST" action="./search_expanded/" id="clear_form">
</form>