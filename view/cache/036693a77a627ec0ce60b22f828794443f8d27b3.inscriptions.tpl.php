<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:00:09
  from "E:\wamp\www\Intranet\view\templates\admin\inscriptions.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f528498f1827_56317725',
  'file_dependency' => 
  array (
    '036693a77a627ec0ce60b22f828794443f8d27b3' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\inscriptions.tpl',
      1 => 1458870313,
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
function content_56f528498f1827_56317725 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/inscriptions.css" > 
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
                <div id="InscriptionDesJoueursEquipesAuxTournois" class="col-lg-12">
                    <div class="row">
                        <!-- tournois avec equipes -->
                                                    <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>HOTS</h4>
                                <div class="list" id="ListeInscrit1">
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="71">Alcyol #2207</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="67">Alfatta #2772</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="40">Annie's Firstblood</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="3">Belgian Inoffensive Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="23">Belgian Rape Squad</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="56">BIT1</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="57">BIT2</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="38">Bloodytearz</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="51">C'était une mauvaise idée</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="22">Caedem Dominatur</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="48">Crêpière Tefal</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="65">Delikan57 #2256</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="20">Doctors X</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="26">Dofusian GAMING</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="24">Don't feed the ginger</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="63">Droledami #2473</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="66">Ebaral #2123</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="61">Echofox #2924</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="33">First</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="25">FPMs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="8">Gitan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="50">Go Nerf Karma</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="13">God Sake</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="29">Gods of Chocolate</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="53">GoldTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="68">Guerrier666 #2345</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="1">HeHLan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="6">Inception eSport</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="32">iNPhase</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="43">ISWEARSHEWAS18</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="45">Je mange des shtroumpfs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="21">JokS</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="36">La Dream Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="37">La Nouvelle Génération</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="35">Lamastruche Gaming</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="58">Lambox #2917</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="14">Les Bifflettes Maison</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="18">Les Michel Forever</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="7">Les Tites Fioles</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="52">Ma grosse bite en plâtre</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="2">MABITE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="19">Mid Or Feed</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="17">Midget Pineapple Wolverine</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="30">Murderous Insanity in ET</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="60">Nedria #2996</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="49">NIP TA MERE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="16">NoneEsCape</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="15">Nothing</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="9">Olaf Alope</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="44">On suce des Schtroumphs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="34">Petits Kebabs Volant</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="31">Petits Lézards Tous Nus</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="42">Phoenix Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="70">Pinguiz #2232</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="64">Rayalok #2449</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="41">Reflex Belgium</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="39">Skillshout</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="47">Stupid Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="46">Stupid-Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="10">The Bleeding Rocks</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="27">The Legion of Nether</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="12">The LuckyTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="28">Tish-cake KaWaii</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="62">Touza #2628</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="59">Unexard #2460</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="11">WeAreVincent</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="69">Witch Doctor #2256</label>
                                                                                    </div>
                                                                    </div>
                                <center>
                                    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="1" value="Valider les inscriptions">
                                </center>
                            </div>                        
                                                    <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>COD4</h4>
                                <div class="list" id="ListeInscrit2">
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="71">Alcyol #2207</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="67">Alfatta #2772</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="40">Annie's Firstblood</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="3">Belgian Inoffensive Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="23">Belgian Rape Squad</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="56">BIT1</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="57">BIT2</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="38">Bloodytearz</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="51">C'était une mauvaise idée</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="22">Caedem Dominatur</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="48">Crêpière Tefal</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="65">Delikan57 #2256</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="20">Doctors X</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="26">Dofusian GAMING</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="24">Don't feed the ginger</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="63">Droledami #2473</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="66">Ebaral #2123</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="61">Echofox #2924</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="33">First</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="25">FPMs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="8">Gitan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="50">Go Nerf Karma</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="13">God Sake</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="29">Gods of Chocolate</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="53">GoldTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="68">Guerrier666 #2345</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="1">HeHLan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="6">Inception eSport</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="32">iNPhase</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="43">ISWEARSHEWAS18</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="45">Je mange des shtroumpfs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="21">JokS</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="36">La Dream Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="37">La Nouvelle Génération</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="35">Lamastruche Gaming</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="58">Lambox #2917</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="14">Les Bifflettes Maison</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="18">Les Michel Forever</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="7">Les Tites Fioles</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="52">Ma grosse bite en plâtre</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="2">MABITE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="19">Mid Or Feed</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="17">Midget Pineapple Wolverine</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="30">Murderous Insanity in ET</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="60">Nedria #2996</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="49">NIP TA MERE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="16">NoneEsCape</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="15">Nothing</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="9">Olaf Alope</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="44">On suce des Schtroumphs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="34">Petits Kebabs Volant</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="31">Petits Lézards Tous Nus</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="42">Phoenix Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="70">Pinguiz #2232</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="64">Rayalok #2449</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="41">Reflex Belgium</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="39">Skillshout</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="47">Stupid Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="46">Stupid-Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="10">The Bleeding Rocks</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="27">The Legion of Nether</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="12">The LuckyTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="28">Tish-cake KaWaii</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="62">Touza #2628</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="59">Unexard #2460</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="11">WeAreVincent</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="69">Witch Doctor #2256</label>
                                                                                    </div>
                                                                    </div>
                                <center>
                                    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="2" value="Valider les inscriptions">
                                </center>
                            </div>                        
                                                    <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>HS</h4>
                                <div class="list" id="ListeInscrit5">
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="71">Alcyol #2207</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="67">Alfatta #2772</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="40">Annie's Firstblood</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="3">Belgian Inoffensive Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="23">Belgian Rape Squad</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="56">BIT1</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="57">BIT2</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="38">Bloodytearz</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="51">C'était une mauvaise idée</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="22">Caedem Dominatur</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="48">Crêpière Tefal</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="65">Delikan57 #2256</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="20">Doctors X</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="26">Dofusian GAMING</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="24">Don't feed the ginger</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="63">Droledami #2473</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="66">Ebaral #2123</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="61">Echofox #2924</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="33">First</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="25">FPMs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="8">Gitan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="50">Go Nerf Karma</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="13">God Sake</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="29">Gods of Chocolate</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="53">GoldTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="68">Guerrier666 #2345</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="1">HeHLan</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="6">Inception eSport</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="32">iNPhase</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="43">ISWEARSHEWAS18</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="45">Je mange des shtroumpfs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="21">JokS</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="36">La Dream Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="37">La Nouvelle Génération</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="35">Lamastruche Gaming</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="58">Lambox #2917</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="14">Les Bifflettes Maison</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="18">Les Michel Forever</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="7">Les Tites Fioles</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="52">Ma grosse bite en plâtre</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="2">MABITE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="19">Mid Or Feed</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="17">Midget Pineapple Wolverine</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="30">Murderous Insanity in ET</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="60">Nedria #2996</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="49">NIP TA MERE</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="16">NoneEsCape</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="15">Nothing</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="9">Olaf Alope</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="44">On suce des Schtroumphs</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="34">Petits Kebabs Volant</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="31">Petits Lézards Tous Nus</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="42">Phoenix Team</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="70">Pinguiz #2232</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="64">Rayalok #2449</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="41">Reflex Belgium</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="39">Skillshout</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="47">Stupid Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="46">Stupid-Move</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="10">The Bleeding Rocks</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="27">The Legion of Nether</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="12">The LuckyTeam</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="28">Tish-cake KaWaii</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="62">Touza #2628</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="59">Unexard #2460</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' value="11">WeAreVincent</label>
                                                                                    </div>
                                                                            <div class="row teamItem">
                                                                                            <label class="col-lg-12"><input type='checkbox' checked value="69">Witch Doctor #2256</label>
                                                                                    </div>
                                                                    </div>
                                <center>
                                    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="5" value="Valider les inscriptions">
                                </center>
                            </div>                        
                                                
                        <!-- tournois individuels -->
                                                    <div class='ListePourInscrireTournoi col-lg-3'>
                                <h4>TMNF</h4>
                                <div class="list" id="ListeInscritJT3">
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="138">1ST_Tr45HxC</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3138" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="96">Abysses</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur396" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="2553">admin</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur32553" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="193">adri0413</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3193" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="130">Alcyoal</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3130" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="102">Alfatta</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3102" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="101">Alfattarte</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3101" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="84">Ander BloodEyes</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur384" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="99">Anga</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur399" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="86">Angerfirst</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur386" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="131">Anus42</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3131" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="33">Artanis Pirgis</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur333" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="186">Artikthor</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3186" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="106">Ash</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3106" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="154">AsylumCoven</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3154" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="140">Atariks</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3140" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="134">ATMbigslick</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3134" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="124">Banksyz</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3124" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="183">batllegame</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3183" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="172">Belgium Flag DzX</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3172" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="57">Belgium Flag Zeytenh</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur357" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="88">benauto</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur388" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="157">Beno50</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3157" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="176">Blakcat</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3176" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="54">bou</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur354" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="29">Boulvay</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur329" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="35">brasix</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur335" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="214">Brenda</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3214" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="199">Broflovsky</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3199" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="182">bryan6mepu</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3182" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="146">buenoC6</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3146" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="206">Bumblebee</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3206" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="6">Canon6etoiles</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur36" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="119">Chat Ringan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3119" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="177">Chillsforyou</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3177" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="173">China</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3173" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="171">cloud1213</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3171" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="93">Codu</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur393" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="104">craywyn</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3104" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="117">crisedefoi</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3117" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="111">Danilus</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3111" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="162">deadlive</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3162" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="136">Dekama</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3136" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="66">Delikan57</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur366" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="18">Desert</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur318" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="31">DestroyedParadis</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur331" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="75">dodop</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur375" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="139">DottyLloyd</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3139" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="76">Dr Miika</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur376" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="190">Drêdack</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3190" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="71">Droledami</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur371" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="151">ducoman</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3151" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="70">Echofox</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur370" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="61">Eklatburnes</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur361" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="59">Eklatpif</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur359" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="60">Entamoeba</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur360" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="118">Er3az</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3118" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="197">eystornt</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3197" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="3">fliwdeir</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur33" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="181">Florentcle</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3181" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="94">Fluffy</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur394" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="22">Fogz</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur322" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="122">fox2903</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3122" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="185">FroZen</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3185" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="155">Fyren</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3155" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="113">Gahkin</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3113" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="121">Galdesh</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3121" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="98">Gaudryk</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur398" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="168">giovanbaba</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3168" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="51">gosh101</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur351" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="210">GRAPHH</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3210" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="123">Greybak</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3123" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="159">Gs DeadLine56</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3159" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="13">Guerrier666</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur313" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="194">Guirlande</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3194" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="97">gwennytoux</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur397" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="41">Hamsterguys</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur341" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="156">handsome smurf</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3156" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="49">Happy Nems</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur349" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="78">Helmanath</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur378" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="48">Hexceed</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur348" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="95">Hextia</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur395" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="175">hfkill</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3175" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="52">Horokrist</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur352" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="207">HyzoWeed</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3207" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="53">iGlooW</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur353" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="144">igor mono</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3144" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="26">ioni</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur326" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="62">JankulaseK</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur362" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="105">Kaethuseth</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3105" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="209">KaMoKyu</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3209" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="38">Katax</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur338" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="149">Katnus</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3149" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="115">kazuhya</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3115" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="21">koekjes</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur321" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="87">Kovers</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur387" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="192">Kr0usty</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3192" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="8">Krogoh</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur38" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="47">LamboX</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur347" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="91">landre164</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur391" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="184">Lasti</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3184" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="63">Lee Sin</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur363" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="5">lion24</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur35" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="7">LittleS4T4N</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur37" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="164">Liytøse</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3164" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="163">Loraline</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3163" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="137">Lordftw</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3137" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="204">Louza</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3204" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="211">luffy0612</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3211" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="103">lukasobito</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3103" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="14">Luke</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur314" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="120">machabastien</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3120" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="191">Macphalin</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3191" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="180">Madixti</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3180" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="80">malu7800</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur380" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="145">MetaxLight</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3145" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="20">Métronic</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur320" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="148">Mikeman</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3148" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="200">Mizark</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3200" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="69">Monkey D Allan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur369" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="178">Morgasme</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3178" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="100">MrNedria</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3100" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="203">mrtoshio</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3203" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="79">Multidoting</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur379" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="50">NamaTroX</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur350" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="77">Narco</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur377" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="195">Navarro</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3195" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="89">Nucleaz</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur389" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="37">Nydda</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur337" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="39">Nyuw</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur339" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="212">oculus</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3212" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="141">Ohgreat</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3141" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="147">OPMaRSs</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3147" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="187">Orceus</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3187" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="73">Origamie</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur373" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="45">ousermont</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur345" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="72">Playas</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur372" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="114">Popol au Cirque</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3114" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="10">Psychopaf</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur310" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="166">PuLse Olen</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3166" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="174">qodex</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3174" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="152">RageManSenior</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3152" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="170">RaKyora</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3170" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="12">Rawnur</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur312" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="68">Rayalok</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur368" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="25">RectoO</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur325" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="42">rod0511</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur342" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="90">roden164</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur390" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="40">Rothesse</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur340" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="127">rougetta</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3127" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="56">Salcatin</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur356" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="165">samarïtan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3165" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="82">satanasth250</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur382" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="65">Seyfur</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur365" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="142">shasha07</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3142" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="125">Shethan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3125" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="158">Shoutmog</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3158" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="126">Shyrøw</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3126" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="107">Siena</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3107" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="108">Skayard</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3108" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="2552">skit</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur32552" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="43">Skullhards</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur343" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="129">skuyz</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3129" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="46">Skynyx</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur346" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="32">Sl33p3r</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur332" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="196">sleve</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3196" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="143">Sman3133</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3143" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="112">Soccielo</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3112" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="205">Soyo</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3205" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="30">Sponos</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur330" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="17">Spytte is Coming</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur317" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="202">subbyy</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3202" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="198">supertinez</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3198" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="64">Suyken</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur364" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="58">Tartines</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur358" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="36">Téflon</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur336" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="23">Thaerith</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur323" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="109">TheBlackDiamond</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3109" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="160">THEDEVASTATOR</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3160" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="85">Thorgrim</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur385" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="128">thotwith</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur3128" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="81">Tomirock</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur381" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="167">Torakh</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3167" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="161">ToSu91</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3161" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="67">Touza</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur367" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="116">trogalt</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3116" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="34">Tøxigrinta</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur334" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="179">Unexard</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3179" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="135">VeryBadLegend</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3135" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="188">vindoze</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3188" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="201">Volgrim</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3201" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="83">Wadosh</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur383" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="133">waelan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3133" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="92">Webolivieri</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur392" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="24">Winblast</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur324" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="28">Witchh Doctor</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur328" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="189">wiwi0123</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3189" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="150">wooligan</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3150" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="74">Worst fiddle EUW</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur374" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="27">xemnas192</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur327" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="44">ximunou</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur344" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="110">XUltiX</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3110" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="213">xxbitter</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3213" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="153">xxroroxx</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3153" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="169">Yasukiro</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3169" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="208">Yellowpit</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3208" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" checked value="55">Zarak</label>
                                                                                        <input class="col-lg-5" type="text" id="Joueur355" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="19">zarbisi</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur319" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="132">Zayzo</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur3132" disabled readonly value="">
                                        </div>
                                                                            <div class="row joueurItem">
                                                                                            <label class="col-lg-6"><input type="checkbox" value="4">Zelof</label>                                    
                                                                                        <input class="col-lg-5" type="text" id="Joueur34" disabled readonly value="">
                                        </div>
                                                                    </div>
                                <center>
                                    <input type="button" class="submitInscriptionJTAdmin" id="3" value="Valider les inscriptions">
                                </center>
                            </div>                        
                                                
                    </div>
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

        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/inscriptions.js"></script>
    </body>
</html><?php }
}
