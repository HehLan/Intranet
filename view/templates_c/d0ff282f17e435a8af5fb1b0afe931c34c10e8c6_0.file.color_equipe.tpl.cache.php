<?php
/* Smarty version 3.1.29, created on 2016-03-25 12:25:12
  from "E:\wamp\www\Intranet\view\templates\default\color_equipe.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f520186943c5_37914918',
  'file_dependency' => 
  array (
    'd0ff282f17e435a8af5fb1b0afe931c34c10e8c6' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\color_equipe.tpl',
      1 => 1458379209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f520186943c5_37914918 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '913856f5201861f0a9_38707379';
?>

<?php echo '<script'; ?>
 type='text/javascript'>
	<?php
$_from = $_smarty_tpl->tpl_vars['emplacements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_emplacement_0_saved_item = isset($_smarty_tpl->tpl_vars['emplacement']) ? $_smarty_tpl->tpl_vars['emplacement'] : false;
$_smarty_tpl->tpl_vars['emplacement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['emplacement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['emplacement']->value) {
$_smarty_tpl->tpl_vars['emplacement']->_loop = true;
$__foreach_emplacement_0_saved_local_item = $_smarty_tpl->tpl_vars['emplacement'];
?>
		$('#<?php echo $_smarty_tpl->tpl_vars['emplacement']->value["id_emplacement"];?>
').css( { background : '#337ab7' } );
	<?php
$_smarty_tpl->tpl_vars['emplacement'] = $__foreach_emplacement_0_saved_local_item;
}
if ($__foreach_emplacement_0_saved_item) {
$_smarty_tpl->tpl_vars['emplacement'] = $__foreach_emplacement_0_saved_item;
}
?>
	$('#dialogInfo_equipe').css( { display:'block' } );
<?php echo '</script'; ?>
>
<center><u>Information equipe :</u></center>
<u>Team :</u><?php echo $_smarty_tpl->tpl_vars['nomequipe']->value;?>

<br>
<u>Pseudo Joueur :</u><?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>

<br>
<u>Tournoi :</u><?php echo $_smarty_tpl->tpl_vars['nomtournoi']->value;?>

<?php echo '</script'; ?>
><?php }
}
