<?php
/* Smarty version 3.1.29, created on 2016-03-05 13:57:23
  from "E:\wamp\www\Intranet\view\templates\default\joueurs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dad7b3599fa8_45815820',
  'file_dependency' => 
  array (
    'a53587d829aef1f079c0bea5c00ddce34ebc0074' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\joueurs.tpl',
      1 => 1457174606,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1456169953,
      2 => 'file',
    ),
    '38b87550390b4498246829deafc9d57640d6d43a' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\header.tpl',
      1 => 1456835886,
      2 => 'file',
    ),
    'eb253ea85fa0c415276f6fd713630b1f49745222' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\nav.tpl',
      1 => 1457104148,
      2 => 'file',
    ),
    'c083a58202c533e2b690828b2c323e50174f0471' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\footer.tpl',
      1 => 1456169819,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56dad7b3599fa8_45815820 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
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

<link rel="shortcut icon" href="/Intranet/view/templates/default/assets/img/logoheh.ico" />
<link rel="icon" href="/Intranet/view/templates/default/assets/img/logoheh.ico" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/profil.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/jquery-ui2.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/joueurs.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/tournois.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/equipes.css" >

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
        <script type="text/javascript" src="/Intranet/assets/js/getXhr.js"></script>
        <script type="text/javascript" src="/Intranet/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/Intranet/assets/js/joueur.js"></script>
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
                <p>Votre IP: ::1</p>
               
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
                <li><a href="index.php">Accueil</a></li>
                <li><a href="joueurs.php">Joueurs</a></li>            
                
                
                                        <li><a href="tournois.php?id=1">League of Legends</a></li>
                                        <li><a href="tournois.php?id=2">COD4</a></li>
                                        <li><a href="tournois.php?id=3">Trackmania</a></li>
                                        <li><a href="tournois.php?id=4">UT3</a></li>
                                        <li><a href="tournois.php?id=5">Hearthstone</a></li>
                                        
                    
                                        <li><a href="ModifProfil.php">Mon profil</a></li>
                                                <li><a href="admin/index.php">Admin</a></li>
                                                        </ul>
        </div>
    </div>			
</nav>

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-8 col-xs-12 map_cafetaria">
                    <img class="photo_cafetaria" src="/Intranet/view/templates/default/assets/img/plan.jpg">
                                            <div class='place' onclick='Click(this)' id="1" style="
                             position: absolute;
                             top: 3%;
                             left: 12%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A1
                        </div>
                                            <div class='place' onclick='Click(this)' id="2" style="
                             position: absolute;
                             top: 3%;
                             left: 16.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A2
                        </div>
                                            <div class='place' onclick='Click(this)' id="3" style="
                             position: absolute;
                             top: 3%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A3
                        </div>
                                            <div class='place' onclick='Click(this)' id="4" style="
                             position: absolute;
                             top: 3%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A4
                        </div>
                                            <div class='place' onclick='Click(this)' id="5" style="
                             position: absolute;
                             top: 3%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A5
                        </div>
                                            <div class='place' onclick='Click(this)' id="6" style="
                             position: absolute;
                             top: 8%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A6
                        </div>
                                            <div class='place' onclick='Click(this)' id="7" style="
                             position: absolute;
                             top: 15.5%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A7
                        </div>
                                            <div class='place' onclick='Click(this)' id="8" style="
                             position: absolute;
                             top: 23%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A8
                        </div>
                                            <div class='place' onclick='Click(this)' id="9" style="
                             position: absolute;
                             top: 33.5%;
                             left: 12%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A9
                        </div>
                                            <div class='place' onclick='Click(this)' id="10" style="
                             position: absolute;
                             top: 33.5%;
                             left: 16.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A10
                        </div>
                                            <div class='place' onclick='Click(this)' id="11" style="
                             position: absolute;
                             top: 15.5%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A11
                        </div>
                                            <div class='place' onclick='Click(this)' id="12" style="
                             position: absolute;
                             top: 15.5%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A12
                        </div>
                                            <div class='place' onclick='Click(this)' id="13" style="
                             position: absolute;
                             top: 15.5%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A13
                        </div>
                                            <div class='place' onclick='Click(this)' id="14" style="
                             position: absolute;
                             top: 18.5%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A14
                        </div>
                                            <div class='place' onclick='Click(this)' id="15" style="
                             position: absolute;
                             top: 18.5%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A15
                        </div>
                                            <div class='place' onclick='Click(this)' id="16" style="
                             position: absolute;
                             top: 18.5%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A16
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
                                                              background:#337ab7;
                             ">
                            B1
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
                             ">
                            B9
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
                                                              background:#337ab7;
                             ">
                            B10
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
                             ">
                            C3
                        </div>
                                            <div class='place' onclick='Click(this)' id="30" style="
                             position: absolute;
                             top: 5%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            C4
                        </div>
                                            <div class='place' onclick='Click(this)' id="31" style="
                             position: absolute;
                             top: 5%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            C5
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
                                                              background:#337ab7;
                             ">
                            C6
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
                                                              background:#337ab7;
                             ">
                            C7
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
                                                              background:#337ab7;
                             ">
                            C8
                        </div>
                                            <div class='place' onclick='Click(this)' id="35" style="
                             position: absolute;
                             top: 8%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            C9
                        </div>
                                            <div class='place' onclick='Click(this)' id="36" style="
                             position: absolute;
                             top: 8%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            C10
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                                              background:#337ab7;
                             ">
                            D9
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
                                                              background:#337ab7;
                             ">
                            D10
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
                                            <div class='place' onclick='Click(this)' id="56" style="
                             position: absolute;
                             top: 21%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            E10
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
                                                              background:initial;
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
                                                              background:initial;
                             ">
                            F5
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
                                                              background:#337ab7;
                             ">
                            F6
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
                                                              background:#337ab7;
                             ">
                            F7
                        </div>
                                            <div class='place' onclick='Click(this)' id="64" style="
                             position: absolute;
                             top: 35%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F8
                        </div>
                                            <div class='place' onclick='Click(this)' id="65" style="
                             position: absolute;
                             top: 35%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F9
                        </div>
                                            <div class='place' onclick='Click(this)' id="66" style="
                             position: absolute;
                             top: 35%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            F10
                        </div>
                                            <div class='place' onclick='Click(this)' id="67" style="
                             position: absolute;
                             top: 32%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            G1
                        </div>
                                            <div class='place' onclick='Click(this)' id="68" style="
                             position: absolute;
                             top: 32%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            G2
                        </div>
                                            <div class='place' onclick='Click(this)' id="69" style="
                             position: absolute;
                             top: 32%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
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
                                                              background:#337ab7;
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
                                            <div class='place' onclick='Click(this)' id="72" style="
                             position: absolute;
                             top: 35%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G6
                        </div>
                                            <div class='place' onclick='Click(this)' id="73" style="
                             position: absolute;
                             top: 35%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G7
                        </div>
                                            <div class='place' onclick='Click(this)' id="74" style="
                             position: absolute;
                             top: 35%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G8
                        </div>
                                            <div class='place' onclick='Click(this)' id="75" style="
                             position: absolute;
                             top: 35%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G9
                        </div>
                                            <div class='place' onclick='Click(this)' id="76" style="
                             position: absolute;
                             top: 35%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            G10
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
                                                              background:#337ab7;
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
                                            <div class='place' onclick='Click(this)' id="80" style="
                             position: absolute;
                             top: 50%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H4
                        </div>
                                            <div class='place' onclick='Click(this)' id="81" style="
                             position: absolute;
                             top: 50%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H5
                        </div>
                                            <div class='place' onclick='Click(this)' id="82" style="
                             position: absolute;
                             top: 50%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H6
                        </div>
                                            <div class='place' onclick='Click(this)' id="83" style="
                             position: absolute;
                             top: 50%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H7
                        </div>
                                            <div class='place' onclick='Click(this)' id="84" style="
                             position: absolute;
                             top: 50%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H8
                        </div>
                                            <div class='place' onclick='Click(this)' id="85" style="
                             position: absolute;
                             top: 50%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H9
                        </div>
                                            <div class='place' onclick='Click(this)' id="86" style="
                             position: absolute;
                             top: 50%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            H10
                        </div>
                                            <div class='place' onclick='Click(this)' id="87" style="
                             position: absolute;
                             top: 59%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I1
                        </div>
                                            <div class='place' onclick='Click(this)' id="88" style="
                             position: absolute;
                             top: 59%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            I2
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
                            I3
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
                            I4
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
                            I5
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
                            I6
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
                            I7
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
                            I8
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
                            I9
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
                            I10
                        </div>
                                            <div class='place' onclick='Click(this)' id="97" style="
                             position: absolute;
                             top: 62%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I11
                        </div>
                                            <div class='place' onclick='Click(this)' id="98" style="
                             position: absolute;
                             top: 62%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            I12
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
                                                              background:#337ab7;
                             ">
                            I13
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
                                                              background:#337ab7;
                             ">
                            I14
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
                                                              background:#337ab7;
                             ">
                            I15
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
                                                              background:#337ab7;
                             ">
                            I16
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
                                                              background:#337ab7;
                             ">
                            I17
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
                                                              background:#337ab7;
                             ">
                            I18
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
                                                              background:#337ab7;
                             ">
                            I19
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
                                                              background:#337ab7;
                             ">
                            I20
                        </div>
                                            <div class='place' onclick='Click(this)' id="107" style="
                             position: absolute;
                             top: 85%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J1
                        </div>
                                            <div class='place' onclick='Click(this)' id="108" style="
                             position: absolute;
                             top: 85%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J2
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
                            J3
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
                            J4
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
                            J5
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
                                                              background:initial;
                             ">
                            J6
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
                                                              background:initial;
                             ">
                            J7
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
                            J8
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
                            J9
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
                            J10
                        </div>
                                            <div class='place' onclick='Click(this)' id="117" style="
                             position: absolute;
                             top: 88%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J11
                        </div>
                                            <div class='place' onclick='Click(this)' id="118" style="
                             position: absolute;
                             top: 88%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:initial;
                             ">
                            J12
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
                            J13
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
                            J14
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
                                                              background:initial;
                             ">
                            J15
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
                                                              background:initial;
                             ">
                            J16
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
                                                              background:initial;
                             ">
                            J17
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
                                                              background:initial;
                             ">
                            J18
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
                                                              background:initial;
                             ">
                            J19
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
                            J20
                        </div>
                                            <div class='place' onclick='Click(this)' id="127" style="
                             position: absolute;
                             top: %;
                             left: %;
                             width: %;
                             height: %;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            
                        </div>
                                            <div class='place' onclick='Click(this)' id="128" style="
                             position: absolute;
                             top: 15.5%;
                             left: 18.5%;
                             width: 2.5%;
                             height: 6%;
                             border:0.1em solid #000;
                             text-align:center;
                             color:#000000;
                                                              background:#337ab7;
                             ">
                            A17
                        </div>
                                                                <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Canon6etoiles</strong>
                                <br>
                                Equipe : Ma grosse bite en plâtre
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 15.5%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> LittleS4T4N</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 15.5%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Krogoh</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 3%;
                             left: 12%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Psychopaf</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT2
                                <br>
                                <u>Tournoi : COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18.5%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Rawnur</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1, BIT2
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 3%;
                             left: 16.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Luke</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT2
                                <br>
                                <u>Tournoi : League of Legends, UT3, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 3%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Desert</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT2
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: %;
                             left: %;
                             width: %;
                             height: %;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> koekjes</strong>
                                <br>
                                Equipe : HeHLan
                                <br>
                                <u>Tournoi : </u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Witchh Doctor</strong>
                                <br>
                                Equipe : Dofusian GAMING
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Sponos</strong>
                                <br>
                                Equipe : NIP TA MERE
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 15.5%;
                             left: 18.5%;
                             width: 2.5%;
                             height: 6%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Sl33p3r</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1, BIT2
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Nydda</strong>
                                <br>
                                Equipe : ISWEARSHEWAS18
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Katax</strong>
                                <br>
                                Equipe : ISWEARSHEWAS18
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Hexceed</strong>
                                <br>
                                Equipe : God Sake
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Happy Nems</strong>
                                <br>
                                Equipe : God Sake
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> NamaTroX</strong>
                                <br>
                                Equipe : God Sake
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Belgium Flag Zeytenh</strong>
                                <br>
                                Equipe : On suce des Schtroumphs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18.5%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Eklatpif</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18.5%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Entamoeba</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Delikan57</strong>
                                <br>
                                Equipe : Les Michel Forever
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Touza</strong>
                                <br>
                                Equipe : Les Michel Forever
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Rayalok</strong>
                                <br>
                                Equipe : Les Michel Forever
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Echofox</strong>
                                <br>
                                Equipe : Les Michel Forever
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 32.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Droledami</strong>
                                <br>
                                Equipe : Les Michel Forever
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Playas</strong>
                                <br>
                                Equipe : Mid Or Feed
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Origamie</strong>
                                <br>
                                Equipe : Mid Or Feed
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> dodop</strong>
                                <br>
                                Equipe : Mid Or Feed
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Narco</strong>
                                <br>
                                Equipe : Ma grosse bite en plâtre
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Ander BloodEyes</strong>
                                <br>
                                Equipe : Mid Or Feed
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Thorgrim</strong>
                                <br>
                                Equipe : Don't feed the ginger
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Angerfirst</strong>
                                <br>
                                Equipe : Don't feed the ginger
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> benauto</strong>
                                <br>
                                Equipe : Don't feed the ginger
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Nucleaz</strong>
                                <br>
                                Equipe : Don't feed the ginger
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 3%;
                             left: 21%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> roden164</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT2
                                <br>
                                <u>Tournoi : COD4, Trackmania</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 3%;
                             left: 25.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> landre164</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT2
                                <br>
                                <u>Tournoi : COD4, Trackmania</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Webolivieri</strong>
                                <br>
                                Equipe : God Sake
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Fluffy</strong>
                                <br>
                                Equipe : FPMs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Abysses</strong>
                                <br>
                                Equipe : FPMs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Gaudryk</strong>
                                <br>
                                Equipe : Mid Or Feed
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Anga</strong>
                                <br>
                                Equipe : FPMs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> MrNedria</strong>
                                <br>
                                Equipe : Dofusian GAMING
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Alfattarte</strong>
                                <br>
                                Equipe : Dofusian GAMING
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 82%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Alfatta</strong>
                                <br>
                                Equipe : Dofusian GAMING
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Soccielo</strong>
                                <br>
                                Equipe : Murderous Insanity in ET
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> fox2903</strong>
                                <br>
                                Equipe : Murderous Insanity in ET
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Greybak</strong>
                                <br>
                                Equipe : Murderous Insanity in ET
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 33.5%;
                             left: 16.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Shyrøw</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournoi : League of Legends, Trackmania</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Alcyoal</strong>
                                <br>
                                Equipe : Ma grosse bite en plâtre
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Zayzo</strong>
                                <br>
                                Equipe : God Sake
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> waelan</strong>
                                <br>
                                Equipe : Dofusian GAMING
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 15.5%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> ATMbigslick</strong>
                                <br>
                                Equipe : GoldTeam
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 33.5%;
                             left: 12%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> VeryBadLegend</strong>
                                <br>
                                Equipe : GoldTeam
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 23%;
                             left: 12%;
                             width: 2.5%;
                             height: 7.5%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Dekama</strong>
                                <br>
                                Equipe : GoldTeam
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 62%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Sman3133</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 50%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> igor mono</strong>
                                <br>
                                Equipe : Stupid Move
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> ducoman</strong>
                                <br>
                                Equipe : FPMs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Fyren</strong>
                                <br>
                                Equipe : FPMs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> handsome smurf</strong>
                                <br>
                                Equipe : On suce des Schtroumphs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Loraline</strong>
                                <br>
                                Equipe : ISWEARSHEWAS18
                                <br>
                                <u>Tournoi : League of Legends, Trackmania</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Liytøse</strong>
                                <br>
                                Equipe : ISWEARSHEWAS18
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> giovanbaba</strong>
                                <br>
                                Equipe : Go Nerf Karma
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Belgium Flag DzX</strong>
                                <br>
                                Equipe : On suce des Schtroumphs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 32%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Chillsforyou</strong>
                                <br>
                                Equipe : ISWEARSHEWAS18
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Morgasme</strong>
                                <br>
                                Equipe : On suce des Schtroumphs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Unexard</strong>
                                <br>
                                Equipe : Ma grosse bite en plâtre
                                <br>
                                <u>Tournoi : League of Legends, Hearthstone</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Madixti</strong>
                                <br>
                                Equipe : On suce des Schtroumphs
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> vindoze</strong>
                                <br>
                                Equipe : Crêpière Tefal
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> wiwi0123</strong>
                                <br>
                                Equipe : Crêpière Tefal
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Drêdack</strong>
                                <br>
                                Equipe : Crêpière Tefal
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Macphalin</strong>
                                <br>
                                Equipe : Crêpière Tefal
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 18%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Kr0usty</strong>
                                <br>
                                Equipe : Don't feed the ginger
                                <br>
                                <u>Tournoi : League of Legends, COD4</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 8%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> adri0413</strong>
                                <br>
                                Equipe : Crêpière Tefal
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 64%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> sleve</strong>
                                <br>
                                Equipe : NIP TA MERE
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 55%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> eystornt</strong>
                                <br>
                                Equipe : Go Nerf Karma
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 73%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> supertinez</strong>
                                <br>
                                Equipe : NIP TA MERE
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 68.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Broflovsky</strong>
                                <br>
                                Equipe : NIP TA MERE
                                <br>
                                <u>Tournoi : League of Legends, COD4, Trackmania, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 50.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Mizark</strong>
                                <br>
                                Equipe : Go Nerf Karma
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Volgrim</strong>
                                <br>
                                Equipe : Go Nerf Karma
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 5%;
                             left: 37%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> mrtoshio</strong>
                                <br>
                                Equipe : Go Nerf Karma
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 21%;
                             left: 77.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Louza</strong>
                                <br>
                                Equipe : NIP TA MERE
                                <br>
                                <u>Tournoi : League of Legends, COD4, UT3</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 46%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> Soyo</strong>
                                <br>
                                Equipe : Murderous Insanity in ET
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 35%;
                             left: 41.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> HyzoWeed</strong>
                                <br>
                                Equipe : Murderous Insanity in ET
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 15.5%;
                             left: 30%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> KaMoKyu</strong>
                                <br>
                                Equipe : Belgian Inoffensive Team, BIT1
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 59%;
                             left: 59.5%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> GRAPHH</strong>
                                <br>
                                Equipe : Ma grosse bite en plâtre
                                <br>
                                <u>Tournoi : League of Legends</u>
                            </span>
                        </div>
                                            <div class='tooltip' style='position:absolute;
                             top: 50%;
                             left: 28%;
                             width: 4.5%;
                             height: 3%;
                             text-align:center;'>
                            <span>
                                pseudo : <strong> admin</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournoi : </u>
                            </span>
                        </div>
                                    </div>		

                <!-- ****************************************** test button for pick *********************************************-->
                <a target="_blank" href="pick.php">Click to pick !</a>
                <!-- **************************************************************************************************** -->

                <div id="tabs" class="col-lg-2 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(1);">Joueur</a>
                        </div>	
                        <div class="col-lg-6 col-xs-6">
                            <a href="#" onclick="show_tab(2);">Equipe</a>
                        </div>
                    </div>

                    <!-- Player Tab -->
                    <div id="tabs-1">
                        <!-- Player Search Function -->
                        <form>
                            <label for="recherche_joueur">Rechercher un pseudo :</label>
                            <input type="text" name="recherche_joueur" id="recherche_joueur" />
                        </form>
                        <br>

                        <!-- Result Displaying -->
                        <div id="results" style="display: none">
                            <strong>Pas de résultat</strong>
                            <br>
                            <br>
                        </div>                       
                        
                        <!-- Player List -->
                                                                                    <div>
                                    <u>Liste des joueurs :</u>
                                </div>
                                <br>
                                <ul id="liste_joueur">
                                                        <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>1ST_Tr45HxC
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='43'>Abysses
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='77'>admin
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='23'>adri0413
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='92'>Alcyoal
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='36'>Alfatta
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='35'>Alfattarte
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='6'>Ander BloodEyes
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='44'>Anga
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='51'>Angerfirst
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Anus42
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Artanis Pirgis
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Artikthor
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Ash
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>AsylumCoven
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Atariks
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='7'>ATMbigslick
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Banksyz
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>batllegame
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='30'>Belgium Flag DzX
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='31'>Belgium Flag Zeytenh
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='50'>benauto
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Beno50
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Blakcat
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>bou
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Boulvay
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>brasix
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Brenda
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='53'>Broflovsky
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>bryan6mepu
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>buenoC6
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Bumblebee
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='93'>Canon6etoiles
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Chat Ringan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='69'>Chillsforyou
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>China
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>cloud1213
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Codu
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>corky
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>craywyn
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>crisedefoi
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Danilus
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>deadlive
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='8'>Dekama
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='100'>Delikan57
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='5'>Desert
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>DestroyedParadis
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='105'>dodop
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>DottyLloyd
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Dr Miika
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='24'>Drêdack
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='98'>Droledami
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='46'>ducoman
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='99'>Echofox
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Eklatburnes
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='15'>Eklatpif
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='16'>Entamoeba
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Er3az
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='21'>eystornt
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>fliwdeir
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Florentcle
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='45'>Fluffy
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Fogz
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='62'>fox2903
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>FroZen
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='42'>Fyren
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Gahkin
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Galdesh
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='104'>Gaudryk
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='19'>giovanbaba
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>gosh101
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='94'>GRAPHH
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='65'>Greybak
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Gs DeadLine56
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Guerrier666
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Guirlande
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>gwennytoux
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Hamsterguys
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='29'>handsome smurf
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='37'>Happy Nems
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Helmanath
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='39'>Hexceed
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Hextia
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>hfkill
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Horokrist
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='63'>HyzoWeed
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>iGlooW
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='79'>igor mono
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>ioni
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>JankulaseK
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Kaethuseth
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='13'>KaMoKyu
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='68'>Katax
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Katnus
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>kazuhya
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='127'>koekjes
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Kovers
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='48'>Kr0usty
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='11'>Krogoh
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>LamboX
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='4'>landre164
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Lasti
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Lee Sin
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>lion24
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='12'>LittleS4T4N
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='67'>Liytøse
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='70'>Loraline
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Lordftw
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='55'>Louza
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>luffy0612
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>lukasobito
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='2'>Luke
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>machabastien
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='25'>Macphalin
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='28'>Madixti
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>malu7800
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>MetaxLight
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Métronic
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Mikeman
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='20'>Mizark
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Monkey D Allan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='27'>Morgasme
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='32'>MrNedria
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='17'>mrtoshio
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Multidoting
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='38'>NamaTroX
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='96'>Narco
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Navarro
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='49'>Nucleaz
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='71'>Nydda
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Nyuw
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>oculus
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Ohgreat
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>OPMaRSs
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Orceus
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='102'>Origamie
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>ousermont
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='103'>Playas
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Popol au Cirque
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='1'>Psychopaf
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>PuLse Olen
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>qodex
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>RageManSenior
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>RaKyora
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='14'>Rawnur
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='101'>Rayalok
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>RectoO
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>rod0511
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='3'>roden164
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Rothesse
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>rougetta
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Salcatin
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>samarïtan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>satanasth250
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Seyfur
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>shasha07
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Shethan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Shoutmog
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='10'>Shyrøw
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Siena
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Skayard
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>skit
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Skullhards
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>skuyz
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Skynyx
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='128'>Sl33p3r
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='52'>sleve
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='106'>Sman3133
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='66'>Soccielo
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='64'>Soyo
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='56'>Sponos
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Spytte is Coming
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>subbyy
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='54'>supertinez
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Suyken
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Tartines
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Téflon
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Thaerith
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>TheBlackDiamond
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>THEDEVASTATOR
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='47'>Thorgrim
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>thotwith
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Tomirock
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Torakh
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>ToSu91
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='97'>Touza
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Tøxigrinta
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>trogalt
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='95'>Unexard
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='9'>VeryBadLegend
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='26'>vindoze
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='18'>Volgrim
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Wadosh
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='34'>waelan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='40'>Webolivieri
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Winblast
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value='33'>Witchh Doctor
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='22'>wiwi0123
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>wooligan
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Worst fiddle EUW
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>xemnas192
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>ximunou
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>XUltiX
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>xxbitter
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>xxroroxx
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Yasukiro
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Yellowpit
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value=''>Zarak
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>zarbisi
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#262626'
                                                                        value='41'>Zayzo
                                </a>
                            </li>
                             
                                                                                <li>
                                <a class='ClassPseudo' 
                                                                            style='background-color:#212121'                                                             
                                                                        value=''>Zelof
                                </a>
                            </li>
                                                            </ul>
                             
                                       
                    </div>

                    <!-- Team Tab -->
                    <div id="tabs-2" style="display:none;">
                        <!-- Team Search Function -->
                        <form>
                            <label for="recherche_equipe">Rechercher une équipe :</label>
                            <input type="text" name="recherche_equipe" id="recherche_equipe" />
                        </form>
                        <br>

                        <div id="results_equipe" style="display: none">
                            <strong>Pas de résultat</strong>
                            <br>
                            <br>
                        </div>

                        <div>
                            <div>
                                <u>Liste des Equipes :</u>
                            </div>
                            <br>
                            <ul id="liste_equipe">
                                                                    <li><a class='ClassEquipe' value='71'>Alcyol #2207</a></li>
                                                                        <li><a class='ClassEquipe' value='67'>Alfatta #2772</a></li>
                                                                        <li><a class='ClassEquipe' value='40'>Annie's Firstblood</a></li>
                                                                        <li><a class='ClassEquipe' value='3'>Belgian Inoffensive Team</a></li>
                                                                        <li><a class='ClassEquipe' value='23'>Belgian Rape Squad</a></li>
                                                                        <li><a class='ClassEquipe' value='56'>BIT1</a></li>
                                                                        <li><a class='ClassEquipe' value='57'>BIT2</a></li>
                                                                        <li><a class='ClassEquipe' value='38'>Bloodytearz</a></li>
                                                                        <li><a class='ClassEquipe' value='51'>C'était une mauvaise idée</a></li>
                                                                        <li><a class='ClassEquipe' value='22'>Caedem Dominatur</a></li>
                                                                        <li><a class='ClassEquipe' value='48'>Crêpière Tefal</a></li>
                                                                        <li><a class='ClassEquipe' value='65'>Delikan57 #2256</a></li>
                                                                        <li><a class='ClassEquipe' value='20'>Doctors X</a></li>
                                                                        <li><a class='ClassEquipe' value='26'>Dofusian GAMING</a></li>
                                                                        <li><a class='ClassEquipe' value='24'>Don't feed the ginger</a></li>
                                                                        <li><a class='ClassEquipe' value='63'>Droledami #2473</a></li>
                                                                        <li><a class='ClassEquipe' value='66'>Ebaral #2123</a></li>
                                                                        <li><a class='ClassEquipe' value='61'>Echofox #2924</a></li>
                                                                        <li><a class='ClassEquipe' value='33'>First</a></li>
                                                                        <li><a class='ClassEquipe' value='25'>FPMs</a></li>
                                                                        <li><a class='ClassEquipe' value='8'>Gitan</a></li>
                                                                        <li><a class='ClassEquipe' value='50'>Go Nerf Karma</a></li>
                                                                        <li><a class='ClassEquipe' value='13'>God Sake</a></li>
                                                                        <li><a class='ClassEquipe' value='29'>Gods of Chocolate</a></li>
                                                                        <li><a class='ClassEquipe' value='53'>GoldTeam</a></li>
                                                                        <li><a class='ClassEquipe' value='68'>Guerrier666 #2345</a></li>
                                                                        <li><a class='ClassEquipe' value='1'>HeHLan</a></li>
                                                                        <li><a class='ClassEquipe' value='6'>Inception eSport</a></li>
                                                                        <li><a class='ClassEquipe' value='32'>iNPhase</a></li>
                                                                        <li><a class='ClassEquipe' value='43'>ISWEARSHEWAS18</a></li>
                                                                        <li><a class='ClassEquipe' value='45'>Je mange des shtroumpfs</a></li>
                                                                        <li><a class='ClassEquipe' value='21'>JokS</a></li>
                                                                        <li><a class='ClassEquipe' value='36'>La Dream Team</a></li>
                                                                        <li><a class='ClassEquipe' value='37'>La Nouvelle Génération</a></li>
                                                                        <li><a class='ClassEquipe' value='35'>Lamastruche Gaming</a></li>
                                                                        <li><a class='ClassEquipe' value='58'>Lambox #2917</a></li>
                                                                        <li><a class='ClassEquipe' value='14'>Les Bifflettes Maison</a></li>
                                                                        <li><a class='ClassEquipe' value='18'>Les Michel Forever</a></li>
                                                                        <li><a class='ClassEquipe' value='7'>Les Tites Fioles</a></li>
                                                                        <li><a class='ClassEquipe' value='52'>Ma grosse bite en plâtre</a></li>
                                                                        <li><a class='ClassEquipe' value='2'>MABITE</a></li>
                                                                        <li><a class='ClassEquipe' value='19'>Mid Or Feed</a></li>
                                                                        <li><a class='ClassEquipe' value='17'>Midget Pineapple Wolverine</a></li>
                                                                        <li><a class='ClassEquipe' value='30'>Murderous Insanity in ET</a></li>
                                                                        <li><a class='ClassEquipe' value='60'>Nedria #2996</a></li>
                                                                        <li><a class='ClassEquipe' value='49'>NIP TA MERE</a></li>
                                                                        <li><a class='ClassEquipe' value='16'>NoneEsCape</a></li>
                                                                        <li><a class='ClassEquipe' value='15'>Nothing</a></li>
                                                                        <li><a class='ClassEquipe' value='9'>Olaf Alope</a></li>
                                                                        <li><a class='ClassEquipe' value='44'>On suce des Schtroumphs</a></li>
                                                                        <li><a class='ClassEquipe' value='34'>Petits Kebabs Volant</a></li>
                                                                        <li><a class='ClassEquipe' value='31'>Petits Lézards Tous Nus</a></li>
                                                                        <li><a class='ClassEquipe' value='42'>Phoenix Team</a></li>
                                                                        <li><a class='ClassEquipe' value='70'>Pinguiz #2232</a></li>
                                                                        <li><a class='ClassEquipe' value='64'>Rayalok #2449</a></li>
                                                                        <li><a class='ClassEquipe' value='41'>Reflex Belgium</a></li>
                                                                        <li><a class='ClassEquipe' value='39'>Skillshout</a></li>
                                                                        <li><a class='ClassEquipe' value='47'>Stupid Move</a></li>
                                                                        <li><a class='ClassEquipe' value='46'>Stupid-Move</a></li>
                                                                        <li><a class='ClassEquipe' value='10'>The Bleeding Rocks</a></li>
                                                                        <li><a class='ClassEquipe' value='27'>The Legion of Nether</a></li>
                                                                        <li><a class='ClassEquipe' value='12'>The LuckyTeam</a></li>
                                                                        <li><a class='ClassEquipe' value='28'>Tish-cake KaWaii</a></li>
                                                                        <li><a class='ClassEquipe' value='62'>Touza #2628</a></li>
                                                                        <li><a class='ClassEquipe' value='59'>Unexard #2460</a></li>
                                                                        <li><a class='ClassEquipe' value='11'>WeAreVincent</a></li>
                                                                        <li><a class='ClassEquipe' value='69'>Witch Doctor #2256</a></li>
                                                                </ul>
                        </div>
                    </div>							
                    <div id="dialogEquipe_Emplacement" style="display:none;"></div>
                    <div id="dialogPseudo_Emplacement" style="display:none;"></div>
                </div>
            </div>

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
</html>
<?php }
}
