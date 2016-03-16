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

    $erreurMDP = '';
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


    //password
    if (empty($_POST['password']))
    {
        $valid = false;
        $erreurMDP = "Vous n'avez pas rempli de mot de passe. \n";
    }
    else if (strlen($_POST['password']) < 8)
    {
        $valid = false;
        $erreurMDP = "Le mot de passe doit comporter au moins 8 caractères \n";
    }
    else if ($_POST['passwordOld'] != $_SESSION['password'])
    {
        $valid = false;
        $erreurMDP = "Votre ancien mdp est erroné \n";
    }
    else if (strlen($_POST['password']) > 30)
    {
        $valid = false;
        $erreurMDP = "Le mot de passe est trop long \n";
    }
    else if ($_POST['password'] != $_POST['password2'])
    {
        $valid = false;
        $erreurMDP = "Les 2 mots de passe ne sont pas les mêmes. \n";
    }

    if ($valid)
    {
        $password = sha1($_POST["password"]);
        
        try
        {
            $sql = 'UPDATE joueurs SET password = :password WHERE id_joueur=:idj';
            $query = new Query($database, $sql);
            $query->bind(':password', $password, PDO::PARAM_STR);
            $querye->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
            if($query->execute())
            {
                $_SESSION['password'] = $password;
                echo 'Votre mot de passe a bien été modifié!<br>';
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
        echo $erreurMDP . $erreurSession;
    }
}
else
{
    echo "aucune valeur n'a été envoyée";
}

?>