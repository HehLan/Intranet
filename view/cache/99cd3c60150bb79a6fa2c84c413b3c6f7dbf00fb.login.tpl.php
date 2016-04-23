<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:49:31
  from "E:\wamp\www\Intranet\view\templates\default\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5709167bc40d29_48077593',
  'file_dependency' => 
  array (
    '99cd3c60150bb79a6fa2c84c413b3c6f7dbf00fb' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\login.tpl',
      1 => 1458864082,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1458864197,
      2 => 'file',
    ),
    'c083a58202c533e2b690828b2c323e50174f0471' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\footer.tpl',
      1 => 1458930549,
      2 => 'file',
    ),
    '09b04a050a86c4c821b82ba88b4893702d04a8f9' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\assets\\js\\login.js.tpl',
      1 => 1458670521,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5709167bc40d29_48077593 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        
<title>HEHLan</title>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="expires" content="never" />
<meta http-equiv="window-target" content="_top" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="none">
<meta name="rating" content="general" />	
<meta name="author" lang="fr" content="HeHLan" />	
<meta name="category" content="Gaming" />
<meta name="distribution" content="global" />
<meta name="generator" content="Notepad++" />
<meta name="publisher" content="HeHLan" />	
<meta name="revisit-after" content="0 days" />
<meta name="reply-to" content="info@hehlan.be" />
<meta name="location" content="Mons, BELGIUM" />
<meta name="geo.region" content="BE-WHT" />
<meta name="geo.placename" content="Mons, Hainaut" />

<link rel="shortcut icon" href="/Intranet/view/templates/default/assets/img/logos/logo-lan.ico" />
<link rel="icon" href="/Intranet/view/templates/default/assets/img/logos/logo-lan.ico" />

<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/FontAwesome/css/font-awesome.min.css" />

<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/notif.css" />


<!--[if !IE 7]>
    <style type="text/css">
        #container { display:table;height:100% }
    </style>
<![endif]-->
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/login.css" />
    </head>

    <body role="document">
        <div class="container-fluid" id="container">

            <div class="logo-hehlan">
                <img id="logo-hehlan-img" src="/Intranet/view/templates/default/assets/img/private.png" alt="Logo HEHLan" title="Logo HEHLan"/>
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
        
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved - Copyright <i class="fa fa-copyright"></i> 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/default/assets/img/logos/logo-ceheh.png" alt="CEHECOFH" />
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/default/assets/img/logos/logo-campus-technique.png" alt="HeH" />
        </a>
    </div>
</footer>



<!-- JAVASCRIPT LIBRARIES -->
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-ui.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery.media.js"></script>
<script type="text/javascript" src="/Intranet/lib/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/Less/less.js"></script>

<script type="text/javascript" src="/Intranet/src/js/menu.js"></script>
<script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
<script type="text/javascript" src="/Intranet/src/js/init.js"></script>


<script type="text/javascript" src="/Intranet/view/templates/default/assets/js/notifications.js"></script>
<script type="text/javascript" src="/Intranet/view/templates/default/assets/js/downloads.js"></script>


        
        
        
<script>
    
//------------------------------------------------------------------------------------------------------//
//                                                                                                      //
//                          Connection                                                                  //
//                                                                                                      //
//------------------------------------------------------------------------------------------------------//




//------------------------------------------------------------------------------------------------------//
//                                                                                                      //
//                          Forgot Password                                                             //
//                                                                                                      //
//------------------------------------------------------------------------------------------------------//

var erreur;
var emailOublie;

$("#my_form_forgot").dialog({
    autoOpen: false,
    resizable: false,
    draggable: true,
    width: 250,
    position: { my: "right top", at: "right top", of: $('#openConnexion') }
});

$('#submit_forgot').click(function () {

    var error = '';
    var valid = true;
    var regEmail = new RegExp("^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z0-9\-_.]{ 2,3 }$", "i");
    var pseudo = $('#pseudo').val();
    var email = $('#email').val();

    //pseudo
    if (!pseudo) {
        valid = false;
        erreur += "Vous n'avez pas rempli votre pseudo <br \>";
    }

    //email
    if (!email) {
        valid = false;
        erreur += "Vous n'avez pas rempli votre email <br \>";
    }
    else if (!regEmail.test(email)) {
        valid = false;
        erreur += "Votre e-mail est incorrect! <br \>";
    }

    if (valid) {
        $("#erreurMDPoublie").html("Vérification en cours...");
        $("#erreurMDPoublie").css({ color: "#00f" });
        $("#erreurMDPoublie").show();

        $.ajax({
            type: "POST",
            url: "common/oublieMDP.php",
            data: "pseudoOublie=" + pseudo + "&emailOublie=" + emailOublie,
            success: function (contenu, etat) {
                $("#erreurMDPoublie").html(contenu);
                $("#erreurMDPoublie").css({ color: "#000" });
                $("#afficheFormMDPoublie").hide();
                $("#erreurMDPoublie").show();
            }

        });
    }
    else {
        $("#erreurMDPoublie").html(erreur);
        $("#erreurMDPoublie").css({ color: "#f00" });
        $("#erreurMDPoublie").show();
    }

});


</script>

    </body>
</html>
<?php }
}
