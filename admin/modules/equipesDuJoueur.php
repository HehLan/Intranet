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

if (Auth::isLogged())
{
    if (Auth::isAllowed(3))
    {
	if(!empty($_POST['id_joueur']))
        {
	    
	    $sql = 'SELECT e.id_equipes, e.nom AS team
		FROM  equipes_joueur et
		LEFT OUTER JOIN equipes e ON e.id_equipes = et.id_equipes
		WHERE et.id_joueur = :id';
            $query = new Query($database, $sql);
	    $query->bind(':id', $_POST['id_joueur'], PDO::PARAM_INT);
	    $result = $query->execute();
	    
            foreach($query->getResult() as $equipe)
            {
		echo'<input type="checkbox" checked class="chkbxEquipeDuJoueur" value="'.$equipe["id_equipes"].'">'.$equipe["team"].'<br>';
	    }
	    $sql = 'SELECT id_equipes, nom FROM equipes ORDER BY nom';
            $query = new Query($database, $sql);
            $query->execute();
            echo 'Ajouter à l\'équipe : <select id="SelectAjoutJoueurEquipe" style="width: 200px;"><option></option>';
            
            foreach($query->getResult() as $equipe)
            {
                echo '<option value="'.$equipe["id_equipes"].'" style="color:#000">'.$equipe["nom"];
		echo '</option>';
            }
            echo'
                </select>
                <input type="button" id="submitChangementEquipeDuJoueur" value="Validez les changements">';
	    echo '<input type="hidden" id="idJoueurAdminForEquipe" value="'.$_POST['id_joueur'].'">'; 
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

























