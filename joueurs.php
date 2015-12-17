<?php
	session_start();
	require_once('common/connect.php');
	require_once('common/utils.php');

	$con = false;

	if(isset($_SESSION['id_joueur']))
	{
		if(($_SESSION['id_joueur']!=0))
			$con = true;
	}
	/*if(!$con)
	{
		if(isset($_POST['login']) && isset($_POST['pwd']))
		{
			$sql = "SELECT id_joueur FROM joueurs WHERE pseudo=:login and password=:pwd";
			$query = $connexion->prepare($sql);
			$query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
			$query->bindValue('pwd', sha1($_POST['pwd']), PDO::PARAM_STR);
			if($query->execute())
			{
				$data = $query->fetch(PDO::FETCH_ASSOC);
				if(!is_null($data['id_joueur']))
				{
					$_SESSION['id_joueur']=$data['id_joueur'];
					$_SESSION['login']=$_POST['login'];
					$con=true;
				}
			}
			else  {echo 'ERREUR LOGIN SQL';}
		}
		else header('Location: index.php');
		
	}*/
	
?>


<!DOCTYPE HTML>
<html>
	<head>
		<?php require_once('includes/_meta.php'); ?>	
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/getXhr.js"></script>
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/jquery-ui.js"></script>
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/joueur.js"></script>
	</head>

	<body role="document">

		<?php require_once('includes/_header.php'); ?>   
		<?php require_once('includes/_nav.php'); ?>   

	
		<div class="container-fluid" id="container">
			<div class="row" id="contenu">
				<div class="map_cafetaria" class="col-lg-9 col-xs-12">
					<?php
						echo'
							<img class="photo_cafetaria" src="'.$path.'/assets/img/plan.jpg">';

                              
					//------------------- DESSIN DES TABLES
					$sql = "SELECT emplacement.id_emplacement AS id_emplacement, top, xy_left, width, height, numero, joueurs.id_joueur AS id_joueur
							FROM emplacement 
							LEFT JOIN joueurs ON emplacement.id_emplacement=joueurs.id_emplacement
							where emplacement.id_emplacement != 0";
					$query = $connexion->prepare($sql);
					$query->execute();

					while($emplacements=$query->fetch(PDO::FETCH_ASSOC)) 
					{
						echo "<div class='place' onclick='Click(this)' id=";
						echo $emplacements['id_emplacement'];
						echo " style='";
						echo "position:absolute";
						echo ";";
						echo "top:";
						echo $emplacements['top'];
						echo "%";
						echo ";";
						echo "left:";
						echo $emplacements['xy_left'];
						echo "%";
						echo ";";
						echo "width:";
						echo $emplacements['width'];
						echo "%;height:";
						echo $emplacements['height'];
						echo "%;border:0.1em solid #000;text-align:center;color:#000000;";
						echo ($emplacements['id_joueur']!=0)?"background:#337ab7;":"background:initial;";
						echo "'>";
						echo $emplacements['numero'];
						echo "</div>";
					}  
					//----------------------				

				//---------------création des vignetes
				$query1="SELECT * FROM emplacement,joueurs where joueurs.id_emplacement=emplacement.id_emplacement and emplacement.id_emplacement!=0";
				$requete_preparee1=$connexion->prepare($query1);
				$requete_preparee1->execute();
				while($emplacements1=$requete_preparee1->fetch(PDO::FETCH_ASSOC)) 
				{
					echo "<div class='tooltip' style='position:absolute;top:".$emplacements1['top']."%;left:".$emplacements1['xy_left']."%;width:".$emplacements1['width']."%;height:".$emplacements1['height']."%;text-align:center;'>";
					echo "<span>pseudo : <strong>".$emplacements1['pseudo']."</strong><br>Equipe : ";
					$id_joueur=$emplacements1['id_joueur'];

					$query2="SELECT * FROM equipes,equipes_joueur where equipes_joueur.id_joueur='$id_joueur' and equipes.id_equipes=equipes_joueur.id_equipes";
					$requete_preparee2=$connexion->prepare($query2);
					$requete_preparee2->execute();
					$team = array();
					while($emplacements2=$requete_preparee2->fetch(PDO::FETCH_ASSOC)) 
					{					
						$team[]=$emplacements2['nom'];        
					}
					echo implode(', ', $team);
							
					$query3="SELECT nomTournoi FROM joueurtournoi,tournoi where joueurtournoi.id_joueur='$id_joueur' and tournoi.id_tournoi=joueurtournoi.id_tournoi";
					 
					$requete_preparee3=$connexion->prepare($query3);
					$requete_preparee3->bindValue("id_joueur",$id_joueur,PDO::PARAM_INT);
					$requete_preparee3->execute();
					echo "<br>";
					echo "<u>Tournoi :</u>";
					$nomTournoi=array();
					while($equipe=$requete_preparee3->fetch()) 
					{
						$nomTournoi[]=$equipe['nomTournoi']; 
					} 
					echo implode(', ', $nomTournoi);
					echo "</span></a>";
					echo "</div>";
				}
				?>
				//-----------------------------------		
		
	
		
			<div id="tabs" class="col-lg-2 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-xs-6">
						<a href="#" onclick="show_tab(1);">Joueur</a>
					</div>	
					<div class="col-lg-6 col-xs-6">
						<a href="#" onclick="show_tab(2);">Equipe</a>
					</div>
					<div id="tabs-1">
						<!-- FONCTION RECHERCHER JOUEUR -->
						<!--debut du formulaire-->
						<p>
							<label for="recherche_joueur">Rechercher un pseudo :</label>
							<input type="text" name="recherche_joueur" id="recherche_joueur" />
						</p>
						<!--fin du formulaire-->

						<!--preparation de l\'affichage des resultats-->
						<div id="results" style="display: none">
							<strong>Pas de résultat</strong>
						</div>
						<div id="liste_joueur">
							<u>Liste des joueurs :</u><br>';
							<?php
							// Selection des pseudos			
							
							$query="SELECT id_emplacement,pseudo FROM joueurs ORDER BY pseudo ASC ";
							$requete_preparee=$connexion->prepare($query);
							$requete_preparee->execute();
							while($joueurs=$requete_preparee->fetch(PDO::FETCH_ASSOC)) 
							{
								echo "<a class='ClassPseudo' value='";
								echo $joueurs['id_emplacement'];
								echo "'>";
								echo $joueurs["pseudo"];
								echo"</a>";		
							}
							?>
						</div>    
					</div>

					<!-- ONGLET EQUIPE -->
					<div id="tabs-2" style="display:none;">
						<!-- FONCTION RECHERCHER Equipe -->
						<!--debut du formulaire-->
						<p>
							<label for="recherche_equipe">Rechercher une équipe :</label>
							<input type="text" name="recherche_equipe" id="recherche_equipe" />
						</p>
						<!--fin du formulaire-->
						
						<div id="results_equipe" style="display: none"><strong>Pas de résultat</strong></div>
					 
						<div id="liste_equipe">
							<u>Liste des Equipes :</u><br>
							<div class="liste_equipe">';
								<?php
								// Selection des équipes		

								$sql = "SELECT id_equipes,nom from equipes ORDER BY nom ASC ";
								$query = $connexion->prepare($sql);
								$query->execute();
								while($equipes=$query->fetch(PDO::FETCH_ASSOC)) 
								{
									echo "<a class='ClassEquipe' value='";
									echo $equipes['id_equipes'];
									echo "'>";
									echo $equipes["nom"];
									echo "</a>";		
								}
								?>
							</div>
						</div>
					</div>
						
					<div id="dialogEquipe_Emplacement" style="display:none;"></div>
					<div id="dialogPseudo_Emplacement" style="display:none;"></div>
				</div>
			</div>
		</div>
		
		<div style="height: 4500px;"></div>
		<?php require_once('includes/_footer.php'); ?>
	</body>
</html>