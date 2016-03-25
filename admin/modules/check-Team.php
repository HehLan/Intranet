<?php

session_start();
require_once('../../common/var.conf.php');
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



$connexion = $database->getConnection();

//vérifier le nom de la team
$sql = 'SELECT * FROM equipes WHERE nom = :pseudo';
if(!empty($_POST['Team']))
{
    $pseudo = $_POST['Team'];
    $query = new Query($database, $sql);
    $query->bind(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->execute();
    $joueur = $query->getResult();
    if(!empty($joueur))
    {
        echo'Le nom de team existe déjà!';
        echo '<script>
                $( "#pseudoboxTeam" ).css({color: "#f00"});
                </script>';
    }
    else
    {
        echo'Le nom de team est disponible!';
        echo '<script>
                $( "#pseudoboxTeam" ).css({color: "#0f0"});
                </script>';
    }
}
else
{
    echo'';
}

//vérifier le tag de la team
if(!empty($_POST['TagTeam']))
{
    $tag = $_POST['TagTeam'];
    $sql = 'SELECT * FROM equipes WHERE tag = :tag';
    $query = new Query($database, $sql);
    $query->bind(':tag', $tag, PDO::PARAM_STR);
    $query->execute();
    $joueur = $query->getResult();
    if(!empty($joueur))
    {
        echo 'Le tag de votre team existe déjà!';
        echo '<script>
                $( "#pseudoboxTagTeam" ).css({color: "#f00"});
                </script>';
    }
    else
    {
        echo 'Le tag de votre team est disponible!';
        echo '<script>
                $( "#pseudoboxTagTeam" ).css({color: "#0f0"});
                </script>';
    }
}
else
{
    echo'';
}
?>