<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:52:39
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/category.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:17931000075138f0079ecf18-75431263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ddcb6c96b5c626d367cbb030cfa394f81a914e7' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/category.tpl.html',
      1 => 1361296305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17931000075138f0079ecf18-75431263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.html_options.php';
?>
<?php $_template = new Smarty_Internal_Template("js.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="box">
<h3 class="box-name"><?php echo (isset($_smarty_tpl->getVariable('selected_category')->value[9]) ? $_smarty_tpl->getVariable('selected_category')->value[9] : null);?>
</h3>

<?php if (!((isset($_GET['offset'])? $_GET['offset'] : null) !== null)){?>
<?php if ((isset($_smarty_tpl->getVariable('selected_category')->value[3]) ? $_smarty_tpl->getVariable('selected_category')->value[3] : null)){?><a href="./<?php echo (isset($_smarty_tpl->getVariable('selected_category')->value[11]) ? $_smarty_tpl->getVariable('selected_category')->value[11] : null);?>
"><img src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('selected_category')->value[3]) ? $_smarty_tpl->getVariable('selected_category')->value[3] : null);?>
" class="left" alt="<?php echo (isset($_smarty_tpl->getVariable('selected_category')->value[1]) ? $_smarty_tpl->getVariable('selected_category')->value[1] : null);?>
" /></a><?php }?>
   <?php echo (isset($_smarty_tpl->getVariable('selected_category')->value[2]) ? $_smarty_tpl->getVariable('selected_category')->value[2] : null);?>

<?php }?>
<div class="clr"></div>
<div class="navigation">
<?php $_smarty_tpl->tpl_vars["tch"] = new Smarty_variable(0, null, null);?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=(ceil($_smarty_tpl->getVariable('catalog_products_count')->value/@CONF_PRODUCTS_PER_PAGE))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
   <?php echo smarty_function_math(array('assign'=>'kps','equation'=>"x*z+1",'x'=>$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'],'z'=>@CONF_PRODUCTS_PER_PAGE),$_smarty_tpl);?>

   <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['pages']['last']){?>
    <?php echo smarty_function_math(array('assign'=>'kpb','equation'=>"x+(y-x)",'x'=>$_smarty_tpl->getVariable('kps')->value,'y'=>$_smarty_tpl->getVariable('catalog_products_count')->value),$_smarty_tpl);?>

   <?php }else{ ?>
    <?php echo smarty_function_math(array('assign'=>'kpb','equation'=>"x+y-1",'x'=>$_smarty_tpl->getVariable('kps')->value,'y'=>@CONF_PRODUCTS_PER_PAGE),$_smarty_tpl);?>

   <?php }?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']<6||$_smarty_tpl->getVariable('smarty')->value['section']['pages']['last']){?>  
  <?php if (($_smarty_tpl->getVariable('kps')->value-1)==(isset($_GET['offset'])? $_GET['offset'] : null)&&((isset($_GET['offset'])? $_GET['offset'] : null) !== null)){?>
    <span class="current"><?php echo $_smarty_tpl->getVariable('kps')->value;?>
-<?php echo $_smarty_tpl->getVariable('kpb')->value;?>
</span>
  <?php }else{ ?>
    <a href="./<?php echo (isset($_smarty_tpl->getVariable('product_category_path')->value[0][0]) ? $_smarty_tpl->getVariable('product_category_path')->value[0][0] : null);?>
<?php if (($_smarty_tpl->getVariable('kps')->value-1)>0){?>&offset=<?php echo $_smarty_tpl->getVariable('kps')->value-1;?>
<?php }?>" ><?php echo $_smarty_tpl->getVariable('kps')->value;?>
-<?php echo $_smarty_tpl->getVariable('kpb')->value;?>
</a>
  <?php }?>

<?php }elseif($_smarty_tpl->getVariable('tch')->value<1){?>
 <?php $_smarty_tpl->tpl_vars["tch"] = new Smarty_variable(1, null, null);?>
  ...
<?php }?>
<?php endfor; endif; ?>
<a href="./<?php echo (isset($_smarty_tpl->getVariable('product_category_path')->value[0][0]) ? $_smarty_tpl->getVariable('product_category_path')->value[0][0] : null);?>
&show_all=yes" class="next" title="<?php echo @STRING_SHOWALL;?>
"><?php echo @STRING_SHOWALL;?>
</a>
<div class="right">
	  <select name="orderby" onchange="location='http://<?php echo @CONF_SHOP_URL;?>
/'+this.value">
	    <?php echo smarty_function_html_options(array('values'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_values']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_values'] : null),'output'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_names']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_names'] : null),'selected'=>(isset($_smarty_tpl->getVariable('sort_options')->value['sort_selected']) ? $_smarty_tpl->getVariable('sort_options')->value['sort_selected'] : null)),$_smarty_tpl);?>

	  </select>
</div>
</div>


<?php if ($_smarty_tpl->getVariable('products_to_show_count')->value!=null){?>

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
$_template->assign('product_info',(isset($_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']]) ? $_smarty_tpl->getVariable('products_to_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i1']['index']] : null));$_template->assign('options',$_smarty_tpl->getVariable('options')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	    

<?php endfor; endif; ?>

	<p style="text-align: right;"><?php echo $_smarty_tpl->getVariable('catalog_navigator')->value;?>
</p>
<?php }else{ ?>
	<p style="text-align: center;"><?php echo @STRING_EMPTY_CATEGORY;?>
</p>
<?php }?>
      
</div>