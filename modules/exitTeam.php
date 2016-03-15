<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'common/utils.php');
require_once(DOCUMENT_ROOT.'class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'class/Database.class.php');
require_once(DOCUMENT_ROOT.'class/Auth.class.php');
require_once(DOCUMENT_ROOT.'class/Query.class.php');


$database = new Database();
$smarty = new Smarty_HEHLan();


if (!empty($_SESSION['id_joueur']))
{
    $sql = 'DELETE FROM equipes_joueur WHERE id_joueur = :idj';
    $query = new Query($database, $sql);
    $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
    if ($query->execute())
    {
        //le joueur a quitté l'equipe
        echo "Vous n'êtes plus un membre de cette team!";
    }
    else
    {
        //erreur le joueur n a pas pu quitter l'équipe
        echo "Une erreur s'est produite, veuillez réessayer plus tard!";
    }
}
else
{
    echo "Votre session n'est plus valide! Veuillez-vous reconnectez.";
}

?>