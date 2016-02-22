<?php

session_start();
require_once('common/utils.php');
require_once('common/connect.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');

$con = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();


if (isset($_SESSION['id_joueur']))
{
    if (($_SESSION['id_joueur'] != 0))
    {
        $con = true;
    }
}

$id_tournoi = 1;
if (isset($_GET['id']))
{
    $id_tournoi = $_GET['id'];
}
<<<<<<< HEAD

//SQL Query to select pools for this tournament
$groupes = '';
$sql = 'SELECT * FROM groupes_pool WHERE id_tournoi=:id';
$query = $connexion->prepare($sql);
$query->bindValue(':id', $id_tournoi, PDO::PARAM_INT);
if ($query->execute())
    $groupes = $query->fetchAll(PDO::FETCH_ASSOC);
else {
    echo 'ERREUR SQL GROUPES';
    exit;
}

if( $tournoi['joueurParTeam'] > 1)
	include_once('tournoisPools.php');
else
	include_once('tournoisRounds.php');

=======
$tournoi = $database->getTournament($id_tournoi);
$groupes = $database->getGroups($id_tournoi);
$jpt = $tournoi['joueurParTeam'];

foreach ($groupes as $groupe)
{
    if ($jpt > 1)
    {
        $participants = $database->getTeamsOfGroup($groupe['id_groupe']);
    }
    else
    {
        $participants = $database->getPlayersOfGroup($groupe['id_groupe']);
    }
}

$nbr_lb2 = 0;
$nbr_lb3 = 0;

$nbr_lb2 = $database->countMatchesOfLB($id_tournoi,2);
$nbr_lb3 = $database->countMatchesOfLB($id_tournoi,3);

$totaux = array();

foreach ($groupes as $itGroupe => $groupe)
{
    if ($jpt > 1)
    {
        //-----------------TOURNOI TYPE LOL COD-----------------	
        $resultTeams = array();
        $nbrteam = 0;
        $teams = '';
        $scores = '';
        foreach ($participants[$groupe['id_groupe']] as $team)
        {
            $teams[$nbrteam]['nom'] = $team['nom'];
            $teams[$nbrteam]['id'] = $team['id'];
            $nbrteam++;
        }
        $groupes[$itGroupe]['teams'] = $teams;

        $heures = '';

        foreach ($teams as $team)
        {
            list($scores, $heures) = $database->getMatchesInfo($groupe['id_groupe'], $team['id']);   
        }
        // A supprimer mais warning:undefined index
        foreach ($teams as $team)
        {
            $totaux[$team['id']] = 0;
            $resultTeam = array();
            foreach ($teams as $team2)
            {
                if ($team['id'] != $team2['id'])
                {
                    $couleur = 'same_';
                    $valeur = '';
                    if (isset($scores[$team['id']][$team2['id']]))
                    {
                        $couleur = 'loose_';
                        $valeur = $scores[$team['id']][$team2['id']]['score'] . '-' . $scores[$team2['id']][$team['id']]['score'];
                        if ($scores[$team['id']][$team2['id']]['score'] > $scores[$team2['id']][$team['id']]['score'])
                        {
                            $totaux[$team['id']]+=3;
                            $couleur = 'win_';
                        }
                        if ($scores[$team['id']][$team2['id']]['score'] == $scores[$team2['id']][$team['id']]['score'])
                        {
                            $totaux[$team['id']]+=1;
                            $couleur = 'same_';
                        }
                    }
                    if ($valeur == '')
                    {
                        if (isset($heures[$team['id']][$team2['id']]))
                        {
                            $valeur = get_jour_de_la_semaine($heures[$team['id']][$team2['id']]) . ' ' . get_heure($heures[$team['id']][$team2['id']]);
                        }
                    }
                    $resultTeam[] = array(
                        "couleur" => $couleur,
                        "valeur" => $valeur);
                }
                else
                {
                    $resultTeam[] = array();
                }
            }
            if (!empty($resultTeam))
            {
                $resultTeams[] = $resultTeam;
            }                
        }
        $groupes[$itGroupe]['resultTeams'] = $resultTeams;
    }
    else
    {
        //-----------------TOURNOI TYPE UT TRACKMANIA-----------------

        list($nbr_manches, $heure) = $database->getNumberOfManches($groupe['id_groupe'], $tournoi['nombreManche']);

        $totaux = $database->getTotals($groupe['id_groupe']);       
        
        $database->getTotals_2($groupe['id_groupe'], $totaux);        
        
        $groupes[$itGroupe]['jour'] = get_jour_de_la_semaine($heure);
        $groupes[$itGroupe]['heure'] = get_heure($heure);

        $inscrits = '';
        foreach ($participants[$groupe['id_groupe']] as $joueur)
        {
            $inscrits[$joueur['id']]['nom'] = $joueur['nom'];
            $inscrits[$joueur['id']]['ok'] = false;
        }
        $joueurs = array();
        $inscrits = array();

        foreach ($totaux as $idJoueur => $joueur)
        {
            $inscrits[$joueur['id_joueur']]['ok'] = true;
        }
        $groupes[$itGroupe]['joueurs'] = $totaux;
        $groupes[$itGroupe]['inscrits'] = $inscrits;
    }
}

// Applying Template
$smarty->assign("con", $con);
$smarty->assign("next_matches", $database->getNextMatches($con));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("tournoi", $tournoi);
$smarty->assign("nbr_lb2", $nbr_lb2);
$smarty->assign("nbr_lb3", $nbr_lb3);
$smarty->assign("nbrteam", $nbrteam);
$smarty->assign("jpt", $jpt);
$smarty->assign("groupes", $groupes);

if ($jpt > 1)
{
    $smarty->assign("resultTeams", $resultTeams);
    $smarty->assign("totaux", $totaux);
}

$smarty->display('templates/default/tournois.tpl');
>>>>>>> ba852f18a7582363267003b5386053a4fd406876
?>