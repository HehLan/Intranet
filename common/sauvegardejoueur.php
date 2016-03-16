<?php


$id_joueur = 0;

//vérification si le pseudo existe déjà
$sql = 'SELECT pseudo FROM joueurs WHERE pseudo=:pseudo';
$query = new Query($database, $sql);
$query->bind('pseudo', $pseudo, PDO::PARAM_STR);
$query->execute();

$nbr = $query->getPreparedQuery()->rowCount();

// on vérifie qu'on n'a pas le même pseudo dans la BD
if($nbr == 0)
{
    // Creation du joueur
    $sql = 'INSERT INTO joueurs (nom,prenom,pseudo,email,password,sexe,gsm,date_de_naissance)
            VALUES(:nom,:prenom,:pseudo,:email,:password,:sexe,:gsm,:date_de_naissance)';
    $query = new Query($database, $sql);
    $query->bind(':nom', $nom, PDO::PARAM_STR);    
    $query->bind(':prenom', $prenom,PDO::PARAM_STR);
    $query->bind(':pseudo', $pseudo,PDO::PARAM_STR);
    $query->bind(':email', $email,PDO::PARAM_STR);
    $query->bind(':password', $password,PDO::PARAM_STR);
    $query->bind(':sexe', $sexe,PDO::PARAM_STR);
    $query->bind(':gsm', $gsm,PDO::PARAM_STR);
    $query->bind(':date_de_naissance', date("Y-m-d", strtotime(str_replace('/', '-', $date_de_naissance))), PDO::PARAM_STR);

    try
    {
        $query->execute();

        // Creation des liaisons jeux - joueurs
        // récupère l'id du dernier ajout dans la BD
        $id_joueur = $database->getConnection()->lastInsertId();
        /* on vérifie qu'il y a au moins un tournoi où le joueur est inscrit et
                on vérifie aussi qu'il n'y a pas plus de tournois que le nombre maximum possible (éviter
                les boucles que l'utilisateur aurait pu créer pour nous nuir)*/
        if(isset($tournois) and (count($tournois)<=5))
        {
            $sql = 'INSERT INTO joueurtournoi (id_joueur,id_tournoi,pseudoJeux)
                    VALUES (:id_joueur,:id_tournoi, :pseudo)';
            $query = new Query($database, $sql);
            foreach($tournois as $chkbx)
            {
                $query->bind(':id_joueur', $id_joueur, PDO::PARAM_INT);
                $query->bind(':id_tournoi', $chkbx, PDO::PARAM_INT);
                if($chkbx == 1)
                {
                    $query->bind(':pseudo', $pseudoLOL, PDO::PARAM_STR);
                }
                else
                {
                    $query->bind(':pseudo', '', PDO::PARAM_STR);
                }
                $query->execute();
            }
        }

        //vérification si le pseudo existe déjà
        $sql = 'SELECT * FROM joueurs WHERE pseudo=:pseudo AND password= :mdp';
        $query = new Query($database, $sql);
        $query->bind(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bind(':mdp', $password, PDO::PARAM_STR);
        $query->execute();
        $nbr = $query->getPreparedQuery()->rowCount();
        if($nbr != 0)
        {
            echo 'Votre compte est créé!<br/>';
            echo '<script>
                    $( "#formInscription" ).css({color: "#0f0"});
                    </script>';
            //mail de confirmation
            $to = $email;
            $subject = "HEHLAN : confirmation d'inscription";
            $header = "From: \"HeHLan\" <hehlan.be@gmail.com>\n";
            $header .= "Reply-to: \"HeHLan\" <hehlan.be@gmail.com>\n";
            $message = "
            Félicitations ".$prenom."! Vous êtes désormais inscrit à la HeHLan.

                            Votre pseudo : ".$pseudo."    
                            Votre mot de passe : ".$_POST['password']."


            Si vous avez des questions, n'hésitez pas à nous contacter.

            Entrainez-vous pour tout déchirer le jour de la LAN :)

            L'équipe de la HeHLan.";

            if (mail($to, $subject, $message, $header))
            {
                echo 'Un email de confirmation vous a été envoyé. <br/> <br/>';
            }
        }
        else
        {
            echo "Une erreur est survenue lors de l'inscription! Veuillez réessayer plus tard.<br/>";
            exit;
        }
    }
    catch(Exception $e)
    {
        echo 'Une erreur est survenue<br/>';
        echo 'Message = '.$e->getMessage();
        echo '<script>
                $( "#formInscription" ).css({color: "#f00"});
                </script>';
        die();
    }
}
else
{
    echo 'Le pseudo existe deja';
}

?>