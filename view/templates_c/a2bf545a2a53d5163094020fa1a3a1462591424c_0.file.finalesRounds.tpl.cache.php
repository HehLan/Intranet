<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:41:41
  from "E:\wamp\www\Intranet\view\templates\default\finalesRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f54015c62322_85340370',
  'file_dependency' => 
  array (
    'a2bf545a2a53d5163094020fa1a3a1462591424c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\finalesRounds.tpl',
      1 => 1458864031,
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
function content_56f54015c62322_85340370 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2505856f540155ca991_59323730';
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/finalesRounds.css" />    
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
?>
	
        
        <!-- Header and Rules -->
        <?php if (isset($_smarty_tpl->tpl_vars['tournoi']->value['header'])) {?>
            <div id="headerTournoi">
                <img id="headerTournoiImg" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['header'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
" />
            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['tournoi']->value['reglement'])) {?>
            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['reglement'];?>
"> cliquez ici </a>
            </div>
        <?php }?>
        
        
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
                        <p>Cliquez ici pour voir les <a href="tournois.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">QUALIFICATIONS</a></p><br>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb2']->value > 0) {?>
                            <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=2">FINALES DES LOSERS (silver)</a><p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb3']->value > 0) {?>
                            <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        <?php }?>
                    <?php }?>
                    <br>	
                    <?php ob_start();
echo count($_smarty_tpl->tpl_vars['matches']->value);
$_tmp1=ob_get_clean();
if ($_tmp1 > 0) {?>
                        <table class="table_round">
                            <tr class="title_round">
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
                                                                    <?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>

                                                                </td>
                                                            </tr>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['c']->value == 0 && $_smarty_tpl->tpl_vars['m']->value == 2) {?>
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
">
                                                                    Petite Finale<br><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>

                                                                </td>
                                                            </tr>
                                                        <?php } else { ?>
                                                            <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['nbr_manche']+4;?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['heure'];?>

                                                                </td>
                                                            </tr>
                                                        <?php }?>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['j']->value == 1) {?>
                                                        <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur</th>
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
                                                        <?php }
}
?>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['score'])) {?>	
                                                            <td class="td_arbre_joueur_total"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]][$_smarty_tpl->tpl_vars['j']->value]['score'];?>
</td>
                                                        <?php } else { ?>
                                                            <td class="td_arbre_joueur_total">0</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['j']->value == 1) {?>	
                                                            <td class="td_arbre_droite" rowspan="<?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['maxj'];?>
"><?php echo $_smarty_tpl->tpl_vars['matches']->value[$_smarty_tpl->tpl_vars['tablo']->value[$_smarty_tpl->tpl_vars['c']->value][$_smarty_tpl->tpl_vars['m']->value]]['fleche'];?>
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
                        Qualifications encore en cours.
                    <?php }?>
                </div>
            </div>
        </div>
                       
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/js/finalesRounds.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
}
