<?php
/* Smarty version 3.1.29, created on 2016-03-25 18:13:57
  from "E:\wamp\www\Intranet\view\templates\admin\place.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f571d5468e57_29058246',
  'file_dependency' => 
  array (
    '6b25f81bea34d752c9c451dcc1c44772e26d6938' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\place.tpl',
      1 => 1458907067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f571d5468e57_29058246 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '804956f571d54073c2_10454386';
?>

<?php echo '<script'; ?>
 type='text/JavaScript'>
    <?php if ($_smarty_tpl->tpl_vars['place_libre']->value) {?>
        alert("OK \n la place de <?php echo $_smarty_tpl->tpl_vars['pseudo']->value;?>
 a été attribuée");
    <?php } else { ?>
        alert("ERREUR \n la place numero <?php echo $_smarty_tpl->tpl_vars['place']->value['numero'];?>
 est prise par <?php echo $_smarty_tpl->tpl_vars['place']->value['occupantPseudo'];?>
");
    <?php }?>	
    window.location.href='<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/admin/emplacements.php';
<?php echo '</script'; ?>
><?php }
}
