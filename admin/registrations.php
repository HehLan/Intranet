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
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



function isPlay($idJoueur, $idTournoi, $database)
{
    $sql_func = 'SELECT * FROM joueurtournoi WHERE id_joueur = :id_joueur AND id_tournoi = :id_tournoi';
    $query_func = new Query($database, $sql_func);
    $query_func->bind(':id_joueur', $idJoueur, PDO::PARAM_INT);
    $query_func->bind(':id_tournoi', $idTournoi, PDO::PARAM_INT);
    if($query_func->execute())
    {
        $jeux = $query_func->getResult();
    }
    if(empty($jeux))
    {   
        //ne joue pas a ce jeux
        return 0;   
    }
    else
    {
        //joue a ce jeux
        return 1;
    }
}





//--------------------------------------------------------
//
//          Calcul des totaux
//
//--------------------------------------------------------


$sql = 'SELECT * FROM joueurs WHERE paye = :paye';
$query = new Query($database, $sql);
$query->bind(':paye', 1, PDO::PARAM_INT);
$query->execute();
$counter['paye'] = $query->getPreparedQuery()->rowCount();

$sql = 'SELECT DISTINCT id_equipes FROM equipes_joueur';
$query = new Query($database, $sql);
$query->execute();
$counter['team'] = $query->getPreparedQuery()->rowCount();

$sql = 'SELECT * FROM joueurtournoi WHERE id_tournoi = :id_tournoi';
$query = new Query($database, $sql);

//HOTS
$query->bind(':id_tournoi', 1, PDO::PARAM_INT);
$query->execute();
$counter['HOTS'] = $query->getPreparedQuery()->rowCount();

//COD4
$query->bind(':id_tournoi', 2, PDO::PARAM_INT);
$query->execute();
$counter['COD'] = $query->getPreparedQuery()->rowCount();

//TMNF
$query->bind(':id_tournoi', 3, PDO::PARAM_INT);
$query->execute();
$counter['TM'] = $query->getPreparedQuery()->rowCount();

//HS
$query->bind(':id_tournoi', 5, PDO::PARAM_INT);
$query->execute();
$counter['HS'] = $query->getPreparedQuery()->rowCount();




//--------------------------------------------------------
//
//          Liste des joueurs + count
//
//--------------------------------------------------------

$sql = 'SELECT j.pseudo AS pseudo, e.nom AS team, j.id_joueur AS id, j.paye
        FROM  joueurs j
        LEFT OUTER JOIN equipes_joueur ej ON j.id_joueur = ej.id_joueur
        LEFT OUTER JOIN equipes e ON e.id_equipes = ej.id_equipes
        WHERE ej.id_equipes !=1 OR ej.id_equipes IS NULL
        ORDER BY j.id_joueur';
$query = new Query($database, $sql);
$query->execute();
$counter['player'] = $query->getPreparedQuery()->rowCount();

$datas = array();

foreach ($query->getResult() as $player)
{
    $data = array();
    if (!empty($player))
    {
        $data['paye'] = $player['paye'];
        $data['pseudo'] = $player['pseudo'];
        $data['team'] = $player['team'];
        $data['hots'] = isPlay($player['id'], 1, $database);
        $data['cod'] = isPlay($player['id'], 2, $database);
        $data['tm'] = isPlay($player['id'], 3, $database);
        $data['hs'] = isPlay($player['id'], 5, $database);
    }
    $datas[] = $data;
}













// send to the template
$smarty->assign('con', $connected);
$smarty->assign('counter', $counter);
$smarty->assign('datas', $datas);



$smarty->display(DOCUMENT_ROOT.'/view/templates/admin/registrations.tpl');







?>

    
    
    

   

    
      

    
     



