<?php
	session_start();
	require_once('common/connect.php');
	require_once('common/utils.php');
	
	$con = false;
	$chat = false;

	if(isset($_SESSION['id_joueur']))
	{
		if(($_SESSION['id_joueur'] != 0))
			$con = true;
	} 

	if(!$con)
	{
		if(isset($_POST['login']) && isset($_POST['pwd']))
		{
			//SQL Query to select the connected player 
			$sql = "SELECT id_joueur,level FROM joueurs WHERE pseudo=:login and password=:pwd";
			$query = $connexion->prepare($sql);
			$query->bindValue('login', $_POST['login'], PDO::PARAM_STR);
			$query->bindValue('pwd', sha1($_POST['pwd']), PDO::PARAM_STR);
			if($query->execute())
			{
				$data = $query->fetch(PDO::FETCH_ASSOC);
				if(!is_null($data['id_joueur']))
				{
					$_SESSION['id_joueur'] = $data['id_joueur'];
					$_SESSION['login'] = $_POST['login'];
					$_SESSION['level'] = $data['level'];
					$_SESSION['password'] = $_POST['pwd'];
					$con = true;
				}
			}
			else
				echo 'ERREUR LOGIN SQL';
		}		
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php require_once('includes/_meta.php'); ?> 
		
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo $path; ?>/assets/js/getXhr.js"></script>
		<script type="text/javascript">
			function news_toggle(idn)
			{
				var nom='#contenu_news_'+idn;
				$(nom).toggle();
			}
		</script>
		
		<?php	
			if($con)
			{ 			
				
				$duree_chat = '2000';
				$duree_chat_users = '20000';
			
				//SQL Query to test if chat is activated
				$sql = "SELECT valeur FROM variables WHERE nom='chat_on'";
				$query = $connexion->prepare($sql);
				if($query->execute())
				{
					$data = $query->fetch(PDO::FETCH_ASSOC);
					if($data['valeur'] == 1)
						$chat = true;
				}
				else
					echo 'ERREUR SQL duree_chat';

				//Active chat 
				if($chat) 
				{
					//SQL query to get chat timing for AJAX
					$sql = "SELECT valeur FROM variables WHERE nom='duree_chat'";
					$query = $connexion->prepare($sql);
					if($query->execute())
					{
						$data = $query->fetch(PDO::FETCH_ASSOC);
						$duree_chat = $data['valeur'];
					}
					else
						echo 'ERREUR SQL duree_chat';	
				
					//SQL query to get chat timing for AJAX
					$sql = "SELECT valeur FROM variables WHERE nom='duree_chat_users'";
					$query = $connexion->prepare($sql);
					if($query->execute())
					{
						$data = $query->fetch(PDO::FETCH_ASSOC);
						$duree_chat_users = $data['valeur'];
					}
					else
						echo 'ERREUR SQL duree_chat_users';				
				
				
					require_once('assets/ajax/chat.php'); 
				}
			}
		?>

	</head>

	<body role="document">

		<?php require_once('includes/_header.php'); ?>   
		<?php require_once('includes/_nav.php'); ?>   
		
		<div id="container" class="container-fluid">

			<div class="row">
				<div id="bloc_news" class="col-lg-6 col-xs-12">
				<h3>News</h3>
				<?php			
					//SQL query to select all news
					$sql = "SELECT * FROM news WHERE invisible=0 ORDER BY quand DESC";
					$query = $connexion->prepare($sql);
			
					if($query->execute())
					{
						while( $news = $query->fetch(PDO::FETCH_ASSOC) )
						{
							$titre = $news['titre'];
							$texte = nl2br($news['texte']);
							$quand = get_jour_de_la_semaine($news['quand']).' à '.get_heure($news['quand']);
							$id_news = $news['id_news'];
							echo '<div class="une_news" id="bloc_news_'.$id_news.'">
									<div class="titre_news" id="titre_news_'.$id_news.'" onclick="news_toggle('.$id_news.');">
										'.$titre.'
											<div class="date_news" id="footer_news_'.$id_news.'">
										'.$quand.'
									</div>
									</div>
									<div class="contenu_news" id="contenu_news_'.$id_news.'">
									'.$texte.'
									</div>
								</div>';
						}
					}
					else
						echo 'ERREUR NEWS SQL';
				?>				
				</div>	
			
				<div id="bloc_chat" class="col-lg-6 col-xs-12">
				<?php
					if($con)
					{
						echo '<h3>HEHLan Chat</h3>';
						if($chat)
						{
							echo '
								<div id="bloc_chat_texte"></div>
								<div id="bloc_chat_users">
									<strong>Connectés :</strong><br>				
								</div>
								<div id="bloc_chat_send">
									<input type="text" name="message" id="bloc_chat_message" />
									<input type="button" value="Envoyer" id="bloc_chat_bouton" onclick="ecrire();" />
								</div>';
						}
						else				
						{
							echo '<div id="bloc_chat_texte">			
									<strong>Sorry les gars ... le chat est désactivé :o/</strong>
								</div>';
						}
					}
					else
					{
						echo '
							<div id="bloc_chat_titre">Connectez vous pour accèder au Chat et à votre profil :</div>	
							<div id="bloc_connexion">
								<form method="POST">
									<table>
										<tr>
											<td><label><strong>Login</strong></label></td>
											<td><input type="text" name="login" /></td>
										</tr>
										<tr>
											<td><label><strong>Password</strong></label></td>
											<td><input type="password" name="pwd" /></td>
										</tr>
										<tr>
											<td colspan="2"><input type="submit" value="Connexion" /></td>						
										</tr>					
									</table>
								</form>
							</div>';
					}
				?>
				</div>
			</div>
			
		</div>
		
		<?php require_once('includes/_footer.php'); ?>
		<?php
			if ($chat)
			{
				echo '<script type="text/javascript">
						$("#bloc_chat_message").keyup(function(event)
						{
							if(event.keyCode == 13)
							{
								$("#bloc_chat_bouton").click();
							}
						});
				
						afficher(0);
						users();
		
					</script>';
			}
		?>
	</body>
</html>