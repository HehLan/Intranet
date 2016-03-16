<?php



session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'common/utils.php');
require_once(DOCUMENT_ROOT.'class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'class/Database.class.php');
require_once(DOCUMENT_ROOT.'class/Auth.class.php');
require_once(DOCUMENT_ROOT.'class/Query.class.php');


$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


$id_tournoi = 0;
if(isset($_POST['id_tournoi']) && isset($_POST['id_match']))
{ 
    $page = $_POST['page'];
    $id_tournoi = $_POST['id_tournoi'];
    $id_match = $_POST['id_match'];
    $jour = get_variable($database, $_POST['jour']);
    $jour = $jour.' '.$_POST['heure'].':'.$_POST['minute'].':00';

    $sql = 'UPDATE matchs SET heure=:heure WHERE id_match=:id';
    $query = new Query($database, $sql);
    $query->bind(':id', $id_match, PDO::PARAM_INT);
    $query->bind(':heure', $jour, PDO::PARAM_STR);
    if($query->execute())
    {
        header('Location: '.$page.'.php?id_tournoi='.$id_tournoi.'&looser='.$_POST['looser']);
    }
    else
    {
        global $glob_debug;
        if($glob_debug)
        {
            echo 'ERREUR - UPDATE HEURE';
        }
        exit;    
    }
}


?>