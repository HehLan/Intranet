<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'common/utils.php');
require_once(DOCUMENT_ROOT.'class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'class/Database.class.php');
require_once(DOCUMENT_ROOT.'class/Auth.class.php');
require_once(DOCUMENT_ROOT.'class/Query.class.php');


$connected = false;
$nbrteam = 0;
$database = new Database();
$smarty = new Smarty_HEHLan();
        
        
if (!empty($_POST))
{
    $valid = true;

    $erreurNomTeam = '';
    $erreurMDPteam = '';
    $erreurSession = '';

    if (empty($_SESSION['id_joueur']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session : Veuillez vous reconnecter!';
    }
    else if (empty($_SESSION['password']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session : Veuillez vous reconnecter!';
    }
    else if (empty($_SESSION['login']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session : Veuillez vous reconnecter!';
    }


    /*     * *************************
     * Rejoindre une team
     * *********************** */

    //nom de la team
    if (empty($_POST['nomequipe']))
    {
        $valid = false;
        $erreurNomTeam = "Vous n'avez pas choisi le nom de votre team. \n";
    }
    //vérifie que l'utilisateur n'est pas introduit de valeur intrusive dans notre select
    else if (!preg_match("/^[0-9]{1,10}$/", $_POST['nomequipe']))
    {
        $valid = false;
        $erreurNomTeam = "Le nom de la team n'est pas valide \n";
    }

    //password de la team
    if (empty($_POST['psw_equipe']))
    {
        $valid = false;
        $erreurMDPteam = "Vous n'avez pas rempli le mot de passe de la team. \n";
    }
    else if (strlen($_POST['psw_equipe']) < 8)
    {
        $valid = false;
        $erreurMDPteam = "Le mot de passe de votre team doit comporter au moins 8 caractères \n";
    }
    else if (strlen($_POST['psw_equipe']) > 30)
    {
        $valid = false;
        $erreurMDPteam = "Le mot de passe de votre team est trop long \n";
    }




    if ($valid)
    {
        $mot_de_passe = sha1($_POST["psw_equipe"]);
        $id_equipes = $_POST["nomequipe"];

        // Verification bon mot de passe
        $sql = 'SELECT * FROM equipes WHERE id_equipes = :id_equipes AND mot_de_passe = :mdp';
        $query = new Query($database, $sql);
        $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
        $query->bind(':mdp', $mot_de_passe, PDO::PARAM_INT);
        $result = $query->execute();
        $nbr = $query->getPreparedQuery()->rowCount();
        if ($nbr != 0)
        {
            // Verification que le joueur fait parti d'une equipe
            $sql = 'SELECT * FROM equipes_joueur WHERE id_joueur = :idj';
            $query = new Query($database, $sql);
            $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
            $result = $query->execute();
            $nbr = $query->getPreparedQuery()->rowCount();
            if ($nbr == 0)
            {
                //le joueur ne fait parti d'aucune equipe
                try
                {
                    $sql = 'INSERT INTO equipes_joueur (id_joueur,id_equipes) VALUES (:idj,:id_equipes)';
                    $query = new Query($database, $sql);
                    $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                    $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
                    if($query->execute())
                    {
                        echo 'Vous avez été ajoutée à votre team!<br>';
                    }                    
                }
                catch (Exception $e)
                {
                    echo 'Une erreur est survenue<br>';
                    echo 'Message = ' . $e->getMessage();
                    die();
                }
            }
            else
            {
                //le joueur fait parti d'une equipe
                try
                {

                    $sql = 'UPDATE equipes_joueur SET id_equipes=:id_equipes WHERE id_joueur=:idj';
                    $query = new Query($database, $sql);
                    $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                    $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
                    if($query->execute())
                    {
                        echo 'Vous avez changé de Team!<br>';
                    }                    
                }
                catch (Exception $e)
                {
                    echo 'Une erreur est survenue<br>';
                    echo 'Message = ' . $e->getMessage();
                    die();
                }
            }
        }
        else
        {
            echo 'Le mot de passe pour rejoindre l\'équipe est incorrect!<br/>';
        }
    }
    else
    {
        echo $erreurNomTeam . $erreurMDPteam . $erreurSession;
    }
}
else
{
    echo "aucune valeur n'a été envoyée";
}

?>