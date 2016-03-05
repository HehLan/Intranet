<?php
/* Smarty version 3.1.29, created on 2016-03-05 16:11:32
  from "C:\xampp\htdocs\Intranet\view\templates\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56daf724393570_54360386',
  'file_dependency' => 
  array (
    '212496e1cb70b6ee7acf6a93a4663d7ff39adbcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\index.tpl',
      1 => 1457190545,
      2 => 'file',
    ),
    'af751e6de53304a331e22e27a1af12516031d6ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1457190530,
      2 => 'file',
    ),
    'c39657ddc2a4f9b77c7f889d7d6fd5f7d744bf82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1457190545,
      2 => 'file',
    ),
    'af5214c9739fb386542284bef5bc41d6bb25cb2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1457190545,
      2 => 'file',
    ),
    'dc9b13d7f10e9731709763b996e0dc7adb3d3bd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\footer.tpl',
      1 => 1457190545,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56daf724393570_54360386 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        
<title>HEHLan</title>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="expires" content="never" />
<meta http-equiv="window-target" content="_top" />

<meta name="viewport" content="width=device-width, initial-scale="1.0" />
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

<link rel="shortcut icon" href="/Intranet/view/templates/admin/assets/img/logoheh.ico" />
<link rel="icon" href="/Intranet/view/templates/admin/assets/img/logoheh.ico" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/profil.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/jquery-ui2.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/joueurs.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/tournois.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/equipes.css" >


<!-- CSS certificated -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/news.css" >


<script src="/Intranet/assets/js/jquery.js"></script>
<script src="/Intranet/assets/js/bootstrap.min.js"></script>
<script src="/Intranet/assets/js/jquery-2.1.4.min.js"></script>

<!-- SCRIPTS BOOTSTRAPS -->		
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
        <script type="text/javascript" src="/Intranet/assets/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/Intranet/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="/Intranet/assets/js/admin_index.js"></script>		
    </head>

    <body role="document">	
        
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="index.php">
            <img src="/Intranet/view/templates/default/assets/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
                    <p>Bienvenue admin, <a href="common/deco.php">se déconnecter</a></p>
                <p>IP: ::1.</p>
               
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
                <li><a href="../index.php">Back</a></li>
                <li><a href="index.php">Overview</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>
                <li><a href="emplacements.php">Emplacements</a></li>
                <li><a href="equipes.php">Equipes</a></li>
                <li><a href="inscriptions.php">Inscriptions</a></li>
                <li><a href="tournois.php">Tournois</a></li>
            </ul>
        </div>
    </div>			
</nav>



        <div id="container" class="container-fluid">

            <div id="contenu">
                <h2>Overview</h2>
                <p>Ceci est la page d'acceuil de la partie admin.</p>
                <p>Vous pourrez voir une vue d'ensemble de la gestion de la HEHLan.</p>
                <h3>Statistiques</h3>
                <p>Dessiner de beaux graphes :)</p>
            </div>
        </div>

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;">

        </div>
        
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved Copyright 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/default/assets/img/logo3.png" alt="CEHECOFH">
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/default/assets/img/logo4.png" alt="HeH">
        </a>
    </div>
</footer>
            </body>
</html><?php }
}
