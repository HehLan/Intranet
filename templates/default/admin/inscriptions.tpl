{* Smarty *}
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}    
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script>
            $(document).ready(function() {

                $( ".submitInscriptionEquipesTournoiAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var i=0;
                    $( "#ListeInscrit"+id+" input[type=checkbox]:checked").each(function(){

                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritEquipe.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

                        }
                    });
                });

                $( ".submitInscriptionJTAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var pseudoJeux='';
                    var i=0;
                    $( "#ListeInscritJT"+id+" input[type=checkbox]:checked").each(function(){
                        //pseudoJeux+="&pseudoJeux["+i+"]="+$( "#Joueur"+id+$(this).val() ).val();
                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritJoueur.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

                        }
                    });
                });

            });
        </script>  
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
	<div id="container">
            <div id="contenu">
                <div id="InscriptionDesJoueursEquipesAuxTournois" >
                    <!-- tournois avec equipes -->
                    {foreach from=$tab item=ligne}
                        <div class='ListePourInscrireTournoi'>
                            <h6>{$ligne[2]}</h6>
                            <div id="ListeInscrit{$ligne[1]}">
                                {foreach from=$donnees item=row}
                                    {if $row['id_tournoi'+$ligne[1]] == $ligne[1]}
                                        <label><input type='checkbox' checked value="{$row['id_equipes']}">{$row['nom']}</label><br>
                                    {else}
                                        <label><input type='checkbox' value="{$row['id_equipes']}">{$row['nom']}</label><br>
                                    {/if}
                                {/foreach}
                            </div>
                            <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="{$ligne[1]}" value="Valider les inscriptions">
                        </div>                        
                    {/foreach}             
                    <!-- tournois individuels -->
                    {foreach from=$tabJT item=ligne}
                        <div class='ListePourInscrireTournoi'>
                            <h6>{$ligne[2]}</h6>
                            <div id="ListeInscritJT{$ligne[1]}">
                                {foreach from=$donneesJT item=row}
                                    {if $row['id_tournoi'+$ligne[1]] == $ligne[1]}
                                        <label><input type="checkbox" checked value="{$row['id_joueur']}">{$row['pseudo']}</label>
                                    {else}
                                        <label><input type="checkbox" value="{$row['id_joueur']}">{$row['pseudo']}</label>                                    
                                    {/if}
                                    <input type="text" id="Joueur{$ligne[1]+$row['id_joueur']}" value="{$row['pseudoJeux'+$ligne[1]]}">
                                {/foreach}
                            </div>
                            <input type="button" class="submitInscriptionJTAdmin" id="{$ligne[1]}" value="Valider les inscriptions">
                        </div>                        
                    {/foreach}
                    <br>    
                    <div id="test"></div>
                </div>
            </div>
        </div>	
	<!-- gap to have the footer in the bottom of the window -->
	<div style="height: 1000px;"></div>
    
	{include file="admin/footer.tpl"}

    </body>
</html>