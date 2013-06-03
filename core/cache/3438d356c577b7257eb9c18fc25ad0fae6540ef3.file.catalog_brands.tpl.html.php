<?php /* Smarty version Smarty-3.0.4, created on 2013-03-13 20:32:40
         compiled from "./core/admin_tmpl/catalog_brands.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:7009474285140c648653366-88664022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3438d356c577b7257eb9c18fc25ad0fae6540ef3' => 
    array (
      0 => './core/admin_tmpl/catalog_brands.tpl.html',
      1 => 1360848395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7009474285140c648653366-88664022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="heading"><h1><?php echo @STRING_BRANDS;?>
</h1>
  <div class="buttons"><a class="button b_add" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=brands&addbrands"><span><?php echo @ADMIN_NEWS_ADD;?>
</span></a><a class="button b_save"><span><?php echo @SAVE_BUTTON;?>
</span></a></div>
</div>
<div class="content">
 <form action="./<?php echo @CONF_ADMIN_FILE;?>
" method="post" enctype="multipart/form-data">
   <table class="table" cellspacing="0">
    <thead>
     <tr>
       <th class="a-center" style="width:24px"><b>ID</b></th>
       <th><a href""><?php echo @STRING_MANUFACTURER;?>
</a></th>
       <th class="a-center"><?php echo @ADMIN_ON;?>
</th>
       <th><?php echo @ADMIN_SORT_ORDER;?>
</th>
       <th class="a-right"><?php echo @STRING_ACTIONS;?>
</th>
     </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brand_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
?>
      <tr>
        <td class="a-center"><?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
</td>
        <td><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&brands=<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['name']) ? $_smarty_tpl->tpl_vars['brand']->value['name'] : null);?>
</a></td>
        <td class="a-center"><input type="checkbox" value="1" name="brands_edit[<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
][enabled]" <?php if ((isset($_smarty_tpl->tpl_vars['brand']->value['enabled']) ? $_smarty_tpl->tpl_vars['brand']->value['enabled'] : null)){?>checked<?php }?> ></td>
        <td><input name="brands_edit[<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
][sort]" value="<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['sort']) ? $_smarty_tpl->tpl_vars['brand']->value['sort'] : null);?>
" /></td>
        <td class="icons a-right"><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&brands=<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
"><img src="./images/backend/edit.png" alt="" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="confirmDelete('<?php echo @QUESTION_DELETE_CONFIRMATION;?>
','./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&del_brand=<?php echo (isset($_smarty_tpl->tpl_vars['brand']->value['brandID']) ? $_smarty_tpl->tpl_vars['brand']->value['brandID'] : null);?>
')"><img src="./images/backend/delete.png" alt="" /></a></td>
      </tr>
    <?php }} ?>
    </tbody>
   </table>
    <input type="hidden" name="dpt" value="catalog" />
    <input type="hidden" name="sub" value="brands" />
    <input type="hidden" name="save_brands" value="1" /> 
    <input type="submit" name="submit" id="submit">
 </form>
</div>
