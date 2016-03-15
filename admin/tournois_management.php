<?php
session_start();
require_once('../common/connect.php');
require_once('../common/utils.php');
$con=false;

if(isset($_SESSION['id_joueur']))
{
	if(($_SESSION['id_joueur']!=0) && $_SESSION['level']<=3) $con=true;
}
if(!$con)
{
 header('Location: ../index.php');
} 
?>
<!DOCTYPE HTML>
<html>
<head>
	<?php require_once('../includes/_meta.php'); ?> 
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/getXhr.js"></script>
</head>

<body role="document">

 	<?php require_once('../includes/_header.php'); ?>
	<?php require_once('modules/menuTop.php'); ?>  
	
	<div id="container">
		<div id="contenu">
			<?php
			$sql="SELECT * FROM tournoi ORDER BY nomTournoi";
			$query=$connexion->prepare($sql);
						
			if($query->execute())
			{
				$tournois = $query->fetchAll(PDO::FETCH_ASSOC);

			}
			else  {echo 'ERREUR TOURNOI SQL'; exit;}
			echo '<table id="adm_tablo">
					<tr>
						<th>id</th>
						<th>Tournoi</th>
						<th>Participants</th>
						<th>Joueurs par team</th>
						<th>Teams par match</th>
						<th>Nombre de manches</th>
						<th>Heure groupes</th>
						<th>Heure finales</th>
						<th>Durée inter match</th>
						<th>Gérer les groupes</th>
						<th>Gérer les finales</th>
						<th>Looser 1</th>
						<th>Looser 2</th>
						<th>Supprimer</th>
					</tr>';	
			?>
			<input type="submit" value="Créer" />
			<br>
		</form>
	</div>		
</body>
</html>