<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:29:38
  from "E:\wamp\www\Intranet\view\templates\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc5af2edac41_57987809',
  'file_dependency' => 
  array (
    '50dbe11ea4d13b924c1b789ce0ec2821a8872026' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\index.tpl',
      1 => 1457279212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/header.tpl' => 1,
    'file:default/nav.tpl' => 1,
    'file:default/footer.tpl' => 1,
  ),
),false)) {
function content_56dc5af2edac41_57987809 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1625156dc5af2db1e06_33604166';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/index.css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'domain');?>
/src/js/getXhr.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function news_toggle(idn)
            {
                var nom = '#contenu_news_' + idn;
                $(nom).toggle();
            }
        <?php echo '</script'; ?>
>
    </head>
    <body role="document">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'next_matches'=>$_smarty_tpl->tpl_vars['next_matches']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('con'=>$_smarty_tpl->tpl_vars['con']->value,'navTournois'=>$_smarty_tpl->tpl_vars['navTournois']->value), 0, false);
?>

        <div id="container" class="container-fluid">
            <div class="row">
                <div id="bloc_news" class="col-lg-6 col-xs-12">
                    <h3>News</h3>
                    <?php
$__section_sec1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1'] : false;
$__section_sec1_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newsList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_0_total = $__section_sec1_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_0_total != 0) {
for ($__section_sec1_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_0_iteration <= $__section_sec1_0_total; $__section_sec1_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
                        <div class="une_news" id="bloc_news_<?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_news'];?>
">
                            <div class="titre_news" id="titre_news_<?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_news'];?>
" onclick="news_toggle(<?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_news'];?>
);">
                                <?php echo nl2br($_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['titre']);?>

                                <div class="date_news" id="footer_news_<?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_news'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['quand'];?>

                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_<?php echo $_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['id_news'];?>
">
                                <?php echo nl2br($_smarty_tpl->tpl_vars['newsList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['texte']);?>

                            </div>
                        </div>
                    <?php
}
}
if ($__section_sec1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = $__section_sec1_0_saved;
}
?>
                </div>		
                <div id="bloc_chat" class="col-lg-6 col-xs-12">
                    <?php if ($_smarty_tpl->tpl_vars['con']->value) {?>
                        <h3>HEHLan Chat</h3>
                        <?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
                            <div id="bloc_chat_box">
                                <div id="bloc_chat_texte"></div>
                                <div id="bloc_chat_users">
                                    <strong>Connectés :</strong><br>				
                                </div>
                                <div id="bloc_chat_send">
                                    <input type="text" name="message" id="bloc_chat_message" />
                                    <input type="button" value="Envoyer" id="bloc_chat_bouton" onclick="ecrire();" />
                                </div>
                            </div>
                        <?php } else { ?>
                            <div id="bloc_chat_texte">			
                                <strong>Sorry les gars ... le chat est désactivé :o/</strong>
                            </div>
                        <?php }?>
                    <?php } else { ?>
                        <h3 id="bloc_chat_titre">Connexion</h3>	
                        <div id="bloc_connexion">
                            <form method="POST" id="bloc_connexion_form">
                                <table id="bloc_connexion_table">
                                    <tr>
                                        <td><label><strong>Login</strong></label></td>
                                        <td><input type="text" name="login" /></td>
                                    </tr>
                                    <tr>
                                        <td><label><strong>Password</strong></label></td>
                                        <td><input type="password" name="pwd" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" value="Connexion" /></td>						
                                    </tr>					
                                </table>
                            </form>
                        </div>
                    <?php }?>
                </div>
            </div>			
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
            <?php echo '<script'; ?>
 type="text/javascript">
                $("#bloc_chat_message").keyup(function (event)
                {
                    if (event.keyCode === 13)
                    {
                        $("#bloc_chat_bouton").click();
                    }
                });

                afficher(0);
                users();
            <?php echo '</script'; ?>
>
        <?php }?>
    </body>
</html><?php }
}
