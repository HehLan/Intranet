{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}  
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.gracket.js"></script>
    </head>
    <body>
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}	
        
		<div id="container">
            <div id="contenu">
				<h1>
					{if $tournoi.id_tournoi != 2}
						Qualifications 
					{/if}
					{$tournoi.nomTournoi}
				</h1>
				{if $tournoi.id_tournoi != 2}
					<p>Cliquez ici pour voir les <a href="tournois.php?id={$tournoi.id_tournoi}">FINALES DES QUALIFICATIONS</a></p><br>
					{if $nbr_lb2>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a><br>{/if}
					{if $nbr_lb3>0} Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a><br>{/if}
				{/if}
				<br>
				<div class="contenu">
					{if {$matches|@count} > 0}
						<table>
							<tr>
								{for $c=$niveau to 0 step -1}
									<th> Round {1+$niveau-$c} </th>
								{/for}
							</tr>
							<tr>
								{for $c=$niveau to 0 step -1}
									<td>
										<table>
											{for $m=1 to $match_par_niveau[$c]}
												{if $c==0}
													{if $m==1}
													<tr class="tr_arbre_vide">
														<td class="td_finale_vide" colspan="3">
															FINALE
														</td>
													</tr>
													{elseif $m==2}
													<tr class="tr_arbre_vide">
														<td class="td_finale_vide" colspan="3">
															Petite Finale
														</td>
													</tr>
													{/if}
												{/if}
												<tr>
													<td class="td_arbre_gauche" rowspan="2">#{$tablo[$c][$m]}</td>
													<td class="td_arbre_team{$matches[$tablo[$c][$m]]['clr1']}">{$matches[$tablo[$c][$m]]['nom1']}</td>
													<td class="td_arbre_score{$matches[$tablo[$c][$m]]['clr1']}">{$matches[$tablo[$c][$m]]['score1']}</td>
													<td class="td_arbre_droite" rowspan="2">{$matches[$tablo[$c][$m]]['fleche']} {$matches[$tablo[$c][$m]]['id_parent']}</td>
												</tr>
												<tr>
													<td class="td_arbre_team{$matches[$tablo[$c][$m]]['clr2']}">{$matches[$tablo[$c][$m]]['nom2']}</td>
													<td class="td_arbre_score{$matches[$tablo[$c][$m]]['clr2']}">{$matches[$tablo[$c][$m]]['score2']}</td>							
												</tr>
												<tr class="tr_arbre_vide">
													<td class="td_arbre_vide" colspan="3"></td>
												</tr>
											{/for}
										</table>
									</td>
								{/for}
							</tr>
						</table>
					{else}
						Qualifications encore en cours.
					{/if}
				</div>
			</div>
		</div>
        {include file="default/footer.tpl"}
    </body>
</html>