<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:39:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/shopping_cart_info.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:6317720145138ed03c4b9f5-88381534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0623cbc4c2bbeee3bde374174c3e33f455d847dd' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/shopping_cart_info.tpl.html',
      1 => 1360849049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6317720145138ed03c4b9f5-88381534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="module_cart" class="carts">
<?php if ($_smarty_tpl->getVariable('shopping_cart_value')->value){?>
	<a href="./<?php if (@CONF_CHPU){?>cart/<?php }else{ ?>index.php?shopping_cart=yes<?php }?>"><?php echo @INDEX_cart;?>
<br />
	<span id="sci"><?php echo $_smarty_tpl->getVariable('shopping_cart_items')->value;?>
</span></a>
<?php }else{ ?>
	<a href="./<?php if (@CONF_CHPU){?>cart/<?php }else{ ?>index.php?shopping_cart=yes<?php }?>"><?php echo @INDEX_cart;?>
<br />
	<span id="sci">0</span></a>
<?php }?>
</div>