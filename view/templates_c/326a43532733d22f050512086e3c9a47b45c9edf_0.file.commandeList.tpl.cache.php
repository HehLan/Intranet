<?php
/* Smarty version 3.1.29, created on 2016-03-24 22:57:03
  from "E:\wamp\www\Intranet\view\templates\default\commandeList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f462afcddf59_06318587',
  'file_dependency' => 
  array (
    '326a43532733d22f050512086e3c9a47b45c9edf' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\commandeList.tpl',
      1 => 1458745478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f462afcddf59_06318587 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '287656f462afcc6841_71358543';
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
	<div class="commandRow">
		
	</div>
<?php
$_smarty_tpl->tpl_vars['commande'] = $__foreach_commande_0_saved_local_item;
}
if ($__foreach_commande_0_saved_item) {
$_smarty_tpl->tpl_vars['commande'] = $__foreach_commande_0_saved_item;
}
}
}
