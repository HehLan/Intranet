<?php
/* Smarty version 3.1.29, created on 2016-03-25 11:48:11
  from "E:\wamp\www\Intranet\view\templates\default\downloads.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f5176b4a7070_59916544',
  'file_dependency' => 
  array (
    '12fc3aa5fcca18b8fb6170afe105781f2ea91a9b' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\downloads.tpl',
      1 => 1458856554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f5176b4a7070_59916544 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2175256f5176b42ded6_78395901';
?>

<?php
$_from = $_smarty_tpl->tpl_vars['downloads']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_download_0_saved_item = isset($_smarty_tpl->tpl_vars['download']) ? $_smarty_tpl->tpl_vars['download'] : false;
$_smarty_tpl->tpl_vars['download'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['download']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
$__foreach_download_0_saved_local_item = $_smarty_tpl->tpl_vars['download'];
?>

  <a class="list-group-item" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'src');?>
/<?php echo $_smarty_tpl->tpl_vars['download']->value['src'];?>
"><?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
</a>
    
<?php
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_0_saved_local_item;
}
if ($__foreach_download_0_saved_item) {
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_0_saved_item;
}
}
}
