<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:11:35
  from "E:\wamp\www\Intranet\view\templates\admin\groupes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52af7d76c02_85597222',
  'file_dependency' => 
  array (
    'c294d972d2d8936d449f7086c01b2190a5ec940c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\groupes.tpl',
      1 => 1458867127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/meta.tpl' => 1,
    'file:admin/header.tpl' => 1,
    'file:admin/nav.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/assets/js/groups.js.tpl' => 1,
  ),
),false)) {
function content_56f52af7d76c02_85597222 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1087256f52af7c69340_96264877';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/groupes.css" >
    </head>
    <body>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
         

	<div id="container" class="container">
            <div id="contenu" class="row">
                <h1>Groupes <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
</h1>
                   
                <div class="col-lg-6">
                    <form method="POST" action="modules/inscrire_groupes.php">
                        <table>
                            <input type="hidden" name="id_tournoi" value="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
" />
                            <tr>
                                <th>Participants</th>
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
                                    <th><?php echo $_smarty_tpl->tpl_vars['groupe']->value['nom_groupe'];?>
</th>
                                <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_local_item;
}
if ($__foreach_groupe_0_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_0_saved_item;
}
?>
                            </tr>
                            <?php
$_from = $_smarty_tpl->tpl_vars['participants']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_participant_1_saved_item = isset($_smarty_tpl->tpl_vars['participant']) ? $_smarty_tpl->tpl_vars['participant'] : false;
$_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['participant']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
$__foreach_participant_1_saved_local_item = $_smarty_tpl->tpl_vars['participant'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['participant']->value['nom'];?>
</td>
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
                                        <td>
                                            <input type="radio" name="parti_<?php echo $_smarty_tpl->tpl_vars['participant']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['groupe']->value['id_groupe'];?>
" />
                                        </td>
                                    <?php
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_local_item;
}
if ($__foreach_groupe_2_saved_item) {
$_smarty_tpl->tpl_vars['groupe'] = $__foreach_groupe_2_saved_item;
}
?>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['participant'] = $__foreach_participant_1_saved_local_item;
}
if ($__foreach_participant_1_saved_item) {
$_smarty_tpl->tpl_vars['participant'] = $__foreach_participant_1_saved_item;
}
?>
                            <tr>
                                <td colspan="<?php echo $_smarty_tpl->tpl_vars['nbr_groupes']->value+1;?>
">
                                    <input type="submit" value="Enregistrer" />
                                </td>
                            </tr>
                        </table>	
                    </form>
                </div>
                <div class="col-lg-6">
                    <input id="group-name" type="text" />
                    <button id="button-add-group" class="btn btn-primary">Add group</button>
                </div>
   
            </div>
	</div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/assets/js/groups.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tournoi'=>$_smarty_tpl->tpl_vars['tournoi']->value), 0, false);
?>


    </body>
</html><?php }
}
