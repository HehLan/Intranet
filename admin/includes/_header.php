<header id="header" class="row" >
	<div id="banner" class="col-lg-9 col-sm-9 col-xs-12" >
		<a href="index.php">
		    <img src="img/logoheh.png" alt="HEHLan" width="250px">
		</a>
	</div>
	<div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
		<?php
			if($con)
			{
				echo 'Bienvenue à toi '.$_SESSION['login'].', <a href="common/deco.php">se déconnecter</a><br>';
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
				$first = true;
				foreach($next_matches as $next_match)
				{
					if($first)
						echo '<strong>Prochains matchs</strong><br>';
					echo get_jour_de_la_semaine($next_match['heure']).' '.get_heure($next_match['heure']).' '.$next_match['nomTournoi'].'<br>';
					$first = false;
				}
			}
		?>
	</div>	     
</header>