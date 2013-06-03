<?php /* Smarty version Smarty-3.0.4, created on 2013-03-08 07:10:34
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/order_place.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:84721992513972ca4e79c8-70352054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd4cccdb3caaf3c0fe4a91771f4d3523aeeb9ab5' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/order_place.tpl.html',
      1 => 1360849046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84721992513972ca4e79c8-70352054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.html_options.php';
?>

    <div class="top">
      <h1><?php echo @STRING_ORDER_PLACED;?>
</h1>
    </div>
    <div class="middle">
      <div style="width: 100%; margin-bottom: 30px;">
<?php if ($_smarty_tpl->getVariable('orderer')->value){?>
	<br />
	<table cellspacing="0" cellpadding="0" width="100%">
	  <tr>
	    <td style="color: #777; font-size: 14px; font-weight: bold;"><?php echo @Your_order_number;?>
: <?php echo (isset($_smarty_tpl->getVariable('orderer')->value[0]) ? $_smarty_tpl->getVariable('orderer')->value[0] : null);?>
</td>
	    <td style="text-align: right"><a href="./printorder/" title="<?php echo @STRING_PRINT_ORDER;?>
"><img src="./images/print.png" alt="" /></a></td>
	  </tr>
	</table>
	<br />
	<table cellspacing="0" cellpadding="0">
	  <tr>
	    <td style="width: 150px"><b><?php echo @ORDER_ORDERER;?>
:</b></td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[1]) ? $_smarty_tpl->getVariable('orderer')->value[1] : null);?>
 <?php echo (isset($_smarty_tpl->getVariable('orderer')->value[2]) ? $_smarty_tpl->getVariable('orderer')->value[2] : null);?>
</td>
	  </tr>
	  <tr>
	    <td style="width: 150px"><b><?php echo @ORDER_PHONE;?>
:</b></td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[6]) ? $_smarty_tpl->getVariable('orderer')->value[6] : null);?>
</td>
	  </tr>
	  <tr>
	    <td style="width: 150px"><b><?php echo @ORDER_EMAIL;?>
:</b></td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[3]) ? $_smarty_tpl->getVariable('orderer')->value[3] : null);?>
</td>
	  </tr>
	  <tr>
	    <td style="width: 150px"><b><?php echo @ORDER_ADRESS;?>
:</b></td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[4]) ? $_smarty_tpl->getVariable('orderer')->value[4] : null);?>
,<br /><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[5]) ? $_smarty_tpl->getVariable('orderer')->value[5] : null);?>
</td>
	  </tr>
	</table>

	<br />
	<table cellspacing="0" cellpadding="0" width="100%">
	  <tr style="font-weight: bold;">
	    <td><?php echo @ADMIN_PRODUCT_NAME;?>
</td>
	    <td style="text-align: center; width: 1px;"><?php echo @TABLE_PRODUCT_QUANTITY;?>
</td>
	    <td style="text-align: center; width: 100px;"><?php echo @ADMIN_PRODUCT_PRICE;?>
</td>
	    <td style="text-align: center; width: 100px;"><?php echo @TABLE_PRODUCT_SUMM;?>
</td>
	  </tr>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('order')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <tr>
	    <td><?php echo (isset($_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0]) ? $_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][0] : null);?>
</td>
	    <td style="text-align: center; width: 1px;"><?php echo (isset($_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) ? $_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2] : null);?>
</td>
	    <td style="text-align: right; width: 100px;"><?php echo (isset($_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1]) ? $_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1] : null);?>
</td>
	    <td style="text-align: right; width: 100px;"><?php echo (isset($_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('order')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null);?>
</td>
	  </tr>
<?php endfor; endif; ?>
	  <tr style="font-weight: bold;">
	    <td>&nbsp;<br /><?php echo @TABLE_TOTAL;?>
:</td>
	    <td></td>
	    <td></td>
	    <td style="text-align: right; width: 100px;">&nbsp;<br /><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[9]) ? $_smarty_tpl->getVariable('orderer')->value[9] : null);?>
</td>
	  </tr>
	  <tr style="font-weight: bold;">
	    <td colspan="4">&nbsp;<br /><?php echo @CUSTOMER_COMMENT;?>
</td>
	  </tr>
	  <tr>
	    <td colspan="4"><?php echo (isset($_smarty_tpl->getVariable('orderer')->value[7]) ? $_smarty_tpl->getVariable('orderer')->value[7] : null);?>
</td>
	  </tr>
	  <tr>
	    <td colspan="4">&nbsp;</td>
	  </tr>
<?php if ((isset($_smarty_tpl->getVariable('orderer')->value[8]) ? $_smarty_tpl->getVariable('orderer')->value[8] : null)){?>
	  <tr>
	    <td colspan="4"><b><?php echo @ADMIN_MANAGER_NAME_MAIL;?>
:</b> <?php echo (isset($_smarty_tpl->getVariable('orderer')->value[8]) ? $_smarty_tpl->getVariable('orderer')->value[8] : null);?>
</td>
	  </tr>
<?php }?>
	  <tr style="font-weight: bold;">
	    <td colspan="4"><br /><?php echo @EMAIL_OUR_MANAGER_WILL_CONTACT_YOU;?>
</td>
	  </tr>
	  <tr>
	    <td colspan="4">&nbsp;<br />&nbsp;<br />&nbsp;<br /></td>
	  </tr>
<?php if ($_smarty_tpl->getVariable('payment_list')->value){?>
	  <tr>
	    <td><b><?php echo @STRING_PAYMENT_SELECT;?>
</b></td>
	    <td colspan="3" style="text-align: left">
	      <form action="./<?php if (@CONF_CHPU){?>payment/<?php }else{ ?>index.php?payment<?php }?>" name="payment_form" id="payment_form" method="post">
	      <select name="payment_type" onchange="show_paybutton(this.value)" style="width: 350px">
		<?php echo smarty_function_html_options(array('values'=>(isset($_smarty_tpl->getVariable('payment_list')->value['values']) ? $_smarty_tpl->getVariable('payment_list')->value['values'] : null),'output'=>(isset($_smarty_tpl->getVariable('payment_list')->value['names']) ? $_smarty_tpl->getVariable('payment_list')->value['names'] : null)),$_smarty_tpl);?>

	      </select>
	      </form>
	    </td>
	  </tr>
	  <tr>
	    <td colspan="4" style="text-align: center">&nbsp;<br /><span id="paybutton"><a onclick="$('#payment_form').submit(); return false;" href="./<?php if (@CONF_CHPU){?>payment/<?php }else{ ?>index.php?payment<?php }?>" class="button"><span><?php echo @STRING_GO_PAYMENTS;?>
</span></a></span></td>
	  </tr>
<?php }?>
	</table>
<?php }else{ ?>
	<?php echo @CART_EMPTY;?>

<?php }?>
      </div>
    </div>
    





