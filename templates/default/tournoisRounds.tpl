{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="meta.tpl"}  
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
    </head>
    <body>
        {include file="header.tpl" con=$con next_matches=$next_matches}
        {include file="nav.tpl"  con=$con navTournois=$navTournois}	
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
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p><br>
                        {if $nbr_lb2>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a><br>{/if}
                        {if $nbr_lb3>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a><br>{/if}
                    {/if}
                    <br>
                    {section name=groupe loop=$groupes}
						<table class="table_round">
							<tr>
								<th class="title_round" colspan="{$tournoi.nombreManche+2}">
									{$groupes[groupe].nom_groupe} ( {$groupes[groupe].jour} {$groupes[groupe].heure} )
								</th>
							</tr>
							<tr>
								<th class="th_manche_round" >
									Participants
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
						</table><br><br>
                    {/section}
                </div>
            </div>
        </div>
        {include file="footer.tpl"}
    </body>
</html>