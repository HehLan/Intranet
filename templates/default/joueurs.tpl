{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="{#templatePath#}meta.tpl"}
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/joueur.js"></script>
    </head>

    <body role="document">
        {include file="{#templatePath#}header.tpl" con=$con next_matches=$next_matches}
        {include file="{#templatePath#}nav.tpl"  con=$con navTournois=$navTournois}
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-8 col-xs-12 map_cafetaria">
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
                                <u>Tournoi : {$emplacements1[sec1].nomTournoi}</u>
                            </span>
                        </div>
                    {/section}
                </div>		
                <div id="tabs" class="col-lg-2 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(1);">Joueur</a>
                        </div>	
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(2);">Equipe</a>
                        </div>
                    </div>

                    <!-- Player Tab -->
                    <div id="tabs-1">
                        <!-- Player Search Function -->
                        <form>
                            <label for="recherche_joueur">Rechercher un pseudo :</label>
                            <input type="text" name="recherche_joueur" id="recherche_joueur" />
                        </form>

                        <!-- Result Displaying -->
                        <div id="results" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>                       
             
                        
                        <!-- Player List -->
                        {foreach name=playerLoop from=$joueurs item=joueur}
                            {if $smarty.foreach.playerLoop.first}
                                <u>Liste des joueurs :</u>
                                <br>
                                <ul id="liste_joueur">
                            {/if}
                            <li>
                                <a class='ClassPseudo' 
                                    {if $smarty.foreach.playerLoop.index % 2 == 0}
                                        style='background-color:#212121'                                                                        
                                    {else}
                                        style='background-color:#262626'
                                    {/if}
                                    value='{$joueur.id_emplacement}'>{$joueur.pseudo}</a>
                            </li>
                            {if $smarty.foreach.playerLoop.last}
                                </ul>
                            {/if} 
                        {foreachelse}
                            <p>No players !</p>
                        {/foreach}               
                        
                        
                    </div>

                    <!-- Team Tab -->
                    <div id="tabs-2" style="display:none;">
                        <!-- Team Search Function -->
                        <form>
                            <label for="recherche_equipe">Rechercher une équipe :</label>
                            <input type="text" name="recherche_equipe" id="recherche_equipe" />
                        </form>

                        <div id="results_equipe" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>

                        <div>
                            <u>Liste des Equipes :</u>
                            <br>
                            <ul id="liste_equipe">
                                {section name=sec1 loop=$equipes}
                                    <li><a class='ClassEquipe' value='{$equipes[sec1].id_equipes}'>{$equipes[sec1].nom}</a></li>
                                    {/section}
                            </ul>
                        </div>
                    </div>							
                    <div id="dialogEquipe_Emplacement" style="display:none;"></div>
                    <div id="dialogPseudo_Emplacement" style="display:none;"></div>
                </div>
            </div>
        </div>
        {include file="{#templatePath#}footer.tpl"}
    </body>
</html>