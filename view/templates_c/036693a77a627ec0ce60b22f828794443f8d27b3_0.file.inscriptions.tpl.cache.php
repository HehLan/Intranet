<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:00:09
  from "E:\wamp\www\Intranet\view\templates\admin\inscriptions.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52849709338_13909647',
  'file_dependency' => 
  array (
    '036693a77a627ec0ce60b22f828794443f8d27b3' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\inscriptions.tpl',
      1 => 1458870313,
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
function content_56f52849709338_13909647 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2169956f52849572ed7_89612771';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/inscriptions.css" > 
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div id="InscriptionDesJoueursEquipesAuxTournois" class="col-lg-12">
                    <div class="row">
                        <!-- tournois avec equipes -->
                        <?php
$_from = $_smarty_tpl->tpl_vars['tab']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ligne_0_saved_item = isset($_smarty_tpl->tpl_vars['ligne']) ? $_smarty_tpl->tpl_vars['ligne'] : false;
$_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ligne']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
$__foreach_ligne_0_saved_local_item = $_smarty_tpl->tpl_vars['ligne'];
?>
                            <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4><?php echo $_smarty_tpl->tpl_vars['ligne']->value['2'];?>
</h4>
                                <div class="list" id="ListeInscrit<?php echo $_smarty_tpl->tpl_vars['ligne']->value['1'];?>
">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['donnees']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_1_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_1_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                        <div class="row teamItem">
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value[('id_tournoi').($_smarty_tpl->tpl_vars['ligne']->value['1'])] == $_smarty_tpl->tpl_vars['ligne']->value['1']) {?>
                                                <label class="col-lg-12"><input type='checkbox' checked value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_equipes'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</label>
                                            <?php } else { ?>
                                                <label class="col-lg-12"><input type='checkbox' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_equipes'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</label>
                                            <?php }?>
                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_local_item;
}
if ($__foreach_row_1_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_1_saved_item;
}
?>
                                </div>
                                <center>
                                    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="<?php echo $_smarty_tpl->tpl_vars['ligne']->value['1'];?>
" value="Valider les inscriptions">
                                </center>
                            </div>                        
                        <?php
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_0_saved_local_item;
}
if ($__foreach_ligne_0_saved_item) {
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_0_saved_item;
}
?>
                        
                        <!-- tournois individuels -->
                        <?php
$_from = $_smarty_tpl->tpl_vars['tabJT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ligne_2_saved_item = isset($_smarty_tpl->tpl_vars['ligne']) ? $_smarty_tpl->tpl_vars['ligne'] : false;
$_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ligne']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->_loop = true;
$__foreach_ligne_2_saved_local_item = $_smarty_tpl->tpl_vars['ligne'];
?>
                            <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4><?php echo $_smarty_tpl->tpl_vars['ligne']->value['2'];?>
</h4>
                                <div class="list" id="ListeInscritJT<?php echo $_smarty_tpl->tpl_vars['ligne']->value['1'];?>
">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['donneesJT']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_3_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_3_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                                        <div class="row joueurItem">
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value[('id_tournoi').($_smarty_tpl->tpl_vars['ligne']->value['1'])] == $_smarty_tpl->tpl_vars['ligne']->value['1']) {?>
                                                <label class="col-lg-6"><input type="checkbox" checked value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pseudo'];?>
</label>
                                            <?php } else { ?>
                                                <label class="col-lg-6"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['pseudo'];?>
</label>                                    
                                            <?php }?>
                                            <input class="col-lg-5" type="text" id="Joueur<?php echo $_smarty_tpl->tpl_vars['ligne']->value['1'];
echo $_smarty_tpl->tpl_vars['row']->value['id_joueur'];?>
" disabled readonly value="<?php echo $_smarty_tpl->tpl_vars['row']->value[('pseudoJeux').($_smarty_tpl->tpl_vars['ligne']->value['1'])];?>
">
                                        </div>
                                    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_local_item;
}
if ($__foreach_row_3_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_3_saved_item;
}
?>
                                </div>
                                <center>
                                    <input type="button" class="submitInscriptionJTAdmin" id="<?php echo $_smarty_tpl->tpl_vars['ligne']->value['1'];?>
" value="Valider les inscriptions">
                                </center>
                            </div>                        
                        <?php
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_2_saved_local_item;
}
if ($__foreach_ligne_2_saved_item) {
$_smarty_tpl->tpl_vars['ligne'] = $__foreach_ligne_2_saved_item;
}
?>                        
                    </div>
                </div>
            </div>
        </div>	
    
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/inscriptions.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
