<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:49:41
  from "E:\wamp\www\Intranet\view\templates\default\places.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57091685c9ce72_29605679',
  'file_dependency' => 
  array (
    '44b6d68c16ef642d76146f7c279efb4ed3431124' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\places.tpl',
      1 => 1458864282,
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
  ),
  'cache_lifetime' => 0,
),true)) {
function content_57091685c9ce72_29605679 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/places.css" />
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

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-9 col-xs-12 map_cafetaria">
                    <img class="photo_cafetaria" src="/Intranet/src/img/plan.jpg">
                                            <div class='place' onclick='Click(this)' id="131" style="
                             position: absolute;
                             top: 55.5%;
                             left: 17%;
                             width: 8.5%;
                             height: 12.25%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            <b>Kompu</b>
                        </div>
                                            <div class='place' onclick='Click(this)' id="130" style="
                             position: absolute;
                             top: 56%;
                             left: 26.5%;
                             width: 9%;
                             height: 6%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            <b>Reload</b>
                        </div>
                                            <div class='place' onclick='Click(this)' id="129" style="
                             position: absolute;
                             top: 5%;
                             left: 77.5%;
                             width: 9%;
                             height: 6%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            <b>YouFM</b>
                        </div>
                                            <div class='place' onclick='Click(this)' id="8" style="
                             position: absolute;
                             top: 23%;
                             left: 15%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A1
                        </div>
                                            <div class='place' onclick='Click(this)' id="7" style="
                             position: absolute;
                             top: 15.5%;
                             left: 15%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A2
                        </div>
                                            <div class='place' onclick='Click(this)' id="6" style="
                             position: absolute;
                             top: 8%;
                             left: 15%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A3
                        </div>
                                            <div class='place' onclick='Click(this)' id="1" style="
                             position: absolute;
                             top: 8%;
                             left: 17.25%;
                             width: 4.5%;
                             height: 3.2%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A4
                        </div>
                                            <div class='place' onclick='Click(this)' id="2" style="
                             position: absolute;
                             top: 8%;
                             left: 21.75%;
                             width: 4.5%;
                             height: 3.2%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A5
                        </div>
                                            <div class='place' onclick='Click(this)' id="3" style="
                             position: absolute;
                             top: 8%;
                             left: 26.25%;
                             width: 4.5%;
                             height: 3.2%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A6
                        </div>
                                            <div class='place' onclick='Click(this)' id="9" style="
                             position: absolute;
                             top: 8%;
                             left: 30.75%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A7
                        </div>
                                            <div class='place' onclick='Click(this)' id="10" style="
                             position: absolute;
                             top: 15.5%;
                             left: 30.75%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A8
                        </div>
                                            <div class='place' onclick='Click(this)' id="11" style="
                             position: absolute;
                             top: 23%;
                             left: 30.75%;
                             width: 2.25%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            A9
                        </div>
                                            <div class='place' onclick='Click(this)' id="17" style="
                             position: absolute;
                             top: 5%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B1
                        </div>
                                            <div class='place' onclick='Click(this)' id="26" style="
                             position: absolute;
                             top: 8%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B10
                        </div>
                                            <div class='place' onclick='Click(this)' id="18" style="
                             position: absolute;
                             top: 5%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B2
                        </div>
                                            <div class='place' onclick='Click(this)' id="19" style="
                             position: absolute;
                             top: 5%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B3
                        </div>
                                            <div class='place' onclick='Click(this)' id="20" style="
                             position: absolute;
                             top: 5%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B4
                        </div>
                                            <div class='place' onclick='Click(this)' id="21" style="
                             position: absolute;
                             top: 5%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B5
                        </div>
                                            <div class='place' onclick='Click(this)' id="22" style="
                             position: absolute;
                             top: 8%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B6
                        </div>
                                            <div class='place' onclick='Click(this)' id="23" style="
                             position: absolute;
                             top: 8%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B7
                        </div>
                                            <div class='place' onclick='Click(this)' id="24" style="
                             position: absolute;
                             top: 8%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B8
                        </div>
                                            <div class='place' onclick='Click(this)' id="25" style="
                             position: absolute;
                             top: 8%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            B9
                        </div>
                                            <div class='place' onclick='Click(this)' id="27" style="
                             position: absolute;
                             top: 5%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C1
                        </div>
                                            <div class='place' onclick='Click(this)' id="28" style="
                             position: absolute;
                             top: 5%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C2
                        </div>
                                            <div class='place' onclick='Click(this)' id="29" style="
                             position: absolute;
                             top: 5%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C3
                        </div>
                                            <div class='place' onclick='Click(this)' id="32" style="
                             position: absolute;
                             top: 8%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C4
                        </div>
                                            <div class='place' onclick='Click(this)' id="33" style="
                             position: absolute;
                             top: 8%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C5
                        </div>
                                            <div class='place' onclick='Click(this)' id="34" style="
                             position: absolute;
                             top: 8%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            C6
                        </div>
                                            <div class='place' onclick='Click(this)' id="37" style="
                             position: absolute;
                             top: 18%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            D1
                        </div>
                                            <div class='place' onclick='Click(this)' id="46" style="
                             position: absolute;
                             top: 21%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            D10
                        </div>
                                            <div class='place' onclick='Click(this)' id="38" style="
                             position: absolute;
                             top: 18%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            D2
                        </div>
                                            <div class='place' onclick='Click(this)' id="39" style="
                             position: absolute;
                             top: 18%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            D3
                        </div>
                                            <div class='place' onclick='Click(this)' id="40" style="
                             position: absolute;
                             top: 18%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            D4
                        </div>
                                            <div class='place' onclick='Click(this)' id="41" style="
                             position: absolute;
                             top: 18%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            D5
                        </div>
                                            <div class='place' onclick='Click(this)' id="42" style="
                             position: absolute;
                             top: 21%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            D6
                        </div>
                                            <div class='place' onclick='Click(this)' id="43" style="
                             position: absolute;
                             top: 21%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            D7
                        </div>
                                            <div class='place' onclick='Click(this)' id="44" style="
                             position: absolute;
                             top: 21%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            D8
                        </div>
                                            <div class='place' onclick='Click(this)' id="45" style="
                             position: absolute;
                             top: 21%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            D9
                        </div>
                                            <div class='place' onclick='Click(this)' id="47" style="
                             position: absolute;
                             top: 18%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E1
                        </div>
                                            <div class='place' onclick='Click(this)' id="56" style="
                             position: absolute;
                             top: 21%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            E10
                        </div>
                                            <div class='place' onclick='Click(this)' id="48" style="
                             position: absolute;
                             top: 18%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E2
                        </div>
                                            <div class='place' onclick='Click(this)' id="49" style="
                             position: absolute;
                             top: 18%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E3
                        </div>
                                            <div class='place' onclick='Click(this)' id="50" style="
                             position: absolute;
                             top: 18%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E4
                        </div>
                                            <div class='place' onclick='Click(this)' id="51" style="
                             position: absolute;
                             top: 18%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E5
                        </div>
                                            <div class='place' onclick='Click(this)' id="52" style="
                             position: absolute;
                             top: 21%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E6
                        </div>
                                            <div class='place' onclick='Click(this)' id="53" style="
                             position: absolute;
                             top: 21%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E7
                        </div>
                                            <div class='place' onclick='Click(this)' id="54" style="
                             position: absolute;
                             top: 21%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E8
                        </div>
                                            <div class='place' onclick='Click(this)' id="55" style="
                             position: absolute;
                             top: 21%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E9
                        </div>
                                            <div class='place' onclick='Click(this)' id="57" style="
                             position: absolute;
                             top: 32%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            F1
                        </div>
                                            <div class='place' onclick='Click(this)' id="65" style="
                             position: absolute;
                             top: 35%;
                             left: 52.75%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F10
                        </div>
                                            <div class='place' onclick='Click(this)' id="66" style="
                             position: absolute;
                             top: 35%;
                             left: 58%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F11
                        </div>
                                            <div class='place' onclick='Click(this)' id="72" style="
                             position: absolute;
                             top: 35%;
                             left: 62.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F12
                        </div>
                                            <div class='place' onclick='Click(this)' id="58" style="
                             position: absolute;
                             top: 32%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            F2
                        </div>
                                            <div class='place' onclick='Click(this)' id="59" style="
                             position: absolute;
                             top: 32%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            F3
                        </div>
                                            <div class='place' onclick='Click(this)' id="60" style="
                             position: absolute;
                             top: 32%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F4
                        </div>
                                            <div class='place' onclick='Click(this)' id="61" style="
                             position: absolute;
                             top: 32%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F5
                        </div>
                                            <div class='place' onclick='Click(this)' id="69" style="
                             position: absolute;
                             top: 32%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F6
                        </div>
                                            <div class='place' onclick='Click(this)' id="62" style="
                             position: absolute;
                             top: 35%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            F7
                        </div>
                                            <div class='place' onclick='Click(this)' id="63" style="
                             position: absolute;
                             top: 35%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            F8
                        </div>
                                            <div class='place' onclick='Click(this)' id="64" style="
                             position: absolute;
                             top: 35%;
                             left: 48.25%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F9
                        </div>
                                            <div class='place' onclick='Click(this)' id="75" style="
                             position: absolute;
                             top: 35%;
                             left: 75.25%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            G1
                        </div>
                                            <div class='place' onclick='Click(this)' id="76" style="
                             position: absolute;
                             top: 35%;
                             left: 79.75%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            G2
                        </div>
                                            <div class='place' onclick='Click(this)' id="68" style="
                             position: absolute;
                             top: 32%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G3
                        </div>
                                            <div class='place' onclick='Click(this)' id="70" style="
                             position: absolute;
                             top: 32%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G4
                        </div>
                                            <div class='place' onclick='Click(this)' id="71" style="
                             position: absolute;
                             top: 32%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            G5
                        </div>
                                            <div class='place' onclick='Click(this)' id="77" style="
                             position: absolute;
                             top: 50%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H1
                        </div>
                                            <div class='place' onclick='Click(this)' id="78" style="
                             position: absolute;
                             top: 50%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H2
                        </div>
                                            <div class='place' onclick='Click(this)' id="79" style="
                             position: absolute;
                             top: 50%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            H3
                        </div>
                                            <div class='place' onclick='Click(this)' id="89" style="
                             position: absolute;
                             top: 59%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I1
                        </div>
                                            <div class='place' onclick='Click(this)' id="100" style="
                             position: absolute;
                             top: 62%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I10
                        </div>
                                            <div class='place' onclick='Click(this)' id="101" style="
                             position: absolute;
                             top: 62%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I11
                        </div>
                                            <div class='place' onclick='Click(this)' id="102" style="
                             position: absolute;
                             top: 62%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I12
                        </div>
                                            <div class='place' onclick='Click(this)' id="103" style="
                             position: absolute;
                             top: 62%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I13
                        </div>
                                            <div class='place' onclick='Click(this)' id="104" style="
                             position: absolute;
                             top: 62%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I14
                        </div>
                                            <div class='place' onclick='Click(this)' id="105" style="
                             position: absolute;
                             top: 62%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I15
                        </div>
                                            <div class='place' onclick='Click(this)' id="106" style="
                             position: absolute;
                             top: 62%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I16
                        </div>
                                            <div class='place' onclick='Click(this)' id="90" style="
                             position: absolute;
                             top: 59%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I2
                        </div>
                                            <div class='place' onclick='Click(this)' id="91" style="
                             position: absolute;
                             top: 59%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I3
                        </div>
                                            <div class='place' onclick='Click(this)' id="92" style="
                             position: absolute;
                             top: 59%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I4
                        </div>
                                            <div class='place' onclick='Click(this)' id="93" style="
                             position: absolute;
                             top: 59%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I5
                        </div>
                                            <div class='place' onclick='Click(this)' id="94" style="
                             position: absolute;
                             top: 59%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I6
                        </div>
                                            <div class='place' onclick='Click(this)' id="95" style="
                             position: absolute;
                             top: 59%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I7
                        </div>
                                            <div class='place' onclick='Click(this)' id="96" style="
                             position: absolute;
                             top: 59%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I8
                        </div>
                                            <div class='place' onclick='Click(this)' id="99" style="
                             position: absolute;
                             top: 62%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I9
                        </div>
                                            <div class='place' onclick='Click(this)' id="109" style="
                             position: absolute;
                             top: 85%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J1
                        </div>
                                            <div class='place' onclick='Click(this)' id="120" style="
                             position: absolute;
                             top: 88%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J10
                        </div>
                                            <div class='place' onclick='Click(this)' id="121" style="
                             position: absolute;
                             top: 88%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J11
                        </div>
                                            <div class='place' onclick='Click(this)' id="122" style="
                             position: absolute;
                             top: 88%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J12
                        </div>
                                            <div class='place' onclick='Click(this)' id="123" style="
                             position: absolute;
                             top: 88%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J13
                        </div>
                                            <div class='place' onclick='Click(this)' id="124" style="
                             position: absolute;
                             top: 88%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J14
                        </div>
                                            <div class='place' onclick='Click(this)' id="125" style="
                             position: absolute;
                             top: 88%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J15
                        </div>
                                            <div class='place' onclick='Click(this)' id="126" style="
                             position: absolute;
                             top: 88%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J16
                        </div>
                                            <div class='place' onclick='Click(this)' id="110" style="
                             position: absolute;
                             top: 85%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J2
                        </div>
                                            <div class='place' onclick='Click(this)' id="111" style="
                             position: absolute;
                             top: 85%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J3
                        </div>
                                            <div class='place' onclick='Click(this)' id="112" style="
                             position: absolute;
                             top: 85%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J4
                        </div>
                                            <div class='place' onclick='Click(this)' id="113" style="
                             position: absolute;
                             top: 85%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            J5
                        </div>
                                            <div class='place' onclick='Click(this)' id="114" style="
                             position: absolute;
                             top: 85%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J6
                        </div>
                                            <div class='place' onclick='Click(this)' id="115" style="
                             position: absolute;
                             top: 85%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J7
                        </div>
                                            <div class='place' onclick='Click(this)' id="116" style="
                             position: absolute;
                             top: 85%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J8
                        </div>
                                            <div class='place' onclick='Click(this)' id="119" style="
                             position: absolute;
                             top: 88%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J9
                        </div>
                                                                <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Echuiine</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Atlas</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 88%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Davros</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 88%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Edge</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 88%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> rainbown</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Emer</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : TMNF</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 88%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Zircky</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 75.25%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> LouvardGame</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Souloxx</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Avahi</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4, TMNF, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Kleotisa</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Hellblazer</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HOTS, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> lamboX</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, COD4, TMNF, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> gunjack</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Fuzz</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 52.75%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Diablok20</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 50%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> gally</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 85%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Runnard</strong>
                                <br>
                                Equipe : BaraWeTrust
                                <br>
                                <u>Tournois : TMNF</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 88%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Kaizu</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Vlad</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Loken</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Sephire</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 85%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Silv3r75</strong>
                                <br>
                                Equipe : BaraWeTrust
                                <br>
                                <u>Tournois : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Hextia</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Anus42</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> chauveman</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4, TMNF</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Vejakx</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : HOTS, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Fhorcas</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : HOTS, COD4, TMNF</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 79.75%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> LouvardGame2</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 58%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> StrawHat</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS, TMNF</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Casimir</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Atanor</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Thibu</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Sam</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Ploper</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 62.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Janken</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 48.25%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> weshpearlish</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                            </span>
                        </div>
                                    </div>		

                <div id="tabs" class="col-lg-3 col-xs-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="col-lg-6 col-xs-6 active onglet">
                            <a href="#tabs-1" aria-controls="tabs-1" role="tab" data-toggle="tab" onclick="show_tab(1);">Joueurs</a>
                        </li>	
                        <li role="presentation" class="col-lg-6 col-xs-6 onglet">
                            <a href="#tabs-2" aria-controls="tabs-2" role="tab" data-toggle="tab" onclick="show_tab(2);">Equipes</a>
                        </li>
                    </ul>

                    <!-- Player Tab -->
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1">
                        <!-- Player Search Function -->
                        <form class="searchBox">
                            <label for="recherche_joueur">Rechercher un pseudo :</label>
                            <input type="text" name="recherche_joueur" id="recherche_joueur" />
                        </form>

                        <!-- Result Displaying -->
                        <div id="results" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>                       

                        <!-- Joueur List -->
                                                                                    <ul id="liste_joueur">
                                                                <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Acocix
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        admin
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        AdnVitamine
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        anakuza
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Anga
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='49'>
                                        Anus42
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Asykins
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='50'>
                                        Atanor
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='39'>
                                        Atlas
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='48'>
                                        Avahi
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        BenjyBen
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Blackdesir
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        BLACKHAWKS FTW
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Breurk
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Capixel
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='96'>
                                        Casimir
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Castag
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='51'>
                                        chauveman
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        cmab
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        comforteagle
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='121'>
                                        Davros
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Desert
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='65'>
                                        Diablok20
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='71'>
                                        Echuiine
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Eclipso
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='122'>
                                        Edge
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Eklatpif
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        eltay
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='47'>
                                        Emer
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        EnhancerBD
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='53'>
                                        Fhorcas
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        FleSk
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='37'>
                                        Fuzz
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        gaetaen
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='79'>
                                        gally
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='38'>
                                        gunjack
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='61'>
                                        Hellblazer
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='95'>
                                        Hextia
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        HyN Zartöx
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        IceStranger
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Insousciance
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='72'>
                                        Janken
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='125'>
                                        Kaizu
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        KingRichard
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='60'>
                                        Kleotisa
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Kraktu
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Kraviniho
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Kritic
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Krogoh
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Krokette
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='41'>
                                        lamboX
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Lemax
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Li#leS4T4N
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='93'>
                                        Loken
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='75'>
                                        LouvardGame
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='76'>
                                        LouvardGame2
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Luke
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        MacaK_
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        meaculpa
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Méli
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Moon98
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Mortox
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        mRipperz
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        My Tacos
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Nemass
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Outchcapike
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Playas
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='69'>
                                        Ploper
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Psychopaf
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Purple#2615
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        R3S BoBChief
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='123'>
                                        rainbown
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Rayven
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        rigorix
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Rodgerz
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='112'>
                                        Runnard
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        sailor_godkane
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='55'>
                                        Sam
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='94'>
                                        Sephire
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Sica
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='113'>
                                        Silv3r75
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        SinRJ
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Sl33p3r
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='40'>
                                        Souloxx
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        StO
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Strange Banana
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='66'>
                                        StrawHat
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Talouf
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        thery111
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='54'>
                                        Thibu
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Tidu
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Tipstoy
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Toinou18
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        TrafDF
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Tragastriel
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        uByz
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='52'>
                                        Vejakx
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Vertigoh
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='92'>
                                        Vlad
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Wadosh
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value='64'>
                                        weshpearlish
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        YouFM !
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        yudovic
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value=''>
                                        Yuki
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list even_entry_tab_list'
                                       value=''>
                                        Zen
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassPseudo entry_tab_list odd_entry_tab_list'
                                       value='124'>
                                        Zircky
                                    </a>
                                </li>
                                                                </ul>
                             
                                       
                    </div>

                    <!-- Team Tab -->
                    <div role="tabpanel" class="tab-pane fade" id="tabs-2" style="display: none">
                        <!-- Team Search Function -->
                        <form class="searchBox">
                            <label for="recherche_equipe">Rechercher une équipe :</label>
                            <input type="text" name="recherche_equipe" id="recherche_equipe" />
                        </form>

                        <!-- Result Displaying -->
                        <div id="results_equipe" style="display: none">
                            <strong>Pas de résultat</strong>
                        </div>

                        <!-- Equipe List -->
                                                                                    <ul id="liste_equipe">
                                                                <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='118'>
                                        50ShadesOfMurky
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='126'>
                                        BaraWeTrust
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='119'>
                                        Belgian Rape Squad
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='115'>
                                        DotFires
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='117'>
                                        Faglords Of Draenor
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='122'>
                                        Faglords Of Draenor.
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='110'>
                                        FricadellesDuPurgatoire
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='120'>
                                        Homard Team
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='107'>
                                        Les Gros Sandwiches
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='121'>
                                        Lunaria.Mix
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='123'>
                                        Lunastra
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='127'>
                                        Made In Belgium
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='124'>
                                        Mighty plo
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='106'>
                                        OmgTeam
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='114'>
                                        Police de la Luck
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='116'>
                                        Poulet Furieux
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='111'>
                                        R3surrection
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='125'>
                                        Red Devils
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list even_entry_tab_list'
                                       value='113'>
                                        Stonehenge
                                    </a>
                                </li>
                                 
                                                                                    <li>
                                    <a class='ClassEquipe entry_tab_list odd_entry_tab_list'
                                       value='112'>
                                        Strutters
                                    </a>
                                </li>
                                                                </ul>
                             
                                            </div>							
                    <div id="dialogEquipe_Emplacement" style="display:none;"></div>
                    <div id="dialogPseudo_Emplacement" style="display:none;"></div>
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


        <script type="text/javascript" src="/Intranet/view/templates/default/assets/js/places.js"></script>
    </body>
</html>
<?php }
}
