{* Smarty *}
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/inscriptions.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/inscriptions.js"></script> 
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div id="InscriptionDesJoueursEquipesAuxTournois" class="col-lg-12">
                    <div class="row">
                        <!-- tournois avec equipes -->
                        {foreach from=$tab item=ligne}
                            <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>{$ligne['2']}</h4>
                                <div class="list" id="ListeInscrit{$ligne['1']}">
                                    {foreach from=$donnees item=row}
                                        <div class="row teamItem">
                                            {if $row['id_tournoi'|cat:$ligne['1']] == $ligne['1']}
                                                <label class="col-lg-12"><input type='checkbox' checked value="{$row['id_equipes']}">{$row['nom']}</label>
                                            {else}
                                                <label class="col-lg-12"><input type='checkbox' value="{$row['id_equipes']}">{$row['nom']}</label>
                                            {/if}
                                        </div>
                                    {/foreach}
                                </div>
                                <center>
                                    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="{$ligne['1']}" value="Valider les inscriptions">
                                </center>
                            </div>                        
                        {/foreach}
                        
                        <!-- tournois individuels -->
                        {foreach from=$tabJT item=ligne}
                            <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>{$ligne['2']}</h4>
                                <div class="list" id="ListeInscritJT{$ligne['1']}">
                                    {foreach from=$donneesJT item=row}
                                        <div class="row joueurItem">
                                            {if $row['id_tournoi'|cat:$ligne['1']] == $ligne['1']}
                                                <label class="col-lg-6"><input type="checkbox" checked value="{$row['id_joueur']}">{$row['pseudo']}</label>
                                            {else}
                                                <label class="col-lg-6"><input type="checkbox" value="{$row['id_joueur']}">{$row['pseudo']}</label>                                    
                                            {/if}
                                            <input class="col-lg-5" type="text" id="Joueur{$ligne['1']}{$row['id_joueur']}" value="{$row['pseudoJeux'|cat:$ligne['1']]}">
                                        </div>
                                    {/foreach}
                                </div>
                                <center>
                                    <input type="button" class="submitInscriptionJTAdmin" id="{$ligne['1']}" value="Valider les inscriptions">
                                </center>
                            </div>                        
                        {/foreach}                        
                    </div>
                </div>
            </div>
        </div>	
    
	{include file="admin/footer.tpl"}

    </body>
</html>