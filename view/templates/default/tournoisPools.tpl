{* Smarty *}
<!DOCTYPE HTML>
<html>
    <head>
        {include file="default/meta.tpl"}  
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/tournoisPools.css" />
        <link type="text/css" rel="stylesheet" href="{#domain#}/lib/jQuery/jquery.group.min.css" />
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
                            Groupes de qualifications de {$tournoi.nomTournoi}
                        {else}
                            Championnat de {$tournoi.nomTournoi}
                        {/if}                        
                    </h1>
                    
                    {if $tournoi.id_tournoi != 2}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p>
                        {if $nbr_lb2>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a></p>
                        {/if}
                        {if $nbr_lb3>0}
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        {/if}
                    {/if}
                    
                   
                    {if $tournoi.id_tournoi != 2}
                        <div id="bloc_tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-group-1" aria-controls="tab-group-1" role="tab" data-toggle="tab">Groupe 1</a></li>
                                <li role="presentation"><a href="#tab-group-2" aria-controls="tab-group-2" role="tab" data-toggle="tab">Groupe 2</a></li>
                                <li role="presentation"><a href="#tab-group-3" aria-controls="tab-group-3" role="tab" data-toggle="tab">Groupe 3</a></li> 
                            </ul>
                        </div>                
                        <div class="tab-content">
                            <!-- tab-group-1 -->
                            <div role="tabpanel" class="tab-pane active" id="tab-group-1">
                                <div id="bracket"></div>
                            </div>
                            <!-- tab-group-2 -->
                            <div role="tabpanel" class="tab-pane" id="tab-group-2">
                                <div id="bracket-2"></div>
                            </div>
                            <!-- tab-group-3 -->
                            <div role="tabpanel" class="tab-pane" id="tab-group-3">
                                <div id="bracket-3"></div>
                            </div>
                        </div>
                    {else}
                        <div id="bracket-1"></div>
                    {/if}
       

                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}

        
        
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>
     
        {include file="default/assets/js/tournoisPools.js.tpl"
            tournoi=$tournoi
        }        
        
        
    </body>
</html>