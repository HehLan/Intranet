<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$tried = false;

// This is an unknown user (no connected)
if (!$connected)
{
    // The user has entered its login and password
    if (isset($_POST['login']) && isset($_POST['pwd']))
    {
        $player = $database->getPlayer($_POST['login'], $_POST['pwd']);
        if($player == null)
        {
            $tried = true;
        }
        else
        {
            $_SESSION['id_joueur'] = $player->getIdJoueur();
            $_SESSION['login'] = $player->getPseudo();
            $_SESSION['level'] = $player->getLevel();
            $_SESSION['password'] = $player->getPassword();
            $connected = true;  
        }
    }
}

if($connected)
{
    header('Location: '.WEB_ROOT);
}




// Applying Template
$smarty->assign('connected', $connected);
$smarty->assign('tried', $tried);


$smarty->display('default/login.tpl');


?>