<?php
/* Smarty version 3.1.29, created on 2016-02-15 16:28:19
  from "E:\wamp\www\Intranet\templates\default\admin_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1ee93822b05_24697501',
  'file_dependency' => 
  array (
    'fdf49f06ca0913e5b5bb355325dce2f10c5fbaec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\templates\\default\\admin_index.tpl',
      1 => 1455549912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c1ee93822b05_24697501 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "templates/default/paths.conf", null, 0);
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery-ui.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/getXhr.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/admin_index.js"><?php echo '</script'; ?>
>		
	</head>

	<body role="document">	
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'SESSION'=>$_smarty_tpl->tpl_vars['SESSION']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, true);
?>

		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'SESSION'=>$_smarty_tpl->tpl_vars['SESSION']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, true);
?>

		
		<?php echo '<?php ';?>require_once('modules/menuTop.php'); <?php echo '?>';?>
		
		<div id="container" class="container-fluid">
				
			<div id="contenu">
				<div id="ListeEquipeAdmin">
					<fieldset>
						<legend>Liste des équipes</legend>
						<table class="listeEquipes">
							<thead>
								<tr>
									<th>Les équipes</th>
									<th>Joueurs dans l'équipe</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div id="listeEquipeAdmin">
											<?php echo '<?php
											';?>try {
												
												while($equipes=$requete_preparee->fetch(PDO::FETCH_ASSOC)) 
												{
													echo'
														<h6 class="EquipeAdmin" value="'.$equipes["id_equipes"].'">'.$equipes["nom"].'</h6>
													';
												}
												
											}
											
											catch(PDOException $e) {
												echo 'Base de données est indisponible pour le moment!';
											}
												
											<?php echo '?>';?>
										</div>
									</td>
									<td>
										<div id="listeEquipeJoueurAdmin">
											
										</div>
										<input id="submitNewPlayerInTeam" type="button" value="Ajouter un joueur" style="display: none;">
									</td>
								</tr>
								<tr>
									<td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
										Informations du joueur
									</td>
								</tr>
								<tr>
									<td  colspan="2">
										<div id="InfoJoueurEquipes" style="height:250px;">
											
										</div>
									</td>
								</tr>
							</tbody>
						</table>        
					</fieldset>
				
					<fieldset>
						<legend>Ajouter une équipe</legend>
						<div id="creerTeamAdmin" >
								<label for="Team">Nom de la team :</label>
								<input type="text" name="Team" id="Team"><br />
								
								<div id="pseudoboxTeam" style="border: none; margin: 0px; padding: 0px"></div>
								
								<label for="TagTeam">Tag de la team :</label>
								<input type="text" name="TagTeam" id="TagTeam"><br />
								<div id="pseudoboxTagTeam" style="border: none; margin: 0px; padding: 0px"></div>
										
								<label for="new_psw_equipe">Mot de passe : </label>
								<input type="password" name="new_psw_equipe" id="new_psw_equipe" /><br/>
								<label for="new_psw_equipe2">Confirmer mot de passe : </label>
								<input type="password" name="new_psw_equipe2" id="new_psw_equipe2" />
						</div>
						<div id="erreurNewTeamAdmin" style="height: auto;"></div>
						<input type="button" id="submitCreerNewEquipeAdmin" value="Ajouter l'équipe">
					</fieldset>
					<div id="infoEquipeAdmin" style="display: none"></div>
				</div>
			</div>
			
		</div>
		
		
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

		<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$("#bloc_chat_message").keyup(function(event)
				{
					if(event.keyCode == 13)
					{
						$("#bloc_chat_bouton").click();
					}
				});
		
				afficher(0);
				users();
			<?php echo '</script'; ?>
>
		<?php }?>
	</body>
</html><?php }
}
