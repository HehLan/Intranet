<?php
/* Smarty version 3.1.29, created on 2016-02-20 15:53:37
  from "D:\Projects\PHP\Xampp\htdocs\Intranet\templates\default\player_change.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c87df12880d5_14537122',
  'file_dependency' => 
  array (
    '0cc31bb47144bc4a1d894bb9f42a27169953e7ee' => 
    array (
      0 => 'D:\\Projects\\PHP\\Xampp\\htdocs\\Intranet\\templates\\default\\player_change.tpl',
      1 => 1455887093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c87df12880d5_14537122 ($_smarty_tpl) {
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "templates/default/paths.conf", null, 0);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/getXhr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/menu.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/less.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery.media.js"><?php echo '</script'; ?>
>
    </head>

    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, true);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, true);
?>

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">			

                <div id="formInscription">
                    <form id="formModifProfil" class="formular" method="post" action="validformulaire.php">
                        <input id="afficheModifProfil" type="button" value="Modifier le profil" >
                        <fieldset>
                            <legend>Profil</legend>
                            <label for="pseudo">Pseudo :</label>
                            <input type="text" name="pseudo" id="pseudo" readonly value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
"><br>
                            <div id="pseudobox"></div>

                            <label for="firstname">Nom :</label>
                            <input type="text" id="lastname" readonly value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['nom'];?>
"><br >

                            <label for="firstname">Prénom :</label>
                            <input type="text" name="firstname" id="firstname" readonly value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['firstname'];?>
"><br >

                            <label for="datepicker">Date de naissance :</label>
                            <input type="text" name="date" id="date" readonly value="<?php echo '<?php ';?>echo date("d/m/Y", strtotime($joueur['date_de_naissance'])); <?php echo '?>';?>"><br >

                            <label for="telephone">Téléphone :</label>
                            <input type="text" name="telephone" id="telephone" readonly value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['gsm'];?>
"><br >

                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" readonly value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['email'];?>
"><br >
                            <div id="ModifEmail">
                                <label for="email2">Confirmer Email :</label>
                                <input type="text" name="email2" id="email2" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['email'];?>
" ><br >
                            </div> 

                            <input id="afficheChgtMDP" type="button" value="Changer de mot de passe" ><br><br>						

                            <fieldset id="ModifMDP" style="display:none";>
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

                            <input type="checkbox" class="jeux" name="tournois[]" id="LOL" <?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"1",$connexion,$pseudoJeux); <?php echo '?>';?> disabled value="1">League Of Legends<br >
                            <div id="pseudoLOL" style="<?php echo '<?php ';?>if(empty($pseudoJeux)) echo 'display : none;';<?php echo '?>';?>">
                                <label for="pseudoLOL" style="padding-left: 40px; ">Votre pseudo à LOL :</label>
                                <input type="text" name="pseudoLOL" id="VerifPseudoLOL" style="margin-left: -40px;" readonly value="<?php echo '<?php ';?>echo $pseudoJeux; <?php echo '?>';?>">
                                <div id="pseudoboxLOL" style="padding-left: 250px; "></div>
                            </div>
                            <input type="checkbox" class="jeux" name="tournois[]" id="COD4" <?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"2",$connexion,$pseudoJeux); <?php echo '?>';?> disabled value="2">Call Of Duty 4<br >
                            <input type="checkbox" class="jeux" name="tournois[]" id="TM" <?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"3",$connexion,$pseudoJeux); <?php echo '?>';?> disabled value="3">TrackMania<br >
                            <input type="checkbox" class="jeux" name="tournois[]" id="UT3" <?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"4",$connexion,$pseudoJeux); <?php echo '?>';?> disabled value="4">Unreal Tournament 3
                                   <br >
                        </fieldset>

                        <fieldset id="equipe">
                            <legend>Equipe</legend>
                            <br/> 
                            <?php if (empty($_smarty_tpl->tpl_vars['joueur']->value['team'])) {?>
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

                                        <?php echo '<?php
                                        ';?>$query="SELECT id_equipes, nom FROM equipes ORDER BY nom";
                                        $requete_preparee=$connexion->prepare($query);
                                        $requete_preparee->execute();
                                        while($equipes=$requete_preparee->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                        echo '<option value="'.$equipes["id_equipes"].'" style="color:#000"/>'.$equipes["nom"];
                                        echo "</option>";
                                        }
                                        <?php echo '?>';?>

                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
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

                                        <?php echo '<?php
                                        ';?>$query="SELECT id_equipes, nom FROM equipes ORDER BY nom";
                                        $requete_preparee=$connexion->prepare($query);
                                        $requete_preparee->execute();
                                        while($equipes=$requete_preparee->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                        echo '<option value="'.$equipes["id_equipes"].'" style="color:#000"/>'.$equipes["nom"];
                                        echo "</option>";
                                        }
                                        <?php echo '?>';?>
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>

                            <?php }?>						
                        </fieldset>

                        <div id='infoModifProfil'></div>
                        <br>					
                    </form>
                    <div id="dialogMessage"></div>
                </div>

            </div>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>		
    </body>
</html><?php }
}
