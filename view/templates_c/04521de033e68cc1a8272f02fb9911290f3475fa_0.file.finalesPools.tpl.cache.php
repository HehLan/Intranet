<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:26
  from "E:\wamp\www\Intranet\view\templates\default\finalesPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916ee52e795_08739567',
  'file_dependency' => 
  array (
    '04521de033e68cc1a8272f02fb9911290f3475fa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\finalesPools.tpl',
      1 => 1458863970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/header.tpl' => 1,
    'file:default/nav.tpl' => 1,
    'file:default/footer.tpl' => 1,
    'file:default/assets/js/finalesPools.js.tpl' => 1,
  ),
),false)) {
function content_570916ee52e795_08739567 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5286570916ee405940_05987339';
?>

<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/finalesPools.css" />		
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.bracket.min.css" />
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
?>

        
        <!-- Header and Rules -->
        <?php if (isset($_smarty_tpl->tpl_vars['tournoi']->value['header'])) {?>
            <div id="headerTournoi">
                <img id="headerTournoiImg" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['header'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>
" />
            </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['tournoi']->value['reglement'])) {?>
            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['reglement'];?>
"> cliquez ici </a>
            </div>
        <?php }?>

        <div class="container-fluid" id="container">	
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    <h1>
                        <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 2) {?>
                            Qualifications 
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['tournoi']->value['nomTournoi'];?>

                    </h1>
                    <?php if ($_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'] != 2) {?>
                        <p>Cliquez ici pour voir les <a href="tournois.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
">QUALIFICATIONS</a></p>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb2']->value > 0) {?>
                            <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=2">FINALES DES LOSERS (silver)</a></p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['nbr_lb3']->value > 0) {?>
                            <p>Cliquez ici pour voir les <a href="finales.php?id=<?php echo $_smarty_tpl->tpl_vars['tournoi']->value['id_tournoi'];?>
&lb=3">FINALES DES NOOBS (bronze)</a></p>
                        <?php }?>
                    <?php }?>
                    
                    <div id="bracket" class="bracket"></div>
                    <p id="matchCallback"></p>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        <!-- jquery-bracket -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/lib/jQuery/jquery.bracket.min.js"><?php echo '</script'; ?>
>
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/assets/js/finalesPools.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tournoi'=>$_smarty_tpl->tpl_vars['tournoi']->value), 0, false);
?>


    </body>
</html><?php }
}
