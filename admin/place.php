<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$connected = false;
$allowed = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 


$id_place = $_POST['SelectEmplacement'];
$pseudo = $_POST['SelectPseudo'];
$place['occupantPseudo'] = '';
$place['numero'] = '';

$sql = 'SELECT * FROM joueurs WHERE id_emplacement = $id_place';
$query = new Query($database, $sql);
$query->execute();
$data = $query->getResult();
if ($data[0] == 0)
{    
    $sql = 'UPDATE joueurs SET id_emplacement='.$id_place.' WHERE pseudo='.$pseudo;
    $query = new Query($database, $sql);
    $query->bind(':id_emplacement', $id_place, PDO::PARAM_INT);
    $query->bind(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->execute();
    
    $sql = 'SELECT numero FROM emplacement WHERE id_emplacement='.$id_place;
    $query = new Query($database, $sql);
    $query->execute();
    foreach ($query->getResult() as $joueurs)
    {
        echo $joueurs['numero'];
    }
}
else
{
    $sql = 'SELECT numero FROM emplacement WHERE id_emplacement='.$id_place;
    $query = new Query($database, $sql);
    $query->bind(':id_emplacement', $id_place, PDO::PARAM_INT);	
    $query->execute();
    $numeros = array();
    foreach ($query->getResult() as $joueurs)
    {
        $numeros[] = $joueurs['numero'];
    }
    $place['numero'] = implode(', ', $numeros);
	
    $sql = 'SELECT pseudo,numero FROM emplacement,joueurs
            WHERE joueurs.id_emplacement='.$id_place.' AND joueurs.id_emplacement=emplacement.id_emplacement';
    $query = new Query($database, $sql);
    $query->bind(':id_emplacement', $id_place, PDO::PARAM_INT);
    $query->execute();
    $pseudos = array();
    foreach ($query->getResult() as $joueurs)
    {
        $pseudos[] = $joueurs['pseudo'];
    }
    $place['occupantPseudo'] = implode(', ', $pseudos);
}

$smarty->assign('place', $place);
$smarty->assign('pseudo', $pseudo);
$smarty->assign('place_libre', ($data[0]==0));

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/place.tpl');	
?>

