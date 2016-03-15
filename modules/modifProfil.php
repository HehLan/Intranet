<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'common/utils.php');
require_once(DOCUMENT_ROOT.'class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'class/Database.class.php');
require_once(DOCUMENT_ROOT.'class/Auth.class.php');
require_once(DOCUMENT_ROOT.'class/Query.class.php');


$connected = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


if (!empty($_POST))
{
    $valid = true;

    $erreurPseudo = '';
    $erreurEmail = '';
    $erreurTel = '';
    $erreurSession = '';

    //vérification de la session
    if (empty($_SESSION['id_joueur']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session 1 : Veuillez vous reconnecter!';
    }
    else if (empty($_SESSION['password']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session 2 : Veuillez vous reconnecter!';
    }
    else if (empty($_SESSION['login']))
    {
        $valid = false;
        $erreurSession = 'Erreur de session 3 : Veuillez vous reconnecter!';
    }

    //pseudo
    if (empty($_POST['pseudo']))
    {
        $valid = false;
        $erreurPseudo = "Vous n'avez pas rempli votre pseudo. \n";
    }
    else if (strlen($_POST['pseudo']) < 2)
    {
        $valid = false;
        $erreurPseudo = "Votre pseudo doit comporter au moins 2 caractères \n";
    }
    else if (strlen($_POST['pseudo']) > 40)
    {
        $valid = false;
        $erreurPseudo = "Votre pseudo est trop long \n";
    }



    //email
    if (empty($_POST['email']))
    {
        $valid = false;
        $erreurEmail = "Vous n'avez pas rempli votre email. \n";
    }
    else if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{2,3}$/i", $_POST['email']))
    {
        $valid = false;
        $erreurEmail = "Votre email n'est pas valide. \n";
    }
    else if ($_POST['email'] != $_POST['email2'])
    {
        $valid = false;
        $erreurEmail = "Les 2 emails ne sont pas les mêmes \n";
    }


    //vérifie le telephone
    if (!empty($_POST['telephone']))
    {
        if (strlen($_POST['telephone']) > 40)
        {
            $valid = false;
            $erreurTel = "Votre numéro de téléphone est trop long! \n";
        }
    }


    if ($valid)
    {
        $pseudo = trim($_POST["pseudo"]);
        $gsm = $_POST["telephone"];
        $email = $_POST["email"];
        if (!empty($_POST["tournois"]))
        {
            $tournois = $_POST["tournois"];
        }
        $pseudoLOL = $_POST["pseudoLOL"];

        //si le joueur change de pseudo
        if ($pseudo != $_SESSION['login'])
        {
            //vérification si le pseudo existe déjà
            $sql = 'SELECT pseudo FROM joueurs WHERE pseudo=:pseudo';
            $query = new Query($database, $sql);
            $query->bind(':pseudo', $pseudo, PDO::PARAM_STR);
            $result = $query->execute();
            $nbr = $query->getPreparedQuery()->rowCount();
        }
        else
        {
            //le joueur n a pas change de pseudo
            $nbr = 0;
        }

        $id_joueur = 0;

        // si le joueur n'a pas change de pseudo ou si le pseudo changé n'est pas deja pris dans la BD
        if ($nbr == 0)
        {
            // mise a jour du joueur
            $sql = 'UPDATE joueurs SET pseudo = :pseudoModifie, email = :email, gsm = :gsm  WHERE id_joueur=:idj';
            $query = new Query($database, $sql);
            $query->bind(':pseudoModifie', $pseudo, PDO::PARAM_STR);
            $query->bind(':email', $email, PDO::PARAM_STR);
            $query->bind(':gsm', $gsm, PDO::PARAM_STR);
            $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
            try
            {
                $query->execute();
                $_SESSION['login'] = $pseudo;

                // Creation ou Mise a jour des liaisons jeux - joueurs


                /* on vérifie qu'il y a au moins un tournoi où le joueur est inscrit et
                  on vérifie aussi qu'il n'y a pas plus de tournois que le nombre maximum possible (éviter
                  les boucles que l'utilisateur aurait pu créer pour nous nuir) */
                if (isset($tournois) and ! empty($tournois))
                {
                    if (count($tournois) <= 5)
                    {
                        // on récupère tous les tournois auxquels le joueur est inscrit
                        $sql = 'SELECT id_JT, id_tournoi FROM joueurtournoi WHERE id_joueur=:idj';
                        $query = new Query($database, $sql);
                        $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                        $result = $query->execute();
                        $nbr = $query->getPreparedQuery()->rowCount();

                        if ($nbr == 0)
                        {
                            // si il n'est inscrit a aucun tournoi
                            foreach ($tournois as $chkbx)
                            {
                                $sql = 'INSERT INTO joueurtournoi (id_joueur,id_tournoi,pseudoJeux) VALUES (:idj,:id_tournoi, :pseudoJ)';
                                $query = new Query($database, $sql);
                                $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                                $query->bind(':id_tournoi', $chkbx, PDO::PARAM_INT);
                                if ($chkbx == 1)
                                {
                                    $query->bind(':pseudoJ', $pseudoLOL, PDO::PARAM_STR);
                                }
                                else
                                {
                                    $query->bind(':pseudoJ', '', PDO::PARAM_STR);
                                }
                                $query->execute();
                            }
                        }
                        else
                        {
                            // le joueur est inscrit a des tournois donc on doit vérifier qu'il n a pas quitte ces tournois
                            foreach ($query->getResult() as $joueurTournoi)
                            {
                                $tournoiTrouve = false;
                                foreach ($tournois as $chkbx)
                                {
                                    if ($chkbx == $joueurTournoi["id_tournoi"])
                                    {
                                        $tournoiTrouve = true;
                                    }
                                }
                                //si on ne retrouve pas le tournoi dans les modifications du joueur c'est qu'il a quitté le tournois
                                // donc on le supprime
                                if (!$tournoiTrouve)
                                {
                                    $sql2 = 'DELETE FROM joueurtournoi WHERE id_JT = :id_JT';
                                    $query2 = new Query($database, $sql2);
                                    $query2->bind(':id_JT', $joueurTournoi["id_JT"], PDO::PARAM_INT);
                                    $result = $query2->execute();
                                }
                            }

                            foreach ($tournois as $chkbx)
                            {
                                $sql = 'SELECT id_JT, pseudoJeux FROM joueurtournoi WHERE id_joueur=:idj AND id_tournoi = :id_tournoi';
                                $query = new Query($database, $sql);
                                $query->bind(':id_tournoi', $chkbx, PDO::PARAM_INT);
                                $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                                $result = $query->execute();
                                $joueurTournoi = $query->getResult()[0];
                                $nbr = $query->getPreparedQuery()->rowCount();

                                if ($nbr == 0)
                                {
                                    //si on n'a pas trouve le joueur et le tournoi dans la BD, on ajoute
                                    $sql2 = 'INSERT INTO joueurtournoi (id_joueur,id_tournoi,pseudoJeux) VALUES (:idj,:id_tournoi, :pseudoj)';
                                    $query2 = new Query($database, $sql2);
                                    $query2->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                                    $query2->bind(':id_tournoi', $chkbx, PDO::PARAM_INT);
                                    if ($chkbx == 1)
                                    {
                                        $query2->bind(':pseudoj', $pseudoLOL, PDO::PARAM_STR);
                                    }
                                    else
                                    {
                                        $query2->bind(':pseudoj', "", PDO::PARAM_STR);
                                    }
                                    $query2->execute();
                                }
                                else if (($chkbx == 1) AND ( $result['pseudoJeux'] != $pseudoLOL))
                                {
                                    $sql2 = 'UPDATE joueurtournoi SET pseudoJeux = :pseudoJeux WHERE id_JT = :id_JT';
                                    $query2 = new Query($database, $sql2);
                                    $query2->bind(':id_JT', $joueurTournoi['id_JT'], PDO::PARAM_INT);
                                    $query2->bind(':pseudoJeux', $pseudoLOL, PDO::PARAM_STR);
                                    $query2->execute();
                                }
                            }
                        }
                    }
                }
                else
                {
                    //il faut supprimer tous les tournois où le joueur est inscrit
                    $sql = 'DELETE FROM joueurtournoi WHERE id_joueur = :idj)';
                    $query = new Query($database, $sql);
                    $query->bind(':idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
                    $query->execute();
                }
                echo 'Votre compte a été modifié!<br/>';
            }
            catch (Exception $e)
            {
                echo 'Une erreur est survenue<br/>';
                echo 'Message = ' . $e->getMessage();
                die();
            }
        }
        else
        {
            echo 'Le pseudo existe deja';
        }
    }
    else
    {
        echo $erreurPseudo . $erreurEmail . $erreurTel . $erreurSession;
    }
}
else
{
    echo "aucune valeur n'a été envoyée";
}

?>