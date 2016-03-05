<?php
/* Smarty version 3.1.29, created on 2016-03-05 13:57:23
  from "E:\wamp\www\Intranet\view\templates\default\joueurs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dad7b32d6e81_85041304',
  'file_dependency' => 
  array (
    'a53587d829aef1f079c0bea5c00ddce34ebc0074' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\joueurs.tpl',
      1 => 1457174606,
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
function content_56dad7b32d6e81_85041304 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2321356dad7b30ee991_49222059';
?>

<!DOCTYPE html>
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
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/assets/js/joueur.js"><?php echo '</script'; ?>
>
    </head>

    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
?>

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-8 col-xs-12 map_cafetaria">
                    <img class="photo_cafetaria" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/plan.jpg">
                    <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['emplacements']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                        <div class='place' onclick='Click(this)' id="<?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_emplacement'];?>
" style="
                             position: absolute;
                             top: <?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['top'];?>
%;
                             left: <?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['xy_left'];?>
%;
                             width: <?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['width'];?>
%;
                             height: <?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['height'];?>
%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                             <?php if ($_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_joueur'] != 0) {?>
                                 background:#337ab7;
                             <?php } else { ?>
                                 background:initial;
                             <?php }?>">
                            <?php echo $_smarty_tpl->tpl_vars['emplacements']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['numero'];?>

                        </div>
                    <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
                    <?php
$__section_sec1_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['emplacements1']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_1_total = $__section_sec1_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_1_total != 0) {
for ($__section_sec1_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_1_iteration <= $__section_sec1_1_total; $__section_sec1_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                        <div class='tooltip' style='position:absolute;
                             top: <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['top'];?>
%;
                             left: <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['xy_left'];?>
%;
                             width: <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['width'];?>
%;
                             height: <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['height'];?>
%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['pseudo'];?>
</strong>
                                <br>
                                Equipe : <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['team'];?>

                                <br>
                                <u>Tournoi : <?php echo $_smarty_tpl->tpl_vars['emplacements1']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nomTournoi'];?>
</u>
                            </span>
                        </div>
                    <?php
}
}
if ($__section_sec1_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_1_saved;
}
?>
                </div>		

                <!-- ****************************************** test button for pick *********************************************-->
                <a target="_blank" href="pick.php">Click to pick !</a>
                <!-- **************************************************************************************************** -->

                <div id="tabs" class="col-lg-2 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(1);">Joueur</a>
                        </div>	
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(2);">Equipe</a>
                        </div>
                    </div>

                    <!-- Player Tab -->
                    <div id="tabs-1">
                        <!-- Player Search Function -->
                        <form>
                            <label for="recherche_joueur">Rechercher un pseudo :</label>
                            <input type="text" name="recherche_joueur" id="recherche_joueur" />
                        </form>
                        <br>

                        <!-- Result Displaying -->
                        <div id="results" style="display: none">
                            <strong>Pas de résultat</strong>
                            <br>
                            <br>
                        </div>                       
                        
                        <!-- Player List -->
                        <?php
$_from = $_smarty_tpl->tpl_vars['joueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_playerLoop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] : false;
$__foreach_playerLoop_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$__foreach_playerLoop_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = new Smarty_Variable(array('index' => -1));
$__foreach_playerLoop_0_first = true;
$__foreach_playerLoop_0_iteration=0;
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_playerLoop_0_iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] = $__foreach_playerLoop_0_first;
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['last'] = $__foreach_playerLoop_0_iteration == $__foreach_playerLoop_0_total;
$__foreach_playerLoop_0_first = false;
$__foreach_playerLoop_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['first'] : null)) {?>
                                <div>
                                    <u>Liste des joueurs :</u>
                                </div>
                                <br>
                                <ul id="liste_joueur">
                            <?php }?>
                            <li>
                                <a class='ClassPseudo' 
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['index'] : null)%2 == 0) {?>
                                        style='background-color:#212121'                                                             
                                    <?php } else { ?>
                                        style='background-color:#262626'
                                    <?php }?>
                                    value='<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_emplacement'];?>
'><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>

                                </a>
                            </li>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop']->value['last'] : null)) {?>
                                </ul>
                            <?php }?> 
                        <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_playerLoop_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['joueur']->_loop) {
?>
                            <p>No players !</p>
                        <?php
}
if ($__foreach_playerLoop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_playerLoop'] = $__foreach_playerLoop_0_saved;
}
if ($__foreach_playerLoop_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_playerLoop_0_saved_item;
}
?>               
                    </div>

                    <!-- Team Tab -->
                    <div id="tabs-2" style="display:none;">
                        <!-- Team Search Function -->
                        <form>
                            <label for="recherche_equipe">Rechercher une équipe :</label>
                            <input type="text" name="recherche_equipe" id="recherche_equipe" />
                        </form>
                        <br>

                        <div id="results_equipe" style="display: none">
                            <strong>Pas de résultat</strong>
                            <br>
                            <br>
                        </div>

                        <div>
                            <div>
                                <u>Liste des Equipes :</u>
                            </div>
                            <br>
                            <ul id="liste_equipe">
                                <?php
$__section_sec1_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['equipes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_2_total = $__section_sec1_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_2_total != 0) {
for ($__section_sec1_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_2_iteration <= $__section_sec1_2_total; $__section_sec1_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                                    <li><a class='ClassEquipe' value='<?php echo $_smarty_tpl->tpl_vars['equipes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_equipes'];?>
'><?php echo $_smarty_tpl->tpl_vars['equipes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['nom'];?>
</a></li>
                                    <?php
}
}
if ($__section_sec1_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_2_saved;
}
?>
                            </ul>
                        </div>
                    </div>							
                    <div id="dialogEquipe_Emplacement" style="display:none;"></div>
                    <div id="dialogPseudo_Emplacement" style="display:none;"></div>
                </div>
            </div>

        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html>
<?php }
}
