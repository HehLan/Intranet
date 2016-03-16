<?php

session_start();
require_once('class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



// Variables
$connected = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();

// This is an unknown user (no connected)
if (!$connected)
{
    header('Location: '.WEB_ROOT.'/modules/login.php');
}
else
{
    $duree_chat = '2000';
    $duree_chat_users = '20000';    
    $chatIsActive = $database->chatIsActive();    
    if ($chatIsActive)
    {        
        $duree_chat = $database->getChatTiming();
        $duree_chat_users = $database->getUserChatTiming();
        require_once('src/ajax/chat.php');
    }
}

// Applying Template
$smarty->assign('con', $connected);
$smarty->assign('chat', $chatIsActive);
$smarty->assign('next_matches', $database->getNextMatches($connected));
$smarty->assign('navTournois', $database->getNavTournois());
$smarty->assign('newsList', $database->getNewsList());
$smarty->display('default/index.tpl');

?>