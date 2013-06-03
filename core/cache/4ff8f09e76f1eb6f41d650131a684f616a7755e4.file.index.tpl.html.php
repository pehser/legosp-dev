<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 12:55:23
         compiled from "./core/admin_tmpl/index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:482304482513f099b9971b4-30299323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ff8f09e76f1eb6f41d650131a684f616a7755e4' => 
    array (
      0 => './core/admin_tmpl/index.tpl.html',
      1 => 1360848409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482304482513f099b9971b4-30299323',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<!--[if IE 8]>
	<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" dir="ltr" lang="ru-RU">
<![endif]-->
<!--[if !(IE 8) ]><!-->
	<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru-RU">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @DEFAULT_CHARSET;?>
">
<title><?php echo @ADMIN_TITLE;?>
</title>
<script type="text/javascript" src="./core/js/js_jquery.js"></script>
<script type="text/javascript" src="./core/core_ajaxconst.php"></script>
<script type="text/javascript" src="./core/js/admin.js"></script>
<script type="text/javascript" src="./core/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="./css/fancybox.css" media="screen" />
<link rel='stylesheet' href='./core/admin_tmpl/css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' href='./core/admin_tmpl/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='colors-css'  href='./core/admin_tmpl/css/colors-fresh.css' type='text/css' media='all' />
<link rel='stylesheet' href='./core/admin_tmpl/css/admin.css' type='text/css' media='all' />
<link rel='stylesheet' href='./core/admin_tmpl/css/form.css' type='text/css' media='all' />
<link rel='stylesheet' href='./core/admin_tmpl/css/tables.css' type='text/css' media='all' />
<link rel='stylesheet' href='./core/admin_tmpl/css/legosp-theme/jquery-ui-1.9.2.custom.css' type='text/css' media='all' />
<!--[if lte IE 7]>
	<link rel='stylesheet' id='ie-css'  href='./core/admin_tmpl/css/ie.css' type='text/css' media='all' />
<![endif]-->



</head>
<body>


<div id="wrapper">
	<div id="header">
  <a title="Панель управления" href="/" class="logo png"></a>
  <ul class="sf-menu sf-icon sf-js-enabled sf-shadow">
   <li class="ic_1"><a href="#"></a>
      <ul style="display: none; visibility: hidden;">
       <li class="border"><a href="http://legosp.net">Shop Scrip LegoSP</a></li>
       <li><a href="http://legosp.blogspot.com/" target="_blank"><?php echo @STRING_BLOG;?>
</a></li>
       <li><a href="http://forum.shop-script.org/" target="_blank"><?php echo @STRING_FORUM_SUPPORT;?>
</a></li>
       <li><a href="http://legosp.net/contact/" target="_blank"><?php echo @STRING_FEEDBACK;?>
</a></li>
      </ul>
   </li>
   <li class="ic_2"><a title="<?php echo @ADD_BUTTON;?>
" href="#"></a>
      <ul>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=categories_edit"><?php echo @ADMIN_MENU_categories;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products_edit<?php if ((isset($_GET['categoryID'])? $_GET['categoryID'] : null)){?>&categoryID=<?php echo (isset($_GET['categoryID'])? $_GET['categoryID'] : null);?>
<?php }?>"><?php echo @ADMIN_PRODUCTS;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products_variants&add=1"><?php echo @ADMIN_PRODUCTS_VARIANTS_GROUPS;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=brands&addbrands=1"><?php echo @STRING_BRANDS;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=inform&sub=aux_pages"><?php echo @ADMIN_MENU_aux_pages;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=inform&sub=news&addnews=1"><?php echo @ADMIN_NEWS;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=inform&sub=pages"><?php echo @ADMIN_PAGES;?>
</a></li>
       <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=inform&sub=votes&add=1"><?php echo @ADMIN_VOTES;?>
</a></li>
      </ul>
   </li>
   <li class="ic_3"><a title="<?php echo @NEW_BUYERS;?>
