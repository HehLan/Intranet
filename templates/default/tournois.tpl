{config_load file="templates/default/paths.conf"}
<!DOCTYPE HTML>
<html>
	<head>
		{include file="{#templatePath#}meta.tpl"}  
		<script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
		<script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
	</head>

	<body>
		{include file="{#templatePath#}header.tpl" con=$con SESSION=$SESSION next_matches=$next_matches}
		{include file="{#templatePath#}nav.tpl"  con=$con SESSION=$SESSION navTournois=$navTournois}
	
	
		<div class="container-fluid" id="container">
			<div class="row" id="contenu">
				<div class="col-lg-offset-1 col-lg-10">
					<h1>
						{if $tournoi.id_tournoi != 2}
							Qualifications 
						{/if}
						{$tournoi.nomTournoi}
					</h1>
					{if $tournoi.id_tournoi != 2}
						Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a><br>
						{if $nbr_lb2>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a><br>{/if}
						{if $nbr_lb3>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a><br>{/if}
					{/if}
					<br>
					{section name=groupe loop=$groupes}
						{if $jpt > 1}
							<div class="row table_pool_row">
								<table class="col-lg-12 table_pool">
									<tr>
										<th class="th_title_pool" colspan="{$nbrteam|@count +2}"> 
											{$groupes[groupe].nom_groupe}
										</th>
										{section name=sec1 loop=$groupes[groupe].teams}
											<th class="th_team2_pool">{$groupes[groupe].teams[sec1].nom}</th>
										{/section}
											<th class="th_score_pool">Scores</th>
									</tr>
									{section name=sec1 loop=$groupes[groupe].teams}
										<tr class="tr_pool">
											<th class="th_team_pool">{$groupes[groupe].teams[sec1].nom}</th>
											{section name=sec2 loop=$groupes[groupe].teams}
												{if $groupes[groupe].teams[sec1].id == $groupes[groupe].teams[sec2].id}
													<td class="td_x_pool">X</td>
												{else}
													<td class="td_{$groupes[groupe].resultTeams[sec1][sec2].couleur}pool">{$groupes[groupe].resultTeams[sec1][sec2].valeur}</td>
												{/if}
											{/section}
											<td class="td_score_pool">{$totaux[$groupes[groupe].teams[sec1].id]}</td>
										</tr>
									{/section}
								</table>
							</div>
						{else}
							<table class="table_round">
									<tr>
										<th class="title_round" colspan="{$tournoi.nombreManche|@count}">
											{$groupes[groupe].nom_groupe} ( {$groupes[groupe].jour} {$groupes[groupe].heure} )
										</th>
										{for $idManche=1 to $tournoi.nombreManche}
											<th class="th_manche_round">Manche {$idManche}</th>
										{/for}
										<th class="th_points_round">Points</th>
									</tr>
									{foreach from=$groupes[groupe].joueurs item=joueur}
										<tr>
											<td class="td_pseudo_round">{$joueur.pseudo}</td>
												{for $idManche=1 to $tournoi.nombreManche}
													<td class="td_score_round">{$joueur.scores[$idManche]}</td>
												{/for}
											<td class="td_total_round">{$joueur.total}</td>
										</tr>
									{/foreach}
									{foreach from=$groupes[groupe].inscrits item=inscrit}
										{if $inscrit.ok}
											<tr>
												<td class="td_pseudo_round">{$inscrit.nom}</td>
												{for $idManche=1 to $tournoi.nombreManche}
													<td class="td_score_round"></td>
												{/for}
												<td class="td_total_round"></td>
											</tr>
										{/if}
									{/foreach}
							</table><br><br>
						{/if}
					{/section}
				</div>
			</div>
		</div>
		{include file="{#templatePath#}footer.tpl"}
	</body>
</html>