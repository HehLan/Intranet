{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/finalesPools.css" />		
        
        
        <!-- jquery-bracket-world -->
        <!--<link href="{#domain#}/lib/jQuery/jquery.bracket-world.css" rel="stylesheet">-->
        
        
        <!-- jquery-bracket -->
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
                    
                    
                    <div id="bracket-pools" class="bracket"></div>
                </div>
            </div>
        </div>

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
            teams=$teams
            scores1=$scores1
            scores2=$scores2
        }
        
       
   
       
        
    </body>
</html>