<?php

session_start();
require_once('../../class/Auth.class.php');
require_once('../../class/Smarty_HEHLan.class.php');
require_once('../../class/Database.class.php');
require_once('../../class/Query.class.php');


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
                $sql = 'DELETE FROM joueurtournoi WHERE id_joueur = :id_joueur';
                $req = $connexion->prepare($sql);
                $req->bindValue('id_joueur', $_POST['id_joueur'], PDO::PARAM_INT);
                $req->execute();
                $query = 'INSERT INTO joueurtournoi (id_joueur,id_tournoi,pseudoJeux) VALUES ';
                $i = 0;
                foreach($_POST['inscrit'] as $row)
                {
                    if($i==0)
                    {
                        $query.="(".$_POST['id_joueur'].",".$row[1].",'".$row[2]."')";
                    }
                    else
                    {
                        $query.=",(".$_POST['id_joueur'].",".$row[1].",'".$row[2]."')";
                    }
                    $i++;
                }
                $query.=";";
                
                $req = $connexion->prepare($query);
                $req->execute();
                $connexion->commit();
                echo 'requête réussie!';
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
        else
        {
            try
            {
                //on tente d'exécuter les requêtes suivantes dans une transactions
                
                //on lance la transaction
                $connexion->beginTransaction();
                //supprime toutes les lignes la table
                $sql="DELETE FROM joueurtournoi WHERE id_joueur = :id_joueur";
                $req = $connexion->prepare($sql);
                $req->bindValue("id_joueur",$_POST['id_joueur'],PDO::PARAM_INT);
                $req->execute();
                $connexion->commit();
                echo'requête réussie!';
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
    }
    else
    {
        echo "Vous n'êtes pas autorisé à effectuer cette modification!";
    }
}
else
{
    echo "Vous n'êtes pas connecté!";
}

?>