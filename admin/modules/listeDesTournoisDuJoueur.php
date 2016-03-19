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

if (Auth::isLogged())
{
    if (Auth::isAllowed(3))
    {
	if(!empty($_POST['id_joueur']))
        {
	    
	    $sql = 'SELECT t.*, jt.id_joueur, jt.pseudoJeux
		FROM   tournoi AS t
		LEFT OUTER JOIN joueurtournoi AS jt ON jt.id_tournoi = t.id_tournoi AND jt.id_joueur = :id';
            $query = new Query($database, $sql);
	    $query->bind(':id', $_POST['id_joueur'], PDO::PARAM_INT);
	    $result = $query->execute();
	    
            foreach($query->getResult() as $tournoi)
            {
		if($tournoi['id_joueur']==$_POST['id_joueur'])
                {
		    echo '<input type="checkbox" checked class="chkbxJoueurTournoi" value="'.$tournoi["id_tournoi"].'">'.$tournoi["nomTournoi"];
		}
		else
                {
		    echo'<input type="checkbox" class="chkbxJoueurTournoi" value="'.$tournoi["id_tournoi"].'">'.$tournoi["nomTournoi"];
		}
		echo '<input type="text" id="txtbxJoueurTournoi'.$tournoi["id_tournoi"].'" value="'.$tournoi["pseudoJeux"].'">';
		echo '<br>';
	    }
	    echo '<input type="hidden" id="idJoueurAdmin" value="'.$_POST['id_joueur'].'">';
	    echo '<br>';
	    echo '<input type="button" id="submitChgtTournoijoueurAdmin" value="Valider les changements">';
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