<?php

require_once('common/head.php');

$matchId = $_GET['matchId'];

$smarty->assign('matchId', $matchId);
$smarty->display('default/pickResult.tpl');

?>