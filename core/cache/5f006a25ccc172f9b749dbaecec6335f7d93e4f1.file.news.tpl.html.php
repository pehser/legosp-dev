<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:46:43
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/news.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:7962198645138eea3dfa215-38582711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f006a25ccc172f9b749dbaecec6335f7d93e4f1' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/news.tpl.html',
      1 => 1361107758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7962198645138eea3dfa215-38582711',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="box">
   <h3 class="box-name"><?php if ($_smarty_tpl->getVariable('newstext')->value){?><?php echo (isset($_smarty_tpl->getVariable('newstext')->value[0]) ? $_smarty_tpl->getVariable('newstext')->value[0] : null);?>
<?php }else{ ?><?php echo @ADMIN_NEWS;?>
<?php }?></h3>
   
<?php if ($_smarty_tpl->getVariable('newslist')->value){?>
	
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('newslist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
<?php if ((isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][5]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][5] : null)>0){?>

<?php if ((isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][4]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][4] : null)){?>
 <a href="./<?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][6]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][6] : null);?>
"><img width="<?php echo @RESIZE_SMALL_Y;?>
" src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][4]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][4] : null);?>
" class="img left" alt="" /></a>
<?php }?>
	<p><a href="./<?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][6]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][6] : null);?>
" class="b f15"><?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][1]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][1] : null);?>
</a><br /><span class="date">[<?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][2]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][2] : null);?>
]</span></p>
	<?php echo (isset($_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][3]) ? $_smarty_tpl->getVariable('newslist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']][3] : null);?>
<div class="clr"></div>
	<hr style="margin:15px 0;" />
<?php }?>
<?php endfor; endif; ?>

<?php if ($_smarty_tpl->getVariable('catalog_navigator')->value){?><div class="navigation"><?php echo $_smarty_tpl->getVariable('catalog_navigator')->value;?>
</div><?php }?>

<?php }elseif($_smarty_tpl->getVariable('newstext')->value){?>
<?php if ((isset($_smarty_tpl->getVariable('newstext')->value[4]) ? $_smarty_tpl->getVariable('newstext')->value[4] : null)){?>
<div class="left a-center" style="margin:2px 6px 6px 0px;"><a href="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newstext')->value[4]) ? $_smarty_tpl->getVariable('newstext')->value[4] : null);?>
" class="thickbox"><img width="150" src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newstext')->value[4]) ? $_smarty_tpl->getVariable('newstext')->value[4] : null);?>
" class="img" alt="" /></a><br />
<a href="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newstext')->value[4]) ? $_smarty_tpl->getVariable('newstext')->value[4] : null);?>
" class="thickbox"><small>увеличить...</small></a></div>
<?php }?>
	<?php echo (isset($_smarty_tpl->getVariable('newstext')->value[1]) ? $_smarty_tpl->getVariable('newstext')->value[1] : null);?>
<br />
	<div class="clr"></div>
	<?php echo (isset($_smarty_tpl->getVariable('newstext')->value[2]) ? $_smarty_tpl->getVariable('newstext')->value[2] : null);?>

<hr />	
	
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "496", attach: "*"});
</script>

<hr />
	<center><a href="./<?php echo @REDIRECT_NEWS;?>
/"><?php echo @ADMIN_NEWS_ALL;?>
</a></center>
    <?php }?>
</div>