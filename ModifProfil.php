<?php

session_start();
require_once('common/utils.php');
require_once('class/Smarty_HEHLan.class.php');
require_once('class/Database.class.php');

$connected = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();

if (isset($_SESSION['id_joueur']))
{
    if (($_SESSION['id_joueur'] != 0))
    {
       $connected = true; 
    }     
}

// This is an unknown user (no connected)
if (!$connected)
{
    // The user has entered its login and password
    if (isset($_POST['login']) && isset($_POST['pwd']))
    {
        $player = $database->getPlayer($_POST['login'], $_POST['pwd']);          
        if (!is_null($player))
        {
            $_SESSION['id_joueur'] = $player->getIdJoueur();
            $_SESSION['login'] = $player->getPseudo();
            $_SESSION['level'] = $player->getLevel();
            $_SESSION['password'] = $player->getPassword();
            $connected = true;
        }
    }
}

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
$database->setQuery($sql);
$database->bindValue('idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
$database->getQuery()->execute();
$joueur = $database->getQuery()->fetch();


$pseudoJeux = '';


// Selecting player profile information	
$sql = 'SELECT * FROM joueurs WHERE id_joueur = :id_player';
$database->setQuery($sql);
$database->bindValue(':id_player', $_SESSION['id_joueur'], PDO::PARAM_INT);
$database->getQuery()->execute();
$joueur = $database->getQuery()->fetch(PDO::FETCH_OBJ);








$sql = 'SELECT id_equipes, nom FROM equipes ORDER BY nom';
$database->setQuery($sql);
$database->getQuery()->execute();
while($equipe = $database->getQuery()->fetch(PDO::FETCH_ASSOC)) 
{
    $equipes[] = $equipe;
}
                                       


$smarty->assign("con", $connected);
$smarty->assign("next_matches", $database->getNextMatches($connected));
$smarty->assign("navTournois", $database->getNavTournois());
$smarty->assign("joueur", $joueur);
$smarty->assign('pseudoJeux', $pseudoJeux);
$smarty->assign('equipes', $equipes);
//$smarty->display('templates/default/player_change.tpl');
$smarty->display('player_change.tpl');

?>




