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
                            Qualifications 
                        {/if}
                        {$tournoi.nomTournoi}
                    </h1>
                    {if $tournoi.id_tournoi != 2}
                        <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}">FINALES DES PGM'S (gold)</a></p>
                        {if $nbr_lb2>0} 
                            <p>Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=2">FINALES DES LOSERS (silver)</a></p>
                        {/if}
                        {if $nbr_lb3>0} 
                            Cliquez ici pour voir les <a href="finales.php?id={$tournoi.id_tournoi}&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        {/if}
                    {/if}

                    <div id="sc2demo" class="bracket"></div>

                </div>
            </div>
        </div>

        {include file="default/footer.tpl"}


        <script type="text/javascript" src="{#domain#}/lib/baconjs/Bacon-1ab32ffb.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/lodash/lodash-2.2.1.min.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/live/live.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/handlebars/handlebars.1.0.0.js"></script>
        <script type="text/javascript" src="{#domain#}/lib/jQuery/jquery.group.min.js"></script>


        <script>
            var groupData = {
                teams: [
                    { id: 10, name: "YoDa", faction: "t" },
                    { id: 11, name: "First", faction: "p" },
                    { id: 12, name: "MC", faction: "p" },
                    { id: 13, name: "Ret", faction: "z" },
                    { id: 14, name: "Kas", faction: "t" },
                    { id: 15, name: "XIorD", faction: "z" }
                ],
                matches: [
                    { "id": 0, "round": 1, "a": { "team": 0, "score": 1 }, "b": { "team": 1, "score": 2 } },
                    { "id": 1, "round": 1, "a": { "team": 0, "score": 2 }, "b": { "team": 2, "score": 1 } },
                    { "id": 2, "round": 1, "a": { "team": 1, "score": 2 }, "b": { "team": 2, "score": 1 } },
                    { "id": 3, "round": 2, "a": { "team": 0, "score": 2 }, "b": { "team": 3, "score": 0 } },
                    { "id": 4, "round": 2, "a": { "team": 1, "score": 0 }, "b": { "team": 3, "score": 2 } },
                    { "id": 5, "round": 2, "a": { "team": 2, "score": 0 }, "b": { "team": 3, "score": 2 } },
                    { "id": 6, "round": 3, "a": { "team": 0, "score": 2 }, "b": { "team": 4, "score": 1 } },
                    { "id": 7, "round": 3, "a": { "team": 1, "score": 2 }, "b": { "team": 4, "score": 0 } },
                    { "id": 8, "round": 3, "a": { "team": 2, "score": 2 }, "b": { "team": 4, "score": 0 } },
                    { "id": 9, "round": 4, "a": { "team": 3, "score": 2 }, "b": { "team": 4, "score": 1 } },
                    { "id": 10, "round": 4, "a": { "team": 0, "score": 2 }, "b": { "team": 5, "score": 0 } },
                    { "id": 11, "round": 4, "a": { "team": 1, "score": 2 }, "b": { "team": 5, "score": 1 } },
                    { "id": 12, "round": 5, "a": { "team": 2, "score": 2 }, "b": { "team": 5, "score": 1 } },
                    { "id": 13, "round": 5, "a": { "team": 3, "score": 2 }, "b": { "team": 5, "score": 0 } },
                    { "id": 14, "round": 5, "a": { "team": 4, "score": 2 }, "b": { "team": 5, "score": 1 } }
                ]
            };

            function faction(faction) {
                colors = { 't': "blue", 'z': "purple", 'p': "goldenrod" };
                return '<span style="padding: 2px; color: white;'
                        + 'display: inline-block; text-align: center;'
                        + 'font-size: 10px; width: 12px; margin: 0 3px;'
                        + 'background-color: ' + colors[faction] + '">' + faction + '</span>';
            };

            function customLabeler(team) {
                return faction(team.faction) + ' ' + team.name;
            }

            $(function () {
                $('#sc2demo').group({
                    init: groupData, labeler: customLabeler
                });
            });
        </script>


    </body>
</html>