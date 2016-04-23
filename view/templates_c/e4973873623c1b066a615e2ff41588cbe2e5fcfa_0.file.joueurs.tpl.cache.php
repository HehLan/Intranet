<?php
/* Smarty version 3.1.29, created on 2016-03-25 12:22:29
  from "E:\wamp\www\Intranet\view\templates\admin\joueurs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f51f75b2ad26_17865943',
  'file_dependency' => 
  array (
    'e4973873623c1b066a615e2ff41588cbe2e5fcfa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\joueurs.tpl',
      1 => 1458867072,
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
function content_56f51f75b2ad26_17865943 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1179856f51f75a8aa82_02608504';
?>

<!DOCTYPE html>
<html lang="fr">
    <head> 
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/joueurs.css" >
    </head>

    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 

        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div id="ListejoueurAdmin">
                    <fieldset>
                        <legend>Liste des joueurs</legend>
                        <table class="listeJoueurs">
                            <thead>
                                <tr>
                                    <th>Les Joueurs</th>
                                    <th>Tournois</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="listejoueurAdmin" >
                                            <?php
$_from = $_smarty_tpl->tpl_vars['joueurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_joueur_0_saved_item = isset($_smarty_tpl->tpl_vars['joueur']) ? $_smarty_tpl->tpl_vars['joueur'] : false;
$_smarty_tpl->tpl_vars['joueur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['joueur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['joueur']->value) {
$_smarty_tpl->tpl_vars['joueur']->_loop = true;
$__foreach_joueur_0_saved_local_item = $_smarty_tpl->tpl_vars['joueur'];
?>
                                               <h6 class="joueurAdmin" value="<?php echo $_smarty_tpl->tpl_vars['joueur']->value['id_joueur'];?>
"><?php echo $_smarty_tpl->tpl_vars['joueur']->value['pseudo'];?>
</h6> 
                                            <?php
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_local_item;
}
if ($__foreach_joueur_0_saved_item) {
$_smarty_tpl->tpl_vars['joueur'] = $__foreach_joueur_0_saved_item;
}
?>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="listeTournoisInscritDuJoueur">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
                                        Equipes du joueur
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <div id="EquipesDuJoueurAdmin" style="height:150px;">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>    
                    </fieldset>
                    <div id="infoEquipeAdmin" style="display: none"></div>
                </div>
            </div>	
        </div> 

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/joueurs.js"><?php echo '</script'; ?>
> 
        
    </body>
</html><?php }
}
