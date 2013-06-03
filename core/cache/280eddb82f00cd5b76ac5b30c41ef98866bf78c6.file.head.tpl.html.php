<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:39:47
         compiled from "/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/head.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:5664236905138ed03b29058-02487438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280eddb82f00cd5b76ac5b30c41ef98866bf78c6' => 
    array (
      0 => '/var/www/legosp/data/www/legosp.net/css/css_legoSP/theme/head.tpl.html',
      1 => 1361285919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5664236905138ed03b29058-02487438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<head>
 <base href="http://<?php echo @CONF_SHOP_URL;?>
/" />
 <title><?php if ($_smarty_tpl->getVariable('meta_title')->value){?><?php echo $_smarty_tpl->getVariable('meta_title')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
<?php }?></title>
 <meta http-equiv="Content-Type" content="text/html; charset=<?php echo @DEFAULT_CHARSET;?>
">
 <meta name="KeyWords" content="<?php if ($_smarty_tpl->getVariable('meta_keywords')->value){?><?php echo $_smarty_tpl->getVariable('meta_keywords')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('page_keywords')->value;?>
<?php }?>">
 <meta name="Description" content="<?php if ($_smarty_tpl->getVariable('meta_desc')->value){?><?php echo $_smarty_tpl->getVariable('meta_desc')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('page_description')->value;?>
<?php }?>">
<?php if ($_smarty_tpl->getVariable('rel_canonical')->value){?>
 <link rel="canonical" href="<?php echo $_smarty_tpl->getVariable('rel_canonical')->value;?>
" />
<?php }?>
 <link rel="Shortcut Icon" href="/favicon.ico" />
 <link rel="stylesheet" type="text/css" href="/css/css_<?php echo @CONF_COLOR_SCHEME;?>
/stylesheet/stylesheet.css" />
 <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 RSS Feed" href="http://<?php echo @CONF_SHOP_URL;?>
/feed.xml" />
 <link rel="stylesheet" type="text/css" href="/css/fancybox.css" media="screen" />
 <script type="text/javascript" src="/core/js/js_jquery.js"></script>
 <script type="text/javascript" src="/core/core_ajaxconst.php"></script>
 <script type="text/javascript" src="/css/css_<?php echo @CONF_COLOR_SCHEME;?>
/javascript/js_scripts.js"></script>
 <!--<script src="http://ulogin.ru/js/ulogin.js"></script>-->

<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>
<script type="text/javascript">
  VK.init({apiId: <?php if ((isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST'] : null)=='legosp.net'){?>3434972<?php }else{ ?>3097755<?php }?>, onlyWidgets: true});
</script>

</head>