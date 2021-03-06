<?php

require_once('common/head.php');

function isPlay($idJoueur, $idTournoi, &$connexion, &$pseudoJeux)
{
    $sqlPlay = 'SELECT * FROM joueurtournoi WHERE id_joueur = :id_joueur AND id_tournoi = :id_tournoi';
    try
    {
        $database->setQuery($sqlPlay);
        $database->getQuery()->execute(array(
            'id_joueur' => $idJoueur,
            'id_tournoi' => $idTournoi
        ));
        $jeux = $database->getQuery()->fetch();
        if (empty($jeux))
        {
            //do not play at this game
            return '';
        }
        else
        {
            $pseudoJeux = $jeux['pseudoJeux'];
            //play at this game
            return 'checked';
        }
    }
    catch (PDOException $e)
    {
        return '';
    }
}

$sql = 'SELECT j.*, e.nom AS team
		FROM  joueurs j
		LEFT OUTER JOIN equipes_joueur ej ON j.id_joueur = ej.id_joueur
		LEFT OUTER JOIN equipes e ON e.id_equipes = ej.id_equipes
		WHERE j.id_joueur = :idj';
$query = new Query($database, $sql);
$query->bind('idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
$query->execute();
$joueur = $query->getResult()[0];


$pseudoJeux = '';


// Selecting player profile information	
$sql = 'SELECT * FROM joueurs WHERE id_joueur = :id_player';
$query = new Query($database, $sql);
$query->bind(':id_player', $_SESSION['id_joueur'], PDO::PARAM_INT);
$query->execute();
$joueur = $query->getResult()[0];
$joueur['date_de_naissance'] = date("d/m/Y", strtotime($joueur['date_de_naissance']));



$sql = 'SELECT id_equipes, nom FROM equipes ORDER BY nom';
$query = new Query($database, $sql);
$query->execute();
$equipes = $query->getResult();

                                       


$smarty->assign("next_matches", $database->getNextMatches($connected));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("joueur", $joueur);
$smarty->assign('pseudoJeux', $pseudoJeux);
$smarty->assign('equipes', $equipes);


$smarty->display('default/profile.tpl');

?>




