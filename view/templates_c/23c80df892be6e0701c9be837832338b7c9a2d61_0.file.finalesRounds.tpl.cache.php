<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:18:22
  from "E:\wamp\www\Intranet\view\templates\admin\finalesRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52c8e74da05_43518964',
  'file_dependency' => 
  array (
    '23c80df892be6e0701c9be837832338b7c9a2d61' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\finalesRounds.tpl',
      1 => 1458908107,
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
function content_56f52c8e74da05_43518964 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '376156f52c8e1a06b5_46496449';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/finalesRounds.css" >
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/finales.js"><?php echo '</script'; ?>
>
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
        
        <div id="container" class="container">
            <div id="contenu" class="row">
		<h1>Finales de <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
 <?php echo $_smarty_tpl->tpl_vars['gsb']->value[$_smarty_tpl->tpl_vars['looser']->value];?>
</h1>
                <form>
                    <?php ob_start();
echo count($_smarty_tpl->tpl_vars['matches']->value);
$_tmp1=ob_get_clean();
if ($_tmp1 > 0) {?>
                        <table>
                            <tr>
                                <?php
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['c']->step = -1;$_smarty_tpl->tpl_vars['c']->total = (int) ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? 0+1 - ($_smarty_tpl->tpl_vars['niveau']->value) : $_smarty_tpl->tpl_vars['niveau']->value-(0)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0) {
for ($_smarty_tpl->tpl_vars['c']->value = $_smarty_tpl->tpl_vars['niveau']->value, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++) {
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration == 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration == $_smarty_tpl->tpl_vars['c']->total;?>
                                        <th> Round <?php echo 1+$_smarty_tpl->tpl_vars['niveau']->value-$_smarty_tpl->tpl_vars['c']->value;?>
 </th>
                                <?php }
}
?>

                            </tr>
                            <tr>
                                <?php
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['c']->step = -1;$_smarty_tpl->tpl_vars['c']->total = (int) ceil(($_smarty_tpl->tpl_vars['c']->step > 0 ? 0+1 - ($_smarty_tpl->tpl_vars['niveau']->value) : $_smarty_tpl->tpl_vars['niveau']->value-(0)+1)/abs($_smarty_tpl->tpl_vars['c']->step));
if ($_smarty_tpl->tpl_vars['c']->total > 0) {
for ($_smarty_tpl->tpl_vars['c']->value = $_smarty_tpl->tpl_vars['niveau']->value, $_smarty_tpl->tpl_vars['c']->iteration = 1;$_smarty_tpl->tpl_vars['c']->iteration <= $_smarty_tpl->tpl_vars['c']->total;$_smarty_tpl->tpl_vars['c']->value += $_smarty_tpl->tpl_vars['c']->step, $_smarty_tpl->tpl_vars['c']->iteration++) {
$_smarty_tpl->tpl_vars['c']->first = $_smarty_tpl->tpl_vars['c']->iteration == 1;$_smarty_tpl->tpl_vars['c']->last = $_smarty_tpl->tpl_vars['c']->iteration == $_smarty_tpl->tpl_vars['c']->total;?>
                                    <td>
                                        <table>
                                            <?php
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['m']->step = 1;$_smarty_tpl->tpl_vars['m']->total = (int) ceil(($_smarty_tpl->tpl_vars['m']->step > 0 ? $_smarty_tpl->tpl_vars['match_par_niveau']->value[$_smarty_tpl->tpl_vars['c']->value]+1 - (1) : 1-($_smarty_tpl->tpl_vars['match_par_niveau']->value[$_smarty_tpl->tpl_vars['c']->value])+1)/abs($_smarty_tpl->tpl_vars['m']->step));
if ($_smarty_tpl->tpl_vars['m']->total > 0) {
for ($_smarty_tpl->tpl_vars['m']->value = 1, $_smarty_tpl->tpl_vars['m']->iteration = 1;$_smarty_tpl->tpl_vars['m']->iteration <= $_smarty_tpl->tpl_vars['m']->total;$_smarty_tpl->tpl_vars['m']->value += $_smarty_tpl->tpl_vars['m']->step, $_smarty_tpl->tpl_vars['m']->iteration++) {
$_smarty_tpl->tpl_vars['m']->first = $_smarty_tpl->tpl_vars['m']->iteration == 1;$_smarty_tpl->tpl_vars['m']->last = $_smarty_tpl->tpl_vars['m']->iteration == $_smarty_tpl->tpl_vars['m']->total;?>
                                                <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj']+1 - (1) : 1-($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj'])+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                                                    <?php if ($_smarty_tpl->tpl_vars['j']->value == 1) {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['c']->value == 0 && $_smarty_tpl->tpl_vars['m']->value == 1) {?>
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
">
                                                                    FINALE<br>
                                                                    <a href="#" onclick="popup_heure(<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
)"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>
</a>
                                                                </td>
                                                            </tr>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['c']->value == 0 && $_smarty_tpl->tpl_vars['m']->value == 2) {?>
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
">
                                                                    Petite Finale<br>
                                                                    <a href="#" onclick="popup_heure(<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
)"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>
</a>
                                                                </td>
                                                            </tr>
                                                        <?php } else { ?>
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
">
                                                                    <a href="#" onclick="popup_heure(<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
)"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>
</a>
                                                                </td>
                                                            </tr>
                                                        <?php }?>
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
" id="cb_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
"
                                                                    onclick="active_groupe(<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
