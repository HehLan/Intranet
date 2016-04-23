<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:04:58
  from "E:\wamp\www\Intranet\view\templates\default\tournoisRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f5377ae3ec41_33130298',
  'file_dependency' => 
  array (
    '22ca7d08a07342e8dbb2851259088780ec16caa8' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\tournoisRounds.tpl',
      1 => 1458877426,
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
function content_56f5377ae3ec41_33130298 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '525456f5377ab9af24_72673056';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/tournoisRounds.css" />
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
                    
                    <h1>Groupes de qualifications de <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</h1>
                    
                    <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">FINALES DES PGM'S (gold)</a></p>
                    <?php if ($_smarty_tpl->tpl_vars['nbr_lb2']->value > 0) {?>
                        <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=2">FINALES DES LOSERS (silver)</a></p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['nbr_lb3']->value > 0) {?>
                        <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=3">FINALES DES NOOBS (bronze)</a></p>
                    <?php }?>
 
   
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_playerLoop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] : false;
$__foreach_playerLoop_0_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = new Smarty_Variable(array());
$__foreach_playerLoop_0_first = true;
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] = $__foreach_playerLoop_0_first;
$__foreach_playerLoop_0_first = false;
$__foreach_playerLoop_0_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] : null)) {?>
                                    <li role="presentation" id="nav-tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" class="active"><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" aria-controls="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
</a></li>
                                <?php } else { ?>  
                                    <li role="presentation" id="nav-tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
"><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" aria-controls="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
</a></li>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_playerLoop_0_saved_local_item;
}
if ($__foreach_playerLoop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = $__foreach_playerLoop_0_saved;
}
if ($__foreach_playerLoop_0_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_playerLoop_0_saved_item;
}
?>
                        </ul>
                    </div> 
                    
                    
                    <div class="tab-content">
                        <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_playerLoop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] : false;
$__foreach_playerLoop_1_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = new Smarty_Variable(array());
$__foreach_playerLoop_1_first = true;
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] = $__foreach_playerLoop_1_first;
$__foreach_playerLoop_1_first = false;
$__foreach_playerLoop_1_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] : null)) {?>
                                <div role="tabpanel" class="tab-pane active" id="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">     
                            <?php } else { ?>                            
                                <div role="tabpanel" class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">
                            <?php }?> 
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nombreManche']+2;?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['groupe']->value['jour'];?>
 <?php echo $_smarty_tpl->tpl_vars['groupe']->value['heure'];?>
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
$_from = $_smarty_tpl->tpl_vars['groupe']->value['joueurs'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_2_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_2_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
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
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_2_saved_local_item;
}
if ($__foreach_joueur_2_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_2_saved_item;
}
?>
                                </table>                                
                            </div>
                        </div>
                        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_playerLoop_1_saved_local_item;
}
if ($__foreach_playerLoop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = $__foreach_playerLoop_1_saved;
}
if ($__foreach_playerLoop_1_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_playerLoop_1_saved_item;
}
?>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
