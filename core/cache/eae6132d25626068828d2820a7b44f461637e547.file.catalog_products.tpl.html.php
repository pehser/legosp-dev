<?php /* Smarty version Smarty-3.0.4, created on 2013-03-13 17:45:32
         compiled from "./core/admin_tmpl/catalog_products.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:73341007751409f1ccc2537-33134639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eae6132d25626068828d2820a7b44f461637e547' => 
    array (
      0 => './core/admin_tmpl/catalog_products.tpl.html',
      1 => 1360848398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73341007751409f1ccc2537-33134639',
  'function' => 
  array (
    'cats_tree' => 
    array (
      'parameter' => 
      array (
        'nocache' => false,
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.escape.php';
?>
<div class="heading">
 <h1>
  <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('patch_category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
if ($_smarty_tpl->tpl_vars['category']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['patch']['last'] = $_smarty_tpl->tpl_vars['category']->last;
?>
  <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['patch']['last']){?><a href=./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products&categoryID=<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['categoryID']) ? $_smarty_tpl->tpl_vars['category']->value['categoryID'] : null);?>
><?php echo (isset($_smarty_tpl->tpl_vars['category']->value['name']) ? $_smarty_tpl->tpl_vars['category']->value['name'] : null);?>
</a>&nbsp;&raquo;<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['category']->value['name']) ? $_smarty_tpl->tpl_vars['category']->value['name'] : null);?>
<?php }?>
  <?php }} ?>
 </h1>
 <div class="buttons"><a class="button b_add" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&amp;sub=products_edit&amp;categoryID=<?php echo $_smarty_tpl->getVariable('categoryID')->value;?>
"><span><?php echo @ADMIN_NEWS_ADD;?>
</span></a><?php if ($_smarty_tpl->getVariable('products_count')->value>0){?><a class="button b_save"><span><?php echo @SAVE_BUTTON;?>
</span></a><?php }?></div>
</div>
<div class="content">
<?php echo smarty_function_math(array('assign'=>'count_pages','equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->getVariable('products_count')->value,'y'=>(isset($_SESSION['products_limit'])? $_SESSION['products_limit'] : null)),$_smarty_tpl);?>
 
<?php if ($_smarty_tpl->getVariable('count_pages')->value>1){?>
<div class="tablenav top">
 

        <div class='pages_list'>
         <?php if ((isset($_POST['pages'])? $_POST['pages'] : null)>1){?>  
          <input type="button" title="<?php echo @ADMIN_PAGES_FIRST;?>
" value="&lt;&lt;" name="navig_first" id="navig_first">
          <input type="button" title="<?php echo @ADMIN_PAGES_PREV;?>
" value="&lt;" name="navig_prev" id="navig_prev">
          <?php }?>
          <form method='POST'  name='pages_list' id='pages_list'>
            
           <select name="pages" onchange="$('#pages_list').submit()"> 
           <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('count_pages')->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
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
             <option <?php if ((isset($_POST['pages'])? $_POST['pages'] : null)==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']){?>selected<?php }?> value='<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
'> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
 </option>
           <?php endfor; endif; ?>
           </select>
            <?php if ((isset($_POST['keyword'])? $_POST['keyword'] : null)){?><input type="hidden" name="keyword" value="<?php echo (isset($_POST['keyword'])? $_POST['keyword'] : null);?>
"><?php }?>
           </form> 
          <?php if ((isset($_POST['pages'])? $_POST['pages'] : null)<($_smarty_tpl->getVariable('count_pages')->value-1)){?>
           <input type="button" title="<?php echo @ADMIN_PAGES_NEXT;?>
" value="&gt;"  name="navig_next" id="navig_next">
           <input type="button" title="<?php echo @ADMIN_PAGES_LAST;?>
" value="&gt;&gt;"  name="navig_last" id="navig_last"> 
          <?php }?>
        </div>        
        <div class='show_list'>
         <form method='post' name='show_list' id='show_list'> 
         <?php echo @STRING_SHOW;?>
:
           <select name="show" onchange="$('#show_list').submit()"> 
           <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['show']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['name'] = 'show';
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'] = (int)25;
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('products_count')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['max'] = (int)4;
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'] = ((int)25) == 0 ? 1 : (int)25;
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['show']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['show']['total']);
?>
             <option <?php if ((isset($_SESSION['products_limit'])? $_SESSION['products_limit'] : null)==$_smarty_tpl->getVariable('smarty')->value['section']['show']['index']){?>selected<?php }?> value='<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['show']['index'];?>
'> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['show']['index'];?>
 </option>
           <?php endfor; endif; ?>
           </select>
             <?php if ((isset($_POST['keyword'])? $_POST['keyword'] : null)){?><input type="hidden" name="keyword" value="<?php echo (isset($_POST['keyword'])? $_POST['keyword'] : null);?>
"><?php }?>
           </form>
        </div>    
</div>
<br class="clear" />
<?php }?>
<form action="./<?php echo @CONF_ADMIN_FILE;?>
" method="post" enctype="multipart/form-data" id="form">
        <input type="submit" name="submit" id="submit" class="button-primary" value="<?php echo @SAVE_BUTTON;?>
" /> 
	<input type="hidden" name="dpt" value="catalog" />
	<input type="hidden" name="sub" value="products" />
	<input type="hidden" name="products_update" value="1" />
	<input type="hidden" name="categoryID" value="<?php echo $_smarty_tpl->getVariable('categoryID')->value;?>
" />
	
	<table cellspacing="0">
		<thead>
			<tr>
				<th id="div_category_title" style="<?php if (!$_smarty_tpl->getVariable('categoryID')->value==0){?> display: none;<?php }?>"><a><span><strong><?php echo @ADMIN_CATEGORIES;?>
</strong></span></a><a title='<?php echo @STRING_CATEGORY_HIDE;?>
' class='mouseclic' onclick="$('#div_category').hide(); $('#div_category_title').hide(); $('#cat_show').show();"><img src="./core/admin_tmpl/images/bd_firstpage.png" align="right" alt="" /></a></th>
				<th><a onclick="$('#div_category').show(); $('#div_category_title').show(); $('#cat_show').hide();" class='mouseclic' id="cat_show" title='<?php echo @STRING_CATEGORY_SHOW;?>
'><img src="./core/admin_tmpl/images/bd_lastpage.png" align="left" alt="" /></a>&nbsp;&nbsp;<a><span><strong><?php echo @ADMIN_PRODUCT_TITLE;?>
</strong></span></a></th>
			</tr>
		</thead>
		<tbody>
			<tr class="alternate">
				<td style="vertical-align: top;width: 250px;padding: 3px;<?php if ((isset($_GET['categoryID'])? $_GET['categoryID'] : null)!=0){?>display: none;<?php }?>" id="div_category">
					<table class="table" cellspacing="0" style="width: 250px;">
						<thead>
							<tr>
								<th><a><span><strong><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products&categoryID=0"><?php echo @ADMIN_CATEGORY_ROOT;?>
</a></strong></span></a></th>
								<th><a><span><strong>(<?php echo $_smarty_tpl->getVariable('products_in_root_category')->value;?>
)</strong></span></a></th>
                                                                <th></th>
							</tr>
						</thead>
						<tbody>
<?php echo smarty_function_math(array('assign'=>"m",'equation'=>"x",'x'=>-1),$_smarty_tpl);?>

<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
?><?php if (!function_exists('smarty_template_function_cats_tree')) {
    function smarty_template_function_cats_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['cats_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable(trim($value,'\''));};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <?php echo smarty_function_math(array('assign'=>"m",'equation'=>"x + y",'x'=>$_smarty_tpl->getVariable('m')->value,'y'=>1),$_smarty_tpl);?>

    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
      <tr class="alternate">
	<td style="padding-left: <?php echo smarty_function_math(array('equation'=>($_smarty_tpl->getVariable('m')->value)."*10"),$_smarty_tpl);?>
px; <?php if ($_smarty_tpl->getVariable('m')->value==1){?> font-weight: bold;<?php }?>"><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products&categoryID=<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['categoryID']) ? $_smarty_tpl->tpl_vars['category']->value['categoryID'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['category']->value['name']) ? $_smarty_tpl->tpl_vars['category']->value['name'] : null);?>
</a></td>
	<td>(<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['products_count_admin']) ? $_smarty_tpl->tpl_vars['category']->value['products_count_admin'] : null);?>
)</td>
        <td><a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=categories_edit&c_id=<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['categoryID']) ? $_smarty_tpl->tpl_vars['category']->value['categoryID'] : null);?>
"><img src="./images/backend/edit.png" alt="" /></a></td>
        <?php if (count((isset($_smarty_tpl->tpl_vars['category']->value['subitems']) ? $_smarty_tpl->tpl_vars['category']->value['subitems'] : null))>0){?>
          <?php smarty_template_function_cats_tree($_smarty_tpl,array('data'=>(isset($_smarty_tpl->tpl_vars['category']->value['subitems']) ? $_smarty_tpl->tpl_vars['category']->value['subitems'] : null),'m'=>$_smarty_tpl->getVariable('m')->value));?>

        <?php }?>
      </tr>   
    <?php }} ?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

<?php smarty_template_function_cats_tree($_smarty_tpl,array('data'=>$_smarty_tpl->getVariable('categories')->value,'m'=>0));?>


					</tbody>
					</table>
				</td>
                                
				<td style="vertical-align: top; padding: 3px;<?php if ((isset($_GET['categoryID'])? $_GET['categoryID'] : null)==0&&!$_smarty_tpl->getVariable('products_new')->value){?>display: none;<?php }?>" width="100%">
					<table class="table" cellspacing="0">
						<thead>
							<tr>
								<th style="width: 20px;text-align:center;"><a><span><strong><?php echo @ADMIN_ENABLED;?>
</strong></span></a></th>
								<th style="width: 20px;text-align:center;"><a><span><strong>YML</strong></span></a></th>
								<th><a><span><strong><?php echo @ADMIN_PRODUCT_CODE;?>
</strong></span></a></th>
								<th><a><span><strong><?php echo @ADMIN_PRODUCT_NAME;?>
</strong></span></a></th>
								<th style="text-align:center;"><a><span><strong><?php echo @ADMIN_PRODUCT_RATING;?>
</strong></span></a></th>
								<th style="text-align:center;"><a><span><strong><?php echo @ADMIN_PRODUCT_PRICE;?>
, <?php echo $_smarty_tpl->getVariable('currency_iso_3')->value;?>
</strong></span></a></th>
								<th style="text-align:center;"><a><span><strong><?php echo @ADMIN_PRODUCT_INSTOCK;?>
</strong></span></a></th>
								<th style="width: 50px;text-align:center;"><a><span><strong><?php echo @ADMIN_PAGE_PICTURE;?>
</strong></span></a></th>
								<th style="width: 85px;text-align:center;"><a><span><strong><?php echo @STRING_ACTIONS;?>
</strong></span></a></th>
							</tr>
						</thead>
						<tbody>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('products_new')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
?>
                                                 <?php ob_start(); ?>./products_pictures/<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['picture']) ? $_smarty_tpl->tpl_vars['product']->value['picture'] : null);?>
<?php  $_smarty_tpl->assign('products_pictures', ob_get_contents()); $_smarty_tpl->smarty->_smarty_vars['capture']['default']=ob_get_clean();?>    
							<tr class="alternate">
								<td style="text-align:center;">
                                                                        <input type="checkbox" name="p[<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
][enabled]" <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['enabled']) ? $_smarty_tpl->tpl_vars['product']->value['enabled'] : null)){?>checked="checked"<?php }?> value=1> 
								</td>
								<td style="text-align:center;">
									<input type=checkbox name=p[<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
][yml] <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['yml']) ? $_smarty_tpl->tpl_vars['product']->value['yml'] : null)){?>checked<?php }?> value=1>
								</td>
								<td>
                                                                        <a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products_edit&productID=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
"><?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['product']->value['product_code']) ? $_smarty_tpl->tpl_vars['product']->value['product_code'] : null),'htmlall');?>
</a>
								</td>
								<td>
									<a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products_edit&productID=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['product']->value['name']) ? $_smarty_tpl->tpl_vars['product']->value['name'] : null);?>
</a>
								</td>
                                                                <td style="text-align:center;">
  							         <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['RATING']) ? $_smarty_tpl->tpl_vars['product']->value['RATING'] : null)>0){?>
        	 		                                   <a href="admin.php?dpt=catalog&amp;sub=review&amp;review=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
"><b><?php echo (isset($_smarty_tpl->tpl_vars['product']->value['customers_rating']) ? $_smarty_tpl->tpl_vars['product']->value['customers_rating'] : null);?>
</b></a>
			                                         <?php }else{ ?>
			                                           <?php echo (isset($_smarty_tpl->tpl_vars['product']->value['customers_rating']) ? $_smarty_tpl->tpl_vars['product']->value['customers_rating'] : null);?>

			                                         <?php }?>
								</td>
								<td style="text-align:center;">
									<input type="text" name="p[<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
][Price]" size=5 value="<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['Price']) ? $_smarty_tpl->tpl_vars['product']->value['Price'] : null);?>
" />
								</td>
								<td style="text-align:center;">
									<input type="text" name="p[<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
][in_stock]" size="5" value="<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['in_stock']) ? $_smarty_tpl->tpl_vars['product']->value['in_stock'] : null);?>
" />
								</td>
								<td style="text-align:center;">
									<?php if (file_exists($_smarty_tpl->getVariable('products_pictures')->value)!=''&&(isset($_smarty_tpl->tpl_vars['product']->value['picture']) ? $_smarty_tpl->tpl_vars['product']->value['picture'] : null)){?><a class="thickbox" href="./products_pictures/<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['picture']) ? $_smarty_tpl->tpl_vars['product']->value['picture'] : null);?>
"><?php echo @ANSWER_YES;?>
</a><?php }else{ ?><font color=red><?php echo @ANSWER_NO;?>
</font><?php }?>
								</td>
								<td style="text-align:right;">
								<?php if (file_exists($_smarty_tpl->getVariable('products_pictures')->value)!=''){?>
  				                                   <a href="admin.php?dpt=catalog&sub=special&new_offer=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
" title="<?php echo @ADMIN_ADD_SPECIAL_OFFERS;?>
"><img src="images/backend/special.png" border=0 alt="<?php echo @ADMIN_ADD_SPECIAL_OFFERS;?>
"></a>
			                                        <?php }?>
								<a href="javascript:confirmDelete('<?php echo @QUESTION_DELETE_CONFIRMATION;?>
','<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products&categoryID=<?php echo $_smarty_tpl->getVariable('categoryID')->value;?>
&terminate=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
');"><img src="images/backend/delete.png" alt="<?php echo @DELETE_BUTTON;?>
" /></a>&nbsp;&nbsp;<a href="<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=products&categoryID=<?php echo $_smarty_tpl->getVariable('categoryID')->value;?>
&dublicate_product=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
" title="<?php echo @ADMIN_PRODUCT_COPY;?>
"><img src="./images/backend/copy.png" alt="<?php echo @ADMIN_PRODUCT_COPY;?>
" /></a>&nbsp;&nbsp;<a href="<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&sub=present&new_present=<?php echo (isset($_smarty_tpl->tpl_vars['product']->value['productID']) ? $_smarty_tpl->tpl_vars['product']->value['productID'] : null);?>
" title="<?php echo @STRING_PRESENT;?>
"><img src="./images/backend/present.png" alt="<?php echo @STRING_PRESENT;?>
" /></a></td>
							</tr>
						<?php }} ?>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</form>
</div>
<div class="heading" style="border-radius: 0 0 3px 3px;">
 <div class="buttons"><a class="button b_add" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=catalog&amp;sub=products_edit&amp;categoryID=<?php echo $_smarty_tpl->getVariable('categoryID')->value;?>
"><span><?php echo @ADMIN_NEWS_ADD;?>
</span></a><?php if ($_smarty_tpl->getVariable('products_count')->value>0){?><a class="button b_save"><span><?php echo @SAVE_BUTTON;?>
</span></a><?php }?></div>
</div>