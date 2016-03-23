<?php

require_once('common/head.php');


$sql = 'SELECT * FROM downloads';
$query = new Query($database, $sql);
$query->execute();
$downloads = $query->getResult();




// Applying Template       
$smarty->assign('downloads', $downloads);


$smarty->display('default/downloads.tpl');

?>
