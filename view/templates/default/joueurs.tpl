{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/joueurs.css" />
    </head>

    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-9 col-xs-12 map_cafetaria">
                    <img class="photo_cafetaria" src="{#assets#}/img/plan.jpg">
                    {section name=sec1 loop=$emplacements}
                        <div class='place' onclick='Click(this)' id="{$emplacements[sec1].id_emplacement}" style="
                             position: absolute;
                             top: {$emplacements[sec1].top}%;
                             left: {$emplacements[sec1].xy_left}%;
                             width: {$emplacements[sec1].width}%;
                             height: {$emplacements[sec1].height}%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                             {if $emplacements[sec1].id_joueur !=0}
                                 background:#337ab7;
                             {else}
                                 background:initial;
                             {/if}">
                            {$emplacements[sec1].numero}
                        </div>
                    {/section}
                    {section name=sec1 loop=$emplacements1}
                        <div class='tooltip' style='position:absolute;
                             top: {$emplacements1[sec1].top}%;
                             left: {$emplacements1[sec1].xy_left}%;
                             width: {$emplacements1[sec1].width}%;
                             height: {$emplacements1[sec1].height}%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> {$emplacements1[sec1].pseudo}</strong>
                                <br>
                                Equipe : {$emplacements1[sec1].team}
                                <br>
                                <u>Tournois : {$emplacements1[sec1].nomTournoi}</u>
                            </span>
                        </div>
                    {/section}
                </div>		

                <div id="tabs" class="col-lg-3 col-xs-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="col-lg-6 col-xs-6 active onglet">
                            <a href="#tabs-1" aria-controls="tabs-1" role="tab" data-toggle="tab" onclick="show_tab(1);">Joueurs</a>
                        </li>	
                        <li role="presentation" class="col-lg-6 col-xs-6 onglet">
                            <a href="#tabs-2" aria-controls="tabs-2" role="tab" data-toggle="tab" onclick="show_tab(2);">Equipes</a>
                        </li>
                    </ul>

                    <!-- Player Tab -->
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1">
                        <!-- Player Search Function -->
                        <form class="searchBox">
                            <label for="recherche_joueur">Rechercher un pseudo :</label>
                            <input type="text" name="recherche_joueur" id="recherche_joueur" />
                        </form>

                        <!-- Result Displaying -->
                        <div id="results" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>                       

                        <!-- Joueur List -->
                        {foreach name=playerLoop from=$joueurs item=joueur}
                            {if $smarty.foreach.playerLoop.first}
                                <ul id="liste_joueur">
							{/if}
							<li>
								<a class='ClassPseudo entry_tab_list {if $smarty.foreach.playerLoop.index % 2 == 0}even_entry_tab_list{else}odd_entry_tab_list{/if}'
								   value='{$joueur.id_emplacement}'>
								   {$joueur.pseudo}
								</a>
							</li>
							{if $smarty.foreach.playerLoop.last}
								</ul>
                            {/if} 
                        {foreachelse}
                            <p>Pas de joueur !</p>
                        {/foreach}               
                    </div>

                    <!-- Team Tab -->
                    <div role="tabpanel" class="tab-pane fade" id="tabs-2" style="display: none">
                        <!-- Team Search Function -->
                        <form class="searchBox">
                            <label for="recherche_equipe">Rechercher une équipe :</label>
                            <input type="text" name="recherche_equipe" id="recherche_equipe" />
                        </form>

						<!-- Result Displaying -->
                        <div id="results_equipe" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>

						<!-- Equipe List -->
						{foreach name=equipeLoop from=$equipes item=equipe}
                            {if $smarty.foreach.equipeLoop.first}
                                <ul id="liste_equipe">
							{/if}
							<li>
								<a class='ClassEquipe entry_tab_list {if $smarty.foreach.equipeLoop.index % 2 == 0}even_entry_tab_list{else}odd_entry_tab_list{/if}'
									value='{$equipe.id_equipes}'>
									{$equipe.nom}
								</a>
							</li>
							{if $smarty.foreach.equipeLoop.last}
                                </ul>
                            {/if} 
                        {foreachelse}
                            <p>Pas d'équipe !</p>
                        {/foreach}
                    </div>							
                    <div id="dialogEquipe_Emplacement" style="display:none;"></div>
                    <div id="dialogPseudo_Emplacement" style="display:none;"></div>
                </div>
            </div>

        </div>
        {include file="default/footer.tpl"}
		<script type="text/javascript" src="{#assets#}/js/joueurs.js"></script>
    </body>
</html>
