<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:08
  from "E:\wamp\www\Intranet\view\templates\admin\finalesPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916dcb1a113_36917771',
  'file_dependency' => 
  array (
    '6cc6bd188a105540f0c2d212f4aac8f3104d90ce' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\finalesPools.tpl',
      1 => 1458867193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/meta.tpl' => 1,
    'file:admin/header.tpl' => 1,
    'file:admin/nav.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/assets/js/finalesPools.js.tpl' => 1,
  ),
),false)) {
function content_570916dcb1a113_36917771 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16886570916dca1c269_96273047';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/finalesPools.css" >
        <!-- jquery-bracket -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.bracket.min.css" />
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>


        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Finales de <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
 <?php echo $_smarty_tpl->tpl_vars['gsb']->value[$_smarty_tpl->tpl_vars['looser']->value];?>
</h1>      
                
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-bracket-winner" aria-controls="tab-bracket-winner" role="tab" data-toggle="tab">Winner bracket</a></li>
                        <li role="presentation"><a href="#tab-bracket-looser" aria-controls="tab-bracket-looser" role="tab" data-toggle="tab">Looser bracket</a></li>
                    </ul>
                </div>                
                <div class="tab-content">
                    <!-- tab-bracket-winner -->
                    <div role="tabpanel" class="tab-pane active" id="tab-bracket-winner">
                        <div class="row">
                            <div id="components" class="col-lg-6">
                                <h2>Editeur</h2>
                                <div id="editor" class="bracket"></div>
                                <h2>Vue de l'utilisateur</h2>
                                <div id="view"></div>
                            </div>  
                            <div id="data" class="col-lg-6">
                                <h2>Code JSON</h2>
                                <p>Code JSON pour le stockage dans la base de données.</p>
                                <pre id="state">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                            </div>                                      
                        </div> 
                    </div>
                    <!-- tab-bracket-looser -->
                    <div role="tabpanel" class="tab-pane" id="tab-bracket-looser">
                        <div class="row">
                            <p>No looser bracket man !</p>                                     
                        </div> 
                    </div>
                </div>             
                
            </div>
        </div>
                       
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!-- jquery-bracket -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.bracket.min.js"><?php echo '</script'; ?>
>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/assets/js/finalesPools.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tournoi'=>$_smarty_tpl->tpl_vars['tournoi']->value), 0, false);
?>


    </body>
</html><?php }
}
