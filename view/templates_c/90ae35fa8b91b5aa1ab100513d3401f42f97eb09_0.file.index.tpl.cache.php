<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:50:55
  from "E:\wamp\www\Intranet\view\templates\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916cfdf97c1_72012604',
  'file_dependency' => 
  array (
    '90ae35fa8b91b5aa1ab100513d3401f42f97eb09' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\index.tpl',
      1 => 1458867100,
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
function content_570916cfdf97c1_72012604 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15383570916cfd844b2_09566990';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'adminAssets');?>
/css/index.css" >		
    </head>
    <body role="document">	
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value), 0, false);
?>


        <div id="container" class="container">

            <div id="contenu" class="row">
                <h2>Overview</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_games_players_piegraph']->value;?>
" />
                    </div>
                    <div class="col-lg-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_games_teams_piegraph']->value;?>
" />
                    </div>
                    <div class="col-lg-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url_games_bargraph']->value;?>
" />
                    </div>
                </div>
            </div>
            
        </div>

        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
