{* Smarty *}
<!DOCTYPE html>
<html>
    <head> 
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/joueurs.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/joueurs.js"></script> 
    </head>

    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con } 

        <div id="container" class="container-fluid">
            <div id="contenu">
                <div id="ListejoueurAdmin">
                    <fieldset>
                        <legend>Liste des joueurs</legend>
                        <table class="listeJoueurs">
                            <thead>
                                <tr>
                                    <th>Les Joueurs</th>
                                    <th>Tournois</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="listejoueurAdmin" >
                                            {foreach from=$joueurs item=joueur}
                                               <h6 class="joueurAdmin" value="{$joueur['id_joueur']}">{$joueur['pseudo']}</h6> 
                                            {/foreach}
                                        </div>
                                    </td>
                                    <td>
                                        <div id="listeTournoisInscritDuJoueur">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
                                        Equipes du joueur
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <div id="EquipesDuJoueurAdmin" style="height:150px;">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>    
                    </fieldset>
                    <div id="infoEquipeAdmin" style="display: none"></div>
                </div>
            </div>	
        </div> 

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 150px;">

        </div>

        {include file="admin/footer.tpl"  con=$con } 
    </body>
</html>