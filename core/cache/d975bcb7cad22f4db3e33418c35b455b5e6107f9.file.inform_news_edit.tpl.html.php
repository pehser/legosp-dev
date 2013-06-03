<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 12:55:32
         compiled from "./core/admin_tmpl/inform_news_edit.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:674234298513f09a4323c98-93858668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd975bcb7cad22f4db3e33418c35b455b5e6107f9' => 
    array (
      0 => './core/admin_tmpl/inform_news_edit.tpl.html',
      1 => 1361059681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '674234298513f09a4323c98-93858668',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="heading"><h1><?php echo @ADMIN_NEWS;?>
</h1>
  <div class="buttons"><a class="button b_save"><span><?php echo @SAVE_BUTTON;?>
</span></a><a class="button b_del" href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&amp;sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
"><span><?php echo @CANCEL_BUTTON;?>
</span></a></div>
</div>
<div class="content">
<form action="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
" method="post" enctype="multipart/form-data">
  <div class="box left w70">
   <table class="form">
     <tbody>
       <tr>
         <td colspan="2">
           <label for="proizvoditel" class="desc"><span class="rq">*</span> <?php echo @ADMIN_NEWS_TITLE;?>
:</label>
           <input type="text" id="proizvoditel" class="text large" name="news[title]" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['title']) ? $_smarty_tpl->getVariable('newsedit')->value['title'] : null);?>
">
         </td>
       </tr>
       <tr>
        <td><label for="url" class="desc">URL</label><input type="text" name="news[hurl]" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['hurl']) ? $_smarty_tpl->getVariable('newsedit')->value['hurl'] : null);?>
" id="url" class="text large"></td>
       <td><label for="rel-canonical" class="desc">REL CANONICAL</label><input type="text" name="news[canonical]" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['canonical']) ? $_smarty_tpl->getVariable('newsedit')->value['canonical'] : null);?>
" id="rel-canonical" class="text large"></td>
      </tr>
      <tr>
        <td colspan="2"><label for="kratka_text" class="desc"><?php echo @ADMIN_PAGE_BRIEF;?>
</label>
        <textarea id="text" name="news[brief]" style="width: 100%;" rows="10"><?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['brief']) ? $_smarty_tpl->getVariable('newsedit')->value['brief'] : null);?>
</textarea> </td>
      </tr>
       <tr>
        <td colspan="2"><label for="kratka_text" class="desc"><?php echo @ADMIN_PAGE_TEXT;?>
</label><textarea id="brief" name="news[text]" style="width: 100%;" rows="10"><?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['text']) ? $_smarty_tpl->getVariable('newsedit')->value['text'] : null);?>
</textarea></td>
      </tr>
     </tbody>
   </table>
  </div>
   <div class="box right w29">
     <div id="accordion" class="ui-accordion-forms">
	<h3><a href="#"><?php echo @ADMIN_PARAMETERS;?>
</a></h3>
        <div>
            <table class="form">
              <tr>
                <td><label class='desc' for='datepicker1'><?php echo @ADMIN_NEWS_DATE;?>
:</label><input name="news[date]"class='text date' style="width:90%" type="text" id="datepicker1" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['date']) ? $_smarty_tpl->getVariable('newsedit')->value['date'] : null);?>
" /></td>
                <td><label class='desc' for='act'><?php echo @ADMIN_ON;?>
</label><br><input value=1 id="act" name="news[enable]" <?php if ((isset($_smarty_tpl->getVariable('newsedit')->value['enable']) ? $_smarty_tpl->getVariable('newsedit')->value['enable'] : null)){?>checked <?php }?> type="checkbox" /></td>
              </tr>
             <tr>
                <td colspan="2"><p><label class='desc' for='photo'><?php echo @ADMIN_PAGE_PICTURE;?>
::</label></p><input id="photo" name="news_pic" class="text small file" type="file" /><br /> 
                <?php ob_start(); ?>./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['Pict']) ? $_smarty_tpl->getVariable('newsedit')->value['Pict'] : null);?>
<?php  $_smarty_tpl->assign('news_pictures', ob_get_contents()); $_smarty_tpl->smarty->_smarty_vars['capture']['default']=ob_get_clean();?>    
				<?php if (file_exists($_smarty_tpl->getVariable('news_pictures')->value)!=''&&(isset($_smarty_tpl->getVariable('newsedit')->value['Pict']) ? $_smarty_tpl->getVariable('newsedit')->value['Pict'] : null)){?>
					<img src="./products_pictures/<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['Pict']) ? $_smarty_tpl->getVariable('newsedit')->value['Pict'] : null);?>
" alt="" />
					<a href="javascript:confirmDelete('<?php echo @QUESTION_DELETE_PICTURE;?>
','./<?php echo @CONF_ADMIN_FILE;?>
?dpt=<?php echo (isset($_GET['dpt'])? $_GET['dpt'] : null);?>
&sub=<?php echo (isset($_GET['sub'])? $_GET['sub'] : null);?>
&picture_remove=<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['id']) ? $_smarty_tpl->getVariable('newsedit')->value['id'] : null);?>
')" style="width: 150px;"><img src="./images/backend/delete.png" alt="" /></a>
				<?php }else{ ?>
					<img src="./products_pictures/nophoto.jpg" alt="" />
				<?php }?>
                </td>
             </tr>
           </table>
	</div>
	<h3><a href="#"><?php echo @ADMIN_META_TAGS;?>
</a></h3>
    <div>
<table class="form">
 <tr>
   <td><label class='desc help' for='meta-title' title="Если не указан, генерируется из заголовка">META-TITLE:</label><input class='text large' type="text" id="meta-title" name="news[meta_title]" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['meta_title']) ? $_smarty_tpl->getVariable('newsedit')->value['meta_title'] : null);?>
" /></td>
 </tr>
 <tr>
   <td><label class='desc help' for='meta-keywords' title="Через запятую, 10-15 слов">META-KEYWORDS:</label><textarea class='field textarea small' name="news[meta_keywords]" id="meta-keywords" rows="" cols=""><?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['meta_keywords']) ? $_smarty_tpl->getVariable('newsedit')->value['meta_keywords'] : null);?>
</textarea></td>
 </tr>
 <tr>
   <td><label class='desc help' for='meta-description' title="Не более 250 символов">META-DESCRIPTION:</label><textarea class='field textarea small' name="news[meta_desc]" id="meta-description" rows="" cols=""><?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['meta_desc']) ? $_smarty_tpl->getVariable('newsedit')->value['meta_desc'] : null);?>
</textarea></td>
 </tr>
</table>
	</div>
    </div>	
  </div>
  <input type="hidden" name="add_news" value="<?php echo (isset($_smarty_tpl->getVariable('newsedit')->value['id']) ? $_smarty_tpl->getVariable('newsedit')->value['id'] : null);?>
" />  
  <input type="submit" id="submit" name="submit" class="button-primary" value="<?php echo @SAVE_BUTTON;?>
" />
 </form>
</div>

<script type="text/javascript">
	CKEDITOR.replace( 'text', {filebrowserBrowseUrl : '/core/ckeditor/plugins/elfinder/elfinder.html'});
	CKEDITOR.replace( 'brief', {filebrowserBrowseUrl : '/core/ckeditor/plugins/elfinder/elfinder.html'});
</script>

</dib>