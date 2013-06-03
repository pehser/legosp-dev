<?php /* Smarty version Smarty-3.0.4, created on 2013-03-13 21:00:52
         compiled from "./core/admin_tmpl/inform_news.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:14191236365140cce4a02b39-16516863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a93ed238507a6c7bfb7b42aed35f4f9da6603df' => 
    array (
      0 => './core/admin_tmpl/inform_news.tpl.html',
      1 => 1363201246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14191236365140cce4a02b39-16516863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="heading"><h1><?php echo @ADMIN_NEWS;?>
</h1>
  <div class="buttons"><a class="button b_add" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&addnews=1"><span><?php echo @ADMIN_NEWS_ADD;?>
</span></a></div>
</div>
<div class="content">

<form action="./<?php echo @CONF_ADMIN_FILE;?>
" method="post" enctype="multipart/form-data">
	<table class="table" cellspacing="0">
		<thead>
			<tr>
				<th class="a-center" style="width:24px"><b>ID</b></th>
				<th><?php echo @ADMIN_NEWS_TITLE;?>
</td>
				<th class="a-center"><?php echo @ADMIN_ON;?>
</th>
				<th class="a-right"><?php echo @STRING_ACTIONS;?>
</th>
			</tr>
		</thead>
		<tbody>
		     <?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('allnews_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value){
?>
		        <tr>
		          <td class="a-center"><?php echo (isset($_smarty_tpl->tpl_vars['news']->value['id']) ? $_smarty_tpl->tpl_vars['news']->value['id'] : null);?>
</td>
		          <td><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&news=<?php echo (isset($_smarty_tpl->tpl_vars['news']->value['id']) ? $_smarty_tpl->tpl_vars['news']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['news']->value['title']) ? $_smarty_tpl->tpl_vars['news']->value['title'] : null);?>
</a></td>
		          <td class="a-center"><input type="checkbox" value="1" name="news_corect[<?php echo (isset($_smarty_tpl->tpl_vars['news']->value['id']) ? $_smarty_tpl->tpl_vars['news']->value['id'] : null);?>
][enable]" <?php if ((isset($_smarty_tpl->tpl_vars['news']->value['enable']) ? $_smarty_tpl->tpl_vars['news']->value['enable'] : null)){?>checked<?php }?> ></td>
		          <td class="icons a-right">
		             <a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&news=<?php echo (isset($_smarty_tpl->tpl_vars['news']->value['id']) ? $_smarty_tpl->tpl_vars['news']->value['id'] : null);?>
"><img src="./images/backend/edit.png" alt="" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="confirmDelete('<?php echo @QUESTION_DELETE_CONFIRMATION;?>
','./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&del_news=<?php echo (isset($_smarty_tpl->tpl_vars['news']->value['id']) ? $_smarty_tpl->tpl_vars['news']->value['id'] : null);?>
')"><img src="./images/backend/delete.png" alt="" /></a>
			  </td>
		        </tr>
		     <?php }} ?>
		</tbody>
	</table>
</form>
</div>
<div class="heading" style="border-radius: 0 0 3px 3px;">
  <div class="buttons"><a class="button b_add" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&addnews=1"><span><?php echo @ADMIN_NEWS_ADD;?>
</span></a></div>
</div>


<script type="text/javascript">
	CKEDITOR.replace( 'news_text', {filebrowserBrowseUrl : '/core/ckeditor/plugins/elfinder/elfinder.html'});
	CKEDITOR.replace( 'news_brief', {filebrowserBrowseUrl : '/core/ckeditor/plugins/elfinder/elfinder.html'});
</script>
