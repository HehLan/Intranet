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




if(isset($_GET['id_tournoi']))
{
    $sql = 'SELECT json
            FROM brackets
            WHERE id_tournoi=:id_tournoi
            AND type=:type';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $_GET['id_tournoi'], PDO::PARAM_INT);
    $query->bind(':type', $_GET['type'], PDO::PARAM_INT);
    $query->execute();
    $data = $query->getResult()[0];

    echo $data['json'];

}
else
{
    echo 'error';
}


?>
