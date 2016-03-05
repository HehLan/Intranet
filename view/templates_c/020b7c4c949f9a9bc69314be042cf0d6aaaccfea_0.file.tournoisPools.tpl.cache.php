<?php
/* Smarty version 3.1.29, created on 2016-03-05 13:50:50
  from "E:\wamp\www\Intranet\view\templates\default\tournoisPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dad62ab06d17_05662157',
  'file_dependency' => 
  array (
    '020b7c4c949f9a9bc69314be042cf0d6aaaccfea' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\tournoisPools.tpl',
      1 => 1457174188,
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
function content_56dad62ab06d17_05662157 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2268856dad62a9320a1_62839321';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
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
						<div class="row table_pool_row">
							<table class="col-lg-12 table_pool">
								<tr>
									<th class="th_title_pool"> 
										<?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['nom_groupe'];?>

									</th>
									<?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
										<th class="th_team2_pool"><?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
</th>
										<?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
									<th class="th_score_pool">Scores</th>
								</tr>
								<?php
$__section_sec1_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_2_total = $__section_sec1_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_2_total != 0) {
for ($__section_sec1_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_2_iteration <= $__section_sec1_2_total; $__section_sec1_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
									<tr class="tr_pool">
										<th class="th_team_pool"><?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
</th>
											<?php
$__section_sec2_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2'] : false;
$__section_sec2_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec2_3_total = $__section_sec2_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = new Smarty_Variable(array());
if ($__section_sec2_3_total != 0) {
for ($__section_sec2_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] = 0; $__section_sec2_3_iteration <= $__section_sec2_3_total; $__section_sec2_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']++){
?>
												<?php if ($_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['id']) {?>
												<td class="td_x_pool">X</td>
											<?php } else { ?>
												<td class="td_<?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['couleur'];?>
pool"><?php echo $_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['valeur'];?>
</td>
											<?php }?>
										<?php
}
}
if ($__section_sec2_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = $__section_sec2_3_saved;
}
?>
										<td class="td_score_pool"><?php echo $_smarty_tpl->tpl_vars['totaux']->value[$_smarty_tpl->tpl_vars['groupes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_groupe']->value['index'] : null)]['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id']];?>
</td>
									</tr>
								<?php
}
}
if ($__section_sec1_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_2_saved;
}
?>
							</table>
						</div>
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
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
