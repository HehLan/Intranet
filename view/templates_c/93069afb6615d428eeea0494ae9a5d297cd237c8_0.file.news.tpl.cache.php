<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:50:45
  from "E:\wamp\www\Intranet\view\templates\admin\news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916c5242fd7_26823766',
  'file_dependency' => 
  array (
    '93069afb6615d428eeea0494ae9a5d297cd237c8' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\news.tpl',
      1 => 1458045216,
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
function content_570916c5242fd7_26823766 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '26233570916c5116302_64591303';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/news.css" >
    </head>

    <body role="document">
 	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
         
                <div id="bloc_add_news" class="col-lg-4 col-xs-12">		
                    <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                        <legend>Nouvelle news</legend>
                        <fieldset>
                            <input type="hidden" name="id_news" value="0">
                            <div class="form-group">
                                <label for="title">Titre : </label>
                                <input id="title" class="form-control" type="text" name="title" >  
                            </div>
                            <div class="form-group">
                                <label for="textarea">Texte : </label>
                                <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button> 
                        </fieldset>
                    </form>
                </div>
                
                
                <div id="bloc_update_news" class="col-lg-4 col-xs-12">
                    <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_new_0_saved_item = isset($_smarty_tpl->tpl_vars['new']) ? $_smarty_tpl->tpl_vars['new'] : false;
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['new']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
$__foreach_new_0_saved_local_item = $_smarty_tpl->tpl_vars['new'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['new']->value['invisible'] == 0) {?> 
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="<?php echo $_smarty_tpl->tpl_vars['new']->value['id_news'];?>
">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="<?php echo $_smarty_tpl->tpl_vars['new']->value['titre'];?>
">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><?php echo $_smarty_tpl->tpl_vars['new']->value['texte'];?>
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=<?php echo $_smarty_tpl->tpl_vars['new']->value['id_news'];?>
">Hide</a> 
                                    <small><p class="pull-right">Last update : <?php echo $_smarty_tpl->tpl_vars['new']->value['quand'];?>
</p></small>                                    
                                </fieldset>
                            </form>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_0_saved_local_item;
}
if ($__foreach_new_0_saved_item) {
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_0_saved_item;
}
?>  
                </div>
                
                
                <div id="bloc_deleted_news" class="col-lg-4 col-xs-12">
                    <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_new_1_saved_item = isset($_smarty_tpl->tpl_vars['new']) ? $_smarty_tpl->tpl_vars['new'] : false;
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['new']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
$__foreach_new_1_saved_local_item = $_smarty_tpl->tpl_vars['new'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['new']->value['invisible'] == 1) {?> 
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Hidden news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="<?php echo $_smarty_tpl->tpl_vars['new']->value['id_news'];?>
">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="<?php echo $_smarty_tpl->tpl_vars['new']->value['titre'];?>
">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><?php echo $_smarty_tpl->tpl_vars['new']->value['texte'];?>
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=0&id_news=<?php echo $_smarty_tpl->tpl_vars['new']->value['id_news'];?>
">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/news_delete.php?id_news=<?php echo $_smarty_tpl->tpl_vars['new']->value['id_news'];?>
">Delete</a> 
                                    <small><p class="pull-right">Last update : <?php echo $_smarty_tpl->tpl_vars['new']->value['quand'];?>
</p></small>
                                </fieldset>
                            </form>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_1_saved_local_item;
}
if ($__foreach_new_1_saved_item) {
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_1_saved_item;
}
?>  
                </div>  
            </div>
	</div>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
 
    </body>
</html><?php }
}
