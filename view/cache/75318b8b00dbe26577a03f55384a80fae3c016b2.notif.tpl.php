<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:44:32
  from "E:\wamp\www\Intranet\view\templates\default\notif.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f540c0112a46_10155849',
  'file_dependency' => 
  array (
    '75318b8b00dbe26577a03f55384a80fae3c016b2' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\notif.tpl',
      1 => 1458864215,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f540c0112a46_10155849 ($_smarty_tpl) {
?>

    <div class="notifWidget">
        <a class="btn btn-primary notif-head notif-not-seen" 
           role="button" data-toggle="collapse" href="#notif1" 
           aria-controls="#notif1" 
           notif-id="1">
            <i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i> 
            Hello World!
            <span class="notifDate">
                2j
            </span>
        </a>
        <div id="notif1" class="collapse notif-body">
            Ceci est un test
        </div>
    </div>
    <div class="notifWidget">
        <a class="btn btn-primary notif-head notif-not-seen" 
           role="button" data-toggle="collapse" href="#notif2" 
           aria-controls="#notif2" 
           notif-id="2">
            <i class="remove glyphicon glyphicon-remove-sign glyphicon-white"></i> 
            I'm alive...
            <span class="notifDate">
                2j
            </span>
        </a>
        <div id="notif2" class="collapse notif-body">
            ALIVE!!!
        </div>
    </div>
<?php }
}
