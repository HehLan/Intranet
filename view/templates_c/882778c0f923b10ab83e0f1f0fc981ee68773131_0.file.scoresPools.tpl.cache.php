<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:04:52
  from "E:\wamp\www\Intranet\view\templates\admin\scoresPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f53774bd81c1_99694263',
  'file_dependency' => 
  array (
    '882778c0f923b10ab83e0f1f0fc981ee68773131' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresPools.tpl',
      1 => 1458829788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/meta.tpl' => 1,
    'file:admin/header.tpl' => 1,
    'file:admin/nav.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/assets/js/scoresPools.js.tpl' => 1,
  ),
),false)) {
function content_56f53774bd81c1_99694263 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3141256f5377490d399_79700771';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/scores.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.group.min.css" />
    </head>
    <body role="document">
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
	
        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Qualifications de <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</h1> 
                

                
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
$_from = $_smarty_tpl->tpl_vars['groupes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_groupLoop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] : false;
$__foreach_groupLoop_0_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] = new Smarty_Variable(array());
$__foreach_groupLoop_0_first = true;
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first'] = $__foreach_groupLoop_0_first;
$__foreach_groupLoop_0_first = false;
$__foreach_groupLoop_0_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first'] : null)) {?>
                                    <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                    
                                    <li role="presentation" id="nav-tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
"><a href="#tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
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
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_0_saved_local_item;
}
if ($__foreach_groupLoop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] = $__foreach_groupLoop_0_saved;
}
if ($__foreach_groupLoop_0_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_0_saved_item;
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
$__foreach_groupLoop_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] : false;
$__foreach_groupLoop_1_saved_item = isset($_smarty_tpl->tpl_vars['groupe']) ? $_smarty_tpl->tpl_vars['groupe'] : false;
$_smarty_tpl->tpl_vars['groupe'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] = new Smarty_Variable(array());
$__foreach_groupLoop_1_first = true;
$_smarty_tpl->tpl_vars['groupe']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['groupe']->value) {
$_smarty_tpl->tpl_vars['groupe']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first'] = $__foreach_groupLoop_1_first;
$__foreach_groupLoop_1_first = false;
$__foreach_groupLoop_1_saved_local_item = $_smarty_tpl->tpl_vars['groupe'];
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop']->value['first'] : null)) {?>
                                <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                
                                <div role="tabpanel" class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">
                            <?php } else { ?>                            
                                <div role="tabpanel" class="tab-pane" id="tab-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">
                            <?php }?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>                                                 
                                            <?php if (is_array($_smarty_tpl->tpl_vars['groupe']->value['teams'])) {?>
                                                <?php
$_from = $_smarty_tpl->tpl_vars['groupe']->value['teams'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_team_2_saved_item = isset($_smarty_tpl->tpl_vars['team']) ? $_smarty_tpl->tpl_vars['team'] : false;
$_smarty_tpl->tpl_vars['team'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['team']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
$__foreach_team_2_saved_local_item = $_smarty_tpl->tpl_vars['team'];
?>
                                                    <li><?php echo $_smarty_tpl->tpl_vars['team']->value['nom'];?>
</li>
                                                 <?php
$_smarty_tpl->tpl_vars['team'] = $__foreach_team_2_saved_local_item;
}
if ($__foreach_team_2_saved_item) {
$_smarty_tpl->tpl_vars['team'] = $__foreach_team_2_saved_item;
}
?>
                                            <?php } else { ?>
                                                No teams available.
                                            <?php }?> 
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
"></div>
                                            </div>
                                        </div>
                                        <div id="data-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                        </div>
                                    </div>
                                </div>
                        <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_1_saved_local_item;
}
if ($__foreach_groupLoop_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_groupLoop'] = $__foreach_groupLoop_1_saved;
}
if ($__foreach_groupLoop_1_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupLoop_1_saved_item;
}
?>
                    </div>
                
            </div>
        </div>
        
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/baconjs/Bacon-1ab32ffb.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/lodash/lodash-2.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/live/live.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/handlebars/handlebars.1.0.0.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.group.min.js"><?php echo '</script'; ?>
>

        
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/assets/js/scoresPools.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tournoi'=>$_smarty_tpl->tpl_vars['tournoi']->value,'groupes'=>$_smarty_tpl->tpl_vars['groupes']->value), 0, false);
?>

        

    </body>
</html><?php }
}
