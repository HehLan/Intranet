<?php
    session_start();
    require_once('../common/connect.php');
    require_once('../common/utils.php');
    require_once('../class/Database.class.php');
    require_once('../class/Smarty_HEHLan.class.php');
    require_once('modules/connexion/classAuth.php');

    $con = false;
    $chat = false;
    $database = new Database();
    $smarty = new Smarty_HEHLan();

    if(isset($_SESSION['id_joueur']))
    {
        if(($_SESSION['id_joueur']!=0) && $_SESSION['level']<=3)
            $con=true;
    }

    if(!$con)
    {
        header('Location: ../index.php');
    } 

    $sql = 'SELECT id_equipes, nom FROM equipes ORDER BY nom';  
    $database->query($sql);
    $database->getQuery()->execute();

    // send to the template
    $smarty->assign("con", $con);
    $smarty->assign("chat", $chat);
    $smarty->assign("SESSION", $_SESSION);
    $smarty->display('../templates/admin/index.tpl');	
?>