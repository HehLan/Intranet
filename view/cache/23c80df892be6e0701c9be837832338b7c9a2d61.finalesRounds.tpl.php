<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:18:22
  from "E:\wamp\www\Intranet\view\templates\admin\finalesRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52c8eb02e61_94255113',
  'file_dependency' => 
  array (
    '23c80df892be6e0701c9be837832338b7c9a2d61' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\finalesRounds.tpl',
      1 => 1458908107,
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
function content_56f52c8eb02e61_94255113 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/finalesRounds.css" >
        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/finales.js"></script>
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
	
        
        <div id="container" class="container">
            <div id="contenu" class="row">
		<h1>Finales de TMNF GOLD</h1>
                <form>
                                            <table>
                            <tr>
                                                                        <th> Round 1 </th>
                                                                        <th> Round 2 </th>
                                                                        <th> Round 3 </th>
                                
                            </tr>
                            <tr>
                                                                    <td>
                                        <table>
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1030)">samedi 23h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1030" id="cb_1030"
                                                                    onclick="active_groupe(1030,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1030</td>
                                                                                                                                                                            <td class="td_arbre_joueur">cloud1213</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_1"
                                                                    id="s_1030_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">30</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_2"
                                                                    id="s_1030_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_3"
                                                                    id="s_1030_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_4"
                                                                    id="s_1030_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_5"
                                                                    id="s_1030_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_6"
                                                                    id="s_1030_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_1_7"
                                                                    id="s_1030_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1030_1_id" 
                                                                id="s_1030_1_id" value="0">
                                                            30
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">30</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1034
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">NamaTroX</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">10</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_1"
                                                                    id="s_1030_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_2"
                                                                    id="s_1030_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_3"
                                                                    id="s_1030_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_4"
                                                                    id="s_1030_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_5"
                                                                    id="s_1030_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_6"
                                                                    id="s_1030_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_2_7"
                                                                    id="s_1030_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1030_2_id" 
                                                                id="s_1030_2_id" value="0">
                                                            10
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">10</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">Boulvay</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_1"
                                                                    id="s_1030_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_2"
                                                                    id="s_1030_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_3"
                                                                    id="s_1030_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_4"
                                                                    id="s_1030_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_5"
                                                                    id="s_1030_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_6"
                                                                    id="s_1030_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_3_7"
                                                                    id="s_1030_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1030_3_id" 
                                                                id="s_1030_3_id" value="0">
                                                            0
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">Happy Nems</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_1"
                                                                    id="s_1030_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_2"
                                                                    id="s_1030_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_3"
                                                                    id="s_1030_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_4"
                                                                    id="s_1030_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_5"
                                                                    id="s_1030_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_6"
                                                                    id="s_1030_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1030_4_7"
                                                                    id="s_1030_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1030_4_id" 
                                                                id="s_1030_4_id" value="0">
                                                            0
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1031)">samedi 23h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1031" id="cb_1031"
                                                                    onclick="active_groupe(1031,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1031</td>
                                                                                                                                                                            <td class="td_arbre_joueur">LamboX</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">10</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_1"
                                                                    id="s_1031_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_2"
                                                                    id="s_1031_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_3"
                                                                    id="s_1031_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_4"
                                                                    id="s_1031_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_5"
                                                                    id="s_1031_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_6"
                                                                    id="s_1031_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_1_7"
                                                                    id="s_1031_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1031_1_id" 
                                                                id="s_1031_1_id" value="0">
                                                            10
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">10</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1034
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">iGlooW</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">4</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_1"
                                                                    id="s_1031_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_2"
                                                                    id="s_1031_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_3"
                                                                    id="s_1031_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_4"
                                                                    id="s_1031_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_5"
                                                                    id="s_1031_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_6"
                                                                    id="s_1031_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_2_7"
                                                                    id="s_1031_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1031_2_id" 
                                                                id="s_1031_2_id" value="0">
                                                            4
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">4</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">Sponos</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">1</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_1"
                                                                    id="s_1031_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_2"
                                                                    id="s_1031_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_3"
                                                                    id="s_1031_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_4"
                                                                    id="s_1031_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_5"
                                                                    id="s_1031_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_6"
                                                                    id="s_1031_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_3_7"
                                                                    id="s_1031_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1031_3_id" 
                                                                id="s_1031_3_id" value="0">
                                                            1
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">1</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">skuyz</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">0</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_1"
                                                                    id="s_1031_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_2"
                                                                    id="s_1031_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_3"
                                                                    id="s_1031_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_4"
                                                                    id="s_1031_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_5"
                                                                    id="s_1031_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_6"
                                                                    id="s_1031_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1031_4_7"
                                                                    id="s_1031_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1031_4_id" 
                                                                id="s_1031_4_id" value="0">
                                                            0
                                                        </td>
                                                        
                                                        	
                                                            <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1032)">samedi 23h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1032" id="cb_1032"
                                                                    onclick="active_groupe(1032,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1032</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_1"
                                                                    id="s_1032_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_2"
                                                                    id="s_1032_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_3"
                                                                    id="s_1032_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_4"
                                                                    id="s_1032_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_5"
                                                                    id="s_1032_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_6"
                                                                    id="s_1032_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_1_7"
                                                                    id="s_1032_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1032_1_id" 
                                                                id="s_1032_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1035
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_1"
                                                                    id="s_1032_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_2"
                                                                    id="s_1032_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_3"
                                                                    id="s_1032_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_4"
                                                                    id="s_1032_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_5"
                                                                    id="s_1032_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_6"
                                                                    id="s_1032_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_2_7"
                                                                    id="s_1032_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1032_2_id" 
                                                                id="s_1032_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_1"
                                                                    id="s_1032_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_2"
                                                                    id="s_1032_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_3"
                                                                    id="s_1032_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_4"
                                                                    id="s_1032_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_5"
                                                                    id="s_1032_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_6"
                                                                    id="s_1032_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_3_7"
                                                                    id="s_1032_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1032_3_id" 
                                                                id="s_1032_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_1"
                                                                    id="s_1032_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_2"
                                                                    id="s_1032_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_3"
                                                                    id="s_1032_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_4"
                                                                    id="s_1032_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_5"
                                                                    id="s_1032_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_6"
                                                                    id="s_1032_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1032_4_7"
                                                                    id="s_1032_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1032_4_id" 
                                                                id="s_1032_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1033)">samedi 23h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1033" id="cb_1033"
                                                                    onclick="active_groupe(1033,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1033</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_1"
                                                                    id="s_1033_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_2"
                                                                    id="s_1033_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_3"
                                                                    id="s_1033_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_4"
                                                                    id="s_1033_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_5"
                                                                    id="s_1033_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_6"
                                                                    id="s_1033_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_1_7"
                                                                    id="s_1033_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1033_1_id" 
                                                                id="s_1033_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1035
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_1"
                                                                    id="s_1033_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_2"
                                                                    id="s_1033_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_3"
                                                                    id="s_1033_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_4"
                                                                    id="s_1033_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_5"
                                                                    id="s_1033_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_6"
                                                                    id="s_1033_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_2_7"
                                                                    id="s_1033_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1033_2_id" 
                                                                id="s_1033_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_1"
                                                                    id="s_1033_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_2"
                                                                    id="s_1033_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_3"
                                                                    id="s_1033_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_4"
                                                                    id="s_1033_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_5"
                                                                    id="s_1033_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_6"
                                                                    id="s_1033_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_3_7"
                                                                    id="s_1033_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1033_3_id" 
                                                                id="s_1033_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_1"
                                                                    id="s_1033_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_2"
                                                                    id="s_1033_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_3"
                                                                    id="s_1033_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_4"
                                                                    id="s_1033_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_5"
                                                                    id="s_1033_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_6"
                                                                    id="s_1033_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1033_4_7"
                                                                    id="s_1033_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1033_4_id" 
                                                                id="s_1033_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                            
                                        </table>
                                    </td>
                                                                    <td>
                                        <table>
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1034)">dimanche 01h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1034" id="cb_1034"
                                                                    onclick="active_groupe(1034,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1034</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_1"
                                                                    id="s_1034_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_2"
                                                                    id="s_1034_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_3"
                                                                    id="s_1034_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_4"
                                                                    id="s_1034_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_5"
                                                                    id="s_1034_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_6"
                                                                    id="s_1034_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_1_7"
                                                                    id="s_1034_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1034_1_id" 
                                                                id="s_1034_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1036
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_1"
                                                                    id="s_1034_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_2"
                                                                    id="s_1034_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_3"
                                                                    id="s_1034_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_4"
                                                                    id="s_1034_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_5"
                                                                    id="s_1034_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_6"
                                                                    id="s_1034_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_2_7"
                                                                    id="s_1034_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1034_2_id" 
                                                                id="s_1034_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_1"
                                                                    id="s_1034_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_2"
                                                                    id="s_1034_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_3"
                                                                    id="s_1034_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_4"
                                                                    id="s_1034_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_5"
                                                                    id="s_1034_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_6"
                                                                    id="s_1034_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_3_7"
                                                                    id="s_1034_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1034_3_id" 
                                                                id="s_1034_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_1"
                                                                    id="s_1034_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_2"
                                                                    id="s_1034_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_3"
                                                                    id="s_1034_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_4"
                                                                    id="s_1034_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_5"
                                                                    id="s_1034_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_6"
                                                                    id="s_1034_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1034_4_7"
                                                                    id="s_1034_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1034_4_id" 
                                                                id="s_1034_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    <a href="#" onclick="popup_heure(1035)">dimanche 01h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1035" id="cb_1035"
                                                                    onclick="active_groupe(1035,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1035</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_1"
                                                                    id="s_1035_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_2"
                                                                    id="s_1035_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_3"
                                                                    id="s_1035_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_4"
                                                                    id="s_1035_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_5"
                                                                    id="s_1035_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_6"
                                                                    id="s_1035_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_1_7"
                                                                    id="s_1035_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1035_1_id" 
                                                                id="s_1035_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 1036
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_1"
                                                                    id="s_1035_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_2"
                                                                    id="s_1035_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_3"
                                                                    id="s_1035_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_4"
                                                                    id="s_1035_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_5"
                                                                    id="s_1035_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_6"
                                                                    id="s_1035_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_2_7"
                                                                    id="s_1035_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1035_2_id" 
                                                                id="s_1035_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_1"
                                                                    id="s_1035_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_2"
                                                                    id="s_1035_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_3"
                                                                    id="s_1035_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_4"
                                                                    id="s_1035_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_5"
                                                                    id="s_1035_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_6"
                                                                    id="s_1035_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_3_7"
                                                                    id="s_1035_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1035_3_id" 
                                                                id="s_1035_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_1"
                                                                    id="s_1035_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_2"
                                                                    id="s_1035_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_3"
                                                                    id="s_1035_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_4"
                                                                    id="s_1035_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_5"
                                                                    id="s_1035_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_6"
                                                                    id="s_1035_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1035_4_7"
                                                                    id="s_1035_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1035_4_id" 
                                                                id="s_1035_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                            
                                        </table>
                                    </td>
                                                                    <td>
                                        <table>
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    FINALE<br>
                                                                    <a href="#" onclick="popup_heure(1036)">dimanche 03h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1036" id="cb_1036"
                                                                    onclick="active_groupe(1036,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1036</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_1"
                                                                    id="s_1036_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_2"
                                                                    id="s_1036_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_3"
                                                                    id="s_1036_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_4"
                                                                    id="s_1036_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_5"
                                                                    id="s_1036_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_6"
                                                                    id="s_1036_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_1_7"
                                                                    id="s_1036_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1036_1_id" 
                                                                id="s_1036_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_1"
                                                                    id="s_1036_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_2"
                                                                    id="s_1036_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_3"
                                                                    id="s_1036_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_4"
                                                                    id="s_1036_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_5"
                                                                    id="s_1036_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_6"
                                                                    id="s_1036_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_2_7"
                                                                    id="s_1036_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1036_2_id" 
                                                                id="s_1036_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_1"
                                                                    id="s_1036_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_2"
                                                                    id="s_1036_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_3"
                                                                    id="s_1036_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_4"
                                                                    id="s_1036_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_5"
                                                                    id="s_1036_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_6"
                                                                    id="s_1036_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_3_7"
                                                                    id="s_1036_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1036_3_id" 
                                                                id="s_1036_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_1"
                                                                    id="s_1036_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_2"
                                                                    id="s_1036_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_3"
                                                                    id="s_1036_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_4"
                                                                    id="s_1036_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_5"
                                                                    id="s_1036_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_6"
                                                                    id="s_1036_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1036_4_7"
                                                                    id="s_1036_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1036_4_id" 
                                                                id="s_1036_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                                                                                                                                                                                                                                                    <tr class="tr_arbre_vide">
                                                                <td class="td_finale_vide" colspan="11">
                                                                    Petite Finale<br>
                                                                    <a href="#" onclick="popup_heure(1037)">dimanche 03h59</a>
                                                                </td>
                                                            </tr>
                                                                                                                <tr class="tr_arbre_vide">
                                                            <td class="td_arbre_gauche"></td>
                                                            <th class="th_arbre_joueur">Joueur
                                                                <input type="checkbox"
                                                                    name="cb_1037" id="cb_1037"
                                                                    onclick="active_groupe(1037,7,4)">
                                                            </th>
                                                                                                                            <th class="th_arbre_joueur">M1</th>
                                                                                                                            <th class="th_arbre_joueur">M2</th>
                                                                                                                            <th class="th_arbre_joueur">M3</th>
                                                                                                                            <th class="th_arbre_joueur">M4</th>
                                                                                                                            <th class="th_arbre_joueur">M5</th>
                                                                                                                            <th class="th_arbre_joueur">M6</th>
                                                                                                                            <th class="th_arbre_joueur">M7</th>
                                                            
                                                            <th class="th_arbre_joueur">Total</th>
                                                            <td class="td_arbre_droite"></td>
                                                        </tr>
                                                                                                        <tr>
                                                        	
                                                            <td class="td_arbre_gauche" rowspan="4">#1037</td>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_1"
                    id="m_1037_1" 
                    onchange="select_change(1037,1)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_1"
                                                                    id="s_1037_1_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_2"
                                                                    id="s_1037_1_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_3"
                                                                    id="s_1037_1_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_4"
                                                                    id="s_1037_1_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_5"
                                                                    id="s_1037_1_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_6"
                                                                    id="s_1037_1_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_1_7"
                                                                    id="s_1037_1_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1037_1_id" 
                                                                id="s_1037_1_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 1 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                	
                                                            <td class="td_arbre_droite" rowspan="4">
                                                                -> 
                                                            </td>                                                            
                                                                                                            </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_2"
                    id="m_1037_2" 
                    onchange="select_change(1037,2)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_1"
                                                                    id="s_1037_2_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_2"
                                                                    id="s_1037_2_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_3"
                                                                    id="s_1037_2_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_4"
                                                                    id="s_1037_2_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_5"
                                                                    id="s_1037_2_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_6"
                                                                    id="s_1037_2_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_2_7"
                                                                    id="s_1037_2_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1037_2_id" 
                                                                id="s_1037_2_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 2 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_3"
                    id="m_1037_3" 
                    onchange="select_change(1037,3)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_1"
                                                                    id="s_1037_3_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_2"
                                                                    id="s_1037_3_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_3"
                                                                    id="s_1037_3_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_4"
                                                                    id="s_1037_3_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_5"
                                                                    id="s_1037_3_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_6"
                                                                    id="s_1037_3_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_3_7"
                                                                    id="s_1037_3_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1037_3_id" 
                                                                id="s_1037_3_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 3 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                                                                                                                        <tr>
                                                                                                                                                                            <td class="td_arbre_joueur">TBA</td>
                                                                                                                <td class="td_arbre_joueur"><select name="m_1037_4"
                    id="m_1037_4" 
                    onchange="select_change(1037,4)" disabled="disabled"><option value="0"></option><option value="138" >1ST_Tr45HxC</option><option value="96" >Abysses</option><option value="106" >Ash</option><option value="29" >Boulvay</option><option value="199" >Broflovsky</option><option value="6" >Canon6etoiles</option><option value="171" >cloud1213</option><option value="111" >Danilus</option><option value="51" >gosh101</option><option value="97" >gwennytoux</option><option value="49" >Happy Nems</option><option value="53" >iGlooW</option><option value="62" >JankulaseK</option><option value="47" >LamboX</option><option value="91" >landre164</option><option value="163" >Loraline</option><option value="148" >Mikeman</option><option value="50" >NamaTroX</option><option value="195" >Navarro</option><option value="166" >PuLse Olen</option><option value="170" >RaKyora</option><option value="25" >RectoO</option><option value="90" >roden164</option><option value="127" >rougetta</option><option value="56" >Salcatin</option><option value="82" >satanasth250</option><option value="126" >Shyrøw</option><option value="129" >skuyz</option><option value="46" >Skynyx</option><option value="196" >sleve</option><option value="30" >Sponos</option><option value="198" >supertinez</option><option value="23" >Thaerith</option><option value="128" >thotwith</option><option value="83" >Wadosh</option><option value="44" >ximunou</option><option value="55" >Zarak</option></td>
                                                        
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_1"
                                                                    id="s_1037_4_1"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_2"
                                                                    id="s_1037_4_2"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_3"
                                                                    id="s_1037_4_3"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_4"
                                                                    id="s_1037_4_4"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_5"
                                                                    id="s_1037_4_5"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_6"
                                                                    id="s_1037_4_6"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                                                                                                                                                    <td class="td_arbre_joueur_score">-</td>
                                                                                                                        <td class="td_arbre_joueur_score">
                                                                <input type="text" name="s_1037_4_7"
                                                                    id="s_1037_4_7"
                                                                    value="beuh" size="4" disabled="disabled">

                                                            </td>
                                                        
                                                        
                                                        <td class="td_arbre_joueur_total">
                                                            <input type="hidden" name="s_1037_4_id" 
                                                                id="s_1037_4_id" value="0">
                                                            <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined offset: 4 in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>205</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>

                                                        </td>
                                                        
                                                                                                                    <td class="td_arbre_joueur_total">0</td>
                                                                                                                                                                    </tr>
                                                
                                                <tr class="tr_arbre_vide">
                                                    <td class="td_arbre_vide" colspan="11"></td>
                                                </tr>  
                                            
                                        </table>
                                    </td>
                                
                            </tr>
                        </table>
                                    </form>
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
        
        <div id="shadowing"></div>

	<div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="/Intranet/admin/modules/modifier_heure.php">
            <input type="hidden" name="id_match" id="input_id_match" value="0" />
            <input type="hidden" name="id_tournoi" value="<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: id_tournoi in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>262</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in E:\wamp\www\Intranet\view\templates_c\23c80df892be6e0701c9be837832338b7c9a2d61_0.file.finalesRounds.tpl.cache.php on line <i>262</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>356416</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0310</td><td bgcolor='#eeeeec' align='right'>1685000</td><td bgcolor='#eeeeec'>include_once( <font color='#00bb00'>'E:\wamp\www\Intranet\admin\modules\finalesRounds.php'</font> )</td><td title='E:\wamp\www\Intranet\admin\finales.php' bgcolor='#eeeeec'>..\finales.php<b>:</b>479</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849072</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='E:\wamp\www\Intranet\admin\modules\finalesRounds.php' bgcolor='#eeeeec'>..\finalesRounds.php<b>:</b>312</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0400</td><td bgcolor='#eeeeec' align='right'>1849800</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>109</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0410</td><td bgcolor='#eeeeec' align='right'>1977088</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>191</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0430</td><td bgcolor='#eeeeec' align='right'>2116640</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>..\smarty_internal_template.php<b>:</b>152</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2157744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>..\smarty_template_cached.php<b>:</b>132</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0440</td><td bgcolor='#eeeeec' align='right'>2175840</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>..\smarty_internal_runtime_updatecache.php<b>:</b>93</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5265568</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>..\smarty_template_compiled.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.4310</td><td bgcolor='#eeeeec' align='right'>5277560</td><td bgcolor='#eeeeec'>content_56f52c8e74da05_43518964(  )</td><td title='E:\wamp\www\Intranet\lib\Smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>..\smarty_template_resource_base.php<b>:</b>122</td></tr>
