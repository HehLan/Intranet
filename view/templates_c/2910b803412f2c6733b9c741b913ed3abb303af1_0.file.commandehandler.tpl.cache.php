<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:42
  from "E:\wamp\www\Intranet\view\templates\admin\commandehandler.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab689ddf9_03492888',
  'file_dependency' => 
  array (
    '2910b803412f2c6733b9c741b913ed3abb303af1' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\commandehandler.tpl',
      1 => 1458894385,
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
function content_56f4fab689ddf9_03492888 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '304856f4fab67e70f0_33685336';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/commandes.css" >
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
		<div id="container" class="container-fluid">
            <div id="contenu" class="col-lg-offset-2 col-lg-8">
                <h2>Gestionnaire de Commandes</h2>
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#commandesPane" aria-controls="commandesPane" role="tab" data-toggle="tab">
							Commandes
						</a>
					</li>
					<li role="presentation" class="">
						<a href="#commandesArticlesPane" aria-controls="commandesArticlesPane" role="tab" data-toggle="tab">
							Articles
						</a>
					</li>
					<li role="presentation" class="">
						<a href="#commandesGroupPane" aria-controls="commandesGroupPane" role="tab" data-toggle="tab">
							Groupes
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" id="commandesPane" class="tab-pane active">
						<div role="tablist" class="panel-group" id="commandesList">
							Aucune commande trouvée
						</div>
					</div>
					<div role="tabpanel" id="commandesArticlesPane" class="tab-pane">
						<button class="btn btn-primary" id="btn-add-article">
							Ajouter un article
						</button>
						<div role="tablist" class="panel-group" id="commandesArticlesList">
							Aucun article trouvé
						</div>
					</div>
					<div role="tabpanel" id="commandesGroupPane" class="tab-pane">
						<div role="tablist" class="panel-group" id="commandesGroupList">
							Aucun groupe trouvé
						</div>
					</div>
				</div>
            </div>
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/js/commandHandler.js"><?php echo '</script'; ?>
> 
    </body>
</html><?php }
}
