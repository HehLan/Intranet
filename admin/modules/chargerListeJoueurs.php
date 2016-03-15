<?php


session_start();
require_once('../../class/var.conf.php');
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
	try
        {
            $sql = 'SELECT id_joueur, pseudo FROM joueurs ORDER BY pseudo';
            $query = new Query($database, $sql);
            $query->execute();
            echo'<select id="SelectJoueur" style="width: 200px;"><option></option>';              
            foreach($query->getResult() as  $joueur) 
            {
                echo '<option value="'.$joueur["id_joueur"].'" style="color:#000">'.$joueur["pseudo"];
		echo "</option>";
            }
            echo'
                </select>
                <input type="button" id="submitSeclectJoueurEquipeAdmin" value="Ajouter ce joueur">';
        }
        catch(PDOException $e)
        {
            echo 'Base de données est indisponible pour le moment!';
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

























