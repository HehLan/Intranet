<?php
	session_start();
	require_once('common/connect.php');
	require_once('common/utils.php');
	require_once('includes/_meta.php');
	require_once('common/getNextMatches.php');
	require_once('common/getNavTournois.php');
	require_once('lib/smarty/Smarty.class.php');

	$con = false;
	$smarty = new Smarty;
	
	//$smarty->force_compile = true;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;
	
	if(isset($_SESSION['id_joueur']))
	{
		if(($_SESSION['id_joueur']!=0))
			$con = true;
	}
	
	//SQL command to get table drawing
	$sql = "SELECT emplacement.id_emplacement AS id_emplacement, top, xy_left, width, height, numero, joueurs.id_joueur AS id_joueur
			FROM emplacement 
			LEFT JOIN joueurs ON emplacement.id_emplacement = joueurs.id_emplacement
			where emplacement.id_emplacement != 0";
	$query = $connexion->prepare($sql);
	$query->execute();

	$emplacements = array();
	// Create player locations div tags
	while($emplacement = $query->fetch(PDO::FETCH_ASSOC)) 
	{
		$emplacements[] = $emplacement;
	}  

	// Create tooltip of location div tags
	$query_1 = "SELECT * FROM emplacement,joueurs
		WHERE joueurs.id_emplacement = emplacement.id_emplacement
		AND emplacement.id_emplacement != 0";
	$prepared_statement_1 = $connexion->prepare($query_1);
	$prepared_statement_1->execute();
	
	$emplacements1 = array();
	while($emplacement1 = $prepared_statement_1->fetch(PDO::FETCH_ASSOC)) 
	{
		$id_joueur = $emplacement1['id_joueur'];

		$query_2 = "SELECT * FROM equipes, equipes_joueur WHERE equipes_joueur.id_joueur = '$id_joueur' AND equipes.id_equipes = equipes_joueur.id_equipes";
		$prepared_statement_2 = $connexion->prepare($query_2);
		$prepared_statement_2->execute();
		$team = array();
		while($emplacements2 = $prepared_statement_2->fetch(PDO::FETCH_ASSOC)) 
		{					
			$team[] = $emplacements2['nom'];        
		}
		$emplacement1['team'] = implode(', ', $team);
				
		$query_3 = "SELECT nomTournoi FROM joueurtournoi,tournoi WHERE joueurtournoi.id_joueur = '$id_joueur' AND tournoi.id_tournoi = joueurtournoi.id_tournoi";
		 
		$prepared_statement_3 = $connexion->prepare($query_3);
		$prepared_statement_3->bindValue("id_joueur", $id_joueur, PDO::PARAM_INT);
		$prepared_statement_3->execute();

		$nomTournoi = array();
		while($equipe = $prepared_statement_3->fetch()) 
		{
			$nomTournoi[] = $equipe['nomTournoi']; 
		} 
		$emplacement1['nomTournoi'] = implode(', ', $nomTournoi);

		$emplacements1[] = $emplacement1;
	}

	// Selection des pseudos	
	$query = "SELECT id_emplacement, pseudo FROM joueurs ORDER BY pseudo ASC";
	$prepared_statement = $connexion->prepare($query);
	$prepared_statement->execute();
	$joueurs = array();
	while($joueur = $prepared_statement->fetch(PDO::FETCH_ASSOC)) 
	{
		$joueurs[] = $joueur;
	}

	// Selection des équipes	
	$sql = "SELECT id_equipes,nom from equipes ORDER BY nom ASC ";
	$query = $connexion->prepare($sql);
	$query->execute();
	$equipes = array();
	while($equipe=$query->fetch(PDO::FETCH_ASSOC)) 
	{
		$equipes[] = $equipe;
	}
	
	// send to the template
	$smarty->assign("con", $con);
	$smarty->assign("SESSION", $_SESSION);
	$smarty->assign("next_matches", getNextMatches());
	$smarty->assign("navTournois", getNavTournois());
	$smarty->assign("emplacements", $emplacements);
	$smarty->assign("emplacements1", $emplacements1);
	$smarty->assign("joueurs", $joueurs);
	$smarty->assign("equipes", $equipes);
	
	$smarty->display('templates/default/joueurs.tpl');
?>