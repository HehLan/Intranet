{* Smarty *}
<!DOCTYPE HTML>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/tournois.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/tournois.js"></script>
    </head>
    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con }	
        <div class="container" id="container">
            <div class="row" id="contenu">
                    
                
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        {foreach name=playerLoop from=$tournois item=tournoi}
                            {if $smarty.foreach.playerLoop.first}
                                <li role="presentation" class="active"><a href="#tab-{$tournoi['id_tournoi']}" aria-controls="tab-{$tournoi['id_tournoi']}" role="tab" data-toggle="tab">{$tournoi['nomTournoi']}</a></li>
                            {else}                            
                                <li role="presentation"><a href="#tab-{$tournoi['id_tournoi']}" aria-controls="tab-{$tournoi['id_tournoi']}" role="tab" data-toggle="tab">{$tournoi['nomTournoi']}</a></li>
                            {/if}
                        {/foreach}
                    </ul>
                </div>
                
                <div class="tab-content">
                    {foreach name=playerLoop from=$tournois item=tournoi}
                        {if $smarty.foreach.playerLoop.first}
                            <div role="tabpanel" class="tab-pane active" id="tab-{$tournoi['id_tournoi']}">     
                        {else}                            
                            <div role="tabpanel" class="tab-pane" id="tab-{$tournoi['id_tournoi']}">
                        {/if}
                                <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: {$tournoi['id_tournoi']}</li>
                                            <li>Participants: {$participants['nbr']}</li>
                                            <li>Joueurs par team: {$tournoi['joueurParTeam']}</li>
                                            <li>Teams par match: {$tournoi['teamParMatch']}</li>
                                            <li>Nombre de manches: {$tournoi['nombreManche']}</li>
                                            <li>Heure des qualifications: {$tournoi['heure_groupe_start']}</li>
                                            <li>Heure des finales: {$tournoi['heure_finale_start']}</li>
                                            <li>Durée intermatch: {$tournoi['duree_inter_match']}</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des groupes</button>
                                        {if $tournoi.id_tournoi != 3}
                                            <button style="background-color: red" class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des pools (old)</button>
                                        {/if}
                                        
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                        {if $tournoi.id_tournoi != 3}
                                            <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des finales brackets</button>
                                        {else}
                                            <button style="background-color: red" class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des finales brackets</button>
                                        {/if}
                                        
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        {* {if !($tournoi['exist_manche_qualif0'])} *}
                                            {* <button disabled class="btn btn-primary" onclick="go_groupes({$tournoi['id_tournoi']},{$participants['nbr']})">Créer</button> *}
                                        {* {else} *}
                                            {* <button class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des pools</button> *}
                                            {* <button disabled class="btn btn-primary" onclick="reset_groupes({$tournoi['id_tournoi']}, 'group', 0)">Effacer</button> *}
                                            {* <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi={$tournoi['id_tournoi']}'">Gestion des groupes</button> *}
                                        {* {/if} *}


                                        <!-- MANAGE FINALS -->
                                        {* {if !($tournoi['exist_manche_final0'])} *}
                                            {* {if $tournoi['joueurParTeam']>1} *}
                                                {* <button disabled class="btn btn-primary" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']}, 0)">Créer</button> *}
                                            {* {else} *}
                                                {* <button disabled class="btn btn-primary" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']}, 0)">Créer</button> *}
                                            {* {/if} *}
                                        {* {else} *}
                                            {* <button class="btn btn-primary" onclick="document.location.href = 'finales-old.php?id_tournoi={$tournoi['id_tournoi']}&looser=0'">Gestion des finales</button> *}
                                            {* <button class="btn btn-primary" onclick="reset_groupes({$tournoi['id_tournoi']}, 'finale', 0)">Effacer</button> *}
                                        {* {/if} *}
                                        {* {if !($tournoi['exist_manche_final2'])} *}
                                            {* {if $tournoi['joueurParTeam']>1} *}
                                                {* <button class="btn btn-primary" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']}, 2)">Créer</button> *}
                                            {* {else} *}
                                                {* <button class="btn btn-primary" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']}, 2)">Créer</button> *}
                                            {* {/if} *}
                                        {* {else} *}
                                            {* <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi={$tournoi['id_tournoi']}&looser=2'">Gérer</button> *}
                                            {* <button class="btn btn-primary" onclick="reset_groupes({$tournoi['id_tournoi']}, 'looser1', 2)">Effacer</button> *}
                                        {* {/if} *}
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        {* no looser brackets for this LAN party ! *}
                                        {*
                                        <h4>Looser brackets</h4>
                                        {if !($tournoi['exist_manche_final3'])}
                                            {if $tournoi['joueurParTeam']>1}
                                                <input type="button" value="Créer" onclick="go_finales({$tournoi['id_tournoi']},{$participants['nbr']}, 3)"/>
                                            {else}
                                                <input type="button" value="Créer" onclick="go_finales2({$tournoi['id_tournoi']},{$participants['nbr']}, 3)"/>
                                            {/if}
                                        {else}
                                            <input type="button" value="Gérer" onclick="document.location.href = finales.php?id_tournoi ={$tournoi['id_tournoi']} & looser = 3'" />
                                            <input type="button" value="Effacer" onclick="reset_groupes({$tournoi['id_tournoi']}, 'looser2', 3)"/>
                                        {/if}
                                        *}
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        {*
                                        <h4>Suppression</h4>
                                        <img src="{#adminAssets#}/img/cross_red.png" alt="Supprimer" /> 
                                        *}
                                        
                                        
                                    </div>
                                </div>
                            </div>
                    {/foreach}                   
                </div>
            </div>
        </div>

        
        {include file="admin/footer.tpl"}


        <div id="shadowing"></div>

        <div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="groupes.php">
                <input type="hidden" name="id_tournoi" id="input_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart"></span><br>
                Nombre de groupes : <input type="text" name="nbrgroupes" value="0" size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>
        <div id="div_popup2" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input2_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input2_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart2"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de qualifiés : <select name="qualifs"><option>4<option>6<option>8<option>12<option>16<option>24<option>32<option>48<option>64<option>96<option>128</select><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>	
        <div id="div_popup3" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input3_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input3_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart3"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de groupes : <select name="nbrgroupes"><option>1<option>2<option>4<option>8<option>16</select><br>
                Taille des groupes : <input type="text" name="tgroupes" value="0"  size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>	

    </body>
</html>