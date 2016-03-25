<?php

require_once('common/head_admin.php');

$id_place = $_POST['SelectEmplacement'];
$pseudo = $_POST['SelectPseudo'];
$place['occupantPseudo'] = '';
$place['numero'] = '';


$data = $database->getPlaceJoueur($id_place);
if (empty($data))
{    
	$database->setPlace($id_place, $pseudo);
}
else
{
	$numeros = array();
    foreach($database->getPlaceNumero($id_place) as $joueurs)
    {
        $numeros[] = $joueurs['numero'];
    }
    $place['numero'] = implode(', ', $numeros);

    $pseudos = array();
    foreach ($database->getPlaceJoueurData($id_place) as $joueurs)
    {
        $pseudos[] = $joueurs['pseudo'];
    }
    $place['occupantPseudo'] = implode(', ', $pseudos);
}

$smarty->assign('place', $place);
$smarty->assign('pseudo', $pseudo);
$smarty->assign('place_libre', empty($data));

$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/place.tpl');	
?>

