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


<!DOCTYPE html>
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
				<div class="col-lg-offset-1 col-lg-8 col-xs-12 map_cafetaria">
					<img class="photo_cafetaria" src="<?php echo $path ?>/assets/img/plan.jpg">
                    <?php         
						//SQL command to get table drawing
						$sql = "SELECT emplacement.id_emplacement AS id_emplacement, top, xy_left, width, height, numero, joueurs.id_joueur AS id_joueur
								FROM emplacement 
								LEFT JOIN joueurs ON emplacement.id_emplacement = joueurs.id_emplacement
								where emplacement.id_emplacement != 0";
						$query = $connexion->prepare($sql);
						$query->execute();
					?>
					<?php
						// Create player locations div tags
						while($emplacements = $query->fetch(PDO::FETCH_ASSOC)) 
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
					?>
					<?php
						// Create tooltip of location div tags
						$query_1 = "SELECT * FROM emplacement,joueurs
							WHERE joueurs.id_emplacement = emplacement.id_emplacement
							AND emplacement.id_emplacement != 0";
						$prepared_statement_1 = $connexion->prepare($query_1);
						$prepared_statement_1->execute();
						
						while($emplacements1 = $prepared_statement_1->fetch(PDO::FETCH_ASSOC)) 
						{
							echo "<div class='tooltip' style='position:absolute;
								top:".$emplacements1['top']."%;
								left:".$emplacements1['xy_left']."%;
								width:".$emplacements1['width']."%;
								height:".$emplacements1['height']."%;
								text-align:center;'>";
							echo "<span>pseudo : <strong>".$emplacements1['pseudo']."</strong><br>Equipe : ";
							$id_joueur = $emplacements1['id_joueur'];

							$query_2 = "SELECT * FROM equipes, equipes_joueur WHERE equipes_joueur.id_joueur = '$id_joueur' AND equipes.id_equipes = equipes_joueur.id_equipes";
							$prepared_statement_2 = $connexion->prepare($query_2);
							$prepared_statement_2->execute();
							$team = array();
							while($emplacements2 = $prepared_statement_2->fetch(PDO::FETCH_ASSOC)) 
							{					
								$team[] = $emplacements2['nom'];        
							}
							echo implode(', ', $team);
									
							$query_3 = "SELECT nomTournoi FROM joueurtournoi,tournoi WHERE joueurtournoi.id_joueur = '$id_joueur' AND tournoi.id_tournoi = joueurtournoi.id_tournoi";
							 
							$prepared_statement_3 = $connexion->prepare($query_3);
							$prepared_statement_3->bindValue("id_joueur", $id_joueur, PDO::PARAM_INT);
							$prepared_statement_3->execute();
							echo "<br>";
							echo "<u>Tournoi :</u>";
							$nomTournoi = array();
							while($equipe = $prepared_statement_3->fetch()) 
							{
								$nomTournoi[] = $equipe['nomTournoi']; 
							} 
							echo implode(', ', $nomTournoi);
							echo "</span></a>";
							echo "</div>";
						}
					?>		
				</div>		
				<div id="tabs" class="col-lg-2 col-xs-12">
					<div class="row">
						<div class="col-lg-6 col-xs-6">
							<a href="#" onclick="show_tab(1);">Joueur</a>
						</div>	
						<div class="col-lg-6 col-xs-6">
							<a href="#" onclick="show_tab(2);">Equipe</a>
						</div>
					</div>
					
					<!-- Player Tab -->
					<div id="tabs-1">
						<!-- Player Search Function -->
						<form>
							<label for="recherche_joueur">Rechercher un pseudo :</label>
							<input type="text" name="recherche_joueur" id="recherche_joueur" />
						</form>

						<!-- Result Displaying -->
						<div id="results" style="display: none">
							<strong>Pas de résultat</strong>
						</div>
						
						<u>Liste des joueurs :</u>
						<br>
						<ul id="liste_joueur">							
							<?php
								// Selection des pseudos	
								$query = "SELECT id_emplacement, pseudo FROM joueurs ORDER BY pseudo ASC";
								$prepared_statement = $connexion->prepare($query);
								$prepared_statement->execute();
								while($joueurs = $prepared_statement->fetch(PDO::FETCH_ASSOC)) 
								{
									echo "<li><a class='ClassPseudo' value='".$joueurs['id_emplacement']."'>".$joueurs['pseudo']."</a></li>";
								}
							?>
						</ul>    
					</div>

					<!-- Team Tab -->
					<div id="tabs-2" style="display:none;">
						<!-- Team Search Function -->
						<form>
							<label for="recherche_equipe">Rechercher une équipe :</label>
							<input type="text" name="recherche_equipe" id="recherche_equipe" />
						</form>
						
						<div id="results_equipe" style="display: none">
							<strong>Pas de résultat</strong>
						</div>
					 
						<div>
							<u>Liste des Equipes :</u>
							<br>
							<ul id="liste_equipe">
								<?php
									// Selection des équipes	
									$sql = "SELECT id_equipes,nom from equipes ORDER BY nom ASC ";
									$query = $connexion->prepare($sql);
									$query->execute();
									while($equipes=$query->fetch(PDO::FETCH_ASSOC)) 
									{
										echo "<li><a class='ClassEquipe' value='".$equipes['id_equipes']."'>".$equipes['nom']."</a></li>";
									}
								?>
							</ul>
						</div>
					</div>							
					<div id="dialogEquipe_Emplacement" style="display:none;"></div>
					<div id="dialogPseudo_Emplacement" style="display:none;"></div>
				</div>
			</div>
			<?php require_once('includes/_footer.php'); ?>
		</div>		
	</body>
</html>