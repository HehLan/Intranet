<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:17:54
  from "E:\wamp\www\Intranet\view\templates\admin\scoresRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52c72660e36_93588313',
  'file_dependency' => 
  array (
    'b4b4444bdd9b40b07a80a4f304bdff09eaed3658' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresRounds.tpl',
      1 => 1458898235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/meta.tpl' => 1,
    'file:admin/header.tpl' => 1,
    'file:admin/nav.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_56f52c72660e36_93588313 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2989656f52c722172b1_46776625';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/scores.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/scores.js"><?php echo '</script'; ?>
>
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	

        <div id="container" class="container">
            <div id="contenu" class="row">
                <h1>Qualifications <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</h1>
                <form method="POST" action="modules/scores_save.php">
                    <input type="hidden" name="id_tournoi" value="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">
                    <input type="SUBMIT" value="Enregistrer">
                    <br>
                    <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_0_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_0_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
                        <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="<?php echo ($_smarty_tpl->tpl_vars['groupe']->value['nbr_manches']+2);?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
<br />
                                    <a href="#" onclick="popup_heure(<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
)" ><?php echo $_smarty_tpl->tpl_vars['groupe']->value['heure'];?>
</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['groupe']->value['nbr_manches']+1 - (1) : 1-($_smarty_tpl->tpl_vars['groupe']->value['nbr_manches'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <th class="th_manche_pool_tm">Manche <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<br></th>
                                    <?php }
}
?>

                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                            <?php
$_from = $_smarty_tpl->tpl_vars['groupe']->value['totaux'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_1_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_1_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                                <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
</th>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['groupe']->value['nbr_manches']+1 - (1) : 1-($_smarty_tpl->tpl_vars['groupe']->value['nbr_manches'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                        <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
" value="1" 
                                                   onclick="active_score2(<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
,<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
)"> 
                                            <input type="text" name="score_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
" 
                                                   id="score_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
" 

                                                   <?php if (isset($_smarty_tpl->tpl_vars['groupe']->value['inscrits'][$_smarty_tpl->tpl_vars['joueur']->value['id_joueur']]['scores'][$_smarty_tpl->tpl_vars['i']->value])) {?>
                                                       value="<?php echo $_smarty_tpl->tpl_vars['groupe']->value['inscrits'][$_smarty_tpl->tpl_vars['joueur']->value['id_joueur']]['scores'][$_smarty_tpl->tpl_vars['i']->value];?>
"
                                                   <?php } else { ?>
                                                       value=""
                                                   <?php }?>
                                                   size="4">								
                                        </td>
                                    <?php }
}
?>

                                    <td class="td_total_pool_tm"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['total'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_1_saved_local_item;
}
if ($__foreach_joueur_1_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_1_saved_item;
}
?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['groupe']->value['inscrits'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_inscrit_2_saved_item = isset($_smarty_tpl->tpl_vars['inscrit']) ? $_smarty_tpl->tpl_vars['inscrit'] : false;
$_smarty_tpl->tpl_vars['inscrit'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['inscrit']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inscrit']->value) {
$_smarty_tpl->tpl_vars['inscrit']->_loop = true;
$__foreach_inscrit_2_saved_local_item = $_smarty_tpl->tpl_vars['inscrit'];
?>
                                <?php if (!$_smarty_tpl->tpl_vars['inscrit']->value['ok']) {?>
                                    <tr>
                                        <td class="td_pseudo_pool_tm"><?php echo $_smarty_tpl->tpl_vars['inscrit']->value['nom'];?>
</td>
                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['groupe']->value['nbr_manches']+1 - (1) : 1-($_smarty_tpl->tpl_vars['groupe']->value['nbr_manches'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                            <td class="td_score_pool_tm">
                                                <input type="checkbox" name="cb_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['id'];?>
" 
                                                       value="1" onclick="active_score2(<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
,<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['id'];?>
)"> 
                                                <input type="text" name="score_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['id'];?>
" 
                                                       id="score_m_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_match'];?>
_ma_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_p_<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['id'];?>
" value="" size="4">
                                            </td>
                                        <?php }
}
?>

                                        <td class="td_total_pool_tm"></td>
                                    </tr>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['inscrit'] = $__foreach_inscrit_2_saved_local_item;
}
if ($__foreach_inscrit_2_saved_item) {
$_smarty_tpl->tpl_vars['inscrit'] = $__foreach_inscrit_2_saved_item;
}
?>
                        </table>
                        <br><br>
                    <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_local_item;
}
if ($__foreach_groupe_0_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_item;
}
?>
                </form>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <div id="shadowing"></div>

        <div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/admin/modules/modifier_heure.php">
                <input type="hidden" name="id_match" id="input_id_match" value="0" />
                <input type="hidden" name="id_tournoi" value="<?php echo '/*%%SmartyNocache:2989656f52c722172b1_46776625%%*/<?php echo \'<?php \';?>/*/%%SmartyNocache:2989656f52c722172b1_46776625%%*/';?>
echo $id_tournoi; <?php echo '/*%%SmartyNocache:2989656f52c722172b1_46776625%%*/<?php echo \'?>\';?>/*/%%SmartyNocache:2989656f52c722172b1_46776625%%*/';?>
" />
                <input type="hidden" name="page" value="scores" />
                vendredi <input type="radio" name="jour" value="vendredi"> / samedi <input type="radio" name="jour" value="samedi"> / dimanche <input type="radio" name="jour" value="dimanche"><br>
                Heure : <select name="heure">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 24+1 - (0) : 0-(24)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value < 10) {?>0<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                        </option>
                    <?php }
}
?>

                </select>h<select name="minute">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 5;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 60+1 - (0) : 0-(60)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value < 10) {?>0<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                        </option>
                    <?php }
}
?>

                </select>
                <br />
                <input type="submit" value="Modifier" /><br>
            </form>
        </div>
    
    </body>
</html><?php }
}
