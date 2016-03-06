<?php


require_once('../../common/connect.php');
require_once('../../class/Smarty_HEHLan.class.php');
require_once('../../class/Database.class.php');

$database = new Database();
$smarty = new Smarty_HEHLan();

if (isset($_POST['id']))
{
    $database->insertUserInChat($_POST['id'], $_POST['pseudo']);
}

$sql = "SELECT pseudo FROM tchat_users WHERE lastcon>SUBTIME(NOW(),'0 0:0:30') ORDER BY pseudo";
$query = $connexion->prepare($sql);

if ($query->execute()) {
    echo '<strong>Connectés :</strong><br>';
    while ($msg = $query->fetch(PDO::FETCH_ASSOC)) {
        $pseudo = htmlspecialchars($msg['pseudo']);
        echo $pseudo . '<br>';
    }
} else {
    echo 'ERREUR USERS SQL 2';
}
