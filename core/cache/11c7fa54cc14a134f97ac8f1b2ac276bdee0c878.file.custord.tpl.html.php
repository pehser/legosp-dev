<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 14:04:24
         compiled from "./core/admin_tmpl/custord.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1674621829513f19c82126e3-94623247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11c7fa54cc14a134f97ac8f1b2ac276bdee0c878' => 
    array (
      0 => './core/admin_tmpl/custord.tpl.html',
      1 => 1360848405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1674621829513f19c82126e3-94623247',
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

