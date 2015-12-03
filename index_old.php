<?php
session_start();
require_once('common/connect.php');
require_once('common/utils.php');
require_once('common/template.engine.php');
$con=false;
$adm=false;
$chat=false;
if(isset($_SESSION['id_joueur']))
{
	if($_SESSION['id_joueur']!=0) 
		$con=true;
	if($_SESSION['level']==1) 
		$adm=true;
}

$theme_path = 'templates/default';
$tpl = new template($theme_path.'/index.tpl');
$tpl->assign('con',$con);
$tpl->assign('adm',$adm);

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
				$_SESSION['password']=$_POST['pwd'];
				$con=true;
			}
		}
		else  {echo 'ERREUR LOGIN SQL';}
	}
	
}

	if($con)
	{ 
		$duree_chat='2000';
		$duree_chat_users='20000';
		
		//----- test si chat est activé
		$sql="SELECT valeur FROM variables WHERE nom='chat_on'";
		$query=$connexion->prepare($sql);
		if($query->execute())
		{
			$rst = $query->fetch(PDO::FETCH_ASSOC);
			if($rst['valeur']==1) {
				$chat=true;
				$tpl->assign('chat',$chat);
			}
			
		}
		else  {echo 'ERREUR SQL duree_chat';}
		//----------------------
		
		//----- Chat actif 
		if($chat) 
		{
			//------: recup des timings ajax
			$sql="SELECT valeur FROM variables WHERE nom='duree_chat'";
			$query=$connexion->prepare($sql);
			if($query->execute())
			{
				$rst = $query->fetch(PDO::FETCH_ASSOC);
				$duree_chat=$rst['valeur'];
			}
			else  {echo 'ERREUR SQL duree_chat';}	
			
			$sql="SELECT valeur FROM variables WHERE nom='duree_chat_users'";
			$query=$connexion->prepare($sql);
			if($query->execute())
			{
				$rst = $query->fetch(PDO::FETCH_ASSOC);
				$duree_chat_users=$rst['valeur'];
			}
			else  {echo 'ERREUR SQL duree_chat_users';}			
			//------------------
			$tpl->assign('duree_chat',$duree_chat);
			$tpl->assign('duree_chat_users',$duree_chat_users);
			$tpl->assign('date_chat',date("Y-m-d H:i:s"));
			$tpl->assign('id_joueur',$_SESSION['id_joueur']);			
		}
		//-------------
	}
			$tpl->assign('login',$_SESSION['login']);
				if($con)
				{
					
					$sql="SELECT DISTINCT m.id_match, m.heure, t.nomTournoi 
					FROM (matchs as m, tournoi as t,matchs_joueurs as mj, matchs_equipes as me, equipes_joueur as ej)

					WHERE
						t.id_tournoi=m.id_tournoi AND 
						(
							(mj.id_joueur=:idj AND m.id_match=mj.id_match)
							OR
							(ej.id_joueur=:idj AND me.id_equipe=ej.id_equipes AND m.id_match=me.id_match)
						)
						AND m.heure>NOW()
					ORDER BY m.heure
					LIMIT 0,3";
					$query=$connexion->prepare($sql);
					$query->bindValue('idj', $_SESSION['id_joueur'], PDO::PARAM_INT);
					if($query->execute())
					{
						$next_matches= $query->fetchAll(PDO::FETCH_ASSOC);
					}
					else {echo 'ERREUR SQL NEXT MATCHES'; exit;}	
					$list_matches = array();
					foreach($next_matches as $next_match)
					{
						$list_matches[] = array("tournoi_date" => get_jour_de_la_semaine($next_match['heure']).' '.get_heure($next_match['heure']).' '.$next_match['nomTournoi']);
					}
					$tpl->assign('query_match_flag',(!empty($list_matches)));
					$tpl->assign("next_match",$list_matches);
				}

		
			$sql="SELECT * FROM news WHERE invisible=0 ORDER BY quand DESC";
			$query=$connexion->prepare($sql);
			if($query->execute())
			{
				$news_sorted = array();
				while( $news = $query->fetch(PDO::FETCH_ASSOC) )
				{
					$news_sorted[] = array(
					'titre' 	=> htmlspecialchars($news['titre']),
					'texte'		=> nl2br($news['texte']),
					'quand'		=> get_jour_de_la_semaine($news['quand']).' à '.get_heure($news['quand']),
					'id_news'	=> $news['id_news']);
				}
				$tpl->assign('news',$news_sorted);
			}
			
			$tpl->assign('successful_query',(!empty($news_sorted)));

		
	var_dump($tpl);

	$tpl->generate();

?>