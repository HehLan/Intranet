<?php
/* Smarty version 3.1.29, created on 2016-03-25 18:13:58
  from "E:\wamp\www\Intranet\view\templates\admin\emplacements.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f571d6e0e038_55358767',
  'file_dependency' => 
  array (
    '91d0757a6c5105ce0aa67e66d2f02259cd6ba671' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\emplacements.tpl',
      1 => 1458906678,
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
function content_56f571d6e0e038_55358767 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/emplacements.css" >	
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
            <div class="col-lg-2">
                <!-- VISIONNER LA PLACE DU JOUEUR -->    
                <b><u><center>Consulter la place :</center></u></b></b>
                <br><br>
                <!-- PSEUDO -->
                Pseudo :
                <select class="SelectPseudo" name="SelectPseudo" id="SelectPseudo">
                    <option value="" selected ></option>
                                            <option value="">Acocix</option>
                                            <option value="">admin</option>
                                            <option value="">AdnVitamine</option>
                                            <option value="">anakuza</option>
                                            <option value="">Anga</option>
                                            <option value="49">Anus42</option>
                                            <option value="">Asykins</option>
                                            <option value="50">Atanor</option>
                                            <option value="39">Atlas</option>
                                            <option value="48">Avahi</option>
                                            <option value="">BenjyBen</option>
                                            <option value="">Blackdesir</option>
                                            <option value="">BLACKHAWKS FTW</option>
                                            <option value="">Breurk</option>
                                            <option value="">Capixel</option>
                                            <option value="96">Casimir</option>
                                            <option value="">Castag</option>
                                            <option value="51">chauveman</option>
                                            <option value="">cmab</option>
                                            <option value="">comforteagle</option>
                                            <option value="121">Davros</option>
                                            <option value="">Desert</option>
                                            <option value="65">Diablok20</option>
                                            <option value="71">Echuiine</option>
                                            <option value="">Eclipso</option>
                                            <option value="122">Edge</option>
                                            <option value="">Eklatpif</option>
                                            <option value="">eltay</option>
                                            <option value="47">Emer</option>
                                            <option value="">EnhancerBD</option>
                                            <option value="53">Fhorcas</option>
                                            <option value="">FleSk</option>
                                            <option value="37">Fuzz</option>
                                            <option value="">gaetaen</option>
                                            <option value="79">gally</option>
                                            <option value="38">gunjack</option>
                                            <option value="61">Hellblazer</option>
                                            <option value="95">Hextia</option>
                                            <option value="">HyN Zartöx</option>
                                            <option value="">IceStranger</option>
                                            <option value="">Insousciance</option>
                                            <option value="72">Janken</option>
                                            <option value="125">Kaizu</option>
                                            <option value="">KingRichard</option>
                                            <option value="60">Kleotisa</option>
                                            <option value="">Kraktu</option>
                                            <option value="">Kraviniho</option>
                                            <option value="">Kritic</option>
                                            <option value="">Krogoh</option>
                                            <option value="">Krokette</option>
                                            <option value="41">lamboX</option>
                                            <option value="">Lemax</option>
                                            <option value="">Li#leS4T4N</option>
                                            <option value="93">Loken</option>
                                            <option value="75">LouvardGame</option>
                                            <option value="76">LouvardGame2</option>
                                            <option value="">Luke</option>
                                            <option value="">MacaK_</option>
                                            <option value="">meaculpa</option>
                                            <option value="">Méli</option>
                                            <option value="">Moon98</option>
                                            <option value="">Mortox</option>
                                            <option value="">mRipperz</option>
                                            <option value="">My Tacos</option>
                                            <option value="">Nemass</option>
                                            <option value="">Outchcapike</option>
                                            <option value="">Playas</option>
                                            <option value="69">Ploper</option>
                                            <option value="">Psychopaf</option>
                                            <option value="">Purple#2615</option>
                                            <option value="">R3S BoBChief</option>
                                            <option value="123">rainbown</option>
                                            <option value="">Rayven</option>
                                            <option value="">rigorix</option>
                                            <option value="">Rodgerz</option>
                                            <option value="112">Runnard</option>
                                            <option value="">sailor_godkane</option>
                                            <option value="55">Sam</option>
                                            <option value="94">Sephire</option>
                                            <option value="">Sica</option>
                                            <option value="113">Silv3r75</option>
                                            <option value="">SinRJ</option>
                                            <option value="">Sl33p3r</option>
                                            <option value="40">Souloxx</option>
                                            <option value="">StO</option>
                                            <option value="">Strange Banana</option>
                                            <option value="66">StrawHat</option>
                                            <option value="">Talouf</option>
                                            <option value="">thery111</option>
                                            <option value="54">Thibu</option>
                                            <option value="">Tidu</option>
                                            <option value="">Tipstoy</option>
                                            <option value="">Toinou18</option>
                                            <option value="">TrafDF</option>
                                            <option value="">Tragastriel</option>
                                            <option value="">uByz</option>
                                            <option value="52">Vejakx</option>
                                            <option value="">Vertigoh</option>
                                            <option value="92">Vlad</option>
                                            <option value="">Wadosh</option>
                                            <option value="64">weshpearlish</option>
                                            <option value="">YouFM !</option>
                                            <option value="">yudovic</option>
                                            <option value="">Yuki</option>
                                            <option value="">Zen</option>
                                            <option value="124">Zircky</option>
                                    </select>
                <br>
                <br>
                <!-- Equipe -->
                Equipe :
                <select id="SelectEquipe">
                    <option value="" selected ></option>
                                            <option value="118">50ShadesOfMurky</option>
                                            <option value="126">BaraWeTrust</option>
                                            <option value="119">Belgian Rape Squad</option>
                                            <option value="115">DotFires</option>
                                            <option value="117">Faglords Of Draenor</option>
                                            <option value="122">Faglords Of Draenor.</option>
                                            <option value="110">FricadellesDuPurgatoire</option>
                                            <option value="120">Homard Team</option>
                                            <option value="107">Les Gros Sandwiches</option>
                                            <option value="121">Lunaria.Mix</option>
                                            <option value="123">Lunastra</option>
                                            <option value="127">Made In Belgium</option>
                                            <option value="124">Mighty plo</option>
                                            <option value="106">OmgTeam</option>
                                            <option value="114">Police de la Luck</option>
                                            <option value="116">Poulet Furieux</option>
                                            <option value="111">R3surrection</option>
                                            <option value="125">Red Devils</option>
                                            <option value="113">Stonehenge</option>
                                            <option value="112">Strutters</option>
                               
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
                                                    <option value="131"><b>Kompu</b></option>"; 
                                                    <option value="130"><b>Reload</b></option>"; 
                                                    <option value="129"><b>YouFM</b></option>"; 
                                                    <option value="8">A1</option>"; 
                                                    <option value="7">A2</option>"; 
                                                    <option value="6">A3</option>"; 
                                                    <option value="1">A4</option>"; 
                                                    <option value="2">A5</option>"; 
                                                    <option value="3">A6</option>"; 
                                                    <option value="9">A7</option>"; 
                                                    <option value="10">A8</option>"; 
                                                    <option value="11">A9</option>"; 
                                                    <option value="17">B1</option>"; 
                                                    <option value="26">B10</option>"; 
                                                    <option value="18">B2</option>"; 
                                                    <option value="19">B3</option>"; 
                                                    <option value="20">B4</option>"; 
                                                    <option value="21">B5</option>"; 
                                                    <option value="22">B6</option>"; 
                                                    <option value="23">B7</option>"; 
                                                    <option value="24">B8</option>"; 
                                                    <option value="25">B9</option>"; 
                                                    <option value="27">C1</option>"; 
                                                    <option value="28">C2</option>"; 
                                                    <option value="29">C3</option>"; 
                                                    <option value="32">C4</option>"; 
                                                    <option value="33">C5</option>"; 
                                                    <option value="34">C6</option>"; 
                                                    <option value="37">D1</option>"; 
                                                    <option value="46">D10</option>"; 
                                                    <option value="38">D2</option>"; 
                                                    <option value="39">D3</option>"; 
                                                    <option value="40">D4</option>"; 
                                                    <option value="41">D5</option>"; 
                                                    <option value="42">D6</option>"; 
                                                    <option value="43">D7</option>"; 
                                                    <option value="44">D8</option>"; 
                                                    <option value="45">D9</option>"; 
                                                    <option value="47">E1</option>"; 
                                                    <option value="56">E10</option>"; 
                                                    <option value="48">E2</option>"; 
                                                    <option value="49">E3</option>"; 
                                                    <option value="50">E4</option>"; 
                                                    <option value="51">E5</option>"; 
                                                    <option value="52">E6</option>"; 
                                                    <option value="53">E7</option>"; 
                                                    <option value="54">E8</option>"; 
                                                    <option value="55">E9</option>"; 
                                                    <option value="57">F1</option>"; 
                                                    <option value="65">F10</option>"; 
                                                    <option value="66">F11</option>"; 
                                                    <option value="72">F12</option>"; 
                                                    <option value="58">F2</option>"; 
                                                    <option value="59">F3</option>"; 
                                                    <option value="60">F4</option>"; 
                                                    <option value="61">F5</option>"; 
                                                    <option value="69">F6</option>"; 
                                                    <option value="62">F7</option>"; 
                                                    <option value="63">F8</option>"; 
                                                    <option value="64">F9</option>"; 
                                                    <option value="75">G1</option>"; 
                                                    <option value="76">G2</option>"; 
                                                    <option value="68">G3</option>"; 
                                                    <option value="70">G4</option>"; 
                                                    <option value="71">G5</option>"; 
                                                    <option value="77">H1</option>"; 
                                                    <option value="78">H2</option>"; 
                                                    <option value="79">H3</option>"; 
                                                    <option value="89">I1</option>"; 
                                                    <option value="100">I10</option>"; 
                                                    <option value="101">I11</option>"; 
                                                    <option value="102">I12</option>"; 
                                                    <option value="103">I13</option>"; 
                                                    <option value="104">I14</option>"; 
                                                    <option value="105">I15</option>"; 
                                                    <option value="106">I16</option>"; 
                                                    <option value="90">I2</option>"; 
                                                    <option value="91">I3</option>"; 
                                                    <option value="92">I4</option>"; 
                                                    <option value="93">I5</option>"; 
                                                    <option value="94">I6</option>"; 
                                                    <option value="95">I7</option>"; 
                                                    <option value="96">I8</option>"; 
                                                    <option value="99">I9</option>"; 
                                                    <option value="109">J1</option>"; 
                                                    <option value="120">J10</option>"; 
                                                    <option value="121">J11</option>"; 
                                                    <option value="122">J12</option>"; 
                                                    <option value="123">J13</option>"; 
                                                    <option value="124">J14</option>"; 
                                                    <option value="125">J15</option>"; 
                                                    <option value="126">J16</option>"; 
                                                    <option value="110">J2</option>"; 
                                                    <option value="111">J3</option>"; 
                                                    <option value="112">J4</option>"; 
                                                    <option value="113">J5</option>"; 
                                                    <option value="114">J6</option>"; 
                                                    <option value="115">J7</option>"; 
                                                    <option value="116">J8</option>"; 
                                                    <option value="119">J9</option>"; 
                        	
                    </select> 
                    <br><br>
                    Pseudo :
                    <select name="SelectPseudo" id="SelectPseudo">
                        <option value="" selected ></option>
                                                    <option value="Acocix">Acocix</option>
                                                    <option value="admin">admin</option>
                                                    <option value="AdnVitamine">AdnVitamine</option>
                                                    <option value="anakuza">anakuza</option>
                                                    <option value="Anga">Anga</option>
                                                    <option value="Anus42">Anus42</option>
                                                    <option value="Asykins">Asykins</option>
                                                    <option value="Atanor">Atanor</option>
                                                    <option value="Atlas">Atlas</option>
                                                    <option value="Avahi">Avahi</option>
                                                    <option value="BenjyBen">BenjyBen</option>
                                                    <option value="Blackdesir">Blackdesir</option>
                                                    <option value="BLACKHAWKS FTW">BLACKHAWKS FTW</option>
                                                    <option value="Breurk">Breurk</option>
                                                    <option value="Capixel">Capixel</option>
                                                    <option value="Casimir">Casimir</option>
                                                    <option value="Castag">Castag</option>
                                                    <option value="chauveman">chauveman</option>
                                                    <option value="cmab">cmab</option>
                                                    <option value="comforteagle">comforteagle</option>
                                                    <option value="Davros">Davros</option>
                                                    <option value="Desert">Desert</option>
                                                    <option value="Diablok20">Diablok20</option>
                                                    <option value="Echuiine">Echuiine</option>
                                                    <option value="Eclipso">Eclipso</option>
                                                    <option value="Edge">Edge</option>
                                                    <option value="Eklatpif">Eklatpif</option>
                                                    <option value="eltay">eltay</option>
                                                    <option value="Emer">Emer</option>
                                                    <option value="EnhancerBD">EnhancerBD</option>
                                                    <option value="Fhorcas">Fhorcas</option>
                                                    <option value="FleSk">FleSk</option>
                                                    <option value="Fuzz">Fuzz</option>
                                                    <option value="gaetaen">gaetaen</option>
                                                    <option value="gally">gally</option>
                                                    <option value="gunjack">gunjack</option>
                                                    <option value="Hellblazer">Hellblazer</option>
                                                    <option value="Hextia">Hextia</option>
                                                    <option value="HyN Zartöx">HyN Zartöx</option>
                                                    <option value="IceStranger">IceStranger</option>
                                                    <option value="Insousciance">Insousciance</option>
                                                    <option value="Janken">Janken</option>
                                                    <option value="Kaizu">Kaizu</option>
                                                    <option value="KingRichard">KingRichard</option>
                                                    <option value="Kleotisa">Kleotisa</option>
                                                    <option value="Kraktu">Kraktu</option>
                                                    <option value="Kraviniho">Kraviniho</option>
                                                    <option value="Kritic">Kritic</option>
                                                    <option value="Krogoh">Krogoh</option>
                                                    <option value="Krokette">Krokette</option>
                                                    <option value="lamboX">lamboX</option>
                                                    <option value="Lemax">Lemax</option>
                                                    <option value="Li#leS4T4N">Li#leS4T4N</option>
                                                    <option value="Loken">Loken</option>
                                                    <option value="LouvardGame">LouvardGame</option>
                                                    <option value="LouvardGame2">LouvardGame2</option>
                                                    <option value="Luke">Luke</option>
                                                    <option value="MacaK_">MacaK_</option>
                                                    <option value="meaculpa">meaculpa</option>
                                                    <option value="Méli">Méli</option>
                                                    <option value="Moon98">Moon98</option>
                                                    <option value="Mortox">Mortox</option>
                                                    <option value="mRipperz">mRipperz</option>
                                                    <option value="My Tacos">My Tacos</option>
                                                    <option value="Nemass">Nemass</option>
                                                    <option value="Outchcapike">Outchcapike</option>
                                                    <option value="Playas">Playas</option>
                                                    <option value="Ploper">Ploper</option>
                                                    <option value="Psychopaf">Psychopaf</option>
                                                    <option value="Purple#2615">Purple#2615</option>
                                                    <option value="R3S BoBChief">R3S BoBChief</option>
                                                    <option value="rainbown">rainbown</option>
                                                    <option value="Rayven">Rayven</option>
                                                    <option value="rigorix">rigorix</option>
                                                    <option value="Rodgerz">Rodgerz</option>
                                                    <option value="Runnard">Runnard</option>
                                                    <option value="sailor_godkane">sailor_godkane</option>
                                                    <option value="Sam">Sam</option>
                                                    <option value="Sephire">Sephire</option>
                                                    <option value="Sica">Sica</option>
                                                    <option value="Silv3r75">Silv3r75</option>
                                                    <option value="SinRJ">SinRJ</option>
                                                    <option value="Sl33p3r">Sl33p3r</option>
                                                    <option value="Souloxx">Souloxx</option>
                                                    <option value="StO">StO</option>
                                                    <option value="Strange Banana">Strange Banana</option>
                                                    <option value="StrawHat">StrawHat</option>
                                                    <option value="Talouf">Talouf</option>
                                                    <option value="thery111">thery111</option>
                                                    <option value="Thibu">Thibu</option>
                                                    <option value="Tidu">Tidu</option>
                                                    <option value="Tipstoy">Tipstoy</option>
                                                    <option value="Toinou18">Toinou18</option>
                                                    <option value="TrafDF">TrafDF</option>
                                                    <option value="Tragastriel">Tragastriel</option>
                                                    <option value="uByz">uByz</option>
                                                    <option value="Vejakx">Vejakx</option>
                                                    <option value="Vertigoh">Vertigoh</option>
                                                    <option value="Vlad">Vlad</option>
                                                    <option value="Wadosh">Wadosh</option>
                                                    <option value="weshpearlish">weshpearlish</option>
                                                    <option value="YouFM !">YouFM !</option>
                                                    <option value="yudovic">yudovic</option>
                                                    <option value="Yuki">Yuki</option>
                                                    <option value="Zen">Zen</option>
                                                    <option value="Zircky">Zircky</option>
                                            </select>
                    <br>
                    <br>
                    <p><center><input class="submit" type="submit" value="Valider" /></center></p>
                </form>
                <!--<div id="dialogInfo_joueur"></div>
                <div id="dialogInfo_equipe"></div>-->
            </div>
                <div class="col-lg-10" style="position: relative;
                    float:right; 
                    height: 110%;
                    width: 80%;
                    font-size:10px;
                    border-width: 1px;
                    border-style: solid;">
                    <img class="photo" src="/Intranet/src/img/plan.jpg" width="100%" height="100%" >
                                            <div class="place" id="131"
                               style="
                                  position:absolute;
                                  top:55.5%;
                                  left:17%;
                                  width:8.5%;
                                  height:12.25%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          <b>Kompu</b>                          
                        </div>
                                            <div class="place" id="130"
                               style="
                                  position:absolute;
                                  top:56%;
                                  left:26.5%;
                                  width:9%;
                                  height:6%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          <b>Reload</b>                          
                        </div>
                                            <div class="place" id="129"
                               style="
                                  position:absolute;
                                  top:5%;
                                  left:77.5%;
                                  width:9%;
                                  height:6%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          <b>YouFM</b>                          
                        </div>
                                            <div class="place" id="8"
                               style="
                                  position:absolute;
                                  top:23%;
                                  left:15%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A1                          
                        </div>
                                            <div class="place" id="7"
                               style="
                                  position:absolute;
                                  top:15.5%;
                                  left:15%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A2                          
                        </div>
                                            <div class="place" id="6"
                               style="
                                  position:absolute;
                                  top:8%;
                                  left:15%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A3                          
                        </div>
                                            <div class="place" id="1"
                               style="
                                  position:absolute;
                                  top:8%;
                                  left:17.25%;
                                  width:4.5%;
                                  height:3.2%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A4                          
                        </div>
                                            <div class="place" id="2"
                               style="
                                  position:absolute;
                                  top:8%;
                                  left:21.75%;
                                  width:4.5%;
                                  height:3.2%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A5                          
                        </div>
                                            <div class="place" id="3"
                               style="
                                  position:absolute;
                                  top:8%;
                                  left:26.25%;
                                  width:4.5%;
                                  height:3.2%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A6                          
                        </div>
                                            <div class="place" id="9"
                               style="
                                  position:absolute;
                                  top:8%;
                                  left:30.75%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A7                          
                        </div>
                                            <div class="place" id="10"
                               style="
                                  position:absolute;
                                  top:15.5%;
                                  left:30.75%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A8                          
                        </div>
                                            <div class="place" id="11"
                               style="
                                  position:absolute;
                                  top:23%;
                                  left:30.75%;
                                  width:2.25%;
                                  height:7.5%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          A9                          
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
                          C4                          
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
                          C5                          
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
                          C6                          
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
                                            <div class="place" id="65"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:52.75%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          F10                          
                        </div>
                                            <div class="place" id="66"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:58%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          F11                          
                        </div>
                                            <div class="place" id="72"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:62.5%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          F12                          
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
                                            <div class="place" id="69"
                               style="
                                  position:absolute;
                                  top:32%;
                                  left:59.5%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          F6                          
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
                          F7                          
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
                          F8                          
                        </div>
                                            <div class="place" id="64"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:48.25%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          F9                          
                        </div>
                                            <div class="place" id="75"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:75.25%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          G1                          
                        </div>
                                            <div class="place" id="76"
                               style="
                                  position:absolute;
                                  top:35%;
                                  left:79.75%;
                                  width:4.5%;
                                  height:3%;
                                  border:0.1em solid #000;
                                  text-align: center;
                                  color: #000000;">
                          G2                          
                        </div>
                                            <div class="place" id="68"
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
                          I1                          
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
                          I10                          
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
                          I11                          
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
                          I12                          
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
                          I13                          
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
                          I14                          
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
                          I15                          
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
                          I16                          
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
                          I2                          
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
                          I3                          
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
                          I4                          
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
                          I5                          
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
                          I6                          
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
                          I7                          
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
                          I8                          
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
                          I9                          
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
                          J1                          
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
                          J10                          
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
                          J11                          
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
                          J12                          
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
                          J13                          
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
                          J14                          
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
                          J15                          
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
                          J16                          
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
                          J2                          
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
                          J3                          
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
                          J4                          
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
                          J5                          
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
                          J6                          
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
                          J7                          
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
                          J8                          
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
                          J9                          
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

                            <span>
                                Pseudo : <strong> Echuiine</strong>
                                <br>
                                Prénom : <strong> Pestiaux</strong>
                                <br>
                                Nom : <strong> Edwin</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Atlas</strong>
                                <br>
                                Prénom : <strong> Antoine</strong>
                                <br>
                                Nom : <strong> Vastesaeger</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:88%;
                             left:46%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Davros</strong>
                                <br>
                                Prénom : <strong> Alexandre</strong>
                                <br>
                                Nom : <strong> Decrème</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:88%;
                             left:50.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Edge</strong>
                                <br>
                                Prénom : <strong> Simon</strong>
                                <br>
                                Nom : <strong> Francois</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:88%;
                             left:55%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> rainbown</strong>
                                <br>
                                Prénom : <strong> Sébastien</strong>
                                <br>
                                Nom : <strong> Leclercq</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Emer</strong>
                                <br>
                                Prénom : <strong> Gilmont</strong>
                                <br>
                                Nom : <strong> Emeric</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : TMNF</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:88%;
                             left:59.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Zircky</strong>
                                <br>
                                Prénom : <strong> Franc</strong>
                                <br>
                                Nom : <strong> Maxime</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:75.25%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> LouvardGame</strong>
                                <br>
                                Prénom : <strong> Philippe</strong>
                                <br>
                                Nom : <strong> Bouillon</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Souloxx</strong>
                                <br>
                                Prénom : <strong> François</strong>
                                <br>
                                Nom : <strong> Cerca Mota</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Avahi</strong>
                                <br>
                                Prénom : <strong> Thomas</strong>
                                <br>
                                Nom : <strong> Giacometti</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4, TMNF, HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:32%;
                             left:50.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Kleotisa</strong>
                                <br>
                                Prénom : <strong> Samyn</strong>
                                <br>
                                Nom : <strong> Pierre-Simon</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:32%;
                             left:55%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Hellblazer</strong>
                                <br>
                                Prénom : <strong> Gursoy</strong>
                                <br>
                                Nom : <strong> Mehmet</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HOTS, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> lamboX</strong>
                                <br>
                                Prénom : <strong> Quentin</strong>
                                <br>
                                Nom : <strong> Valet</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, COD4, TMNF, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> gunjack</strong>
                                <br>
                                Prénom : <strong> Gianni</strong>
                                <br>
                                Nom : <strong> Mancuso</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Fuzz</strong>
                                <br>
                                Prénom : <strong> vincent</strong>
                                <br>
                                Nom : <strong> algrain</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:52.75%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Diablok20</strong>
                                <br>
                                Prénom : <strong> Kevin</strong>
                                <br>
                                Nom : <strong> Chelmi</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> gally</strong>
                                <br>
                                Prénom : <strong> gaëtan</strong>
                                <br>
                                Nom : <strong> desmet</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:85%;
                             left:50.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Runnard</strong>
                                <br>
                                Prénom : <strong> Tondreau</strong>
                                <br>
                                Nom : <strong> Antoine</strong>
                                <br>
                                Equipe : BaraWeTrust
                                <br>
                                <u>Tournois : TMNF</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:88%;
                             left:64%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Kaizu</strong>
                                <br>
                                Prénom : <strong> Bruhn</strong>
                                <br>
                                Nom : <strong> Kevin</strong>
                                <br>
                                Equipe : FricadellesDuPurgatoire
                                <br>
                                <u>Tournois : HOTS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Vlad</strong>
                                <br>
                                Prénom : <strong> Quentin</strong>
                                <br>
                                Nom : <strong> Serneels</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Loken</strong>
                                <br>
                                Prénom : <strong> Boris</strong>
                                <br>
                                Nom : <strong> Gosselin</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Sephire</strong>
                                <br>
                                Prénom : <strong> Günther</strong>
                                <br>
                                Nom : <strong> Debay</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, COD4, HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:85%;
                             left:55%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Silv3r75</strong>
                                <br>
                                Prénom : <strong> Dubois</strong>
                                <br>
                                Nom : <strong> Steven</strong>
                                <br>
                                Equipe : BaraWeTrust
                                <br>
                                <u>Tournois : </u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Hextia</strong>
                                <br>
                                Prénom : <strong> de Munck</strong>
                                <br>
                                Nom : <strong> Damien</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : HOTS, HS</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Anus42</strong>
                                <br>
                                Prénom : <strong> Dauwe</strong>
                                <br>
                                Nom : <strong> Antoine</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> chauveman</strong>
                                <br>
                                Prénom : <strong> Loris</strong>
                                <br>
                                Nom : <strong> Zuccato</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : COD4, TMNF</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Vejakx</strong>
                                <br>
                                Prénom : <strong> Lecomte</strong>
                                <br>
                                Nom : <strong> Sacha</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : HOTS, COD4</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Fhorcas</strong>
                                <br>
                                Prénom : <strong> thomas</strong>
                                <br>
                                Nom : <strong> peteau</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : HOTS, COD4, TMNF</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:79.75%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> LouvardGame2</strong>
                                <br>
                                Prénom : <strong> Benjamin</strong>
                                <br>
                                Nom : <strong> Heuchon</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:58%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> StrawHat</strong>
                                <br>
                                Prénom : <strong> Anton</strong>
                                <br>
                                Nom : <strong> Fauveau</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS, TMNF</u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Casimir</strong>
                                <br>
                                Prénom : <strong> Biro</strong>
                                <br>
                                Nom : <strong> Alexandre</strong>
                                <br>
                                Equipe : 50ShadesOfMurky
                                <br>
                                <u>Tournois : </u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Atanor</strong>
                                <br>
                                Prénom : <strong> Thomas</strong>
                                <br>
                                Nom : <strong> Antoine</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Thibu</strong>
                                <br>
                                Prénom : <strong> Thibaut</strong>
                                <br>
                                Nom : <strong> Ramiro-Gonzalez</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                                <br>
                            </span>
                        
                       
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

                            <span>
                                Pseudo : <strong> Sam</strong>
                                <br>
                                Prénom : <strong> Samuel</strong>
                                <br>
                                Nom : <strong> Antoine</strong>
                                <br>
                                Equipe : Belgian Rape Squad
                                <br>
                                <u>Tournois : </u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:32%;
                             left:59.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Ploper</strong>
                                <br>
                                Prénom : <strong> Mathieu</strong>
                                <br>
                                Nom : <strong> Durand</strong>
                                <br>
                                Equipe : Faglords Of Draenor.
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:62.5%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> Janken</strong>
                                <br>
                                Prénom : <strong> Lebrun</strong>
                                <br>
                                Nom : <strong> Anthony</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HOTS, TMNF, HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            <div class="place" id="info"
                             style="
                             position:absolute;
                             top:35%;
                             left:48.25%;
                             width:4.5%;
                             height:3%;
                             border:0.1em solid red;
                             background:rgba(100,100,100,0.3);
                             text-align:center;"
                             >

                            <span>
                                Pseudo : <strong> weshpearlish</strong>
                                <br>
                                Prénom : <strong> jen-by</strong>
                                <br>
                                Nom : <strong> beghin</strong>
                                <br>
                                Equipe : 
                                <br>
                                <u>Tournois : HS</u>
                                <br>
                            </span>
                        
                       
                        </div>
                                            
                    <div id="cadre"></div>
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
        
        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/emplacements.js"></script>
        
    </body>
</html>
<?php }
}
