<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 14:04:24
         compiled from "./core/admin_tmpl/custord_new_orders.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:981203959513f19c82ee866-22099802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd2200f5a019afa9745b9f092b2247ae0ee4164f' => 
    array (
      0 => './core/admin_tmpl/custord_new_orders.tpl.html',
      1 => 1360848406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981203959513f19c82ee866-22099802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include '/var/www/legosp/data/www/legosp.net/smarty/plugins/function.math.php';
?>
<div id="icon-edit-pages" class="icon32"><br /></div><h2><?php echo @ADMIN_NEW_ORDERS;?>
</h2>
	<p><font color="#f00">*</font><?php echo @ADMIN_ABOUT_PRICES;?>
</p>
	<div class="tablenav top">
         <?php echo smarty_function_math(array('assign'=>'count_pages','equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->getVariable('new_order_count')->value,'y'=>(isset($_SESSION['new_order_limit'])? $_SESSION['new_order_limit'] : null)),$_smarty_tpl);?>
 
         <?php if ($_smarty_tpl->getVariable('count_pages')->value>1){?>
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
$_smarty_tpl->tpl_vars['smarty']->value['section']['show']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('new_order_count')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
             <option <?php if ((isset($_SESSION['new_order_limit'])? $_SESSION['new_order_limit'] : null)==$_smarty_tpl->getVariable('smarty')->value['section']['show']['index']){?>selected<?php }?> value='<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['show']['index'];?>
'> <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['show']['index'];?>
 </option>
           <?php endfor; endif; ?>
           </select>
           </form>
        </div>    
        <?php }?>
		<div class='tablenav-pages one-page'><span class="displaying-num"><?php echo $_smarty_tpl->getVariable('new_order_count')->value;?>
 <?php echo @STRING_couple;?>
</span></div>
		<br class="clear" />
	</div>
	<table class="widefat" cellspacing="0">
		<thead>
			<tr>
				<th width="16"><a><span>&#8470;</span></a></th>
				<th><a><span><?php echo @TABLE_CUSTOMER;?>
</span></a></th>
				<th><a><span><?php echo @STRING_CONTACT_INFORMATION;?>
</span></a></th>
				<th><a><span><?php echo @TABLE_ORDERED_PRODUCTS;?>
</span></a></th>
				<th><a><span><?php echo @TABLE_PRODUCT_SUMM;?>
</span></a></th>
				<th><a><span><?php echo @TABLE_ORDER_TIME;?>
</span></a></th>
				<th><a><span><?php echo @STRING_ACTIONS;?>
</span></a></th>
			</tr>
		</thead>
		<tbody>
			 <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('new_orders')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
?>
                           <tr class="alternate">
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_firstname']) ? $_smarty_tpl->tpl_vars['order']->value['cust_firstname'] : null);?>
 <?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_lastname']) ? $_smarty_tpl->tpl_vars['order']->value['cust_lastname'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_phone']) ? $_smarty_tpl->tpl_vars['order']->value['cust_phone'] : null);?>
<br /><a href="mailto:<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_email']) ? $_smarty_tpl->tpl_vars['order']->value['cust_email'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_email']) ? $_smarty_tpl->tpl_vars['order']->value['cust_email'] : null);?>
</a><br /><?php if ((isset($_smarty_tpl->tpl_vars['order']->value['cust_address']) ? $_smarty_tpl->tpl_vars['order']->value['cust_address'] : null)){?><hr /><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_address']) ? $_smarty_tpl->tpl_vars['order']->value['cust_address'] : null);?>
<br><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_city']) ? $_smarty_tpl->tpl_vars['order']->value['cust_city'] : null);?>
 <?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_state']) ? $_smarty_tpl->tpl_vars['order']->value['cust_state'] : null);?>
 <?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_zip']) ? $_smarty_tpl->tpl_vars['order']->value['cust_zip'] : null);?>
<br><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['cust_country']) ? $_smarty_tpl->tpl_vars['order']->value['cust_country'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['order_products']) ? $_smarty_tpl->tpl_vars['order']->value['order_products'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['comment']) ? $_smarty_tpl->tpl_vars['order']->value['comment'] : null)){?><br><br><span style="color: #f00; font-weight: bold"><?php echo @CUSTOMER_COMMENT;?>
</span><br /><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['comment']) ? $_smarty_tpl->tpl_vars['order']->value['comment'] : null);?>
 <?php }?></td>
                            <td><?php echo @CONF_CURRENCY_ID_LEFT;?>
<strong><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['price_summ']) ? $_smarty_tpl->tpl_vars['order']->value['price_summ'] : null)-(isset($_smarty_tpl->getVariable('diskonts')->value[(isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null)]) ? $_smarty_tpl->getVariable('diskonts')->value[(isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null)] : null);?>
</strong><?php echo @CONF_CURRENCY_ID_RIGHT;?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['order']->value['order_time']) ? $_smarty_tpl->tpl_vars['order']->value['order_time'] : null);?>
</td>
				<td style="width: 130px;">
					<a href="./<?php echo @CONF_ADMIN_FILE;?>
?dpt=custord&sub=edit_orders&orderID=<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
" title="<?php echo @ADMIN_EDIT;?>
"><img alt="" src="./images/backend/edit.png"></a>&nbsp;&nbsp;&nbsp;
					<a href="./core/print_tov.php?orderid=<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
" target="_blank" onClick="popupWin = window.open(this.href, 'Torg 12', 'status=1'); popupWin.focus(); return false;" title="<?php echo @ADMIN_ORDER_TOV;?>
"><img src="./images/backend/tov.png" alt="<?php echo @ADMIN_ORDER_TOV;?>
"></a>&nbsp;&nbsp;&nbsp;
					<a href="./core/print_torg12.php?orderid=<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
" target="_blank" onClick="popupWin = window.open(this.href, 'Torg 12', 'status=1'); popupWin.focus(); return false;" title="<?php echo @ADMIN_ORDER_T12;?>
"><img src="./images/backend/t12.png" alt="<?php echo @ADMIN_ORDER_T12;?>
"></a>&nbsp;&nbsp;&nbsp;
					<a href="admin.php?dpt=custord&sub=new_orders&orderid=<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
&complite"><img src="./images/backend/complite.png" title="<?php echo @ADMIN_ORDER_COMPLITE;?>
"/></a>
					<a href="javascript:confirmDelete('<?php echo @QUESTION_DELETE_CONFIRMATION;?>
','<?php echo @CONF_ADMIN_FILE;?>
?dpt=custord&sub=new_orders&delete=<?php echo (isset($_smarty_tpl->tpl_vars['order']->value['orderID']) ? $_smarty_tpl->tpl_vars['order']->value['orderID'] : null);?>
');"><img src="./images/backend/delete.png" alt="<?php echo @CANCEL_BUTTON;?>
"></a>
				</td>
			</tr>
                        <?php }} else { ?>
                         <tr><td colspan=7>
                         <strong><?php echo @STRING_NO_ORDERS;?>
</strong>
                         </td></tr>
			<?php } ?>    
		</tbody>
	</table>
	<div class="tablenav bottom">
		<div class='tablenav-pages one-page'><span class="displaying-num"><?php echo $_smarty_tpl->getVariable('new_order_count')->value;?>
 <?php echo @STRING_couple;?>
</span></div>
		<br class="clear" />
	</div>