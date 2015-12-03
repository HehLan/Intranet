<nav id="navigation" class="navbar navbar-inverse" role="navigation" >
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			
				<li><a href="index.php">Accueil</a></li>
				<li><a href="joueurs.php">Joueurs</a></li>

				<?php 
					//SQL Query to select all tournament names
					$sql = "SELECT id_tournoi, nomTournoi FROM tournoi";
					$query = $connexion->prepare($sql);
					$query->execute();	
					
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
					
				?>
			</ul>
		</div>
	</div>			
</nav>


