<?php /* Smarty version Smarty-3.0.4, created on 2013-03-13 17:45:32
         compiled from "./core/admin_tmpl/catalog.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:199728185151409f1cb567e3-09394202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ec61be2fc275be8176074320bfd6f75440cd12c' => 
    array (
      0 => './core/admin_tmpl/catalog.tpl.html',
      1 => 1360848395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199728185151409f1cb567e3-09394202',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

	<?php if ($_smarty_tpl->getVariable('safemode')->value){?>
	<p><font class=faq color=red><b><?php echo $_smarty_tpl->getVariable('safemode')->value;?>
</b></font>
	<?php }?>

	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('admin_sub_dpt')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