,<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche'];?>
,<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj'];?>
)">
                                                            </th>
                                                            <?php
$_smarty_tpl->tpl_vars['ma'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['ma']->step = 1;$_smarty_tpl->tpl_vars['ma']->total = (int) ceil(($_smarty_tpl->tpl_vars['ma']->step > 0 ? $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+1 - (1) : 1-($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche'])+1)/abs($_smarty_tpl->tpl_vars['ma']->step));
if ($_smarty_tpl->tpl_vars['ma']->total > 0) {
for ($_smarty_tpl->tpl_vars['ma']->value = 1, $_smarty_tpl->tpl_vars['ma']->iteration = 1;$_smarty_tpl->tpl_vars['ma']->iteration <= $_smarty_tpl->tpl_vars['ma']->total;$_smarty_tpl->tpl_vars['ma']->value += $_smarty_tpl->tpl_vars['ma']->step, $_smarty_tpl->tpl_vars['ma']->iteration++) {
$_smarty_tpl->tpl_vars['ma']->first = $_smarty_tpl->tpl_vars['ma']->iteration == 1;$_smarty_tpl->tpl_vars['ma']->last = $_smarty_tpl->tpl_vars['ma']->iteration == $_smarty_tpl->tpl_vars['ma']->total;?>
                                                                <th class="th_arbre_joueur">M<?php echo $_smarty_tpl->tpl_vars['ma']->value;?>
</th>
                                                            <?php }
}
?>

                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                    <?php }?>
                                                    <tr>
                                                        <?php if ($_smarty_tpl->tpl_vars['j']->value == 1) {?>	
                                                            <td class="td_arbre_gauche" rowspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj'];?>
">#<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
</td>
                                                        <?php }?>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['nom'])) {?>
                                                            <td class="td_arbre_joueur"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['nom'];?>
</td>
                                                        <?php } else { ?>
                                                            <td class="td_arbre_joueur">TBA</td>
                                                        <?php }?>
                                                        <td class="td_arbre_joueur<?php echo $_smarty_tpl->tpl_vars['clr']->value[$_smarty_tpl->tpl_vars['j']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['nom']->value[$_smarty_tpl->tpl_vars['j']->value];?>
</td>
                                                        
                                                        <?php
$_smarty_tpl->tpl_vars['ma'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['ma']->step = 1;$_smarty_tpl->tpl_vars['ma']->total = (int) ceil(($_smarty_tpl->tpl_vars['ma']->step > 0 ? $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+1 - (1) : 1-($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche'])+1)/abs($_smarty_tpl->tpl_vars['ma']->step));
if ($_smarty_tpl->tpl_vars['ma']->total > 0) {
for ($_smarty_tpl->tpl_vars['ma']->value = 1, $_smarty_tpl->tpl_vars['ma']->iteration = 1;$_smarty_tpl->tpl_vars['ma']->iteration <= $_smarty_tpl->tpl_vars['ma']->total;$_smarty_tpl->tpl_vars['ma']->value += $_smarty_tpl->tpl_vars['ma']->step, $_smarty_tpl->tpl_vars['ma']->iteration++) {
$_smarty_tpl->tpl_vars['ma']->first = $_smarty_tpl->tpl_vars['ma']->iteration == 1;$_smarty_tpl->tpl_vars['ma']->last = $_smarty_tpl->tpl_vars['ma']->iteration == $_smarty_tpl->tpl_vars['ma']->total;?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['scores']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['scores'][$_smarty_tpl->tpl_vars['ma']->value])) {?>
                                                                <td class="td_arbre_joueur_score"><?php echo $_smarty_tpl->tpl_vars['scores']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['scores'][$_smarty_tpl->tpl_vars['ma']->value];?>
</td>
                                                            <?php } else { ?>
                                                                <td class="td_arbre_joueur_score">-</td>
                                                            <?php }?>
                                                            <td class="td_arbre_joueur_score<?php echo $_smarty_tpl->tpl_vars['clr']->value[$_smarty_tpl->tpl_vars['j']->value];?>
">
                                                                <input type="text" name="s_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ma']->value;?>
"
                                                                    id="s_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ma']->value;?>
"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        <?php }
}
?>

                                                        
                                                        <td class="td_arbre_joueur_total<?php echo $_smarty_tpl->tpl_vars['clr']->value[$_smarty_tpl->tpl_vars['j']->value];?>
">
                                                            <input type="hidden" name="s_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_id" 
                                                                id="s_<?php echo $_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value];?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_id" value="<?php echo $_smarty_tpl->tpl_vars['id_score']->value[$_smarty_tpl->tpl_vars['j']->value];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['score'];?>

                                                        </td>
                                                        
                                                        <?php if (isset($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['score'])) {?>	
                                                            <td class="td_arbre_joueur_total"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['score'];?>
</td>
                                                        <?php } else { ?>
                                                            <td class="td_arbre_joueur_total">0</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['j']->value == 1) {?>	
                                                            <td class="td_arbre_droite" rowspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj'];?>
">
                                                                <?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['fleche'];?>
 <?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['id_parent'];?>

                                                            </td>                                                            
                                                        <?php }?>
                                                    </tr>
                                                <?php }
}
?>

                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
"></td>
                                                </tr>  
                                            <?php }
}
?>

                                        </table>
                                    </td>
                                <?php }
}
?>

                            </tr>
                        </table>
                    <?php } else { ?>  
                        Ce tournoi n'est pas encore encodé dans la base de données du site.
                    <?php }?>
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
            <input type="hidden" name="id_tournoi" value="<?php echo $_smarty_tpl->tpl_vars['id_tournoi']->value;?>
" />
            <input type="hidden" name="looser" value="<?php echo $_smarty_tpl->tpl_vars['looser']->value;?>
" />
            <input type="hidden" name="page" value="finales" />
            vendredi <input type="radio" name="jour" value="vendredi">
            / samedi <input type="radio" name="jour" value="samedi">
            / dimanche <input type="radio" name="jour" value="dimanche">
            <br>
            Heure :
            <select name="heure">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 23+1 - (0) : 0-(23)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
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
            h
            <select name="minute">
                 <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 5;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 59+1 - (0) : 0-(59)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
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
            <br>
            <input type="submit" value="Modifier" /><br>
	</div>
    </body>
</html><?php }
}
