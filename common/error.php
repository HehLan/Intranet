<?php

require_once('head.php');

$id = null;
$msg = null;

if(isset($_GET['id']) && isset($_GET['msg']))
{
    $id = $_GET['id'];
    $msg = $_GET['msg'];
}

$smarty->assign('id', $id); 
$smarty->assign('msg', $msg);

$smarty->display('default/error.tpl');
?>