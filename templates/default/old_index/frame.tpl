<?php
session_start();
require_once('common/connect.php');
require_once('common/utils.php');
$con=false;
$chat=false;
if(isset($_SESSION['id_joueur']))
{
	if(($_SESSION['id_joueur']!=0)) $con=true;
}
if(!$con)
{
	if(isset($_POST['login']) && isset($_POST['pwd']))
	{
		$sql="SELECT id_joueur,level FROM joueurs WHERE pseudo=:login and password=:pwd";
		$query=$connexion->prepare($sql);
		$query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
		$query->bindValue('pwd', sha1($_POST['pwd']), PDO::PARAM_STR);
		if($query->execute())
		{
			$rst = $query->fetch(PDO::FETCH_ASSOC);
			if(!is_null($rst['id_joueur']))
			{
				$_SESSION['id_joueur']=$rst['id_joueur'];
				$_SESSION['login']=$_POST['login'];
				$_SESSION['level']=$rst['level'];
				$con=true;
			}
		}
		else  {echo 'ERREUR LOGIN SQL';}
	}
	
}

function isPlay($idJoueur, $idTournoi, &$connexion,&$pseudoJeux){
   
    $sqlPlay="SELECT * FROM joueurtournoi WHERE id_joueur = :id_joueur AND id_tournoi = :id_tournoi";
    try {
        $req = $connexion->prepare($sqlPlay);
        $req->execute(array(
            'id_joueur'=>$idJoueur,
            'id_tournoi'=>$idTournoi
        ));
        $jeux = $req->fetch();
        if(empty($jeux)){
            
            //ne joue pas a ce jeux
            return '';
            
        }
        else {
            
	    $pseudoJeux=$jeux['pseudoJeux'];
            //joue a ce jeux
            return 'checked';
	    
            
        }
    }
    
    catch(PDOException $e) {
        return '';
    }
    
    
}

$sql="SELECT j.*, e.nom AS team
    FROM  joueurs j
    LEFT OUTER JOIN equipes_joueur ej ON j.id_joueur = ej.id_joueur
    LEFT OUTER JOIN equipes e ON e.id_equipes = ej.id_equipes
    WHERE j.id_joueur = :idj
";
$requete_preparee = $connexion->prepare($sql);
$requete_preparee->bindValue("idj",$_SESSION['id_joueur'],PDO::PARAM_INT);
$requete_preparee->execute();
$joueur = $requete_preparee->fetch();
$pseudoJeux='';

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>HEHLan</title>
	<META NAME="robots" CONTENT="none">
	
	<link rel="icon" href="img/logoheh.ico" >
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/profil.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui2.css" type="text/css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>	
    <script type="text/javascript" src="js/getXhr.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/less.js"></script>
    <script type="text/javascript" src="js/jquery.media.js"></script>
</head>

<body style="background-color: #000;">

 	<div id="header">
		<div id="banner">
		    <a href="index.php">
		    <img src="img/logoheh.png" alt="HEHLan" width="250px">
		    </a>
		</div>
		<div id="login">
			<?php
				if($con)
				{
					echo 'Bienvenu à toi '.$_SESSION['login'].', <a href="common/deco.php">se déconnecter</a><br>';
				}
			?>
		</div>	     
 	</div>
 	
    <div id="navigation">
	<?php
		require_once('common/menuTop.php');
    ?>        
    </div>
	<div id="container">
		{block "content"}<div id="content"></div>{/block}
	</div>
    <div id="footer">
        <div id="about"><p>HEHLan All Rights Reserved 'Copyright' 2014</p></div>
        <div id="nothinghere"><img src="img/logo3.png" alt="CEHECOFH"></div>
        <div id="social"><a href="http://www.heh.be" target="_blank"><img src="img/logo4.png" alt="HeH" border="0"></a></div>
    </div>
</body>
</html>



