{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/finalesPools.css" />		
        
        
        <!-- jquery-bracket-world -->
        <!--<link href="{#domain#}/lib/jQuery/jquery.bracket-world.css" rel="stylesheet">-->
        
        
        <!-- jquery-bracket -->
        <!--<script type="text/javascript" src="{#domain#}/lib/jQuery/jquery-1.6.2.min.js"></script>-->
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
                        <p>Cliquez ici pour voir les <a href="tournois.php?id={$tournoi.id_tournoi}">QUALIFICATIONS</a></p>
                        {if $nbr_lb2>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a>
                        {/if}
                        {if $nbr_lb3>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a>
                        {/if}
                    {/if}
                    
                    
                    <div id="bracket-hots" class="bracket"></div>
                </div>
            </div>
        </div>
                    
                    
                    
                    
                    
                    <!--
                    
                    {if {$matches|@count} > 0}
                        <div class="table-responsive col-lg-12">
                            <table class="table table-condensed" id="my-table">
                                <thead id="my-thead">
                                    <tr>
                                        {for $c=$niveau to 0 step -1}
                                            <th>Pool {1+$niveau-$c}</th>
                                        {/for}
                                    </tr>
                                </thead>
                                <tbody id="my-tbody">
                                    <tr>
                                        {for $c=$niveau to 0 step -1}
                                            <td>
                                                <table class="my-table-pool">
                                                    <tbody class="my-tbody-pool">
                                                        {for $m=1 to $match_par_niveau[$c]}
                                                            {if $c==0}
                                                                {if $m==1}
                                                                    <tr class="my-tr-finale">
                                                                        <td class="my-td-finale" colspan="3">
                                                                            FINALE
                                                                        </td>
                                                                    </tr>
                                                                {elseif $m==2}
                                                                    <tr class="my-tr-petite-finale">
                                                                        <td class="my-td-petite-finale" colspan="3">
                                                                            Petite Finale
                                                                        </td>
                                                                    </tr>
                                                                {/if}
                                                            {/if}
                                                            <tr>
                                                                <td class="my-td-number" rowspan="2">#{$tablo[$c][$m]}</td>
                                                                <td class="my-td-team-1 team-{$matches[$tablo[$c][$m]]['clr1']}">{$matches[$tablo[$c][$m]]['nom1']}</td>
                                                                <td class="my-td-score score-{$matches[$tablo[$c][$m]]['clr1']}">{$matches[$tablo[$c][$m]]['score1']}</td>
                                                                <td class="my-td-arrow" rowspan="2"><i class="fa fa-long-arrow-right"></i> {$matches[$tablo[$c][$m]]['id_parent']}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="my-td-team-2 team-{$matches[$tablo[$c][$m]]['clr2']}">{$matches[$tablo[$c][$m]]['nom2']}</td>
                                                                <td class="my-td-score score-{$matches[$tablo[$c][$m]]['clr2']}">{$matches[$tablo[$c][$m]]['score2']}</td>							
                                                            </tr>
                                                        {/for}
                                                    </tbody>
                                                </table>
                                            </td>
                                        {/for}
                                    </tr>
                                </tbody> 
                            </table>                                    
                        </div>
                    {else}
                        Qualifications encore en cours.
                    {/if}                      
                </div>
                    
                    -->
                    
                    
           
        
        
               
        
        

        
        {include file="default/footer.tpl"}
        
        
        <!-- jquery-bracket-world -->
        <!--<script src="{#domain#}/lib/jQuery/jquery-2.0.3.min.js"></script>-->
        <!--<script src="{#domain#}/lib/jQuery/jquery.bracket-world.min.js"></script>-->
        
        <!-- jquery-bracket -->
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>
        {include file="default/finalesPools.js.tpl" 
            niveau=$niveau  
            match_par_niveau=$match_par_niveau
            matches=$matches
            tablo=$tablo
            tournoi=$tournoi
            nbr_lb2=$nbr_lb2
            nbr_lb3=$nbr_lb3
team1_name=$team1_name
        }
        
       
   
       
        
    </body>
</html>