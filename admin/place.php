<?php
session_start();
require_once('../common/utils.php');
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');
require_once('../class/Query.class.php');



$connected = false;
$allowed = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);
$connexion = $database->getConnection();


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 

$id_place = $_POST["SelectEmplacement"];
$pseudo = $_POST["SelectPseudo"];
$place['occupantPseudo'] = '';
$place['numero'] = '';

$sql="select * from joueurs where id_emplacement=$id_place";
$requete_preparee=$connexion->prepare($sql);
$requete_preparee->execute();
$data=$requete_preparee->fetch(PDO::FETCH_BOTH);
if ($data[0] == 0)
{    
	$query="UPDATE joueurs SET id_emplacement='$id_place' WHERE pseudo='$pseudo'";
	$requete_preparee1=$connexion->prepare($query);
	$requete_preparee1->bindvalue("id_emplacement",$id_place,PDO::PARAM_INT);
	$requete_preparee1->bindvalue("pseudo",$pseudo,PDO::PARAM_STR);
	$requete_preparee1->execute();
	$query1="select numero from emplacement where id_emplacement='$id_place'";
	$requete_preparee1=$connexion->prepare($query1);
	$requete_preparee1->execute();
	while($joueurs=$requete_preparee1->fetch(PDO::FETCH_ASSOC)) 
		{
	echo $joueurs['numero'];
			}
}
else
{
	$query1="select numero from emplacement where
	id_emplacement='$id_place'";
	$requete_preparee1=$connexion->prepare($query1);
	$requete_preparee1->bindvalue("id_emplacement",$id_place,PDO::PARAM_INT);	
	$requete_preparee1->execute();
	$numeros = array();
	while($joueurs=$requete_preparee1->fetch(PDO::FETCH_ASSOC)) 
	{
		$numeros[] = $joueurs['numero'];
	}
	$place['numero'] = implode(', ', $numeros);
	
	$query1="select pseudo,numero from emplacement,joueurs where joueurs.id_emplacement='$id_place' and joueurs.id_emplacement=emplacement.id_emplacement";	
	$requete_preparee2=$connexion->prepare($query1);
	$requete_preparee2->bindvalue("id_emplacement",$id_place,PDO::PARAM_INT);
	$requete_preparee2->execute();
	$pseudos=array();
	while($joueurs=$requete_preparee2->fetch(PDO::FETCH_ASSOC)) 
	{
		$pseudos[]=$joueurs['pseudo'];

	}
	$place['occupantPseudo'] = implode(', ', $pseudos);
}

$smarty->assign("place",$place);
$smarty->assign("pseudo",$pseudo);
$smarty->assign("place_libre",($data[0]==0));

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/place.tpl');	
?>

