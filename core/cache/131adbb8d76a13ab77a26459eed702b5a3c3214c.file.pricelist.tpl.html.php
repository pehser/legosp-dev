<?php /* Smarty version Smarty-3.0.4, created on 2013-03-08 20:55:05
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/pricelist.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:413216768513a3409b29dd3-87374426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '131adbb8d76a13ab77a26459eed702b5a3c3214c' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/pricelist.tpl.html',
      1 => 1360849053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413216768513a3409b29dd3-87374426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

    <div class="top">
      <h1><?php echo @STRING_PRICELIST;?>
 <?php echo @CONF_SHOP_NAME;?>
 </h1>
    </div>
    <div class="middle">
      <div style="width: 100%; margin-bottom: 30px;">
	<table cellpadding="3" cellspacing="1" width="100%">
	  <tr>
	    <td style="width: 30px"><a href="./price.xls"><img src="./images/excel.png" alt="Скачать прайс в формате MS Excel" /></a></td>
	    <td style="text-align: right;">
стр.&nbsp;&nbsp;
 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['num']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['name'] = 'num';
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'] = is_array($_loop=(isset($_smarty_tpl->getVariable('pricelist_cnf')->value[1]) ? $_smarty_tpl->getVariable('pricelist_cnf')->value[1] : null)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total']);
?>
    <?php if ((isset($_smarty_tpl->getVariable('pricelist_cnf')->value[2]) ? $_smarty_tpl->getVariable('pricelist_cnf')->value[2] : null)==$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']){?><b><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['num']['index']+1;?>
</b>&nbsp;
    <?php }else{ ?>
        <a href="./pricelist/<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['num']['index'];?>
/"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['num']['index']+1;?>
&nbsp;</a>
    <?php }?>
 <?php endfor; endif; ?>
	    </td>
	  </tr>

<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)(isset($_smarty_tpl->getVariable('pricelist_cnf')->value[3]) ? $_smarty_tpl->getVariable('pricelist_cnf')->value[3] : null);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('pricelist_elements')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int)(isset($_smarty_tpl->getVariable('pricelist_cnf')->value[0]) ? $_smarty_tpl->getVariable('pricelist_cnf')->value[0] : null);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
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
	    <td <?php if ((isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null)!=1){?>colspan="2"<?php }?> style="background: #<?php echo (isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3] : null);?>
">
	      <a href="./<?php echo (isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][6]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][6] : null);?>
" <?php if (((isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null)==1)){?>class="price" <?php }else{ ?> class="ptitle"<?php }?>><?php echo (isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][1] : null);?>
</a>

	    </td>
<?php if (((isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][4] : null)==1)){?>
	    <td width="70px" align="center" bgcolor="#<?php echo (isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][3] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][5]) ? $_smarty_tpl->getVariable('pricelist_elements')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][5] : null);?>
</td>
<?php }?>
	  </tr>
<?php endfor; endif; ?>
	</table>
      </div>
    </div>