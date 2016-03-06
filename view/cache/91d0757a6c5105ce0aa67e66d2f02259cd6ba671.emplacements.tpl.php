<?php
/* Smarty version 3.1.29, created on 2016-03-06 17:02:40
  from "E:\wamp\www\Intranet\view\templates\admin\emplacements.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc54a0c65477_68412301',
  'file_dependency' => 
  array (
    '91d0757a6c5105ce0aa67e66d2f02259cd6ba671' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\emplacements.tpl',
      1 => 1457280146,
      2 => 'file',
    ),
    '0e581425c25b7e4430f823fafb32398a1a42b35f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1457280036,
      2 => 'file',
    ),
    '671975c94dd1e7dba0ca368cae0b42da0a3615ec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1457274566,
      2 => 'file',
    ),
    'e98396841417fe328ce0f332a73c8fbcf7a31642' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\nav.tpl',
      1 => 1456265917,
      2 => 'file',
    ),
    'f9508bf021c4a0cb4e00179ef41a44bb7a637b1c' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\footer.tpl',
      1 => 1456227086,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56dc54a0c65477_68412301 ($_smarty_tpl) {
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


<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/bootstrap.min.css" />
<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/footer.css" />








<script src="/Intranet/src/js/jquery.js"></script>
<script src="/Intranet/src/js/bootstrap.min.js"></script>
<script src="/Intranet/src/js/jquery-2.1.4.min.js"></script>

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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/emplacements.css" >
        <script type="text/javascript" src="/Intranet/src/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
            //colorie la case pour le pseudo
                $('#SelectPseudo').change(function()
                {
                $("#dialogInfo_equipe").css(display :"none");
                $('.place').css(background : "none");
                $('#'+$('#SelectPseudo').val()).css(background : "#9ba0ee");
                valeur = $('#SelectPseudo').val();
                    $.ajax(
                    { 
                    type: "POST", 
                    url: "admin/info_joueur.php",
                    data: "id_emplacement="+valeur,
                    success : function(contenu,etat)
                        { 
                        $("#dialogInfo_joueur").php(contenu);
                        }
                    });
               });
             //colorie la place pour le select emplacement
                $('#SelectEmplacement').change(function()
                {
                    $('.place').css(background : "none");
                  $('#'+$('#SelectEmplacement').val()).css(background : "green");
               });
            // recupere id_equipes pour l'envoi en AJAX
                $('#SelectEquipe').change(function()
                {
                    $("#dialogInfo_joueur").css(display :"none");
                    $('.place').css(background : "none");
                    valeur=$('#SelectEquipe').val();
                    $.ajax(
                        { 
                        type: "POST", 
                        url: "admin/color_equipe.php",
                        data: "id_equipes="+valeur,
                        success : function(contenu,etat)
                                { 
                                $( "#dialogEquipe_Emplacement" ).php(contenu);
                                $( "#dialogInfo_equipe" ).php(contenu);
                                }         

                        });  
               });
            });
	</script>	
</head>

<body role="document">
    
<header id="header" class="row" >
    <div id="logo" class="col-lg-9 col-sm-9 col-xs-12" >
        <a href="index.php">
            <img src="/Intranet/view/templates/default/assets/img/logoheh.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-3 col-sm-3 col-xs-12" >
                    <p>Bienvenue admin, <a href="../common/deco.php">se déconnecter</a></p>
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
      

    <div id="container">
        <div id="contenu">
            <div style="position: relative;
                float:right; 
                height: 110%;
                width: 80%;
                font-size:10px;
                border-width: 1px;
                border-style: solid;">
                <img class="photo" src="/Intranet/view/templates/default/assets/img/plan.jpg" width="100%" height="100%" >
                                    <div class="place" id="1"
                           style="
                              position:absolute;
                              top:3%;
                              left:12%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A1                          
                    </div>
                                    <div class="place" id="2"
                           style="
                              position:absolute;
                              top:3%;
                              left:16.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A2                          
                    </div>
                                    <div class="place" id="3"
                           style="
                              position:absolute;
                              top:3%;
                              left:21%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A3                          
                    </div>
                                    <div class="place" id="4"
                           style="
                              position:absolute;
                              top:3%;
                              left:25.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A4                          
                    </div>
                                    <div class="place" id="5"
                           style="
                              position:absolute;
                              top:3%;
                              left:30%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A5                          
                    </div>
                                    <div class="place" id="6"
                           style="
                              position:absolute;
                              top:8%;
                              left:12%;
                              width:2.5%;
                              height:7.5%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A6                          
                    </div>
                                    <div class="place" id="7"
                           style="
                              position:absolute;
                              top:15.5%;
                              left:12%;
                              width:2.5%;
                              height:7.5%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A7                          
                    </div>
                                    <div class="place" id="8"
                           style="
                              position:absolute;
                              top:23%;
                              left:12%;
                              width:2.5%;
                              height:7.5%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A8                          
                    </div>
                                    <div class="place" id="9"
                           style="
                              position:absolute;
                              top:33.5%;
                              left:12%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A9                          
                    </div>
                                    <div class="place" id="10"
                           style="
                              position:absolute;
                              top:33.5%;
                              left:16.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A10                          
                    </div>
                                    <div class="place" id="11"
                           style="
                              position:absolute;
                              top:15.5%;
                              left:21%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A11                          
                    </div>
                                    <div class="place" id="12"
                           style="
                              position:absolute;
                              top:15.5%;
                              left:25.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A12                          
                    </div>
                                    <div class="place" id="13"
                           style="
                              position:absolute;
                              top:15.5%;
                              left:30%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A13                          
                    </div>
                                    <div class="place" id="14"
                           style="
                              position:absolute;
                              top:18.5%;
                              left:21%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A14                          
                    </div>
                                    <div class="place" id="15"
                           style="
                              position:absolute;
                              top:18.5%;
                              left:25.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A15                          
                    </div>
                                    <div class="place" id="16"
                           style="
                              position:absolute;
                              top:18.5%;
                              left:30%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A16                          
                    </div>
                                    <div class="place" id="17"
                           style="
                              position:absolute;
                              top:5%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B1                          
                    </div>
                                    <div class="place" id="18"
                           style="
                              position:absolute;
                              top:5%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B2                          
                    </div>
                                    <div class="place" id="19"
                           style="
                              position:absolute;
                              top:5%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B3                          
                    </div>
                                    <div class="place" id="20"
                           style="
                              position:absolute;
                              top:5%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B4                          
                    </div>
                                    <div class="place" id="21"
                           style="
                              position:absolute;
                              top:5%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B5                          
                    </div>
                                    <div class="place" id="22"
                           style="
                              position:absolute;
                              top:8%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B6                          
                    </div>
                                    <div class="place" id="23"
                           style="
                              position:absolute;
                              top:8%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B7                          
                    </div>
                                    <div class="place" id="24"
                           style="
                              position:absolute;
                              top:8%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B8                          
                    </div>
                                    <div class="place" id="25"
                           style="
                              position:absolute;
                              top:8%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B9                          
                    </div>
                                    <div class="place" id="26"
                           style="
                              position:absolute;
                              top:8%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      B10                          
                    </div>
                                    <div class="place" id="27"
                           style="
                              position:absolute;
                              top:5%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C1                          
                    </div>
                                    <div class="place" id="28"
                           style="
                              position:absolute;
                              top:5%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C2                          
                    </div>
                                    <div class="place" id="29"
                           style="
                              position:absolute;
                              top:5%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C3                          
                    </div>
                                    <div class="place" id="30"
                           style="
                              position:absolute;
                              top:5%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C4                          
                    </div>
                                    <div class="place" id="31"
                           style="
                              position:absolute;
                              top:5%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C5                          
                    </div>
                                    <div class="place" id="32"
                           style="
                              position:absolute;
                              top:8%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C6                          
                    </div>
                                    <div class="place" id="33"
                           style="
                              position:absolute;
                              top:8%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C7                          
                    </div>
                                    <div class="place" id="34"
                           style="
                              position:absolute;
                              top:8%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C8                          
                    </div>
                                    <div class="place" id="35"
                           style="
                              position:absolute;
                              top:8%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C9                          
                    </div>
                                    <div class="place" id="36"
                           style="
                              position:absolute;
                              top:8%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      C10                          
                    </div>
                                    <div class="place" id="37"
                           style="
                              position:absolute;
                              top:18%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D1                          
                    </div>
                                    <div class="place" id="38"
                           style="
                              position:absolute;
                              top:18%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D2                          
                    </div>
                                    <div class="place" id="39"
                           style="
                              position:absolute;
                              top:18%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D3                          
                    </div>
                                    <div class="place" id="40"
                           style="
                              position:absolute;
                              top:18%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D4                          
                    </div>
                                    <div class="place" id="41"
                           style="
                              position:absolute;
                              top:18%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D5                          
                    </div>
                                    <div class="place" id="42"
                           style="
                              position:absolute;
                              top:21%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D6                          
                    </div>
                                    <div class="place" id="43"
                           style="
                              position:absolute;
                              top:21%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D7                          
                    </div>
                                    <div class="place" id="44"
                           style="
                              position:absolute;
                              top:21%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D8                          
                    </div>
                                    <div class="place" id="45"
                           style="
                              position:absolute;
                              top:21%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D9                          
                    </div>
                                    <div class="place" id="46"
                           style="
                              position:absolute;
                              top:21%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      D10                          
                    </div>
                                    <div class="place" id="47"
                           style="
                              position:absolute;
                              top:18%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E1                          
                    </div>
                                    <div class="place" id="48"
                           style="
                              position:absolute;
                              top:18%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E2                          
                    </div>
                                    <div class="place" id="49"
                           style="
                              position:absolute;
                              top:18%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E3                          
                    </div>
                                    <div class="place" id="50"
                           style="
                              position:absolute;
                              top:18%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E4                          
                    </div>
                                    <div class="place" id="51"
                           style="
                              position:absolute;
                              top:18%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E5                          
                    </div>
                                    <div class="place" id="52"
                           style="
                              position:absolute;
                              top:21%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E6                          
                    </div>
                                    <div class="place" id="53"
                           style="
                              position:absolute;
                              top:21%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E7                          
                    </div>
                                    <div class="place" id="54"
                           style="
                              position:absolute;
                              top:21%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E8                          
                    </div>
                                    <div class="place" id="55"
                           style="
                              position:absolute;
                              top:21%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E9                          
                    </div>
                                    <div class="place" id="56"
                           style="
                              position:absolute;
                              top:21%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      E10                          
                    </div>
                                    <div class="place" id="57"
                           style="
                              position:absolute;
                              top:32%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F1                          
                    </div>
                                    <div class="place" id="58"
                           style="
                              position:absolute;
                              top:32%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F2                          
                    </div>
                                    <div class="place" id="59"
                           style="
                              position:absolute;
                              top:32%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F3                          
                    </div>
                                    <div class="place" id="60"
                           style="
                              position:absolute;
                              top:32%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F4                          
                    </div>
                                    <div class="place" id="61"
                           style="
                              position:absolute;
                              top:32%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F5                          
                    </div>
                                    <div class="place" id="62"
                           style="
                              position:absolute;
                              top:35%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F6                          
                    </div>
                                    <div class="place" id="63"
                           style="
                              position:absolute;
                              top:35%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F7                          
                    </div>
                                    <div class="place" id="64"
                           style="
                              position:absolute;
                              top:35%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F8                          
                    </div>
                                    <div class="place" id="65"
                           style="
                              position:absolute;
                              top:35%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F9                          
                    </div>
                                    <div class="place" id="66"
                           style="
                              position:absolute;
                              top:35%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      F10                          
                    </div>
                                    <div class="place" id="67"
                           style="
                              position:absolute;
                              top:32%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G1                          
                    </div>
                                    <div class="place" id="68"
                           style="
                              position:absolute;
                              top:32%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G2                          
                    </div>
                                    <div class="place" id="69"
                           style="
                              position:absolute;
                              top:32%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G3                          
                    </div>
                                    <div class="place" id="70"
                           style="
                              position:absolute;
                              top:32%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G4                          
                    </div>
                                    <div class="place" id="71"
                           style="
                              position:absolute;
                              top:32%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G5                          
                    </div>
                                    <div class="place" id="72"
                           style="
                              position:absolute;
                              top:35%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G6                          
                    </div>
                                    <div class="place" id="73"
                           style="
                              position:absolute;
                              top:35%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G7                          
                    </div>
                                    <div class="place" id="74"
                           style="
                              position:absolute;
                              top:35%;
                              left:73%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G8                          
                    </div>
                                    <div class="place" id="75"
                           style="
                              position:absolute;
                              top:35%;
                              left:77.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G9                          
                    </div>
                                    <div class="place" id="76"
                           style="
                              position:absolute;
                              top:35%;
                              left:82%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      G10                          
                    </div>
                                    <div class="place" id="77"
                           style="
                              position:absolute;
                              top:50%;
                              left:28%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H1                          
                    </div>
                                    <div class="place" id="78"
                           style="
                              position:absolute;
                              top:50%;
                              left:32.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H2                          
                    </div>
                                    <div class="place" id="79"
                           style="
                              position:absolute;
                              top:50%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H3                          
                    </div>
                                    <div class="place" id="80"
                           style="
                              position:absolute;
                              top:50%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H4                          
                    </div>
                                    <div class="place" id="81"
                           style="
                              position:absolute;
                              top:50%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H5                          
                    </div>
                                    <div class="place" id="82"
                           style="
                              position:absolute;
                              top:50%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H6                          
                    </div>
                                    <div class="place" id="83"
                           style="
                              position:absolute;
                              top:50%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H7                          
                    </div>
                                    <div class="place" id="84"
                           style="
                              position:absolute;
                              top:50%;
                              left:59.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H8                          
                    </div>
                                    <div class="place" id="85"
                           style="
                              position:absolute;
                              top:50%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H9                          
                    </div>
                                    <div class="place" id="86"
                           style="
                              position:absolute;
                              top:50%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      H10                          
                    </div>
                                    <div class="place" id="87"
                           style="
                              position:absolute;
                              top:59%;
                              left:28%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I1                          
                    </div>
                                    <div class="place" id="88"
                           style="
                              position:absolute;
                              top:59%;
                              left:32.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I2                          
                    </div>
                                    <div class="place" id="89"
                           style="
                              position:absolute;
                              top:59%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I3                          
                    </div>
                                    <div class="place" id="90"
                           style="
                              position:absolute;
                              top:59%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I4                          
                    </div>
                                    <div class="place" id="91"
                           style="
                              position:absolute;
                              top:59%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I5                          
                    </div>
                                    <div class="place" id="92"
                           style="
                              position:absolute;
                              top:59%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I6                          
                    </div>
                                    <div class="place" id="93"
                           style="
                              position:absolute;
                              top:59%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I7                          
                    </div>
                                    <div class="place" id="94"
                           style="
                              position:absolute;
                              top:59%;
                              left:59.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I8                          
                    </div>
                                    <div class="place" id="95"
                           style="
                              position:absolute;
                              top:59%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I9                          
                    </div>
                                    <div class="place" id="96"
                           style="
                              position:absolute;
                              top:59%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I10                          
                    </div>
                                    <div class="place" id="97"
                           style="
                              position:absolute;
                              top:62%;
                              left:28%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I11                          
                    </div>
                                    <div class="place" id="98"
                           style="
                              position:absolute;
                              top:62%;
                              left:32.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I12                          
                    </div>
                                    <div class="place" id="99"
                           style="
                              position:absolute;
                              top:62%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I13                          
                    </div>
                                    <div class="place" id="100"
                           style="
                              position:absolute;
                              top:62%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I14                          
                    </div>
                                    <div class="place" id="101"
                           style="
                              position:absolute;
                              top:62%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I15                          
                    </div>
                                    <div class="place" id="102"
                           style="
                              position:absolute;
                              top:62%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I16                          
                    </div>
                                    <div class="place" id="103"
                           style="
                              position:absolute;
                              top:62%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I17                          
                    </div>
                                    <div class="place" id="104"
                           style="
                              position:absolute;
                              top:62%;
                              left:59.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I18                          
                    </div>
                                    <div class="place" id="105"
                           style="
                              position:absolute;
                              top:62%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I19                          
                    </div>
                                    <div class="place" id="106"
                           style="
                              position:absolute;
                              top:62%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      I20                          
                    </div>
                                    <div class="place" id="107"
                           style="
                              position:absolute;
                              top:85%;
                              left:28%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J1                          
                    </div>
                                    <div class="place" id="108"
                           style="
                              position:absolute;
                              top:85%;
                              left:32.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J2                          
                    </div>
                                    <div class="place" id="109"
                           style="
                              position:absolute;
                              top:85%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J3                          
                    </div>
                                    <div class="place" id="110"
                           style="
                              position:absolute;
                              top:85%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J4                          
                    </div>
                                    <div class="place" id="111"
                           style="
                              position:absolute;
                              top:85%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J5                          
                    </div>
                                    <div class="place" id="112"
                           style="
                              position:absolute;
                              top:85%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J6                          
                    </div>
                                    <div class="place" id="113"
                           style="
                              position:absolute;
                              top:85%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J7                          
                    </div>
                                    <div class="place" id="114"
                           style="
                              position:absolute;
                              top:85%;
                              left:59.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J8                          
                    </div>
                                    <div class="place" id="115"
                           style="
                              position:absolute;
                              top:85%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J9                          
                    </div>
                                    <div class="place" id="116"
                           style="
                              position:absolute;
                              top:85%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J10                          
                    </div>
                                    <div class="place" id="117"
                           style="
                              position:absolute;
                              top:88%;
                              left:28%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J11                          
                    </div>
                                    <div class="place" id="118"
                           style="
                              position:absolute;
                              top:88%;
                              left:32.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J12                          
                    </div>
                                    <div class="place" id="119"
                           style="
                              position:absolute;
                              top:88%;
                              left:37%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J13                          
                    </div>
                                    <div class="place" id="120"
                           style="
                              position:absolute;
                              top:88%;
                              left:41.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J14                          
                    </div>
                                    <div class="place" id="121"
                           style="
                              position:absolute;
                              top:88%;
                              left:46%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J15                          
                    </div>
                                    <div class="place" id="122"
                           style="
                              position:absolute;
                              top:88%;
                              left:50.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J16                          
                    </div>
                                    <div class="place" id="123"
                           style="
                              position:absolute;
                              top:88%;
                              left:55%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J17                          
                    </div>
                                    <div class="place" id="124"
                           style="
                              position:absolute;
                              top:88%;
                              left:59.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J18                          
                    </div>
                                    <div class="place" id="125"
                           style="
                              position:absolute;
                              top:88%;
                              left:64%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J19                          
                    </div>
                                    <div class="place" id="126"
                           style="
                              position:absolute;
                              top:88%;
                              left:68.5%;
                              width:4.5%;
                              height:3%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      J20                          
                    </div>
                                    <div class="place" id="127"
                           style="
                              position:absolute;
                              top:%;
                              left:%;
                              width:%;
                              height:%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                                                
                    </div>
                                    <div class="place" id="128"
                           style="
                              position:absolute;
                              top:15.5%;
                              left:18.5%;
                              width:2.5%;
                              height:6%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      A17                          
                    </div>
                                        
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:59%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Canon6etoiles<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:15.5%;
                         left:25.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>LittleS4T4N<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:15.5%;
                         left:21%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Krogoh<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:3%;
                         left:12%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Psychopaf<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18.5%;
                         left:21%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Rawnur<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:3%;
                         left:16.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Luke<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:3%;
                         left:30%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Desert<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:%;
                         left:%;
                         width:%;
                         height:%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>koekjes<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Witchh Doctor<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:82%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Sponos<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:15.5%;
                         left:18.5%;
                         width:2.5%;
                         height:6%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Sl33p3r<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:32%;
                         left:82%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Nydda<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:32%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Katax<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Hexceed<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Happy Nems<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>NamaTroX<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:82%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Belgium Flag Zeytenh<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18.5%;
                         left:25.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Eklatpif<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18.5%;
                         left:30%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Entamoeba<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Delikan57<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:28%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Touza<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Rayalok<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Echofox<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:32.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Droledami<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Playas<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Origamie<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>dodop<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:59%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Narco<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:12%;
                         width:2.5%;
                         height:7.5%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Ander BloodEyes<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Thorgrim<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:82%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Angerfirst<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:77.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>benauto<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:73%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Nucleaz<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:3%;
                         left:21%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>roden164<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:3%;
                         left:25.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>landre164<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Webolivieri<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Fluffy<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Abysses<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:59.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Gaudryk<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Anga<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>MrNedria<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:77.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Alfattarte<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:82%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Alfatta<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:35%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Soccielo<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:35%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>fox2903<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:35%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Greybak<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:33.5%;
                         left:16.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Shyrøw<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:59%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Alcyoal<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Zayzo<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:73%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>waelan<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:15.5%;
                         left:12%;
                         width:2.5%;
                         height:7.5%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>ATMbigslick<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:33.5%;
                         left:12%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>VeryBadLegend<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:23%;
                         left:12%;
                         width:2.5%;
                         height:7.5%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Dekama<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:62%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Sman3133<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:50%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>igor mono<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>ducoman<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Fyren<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:73%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>handsome smurf<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:32%;
                         left:77.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Loraline<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:32%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Liytøse<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>giovanbaba<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:77.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Belgium Flag DzX<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:32%;
                         left:73%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Chillsforyou<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Morgasme<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:59%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Unexard<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Madixti<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>vindoze<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>wiwi0123<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Drêdack<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Macphalin<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:18%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Kr0usty<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:8%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>adri0413<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:64%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>sleve<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:55%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>eystornt<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:73%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>supertinez<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:68.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Broflovsky<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:50.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Mizark<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Volgrim<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:5%;
                         left:37%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>mrtoshio<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:21%;
                         left:77.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Louza<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:35%;
                         left:46%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>Soyo<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:35%;
                         left:41.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>HyzoWeed<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:15.5%;
                         left:30%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>KaMoKyu<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:59%;
                         left:59.5%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>GRAPHH<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:50%;
                         left:28%;
                         width:4.5%;
                         height:3%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>admin<br>
                            <u>Equipe :</u>
                                
                        </span></a>
                    </div>
                                        
                <div id="cadre"</div>
                <!-- VISIONNER LA PLACE DU JOUEUR -->    
                <b><u><center>Consulter la place :</center></u></b></b>
                <br><br>
                <!-- PSEUDO -->
                Pseudo :
                <select class="SelectPseudo" name="SelectPseudo" id="SelectPseudo">
                    <option value="" selected ></option>
                                            <option value="">1ST_Tr45HxC</option>
                                            <option value="43">Abysses</option>
                                            <option value="77">admin</option>
                                            <option value="23">adri0413</option>
                                            <option value="92">Alcyoal</option>
                                            <option value="36">Alfatta</option>
                                            <option value="35">Alfattarte</option>
                                            <option value="6">Ander BloodEyes</option>
                                            <option value="44">Anga</option>
                                            <option value="51">Angerfirst</option>
                                            <option value="">Anus42</option>
                                            <option value="">Artanis Pirgis</option>
                                            <option value="">Artikthor</option>
                                            <option value="">Ash</option>
                                            <option value="">AsylumCoven</option>
                                            <option value="">Atariks</option>
                                            <option value="7">ATMbigslick</option>
                                            <option value="">Banksyz</option>
                                            <option value="">batllegame</option>
                                            <option value="30">Belgium Flag DzX</option>
                                            <option value="31">Belgium Flag Zeytenh</option>
                                            <option value="50">benauto</option>
                                            <option value="">Beno50</option>
                                            <option value="">Blakcat</option>
                                            <option value="">bou</option>
                                            <option value="">Boulvay</option>
                                            <option value="">brasix</option>
                                            <option value="">Brenda</option>
                                            <option value="53">Broflovsky</option>
                                            <option value="">bryan6mepu</option>
                                            <option value="">buenoC6</option>
                                            <option value="">Bumblebee</option>
                                            <option value="93">Canon6etoiles</option>
                                            <option value="">Chat Ringan</option>
                                            <option value="69">Chillsforyou</option>
                                            <option value="">China</option>
                                            <option value="">cloud1213</option>
                                            <option value="">Codu</option>
                                            <option value="">corky</option>
                                            <option value="">craywyn</option>
                                            <option value="">crisedefoi</option>
                                            <option value="">Danilus</option>
                                            <option value="">deadlive</option>
                                            <option value="8">Dekama</option>
                                            <option value="100">Delikan57</option>
                                            <option value="5">Desert</option>
                                            <option value="">DestroyedParadis</option>
                                            <option value="105">dodop</option>
                                            <option value="">DottyLloyd</option>
                                            <option value="">Dr Miika</option>
                                            <option value="24">Drêdack</option>
                                            <option value="98">Droledami</option>
                                            <option value="46">ducoman</option>
                                            <option value="99">Echofox</option>
                                            <option value="">Eklatburnes</option>
                                            <option value="15">Eklatpif</option>
                                            <option value="16">Entamoeba</option>
                                            <option value="">Er3az</option>
                                            <option value="21">eystornt</option>
                                            <option value="">fliwdeir</option>
                                            <option value="">Florentcle</option>
                                            <option value="45">Fluffy</option>
                                            <option value="">Fogz</option>
                                            <option value="62">fox2903</option>
                                            <option value="">FroZen</option>
                                            <option value="42">Fyren</option>
                                            <option value="">Gahkin</option>
                                            <option value="">Galdesh</option>
                                            <option value="104">Gaudryk</option>
                                            <option value="19">giovanbaba</option>
                                            <option value="">gosh101</option>
                                            <option value="94">GRAPHH</option>
                                            <option value="65">Greybak</option>
                                            <option value="">Gs DeadLine56</option>
                                            <option value="">Guerrier666</option>
                                            <option value="">Guirlande</option>
                                            <option value="">gwennytoux</option>
                                            <option value="">Hamsterguys</option>
                                            <option value="29">handsome smurf</option>
                                            <option value="37">Happy Nems</option>
                                            <option value="">Helmanath</option>
                                            <option value="39">Hexceed</option>
                                            <option value="">Hextia</option>
                                            <option value="">hfkill</option>
                                            <option value="">Horokrist</option>
                                            <option value="63">HyzoWeed</option>
                                            <option value="">iGlooW</option>
                                            <option value="79">igor mono</option>
                                            <option value="">ioni</option>
                                            <option value="">JankulaseK</option>
                                            <option value="">Kaethuseth</option>
                                            <option value="13">KaMoKyu</option>
                                            <option value="68">Katax</option>
                                            <option value="">Katnus</option>
                                            <option value="">kazuhya</option>
                                            <option value="127">koekjes</option>
                                            <option value="">Kovers</option>
                                            <option value="48">Kr0usty</option>
                                            <option value="11">Krogoh</option>
                                            <option value="">LamboX</option>
                                            <option value="4">landre164</option>
                                            <option value="">Lasti</option>
                                            <option value="">Lee Sin</option>
                                            <option value="">lion24</option>
                                            <option value="12">LittleS4T4N</option>
                                            <option value="67">Liytøse</option>
                                            <option value="70">Loraline</option>
                                            <option value="">Lordftw</option>
                                            <option value="55">Louza</option>
                                            <option value="">luffy0612</option>
                                            <option value="">lukasobito</option>
                                            <option value="2">Luke</option>
                                            <option value="">machabastien</option>
                                            <option value="25">Macphalin</option>
                                            <option value="28">Madixti</option>
                                            <option value="">malu7800</option>
                                            <option value="">MetaxLight</option>
                                            <option value="">Métronic</option>
                                            <option value="">Mikeman</option>
                                            <option value="20">Mizark</option>
                                            <option value="">Monkey D Allan</option>
                                            <option value="27">Morgasme</option>
                                            <option value="32">MrNedria</option>
                                            <option value="17">mrtoshio</option>
                                            <option value="">Multidoting</option>
                                            <option value="38">NamaTroX</option>
                                            <option value="96">Narco</option>
                                            <option value="">Navarro</option>
                                            <option value="49">Nucleaz</option>
                                            <option value="71">Nydda</option>
                                            <option value="">Nyuw</option>
                                            <option value="">oculus</option>
                                            <option value="">Ohgreat</option>
                                            <option value="">OPMaRSs</option>
                                            <option value="">Orceus</option>
                                            <option value="102">Origamie</option>
                                            <option value="">ousermont</option>
                                            <option value="103">Playas</option>
                                            <option value="">Popol au Cirque</option>
                                            <option value="1">Psychopaf</option>
                                            <option value="">PuLse Olen</option>
                                            <option value="">qodex</option>
                                            <option value="">RageManSenior</option>
                                            <option value="">RaKyora</option>
                                            <option value="14">Rawnur</option>
                                            <option value="101">Rayalok</option>
                                            <option value="">RectoO</option>
                                            <option value="">rod0511</option>
                                            <option value="3">roden164</option>
                                            <option value="">Rothesse</option>
                                            <option value="">rougetta</option>
                                            <option value="">Salcatin</option>
                                            <option value="">samarïtan</option>
                                            <option value="">satanasth250</option>
                                            <option value="">Seyfur</option>
                                            <option value="">shasha07</option>
                                            <option value="">Shethan</option>
                                            <option value="">Shoutmog</option>
                                            <option value="10">Shyrøw</option>
                                            <option value="">Siena</option>
                                            <option value="">Skayard</option>
                                            <option value="">skit</option>
                                            <option value="">Skullhards</option>
                                            <option value="">skuyz</option>
                                            <option value="">Skynyx</option>
                                            <option value="128">Sl33p3r</option>
                                            <option value="52">sleve</option>
                                            <option value="106">Sman3133</option>
                                            <option value="66">Soccielo</option>
                                            <option value="64">Soyo</option>
                                            <option value="56">Sponos</option>
                                            <option value="">Spytte is Coming</option>
                                            <option value="">subbyy</option>
                                            <option value="54">supertinez</option>
                                            <option value="">Suyken</option>
                                            <option value="">Tartines</option>
                                            <option value="">Téflon</option>
                                            <option value="">Thaerith</option>
                                            <option value="">TheBlackDiamond</option>
                                            <option value="">THEDEVASTATOR</option>
                                            <option value="47">Thorgrim</option>
                                            <option value="">thotwith</option>
                                            <option value="">Tomirock</option>
                                            <option value="">Torakh</option>
                                            <option value="">ToSu91</option>
                                            <option value="97">Touza</option>
                                            <option value="">Tøxigrinta</option>
                                            <option value="">trogalt</option>
                                            <option value="95">Unexard</option>
                                            <option value="9">VeryBadLegend</option>
                                            <option value="26">vindoze</option>
                                            <option value="18">Volgrim</option>
                                            <option value="">Wadosh</option>
                                            <option value="34">waelan</option>
                                            <option value="40">Webolivieri</option>
                                            <option value="">Winblast</option>
                                            <option value="33">Witchh Doctor</option>
                                            <option value="22">wiwi0123</option>
                                            <option value="">wooligan</option>
                                            <option value="">Worst fiddle EUW</option>
                                            <option value="">xemnas192</option>
                                            <option value="">ximunou</option>
                                            <option value="">XUltiX</option>
                                            <option value="">xxbitter</option>
                                            <option value="">xxroroxx</option>
                                            <option value="">Yasukiro</option>
                                            <option value="">Yellowpit</option>
                                            <option value="">Zarak</option>
                                            <option value="">zarbisi</option>
                                            <option value="41">Zayzo</option>
                                            <option value="">Zelof</option>
                                    </select>
                <br>
                <br>
                <!-- Equipe -->
                Equipe :
                <select id="SelectEquipe">
                    <option value="" selected ></option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                                            <option value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_equipes in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>251</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom in E:\wamp\www\Intranet\view\templates_c\91d0757a6c5105ce0aa67e66d2f02259cd6ba671_0.file.emplacements.tpl.cache.php on line <i>252</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>265224</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2349272</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\emplacements.php' bgcolor='#eeeeec'>..\emplacements.php<b>:</b>107</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2350000</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2477080</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2616560</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2657664</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0624</td><td bgcolor='#eeeeec' align='right'>2675784</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5619352</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.2340</td><td bgcolor='#eeeeec' align='right'>5622840</td><td bgcolor='#eeeeec'>content_56dc54a0172265_90859689(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
</option>
                               
                </select>
                <div id="dialogEquipe_Emplacement"></div>
                <br>
                <br>
                <!-- AJOUTER PLACE AU JOUEUR -->                                                                                       
                <form method="post" action="place.php">
                    <b><u><center>Associer la place :</center></u></b></b>
                    <br><br> 
                    Emplacement :
                    <select name="SelectEmplacement" id="SelectEmplacement">	
                                                    <option value="1">A1</option>"; 
                                                    <option value="2">A2</option>"; 
                                                    <option value="3">A3</option>"; 
                                                    <option value="4">A4</option>"; 
                                                    <option value="5">A5</option>"; 
                                                    <option value="6">A6</option>"; 
                                                    <option value="7">A7</option>"; 
                                                    <option value="8">A8</option>"; 
                                                    <option value="9">A9</option>"; 
                                                    <option value="10">A10</option>"; 
                                                    <option value="11">A11</option>"; 
                                                    <option value="12">A12</option>"; 
                                                    <option value="13">A13</option>"; 
                                                    <option value="14">A14</option>"; 
                                                    <option value="15">A15</option>"; 
                                                    <option value="16">A16</option>"; 
                                                    <option value="17">B1</option>"; 
                                                    <option value="18">B2</option>"; 
                                                    <option value="19">B3</option>"; 
                                                    <option value="20">B4</option>"; 
                                                    <option value="21">B5</option>"; 
                                                    <option value="22">B6</option>"; 
                                                    <option value="23">B7</option>"; 
                                                    <option value="24">B8</option>"; 
                                                    <option value="25">B9</option>"; 
                                                    <option value="26">B10</option>"; 
                                                    <option value="27">C1</option>"; 
                                                    <option value="28">C2</option>"; 
                                                    <option value="29">C3</option>"; 
                                                    <option value="30">C4</option>"; 
                                                    <option value="31">C5</option>"; 
                                                    <option value="32">C6</option>"; 
                                                    <option value="33">C7</option>"; 
                                                    <option value="34">C8</option>"; 
                                                    <option value="35">C9</option>"; 
                                                    <option value="36">C10</option>"; 
                                                    <option value="37">D1</option>"; 
                                                    <option value="38">D2</option>"; 
                                                    <option value="39">D3</option>"; 
                                                    <option value="40">D4</option>"; 
                                                    <option value="41">D5</option>"; 
                                                    <option value="42">D6</option>"; 
                                                    <option value="43">D7</option>"; 
                                                    <option value="44">D8</option>"; 
                                                    <option value="45">D9</option>"; 
                                                    <option value="46">D10</option>"; 
                                                    <option value="47">E1</option>"; 
                                                    <option value="48">E2</option>"; 
                                                    <option value="49">E3</option>"; 
                                                    <option value="50">E4</option>"; 
                                                    <option value="51">E5</option>"; 
                                                    <option value="52">E6</option>"; 
                                                    <option value="53">E7</option>"; 
                                                    <option value="54">E8</option>"; 
                                                    <option value="55">E9</option>"; 
                                                    <option value="56">E10</option>"; 
                                                    <option value="57">F1</option>"; 
                                                    <option value="58">F2</option>"; 
                                                    <option value="59">F3</option>"; 
                                                    <option value="60">F4</option>"; 
                                                    <option value="61">F5</option>"; 
                                                    <option value="62">F6</option>"; 
                                                    <option value="63">F7</option>"; 
                                                    <option value="64">F8</option>"; 
                                                    <option value="65">F9</option>"; 
                                                    <option value="66">F10</option>"; 
                                                    <option value="67">G1</option>"; 
                                                    <option value="68">G2</option>"; 
                                                    <option value="69">G3</option>"; 
                                                    <option value="70">G4</option>"; 
                                                    <option value="71">G5</option>"; 
                                                    <option value="72">G6</option>"; 
                                                    <option value="73">G7</option>"; 
                                                    <option value="74">G8</option>"; 
                                                    <option value="75">G9</option>"; 
                                                    <option value="76">G10</option>"; 
                                                    <option value="77">H1</option>"; 
                                                    <option value="78">H2</option>"; 
                                                    <option value="79">H3</option>"; 
                                                    <option value="80">H4</option>"; 
                                                    <option value="81">H5</option>"; 
                                                    <option value="82">H6</option>"; 
                                                    <option value="83">H7</option>"; 
                                                    <option value="84">H8</option>"; 
                                                    <option value="85">H9</option>"; 
                                                    <option value="86">H10</option>"; 
                                                    <option value="87">I1</option>"; 
                                                    <option value="88">I2</option>"; 
                                                    <option value="89">I3</option>"; 
                                                    <option value="90">I4</option>"; 
                                                    <option value="91">I5</option>"; 
                                                    <option value="92">I6</option>"; 
                                                    <option value="93">I7</option>"; 
                                                    <option value="94">I8</option>"; 
                                                    <option value="95">I9</option>"; 
                                                    <option value="96">I10</option>"; 
                                                    <option value="97">I11</option>"; 
                                                    <option value="98">I12</option>"; 
                                                    <option value="99">I13</option>"; 
                                                    <option value="100">I14</option>"; 
                                                    <option value="101">I15</option>"; 
                                                    <option value="102">I16</option>"; 
                                                    <option value="103">I17</option>"; 
                                                    <option value="104">I18</option>"; 
                                                    <option value="105">I19</option>"; 
                                                    <option value="106">I20</option>"; 
                                                    <option value="107">J1</option>"; 
                                                    <option value="108">J2</option>"; 
                                                    <option value="109">J3</option>"; 
                                                    <option value="110">J4</option>"; 
                                                    <option value="111">J5</option>"; 
                                                    <option value="112">J6</option>"; 
                                                    <option value="113">J7</option>"; 
                                                    <option value="114">J8</option>"; 
                                                    <option value="115">J9</option>"; 
                                                    <option value="116">J10</option>"; 
                                                    <option value="117">J11</option>"; 
                                                    <option value="118">J12</option>"; 
                                                    <option value="119">J13</option>"; 
                                                    <option value="120">J14</option>"; 
                                                    <option value="121">J15</option>"; 
                                                    <option value="122">J16</option>"; 
                                                    <option value="123">J17</option>"; 
                                                    <option value="124">J18</option>"; 
                                                    <option value="125">J19</option>"; 
                                                    <option value="126">J20</option>"; 
                                                    <option value="127"></option>"; 
                                                    <option value="128">A17</option>"; 
                        	
                    </select> 
                    <br><br>
                    Pseudo :
                    <select name="SelectPseudo" id="SelectPseudo">
                        <option value="" selected ></option>
                                                    <option value="1ST_Tr45HxC">1ST_Tr45HxC</option>
                                                    <option value="Abysses">Abysses</option>
                                                    <option value="admin">admin</option>
                                                    <option value="adri0413">adri0413</option>
                                                    <option value="Alcyoal">Alcyoal</option>
                                                    <option value="Alfatta">Alfatta</option>
                                                    <option value="Alfattarte">Alfattarte</option>
                                                    <option value="Ander BloodEyes">Ander BloodEyes</option>
                                                    <option value="Anga">Anga</option>
                                                    <option value="Angerfirst">Angerfirst</option>
                                                    <option value="Anus42">Anus42</option>
                                                    <option value="Artanis Pirgis">Artanis Pirgis</option>
                                                    <option value="Artikthor">Artikthor</option>
                                                    <option value="Ash">Ash</option>
                                                    <option value="AsylumCoven">AsylumCoven</option>
                                                    <option value="Atariks">Atariks</option>
                                                    <option value="ATMbigslick">ATMbigslick</option>
                                                    <option value="Banksyz">Banksyz</option>
                                                    <option value="batllegame">batllegame</option>
                                                    <option value="Belgium Flag DzX">Belgium Flag DzX</option>
                                                    <option value="Belgium Flag Zeytenh">Belgium Flag Zeytenh</option>
                                                    <option value="benauto">benauto</option>
                                                    <option value="Beno50">Beno50</option>
                                                    <option value="Blakcat">Blakcat</option>
                                                    <option value="bou">bou</option>
                                                    <option value="Boulvay">Boulvay</option>
                                                    <option value="brasix">brasix</option>
                                                    <option value="Brenda">Brenda</option>
                                                    <option value="Broflovsky">Broflovsky</option>
                                                    <option value="bryan6mepu">bryan6mepu</option>
                                                    <option value="buenoC6">buenoC6</option>
                                                    <option value="Bumblebee">Bumblebee</option>
                                                    <option value="Canon6etoiles">Canon6etoiles</option>
                                                    <option value="Chat Ringan">Chat Ringan</option>
                                                    <option value="Chillsforyou">Chillsforyou</option>
                                                    <option value="China">China</option>
                                                    <option value="cloud1213">cloud1213</option>
                                                    <option value="Codu">Codu</option>
                                                    <option value="corky">corky</option>
                                                    <option value="craywyn">craywyn</option>
                                                    <option value="crisedefoi">crisedefoi</option>
                                                    <option value="Danilus">Danilus</option>
                                                    <option value="deadlive">deadlive</option>
                                                    <option value="Dekama">Dekama</option>
                                                    <option value="Delikan57">Delikan57</option>
                                                    <option value="Desert">Desert</option>
                                                    <option value="DestroyedParadis">DestroyedParadis</option>
                                                    <option value="dodop">dodop</option>
                                                    <option value="DottyLloyd">DottyLloyd</option>
                                                    <option value="Dr Miika">Dr Miika</option>
                                                    <option value="Drêdack">Drêdack</option>
                                                    <option value="Droledami">Droledami</option>
                                                    <option value="ducoman">ducoman</option>
                                                    <option value="Echofox">Echofox</option>
                                                    <option value="Eklatburnes">Eklatburnes</option>
                                                    <option value="Eklatpif">Eklatpif</option>
                                                    <option value="Entamoeba">Entamoeba</option>
                                                    <option value="Er3az">Er3az</option>
                                                    <option value="eystornt">eystornt</option>
                                                    <option value="fliwdeir">fliwdeir</option>
                                                    <option value="Florentcle">Florentcle</option>
                                                    <option value="Fluffy">Fluffy</option>
                                                    <option value="Fogz">Fogz</option>
                                                    <option value="fox2903">fox2903</option>
                                                    <option value="FroZen">FroZen</option>
                                                    <option value="Fyren">Fyren</option>
                                                    <option value="Gahkin">Gahkin</option>
                                                    <option value="Galdesh">Galdesh</option>
                                                    <option value="Gaudryk">Gaudryk</option>
                                                    <option value="giovanbaba">giovanbaba</option>
                                                    <option value="gosh101">gosh101</option>
                                                    <option value="GRAPHH">GRAPHH</option>
                                                    <option value="Greybak">Greybak</option>
                                                    <option value="Gs DeadLine56">Gs DeadLine56</option>
                                                    <option value="Guerrier666">Guerrier666</option>
                                                    <option value="Guirlande">Guirlande</option>
                                                    <option value="gwennytoux">gwennytoux</option>
                                                    <option value="Hamsterguys">Hamsterguys</option>
                                                    <option value="handsome smurf">handsome smurf</option>
                                                    <option value="Happy Nems">Happy Nems</option>
                                                    <option value="Helmanath">Helmanath</option>
                                                    <option value="Hexceed">Hexceed</option>
                                                    <option value="Hextia">Hextia</option>
                                                    <option value="hfkill">hfkill</option>
                                                    <option value="Horokrist">Horokrist</option>
                                                    <option value="HyzoWeed">HyzoWeed</option>
                                                    <option value="iGlooW">iGlooW</option>
                                                    <option value="igor mono">igor mono</option>
                                                    <option value="ioni">ioni</option>
                                                    <option value="JankulaseK">JankulaseK</option>
                                                    <option value="Kaethuseth">Kaethuseth</option>
                                                    <option value="KaMoKyu">KaMoKyu</option>
                                                    <option value="Katax">Katax</option>
                                                    <option value="Katnus">Katnus</option>
                                                    <option value="kazuhya">kazuhya</option>
                                                    <option value="koekjes">koekjes</option>
                                                    <option value="Kovers">Kovers</option>
                                                    <option value="Kr0usty">Kr0usty</option>
                                                    <option value="Krogoh">Krogoh</option>
                                                    <option value="LamboX">LamboX</option>
                                                    <option value="landre164">landre164</option>
                                                    <option value="Lasti">Lasti</option>
                                                    <option value="Lee Sin">Lee Sin</option>
                                                    <option value="lion24">lion24</option>
                                                    <option value="LittleS4T4N">LittleS4T4N</option>
                                                    <option value="Liytøse">Liytøse</option>
                                                    <option value="Loraline">Loraline</option>
                                                    <option value="Lordftw">Lordftw</option>
                                                    <option value="Louza">Louza</option>
                                                    <option value="luffy0612">luffy0612</option>
                                                    <option value="lukasobito">lukasobito</option>
                                                    <option value="Luke">Luke</option>
                                                    <option value="machabastien">machabastien</option>
                                                    <option value="Macphalin">Macphalin</option>
                                                    <option value="Madixti">Madixti</option>
                                                    <option value="malu7800">malu7800</option>
                                                    <option value="MetaxLight">MetaxLight</option>
                                                    <option value="Métronic">Métronic</option>
                                                    <option value="Mikeman">Mikeman</option>
                                                    <option value="Mizark">Mizark</option>
                                                    <option value="Monkey D Allan">Monkey D Allan</option>
                                                    <option value="Morgasme">Morgasme</option>
                                                    <option value="MrNedria">MrNedria</option>
                                                    <option value="mrtoshio">mrtoshio</option>
                                                    <option value="Multidoting">Multidoting</option>
                                                    <option value="NamaTroX">NamaTroX</option>
                                                    <option value="Narco">Narco</option>
                                                    <option value="Navarro">Navarro</option>
                                                    <option value="Nucleaz">Nucleaz</option>
                                                    <option value="Nydda">Nydda</option>
                                                    <option value="Nyuw">Nyuw</option>
                                                    <option value="oculus">oculus</option>
                                                    <option value="Ohgreat">Ohgreat</option>
                                                    <option value="OPMaRSs">OPMaRSs</option>
                                                    <option value="Orceus">Orceus</option>
                                                    <option value="Origamie">Origamie</option>
                                                    <option value="ousermont">ousermont</option>
                                                    <option value="Playas">Playas</option>
                                                    <option value="Popol au Cirque">Popol au Cirque</option>
                                                    <option value="Psychopaf">Psychopaf</option>
                                                    <option value="PuLse Olen">PuLse Olen</option>
                                                    <option value="qodex">qodex</option>
                                                    <option value="RageManSenior">RageManSenior</option>
                                                    <option value="RaKyora">RaKyora</option>
                                                    <option value="Rawnur">Rawnur</option>
                                                    <option value="Rayalok">Rayalok</option>
                                                    <option value="RectoO">RectoO</option>
                                                    <option value="rod0511">rod0511</option>
                                                    <option value="roden164">roden164</option>
                                                    <option value="Rothesse">Rothesse</option>
                                                    <option value="rougetta">rougetta</option>
                                                    <option value="Salcatin">Salcatin</option>
                                                    <option value="samarïtan">samarïtan</option>
                                                    <option value="satanasth250">satanasth250</option>
                                                    <option value="Seyfur">Seyfur</option>
                                                    <option value="shasha07">shasha07</option>
                                                    <option value="Shethan">Shethan</option>
                                                    <option value="Shoutmog">Shoutmog</option>
                                                    <option value="Shyrøw">Shyrøw</option>
                                                    <option value="Siena">Siena</option>
                                                    <option value="Skayard">Skayard</option>
                                                    <option value="skit">skit</option>
                                                    <option value="Skullhards">Skullhards</option>
                                                    <option value="skuyz">skuyz</option>
                                                    <option value="Skynyx">Skynyx</option>
                                                    <option value="Sl33p3r">Sl33p3r</option>
                                                    <option value="sleve">sleve</option>
                                                    <option value="Sman3133">Sman3133</option>
                                                    <option value="Soccielo">Soccielo</option>
                                                    <option value="Soyo">Soyo</option>
                                                    <option value="Sponos">Sponos</option>
                                                    <option value="Spytte is Coming">Spytte is Coming</option>
                                                    <option value="subbyy">subbyy</option>
                                                    <option value="supertinez">supertinez</option>
                                                    <option value="Suyken">Suyken</option>
                                                    <option value="Tartines">Tartines</option>
                                                    <option value="Téflon">Téflon</option>
                                                    <option value="Thaerith">Thaerith</option>
                                                    <option value="TheBlackDiamond">TheBlackDiamond</option>
                                                    <option value="THEDEVASTATOR">THEDEVASTATOR</option>
                                                    <option value="Thorgrim">Thorgrim</option>
                                                    <option value="thotwith">thotwith</option>
                                                    <option value="Tomirock">Tomirock</option>
                                                    <option value="Torakh">Torakh</option>
                                                    <option value="ToSu91">ToSu91</option>
                                                    <option value="Touza">Touza</option>
                                                    <option value="Tøxigrinta">Tøxigrinta</option>
                                                    <option value="trogalt">trogalt</option>
                                                    <option value="Unexard">Unexard</option>
                                                    <option value="VeryBadLegend">VeryBadLegend</option>
                                                    <option value="vindoze">vindoze</option>
                                                    <option value="Volgrim">Volgrim</option>
                                                    <option value="Wadosh">Wadosh</option>
                                                    <option value="waelan">waelan</option>
                                                    <option value="Webolivieri">Webolivieri</option>
                                                    <option value="Winblast">Winblast</option>
                                                    <option value="Witchh Doctor">Witchh Doctor</option>
                                                    <option value="wiwi0123">wiwi0123</option>
                                                    <option value="wooligan">wooligan</option>
                                                    <option value="Worst fiddle EUW">Worst fiddle EUW</option>
                                                    <option value="xemnas192">xemnas192</option>
                                                    <option value="ximunou">ximunou</option>
                                                    <option value="XUltiX">XUltiX</option>
                                                    <option value="xxbitter">xxbitter</option>
                                                    <option value="xxroroxx">xxroroxx</option>
                                                    <option value="Yasukiro">Yasukiro</option>
                                                    <option value="Yellowpit">Yellowpit</option>
                                                    <option value="Zarak">Zarak</option>
                                                    <option value="zarbisi">zarbisi</option>
                                                    <option value="Zayzo">Zayzo</option>
                                                    <option value="Zelof">Zelof</option>
                                            </select>
                    <br><br>
                    <p><center><input class="submit" type="submit" value="Valider" /></center></p>
                </form>
                <div id="dialogInfo_joueur"></div>
                <div id="dialogInfo_equipe"></div>
            </div>
	</div>	
	
        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;"></div>
        
	
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
