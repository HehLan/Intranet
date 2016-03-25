{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"}  
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/tournoisPools.css" />
        <link type="text/css" rel="stylesheet" href="{#domain#}/lib/jQuery/jquery.group.min.css" />
    </head>
    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        
        <!-- Header and Rules -->
        {if isset($tournoi.header)}
            <div id="headerTournoi">
                <img id="headerTournoiImg" src="{#domain#}/src/{$tournoi.header}" alt="{$tournoi.nomTournoi}" />
            </div>
        {/if}
        {if isset($tournoi.reglement)}
            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="{#domain#}/src/{$tournoi.reglement}"> cliquez ici </a>
            </div>
        {/if}
        
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    
                    <h1>Groupes de qualifications de {$tournoi.nomTournoi}</h1>
                    
                    <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p>
                    {if $nbr_lb2>0}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a></p>
                    {/if}
                    {if $nbr_lb3>0}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                    {/if}

                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            {foreach name=playerLoop from=$groupes item=groupe}
                                {if $smarty.foreach.playerLoop.first}
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}" class="active"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {else}  
                                    <li role="presentation" id="nav-tab-{$groupe['id_groupe']}"><a href="#tab-{$groupe['id_groupe']}" aria-controls="tab-{$groupe['id_groupe']}" role="tab" data-toggle="tab">{$groupe['nom_groupe']}</a></li>
                                {/if}
                            {/foreach}
                        </ul>
                    </div> 
                        
                    <div class="tab-content">
                        {foreach name=playerLoop from=$groupes item=groupe}
                            {if $smarty.foreach.playerLoop.first}
                                <div role="tabpanel" class="tab-pane active" id="tab-{$groupe['id_groupe']}">     
                            {else}                            
                                <div role="tabpanel" class="tab-pane" id="tab-{$groupe['id_groupe']}">
                            {/if}
                                    <div class="row">    
                                        
                                        <!-- Old system -->
                                        <div class="col-lg-12">
                                            {* <h4>Informations pratiques</h4> *}
                                            {* <ul>  *}
                                                {$n = 0} {* nombre d'équipe *}
                                                {$r = 0} {* nombre de rounds *}
                                                {section name=sec1 loop=$groupe.teams}  
                                                    {$n = $n + 1}                                                 
                                                {/section}
                                                {if $n % 2 == 0} {* si pair *}
                                                    {$r = $n - 1}
                                                {else} {* si impair *}
                                                    {$r = $n}
                                                {/if}
                                                    
                                                {* Parcours de la matrice *}
                                                {for $a=1 to $n}
                                                    {for $b=1 to $n}
                                                        {* How to get hours here ? *}
                                                    {/for}
                                                {/for}
                                                
                                                {for $i=1 to $r}
                                                    {* <li> Round {$i} : How to set the hours here ? </li> *}
                                                {/for}                                                                                                  
                                               
                                            {* </ul> *}                                            
                                            
                                            <h2>Matches</h2>
                                            <table class="col-lg-12 table_pool">
                                                <tr>
                                                    <th class="th_title_pool"></th>
                                                    {section name=sec1 loop=$groupe.teams}
                                                        <th class="th_team2_pool">{$groupe.teams[sec1].nom}</th>
                                                    {/section}
                                                </tr>
                                                {section name=sec1 loop=$groupe.teams}
                                                    <tr class="tr_pool">
                                                        <th class="th_team_pool">{$groupe.teams[sec1].nom}</th>
                                                        {section name=sec2 loop=$groupe.teams}
                                                            {if $groupe.teams[sec1].id == $groupe.teams[sec2].id}
                                                                <td class="td_x_pool">X</td>
                                                            {else}
                                                                <td class="td_{$groupe.resultTeams[sec1][sec2].couleur}pool">
                                                                    {$groupe.resultTeams[sec1][sec2].valeur}

                                                                    <!-- manage link to access the pick -->
                                                                    {if $groupe.resultTeams[sec1][sec2].isPickActive && 
                                                                        ($groupe.teams[sec1].nom == $peekData.teamName || $groupe.teams[sec2].nom == $peekData.teamName) && 
                                                                        ($peekData.idTournoi == 1)}
                                                                        <div>
                                                                            <a target="_blank" href="pick.php?id={$peekData.userId}&idMatch={$groupe.resultTeams[sec1][sec2].id_match}" style="color : red;">Pick</a>
                                                                        </div>
                                                                    {/if}
                                                                </td>
                                                            {/if}
                                                        {/section}
                                                    </tr>
                                                {/section}
                                            </table>
                                        </div>
                                           
                                        <!-- New System -->
                                        <div id="components" class="col-lg-12">
                                            <h2>Classement et résultats</h2>
                                            <div id="bracket-{$groupe['id_groupe']}"></div>                                            
                                        </div>
                                    </div>
                                </div>
                        {/foreach}
                    </div>  
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

          
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>
     
        
        {foreach from=$groupes item=groupe}
            {include file="default/assets/js/tournoisPools.js.tpl"
                tournoi=$tournoi
                groupe=$groupe
            }
        {/foreach}
        
    </body>
</html>