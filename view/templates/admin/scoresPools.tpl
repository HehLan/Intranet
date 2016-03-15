<!DOCTYPE html>
<html lang="fr">
<head>
	{include file="admin/meta.tpl"}
	<link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/scores.css" />
	<script type="text/javascript" src="{#adminAssets#}/js/scores.js"></script>
</head>
<body role="document">
	{include file="admin/header.tpl" con=$con }
	{include file="admin/nav.tpl"  con=$con }	
	<div id="container">
		<div id="contenu">
			<h1>Qualifications {$tournoi['nomTournoi']}</h1>
			<form method="POST" action="scores_save.php">
				<input type="hidden" name="id_tournoi" value="{$tournoi.id_tournoi}">
				<input type="SUBMIT" value="Enregistrer">
				<br>
				{foreach from=$groupes item=groupe}
					<table class="table_pool_lol">
						<tr>
							<th class="th_titre_pool_lol" colspan="{($groupe['nbrteam']+2)}">{$groupe['nom_groupe']}</th>
						</tr>
						<tr>
							<td class="td_vide_pool_lol"></td>
							{for $i=0 to $groupe['nbrteam']-1}
								<th class="th_team2_pool_lol">{$groupe.teams[$i]['nom']}</th>
							{/for}
							<th class="th_score_pool_lol">score</th>
						</tr>
						{foreach from=$groupe.teams item=team}
							<tr class="tr_pool_lol">
								<th class="th_team_pool_lol">{$team['nom']}</th>
								{foreach from=$groupe.teams item=team2}
									{if $team.id == $team2.id}
										<td class="td_X_pool_lol">X</td>
									{else}
										<td class="td_{$couleur}pool_lol">
											<a href="#" onclick="popup_heure({$matchs[$team['id']][$team2['id']]['id_match']})">
												{$matchs[$team.id][$team2.id].heure}
											</a>
											<br />
											<input type="checkbox" name="cb_m_{$matchs[$team['id']][$team2['id']]['id_match']}_p_{$team['id']}" 
												value="1" onclick="active_score({$matchs[$team['id']][$team2['id']]['id_match']},{$team['id']})" />
											<input type="text" name="score_m_{$matchs[$team['id']][$team2['id']]['id_match']}_p_{$team['id']}" 
												id="score_m_{$matchs[$team['id']][$team2['id']]['id_match']}_p_{$team['id']}" 
												value="{$matchs[$team['id']][$team2['id']]['score']}" size="4" disabled="disabled" />
										</td>
									{/if}
								{/foreach}	
								<td class="td_score_pool_lol">{$team.total}</td>
							</tr>	
						{/foreach}
				</table>
				<br><br>
			{/foreach}
			</form>
		</div>
	</div>
    <!-- gap to have the footer in the bottom of the window -->
	<div style="height: 55px;">
	
	</div>
	{include file="admin/footer.tpl"}
	<div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
		<input type="button" value="annuler" onclick="popup_close()" />
		<form method="POST" action="modifier_heure.php">
		<input type="hidden" name="id_match" id="input_id_match" value="0" />
		<input type="hidden" name="id_tournoi" value="{$tournoi.id_tournoi}" />
		<input type="hidden" name="page" value="scores" />
		vendredi <input type="radio" name="jour" value="vendredi"> / samedi <input type="radio" name="jour" value="samedi"> / dimanche <input type="radio" name="jour" value="dimanche"><br>
		Heure : <select name="heure">
		{for $i=0 to 24}
			<option>
				{if $i<10}0{/if}
				{$i}
			</option>
		{/for}
		</select>h<select name="minute">
		{for $i=0 to 60 step 5}
			<option>
				{if $i<10}
					0
				{else}
					{$i}
				{/if}
			</option>
		{/for}
		</select>
		<br />
		<input type="submit" value="Modifier" /><br>
	</div>
</body>
</html>