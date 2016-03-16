<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$database = new Database();

if (Auth::isLogged())
{
    if (Auth::isAllowed(3))
    {
	if(!empty($_POST['paye']))
        {
	    $sql = 'UPDATE joueurs SET paye = 1 WHERE id_joueur = :id';
            $query = new Query($database, $sql);
	    $query->bind(':id', $_POST['paye'], PDO::PARAM_INT);
	    $query->execute();
	    
	    $sql = 'SELECT * FROM joueurs WHERE id_joueur = :id';
            $query = new Query($database, $sql);
	    $query->bind(':id', $_POST['paye'], PDO::PARAM_INT);
	    $query->execute();
	    $joueur = $query->getResult()[0];
	    $nbr = $query->getPreparedQuery()->rowCount();
	    if($nbr != 0)
            {
		if ($joueur['paye'] == 1)
                {
		    //mail de confirmation
                    // Must use the mail template !
		    $to = $joueur['email'];
		    $subject = 'HEHLAN : confirmation de payement';
		    $header = "From: \"HeHLan\" <hehlan.be@gmail.com>\n";
		    $header .= "Reply-to: \"HeHLan\" <hehlan.be@gmail.com>\n";
		    $message = "
		    Félicitations ".$joueur['prenom']."! Nous vous confirmons la réception de votre payement!
		    
		    Vous êtes désormais officiellement inscrit, sous le pseudo '".$joueur['pseudo']."' à notre évènement HeHLan Party 2016!
		    
		    L'équipe de la HeHLan.";
		    
		    if (mail($to, $subject, $message, $header))
                    {
			echo 'true';
		    }
		    else
                    {
                        echo "Erreur : Pour ".$joueur['pseudo'].", l'email de confirmation de payement n'a pas été envoyé!";
                    }
		}
		else
                {
                    echo "Erreur : Pour ".$joueur['pseudo'].", la validation du payement ne s'est pas correctement effectué!";
                }
	    }
	    else
            {
                echo "Le joueur n'a pas été trouvé dans la base de données!";
            }
	}
	else
        {
            echo 'aucune donnée reçue!';
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