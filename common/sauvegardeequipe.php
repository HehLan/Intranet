<?php

// on vérifie si l'équipe existe déjà
if($id_equipes == 0)
{
    // verifie que le nom d'équipe n'existe pas deja
    $sql = 'SELECT nom FROM equipes WHERE nom=:nom'; 
    $query = new Query($database, $sql);
    $query->bind(':nom', $nomteam, PDO::PARAM_STR);
    $query->execute();
    $nbr = $query->getPreparedQuery()->rowCount();

    if($nbr == 0)
    {
        try
        {
            // Creation de l'equipe
            $sql = 'INSERT INTO equipes (nom, mot_de_passe,tag) VALUES (:nom,:mot_de_passe,:tag)';
            $query = new Query($database, $sql);
            $query->bind(':nom', $nomteam, PDO::PARAM_STR);
            $query->bind(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
            $query->bind(':tag', $tag, PDO::PARAM_STR);
            $query->execute();
            
            // Creation de la liaison equipe - joueur
            $id_equipes = $databse->getConnection()->lastInsertId();
            $sql = 'INSERT INTO equipes_joueur (id_joueur,id_equipes)
                    VALUES (:id_joueur,:id_equipes)';
            $query = new Query($database, $sql);
            $query->bind(':id_joueur', $id_joueur, PDO::PARAM_INT);
            $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
            $query->execute();
            echo 'Votre équipe a été créée!<br/>';
            echo '<script>
                    $( "#formInscription" ).css({color: "#0f0"});
                    </script>';
        }
        catch(Exception $e)
        {
            echo 'Une erreur est survenue';
            echo 'Message = '.$e->getMessage();
            echo '<br/><script>
                    $( "#formInscription" ).css({color: "#f00"});
                    </script>';
            die();
        }
    }
    else
    {
        echo 'Le nom de la team est déjà pris <br/>';
    }
}
else
{
    // sinon l'équipe existe déjà et donc on lie le joueur à cette équipe si il a le bon mot de passe

    // Verification bon mot de passe
    $sql = 'SELECT * FROM equipes WHERE id_equipes = :id_equipes AND mot_de_passe = :mdp ';
    $query = new Query($database, $sql);
    $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
    $query->bind(':mdp', $mot_de_passe, PDO::PARAM_INT);
    $query->execute();
    $nbr = $query->getPreparedQuery()->rowCount();
    if($nbr != 0)
    {
        try
        {
            $sql = 'INSERT INTO equipes_joueur (id_joueur,id_equipes) VALUES (:id_joueur,:id_equipes)';
            $query = new Query($database, $sql);
            $query->bind(':id_joueur', $id_joueur, PDO::PARAM_INT);
            $query->bind(':id_equipes', $id_equipes, PDO::PARAM_INT);
            $query->execute();
            echo 'Vous avez été ajoutée à votre team!<br/>';
            echo '<script>
                    $( "#formInscription" ).css({color: "#0f0"});
                    </script>';
        }
        catch(Exception $e)
        {
            echo 'Une erreur est survenue<br/>';
            echo 'Message = '.$e->getMessage();
            echo '<br/><script>
                    $( "#formInscription" ).css({color: "#f00"});
                    </script>';
            die();
        }
    }
    else
    {
        echo 'Le mot de passe pour rejoindre l\'équipe est incorrect!<br/>';
    }
}
	
?>