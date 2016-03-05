{* Smarty *}
<!DOCTYPE html>
<html>
    <head>
        {include file="default/meta.tpl"}
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/main.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/menu.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/less.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.media.js"></script>
    </head>

    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">			

                <div id="formInscription">
                    <form id="formModifProfil" class="formular" method="post" action="validformulaire.php">
                        <input id="afficheModifProfil" type="button" value="Modifier le profil" >
                        <fieldset>
                            <legend>Profil</legend>
                            <label for="pseudo">Pseudo :</label>
                            <input type="text" name="pseudo" id="pseudo" readonly value="{$joueur.pseudo}"><br>
                            <div id="pseudobox"></div>

                            <label for="firstname">Nom :</label>
                            <input type="text" id="lastname" readonly value="{$joueur.nom}"><br >

                            <label for="firstname">Prénom :</label>
                            <input type="text" name="firstname" id="firstname" readonly value="{$joueur.firstname}"><br >

                            <label for="datepicker">Date de naissance :</label>
                            <input type="text" name="date" id="date" readonly value="bug to solve"><br >
                            <!-- <?php echo date("d/m/Y", strtotime($joueur['date_de_naissance']));?> -->
                                   

                            <label for="telephone">Téléphone :</label>
                            <input type="text" name="telephone" id="telephone" readonly value="{$joueur.gsm}"><br >

                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" readonly value="{$joueur.email}"><br >
                            <div id="ModifEmail">
                                <label for="email2">Confirmer Email :</label>
                                <input type="text" name="email2" id="email2" value="{$joueur.email}" ><br >
                            </div> 

                            <input id="afficheChgtMDP" type="button" value="Changer de mot de passe" ><br><br>						

                            <fieldset id="ModifMDP" style="display:none">
                                <legend>Modification de mot de passe</legend>

                                <label for="password">Ancien mot de passe :</label>
                                <input type="password" name="passwordOld" id="passwordOld"><br >

                                <label for="password">Nouveau mot de passe :</label>
                                <input type="password" name="password" id="password"><br >

                                <label for="password2">Confirmer nouveau mot de passe :</label>
                                <input type="password" name="password2" id="password2"><br >
                                <div id="infoChgtMDP" style="border: none"></div>
                                <input id="submitChgtMDP" type="button" value="Valider le nouveau mot de passe">
                            </fieldset>
                        </fieldset>
                        <fieldset>
                            <legend>Jeux</legend>

                            <input type="checkbox" class="jeux" name="tournois[]" id="LOL"
                                   <?php echo isPlay($joueur['id_joueur'],"1",$connexion,$pseudoJeux); ?> disabled value="1">League Of Legends<br >
                            <div id="pseudoLOL"
                                 {if empty($pseudoJeux)}
                                    style="display : none;"
                                {/if}
                                >
                                <label for="pseudoLOL" style="padding-left: 40px; ">Votre pseudo à LOL :</label>
                                <input type="text" name="pseudoLOL" id="VerifPseudoLOL" style="margin-left: -40px;" readonly value="{$pseudoJeux}">
                                <div id="pseudoboxLOL" style="padding-left: 250px; "></div>
                            </div>
                            <input type="checkbox" class="jeux" name="tournois[]" id="COD4"
                                   <?php echo isPlay($joueur['id_joueur'],"2",$connexion,$pseudoJeux); ?> disabled value="2">Call Of Duty 4<br >
                            <input type="checkbox" class="jeux" name="tournois[]" id="TM"
                                   <?php echo isPlay($joueur['id_joueur'],"3",$connexion,$pseudoJeux); ?> disabled value="3">TrackMania<br >
                            <input type="checkbox" class="jeux" name="tournois[]" id="UT3"
                                   <?php echo isPlay($joueur['id_joueur'],"4",$connexion,$pseudoJeux); ?> disabled value="4">Unreal Tournament 3
                                   <br >
                        </fieldset>

                        <fieldset id="equipe">
                            <legend>Equipe</legend>
                            <br/> 
                            {if empty($joueur.team)}
                                <p>Vous n'avez pas de team!</p><br>
                                <input id="newTeam" type="button" class="pasDeTeam" value="Créer votre team">
                                <input id="rejoindreUneTeam" type="button" class="pasDeTeam" value="Rejoindre une team">								
                                <br>
                                <div id="creerTeam" style="display:none;">
                                    <input id="RetourTeam2" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="Team">Nom de la team :</label>
                                    <input type="text" name="Team" id="Team"><br >

                                    <div id="pseudoboxTeam" style="border: none; margin: 0px; padding: 0px"></div>

                                    <label for="TagTeam">Tag de la team :</label>
                                    <input type="text" name="TagTeam" id="TagTeam"><br >
                                    <div id="pseudoboxTagTeam" style="border: none; margin: 0px; padding: 0px"></div>

                                    <label for="new_psw_equipe">Mot de passe : </label>
                                    <input type="password" name="new_psw_equipe" id="new_psw_equipe" /><br>
                                    <label for="new_psw_equipe2">Confirmer mot de passe : </label>
                                    <input type="password" name="new_psw_equipe2" id="new_psw_equipe2" >
                                    <div id="infoNewTeam" style="border: none"></div>
                                    <input id="submitNewTeam" style="" type="button" value="Créer cette team">
                                </div>										

                                <div id="rejoindreTeam" style="display:none;">
                                    <input id="RetourTeam" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="rejoindre_Team">Le nom de la team :</label>
                                    <select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
                                        {foreach from=$equipes item=equipe}
                                            <option value="{$equipe['id_equipes']}" style="color:#000"/>{$equipe['nom']}</option>
                                        {/foreach}                                 
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                            {else}
                                <p>Votre team est : <strong id='votreTeam'>"{$joueur.team}"</strong><br>
                                    <input id="quitterTeam" type="button" class="withTeam" value="Quitter cette team">
                                    <input id="rejoindreAutreTeam" type="button" class="withTeam" value="Rejoindre une autre team">

                                <div id="rejoindreTeam" style="display:none;">
                                    <input id="RetourTeam" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="rejoindre_Team">Le nom de la team :</label>
                                    <select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
                                        {foreach from=$equipes item=equipe}
                                            <option value="{$equipe['id_equipes']}" style="color:#000"/>{$equipe['nom']}</option>
                                        {/foreach}
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>

                            {/if}						
                        </fieldset>

                        <div id='infoModifProfil'></div>
                        <br>					
                    </form>
                    <div id="dialogMessage"></div>
                </div>

            </div>
            {include file="default/footer.tpl"}
        </div>		
    </body>
</html>