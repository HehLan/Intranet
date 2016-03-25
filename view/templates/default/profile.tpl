{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="default/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#assets#}/css/profile.css" />
    </head>

    <body role="document">
        {include file="default/header.tpl" con=$con next_matches=$next_matches}
        {include file="default/nav.tpl"  con=$con navTournois=$navTournois}
        <div class="container" id="container">
            <div class="row" id="contenu">

                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-infos" aria-controls="tab-infos" role="tab" data-toggle="tab">Infos</a></li>
                        <li role="presentation"><a href="#tab-games" aria-controls="tab-games" role="tab" data-toggle="tab">Jeux</a></li>
                        <li role="presentation"><a href="#tab-teams" aria-controls="tab-teams" role="tab" data-toggle="tab">Teams</a></li>
                        <li role="presentation"><a href="#tab-stats" aria-controls="tab-stats" role="tab" data-toggle="tab">Stats</a></li>
                    </ul>
                </div>

                <form id="form-profile" class="form-horizontal col-lg-12" method="post" action="validformulaire.php">
                    <div class="tab-content">
                        
                        <!-- tab-infos -->
                        <div role="tabpanel" class="tab-pane active my-tab-content" id="tab-infos">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="pseudo">Pseudo :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="Veuillez indiquer votre pseudo" value="{$joueur.pseudo}">
                                            <span class="help-block" style="display: none">Corrigez l'erreur s'il vous plait</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="laststname">Nom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Veuillez indiquer votre nom" value="{$joueur.nom}">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="firstname">Prénom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Veuillez indiquer votre prénom" value="{$joueur.prenom}">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="date-of-birth">Naissance :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" name="date-of-birth" id="date-of-birth" placeholder="Veuillez indiquer votre data de naissance" value="{$joueur['date_de_naissance']}">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="phone">Téléphone :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Veuillez indiquer votre numéro de téléphone" value="{$joueur.gsm}">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="email">Email :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Veuillez indiquer votre email" value="{$joueur.email}">
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            
                            <div class="col-lg-6">
                                <button disabled class ="btn btn-primary" type="submit">Enregistrer</button>
                                <button disabled id="password-change" class ="btn btn-primary">Changer de mot de passe</button>
                                
                                <fieldset id="password-editing" style="display: none">
                                    <legend>Modification de mot de passe</legend>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-old">Ancien mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-old" id="password-old" placeholder="Veuillez entrer votre ancien mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-new">Nouveau mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-new" id="password-new" placeholder="Veuillez entrer votre nouveau mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-new-confirmed">Nouveau mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-new-confirmed" id="password-new-confirmed" placeholder="Veuillez entrer confirmer votre mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <button disabled id="validate-password" class ="btn btn-primary">Valider</button>
                                </fieldset>
                            </div>                            

                        </div>
                            
                           
                        <!-- tab-games -->
                        <div role="tabpanel" class="tab-pane my-tab-content" id="tab-games">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 3
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 4
                                </label>
                            </div>
                        </div>
                        
                        
                        <!-- tab-teams -->
                        <div role="tabpanel" class="tab-pane" id="tab-teams">
                            {if empty($joueur.team)}
                                <p>Vous n'avez pas encore d'équipe !</p>
                                <input id="newTeam" type="button" value="Créer votre équipe">                                
                                <input id="joinATeam" type="button" value="Rejoindre une équipe">
                                
                                <div id="createTeam" style="display: none;">
                                    <input id="RetourTeam2" style="width: 100px" type="button" value="Retour">
                                    
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-name">Nom de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-name" id="team-name" placeholder="Veuillez indiquer le nom de votre équipe" value="{$joueur['date_de_naissance']}">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-tag">Tag de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-tag" id="team-tag" placeholder="Veuillez indiquer le tag de votre équipe" value="{$joueur['date_de_naissance']}">
                                            </div>
                                        </div>
                                    </div>       
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password" id="team-password" placeholder="Veuillez indiquer le mot de passe de votre équipe" value="{$joueur['date_de_naissance']}">
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password-confirmed">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password-confirmed" id="team-password-confirmed" placeholder="Veuillez confirmer le mot de passe de votre équipe" value="{$joueur['date_de_naissance']}">
                                            </div>
                                        </div>
                                    </div> 
                                    <input id="submitNewTeam" type="button" value="Créer cette team">
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
                                    <input disabled id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
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
                                    <input disabled id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                            {/if}
                        </div>
                        
                        <!-- tab-stats -->
                        <div role="tabpanel" class="tab-pane" id="tab-stats">
                            Vos statistiques ne sont pas disponibles dans cette version.
                        </div>
  
                    </div>
  
                </form>

            </div>
        </div>	
        {include file="default/footer.tpl"}
        
        
        <script>
            $(function(){
                
                $("#password-change").click(function() {
                    $("#password-editing").css({ display: block });
                });

                $("form").on("submit", function() {
                    if($("#pseudo").val().length() < 2) {
                        $(".form-group").addClass("has-error");
                        return false;
                    }
                });
                
            });
        </script>
        
        
    </body>
</html>