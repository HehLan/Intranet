<?php
/* Smarty version 3.1.29, created on 2016-03-25 12:14:32
  from "E:\wamp\www\Intranet\view\templates\default\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f51d98c047a7_72156626',
  'file_dependency' => 
  array (
    '13a85e07669cee3362e1fb61c65dc1bd78e70ee5' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\profile.tpl',
      1 => 1458864322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/header.tpl' => 1,
    'file:default/nav.tpl' => 1,
    'file:default/footer.tpl' => 1,
  ),
),false)) {
function content_56f51d98c047a7_72156626 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2491556f51d98a6a4c6_24928091';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/profile.css" />
    </head>

    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
?>

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
                                            <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="Veuillez indiquer votre pseudo" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
">
                                            <span class="help-block" style="display: none">Corrigez l'erreur s'il vous plait</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="laststname">Nom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Veuillez indiquer votre nom" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['nom'];?>
">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="firstname">Prénom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Veuillez indiquer votre prénom" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['prenom'];?>
">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="date-of-birth">Naissance :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" name="date-of-birth" id="date-of-birth" placeholder="Veuillez indiquer votre data de naissance" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['date_de_naissance'];?>
">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="phone">Téléphone :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Veuillez indiquer votre numéro de téléphone" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['gsm'];?>
">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="email">Email :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Veuillez indiquer votre email" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['email'];?>
">
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
                            <?php if (empty($_smarty_tpl->tpl_vars['joueur']->value['team'])) {?>
                                <p>Vous n'avez pas encore d'équipe !</p>
                                <input id="newTeam" type="button" value="Créer votre équipe">                                
                                <input id="joinATeam" type="button" value="Rejoindre une équipe">
                                
                                <div id="createTeam" style="display: none;">
                                    <input id="RetourTeam2" style="width: 100px" type="button" value="Retour">
                                    
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-name">Nom de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-name" id="team-name" placeholder="Veuillez indiquer le nom de votre équipe" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['date_de_naissance'];?>
">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-tag">Tag de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-tag" id="team-tag" placeholder="Veuillez indiquer le tag de votre équipe" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['date_de_naissance'];?>
">
                                            </div>
                                        </div>
                                    </div>       
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password" id="team-password" placeholder="Veuillez indiquer le mot de passe de votre équipe" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['date_de_naissance'];?>
">
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password-confirmed">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password-confirmed" id="team-password-confirmed" placeholder="Veuillez confirmer le mot de passe de votre équipe" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['date_de_naissance'];?>
">
                                            </div>
                                        </div>
                                    </div> 
                                    <input id="submitNewTeam" type="button" value="Créer cette team">
                                </div>										

                                <div id="rejoindreTeam" style="display:none;">
                                    <input id="RetourTeam" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="rejoindre_Team">Le nom de la team :</label>
                                    <select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['equipes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_equipe_0_saved_item = isset($_smarty_tpl->tpl_vars['equipe']) ? $_smarty_tpl->tpl_vars['equipe'] : false;
$_smarty_tpl->tpl_vars['equipe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['equipe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['equipe']->value) {
$_smarty_tpl->tpl_vars['equipe']->_loop = true;
$__foreach_equipe_0_saved_local_item = $_smarty_tpl->tpl_vars['equipe'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['equipe']->value['id_equipes'];?>
" style="color:#000"/><?php echo $_smarty_tpl->tpl_vars['equipe']->value['nom'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_0_saved_local_item;
}
if ($__foreach_equipe_0_saved_item) {
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_0_saved_item;
}
?>                                 
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input disabled id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                            <?php } else { ?>
                                <p>Votre team est : <strong id='votreTeam'>"<?php echo $_smarty_tpl->tpl_vars['joueur']->value['team'];?>
"</strong><br>
                                    <input id="quitterTeam" type="button" class="withTeam" value="Quitter cette team">
                                    <input id="rejoindreAutreTeam" type="button" class="withTeam" value="Rejoindre une autre team">

                                <div id="rejoindreTeam" style="display:none;">
                                    <input id="RetourTeam" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="rejoindre_Team">Le nom de la team :</label>
                                    <select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['equipes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_equipe_1_saved_item = isset($_smarty_tpl->tpl_vars['equipe']) ? $_smarty_tpl->tpl_vars['equipe'] : false;
$_smarty_tpl->tpl_vars['equipe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['equipe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['equipe']->value) {
$_smarty_tpl->tpl_vars['equipe']->_loop = true;
$__foreach_equipe_1_saved_local_item = $_smarty_tpl->tpl_vars['equipe'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['equipe']->value['id_equipes'];?>
" style="color:#000"/><?php echo $_smarty_tpl->tpl_vars['equipe']->value['nom'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_1_saved_local_item;
}
if ($__foreach_equipe_1_saved_item) {
$_smarty_tpl->tpl_vars['equipe'] = $__foreach_equipe_1_saved_item;
}
?>
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input disabled id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                            <?php }?>
                        </div>
                        
                        <!-- tab-stats -->
                        <div role="tabpanel" class="tab-pane" id="tab-stats">
                            Vos statistiques ne sont pas disponibles dans cette version.
                        </div>
  
                    </div>
  
                </form>

            </div>
        </div>	
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        
        <?php echo '<script'; ?>
>
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
        <?php echo '</script'; ?>
>
        
        
    </body>
</html><?php }
}
