{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/finalesPools.css" />		
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
                    <p id="matchCallback"></p>
                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}
        
        <!-- jquery-bracket -->
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.bracket.min.js"></script>
        
        {include file="default/assets/js/finalesPools.js.tpl"
            tournoi=$tournoi
        }

    </body>
</html>