<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 22:41:05
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/brands.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:14698033355138fb614c2544-83076160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5decbf65bcedd664cb86860ab49b7e27ecea4999' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/brands.tpl.html',
      1 => 1361121756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14698033355138fb614c2544-83076160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.html_options.php';
?>
<div class="box">
   <h3 class="box-name"><?php echo (isset($_smarty_tpl->getVariable('selected_brand')->value['name']) ? $_smarty_tpl->getVariable('selected_brand')->value['name'] : null);?>
</h3>

	<div style="text-align: justify; vertical-align: top;">
<?php if ((isset($_smarty_tpl->getVariable('selected_brand')->value['brief']) ? $_smarty_tpl->getVariable('selected_brand')->value['brief'] : null)||(isset($_smarty_tpl->getVariable('selected_brand')->value['Pict']) ? $_smarty_tpl->getVariable('selected_brand')->value['Pict'] : null)){?>
	  <table width="100%" style="text-align: justify; border-bottom: #ccc solid 1px">
	    <tr>
	      <td width="1px"><?php if ((isset($_smarty_tpl->getVariable('selected_brand')->value['Pict']) ? $_smarty_tpl->getVariable('selected_brand')->value['Pict'] : null)){?><a href="./<?php echo (isset($_smarty_tpl->getVariable('selected_brand')->value[11]) ? $_smarty_tpl->getVariable('selected_brand')->value[11] : null);?>
"><img style="padding:7px; float: left;" src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('selected_brand')->value['Pict']) ? $_smarty_tpl->getVariable('selected_brand')->value['Pict'] : null);?>
" alt="<?php echo (isset($_smarty_tpl->getVariable('selected_brand')->value['name']) ? $_smarty_tpl->getVariable('selected_brand')->value['name'] : null);?>
" /></a><?php }?>
	      <?php echo (isset($_smarty_tpl->getVariable('selected_brand')->value['brief']) ? $_smarty_tpl->getVariable('selected_brand')->value['brief'] : null);?>
</td>
	    </tr>
	  </table>
<?php }?>
	</div>
	<div style="text-align: right;">
	  cортировать по:&nbsp;&nbsp;
	  <select name="orderby" onchange="location='http://<?php echo @CONF_SHOP_URL;?>
/'+this.value">
	    <?php echo smarty_function_html_options(array('values'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_values']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_values'] : null),'output'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_names']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_names'] : null),'selected'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_selected']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_selected'] : null)),$_smarty_tpl);?>

	  </select>
	</div>

<?php if ($_smarty_tpl->getVariable('products_to_show_count')->value!=null){?>
<?php $_template = new Smarty_Internal_Template("js.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div class="navigation"><?php echo $_smarty_tpl->getVariable('catalog_navigator')->value;?>
</div>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['name'] = 'i1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('products_to_show')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] = (int)$_smarty_tpl->getVariable('products_to_show_count')->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i1']['total']);
?>
<?php $_template = new Smarty_Internal_Template("product_brief.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('product_info',(isset($_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']]) ? $_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']] : null)); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>    
<?php endfor; endif; ?>
	<div class="navigation"><?php echo $_smarty_tpl->getVariable('catalog_navigator')->value;?>
</div>
<?php }else{ ?>
	<p style="text-align: center;"><?php echo @STRING_EMPTY_CATEGORY;?>
</p>
<?php }?>

</div>  