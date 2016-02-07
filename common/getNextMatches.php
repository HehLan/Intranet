<?php
function getNextMatches()
{
	global $con;
	global $connexion;
	
	if(!$con) return '';
	
	$sql = "SELECT DISTINCT m.id_match, m.heure, t.nomTournoi 
			FROM
				(
					matchs as m,
					tournoi as t,
					matchs_joueurs as mj,
					matchs_equipes as me,
					equipes_joueur as ej
				)
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
	$query = $connexion->prepare($sql);
	$query->bindValue('idj', $_SESSION['id_joueur'], PDO::PARAM_INT);

	if($query->execute())
		$next_matches= $query->fetchAll(PDO::FETCH_ASSOC);
	else
	{
		echo 'ERREUR SQL NEXT MATCHES';
		exit;
	}
	$nm = array();
	foreach($next_matches as $next_match)
	{
		$nm[] = array( "jour"	=>	get_jour_de_la_semaine($next_match['heure']),
					  "heure"	=>	get_heure($next_match['heure']),
					  "nom"		=>	$next_match['nomTournoi']);
	}
	
	return $nm;
}
?>
