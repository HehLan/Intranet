<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:49:31
  from "E:\wamp\www\Intranet\view\templates\default\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709167ba7bab6_04101540',
  'file_dependency' => 
  array (
    '99cd3c60150bb79a6fa2c84c413b3c6f7dbf00fb' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\login.tpl',
      1 => 1458864082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/meta.tpl' => 1,
    'file:default/footer.tpl' => 1,
    'file:default/assets/js/login.js.tpl' => 1,
  ),
),false)) {
function content_5709167ba7bab6_04101540 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '312815709167b9fea91_63355829';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/css/login.css" />
    </head>

    <body role="document">
        <div class="container-fluid" id="container">

            <div class="logo-hehlan">
                <img id="logo-hehlan-img" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'assets');?>
/img/private.png" alt="Logo HEHLan" title="Logo HEHLan"/>
            </div>

            <div id="alert-bad-login" class="alert alert-warning alert-dismissable col-lg-4" style="display: none">
                <button type="button" class="close">x</button>
                <h4>Erreur !</h4>
                <p>Le pseudo ou le mot de passe entré est invalide.</p>
                <p>Vérifier vos données saisies et réessayer.</p>
                <p>En cas d'oubli de vos données personnelles, vous pouvez toujours contacté les admins pour la réinitialisation de vos données.</p>
            </div>
            
            <div class="accordion">
                <h3><legend>Connexion</legend></h3>
                <div class="row" id="bloc_login">             
                    <form class="well myform" method="POST"action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="login">Pseudo </label>
                                <input id="login" class="form-control" type="text" name="login" placeholder="Veuillez entrer votre pseudo">  
                            </div>
                            <div class="form-group">
                                <label for="pwd">Mot de Passe </label>
                                <input id="pwd" class="form-control" type="password" name="pwd" placeholder="Veuillez entrer votre mot de passe">  
                            </div>
                            <button class="btn btn-primary" type="submit">Connexion</button>
                        </fieldset>                           
                    </form>               
                </div>
                <h3><legend>Mot de Passe Oublié</legend></h3>
                <div class="row" id="bloc_forgot">
                    <form class="well myform" id="my_form_forgot" method="POST" action="../index.php">
                        <fieldset>
                            <div class="form-group">
                                <label for="pseudo_forgot">Pseudo </label>
                                <input id="pseudo_forgot" class="form-control" type="text" name="pseudo_forgot" readonly>  
                            </div>
                            <div class="form-group">
                                <label for="email_forgot">Email </label>
                                <input id="email_forgot" class="form-control" type="email" name="email_forgot" readonly>  
                            </div>
                            <button class="btn btn-primary" id="submit_forgot" disabled type="submit">Valider</button>
                        </fieldset>                           
                    </form>
                </div>            
            </div>
            
        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:default/assets/js/login.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('tried'=>$_smarty_tpl->tpl_vars['tried']->value), 0, false);
?>


    </body>
</html>
<?php }
}
