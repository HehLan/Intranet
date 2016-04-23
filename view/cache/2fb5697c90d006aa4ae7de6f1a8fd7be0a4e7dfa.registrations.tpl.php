<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:45:40
  from "E:\wamp\www\Intranet\view\templates\admin\registrations.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f4fab43d7c63_15658796',
  'file_dependency' => 
  array (
    '2fb5697c90d006aa4ae7de6f1a8fd7be0a4e7dfa' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\registrations.tpl',
      1 => 1458866888,
      2 => 'file',
    ),
    '0e581425c25b7e4430f823fafb32398a1a42b35f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
    '671975c94dd1e7dba0ca368cae0b42da0a3615ec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1458866468,
      2 => 'file',
    ),
    'e98396841417fe328ce0f332a73c8fbcf7a31642' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1458745478,
      2 => 'file',
    ),
    'f9508bf021c4a0cb4e00179ef41a44bb7a637b1c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\footer.tpl',
      1 => 1458869456,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f4fab43d7c63_15658796 ($_smarty_tpl) {
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

<meta name="viewport" content="width=device-width, initial-scale="1" />
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

<link rel="shortcut icon" href="/Intranet/view/templates/admin/assets/img/logos/logo-lan.ico" />
<link rel="icon" href="/Intranet/view/templates/admin/assets/img/logos/logo-lan.ico" />


<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/FontAwesome/css/font-awesome.min.css" />

<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/footer.css" />



<!-- JAVASCRIPT LIBRARIES -->
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-ui.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery.media.js"></script>
<script type="text/javascript" src="/Intranet/lib/Less/less.js"></script>



<script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
<script type="text/javascript" src="/Intranet/src/js/main.js"></script>
<script type="text/javascript" src="/Intranet/src/js/menu.js"></script>




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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/registrations.css" >
    </head>

    <body role="document">
 	
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="../index.php">
            <img src="/Intranet/view/templates/admin/assets/img/logos/logo-hehlan.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
                    <p>Bienvenue admin, <a href="../common/logout.php">se déconnecter</a></p>
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
                <li><a href="../index.php">Site</a></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>                
                <li><a href="equipes.php">Equipes</a></li>
                <li><a href="emplacements.php">Emplacements</a></li>
                <li><a href="inscriptions.php">Inscriptions</a></li>
                <li><a href="tournois.php">Tournois</a></li> 
                <li><a href="registrations.php">Enregistrements</a></li>
                <li><a href="commandehandler.php">Commandes</a></li>
                <li><a href="downloads.php">Téléchargements</a></li>
            </ul>
        </div>
    </div>			
</nav>
 
	
	<div id="container" class="container-fluid">
            <div id="contenu" class="row">
                <div class="table-responsive col-lg-8">
                    <table class="table table-condensed">
                        <caption>
                            <h4>Informations sur l'enregistrement des inscriptions</h4>
                        </caption>
                        <thead>
                            <tr>
                                <th>Payé <span class="badge">130</span></th>
                                <th>Pseudo <span class="badge">219</span></th>
                                <th>Team <span class="badge">46</span></th>
                                <th>HOTS <span class="badge">185</span></th>
                                <th>COD <span class="badge">47</span></th>
                                <th>TM <span class="badge">37</span></th>
                                <th>HS <span class="badge">15</span></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td>130</td>
                                <td>219</td>
                                <td>46</td>
                                <td>185</td>
                                <td>47</td>
                                <td>37</td>
                                <td>15</td>
                            </tr>
                        </tfoot>
                        <tbody>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Canon6etoiles</td>                                
                                    <td>Ma grosse bite en plâtre</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>LittleS4T4N</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>LittleS4T4N</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Krogoh</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Krogoh</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Psychopaf</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Psychopaf</td>                                
                                    <td>BIT2</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Rawnur</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Rawnur</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Rawnur</td>                                
                                    <td>BIT2</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Luke</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Luke</td>                                
                                    <td>BIT2</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Spytte is Coming</td>                                
                                    <td>The Bleeding Rocks</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Desert</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Desert</td>                                
                                    <td>BIT2</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>zarbisi</td>                                
                                    <td>Inception eSport</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Métronic</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Fogz</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Thaerith</td>                                
                                    <td>GoldTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Winblast</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>RectoO</td>                                
                                    <td>Les Tites Fioles</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>ioni</td>                                
                                    <td>Les Tites Fioles</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>xemnas192</td>                                
                                    <td>C'était une mauvaise idée</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Witchh Doctor</td>                                
                                    <td>Dofusian GAMING</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Boulvay</td>                                
                                    <td>Gitan</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Sponos</td>                                
                                    <td>NIP TA MERE</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>DestroyedParadis</td>                                
                                    <td>Olaf Alope</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Sl33p3r</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Sl33p3r</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Sl33p3r</td>                                
                                    <td>BIT2</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Artanis Pirgis</td>                                
                                    <td>The Bleeding Rocks</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Tøxigrinta</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>brasix</td>                                
                                    <td>Bloodytearz</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Téflon</td>                                
                                    <td>The Bleeding Rocks</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Nydda</td>                                
                                    <td>ISWEARSHEWAS18</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Katax</td>                                
                                    <td>ISWEARSHEWAS18</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Nyuw</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Rothesse</td>                                
                                    <td>WeAreVincent</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Hamsterguys</td>                                
                                    <td>WeAreVincent</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>rod0511</td>                                
                                    <td>WeAreVincent</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Skullhards</td>                                
                                    <td>WeAreVincent</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>ximunou</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>ousermont</td>                                
                                    <td>The LuckyTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Skynyx</td>                                
                                    <td>C'était une mauvaise idée</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>LamboX</td>                                
                                    <td>Skillshout</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>LamboX</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Hexceed</td>                                
                                    <td>God Sake</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Happy Nems</td>                                
                                    <td>God Sake</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>NamaTroX</td>                                
                                    <td>God Sake</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>gosh101</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Horokrist</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>iGlooW</td>                                
                                    <td>Les Bifflettes Maison</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>bou</td>                                
                                    <td>Les Bifflettes Maison</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Zarak</td>                                
                                    <td>Les Bifflettes Maison</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Salcatin</td>                                
                                    <td>Les Bifflettes Maison</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Belgium Flag Zeytenh</td>                                
                                    <td>On suce des Schtroumphs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Tartines</td>                                
                                    <td>Doctors X</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Eklatpif</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Eklatpif</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Entamoeba</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Entamoeba</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Eklatburnes</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>JankulaseK</td>                                
                                    <td>Annie's Firstblood</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Lee Sin</td>                                
                                    <td>Midget Pineapple Wolverine</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Suyken</td>                                
                                    <td>Midget Pineapple Wolverine</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Seyfur</td>                                
                                    <td>Midget Pineapple Wolverine</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Delikan57</td>                                
                                    <td>Les Michel Forever</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Touza</td>                                
                                    <td>Les Michel Forever</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Rayalok</td>                                
                                    <td>Les Michel Forever</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Monkey D Allan</td>                                
                                    <td>Midget Pineapple Wolverine</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Echofox</td>                                
                                    <td>Les Michel Forever</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Droledami</td>                                
                                    <td>Les Michel Forever</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Playas</td>                                
                                    <td>Mid Or Feed</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Origamie</td>                                
                                    <td>Mid Or Feed</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Worst fiddle EUW</td>                                
                                    <td>JokS</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>dodop</td>                                
                                    <td>Mid Or Feed</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Dr Miika</td>                                
                                    <td>Doctors X</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Narco</td>                                
                                    <td>Ma grosse bite en plâtre</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Helmanath</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Multidoting</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>malu7800</td>                                
                                    <td>Les Bifflettes Maison</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Tomirock</td>                                
                                    <td>Caedem Dominatur</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>satanasth250</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Wadosh</td>                                
                                    <td>GoldTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Ander BloodEyes</td>                                
                                    <td>Mid Or Feed</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Thorgrim</td>                                
                                    <td>Don't feed the ginger</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Angerfirst</td>                                
                                    <td>Don't feed the ginger</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Kovers</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>benauto</td>                                
                                    <td>Don't feed the ginger</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Nucleaz</td>                                
                                    <td>Don't feed the ginger</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>roden164</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>roden164</td>                                
                                    <td>BIT2</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>landre164</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>landre164</td>                                
                                    <td>BIT2</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Webolivieri</td>                                
                                    <td>God Sake</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Codu</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Fluffy</td>                                
                                    <td>FPMs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Abysses</td>                                
                                    <td>FPMs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>gwennytoux</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Gaudryk</td>                                
                                    <td>Mid Or Feed</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Anga</td>                                
                                    <td>FPMs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>MrNedria</td>                                
                                    <td>Dofusian GAMING</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Alfattarte</td>                                
                                    <td>Dofusian GAMING</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Alfatta</td>                                
                                    <td>Dofusian GAMING</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>lukasobito</td>                                
                                    <td>The Legion of Nether</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>craywyn</td>                                
                                    <td>Tish-cake KaWaii</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Kaethuseth</td>                                
                                    <td>Tish-cake KaWaii</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Ash</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Siena</td>                                
                                    <td>Gods of Chocolate</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Skayard</td>                                
                                    <td>Gods of Chocolate</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>TheBlackDiamond</td>                                
                                    <td>Gods of Chocolate</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>XUltiX</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Danilus</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Soccielo</td>                                
                                    <td>Murderous Insanity in ET</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Gahkin</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Popol au Cirque</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>kazuhya</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>trogalt</td>                                
                                    <td>Gods of Chocolate</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>crisedefoi</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Er3az</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Chat Ringan</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>machabastien</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Galdesh</td>                                
                                    <td>Petits Lézards Tous Nus</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>fox2903</td>                                
                                    <td>Murderous Insanity in ET</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Greybak</td>                                
                                    <td>Murderous Insanity in ET</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Banksyz</td>                                
                                    <td>The Bleeding Rocks</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Shethan</td>                                
                                    <td>The Bleeding Rocks</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Shyrøw</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>rougetta</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>thotwith</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>skuyz</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Alcyoal</td>                                
                                    <td>Ma grosse bite en plâtre</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Anus42</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Zayzo</td>                                
                                    <td>God Sake</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>waelan</td>                                
                                    <td>Dofusian GAMING</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>ATMbigslick</td>                                
                                    <td>GoldTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>VeryBadLegend</td>                                
                                    <td>GoldTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Dekama</td>                                
                                    <td>GoldTeam</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Lordftw</td>                                
                                    <td>iNPhase</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>1ST_Tr45HxC</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>DottyLloyd</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Atariks</td>                                
                                    <td>Tish-cake KaWaii</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Ohgreat</td>                                
                                    <td>Tish-cake KaWaii</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>shasha07</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Sman3133</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>igor mono</td>                                
                                    <td>Stupid Move</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>MetaxLight</td>                                
                                    <td>Lamastruche Gaming</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>buenoC6</td>                                
                                    <td>Lamastruche Gaming</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>OPMaRSs</td>                                
                                    <td>Lamastruche Gaming</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Mikeman</td>                                
                                    <td>La Dream Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Katnus</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>wooligan</td>                                
                                    <td>C'était une mauvaise idée</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>ducoman</td>                                
                                    <td>FPMs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>RageManSenior</td>                                
                                    <td>Bloodytearz</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>xxroroxx</td>                                
                                    <td>Bloodytearz</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>AsylumCoven</td>                                
                                    <td>Bloodytearz</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Fyren</td>                                
                                    <td>FPMs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>handsome smurf</td>                                
                                    <td>On suce des Schtroumphs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Beno50</td>                                
                                    <td>Skillshout</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Shoutmog</td>                                
                                    <td>Skillshout</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Gs DeadLine56</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>THEDEVASTATOR</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>ToSu91</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>deadlive</td>                                
                                    <td>Skillshout</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Loraline</td>                                
                                    <td>ISWEARSHEWAS18</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Liytøse</td>                                
                                    <td>ISWEARSHEWAS18</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>samarïtan</td>                                
                                    <td>Les Tites Fioles</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>PuLse Olen</td>                                
                                    <td>Annie's Firstblood</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Torakh</td>                                
                                    <td>Annie's Firstblood</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>giovanbaba</td>                                
                                    <td>Go Nerf Karma</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Yasukiro</td>                                
                                    <td>Skillshout</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>RaKyora</td>                                
                                    <td>Annie's Firstblood</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>cloud1213</td>                                
                                    <td>Annie's Firstblood</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Belgium Flag DzX</td>                                
                                    <td>On suce des Schtroumphs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>China</td>                                
                                    <td>Les Tites Fioles</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>qodex</td>                                
                                    <td>Les Tites Fioles</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>hfkill</td>                                
                                    <td>Reflex Belgium</td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Blakcat</td>                                
                                    <td>Phoenix Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Chillsforyou</td>                                
                                    <td>ISWEARSHEWAS18</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Morgasme</td>                                
                                    <td>On suce des Schtroumphs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Unexard</td>                                
                                    <td>Ma grosse bite en plâtre</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Madixti</td>                                
                                    <td>On suce des Schtroumphs</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Florentcle</td>                                
                                    <td>Stupid Move</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>bryan6mepu</td>                                
                                    <td>Stupid Move</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>batllegame</td>                                
                                    <td>Stupid Move</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Lasti</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>FroZen</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Artikthor</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Orceus</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>vindoze</td>                                
                                    <td>Crêpière Tefal</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>wiwi0123</td>                                
                                    <td>Crêpière Tefal</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Drêdack</td>                                
                                    <td>Crêpière Tefal</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Macphalin</td>                                
                                    <td>Crêpière Tefal</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Kr0usty</td>                                
                                    <td>Don't feed the ginger</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>adri0413</td>                                
                                    <td>Crêpière Tefal</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Guirlande</td>                                
                                    <td>Tish-cake KaWaii</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Navarro</td>                                
                                    <td>Belgian Rape Squad</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>sleve</td>                                
                                    <td>NIP TA MERE</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>eystornt</td>                                
                                    <td>Go Nerf Karma</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>supertinez</td>                                
                                    <td>NIP TA MERE</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Broflovsky</td>                                
                                    <td>NIP TA MERE</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Mizark</td>                                
                                    <td>Go Nerf Karma</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Volgrim</td>                                
                                    <td>Go Nerf Karma</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>subbyy</td>                                
                                    <td>C'était une mauvaise idée</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>mrtoshio</td>                                
                                    <td>Go Nerf Karma</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Louza</td>                                
                                    <td>NIP TA MERE</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Soyo</td>                                
                                    <td>Murderous Insanity in ET</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Bumblebee</td>                                
                                    <td>Bloodytearz</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>HyzoWeed</td>                                
                                    <td>Murderous Insanity in ET</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>Yellowpit</td>                                
                                    <td></td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>KaMoKyu</td>                                
                                    <td>Belgian Inoffensive Team</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>KaMoKyu</td>                                
                                    <td>BIT1</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>GRAPHH</td>                                
                                    <td>Ma grosse bite en plâtre</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>luffy0612</td>                                
                                    <td>Stupid Move</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>oculus</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>xxbitter</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                        <td>Brenda</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>skit</td>                                
                                    <td></td>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td>  
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                    </tr>
                                                            <tr>
                                                                            <td>
                                            <span class="glyphicon glyphicon-unchecked red"></span>
                                            <i class="fa fa-square red"></i>
                                            <i class="fa fa-square-o red"></i>
                                            <i class="fa fa-circle red"></i>
                                            <i class="fa fa-circle-o red"></i>
                                        </td> 
                                                                        <td>admin</td>                                
                                    <td>Alcyol #2207</td>
                                                                           <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                                                                <td>
                                            <span class="glyphicon glyphicon-check green"></span>
                                            <i class="fa fa-check-square green"></i>
                                            <i class="fa fa-check-square-o green"></i>
                                            <i class="fa fa-check-circle green"></i>
                                            <i class="fa fa-check-circle-o green"></i>
                                        </td>
                                                                    </tr>
                                                    </tbody> 
                    </table>
                </div>
            </div>
	</div>
	
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved - Copyright <i class="fa fa-copyright"></i> 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/admin/assets/img/logos/logo-ceheh.png" alt="CEHECOFH" />
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/admin/assets/img/logos/logo-campus-technique.png" alt="HeH" />
        </a>
    </div>
</footer> 
    </body>
</html><?php }
}