" href="#"><span title="<?php echo @NEW_BUYERS;?>
">8</span></a></li>
   <li class="ic_4"><a title="<?php echo @ADMIN_NEW_ORDERS;?>
" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=custord&sub=new_orders"><span title="<?php echo @ADMIN_NEW_ORDERS;?>
"><?php echo $_smarty_tpl->getVariable('count_new_order')->value;?>
</span></a></li>
  <!--sf icon--></ul>
  <div class="welcome">
<?php echo @ADMIN_CUST_WELCOME;?>
, <b><?php echo $_smarty_tpl->getVariable('login_name')->value;?>
</b><br> <a href='./' tabindex="1" title="<?php echo @ADMIN_MENU_go_site;?>
 <?php echo @CONF_SHOP_NAME;?>
" target="_blank"><?php echo @ADMIN_MENU_go_site;?>
</a> | <a href="#"><?php echo @STRING_HELP;?>
?</a> | <a href="./<?php echo @CONF_ADMIN_FILE;?>
?logout"><?php echo @ACCESS_LOGOUT;?>
</a>
  <!--welcome--></div>
 </div>
	<div id="menutop">
  <ul class="sf-menu sf-menut sf-js-enabled sf-shadow">
   <li class=""><a href="./<?php echo @CONF_ADMIN_FILE;?>
"><?php echo @CONTROL_PANEL;?>
</a>
   </li>
   <?php  $_smarty_tpl->tpl_vars['admin_menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('admin_departments')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['admin_menu']->key => $_smarty_tpl->tpl_vars['admin_menu']->value){
?>
    <li class=""><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_smarty_tpl->tpl_vars['admin_menu']->value['id']) ? $_smarty_tpl->tpl_vars['admin_menu']->value['id'] : null);?>
" class="sf-with-ul"><?php echo (isset($_smarty_tpl->tpl_vars['admin_menu']->value['name']) ? $_smarty_tpl->tpl_vars['admin_menu']->value['name'] : null);?>
</a>
    <?php if (count((isset($_smarty_tpl->tpl_vars['admin_menu']->value['sub_departments']) ? $_smarty_tpl->tpl_vars['admin_menu']->value['sub_departments'] : null))>0){?>
     <ul>
      <?php  $_smarty_tpl->tpl_vars['admin_menu_sub'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['admin_menu']->value['sub_departments']) ? $_smarty_tpl->tpl_vars['admin_menu']->value['sub_departments'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['admin_menu_sub']->key => $_smarty_tpl->tpl_vars['admin_menu_sub']->value){
?>
         <li><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_smarty_tpl->tpl_vars['admin_menu']->value['id']) ? $_smarty_tpl->tpl_vars['admin_menu']->value['id'] : null);?>
&sub=<?php echo (isset($_smarty_tpl->tpl_vars['admin_menu_sub']->value['id']) ? $_smarty_tpl->tpl_vars['admin_menu_sub']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['admin_menu_sub']->value['name']) ? $_smarty_tpl->tpl_vars['admin_menu_sub']->value['name'] : null);?>
</a></li>
      <?php }} ?>
     </ul>
    <?php }?>
    </li>
   <?php }} ?>
</ul>  
 <!--menutop--><div class="clr"></div></div>
	<div class="box left w100">
		<div style="padding-bottom:70px;">
		  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('admin_main_content_template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		</div><!-- wpbody -->
	</div><!-- wpcontent -->
</div><!-- wpwrap -->
<div id="footer">
           <div id="foot">
		<p id="footer-left" class="alignleft"><span id="footer-thankyou"><?php echo @ADMIN_Thank_you_for_using;?>
 <a href="http://legosp.net">Shop Script Lego SP</a>.</span></p>
		<p id="footer-upgrade" class="alignright"><?php echo @Version;?>
</p>
	   </div>
</div>
</body>
</html>