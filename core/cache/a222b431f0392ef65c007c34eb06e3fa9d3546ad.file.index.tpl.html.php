<?php /* Smarty version Smarty-3.0.4, created on 2013-03-07 21:39:47
         compiled from "./css/css_legoSP/theme/index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:13506922845138ed035f0e28-04546695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a222b431f0392ef65c007c34eb06e3fa9d3546ad' => 
    array (
      0 => './css/css_legoSP/theme/index.tpl.html',
      1 => 1361373244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13506922845138ed035f0e28-04546695',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<?php $_template = new Smarty_Internal_Template("head.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<body>

<div id="wrapper">

 <div id="header" class="grid w940">

  <a class="logo-new-year" href="/" title="<?php echo (($tmp = @$_smarty_tpl->getVariable('page_title')->value)===null||$tmp==='' ? @LegoSP_title : $tmp);?>
"><b>LegoSP</b></a>

  <!--<a class="logo" href="/" title="<?php echo (($tmp = @$_smarty_tpl->getVariable('page_title')->value)===null||$tmp==='' ? @LegoSP_title : $tmp);?>
"><b>LegoSP</b></a>-->

  <?php $_template = new Smarty_Internal_Template("shopping_cart_info.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

  <a class="btn-download"  href="./lego.zip">LegoSP 6.1 (<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('file_lego_mod')->value,"%d-%m-%Y %H:%M");?>
)</a> 

 </div><div class="clr"></div>

 <div id="menutop" class="grid w940">

  <ul class="menu">

   <li><a href="/"><?php echo @LINK_TO_HOMEPAGE;?>
</a></li>

   <?php if (@CONF_NEWS_ONHOME!=0){?><li><a href="./<?php if (@CONF_CHPU){?><?php echo @REDIRECT_NEWS;?>
/<?php }else{ ?>index.php?news&news=<?php }?>"><?php echo @ADMIN_NEWS;?>
</a></li><?php }?>

   <li><a href="./<?php if (@CONF_CHPU){?>info/nashi-uslugi/<?php }else{ ?>index.php?aux_pages=1<?php }?>"><?php echo @menu_uslugi;?>
</a></li>

   <li><a href="./info/doc/"><?php echo @menu_doc;?>
</a></li>

   <li><a href="http://<?php if ((isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST'] : null)=='legosp.net'){?>forum.legosp.net<?php }else{ ?>forum.shop-script.org<?php }?>/"><?php echo @menu_forum;?>
</a></li>

   <?php if (@CONF_PAGES_ONHOME!=0){?><li><a href="./<?php if (@CONF_CHPU){?><?php echo @REDIRECT_PAGES;?>
/<?php }else{ ?>index.php?pages&pages=<?php }?>"><?php echo @ADMIN_PAGES;?>
</a></li><?php }?>

   <li><a href="./<?php if (@CONF_CHPU){?>contact/<?php }else{ ?>index.php?contact<?php }?>"><?php echo @STRING_CONTACT_INFORMATION;?>
</a></li>

   <li><a href="./<?php if (@CONF_CHPU){?>info/litsenzionnoe_soglashenie/<?php }else{ ?>index.php?aux_pages=3<?php }?>"><?php echo @Licenzia;?>
</a></li>

  </ul>

  <form method="post" action="./<?php if (@CONF_CHPU){?>search_expanded/<?php }else{ ?>index.php?search_expanded=1<?php }?>" id="search" class="png">

  <input class="search" type="text" name="keyword" value="<?php echo @STRING_SEARCH;?>
" onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='<?php echo @STRING_SEARCH;?>
') this.value='';" onclick="this.value = ''" /> 

  <input type="hidden" value="yes" name="search" />

  <input type="submit" value="" class="go" />

  </form>

 <!--menu top--></div><div class="clr"></div>

 <div class="grid w220">



  <div id="category" class="radius">

  <div class="middle">

    <h3 class="box-name"><?php echo @menu_katalog;?>
:</h3>

     <?php $_template = new Smarty_Internal_Template("category_tree.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

      <!--category-->

  </div>

  </div>



<?php if ($_smarty_tpl->getVariable('main_content_template')->value!='home.tpl.html'){?>



   <div id="vk_groups"></div>

   <script type="text/javascript">

     VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "290"}, 37883649);

   </script>

   

<?php }?>


 </div>







<?php if ($_smarty_tpl->getVariable('main_content_template')->value=='home.tpl.html'){?>

 <div id="slides" class="grid w700 radius">

  <div class="slides_container">

   <div class="desc">

     <h1>Shop-Script LegoSP</h1>

     <?php echo $_smarty_tpl->getVariable('index')->value;?>


   </div>

    

   <?php  $_smarty_tpl->tpl_vars['special'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('special_offers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['special']->key => $_smarty_tpl->tpl_vars['special']->value){
?>

     <div class="desc">

       <h2><a href="./<?php echo (isset($_smarty_tpl->tpl_vars['special']->value['hurl']) ? $_smarty_tpl->tpl_vars['special']->value['hurl'] : null);?>
" title="<?php echo (isset($_smarty_tpl->tpl_vars['special']->value['meta_title']) ? $_smarty_tpl->tpl_vars['special']->value['meta_title'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['special']->value['name']) ? $_smarty_tpl->tpl_vars['special']->value['name'] : null);?>
</a></h2>

        <?php echo substr((isset($_smarty_tpl->tpl_vars['special']->value['brief_description']) ? $_smarty_tpl->tpl_vars['special']->value['brief_description'] : null),0,243);?>


        <p class="s_price">

          <span class="pprice b"><?php echo (isset($_smarty_tpl->tpl_vars['special']->value['Price']) ? $_smarty_tpl->tpl_vars['special']->value['Price'] : null);?>
</span> <a href="./add2cart/<?php echo (isset($_smarty_tpl->tpl_vars['special']->value['r_hurl']) ? $_smarty_tpl->tpl_vars['special']->value['r_hurl'] : null);?>
" class="medium blue awesome" id="tocart_1">Заказать »</a>

        </p> 

     </div>

   <?php }} ?>

   



   </div>

 </div>
 <div class="clr"></div>

  <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('main_content_template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
   

<?php }else{ ?>

<div class="w700">

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('main_content_template')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

</div>

<?php }?>

<?php echo $_smarty_tpl->getVariable('sape_article1')->value;?>




 <div id="foot1" class="grid w940"><div class="foot">

  <div class="f1 grid w215"><b><a href='http://<?php echo (isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST'] : null);?>
/'>Shop-Script LegoSP</a></b> &copy; 2010-2013<br /><br /><?php echo $_smarty_tpl->getVariable('sape1')->value;?>
</div>

  <div class="f2 grid w215">

    <p><img src="./css/css_<?php echo @CONF_COLOR_SCHEME;?>
/images/forum.gif" class="middle" alt="" /> <a href="http://<?php if ((isset($_SERVER['HTTP_HOST'])? $_SERVER['HTTP_HOST'] : null)=='legosp.net'){?>forum.legosp.net<?php }else{ ?>forum.shop-script.org<?php }?>/"><?php echo @menu_forum;?>
</a></p>

    <img src="./css/css_<?php echo @CONF_COLOR_SCHEME;?>
/images/mail.gif" class="middle" alt="" /> <a href="./<?php if (@CONF_CHPU){?>contact/<?php }else{ ?>index.php?contact<?php }?>"><?php echo @STRING_CONTACT_INFORMATION;?>
</a>

    <p><?php echo $_smarty_tpl->getVariable('sape2')->value;?>
</p>

  </div>

 

  <div class="f4 grid w215 a-right">

  <?php echo $_smarty_tpl->getVariable('live_counts')->value;?>


   <p><?php echo $_smarty_tpl->getVariable('sape3')->value;?>
</p>

  </div><div class="clr"></div>

 </div></div> 

<!--wrapper--></div>



<script type="text/javascript"> _shcp = []; _shcp.push({widget_id : 513091, widget : "Chat", side : "bottom", position : "right", template : "blue", title : "Support Online"  , inviteCancelTimeout : 60000  , track : 1 }); (function() { var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true; hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://widget.siteheart.com/apps/js/sh.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hcc, s.nextSibling); })(); </script>



</body>

</html>

