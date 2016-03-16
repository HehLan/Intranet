<?php



session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$database = new Database();


//Générer une chaine de caractère unique et aléatoire
function random($car)
{
    $string = '';
    $chaine = 'abcdefghijklmnpqrstuvwxy123456789';
    
    srand((double)microtime()*1000000);
    
    for($i=0; $i<$car; $i++)
    {
	$string .= $chaine[rand()%strlen($chaine)];
    }
    return $string;
}


if (!empty($_POST))
{
    $valid = true;    
    $erreurEmail = '';
    
    //email
    if(empty($_POST['emailOublie']))
    {
	$valid = false;
	$erreurEmail = "Vous n'avez pas rempli votre email. \n";
    }
    else if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{2,3}$/i",$_POST['emailOublie']))
    {
	$valid = false;
	$erreurEmail = "Votre email n'est pas valide. \n";
    }
    
    if($valid)
    {
	$pseudo = $_POST['pseudoOublie'];
	$email = $_POST['emailOublie'];
	// Génère une chaine aléatoire de 20 caractères
	$password = random(20);
	
	$sql = 'SELECT id_joueur, prenom FROM joueurs WHERE email = :email AND pseudo = :pseudo';
        $query = new Query($database, $sql);
	$query->bind(':email', $email, PDO::PARAM_STR);
	$query->bind(':pseudo', $pseudo, PDO::PARAM_INT);
	$query->execute();
	$nbr = $query->getPreparedQuery()->rowCount();
	if($nbr != 0)
	{
	    $joueur = $query->getResult()[0];
	    //on a trouvé l'email dans la BD donc l'utilisateur
	    try
            {	    
		$query = 'UPDATE joueurs SET password = :password WHERE id_joueur = :id_joueur';
                $query = new Query($database, $sql);
		$query->bind(':password', sha1($password), PDO::PARAM_STR);
		$query->bind(':id_joueur', $joueur['id_joueur'], PDO::PARAM_INT);
		$query->execute();
		
		$sql = 'SELECT * FROM joueurs WHERE email = :email AND pseudo = :pseudo AND password = :password';
                $query = new Query($database, $sql);
		$query->bind(':email', $email, PDO::PARAM_STR);
		$query->bind(':pseudo', $pseudo, PDO::PARAM_INT);
		$query->bind(':password', sha1($password), PDO::PARAM_STR);
		$query->execute();
		$nbr = $query->getPreparedQuery()->rowCount();
		if($nbr != 0)
                {
		    //mail envoi new MDP
		    $to = $email;
		    $subject = "HEHLAN : Réinitialisation de votre mot de passe";
		    $subject= utf8_decode($subject);
		    $header = "From: \"HeHLan\" <hehlan.be@gmail.com>\n";
		    $header .= "Reply-to: \"HeHLan\" <hehlan.be@gmail.com>\n";
		    $message = "
		    Bonjour ".$joueur['prenom']."! Vous avez réinitialisé votre mot de passe.
		    
				    Votre nouveau mot de passe : ".$password." 
		    
		    En vous connectant sur www.hehlan.be, vous pouvez modifier votre mot de passe en accédant à votre espace membre.
		    
		    Si vous avez des questions, n'hésitez pas à nous contacter.
		    
		    L'équipe de la HeHLan.";
				    
		    if (mail($to,$sujet,$message,$header))
                    {
			echo '<br>Votre nouveau mot de passe vous a été envoyé à votre adresse email!<br>';
		    }
                    else
                    {
			echo "<br>Une erreur est survenue durant l'envoi de l'email!<br>";
		    }
		}
		else
		{
		    echo "<br>Une erreur est survenue durant l'envoi de l'email! Réessayez plus tard!<br>";
		}
	    }
	    catch(Exception $e)
            {
		echo 'Une erreur est survenue<br>';
		echo 'Message = '.$e->getMessage();
		die();
	    }
	}
        else
        {
	    //on a pas trouvé le joueur
	    echo "Vos identifiants que vous avez mentionnés, n'ont pas été trouvé dans notre base de données<br>";
	}
	
    }
    else
    {
	echo $erreurEmail;
    }
}
else
{
    echo "aucune valeur n'a été envoyée";
}
		
?>