<?php

session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$connected = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();




if(isset($_GET['id_tournoi']) && isset($_GET['group_number']))
{
    // Get bracket for group
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi = :id_tournoi
            AND type = :type
            AND group_number = :group_number';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_GET['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_GET['type'], PDO::PARAM_INT);
    $query->bind(':group_number', $_GET['group_number'], PDO::PARAM_INT);
    $query->execute();
    $data = $query->getResult()[0];

    echo $data['json'];
}
else if(isset($_GET['id_tournoi']) && isset($_GET['finales_number']))
{
    // Get bracket for finales
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi = :id_tournoi
            AND type = :type
            AND finales_number = :finales_number';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_GET['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_GET['type'], PDO::PARAM_INT);
    $query->bind(':finales_number', $_GET['finales_number'], PDO::PARAM_INT);
    $query->execute();
    $data = $query->getResult()[0];

    echo $data['json'];
}
else
{
    echo 'error';
}


?>
