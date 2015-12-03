<?php
session_start();
require_once('modules/connect.php');
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
$id_tournoi=0;
if(isset($_GET['id_tournoi'])) $id_tournoi=$_GET['id_tournoi'];

if(isset($_POST['id_tournoi']) && isset($_POST['nbrgroupes']) )
{
	$nbr_grp=$_POST['nbrgroupes'];
	$id_tournoi=$_POST['id_tournoi'];
	
	$sql="DELETE FROM groupes_pool WHERE id_tournoi=:id";
	$query=$connexion->prepare($sql);
	$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
	if(!$query->execute()) {echo 'ERREUR GROUPES SQL DELETE '; exit;}


	for($i=0;$i<$nbr_grp;$i++)
	{
		$sql="INSERT INTO groupes_pool (id_tournoi,nom_groupe) VALUES (:id,:nom)";
		$query=$connexion->prepare($sql);
		$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);
		$query->bindValue('nom', 'Groupe '.($i+1), PDO::PARAM_STR);
		if(!$query->execute())
		{echo 'ERREUR GROUPES SQL INSERTION '.$i; exit;}

	}
}

$sql="SELECT * FROM tournoi WHERE id_tournoi=:id";
$query=$connexion->prepare($sql);
$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);	
if($query->execute())
{
	$tournoi=$query->fetch(PDO::FETCH_ASSOC);
}
else {echo 'ERREUR TOURNOI SQL'; exit;}

$jpt=$tournoi['joueurParTeam'];
$nomt=$tournoi['nomTournoi'];

?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once('../includes/_meta.php'); ?> 
	
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/getXhr.js"></script>
    <script type="text/javascript">
	
	
	</script>
</head>

<body>

 	<?php require_once('../includes/_header.php'); ?>
	<?php require_once('modules/menuTop.php'); ?>  
	
	<div id="container">
		<div id="contenu">
			<?php
				echo '<h1>Groupes '.$nomt.'</h1>';
				$participants='';
				if($jpt>1)
				{
					$sql="SELECT et.id_equipe, e.nom FROM equipes_tournoi as et, equipes as e
					WHERE et.id_tournoi=:id AND e.id_equipes=et.id_equipe
					ORDER BY e.nom";
					$query=$connexion->prepare($sql);
					$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);	
					if($query->execute())
					{
						$i=0;
						while($li=$query->fetch(PDO::FETCH_ASSOC))
						{
							$participants[$i]['id']=$li['id_equipe'];
							$participants[$i]['nom']=$li['nom'];
							$i++;
						}
					}
					else {echo 'ERREUR PARTICIPANTS TEAM SQL'; exit;}
					
				}
				else
				{
					$sql="SELECT jt.id_joueur, j.pseudo FROM joueurtournoi as jt, joueurs as j
					WHERE jt.id_tournoi=:id AND j.id_joueur=jt.id_joueur
					ORDER BY j.pseudo";
					$query=$connexion->prepare($sql);
					$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);	
					
					if($query->execute())
					{
						$i=0;
						while($li=$query->fetch(PDO::FETCH_ASSOC))
						{
							$participants[$i]['id']=$li['id_joueur'];
							$participants[$i]['nom']=$li['pseudo'];
							$i++;
						}
					}
					else {echo 'ERREUR PARTICIPANTS JOUEUR SQL'; exit;}				
				}
				
				$sql="SELECT * FROM groupes_pool WHERE id_tournoi=:id ORDER BY nom_groupe";
				$query=$connexion->prepare($sql);
				$query->bindValue('id', $id_tournoi, PDO::PARAM_INT);	
				if($query->execute())
				{
					$groupes=$query->fetchALL(PDO::FETCH_ASSOC);
				}
				else {echo 'ERREUR GROUPES READ SQL'; exit;}
				$nbr_groupes=count($groupes);
				echo '<table id="adm_tablo">
					<form method="POST" action="inscrire_groupes.php">
					<input type="hidden" name="id_tournoi" value="'.$id_tournoi.'" />
					<tr>
						<th>Participants</th>';
						foreach($groupes as $groupe) echo '<th>'.$groupe['nom_groupe'].'</th>';
				echo '</tr>';
				foreach($participants as $participant)
				{
					echo '<tr>
						<td>'.$participant['nom'].'</td>';
					foreach ($groupes as $groupe)
					{
						echo '<td>
								<input type="radio" name="parti_'.$participant['id'].'" value="'.$groupe['id_groupe'].'" >
							</td>';	
					}
					echo '</tr>';
				}
				
				echo '<tr>
				<td colspan="'.($nbr_groupes+1).'">
					<input type="submit" value="Enregistrer" />
				</td>
				</tr></table>';
			?>
		</div>
	</div>
	
	
    <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 450px;">
	
	</div>
    
	<?php require_once('../includes/_footer.php'); ?>



</body>
</html>