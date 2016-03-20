<?php

require_once('common/head.php');

// Applying Template
$smarty->assign('next_matches', $database->getNextMatches($connected));
$smarty->assign('navTournois', $database->getNavTournois());



$smarty->display('default/downloads.tpl');

?>
