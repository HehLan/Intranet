{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}
	<link rel="stylesheet" type="text/css" href="{#assets#}/css/finalesRounds.css" />
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{#domain#}/lib/jQuery/jquery.bracket.min.css" />
       
        
        
    </head>
    <body>
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
                    <h1>
                        {if $tournoi.id_tournoi != 2}
                            Qualifications 
                        {/if}
                        {$tournoi.nomTournoi}
                    </h1>
                    {if $tournoi.id_tournoi != 2}
                        <p>Cliquez ici pour voir les <a href="tournois.php?id={$tournoi.id_tournoi}">QUALIFICATIONS</a></p><br>
                        {if $nbr_lb2>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a><p>
                        {/if}
                        {if $nbr_lb3>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        {/if}
                    {/if}
                    <br>	
                    {if {$matches|@count} > 0}
                        <table class="table_round">
                            <tr class="title_round">
                                {for $c=$niveau to 0 step -1}
                                    <th> Round {1+$niveau-$c} </th>
                                {/for}
                            </tr>
                            <tr>
                                {for $c=$niveau to 0 step -1}
                                    <td>
                                        <table class="table_round">
                                            {for $m=1 to $match_par_niveau[$c]}
                                                {for $j=1 to $matches[$tablo[$c][$m]]['maxj']}
                                                    {if $j==1}
                                                        {if $c==0 && $m==1}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    FINALE<br>
                                                                    {$matches[$tablo[$c][$m]]['heure']}
                                                                </td>
                                                            </tr>
                                                        {elseif $c==0 && $m==2}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    Petite Finale<br>{$matches[$tablo[$c][$m]]['heure']}
                                                                </td>
                                                            </tr>
                                                        {else}
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}">
                                                                    {$matches[$tablo[$c][$m]]['heure']}
                                                                </td>
                                                            </tr>
                                                        {/if}
                                                    {/if}
                                                    {if $j==1}
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur</th>
                                                            {for $ma=1 to $matches[$tablo[$c][$m]]['nbr_manche']}
                                                                <th class="th_arbre_joueur">M{$ma}</th>
                                                            {/for}
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                    {/if}
                                                    <tr>
                                                        {if $j==1}	
                                                            <td class="td_arbre_gauche" rowspan="{$matches[$tablo[$c][$m]]['maxj']}">#{$tablo[$c][$m]}</td>
                                                        {/if}
                                                        {if isset($matches[$tablo[$c][$m]][$j]['nom'])}
                                                            <td class="td_arbre_joueur">{$matches[$tablo[$c][$m]][$j]['nom']}</td>
                                                        {else}
                                                            <td class="td_arbre_joueur">TBA</td>
                                                        {/if}
                                                        {for $ma=1 to $matches[$tablo[$c][$m]]['nbr_manche']}
                                                            {if isset($scores[$tablo[$c][$m]][$j]['scores'][$ma])}
                                                                <td class="td_arbre_joueur_score">{$scores[$tablo[$c][$m]][$j]['scores'][$ma]}</td>
                                                            {else}
                                                                <td class="td_arbre_joueur_score">-</td>
                                                            {/if}
                                                        {/for}
                                                        {if isset($matches[$tablo[$c][$m]][$j]['score'])}	
                                                            <td class="td_arbre_joueur_total">{$matches[$tablo[$c][$m]][$j]['score']}</td>
                                                        {else}
                                                            <td class="td_arbre_joueur_total">0</td>
                                                        {/if}
                                                        {if $j==1}	
                                                            <td class="td_arbre_droite" rowspan="{$matches[$tablo[$c][$m]]['maxj']}">{$matches[$tablo[$c][$m]]['fleche']} {$matches[$tablo[$c][$m]]['id_parent']}</td>
                                                        {/if}
                                                    </tr>
                                                {/for}
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="{$matches[$tablo[$c][$m]]['nbr_manche'] + 4}"></td>
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
        
        
        <script>
            

var minimalData = {
    teams : [
      ["Team 1", "Team 2"], /* first matchup */
      ["Team 3", "Team 4"]  /* second matchup */
    ],
    results : [
      [[1,2], [3,4]],       /* first round */
      [[4,6], [2,1]]        /* second round */
    ]
  }
 
$(function() {
    $('#minimal .demo').bracket({
      init: minimalData /* data to initialize the bracket with */ })
  })
        </script>
    </body>
</html>