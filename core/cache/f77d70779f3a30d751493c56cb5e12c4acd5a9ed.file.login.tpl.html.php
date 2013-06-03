<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 12:55:20
         compiled from "./core/admin_tmpl/login.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:802461918513f0998b173b4-88815190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77d70779f3a30d751493c56cb5e12c4acd5a9ed' => 
    array (
      0 => './core/admin_tmpl/login.tpl.html',
      1 => 1360848413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802461918513f0998b173b4-88815190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=<?php echo @DEFAULT_CHARSET;?>
" />
 <title><?php echo @ACCESS;?>
 - Shop-Script LegoSP</title>
 <meta name="description" content="" />
 <meta name="keywords" content="" />
 <link rel="icon" href="/favicon.ico" type="image/x-icon" />
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
 <link rel="stylesheet" type="text/css" href="./core/admin_tmpl/css/admin_login.css" />
 <script type="text/javascript" src="./core/js/js_jquery.js"></script>
  
</head>

<body>

<table id="loginbox"><tr><td align="center">
 <div class="r2"><div class="r3"><div class="r1"><div class="r4">
  <div class="logo"><a href="http://lego.shop-script.org" title="Shop-Script LegoSP"><img src="./core/admin_tmpl/images/login/logo-4.png" alt="Shop-Script LegoSP" /></a></div>
  <div class="left"><img src="./core/admin_tmpl/images/login/login.png" alt="" /></div>
  <div class="right">
   <div id="login_result"><?php echo $_smarty_tpl->getVariable('errorStr')->value;?>
</div>
   <form action="access_admin.php" method="post" enctype="multipart/form-data" id="form">
    <input type="hidden" value="1" name="authorize">
    <label class="desc"><?php echo @ACCESS_LOGIN;?>
 / Login :</label>
    <input name="login" type="text" id="input_username" class="text" style="width:182px;" />
    <label class="desc"><?php echo @ACCESS_PASS;?>
 / Password :</label>
    <input name="password" type="password"  class="text" style="width:182px;" />
    <button class="button button_login"><span><?php echo @ACCESS_ENTER;?>
 / Enter</span></button>
   </form>
  </div>
 <div class="clr"></div></div></div></div></div>
 <div class="copy">Powered By Shop-Script <a href="http://legosp.net">LegoSP</a></div>
</td></tr></table>

</body>
</html>