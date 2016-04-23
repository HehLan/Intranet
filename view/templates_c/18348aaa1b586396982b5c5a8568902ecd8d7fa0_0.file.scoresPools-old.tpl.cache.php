<?php
/* Smarty version 3.1.29, created on 2016-03-25 11:40:17
  from "E:\wamp\www\Intranet\view\templates\admin\scoresPools-old.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f51591903d84_46946154',
  'file_dependency' => 
  array (
    '18348aaa1b586396982b5c5a8568902ecd8d7fa0' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresPools-old.tpl',
      1 => 1458870971,
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
function content_56f51591903d84_46946154 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '456556f515914c9c02_56450443';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/scoresPools-old.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/scoresPools-old.js"><?php echo '</script'; ?>
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
                    <input type="submit" value="Enregistrer">
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
                        <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="<?php echo ($_smarty_tpl->tpl_vars['groupe']->value['nbrteam']+2);?>
"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['groupe']->value['nbrteam']-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['groupe']->value['nbrteam']-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <th class="th_team2_pool_lol"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['teams'][$_smarty_tpl->tpl_vars['i']->value]['nom'];?>
</th>
                                    <?php }
}
?>

                                <th class="th_score_pool_lol">score</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['groupe']->value['teams'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_team_1_saved_item = isset($_smarty_tpl->tpl_vars['team']) ? $_smarty_tpl->tpl_vars['team'] : false;
$_smarty_tpl->tpl_vars['team'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['team']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
$__foreach_team_1_saved_local_item = $_smarty_tpl->tpl_vars['team'];
?>
                                <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol"><?php echo $_smarty_tpl->tpl_vars['team']->value['nom'];?>
</th>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['groupe']->value['teams'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_team2_2_saved_item = isset($_smarty_tpl->tpl_vars['team2']) ? $_smarty_tpl->tpl_vars['team2'] : false;
$_smarty_tpl->tpl_vars['team2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['team2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['team2']->value) {
$_smarty_tpl->tpl_vars['team2']->_loop = true;
$__foreach_team2_2_saved_local_item = $_smarty_tpl->tpl_vars['team2'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['team']->value['id'] == $_smarty_tpl->tpl_vars['team2']->value['id']) {?>
                                            <td class="td_X_pool_lol">X</td>
                                        <?php } else { ?>
                                            <td class="td_<?php echo $_smarty_tpl->tpl_vars['couleur']->value;?>
pool_lol">
                                                <a href="#" onclick="popup_heure(<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['id_match'];?>
)">
                                                    <?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['heure'];?>

                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['id_match'];?>
_p_<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
" 
                                                       value="1" onclick="active_score(<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['id_match'];?>
,<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
)" />
                                                <input type="text" name="score_m_<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['id_match'];?>
_p_<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
" 
                                                       id="score_m_<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['id_match'];?>
_p_<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
" 
                                                       value="<?php echo $_smarty_tpl->tpl_vars['matchs']->value[$_smarty_tpl->tpl_vars['team']->value['id']][$_smarty_tpl->tpl_vars['team2']->value['id']]['score'];?>
" size="4" />
                                            </td>
                                        <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['team2'] = $__foreach_team2_2_saved_local_item;
}
if ($__foreach_team2_2_saved_item) {
$_smarty_tpl->tpl_vars['team2'] = $__foreach_team2_2_saved_item;
}
?>	
                                    <td class="td_score_pool_lol"><?php echo $_smarty_tpl->tpl_vars['team']->value['total'];?>
</td>
                                </tr>	
                            <?php
$_smarty_tpl->tpl_vars['team'] = $__foreach_team_1_saved_local_item;
}
if ($__foreach_team_1_saved_item) {
$_smarty_tpl->tpl_vars['team'] = $__foreach_team_1_saved_item;
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
            <form method="POST" action="modifier_heure.php">
                <input type="hidden" name="id_match" id="input_id_match" value="0" />
                <input type="hidden" name="id_tournoi" value="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
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
                            <?php if ($_smarty_tpl->tpl_vars['i']->value < 10) {?>
                                0
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                            <?php }?>
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
