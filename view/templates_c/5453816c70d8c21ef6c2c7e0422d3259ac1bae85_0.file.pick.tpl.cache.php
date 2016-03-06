<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:28:43
  from "E:\wamp\www\Intranet\view\templates\default\pick.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc5abb4f6cd5_05354456',
  'file_dependency' => 
  array (
    '5453816c70d8c21ef6c2c7e0422d3259ac1bae85' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\pick.tpl',
      1 => 1457281506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/header.tpl' => 1,
    'file:default/footer.tpl' => 1,
  ),
),false)) {
function content_56dc5abb4f6cd5_05354456 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1545556dc5abb4337b7_76509175';
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- includes all libraries -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/pick.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/getXhr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/joueur.js"><?php echo '</script'; ?>
>
    </head>

    <body role="document">

        <!-- le logo -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <!-- CUSTOM NAVBAR TEMPLATE -->
        <nav id="navigation" class="navbar navbar-inverse" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header" style="width:100%; height:50px;"/>
                <div class="collapse navbar-collapse"/>
            </div>			
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1">
                    <span class="glyphicon glyphicon-user">Player 1</span> 
                </div>

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg10">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->tpl_vars['mapPaths']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_path_0_saved_item = isset($_smarty_tpl->tpl_vars['path']) ? $_smarty_tpl->tpl_vars['path'] : false;
$__foreach_path_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['path'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['path']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
$__foreach_path_0_saved_local_item = $_smarty_tpl->tpl_vars['path'];
?>
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg3">
                                <img class="img-responsive" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'src');
echo $_smarty_tpl->tpl_vars['path']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['mapNames']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"/>
                                <div style="margin-bottom: 5px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['mapNames']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</div>
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['path'] = $__foreach_path_0_saved_local_item;
}
if ($__foreach_path_0_saved_item) {
$_smarty_tpl->tpl_vars['path'] = $__foreach_path_0_saved_item;
}
if ($__foreach_path_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_path_0_saved_key;
}
?>
                    </div>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1">
                    <span class="glyphicon glyphicon-user">Player 2</span>
                </div>
            </div>
        </div>
                    
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
