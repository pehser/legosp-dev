<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 23:45:06
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/contact.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:73382781551390a62a46141-35644509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b509afcf6749d2be38bb04fa990e4c03d40e7a4a' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/contact.tpl.html',
      1 => 1360849051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73382781551390a62a46141-35644509',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="box">
   <h3 class="box-name"><?php if (($_smarty_tpl->getVariable('send_result')->value !== null)&&$_smarty_tpl->getVariable('send_result')->value==0){?><?php echo @STRING_SEND_ERROR;?>
<?php }else{ ?><?php echo @STRING_SEND_MAIL;?>
<?php }?></h3>

	
	<?php if ($_smarty_tpl->getVariable('send_result')->value==2){?>Ваше сообщение отправлено
	<?php }else{ ?>	
	<?php echo $_smarty_tpl->getVariable('contact_info')->value;?>

	<hr />
	<p><b><?php echo @STRING_CONTACT_SEND_MESSAGE;?>
</b></p><p><?php echo @STRING_REQUIRED;?>
</p>

	<form action="./contact/" name="contact_form" id="contact_form" method="post">

	  <table width="100%" style="padding: 5px;">
	    <tr style="vertical-align: top">
	      <td align="left"><b><font style="color: #F00">*</font> <?php echo @CUSTOMER_FIRST_NAME;?>
&nbsp;&nbsp;&nbsp;</b></td>
	      <td align="left"><input style="width: 250px" type="text" class="text" name="send_name" id="first_name" value="<?php echo (isset($_POST['send_name'])? $_POST['send_name'] : null);?>
" onchange="checkname();" /><br />&nbsp;</td>
	      <td align="left"><img src="./images/ok.png" alt="" id="name_pic" style="visibility: hidden;" /><span id="name_div" style="visibility: hidden;"><font style="color: #F00">Только русские и латинские буквы!</font></span></td>
	    </tr>
	    <tr style="vertical-align: top">
	      <td align="left"><b><font style="color: #F00">*</font> <?php echo @CUSTOMER_EMAIL;?>
&nbsp;&nbsp;&nbsp;</b></td>
	      <td align="left"><input style="width: 250px" type="text" name="send_email" id="email" value="<?php echo (isset($_POST['send_email'])? $_POST['send_email'] : null);?>
" class="text" onchange="checkmail();" /><br />&nbsp;</td>
	      <td align="left"><img src="./images/ok.png" alt="" id="mail_pic" style="visibility: hidden;" /><span id="mail_div" style="visibility: hidden;"><font style="color: #F00">Образец: my-email@mail.ru</font></span></td>
	    </tr>
	    <tr style="vertical-align: top">
	      <td align="left"><b><?php echo @STRING_SEND_TEXT;?>
</b></td>
	      <td align="left"><textarea name="send_text" class="textarea medium"><?php echo (isset($_POST['send_text'])? $_POST['send_text'] : null);?>
</textarea></td>
	      <td>&nbsp;</td>
	    </tr>
	    <tr>
	      <td align="left"><p><b><font style="color: #F00">*</font> <?php echo @STRING_SEND_CAPCHA;?>
</b></td>
	      <td align="left"><input class='text required error' minlength='3' type="text" name="captcha" /><img id="cap" src="./core/core_captcha.php?bg=F7F7F7" alt="<?php echo @STRING_SEND_CAPCHA;?>
" onclick="go_cap()" style="cursor:pointer;" title="Обновить капчу"/></p></td>
	      <td>&nbsp;</td>
	    </tr>
	  </table>
	  <div class="pdv a-center">
		  <input type="hidden" name="send_mail" value="1" />
		  <input type="hidden" name="last_name" id="last_name" value="none" />
		  <input type="hidden" name="phone" id="phone" value="8 (000) 000-00-00" />
		  <a onclick="$('#contact_form').submit();" class="medium blue awesome"><?php echo @STRING_SEND;?>
</a>
	  </div>
	</form>
	<?php }?>
	
</div>