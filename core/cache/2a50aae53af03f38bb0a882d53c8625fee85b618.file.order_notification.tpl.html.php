<?php /* Smarty version Smarty-3.0.4, created on 2013-03-08 07:10:33
         compiled from "./css/css_legoSP/theme/mail/order_notification.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:90762275513972c9f12c00-37908051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a50aae53af03f38bb0a882d53c8625fee85b618' => 
    array (
      0 => './css/css_legoSP/theme/mail/order_notification.tpl.html',
      1 => 1360849055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90762275513972c9f12c00-37908051',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo @DEFAULT_CHARSET;?>
" />
  <style type="text/css">
  
    a:link {color: #777777;}
    a:hover {color: #555555;}
  
  </style>
 </head>
<body>
  <a href="http://<?php echo @CONF_SHOP_URL;?>
"><img border="0" src="cid:mail_img_1"></p></a>
  <hr color="#777777" />
  <h3><font color="#777777"><?php echo @EMAIL_HELLO;?>
, <?php echo $_smarty_tpl->getVariable('order_custname')->value;?>
</font></h3>
  <font color="#777777"><?php echo @STRING_ORDER_ID_MAIL;?>
: <?php echo $_smarty_tpl->getVariable('order_id')->value;?>
</font>
  <br />
  <br />
  <table cellspacing="0" cellpadding="3">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('order_content')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td><?php if ((isset($_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null)!=''){?>[<?php echo (isset($_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null);?>
]<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1]) ? $_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1] : null);?>
</td>
		<td align="center"><?php echo (isset($_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2]) ? $_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][2] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3]) ? $_smarty_tpl->getVariable('order_content')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3] : null);?>
</td>
	</tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->getVariable('shipping')->value!=null){?>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo @ADMIN_SHIPPING;?>
 <?php echo (isset($_smarty_tpl->getVariable('shipping')->value[2]) ? $_smarty_tpl->getVariable('shipping')->value[2] : null);?>
</td>
		<td>&nbsp;</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('shipping')->value[1]) ? $_smarty_tpl->getVariable('shipping')->value[1] : null);?>
 <?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
	</tr>
<?php }?>

<?php if ($_smarty_tpl->getVariable('minimal')->value!=null){?>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('minimal')->value[0]) ? $_smarty_tpl->getVariable('minimal')->value[0] : null);?>
</td>
		<td>&nbsp;</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('minimal')->value[1]) ? $_smarty_tpl->getVariable('minimal')->value[1] : null);?>
 <?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
	</tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('present')->value!=null){?>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('present')->value[2]) ? $_smarty_tpl->getVariable('present')->value[2] : null);?>
</td>
		<td>&nbsp;</td>
		<td><?php echo @STRING_PRESENT;?>
</td>
	</tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('discount')->value!=null){?>
	<tr>
		<td>&nbsp;</td>
		<td><b><?php echo @ADMIN_DISCOUNT;?>
</b></td>
		<td><?php echo (isset($_smarty_tpl->getVariable('discount')->value[1]) ? $_smarty_tpl->getVariable('discount')->value[1] : null);?>
 %</td>
		<td><b><?php echo (isset($_smarty_tpl->getVariable('discount')->value[3]) ? $_smarty_tpl->getVariable('discount')->value[3] : null);?>
</b></td>
	</tr>
<?php }?>
<?php if ($_smarty_tpl->getVariable('get_fast_order')->value!=null){?>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo @ADMIN_FAST_ORDER;?>
</td>
		<td>&nbsp;</td>
		<td><?php echo $_smarty_tpl->getVariable('get_fast_order')->value;?>
<?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
	</tr>
<?php }?>
	<tr>
		<td><font color="#777777"><b><?php echo @TABLE_TOTAL;?>
:</b></font></td>
		<td>&nbsp;</td>
		<td width="50px">&nbsp;</td>
		<td><font color="#777777"><b><?php echo $_smarty_tpl->getVariable('order_total')->value;?>
</b></font></td>
	</tr>
  </table>
<?php if ($_smarty_tpl->getVariable('manager')->value){?>
  <font color="#777777"><b><?php echo @ADMIN_MANAGER_NAME_MAIL;?>
:</b> <?php echo $_smarty_tpl->getVariable('manager')->value;?>
</font><br />
  <br />
<?php }?>
  <br />
  <font color="#777777"><b><?php echo @EMAIL_OUR_MANAGER_WILL_CONTACT_YOU;?>
</b></font><br />
  <hr color="#777777" />
  <font color="#777777">
    <b><i>
      <?php echo @EMAIL_SINCERELY;?>
, <a href="http://<?php echo @CONF_SHOP_URL;?>
"><?php echo @CONF_SHOP_NAME;?>
</a>
    </i></b>
  </font>
</body>
</html>