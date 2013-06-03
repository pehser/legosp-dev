<?php /* Smarty version Smarty-3.0.4, created on 2013-03-08 07:09:52
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/order_custinfo.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:2102736268513972a01c30c1-89610060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '641c3eb215fa7a25bd48fa892313c6e0cd3fe756' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/order_custinfo.tpl.html',
      1 => 1360849045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102736268513972a01c30c1-89610060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="box">
   <h3 class="box-name"><?php echo @STRING_CONTACT_INFORMATION;?>
</h3>

	<form action="./<?php if (@CONF_CHPU){?>cart/order_placed/<?php }else{ ?>index.php?order_placement_result=1<?php }?>" name="custinfo_form" id="custinfo_form" method="post">
	<table width="650px" style="padding: 5px;">
	  <tr style="vertical-align: top">
	    <td colspan="3" align="left"><?php echo @STRING_REQUIRED;?>
<br /><br /></td>
	  </tr>
	  <tr style="vertical-align: top">
	    <td width="100px" align="left"><b><font style="color: #F00">*</font> <?php echo @CUSTOMER_FIRST_NAME;?>
&nbsp;&nbsp;&nbsp;</b></td>
	    <td width="250px" align="left"><input style="width: 250px" class="text required lettersonly" type="text" name="first_name" id="first_name" value="<?php if ((isset($_SESSION['userinf']['cust_firstname'])? $_SESSION['userinf']['cust_firstname'] : null)){?><?php echo (isset($_SESSION['userinf']['cust_firstname'])? $_SESSION['userinf']['cust_firstname'] : null);?>
<?php }else{ ?><?php echo (isset($_POST['first_name'])? $_POST['first_name'] : null);?>
<?php }?>" /></td>
	  </tr>
	  <tr style="vertical-align: top">
	    <td width="100px" align="left"><b><font style="color: #F00">*</font> <?php echo @CUSTOMER_EMAIL;?>
&nbsp;&nbsp;&nbsp;</b></td>
	    <td width="250px" align="left"><input style="width: 250px" class="text required email" type="text" name="email" id="email" value="<?php if ((isset($_SESSION['userinf']['cust_email'])? $_SESSION['userinf']['cust_email'] : null)){?><?php echo (isset($_SESSION['userinf']['cust_email'])? $_SESSION['userinf']['cust_email'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('reg_userinfo')->value[2]) ? $_smarty_tpl->getVariable('reg_userinfo')->value[2] : null);?>
<?php }?>" /></td>
	  </tr>
	  <tr style="vertical-align: top">
	    <td width="100px" align="left"><b>&nbsp;&nbsp;<?php echo @CUSTOMER_COMMENT;?>
</b></td>
	    <td width="250px" align="left"><textarea name="comment" class="textarea medium"></textarea></td>
	  </tr>
	</table>
	  <div class="pdv">
	    <table width="100%">
	      <tr>
		<td align="center">
		  <input type="hidden" name="complete_order" value="1" />
		  <a onclick="{$('#custinfo_form').submit();}" class="medium blue awesome"><?php echo @STRING_PLACE_ORDER;?>
</a>
		</td>
	      </tr>
	    </table>
	  </div>
	</form>
</div>