</table></font>
" />
            <input type="hidden" name="looser" value="0" />
            <input type="hidden" name="page" value="finales" />
            vendredi <input type="radio" name="jour" value="vendredi">
            / samedi <input type="radio" name="jour" value="samedi">
            / dimanche <input type="radio" name="jour" value="dimanche">
            <br>
            Heure :
            <select name="heure">
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    10
                                            </option>
                                    <option>
                                                    11
                                            </option>
                                    <option>
                                                    12
                                            </option>
                                    <option>
                                                    13
                                            </option>
                                    <option>
                                                    14
                                            </option>
                                    <option>
                                                    15
                                            </option>
                                    <option>
                                                    16
                                            </option>
                                    <option>
                                                    17
                                            </option>
                                    <option>
                                                    18
                                            </option>
                                    <option>
                                                    19
                                            </option>
                                    <option>
                                                    20
                                            </option>
                                    <option>
                                                    21
                                            </option>
                                    <option>
                                                    22
                                            </option>
                                    <option>
                                                    23
                                            </option>
                
            </select>
            h
            <select name="minute">
                                     <option>
                                                    0
                                            </option>
                                    <option>
                                                    0
                                            </option>
                                    <option>
                                                    10
                                            </option>
                                    <option>
                                                    15
                                            </option>
                                    <option>
                                                    20
                                            </option>
                                    <option>
                                                    25
                                            </option>
                                    <option>
                                                    30
                                            </option>
                                    <option>
                                                    35
                                            </option>
                                    <option>
                                                    40
                                            </option>
                                    <option>
                                                    45
                                            </option>
                                    <option>
                                                    50
                                            </option>
                                    <option>
                                                    55
                                            </option>
                
            </select>
            <br>
            <input type="submit" value="Modifier" /><br>
	</div>
    </body>
</html><?php }
}
