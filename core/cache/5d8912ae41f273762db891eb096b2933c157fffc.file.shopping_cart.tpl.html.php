<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 22:05:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/shopping_cart.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:10473995115138f31bd30357-32409339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d8912ae41f273762db891eb096b2933c157fffc' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/shopping_cart.tpl.html',
      1 => 1360849053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10473995115138f31bd30357-32409339',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


    <script type="text/javascript"><!--
	var ship;

	var ship_val_id=new Array (<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('shipping_list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php echo (isset($_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null);?>
,<?php endfor; endif; ?>0);
	var ship_val=new Array (<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('shipping_list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>'<?php echo (isset($_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3]) ? $_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3] : null);?>
',<?php endfor; endif; ?>'<?php echo @CONF_CURRENCY_ID_LEFT;?>
0<?php echo @CONF_CURRENCY_ID_RIGHT;?>
');


	function get_values(){
	  ship=parseInt(document.getElementById("shipping").value);
	  var i=0;
	  while (ship_val_id[i] != ship)
		{
		i++;
		}
	  document.getElementById("shipping_cost_show").innerHTML=ship_val[i];
	  }

    -->
    </script>

<div class="box">
<h3 class="box-name"><?php if ($_smarty_tpl->getVariable('cart_total')->value!=''){?><?php echo @CART_TITLE;?>
<?php }else{ ?><?php echo @CART_EMPTY;?>
<?php }?></h3>
<?php if ($_smarty_tpl->getVariable('cart_total')->value!=''){?>
	<form action="./<?php if (@CONF_CHPU){?>cart/<?php }else{ ?>index.php?shopping_cart=yes<?php }?>" method="post" id="cart">  
	  <table class="cart" cellpadding="0" cellspacing="0">
	    <tr>
	      <th colspan="2"><?php echo @TABLE_PRODUCT_NAME;?>
</th>
	      <th class="a-center" width="160"><?php echo @TABLE_PRODUCT_QUANTITY;?>
</th>
	      <th class="a-center" width="140"><?php echo @TABLE_PRODUCT_COST;?>
</th>
	      <th class="a-center" width="24"><a href="./cart/&clear"><img src="./css/css_<?php echo @CONF_COLOR_SCHEME;?>
/images/del.png" title="<?php echo @CART_CLEAR;?>
" alt="<?php echo @CART_CLEAR;?>
" /></a></th>
	    </tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('cart_content')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
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
	    <tr class="line" id="line_<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
">
	      <td class="row1" width="60"><a href="./<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl'] : null);?>
"><img src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['picture']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['picture'] : null);?>
" class="img" alt="" /></a></td>
	      <td class="row1">
		<a href="./<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl'] : null);?>
" id="name<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
"><b>
<?php if ((isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_code']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_code'] : null)!=''){?>[<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_code']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['product_code'] : null);?>
] <?php }?><?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'] : null);?>

		</b></a>
	      </td>
	      <td class="row1 a-center"><input type="text" name="count_<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
" id="count_<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity'] : null);?>
" size="4" class="text a-center" min=<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q'] : null);?>
 />
              <?php if ((isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q'] : null)>(isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['quantity'] : null)){?> <?php $_smarty_tpl->tpl_vars["min_q"] = new Smarty_variable("1", null, null);?><br /><label for="count_70" generated="true" class="error f11"><?php echo @ORDERS_MIN_PRODUCT;?>
<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['min_q'] : null);?>
</label><?php }?>
               </td>
	      <td class="row1 a-center" id="price_<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
"><span class="f14"><?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cost']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['cost'] : null);?>
</span></td>
	      <td class="row1 a-center"><a href="./cart/&remove=<?php echo (isset($_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) ? $_smarty_tpl->getVariable('cart_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'] : null);?>
"><img src="./css/css_<?php echo @CONF_COLOR_SCHEME;?>
/images/del.png" title="<?php echo @DELETE_BUTTON;?>
" alt="<?php echo @DELETE_BUTTON;?>
" /></a></td>
	    </tr>
<?php endfor; endif; ?>
<?php if (@CONF_FAST_ORDER_ON>0){?>
	    <tr><td colspan="5">&nbsp;</td></tr>
	    <tr>
	      <td align="center">&nbsp;</td>
	      <td align="left"><?php echo @ADMIN_FAST_ORDER;?>
</td>
	      <td align="left"><input type="checkbox" name="get_fast_order" <?php if ($_smarty_tpl->getVariable('get_fast_order')->value>0){?> checked<?php }?> /></td>
	      <td align="left" colspan="2"><?php echo @CONF_FAST_ORDER_COST;?>
 <?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
	    </tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('shipping_list')->value){?>
	    <tr class="even">
	      <td align="center">&nbsp;</td>
	      <td style="vertical-align:middle;"><b><?php echo @STRING_SHIPPING;?>
</b></td>
<?php if ($_smarty_tpl->getVariable('shipping_free')->value!=1){?>
	      <td class="a-center">
		<select name="shipping" onchange="get_values();" id="shipping" style="width: 150px;">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('shipping_list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		  <option value="<?php echo (isset($_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('shipping_selected')->value[0]) ? $_smarty_tpl->getVariable('shipping_selected')->value[0] : null)==(isset($_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) ? $_smarty_tpl->getVariable('shipping_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2] : null);?>
</option>
<?php endfor; endif; ?>
		</select>
	      </td>
	      <td class="a-center" style="vertical-align:middle;"><span id="shipping_cost_show"><?php echo (isset($_smarty_tpl->getVariable('shipping_selected')->value[3]) ? $_smarty_tpl->getVariable('shipping_selected')->value[3] : null);?>
</span></td>
		  <td></td>
<?php }else{ ?>
	      <td></td>
	      <td align="left" colspan="2"><b><?php echo @STRING_SHIPPING_FREE;?>
</b></td>
<?php }?>
	    </tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('present_list')->value!=null){?>
	    <tr><td colspan="5">&nbsp;</td></tr>
	    <tr>
	      <td align="center"><img src="./images/present.png" alt="<?php echo @STRING_PRESENT;?>
" /></td>
<?php if (@CONF_PRESENT_SELECT==1){?>
	      <td align="left"><?php echo @STRING_PRESENT_SELECT;?>
</td>
	      <td align="left">
		<select name="presents" id="presents" style="width: 150px;">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('present_list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		  <option value="<?php echo (isset($_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null);?>
" <?php if ($_smarty_tpl->getVariable('present_selected')->value==(isset($_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) ? $_smarty_tpl->getVariable('present_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2] : null);?>
</option>
<?php endfor; endif; ?>
		</select>
	      </td>
<?php }else{ ?>
	      <td align="left"><?php if (@CONF_PRESENT_SELECT==1){?><?php echo @STRING_PRESENT_SELECT;?>
<?php }else{ ?><a href="./<?php echo (isset($_smarty_tpl->getVariable('present_list')->value[0][3]) ? $_smarty_tpl->getVariable('present_list')->value[0][3] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('present_list')->value[0][2]) ? $_smarty_tpl->getVariable('present_list')->value[0][2] : null);?>
</a><?php }?></td>
	      <td align="left">
	      </td>
<?php }?>
	      <td align="left" colspan="2"><b><?php echo @STRING_PRESENT;?>
</b></td>
	    </tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('discount')->value!=null){?>
	    <tr><td colspan="5">&nbsp;</td></tr>
	    <tr>
	      <td align="center"><img src="./images/discount.png" alt="<?php echo @ADMIN_DISCOUNT;?>
" /></td>
	      <td align="left"><?php echo @ADMIN_DISCOUNT;?>
</td>
	      <td align="left"><?php echo (isset($_smarty_tpl->getVariable('discount')->value[1]) ? $_smarty_tpl->getVariable('discount')->value[1] : null);?>
 %</td>
	      <td align="left" colspan="2"><b><?php echo (isset($_smarty_tpl->getVariable('discount')->value[3]) ? $_smarty_tpl->getVariable('discount')->value[3] : null);?>
</b></td>
	    </tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('minimal')->value!=null){?>
	    <tr class="even">
	      <td align="left">&nbsp;</td>
	      <td align="left"><br /><?php echo (isset($_smarty_tpl->getVariable('minimal')->value[0]) ? $_smarty_tpl->getVariable('minimal')->value[0] : null);?>
</td>
	      <td align="left">&nbsp;</td>
	      <td align="left" colspan="2"><br /><?php echo (isset($_smarty_tpl->getVariable('minimal')->value[1]) ? $_smarty_tpl->getVariable('minimal')->value[1] : null);?>
 <?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
	    </tr>
<?php }?>
	    <tr><td colspan="5">&nbsp;</td></tr>
	    <tr class="even">
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td class="a-right"><b class="f15"><?php echo @TABLE_TOTAL;?>
</b></td>
	      <td class="a-center"><b class="pprice b f15"><?php echo $_smarty_tpl->getVariable('cart_total')->value;?>
</b></td>
	      <td>&nbsp;</td>
	    </tr>
	  </table>
	  <input type="hidden" name="update" value="1" />
	  <input type="hidden" name="shopping_cart" value="1" />
          <?php if ((!@CONF_SHOW_ADD2CART_INSTOCK)){?>

          <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('in_stock')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['foo']->key;
?> 
             <input type="hidden" name="products_instock_<?php echo (isset($_smarty_tpl->tpl_vars['id']->value) ? $_smarty_tpl->tpl_vars['id']->value : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['foo']->value) ? $_smarty_tpl->tpl_vars['foo']->value : null);?>
" />
          <?php }} ?>      
          <?php }?> 
	</form>
	<br />
	<form action="./<?php echo $_smarty_tpl->getVariable('nurl')->value;?>
" method="post" id="order">
	  <div class="pdv">
	    <table width="100%;">
	      <tr>
		<td align="left"><a href="<?php echo $_smarty_tpl->getVariable('go_back')->value;?>
" class="medium blue awesome"><?php echo @STRING_BACK_TO_SHOPPING;?>
</a></td>
		<td align="center"><?php if (!$_smarty_tpl->getVariable('min_q')->value){?><a onclick="$('#order').submit();" class="medium blue awesome"><?php echo @CART_PROCEED_TO_CHECKOUT;?>
</a><?php }?></td>
		<td align="right"><a onclick="cart_update('cart');" class="medium blue awesome"><?php echo @UPDATE_BUTTON;?>
</a></td>
	      </tr>
	    </table>
	  </div>
	 <input type="hidden" name="order_custinfo" value="yes" />   
	</form>
<?php }?>
</div>