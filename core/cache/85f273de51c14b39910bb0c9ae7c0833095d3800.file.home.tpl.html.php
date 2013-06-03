<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:39:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/home.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:2445394515138ed03e05e35-91066069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f273de51c14b39910bb0c9ae7c0833095d3800' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/home.tpl.html',
      1 => 1360849050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445394515138ed03e05e35-91066069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.date_format.php';
?> <?php $_template = new Smarty_Internal_Template("about_info.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
 <div class="grid w220">
  <div class="box">
   <h3 class="box-name"><?php echo @Recent_Additions;?>
</h3>
   <ul class="list">
    <?php  $_smarty_tpl->tpl_vars['new_product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('home_new_products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['new_product']->key => $_smarty_tpl->tpl_vars['new_product']->value){
?>
    <li><a href="./<?php echo @REDIRECT_PRODUCT;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['new_product']->value['hurl']) ? $_smarty_tpl->tpl_vars['new_product']->value['hurl'] : null);?>
" class="b"><?php echo (isset($_smarty_tpl->tpl_vars['new_product']->value['name']) ? $_smarty_tpl->tpl_vars['new_product']->value['name'] : null);?>
</a></li>
   <?php }} ?>
   </ul>
  </div>
 </div><div class="grid w220">
  <div class="box">
   <h3 class="box-name"><?php echo @Our_News;?>
</h3>
   <ul class="list">
   <?php  $_smarty_tpl->tpl_vars['new_new'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['new_new']->key => $_smarty_tpl->tpl_vars['new_new']->value){
?>
    <li><a href="./<?php echo @REDIRECT_NEWS;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['new_new']->value['hurl']) ? $_smarty_tpl->tpl_vars['new_new']->value['hurl'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['new_new']->value['meta_title']) ? $_smarty_tpl->tpl_vars['new_new']->value['meta_title'] : null);?>
</a> <div class="date"><?php echo smarty_modifier_date_format((isset($_smarty_tpl->tpl_vars['new_new']->value['date']) ? $_smarty_tpl->tpl_vars['new_new']->value['date'] : null),"%d.%m.%Y");?>
</div></li>
   <?php }} ?>
   </ul>
    <a href="./news/" class="readmore"><?php echo @ADMIN_NEWS_ALL;?>
 &raquo;</a>
  </div> 
 </div><div class="grid w220">
  <div class="box">
   <h3 class="box-name"><?php echo @Publications;?>
</h3>
   <ul class="list">
   <?php  $_smarty_tpl->tpl_vars['new_page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['new_page']->key => $_smarty_tpl->tpl_vars['new_page']->value){
?>
    <li><a href="./<?php echo @REDIRECT_PAGES;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['new_page']->value['hurl']) ? $_smarty_tpl->tpl_vars['new_page']->value['hurl'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['new_page']->value['meta_title']) ? $_smarty_tpl->tpl_vars['new_page']->value['meta_title'] : null);?>
</a> <div class="date"><?php echo smarty_modifier_date_format((isset($_smarty_tpl->tpl_vars['new_page']->value['date']) ? $_smarty_tpl->tpl_vars['new_page']->value['date'] : null),"%#d.%m.%Y");?>
</div></li>
   <?php }} ?>
   </ul>
   <a href="./<?php echo @REDIRECT_PAGES;?>
/" class="readmore"><?php echo @ADMIN_PAGE_ALL;?>
 &raquo;</a>
  </div>
 </div><div class="clr"></div>