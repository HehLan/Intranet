<?php
/* Smarty version 3.1.29, created on 2016-03-06 22:32:12
  from "E:\wamp\www\Intranet\view\templates\default\pick.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dca1dc8e65e1_95905434',
  'file_dependency' => 
  array (
    '5453816c70d8c21ef6c2c7e0422d3259ac1bae85' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\pick.tpl',
      1 => 1457299034,
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
function content_56dca1dc8e65e1_95905434 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1810456dca1dc7a2218_07511471';
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

        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                    <div class="glyphicon glyphicon-user" style="font-size:3em"></div> 
                    <div>Nickname 1</div>
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
                                <div onclick="kickMap(this)" onmouseover="highlightUp(this)" onmouseout="highlightDown(this)" data-value="1"> 
                                    <img id="<?php echo $_smarty_tpl->tpl_vars['mapNames']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['mapNames']->value[$_smarty_tpl->tpl_vars['i']->value];?>
" />
                                    <div style="margin-bottom:5px; margin-top:3px; color:#D1D1D1; text-align:center; border:2px solid #008080">
                                        <?php echo $_smarty_tpl->tpl_vars['mapNames']->value[$_smarty_tpl->tpl_vars['i']->value];?>

                                    </div>
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

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg1" style="text-align: center">
                    <div class="glyphicon glyphicon-user" style="font-size:3em"></div> 
                    <div>Nickname 2</div>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            <?php echo '<script'; ?>
>
                function kickMap(el) {
                    var container = $(el);              // div containing img&text
                    container.attr('data-value', 0);    // change div's value, to avoid it change css on mouseHower
                    
                    
                    // faire disparaitre l'effet de survol, car après avoir changé 'data-value' l'effet "mouseLeave" 
                    // n'a plus d'effet. Du coup on le fait ici à la main
                    container.children('div').css('background-color', 'rgba(0,0,0,0)');
                    // griser le champ de texte
                    container.css('background-color', 'rgba(0,0,0,0.8)');
                    // griser l'image
                    container.children('img').css('-webkit-filter', 'grayscale(1)');
                }

                // highlighting text 
                // --> visibility/styling while user is choosing
                function highlightUp(el) {
                    var container = $(el);              // div containing img&text
                    var val = $(el).attr('data-value'); // get its custom value
                    if (val == 1)
                        container.children('div').css('background-color', 'rgba(214,251,251,0.3)');
                }
                function highlightDown(el) {
                    var container = $(el);
                    var val = $(el).attr('data-value');
                    if (val == 1)
                        container.children('div').css('background-color', 'rgba(214,251,251,0)');
                }
            <?php echo '</script'; ?>
>
    </body>
    
</html><?php }
}
