<?php


session_start();
require_once('../../class/var.conf.php');
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


$connexion = $database->getConnection();

if (Auth::isLogged())
{
    if (Auth::isAllowed(3))
    {
        if(!empty($_POST['inscrit']))
        {
            try
            {
                //on tente d'exécuter les requêtes suivantes dans une transactions
            
                //on lance la transaction
                $connexion->beginTransaction();
                //supprime toutes les lignes la table
                $sql="DELETE FROM joueurtournoi WHERE id_tournoi = :id_tournoi";
                $req = $connexion->prepare($sql);
                $req->bindValue("id_tournoi",$_POST['id_tournoi'],PDO::PARAM_INT);
                $req->execute();
                $query="INSERT INTO joueurtournoi (id_tournoi,id_joueur) VALUES ";
                $i=0;
                foreach($_POST['inscrit'] as $row){
                    if($i==0){
                        $query.="(".$_POST['id_tournoi'].",".$row.")";
                    }else
                    {
                        $query.=",(".$_POST['id_tournoi'].",".$row.")";
                    }
                    $i++;
                }
                $query.=";";
                $req = $connexion->prepare($query);
                $req->execute();
                $connexion->commit();
                echo'inscription réussie!';
            }
            catch(Exception $e) //en cas d'erreur
            {
                //on annule la transation
                $connexion->rollback();
            
                //on affiche un message d'erreur ainsi que les erreurs
                echo 'Tout ne s\'est pas bien passé!<br />';
                echo 'Erreur : '.$e->getMessage().'<br />';
                echo 'N° : '.$e->getCode();
            
                //on arrête l'exécution s'il y a du code après
                exit();
            }
        }
        else echo'aucune donnée reçue';
    }
    else echo "Vous n'êtes pas autorisé à effectuer cette modification!";
}
else echo "Vous n'êtes pas connecté!";

?>