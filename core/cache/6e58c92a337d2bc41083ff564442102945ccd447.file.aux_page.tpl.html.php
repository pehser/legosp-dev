<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:46:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/aux_page.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:6594733485138eea7847dd9-43395387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e58c92a337d2bc41083ff564442102945ccd447' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/aux_page.tpl.html',
      1 => 1360849047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6594733485138eea7847dd9-43395387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="box">
   <h3 class="box-name"><?php echo $_smarty_tpl->getVariable('aux_title')->value;?>
</h3>
   <?php echo (($tmp = @$_smarty_tpl->getVariable('auxiliary_page')->value)===null||$tmp==='' ? @ERROR_CANT_FIND_REQUIRED_PAGE : $tmp);?>

   <?php if ($_smarty_tpl->getVariable('download')->value){?>
   <form action="./lego6.1.zip" method="POST">
    <input type="checkbox" name="download" onclick="show_hide_dow(1);" value="1"> <?php echo @licenz_yes;?>

    <input style="display: none;" id="opt1" type="submit" value="<?php echo @download_lego;?>
"> 
   </form>
   <?php }?>
</div>