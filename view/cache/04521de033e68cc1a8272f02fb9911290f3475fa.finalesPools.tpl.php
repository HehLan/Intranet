<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:26
  from "E:\wamp\www\Intranet\view\templates\default\finalesPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916ee7b6f28_77128098',
  'file_dependency' => 
  array (
    '04521de033e68cc1a8272f02fb9911290f3475fa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\finalesPools.tpl',
      1 => 1458863970,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1458864197,
      2 => 'file',
    ),
    '38b87550390b4498246829deafc9d57640d6d43a' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\header.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
    'eb253ea85fa0c415276f6fd713630b1f49745222' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\nav.tpl',
      1 => 1458904470,
      2 => 'file',
    ),
    'c083a58202c533e2b690828b2c323e50174f0471' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\footer.tpl',
      1 => 1458930549,
      2 => 'file',
    ),
    'e43d8719cdda8df2a9b54798429168de09245179' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\assets\\js\\finalesPools.js.tpl',
      1 => 1458872328,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_570916ee7b6f28_77128098 ($_smarty_tpl) {
?>

<!DOCTYPE HTML>
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/finalesPools.css" />		
        <link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery.bracket.min.css" />
    </head>
    <body role="document">
        
<header id="header" class="row" >
    <div id="logo" class="col-lg-7 col-sm-7 col-xs-12" >
        <a href="index.php">
            <img src="/Intranet/view/templates/default/assets/img/logos/logo-hehlan.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-5 col-sm-5 col-xs-12" >
                    <p id="welcome">Bienvenue <span id="user-login">admin</span> !</p>
            <div id="userbar">
                <a href="profile.php"><img src="/Intranet/view/templates/default/assets/img/userbar/profile.png" alt="Votre profil" data-toggle="tooltip" data-placement="bottom" title="Votre profil"></a>
                <a href="#" id="notifBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Vos notifications" notif-lastUpdate="0" data-content='<div id="notifPane">Aucune notification</div>'>
                    <img src="/Intranet/view/templates/default/assets/img/userbar/notif_off.png" alt="Vos Notifications" data-toggle="tooltip" data-placement="bottom" title="Vos notifications">
                </a>
                <a href="#" id="downloadBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Téléchargements" data-content='<div id="downloadPane" class="list-group">Aucun téléchargement</div>'>
                     <img src="/Intranet/view/templates/default/assets/img/userbar/download.png" alt="Téléchargements" data-toggle="tooltip" data-placement="bottom" title="Téléchargements"> 
                </a>
                <a href="#" class=""
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Votre adresse IP est" data-content="::1">
                    <img src="/Intranet/view/templates/default/assets/img/userbar/ip.png" alt="Votre adresse IP" data-toggle="tooltip" data-placement="bottom" title="Votre adresse IP">
                </a>
                <a href="commande.php"><img src="/Intranet/view/templates/default/assets/img/userbar/command.png" alt="Passer une commande" data-toggle="tooltip" data-placement="bottom" title="Passer une commande"></a>
                <a href="common/logout.php"><img src="/Intranet/view/templates/default/assets/img/userbar/logout.png" alt="Se déconnecter" data-toggle="tooltip" data-placement="bottom" title="Se déconnecter"></a>
            </div>
                       
    </div>	     
</header>

        
<nav id="navigation" class="navbar navbar-inverse" role="navigation" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/Intranet/index.php">Accueil</a></li>
                <li><a href="/Intranet/places.php">Places</a></li>         
                                    <li><a href="/Intranet/tournois.php?id=1">HOTS</a></li>
                                    <li><a href="/Intranet/tournois.php?id=2">COD4</a></li>
                                    <li><a href="/Intranet/tournois.php?id=3">TMNF</a></li>
                                    <li><a href="/Intranet/tournois.php?id=5">HS</a></li>
                                      
                                    <li><a href="/Intranet/admin/index.php">Admin</a></li>
                            </ul>
        </div>
    </div>			
</nav>

        
        <!-- Header and Rules -->
                    <div id="headerTournoi">
                <img id="headerTournoiImg" src="/Intranet/src/img/tournoisHeaders/hots_header.jpg" alt="HOTS" />
            </div>
                            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="/Intranet/src/pdf/rules/Heroes of The Storm - Réglement.pdf"> cliquez ici </a>
            </div>
        
        <div class="container-fluid" id="container">	
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    <h1>
                                                    Qualifications 
                                                HOTS
                    </h1>
                                            <p>Cliquez ici pour voir les <a href="tournois.php?id=1">QUALIFICATIONS</a></p>
                                                                                        
                    <div id="bracket" class="bracket"></div>
                    <p id="matchCallback"></p>
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


        
        <!-- jquery-bracket -->
        <script type="text/javascript" src="/Intranet/lib/jQuery/jquery.bracket.min.js"></script>
        
        
<script>

    var id = 1;

    $.ajax(
        {
            url: 'common/bracket_get.php?id_tournoi=' + id + "&type=2" + "&number=1",
            type: 'GET',
            dataType: 'text',
            success: function (text, status)
            {
                var data = JSON.parse(text);
                $("#bracket").bracket(
                {
                    init: data // data to initialize the bracket with
                }
            );
            },
            error: function (resultat, statut, erreur)
            {
                
            },
            complete: function (resultat, statut)
            {

            },
            async: false
        }
    );
    
</script>

    </body>
</html><?php }
}
