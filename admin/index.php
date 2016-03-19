<?php

session_start();
require_once('../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph.php');
require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph_pie.php');


$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
}















$url_games_players_piegraph = WEB_ROOT.'/src/graphs/games_players_piegraph.php';
$url_games_teams_piegraph = WEB_ROOT.'/src/graphs/games_teams_piegraph.php';
$url_games_bargraph = WEB_ROOT.'/src/graphs/games_bargraph.php';









// send to the template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('url_games_players_piegraph', $url_games_players_piegraph);
$smarty->assign('url_games_teams_piegraph', $url_games_teams_piegraph);
$smarty->assign('url_games_bargraph', $url_games_bargraph);




$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/index.tpl');	
?>