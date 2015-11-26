
<?php 

	//SQL Query to select all tournament names
	$sql = "SELECT id_tournoi, nomTournoi FROM tournoi";
	$query = $connexion->prepare($sql);
	$query->execute();
	
	echo '<ul>';
	echo '<li><a href="index.php">Accueil</a></li>';
	echo '<li><a href="joueurs.php">Joueurs</a></li>';
	
	while($data = $query->fetch(PDO::FETCH_ASSOC))
	{		
		echo '<li><a href="tournois.php?id='.$data['id_tournoi'].'">'.$data['nomTournoi'].'</a></li>';
	}	
		
	if(isset($_SESSION['id_joueur']))
		echo '<li><a href="ModifProfil.php">Mon profil</a></li>';

	if(isset($_SESSION['level']))
	{
		if($_SESSION['level'] == 1)
			echo '<li><a href="admin/index.php">Admin</a></li>';
	}
	
	echo '</ul>';	
  
?>



	

