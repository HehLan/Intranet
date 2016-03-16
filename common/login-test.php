<?php

session_start();
require_once('../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


$database = new Database();
$smarty = new Smarty_HEHLan();
    
 
if(!empty($_POST['pseudo'])&&!empty($_POST['pwd']))
{     
    $sql = 'SELECT pseudo, password, level FROM joueurs WHERE pseudo = :pseudo AND password = :mdp';
    $query = new Query($database, $sql);
    $query->bind(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $query->bind(':mdp', sha1($_POST['pwd']), PDO::PARAM_STR);
    $query->execute();
    $joueur = $query->getResult()[0];

    if(!empty($joueur))
    {
        //vérifier si la connexion est correcte
            
        $_SESSION['Auth'] = array(
            'pseudo' => $pseudo,
            'password' => $password
        );
            
        echo '<script>
            $("#formConnexion").css({color: "#00f"});
            $( "#formConnexion" ).html("Connexion réussie!");
            setTimeout(function(){location.reload();},2000);</script>';
    }
    else
    {
        echo '<script>
            $("#erreurLogin").css({color: "#f00"});
            $( "#erreurLogin" ).html("Les identifiants sont incorrects!");
            $( "#ConPseudo" ).val("");
            $( "#ConPwd" ).val("");
            </script>';
    }
}
else
{
    echo '<script>
    $("#erreurLogin").css({color: "#f00"});
    $( "#erreurLogin" ).html("Il faut d\'abord remplir les champs!");
    </script>';
}

?>