<?php
require_once('common/head.php');

// Variables
$chatIsActive = false;

// This is an unknown user (no connected)
/*if (!$connected)
{
    header('Location: '.WEB_ROOT.'/modules/login.php');
}
else
{*/
    $duree_chat = '2000';
    $duree_chat_users = '20000';    
    $chatIsActive = $database->chatIsActive();    
    if ($chatIsActive)
    {        
        $duree_chat = $database->getChatTiming();
        $duree_chat_users = $database->getUserChatTiming();
        require_once('src/ajax/chat.php');
    }
//}

// Applying Template
$smarty->assign('chat', $chatIsActive);
$smarty->assign('next_matches', $database->getNextMatches($connected));
$smarty->assign('navTournois', $database->getNavTournois());
$smarty->assign('newsList', $database->getNewsList());
$smarty->display('default/index.tpl');

?>