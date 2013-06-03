<?php /* Smarty version Smarty-3.0.4, created on 2013-03-12 12:55:23
         compiled from "./core/admin_tmpl/default.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1751650752513f099be73549-14829501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259d4c5caec28c18855d32debefea41e0049e220' => 
    array (
      0 => './core/admin_tmpl/default.tpl.html',
      1 => 1360848408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751650752513f099be73549-14829501',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('totals')->value){?>
<div class="heading"><h1><?php echo @LINK_TO_HOMEPAGE;?>
</h1></div>
<div class="content">
<?php echo @ADMIN_WELCOME;?>

	<table class="widefat" cellspacing="0">
		<thead><tr><th colspan="2"><a><span><strong><?php echo @ADMIN_STAT_SHOP;?>
</strong></span></a></th></tr></thead>
		<tbody>
			<tr class="alternate">
				<td style="width:50%;">
					<table class="widefat" cellspacing="0">
						<thead><tr><th colspan="2"><a><span><strong><?php echo @ADMIN_ORDERS;?>
</strong></span></a></th></tr></thead>
						<tbody>
							<tr class="alternate">
								<td width="120"><?php echo @ADMIN_today;?>
:</td>
								<td><?php if ((isset($_smarty_tpl->getVariable('totals')->value['orders_today']) ? $_smarty_tpl->getVariable('totals')->value['orders_today'] : null)>0){?><strong><?php }?><?php echo (isset($_smarty_tpl->getVariable('totals')->value['orders_today']) ? $_smarty_tpl->getVariable('totals')->value['orders_today'] : null);?>
 <?php echo @ADMIN_ORDER_ov;?>
 (<?php echo print_price((isset($_smarty_tpl->getVariable('totals')->value['revenue_today']) ? $_smarty_tpl->getVariable('totals')->value['revenue_today'] : null));?>
)<?php if ((isset($_smarty_tpl->getVariable('totals')->value['orders_today']) ? $_smarty_tpl->getVariable('totals')->value['orders_today'] : null)>0){?></strong><?php }?></td>
							</tr>
							<tr class="alternate">
								<td><?php echo @ADMIN_yesterday;?>
:</td>
								<td><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['orders_yesterday']) ? $_smarty_tpl->getVariable('totals')->value['orders_yesterday'] : null);?>
</strong> <?php echo @ADMIN_ORDER_ov;?>
 (<?php echo print_price((isset($_smarty_tpl->getVariable('totals')->value['revenue_yesterday']) ? $_smarty_tpl->getVariable('totals')->value['revenue_yesterday'] : null));?>
)</td>
							</tr>
							<tr class="alternate">
								<td><?php echo @ADMIN_This_month;?>
:</td>
								<td><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['orders_thismonth']) ? $_smarty_tpl->getVariable('totals')->value['orders_thismonth'] : null);?>
</strong> <?php echo @ADMIN_ORDER_ov;?>
 (<?php echo print_price((isset($_smarty_tpl->getVariable('totals')->value['revenue_thismonth']) ? $_smarty_tpl->getVariable('totals')->value['revenue_thismonth'] : null));?>
)</td>
							</tr>
							<tr class="alternate">
								<td><?php echo @ADMIN_only;?>
:</td>
								<td><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['orders']) ? $_smarty_tpl->getVariable('totals')->value['orders'] : null);?>
</strong> <?php echo @ADMIN_ORDER_ov;?>
 (<?php echo (isset($_smarty_tpl->getVariable('totals')->value['revenue']) ? $_smarty_tpl->getVariable('totals')->value['revenue'] : null);?>
)</td>
							</tr>
						</tbody>
					</table>
				</td>
				<td style="width:50%;vertical-align:top;">
					<table class="widefat" cellspacing="0">
						<thead><tr><th colspan="2"><a><span><strong><?php echo @ADMIN_products;?>
</strong></span></a></th></tr></thead>
						<tbody>
							<tr class="alternate">
								<td><?php echo @ADMIN_total_number_products;?>
:</td>
								<td width="50"><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['products']) ? $_smarty_tpl->getVariable('totals')->value['products'] : null);?>
</strong></td>
							</tr>
							<tr class="alternate">
								<td><?php echo @ADMIN_products_for_client;?>
:</td>
								<td><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['products_enabled']) ? $_smarty_tpl->getVariable('totals')->value['products_enabled'] : null);?>
</strong></td>
							</tr>
							<tr class="alternate">
								<td><?php echo @ADMIN_category_products;?>
:</td>
								<td><strong><?php echo (isset($_smarty_tpl->getVariable('totals')->value['categories']) ? $_smarty_tpl->getVariable('totals')->value['categories'] : null);?>
</strong></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<?php }?>