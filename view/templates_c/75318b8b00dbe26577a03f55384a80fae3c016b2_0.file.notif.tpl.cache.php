<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:44:32
  from "E:\wamp\www\Intranet\view\templates\default\notif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f540c00ff1b8_40804766',
  'file_dependency' => 
  array (
    '75318b8b00dbe26577a03f55384a80fae3c016b2' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\notif.tpl',
      1 => 1458864215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f540c00ff1b8_40804766 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '622056f540c000ce82_69521721';
?>

<?php
$_from = $_smarty_tpl->tpl_vars['notifications']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_notification_0_saved_item = isset($_smarty_tpl->tpl_vars['notification']) ? $_smarty_tpl->tpl_vars['notification'] : false;
$_smarty_tpl->tpl_vars['notification'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['notification']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['notification']->value) {
$_smarty_tpl->tpl_vars['notification']->_loop = true;
$__foreach_notification_0_saved_local_item = $_smarty_tpl->tpl_vars['notification'];
?>
    <div class="notifWidget">
        <a class="btn btn-primary notif-head <?php ob_start();
echo $_smarty_tpl->tpl_vars['notification']->value['seen'];
$_tmp1=ob_get_clean();
if (!$_tmp1) {?>notif-not-seen<?php }?>" 
           role="button" data-toggle="collapse" href="#notif<?php echo $_smarty_tpl->tpl_vars['notification']->value['id_notifications'];?>
" 
           aria-controls="#notif<?php echo $_smarty_tpl->tpl_vars['notification']->value['id_notifications'];?>
" 
           notif-id="<?php echo $_smarty_tpl->tpl_vars['notification']->value['id_notifications'];?>
">
            <i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i> 
            <?php echo $_smarty_tpl->tpl_vars['notification']->value['titre'];?>

            <span class="notifDate">
                <?php echo $_smarty_tpl->tpl_vars['notification']->value['date'];?>

            </span>
        </a>
        <div id="notif<?php echo $_smarty_tpl->tpl_vars['notification']->value['id_notifications'];?>
" class="collapse notif-body">
            <?php echo $_smarty_tpl->tpl_vars['notification']->value['message'];?>

        </div>
    </div>
<?php
$_smarty_tpl->tpl_vars['notification'] = $__foreach_notification_0_saved_local_item;
}
if ($__foreach_notification_0_saved_item) {
$_smarty_tpl->tpl_vars['notification'] = $__foreach_notification_0_saved_item;
}
}
}
