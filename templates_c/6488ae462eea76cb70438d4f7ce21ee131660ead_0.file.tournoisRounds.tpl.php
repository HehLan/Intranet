<?php
/* Smarty version 3.1.29, created on 2016-02-22 02:42:48
  from "D:\DATA\heh-www\BACKUP INTRANET\www\templates\default\tournoisRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ca6798a09261_45116939',
  'file_dependency' => 
  array (
    '6488ae462eea76cb70438d4f7ce21ee131660ead' => 
    array (
      0 => 'D:\\DATA\\heh-www\\BACKUP INTRANET\\www\\templates\\default\\tournoisRounds.tpl',
      1 => 1456100098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ca6798a09261_45116939 ($_smarty_tpl) {
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "templates/default/paths.conf", null, 0);
?>

<!DOCTYPE HTML>
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
    </head>
    <body>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, true);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, true);
?>
	
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    <h1>
                        <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 2) {?>
                            Qualifications 
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>

                    </h1>
                    <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 2) {?>
                        <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">FINALES DES PGM'S (gold)</a></p><br>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb2']->value > 0) {?> Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=2">FINALES DES LOSERS (silver)</a><br><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb3']->value > 0) {?> Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=3">FINALES DES NOOBS (bronze)</a><br><?php }?>
                    <?php }?>
                    <br>
                    <?php
$__section_groupe_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe'] : false;
$__section_groupe_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_groupe_0_total = $__section_groupe_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_groupe'] = new Smarty_Variable(array());
if ($__section_groupe_0_total != 0) {
for ($__section_groupe_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] = 0; $__section_groupe_0_iteration <= $__section_groupe_0_total; $__section_groupe_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']++){
?>
						<table class="table_round">
							<tr>
								<th class="title_round" colspan="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nombreManche']+2;?>
">
									<?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['nom_groupe'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['jour'];?>
 <?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['heure'];?>
 )
								</th>
							</tr>
							<tr>
								<th class="th_manche_round" >
									Participants
								</th>
								<?php
$_smarty_tpl->tpl_vars['idManche'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['idManche']->step = 1;$_smarty_tpl->tpl_vars['idManche']->total = (int) ceil(($_smarty_tpl->tpl_vars['idManche']->step > 0 ? $_smarty_tpl->tpl_vars['tournoi']->value['nombreManche']+1 - (1) : 1-($_smarty_tpl->tpl_vars['tournoi']->value['nombreManche'])+1)/abs($_smarty_tpl->tpl_vars['idManche']->step));
if ($_smarty_tpl->tpl_vars['idManche']->total > 0) {
for ($_smarty_tpl->tpl_vars['idManche']->value = 1, $_smarty_tpl->tpl_vars['idManche']->iteration = 1;$_smarty_tpl->tpl_vars['idManche']->iteration <= $_smarty_tpl->tpl_vars['idManche']->total;$_smarty_tpl->tpl_vars['idManche']->value += $_smarty_tpl->tpl_vars['idManche']->step, $_smarty_tpl->tpl_vars['idManche']->iteration++) {
$_smarty_tpl->tpl_vars['idManche']->first = $_smarty_tpl->tpl_vars['idManche']->iteration == 1;$_smarty_tpl->tpl_vars['idManche']->last = $_smarty_tpl->tpl_vars['idManche']->iteration == $_smarty_tpl->tpl_vars['idManche']->total;?>
									<th class="th_manche_round">Manche <?php echo $_smarty_tpl->tpl_vars['idManche']->value;?>
</th>
									<?php }
}
?>

								<th class="th_points_round">Points</th>
							</tr>
							<?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['joueurs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
								<tr>
									<td class="td_pseudo_round"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
</td>
									<?php
$_smarty_tpl->tpl_vars['idManche'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['idManche']->step = 1;$_smarty_tpl->tpl_vars['idManche']->total = (int) ceil(($_smarty_tpl->tpl_vars['idManche']->step > 0 ? $_smarty_tpl->tpl_vars['tournoi']->value['nombreManche']+1 - (1) : 1-($_smarty_tpl->tpl_vars['tournoi']->value['nombreManche'])+1)/abs($_smarty_tpl->tpl_vars['idManche']->step));
if ($_smarty_tpl->tpl_vars['idManche']->total > 0) {
for ($_smarty_tpl->tpl_vars['idManche']->value = 1, $_smarty_tpl->tpl_vars['idManche']->iteration = 1;$_smarty_tpl->tpl_vars['idManche']->iteration <= $_smarty_tpl->tpl_vars['idManche']->total;$_smarty_tpl->tpl_vars['idManche']->value += $_smarty_tpl->tpl_vars['idManche']->step, $_smarty_tpl->tpl_vars['idManche']->iteration++) {
$_smarty_tpl->tpl_vars['idManche']->first = $_smarty_tpl->tpl_vars['idManche']->iteration == 1;$_smarty_tpl->tpl_vars['idManche']->last = $_smarty_tpl->tpl_vars['idManche']->iteration == $_smarty_tpl->tpl_vars['idManche']->total;?>
										<td class="td_score_round"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['scores'][$_smarty_tpl->tpl_vars['idManche']->value];?>
</td>
									<?php }
}
?>

									<td class="td_total_round"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['total'];?>
</td>
								</tr>
							<?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_local_item;
}
if ($__foreach_joueur_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_item;
}
?>
						</table><br><br>
                    <?php
}
}
if ($__section_groupe_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_groupe'] = $__section_groupe_0_saved;
}
?>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'templatePath'))."footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </body>
</html><?php }
}