<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:44
  from "E:\wamp\www\Intranet\view\templates\admin\commandListCommandes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab853c427_09715943',
  'file_dependency' => 
  array (
    'bc2d9213b237ea76125807e94560bb85db5a081c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\commandListCommandes.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f4fab853c427_09715943 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '78556f4fab8261012_98478311';
?>

<?php
$_from = $_smarty_tpl->tpl_vars['commandes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_commande_0_saved_item = isset($_smarty_tpl->tpl_vars['commande']) ? $_smarty_tpl->tpl_vars['commande'] : false;
$_smarty_tpl->tpl_vars['commande'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['commande']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['commande']->value) {
$_smarty_tpl->tpl_vars['commande']->_loop = true;
$__foreach_commande_0_saved_local_item = $_smarty_tpl->tpl_vars['commande'];
?>
	<div class="panel panel-default" id-commande="<?php echo $_smarty_tpl->tpl_vars['commande']->value['id_commande'];?>
">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<span class="glyphicon glyphicon-chevron-down commandeExpander glyphicon-white" 
				role="tab" id="headingComm<?php echo $_smarty_tpl->tpl_vars['commande']->value['id_commande'];?>
"
				data-toggle="collapse" 
				data-parent="#commandesList" href="#collapseComm<?php echo $_smarty_tpl->tpl_vars['commande']->value['id_commande'];?>
" 
				aria-expanded="true">
			</span>
			<span class="commande-nom"><?php echo $_smarty_tpl->tpl_vars['commande']->value['joueur']['pseudo'];?>
</span>
			<div class="float-me">
				<span class="commande-date">il y a <?php echo $_smarty_tpl->tpl_vars['commande']->value['date'];?>
</span>
				<span class="paid glyphicon glyphicon-euro" commande-status="<?php echo $_smarty_tpl->tpl_vars['commande']->value['paye'];?>
"
					<?php if ($_smarty_tpl->tpl_vars['commande']->value['paye']) {?>style="color:goldenrod"<?php }?>>
				</span>
				<span class="commanded glyphicon glyphicon-earphone" commande-status="<?php echo $_smarty_tpl->tpl_vars['commande']->value['commanded'];?>
"
					<?php if ($_smarty_tpl->tpl_vars['commande']->value['commanded']) {?>style="color:darkblue"<?php }?>>
				</span>
				<span class="received glyphicon glyphicon-ok" commande-status="<?php echo $_smarty_tpl->tpl_vars['commande']->value['disponible'];?>
"
					<?php if ($_smarty_tpl->tpl_vars['commande']->value['disponible']) {?>style="color:darkgreen"<?php }?>>
				</span>
			</span>
		  </h4>
		</div>
		<div id="collapseComm<?php echo $_smarty_tpl->tpl_vars['commande']->value['id_commande'];?>
" class="panel-collapse collapse in" 
			role="tabpanel" aria-labelledby="headingComm<?php echo $_smarty_tpl->tpl_vars['commande']->value['id_commande'];?>
">
			<div class="panel-body">
				<div class="commande-description">
					<div class="commande-items">
					<?php
$_from = $_smarty_tpl->tpl_vars['commande']->value['commande'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_1_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_1_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
						<div class="commande-item">
							<div class="commande-item-quantite col-md-2"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantite'];?>
X</div>
							<div class="commande-item-nom col-md-4"><?php echo $_smarty_tpl->tpl_vars['item']->value['nom'];?>
</div>
							<div class="commande-item-grp col-md-4"><?php echo $_smarty_tpl->tpl_vars['item']->value['grp'];?>
</div>
							<div class="commande-item-prix col-md-2"><?php echo $_smarty_tpl->tpl_vars['item']->value['prix'];?>
 €</div>
						</div>
					<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_local_item;
}
if ($__foreach_item_1_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved_item;
}
?>
					</div>
					<div class="commande-closing-items">
						<div class="commande-comment col-md-offset-1 col-md-8"><?php echo $_smarty_tpl->tpl_vars['commande']->value['comment'];?>
</div>
						<div class="commande-total col-md-2">TOTAL <?php echo $_smarty_tpl->tpl_vars['commande']->value['total'];?>
€</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
$_smarty_tpl->tpl_vars['commande'] = $__foreach_commande_0_saved_local_item;
}
if ($__foreach_commande_0_saved_item) {
$_smarty_tpl->tpl_vars['commande'] = $__foreach_commande_0_saved_item;
}
}
}
