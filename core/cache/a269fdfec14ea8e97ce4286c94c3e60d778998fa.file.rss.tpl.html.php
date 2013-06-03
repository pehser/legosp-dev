<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 22:03:02
         compiled from "../css/css_legoSP/theme/rss.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:20684328145138f276114c09-80611591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a269fdfec14ea8e97ce4286c94c3e60d778998fa' => 
    array (
      0 => '../css/css_legoSP/theme/rss.tpl.html',
      1 => 1360849052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20684328145138f276114c09-80611591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.escape.php';
?><?php echo '<?xml';?> version="1.0" encoding="<?php echo @DEFAULT_CHARSET;?>
"<?php echo '?>';?>
<rss version="2.0">
<channel>
<title><?php echo @CONF_SHOP_NAME;?>
</title>
<link>http://<?php echo @CONF_SHOP_URL;?>
/</link>
<description><?php echo @CONF_SHOP_NAME;?>
</description>
<language>ru-RU</language>
<docs>http://blogs.law.harvard.edu/tech/rss</docs>
<generator>Shop-Script Lego SP</generator>
<managingEditor><?php echo @CONF_GENERAL_EMAIL;?>
</managingEditor>
<webMaster><?php echo @CONF_GENERAL_EMAIL;?>
</webMaster>
<lastBuildDate><?php echo smarty_modifier_date_format(time(),"%r");?>
</lastBuildDate>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
  <item>
    <title><?php echo (isset($_smarty_tpl->tpl_vars['product']->value['name']) ? $_smarty_tpl->tpl_vars['product']->value['name'] : null);?>
</title>
    <link>http://<?php echo @CONF_SHOP_URL;?>
/<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['hurl']) ? $_smarty_tpl->tpl_vars['product']->value['hurl'] : null)){?><?php echo @REDIRECT_PRODUCT;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['hurl']) ? $_smarty_tpl->tpl_vars['product']->value['hurl'] : null);?>
<?php }else{ ?>index.php?productID=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
<?php }?></link>
    <guid>http://<?php echo @CONF_SHOP_URL;?>
/<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['hurl']) ? $_smarty_tpl->tpl_vars['product']->value['hurl'] : null)){?><?php echo @REDIRECT_PRODUCT;?>
/<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['hurl']) ? $_smarty_tpl->tpl_vars['product']->value['hurl'] : null);?>
<?php }else{ ?>index.php?productID=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
<?php }?></guid>
    
    <?php $_smarty_tpl->tpl_vars["imag"] = new Smarty_variable((@ROOT_DIR)."/products_pictures/".((isset($_smarty_tpl->tpl_vars['product']->value['thumbnail']) ? $_smarty_tpl->tpl_vars['product']->value['thumbnail'] : null)), null, null);?>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['descr']) ? $_smarty_tpl->tpl_vars['product']->value['descr'] : null)){?><description><?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['product']->value['descr']) ? $_smarty_tpl->tpl_vars['product']->value['descr'] : null));?>
</description><?php }?>
  </item>
<?php }} ?>
</channel>
</rss>


