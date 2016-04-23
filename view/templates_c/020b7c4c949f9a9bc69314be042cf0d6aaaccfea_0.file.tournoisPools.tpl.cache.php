<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:23
  from "E:\wamp\www\Intranet\view\templates\default\tournoisPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916eb067136_68068729',
  'file_dependency' => 
  array (
    '020b7c4c949f9a9bc69314be042cf0d6aaaccfea' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\tournoisPools.tpl',
      1 => 1458930549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/header.tpl' => 1,
    'file:default/nav.tpl' => 1,
    'file:default/footer.tpl' => 1,
    'file:default/assets/js/tournoisPools.js.tpl' => 1,
  ),
),false)) {
function content_570916eb067136_68068729 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11909570916eac94380_83602165';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/tournoisPools.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.group.min.css" />
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
                                        
                                        <!-- Old system -->
                                        <div class="col-lg-12">
                                            
                                            
                                                <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'n', 0);?> 
                                                <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'r', 0);?> 
                                                <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupe']->value['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>  
                                                    <?php $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable($_smarty_tpl->tpl_vars['n']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'n', 0);?>                                                 
                                                <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
                                                <?php if ($_smarty_tpl->tpl_vars['n']->value%2 == 0) {?> 
                                                    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable($_smarty_tpl->tpl_vars['n']->value-1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'r', 0);?>
                                                <?php } else { ?> 
                                                    <?php $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable($_smarty_tpl->tpl_vars['n']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'r', 0);?>
                                                <?php }?>
                                                    
                                                
                                                <?php
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['a']->step = 1;$_smarty_tpl->tpl_vars['a']->total = (int) ceil(($_smarty_tpl->tpl_vars['a']->step > 0 ? $_smarty_tpl->tpl_vars['n']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['n']->value)+1)/abs($_smarty_tpl->tpl_vars['a']->step));
if ($_smarty_tpl->tpl_vars['a']->total > 0) {
for ($_smarty_tpl->tpl_vars['a']->value = 1, $_smarty_tpl->tpl_vars['a']->iteration = 1;$_smarty_tpl->tpl_vars['a']->iteration <= $_smarty_tpl->tpl_vars['a']->total;$_smarty_tpl->tpl_vars['a']->value += $_smarty_tpl->tpl_vars['a']->step, $_smarty_tpl->tpl_vars['a']->iteration++) {
$_smarty_tpl->tpl_vars['a']->first = $_smarty_tpl->tpl_vars['a']->iteration == 1;$_smarty_tpl->tpl_vars['a']->last = $_smarty_tpl->tpl_vars['a']->iteration == $_smarty_tpl->tpl_vars['a']->total;?>
                                                    <?php
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['b']->step = 1;$_smarty_tpl->tpl_vars['b']->total = (int) ceil(($_smarty_tpl->tpl_vars['b']->step > 0 ? $_smarty_tpl->tpl_vars['n']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['n']->value)+1)/abs($_smarty_tpl->tpl_vars['b']->step));
if ($_smarty_tpl->tpl_vars['b']->total > 0) {
for ($_smarty_tpl->tpl_vars['b']->value = 1, $_smarty_tpl->tpl_vars['b']->iteration = 1;$_smarty_tpl->tpl_vars['b']->iteration <= $_smarty_tpl->tpl_vars['b']->total;$_smarty_tpl->tpl_vars['b']->value += $_smarty_tpl->tpl_vars['b']->step, $_smarty_tpl->tpl_vars['b']->iteration++) {
$_smarty_tpl->tpl_vars['b']->first = $_smarty_tpl->tpl_vars['b']->iteration == 1;$_smarty_tpl->tpl_vars['b']->last = $_smarty_tpl->tpl_vars['b']->iteration == $_smarty_tpl->tpl_vars['b']->total;?>
                                                        
                                                    <?php }
}
?>

                                                <?php }
}
?>

                                                
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['r']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['r']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                    
                                                <?php }
}
?>
                                                                                                  
                                               
                                                                                        
                                            
                                            <h2>Matches</h2>
                                            <table class="col-lg-12 table_pool">
                                                <tr>
                                                    <th class="th_title_pool"></th>
                                                    <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupe']->value['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                                                        <th class="th_team2_pool"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
</th>
                                                    <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
                                                </tr>
                                                <?php
$__section_sec1_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupe']->value['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_2_total = $__section_sec1_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_2_total != 0) {
for ($__section_sec1_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_2_iteration <= $__section_sec1_2_total; $__section_sec1_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                                                    <tr class="tr_pool">
                                                        <th class="th_team_pool"><?php echo $_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
</th>
                                                        <?php
$__section_sec2_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2'] : false;
$__section_sec2_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupe']->value['teams']) ? count($_loop) : max(0, (int) $_loop));
$__section_sec2_3_total = $__section_sec2_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = new Smarty_Variable(array());
if ($__section_sec2_3_total != 0) {
for ($__section_sec2_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] = 0; $__section_sec2_3_iteration <= $__section_sec2_3_total; $__section_sec2_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']++){
?>
                                                            <?php if ($_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['id']) {?>
                                                                <td class="td_x_pool">X</td>
                                                            <?php } else { ?>
                                                                <td class="td_<?php echo $_smarty_tpl->tpl_vars['groupe']->value['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['couleur'];?>
pool">
                                                                    <?php echo $_smarty_tpl->tpl_vars['groupe']->value['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['valeur'];?>


                                                                    <!-- manage link to access the pick -->
                                                                    <?php if ($_smarty_tpl->tpl_vars['groupe']->value['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['isPickActive'] && ($_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'] == $_smarty_tpl->tpl_vars['peekData']->value['teamName'] || $_smarty_tpl->tpl_vars['groupe']->value['teams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['nom'] == $_smarty_tpl->tpl_vars['peekData']->value['teamName']) && ($_smarty_tpl->tpl_vars['peekData']->value['idTournoi'] == 1)) {?>
                                                                        <div>
                                                                            <a target="_blank" href="pick.php?id=<?php echo $_smarty_tpl->tpl_vars['peekData']->value['userId'];?>
&idMatch=<?php echo $_smarty_tpl->tpl_vars['groupe']->value['resultTeams'][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec2']->value['index'] : null)]['id_match'];?>
" style="color : red;">Pick</a>
                                                                        </div>
                                                                    <?php }?>
                                                                </td>
                                                            <?php }?>
                                                        <?php
}
}
if ($__section_sec2_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec2'] = $__section_sec2_3_saved;
}
?>
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
                                           
                                        <!-- New System -->
                                        <div id="components" class="col-lg-12">
                                            <h2>Classement et résultats</h2>
                                            <div id="bracket-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
"></div>                                            
                                        </div>
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


          
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.group.min.js"><?php echo '</script'; ?>
>
     
        
        <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupe_2_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$__foreach_groupe_2_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/assets/js/tournoisPools.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tournoi'=>$_smarty_tpl->tpl_vars['tournoi']->value,'groupe'=>$_smarty_tpl->tpl_vars['groupe']->value), 0, true);
?>

        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_local_item;
}
if ($__foreach_groupe_2_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_item;
}
?>
        
    </body>
</html><?php }
}
