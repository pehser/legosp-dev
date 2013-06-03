<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 12:55:32
         compiled from "./core/admin_tmpl/inform.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1312188204513f09a4167159-46267642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f83a33ab81026f53d06e4c2b458f69e0055a9e72' => 
    array (
      0 => './core/admin_tmpl/inform.tpl.html',
      1 => 1360848409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312188204513f09a4167159-46267642',
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

