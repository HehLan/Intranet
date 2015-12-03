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
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once('../includes/_meta.php'); ?> 
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/getXhr.js"></script>
</head>

<body>

 	<?php require_once('../includes/_header.php'); ?>
	<?php require_once('modules/menuTop.php'); ?>  
	
	<div id="container">
		<div id="contenu">
		<?php
			
		echo '<h1>Ajouter une news</h1>
		
			<form method="POST" action="news_save.php">
			<input type="hidden" name="id_news" value="0">
			<table>
				<tr>
					<td>
						<strong>Titre</strong>
					</td>
					<td>
						<input type="text" name="titre" size="50" value="">
						<input type="submit" value="modifier">
					</td>
				</tr>
				<tr>
					<td>
						<strong>Texte</strong>
					</td>
					<td>
						<textarea name="texte" cols="60" rows="8"></textarea>
					</td>
				</tr>	
<tr>
<td colspan=2>
<input type=submit value=enregistrer>
</td>
</tr>				
			</table>
			</form>
			<br>
			<br>	
			<h1>Modifier les news</h1>';	
		
		$sql="SELECT * FROM news ORDER by invisible, quand DESC";
		$query=$connexion->prepare($sql);
		$query->execute();
		$firstinvi=true;
		while($news=$query->fetch(PDO::FETCH_ASSOC))
		{
			if($news['invisible']==1 && $firstinvi)
			{
				echo '<h1>News effacées</h1>';
				$firstinvi=false;
			}
			echo '<form method="POST" action="news_save.php">
			<input type="hidden" name="id_news" value="'.$news['id_news'].'">
			<table>
				<tr>
					<td>
						<strong>Titre</strong>
					</td>
					<td>
						<input type="text" name="titre" size="50" value="'.htmlspecialchars($news['titre']).'">
						<input type="submit" value="modifier">';
			if($news['invisible']==0) echo '<a href="news_effacer.php?invisible=1&id_news='.$news['id_news'].'">Masquer</a>';
			else echo '<a href="news_effacer.php?invisible=0&id_news='.$news['id_news'].'">Dé-Masquer</a>';
					echo '</td>
				</tr>
				<tr>
					<td>
						<strong>Texte</strong>
					</td>
					<td>
						<textarea name="texte" cols="60" rows="8">'.$news['texte'].'</textarea>
					</td>
				</tr>				
				<tr>
					<td colspan="2">
						Dernière maj : '.$news['quand'].'		
					</td>
				</tr>
			</table>
			</form>
			<br>
			<br>';
		}
		?>
		</div>
	</div>
    
	<!-- gap to have the footer in the bottom of the window -->
	<div style="height: 450px;">
	
	</div>
    
	<?php require_once('../includes/_footer.php'); ?>
	
</body>
</html>