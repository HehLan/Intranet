<?php
// Includes


require_once('../../common/head.php');

require_once('../../common/utils.php'); // get some utility functions
require_once('../../class/Smarty_HEHLan.class.php');
require_once('../../class/Database.class.php');
require_once('../../class/Auth.class.php');
require_once('../../class/Query.class.php');

$database = new Database();

if (isset($_POST['id']))
{
    $sql = 'INSERT INTO tchat(id_joueur,pseudo,quand,message)
		VALUES (:id,:pseudo,NOW(),:msg)';
    $query = new Query($database, $sql);
    $query->bind('id', $_POST['id'], PDO::PARAM_INT);
    $query->bind('msg', $_POST['msg'], PDO::PARAM_STR);
    $query->bind('pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    if (!$query->execute())
    {
        echo 'ERREUR INSERT CHAT SQL';
        exit;
    }
}



?>
	