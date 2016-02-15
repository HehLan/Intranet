<?php
	session_start();
	require_once('common/connect.php');	// connection to database
	require_once('common/utils.php');	// get some utility functions
	require_once('common/getNextMatches.php');
	require_once('common/getNavTournois.php');
	require_once('common/getNewsList.php');
	require_once('lib/smarty/Smarty.class.php');
	
	$con = false;
	$chat = false;
	$smarty = new Smarty;

	//$smarty->force_compile = true;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;

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
		// send to the template
		$smarty->assign("con", $con);
		$smarty->assign("chat", $chat);
		$smarty->assign("SESSION", $_SESSION);
		$smarty->assign("next_matches", getNextMatches());
		$smarty->assign("navTournois", getNavTournois());
		$smarty->assign("newsList", getNewsList());
		
		$smarty->display('templates/default/index.tpl');
?>