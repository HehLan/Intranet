<?php

session_start();
require_once('../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();


$sql = 'SELECT data
        FROM brackets';
$query = new Query($database, $sql);
$query->execute();
$data = $query->getResult()[0];




echo $data['data'];


?>
