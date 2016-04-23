<?php
/* Smarty version 3.1.29, created on 2016-03-25 02:38:59
  from "E:\wamp\www\Intranet\view\templates\admin\downloads.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f496b3cb18c5_68598109',
  'file_dependency' => 
  array (
    'fc4bc542d6c5d15344e93cf23bff53f1d671eca9' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\downloads.tpl',
      1 => 1458511015,
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
function content_56f496b3cb18c5_68598109 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1755456f496b3b51f68_75830287';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/downloads.css" >
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <div id="bloc_add_downloads" class="col-lg-4 col-xs-12">		
                    <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                        <legend>Nouveau download</legend>
                        <fieldset>
                            <input type="hidden" name="id_downloads" value="0">
                            <div class="form-group">
                                <label for="title">Titre : </label>
                                <input id="title" class="form-control" type="text" name="title" >  
                            </div>
                            <div class="form-group">
                                <label for="textarea">Source : </label>
                                <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button> 
                        </fieldset>
                    </form>
                </div>
                
                
                <div id="bloc_update_downloads" class="col-lg-4 col-xs-12">
                    <?php
$_from = $_smarty_tpl->tpl_vars['downloads']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_download_0_saved_item = isset($_smarty_tpl->tpl_vars['download']) ? $_smarty_tpl->tpl_vars['download'] : false;
$_smarty_tpl->tpl_vars['download'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['download']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
$__foreach_download_0_saved_local_item = $_smarty_tpl->tpl_vars['download'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['download']->value['invisible'] == 0) {?> 
                            <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                                <legend>Published downloads</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="<?php echo $_smarty_tpl->tpl_vars['download']->value['id_downloads'];?>
">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="<?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Source : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><?php echo $_smarty_tpl->tpl_vars['download']->value['src'];?>
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/downloads_hide.php?invisible=1&id_downloads=<?php echo $_smarty_tpl->tpl_vars['download']->value['id_downloads'];?>
">Hide</a> 
                                    <small><p class="pull-right">Last update : <?php echo $_smarty_tpl->tpl_vars['download']->value['published_date'];?>
</p></small>                                    
                                </fieldset>
                            </form>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_0_saved_local_item;
}
if ($__foreach_download_0_saved_item) {
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_0_saved_item;
}
?>  
                </div>
                
                
                <div id="bloc_deleted_downloads" class="col-lg-4 col-xs-12">
                    <?php
$_from = $_smarty_tpl->tpl_vars['downloads']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_download_1_saved_item = isset($_smarty_tpl->tpl_vars['download']) ? $_smarty_tpl->tpl_vars['download'] : false;
$_smarty_tpl->tpl_vars['download'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['download']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
$__foreach_download_1_saved_local_item = $_smarty_tpl->tpl_vars['download'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['download']->value['invisible'] == 1) {?> 
                            <form class="well col-lg-12" method="POST" action="modules/downloads_save.php">
                                <legend>Hidden downloads</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="<?php echo $_smarty_tpl->tpl_vars['download']->value['id_downloads'];?>
">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="<?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Source : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><?php echo $_smarty_tpl->tpl_vars['download']->value['src'];?>
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/downloads_hide.php?invisible=0&id_downloads=<?php echo $_smarty_tpl->tpl_vars['download']->value['id_downloads'];?>
">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/downloads_delete.php?id_downloads=<?php echo $_smarty_tpl->tpl_vars['download']->value['id_downloads'];?>
">Delete</a> 
                                    <small><p class="pull-right">Last update : <?php echo $_smarty_tpl->tpl_vars['download']->value['published_date'];?>
</p></small>
                                </fieldset>
                            </form>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_local_item;
}
if ($__foreach_download_1_saved_item) {
$_smarty_tpl->tpl_vars['download'] = $__foreach_download_1_saved_item;
}
?>  
                </div>  
                
                
                
                
            </div>
        </div>	
    
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
