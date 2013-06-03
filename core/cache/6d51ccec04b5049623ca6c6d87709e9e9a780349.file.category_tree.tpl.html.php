<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:39:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/category_tree.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1211775235138ed03cd18f5-93291231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d51ccec04b5049623ca6c6d87709e9e9a780349' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/category_tree.tpl.html',
      1 => 1360849047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1211775235138ed03cd18f5-93291231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
?><ul class="category">
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('categories_tree')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <?php if ((isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level'] : null)>(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_prev']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_prev']]['level'] : null)){?><ul><?php }?>
         <li><a href="/<?php echo (isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['hurl'] : null);?>
" <?php if ($_smarty_tpl->getVariable('categoryID')->value==(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoryID']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['categoryID'] : null)){?> class="selected" <?php }?>><?php echo (isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'] : null);?>
<span><?php echo (isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['products_count']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['products_count'] : null);?>
</span></a>
        <?php if ((isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level'] : null)==(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level'] : null)){?></li><?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level'] : null)>(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level'] : null)&&!$_smarty_tpl->getVariable('smarty')->value['section']['i']['last']){?>
         <?php echo smarty_function_math(array('assign'=>'raz','equation'=>"x - y",'x'=>(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['level'] : null),'y'=>(isset($_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level']) ? $_smarty_tpl->getVariable('categories_tree')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index_next']]['level'] : null)),$_smarty_tpl);?>
 
           <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['name'] = 'closed';
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('raz')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['closed']['total']);
?>
             </ul></li>
           <?php endfor; endif; ?>
        <?php }?>
    <?php endfor; endif; ?>
</ul>