<?php
/* Smarty version 3.1.29, created on 2016-03-04 13:53:24
  from "C:\xampp\htdocs\Intranet\templates\default\admin\inscriptions.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d98544819d08_19620259',
  'file_dependency' => 
  array (
    '94f13fa4efc15969672cba9b1684de9b92273f18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\admin\\inscriptions.tpl',
      1 => 1456831072,
      2 => 'file',
    ),
    'b493b6f098e88c214bf9835ab1973fc7531ed465' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\admin\\meta.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
    '456ca66fd08e9eeeb31328c288dceedefd5a25ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\admin\\header.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
    '05702a0f84d589a36376d69e0d1e5fd0696bc06f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\admin\\nav.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
    '722c7e0f2d8a2a9da9241268c6114f7062bec7a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\admin\\footer.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56d98544819d08_19620259 ($_smarty_tpl) {
?>

<!DOCTYPE HTML>
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

<link rel="shortcut icon" href="/Intranet/templates/default/assets/img/logoheh.ico" />
<link rel="icon" href="/Intranet/templates/default/assets/img/logoheh.ico" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/profil.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/jquery-ui2.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/joueurs.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/tournois.css" >
<link rel="stylesheet" type="text/css" href="/Intranet/templates/default/assets/css/equipes.css" >

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
        <script>
            $(document).ready(function() {

                $( ".submitInscriptionEquipesTournoiAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var i=0;
                    $( "#ListeInscrit"+id+" input[type=checkbox]:checked").each(function(){

                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritEquipe.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

                        }
                    });
                });

                $( ".submitInscriptionJTAdmin" ).click(function() {
                    var id=$( this ).attr('id');
                    var donnee='id_tournoi='+id;
                    var pseudoJeux='';
                    var i=0;
                    $( "#ListeInscritJT"+id+" input[type=checkbox]:checked").each(function(){
                        //pseudoJeux+="&pseudoJeux["+i+"]="+$( "#Joueur"+id+$(this).val() ).val();
                        donnee+="&inscrit["+i+"]="+$(this).val();
                        i++;
                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertInscritJoueur.php",
                        data: donnee,
                        success : function(contenu,etat){ 
                            alert(contenu);

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
            <img src="/Intranet/templates/default/assets/img/logoheh.png" alt="HEHLan" width="250px">
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
	
	<div id="container">
            <div id="contenu">
                <div id="InscriptionDesJoueursEquipesAuxTournois" >
                    <!-- tournois avec equipes -->
                                            <div class='ListePourInscrireTournoi'>
                            <h6>League of Legends</h6>
                            <div id="ListeInscrit1">
                                                                                                            <label><input type='checkbox' value="71">Alcyol #2207</label><br>
                                                                                                                                                <label><input type='checkbox' value="67">Alfatta #2772</label><br>
                                                                                                                                                <label><input type='checkbox' value="40">Annie's Firstblood</label><br>
                                                                                                                                                <label><input type='checkbox' value="3">Belgian Inoffensive Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="23">Belgian Rape Squad</label><br>
                                                                                                                                                <label><input type='checkbox' value="56">BIT1</label><br>
                                                                                                                                                <label><input type='checkbox' value="57">BIT2</label><br>
                                                                                                                                                <label><input type='checkbox' value="38">Bloodytearz</label><br>
                                                                                                                                                <label><input type='checkbox' value="51">C'était une mauvaise idée</label><br>
                                                                                                                                                <label><input type='checkbox' value="22">Caedem Dominatur</label><br>
                                                                                                                                                <label><input type='checkbox' value="48">Crêpière Tefal</label><br>
                                                                                                                                                <label><input type='checkbox' value="65">Delikan57 #2256</label><br>
                                                                                                                                                <label><input type='checkbox' value="20">Doctors X</label><br>
                                                                                                                                                <label><input type='checkbox' value="26">Dofusian GAMING</label><br>
                                                                                                                                                <label><input type='checkbox' value="24">Don't feed the ginger</label><br>
                                                                                                                                                <label><input type='checkbox' value="63">Droledami #2473</label><br>
                                                                                                                                                <label><input type='checkbox' value="66">Ebaral #2123</label><br>
                                                                                                                                                <label><input type='checkbox' value="61">Echofox #2924</label><br>
                                                                                                                                                <label><input type='checkbox' value="33">First</label><br>
                                                                                                                                                <label><input type='checkbox' value="25">FPMs</label><br>
                                                                                                                                                <label><input type='checkbox' value="8">Gitan</label><br>
                                                                                                                                                <label><input type='checkbox' value="50">Go Nerf Karma</label><br>
                                                                                                                                                <label><input type='checkbox' value="13">God Sake</label><br>
                                                                                                                                                <label><input type='checkbox' value="29">Gods of Chocolate</label><br>
                                                                                                                                                <label><input type='checkbox' value="53">GoldTeam</label><br>
                                                                                                                                                <label><input type='checkbox' value="68">Guerrier666 #2345</label><br>
                                                                                                                                                <label><input type='checkbox' value="1">HeHLan</label><br>
                                                                                                                                                <label><input type='checkbox' value="6">Inception eSport</label><br>
                                                                                                                                                <label><input type='checkbox' value="32">iNPhase</label><br>
                                                                                                                                                <label><input type='checkbox' value="43">ISWEARSHEWAS18</label><br>
                                                                                                                                                <label><input type='checkbox' value="45">Je mange des shtroumpfs</label><br>
                                                                                                                                                <label><input type='checkbox' value="21">JokS</label><br>
                                                                                                                                                <label><input type='checkbox' value="36">La Dream Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="37">La Nouvelle Génération</label><br>
                                                                                                                                                <label><input type='checkbox' value="35">Lamastruche Gaming</label><br>
                                                                                                                                                <label><input type='checkbox' value="58">Lambox #2917</label><br>
                                                                                                                                                <label><input type='checkbox' value="14">Les Bifflettes Maison</label><br>
                                                                                                                                                <label><input type='checkbox' value="18">Les Michel Forever</label><br>
                                                                                                                                                <label><input type='checkbox' value="7">Les Tites Fioles</label><br>
                                                                                                                                                <label><input type='checkbox' value="52">Ma grosse bite en plâtre</label><br>
                                                                                                                                                <label><input type='checkbox' value="2">MABITE</label><br>
                                                                                                                                                <label><input type='checkbox' value="19">Mid Or Feed</label><br>
                                                                                                                                                <label><input type='checkbox' value="17">Midget Pineapple Wolverine</label><br>
                                                                                                                                                <label><input type='checkbox' value="30">Murderous Insanity in ET</label><br>
                                                                                                                                                <label><input type='checkbox' value="60">Nedria #2996</label><br>
                                                                                                                                                <label><input type='checkbox' value="49">NIP TA MERE</label><br>
                                                                                                                                                <label><input type='checkbox' value="16">NoneEsCape</label><br>
                                                                                                                                                <label><input type='checkbox' value="15">Nothing</label><br>
                                                                                                                                                <label><input type='checkbox' value="9">Olaf Alope</label><br>
                                                                                                                                                <label><input type='checkbox' value="44">On suce des Schtroumphs</label><br>
                                                                                                                                                <label><input type='checkbox' value="34">Petits Kebabs Volant</label><br>
                                                                                                                                                <label><input type='checkbox' value="31">Petits Lézards Tous Nus</label><br>
                                                                                                                                                <label><input type='checkbox' value="42">Phoenix Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="70">Pinguiz #2232</label><br>
                                                                                                                                                <label><input type='checkbox' value="64">Rayalok #2449</label><br>
                                                                                                                                                <label><input type='checkbox' value="41">Reflex Belgium</label><br>
                                                                                                                                                <label><input type='checkbox' value="39">Skillshout</label><br>
                                                                                                                                                <label><input type='checkbox' value="47">Stupid Move</label><br>
                                                                                                                                                <label><input type='checkbox' value="46">Stupid-Move</label><br>
                                                                                                                                                <label><input type='checkbox' value="10">The Bleeding Rocks</label><br>
                                                                                                                                                <label><input type='checkbox' value="27">The Legion of Nether</label><br>
                                                                                                                                                <label><input type='checkbox' value="12">The LuckyTeam</label><br>
                                                                                                                                                <label><input type='checkbox' value="28">Tish-cake KaWaii</label><br>
                                                                                                                                                <label><input type='checkbox' value="62">Touza #2628</label><br>
                                                                                                                                                <label><input type='checkbox' value="59">Unexard #2460</label><br>
                                                                                                                                                <label><input type='checkbox' value="11">WeAreVincent</label><br>
                                                                                                                                                <label><input type='checkbox' value="69">Witch Doctor #2256</label><br>
                                                                                                </div>
                            <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="1" value="Valider les inscriptions">
                        </div>                        
                                            <div class='ListePourInscrireTournoi'>
                            <h6>COD4</h6>
                            <div id="ListeInscrit2">
                                                                                                            <label><input type='checkbox' value="71">Alcyol #2207</label><br>
                                                                                                                                                <label><input type='checkbox' value="67">Alfatta #2772</label><br>
                                                                                                                                                <label><input type='checkbox' value="40">Annie's Firstblood</label><br>
                                                                                                                                                <label><input type='checkbox' value="3">Belgian Inoffensive Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="23">Belgian Rape Squad</label><br>
                                                                                                                                                <label><input type='checkbox' value="56">BIT1</label><br>
                                                                                                                                                <label><input type='checkbox' value="57">BIT2</label><br>
                                                                                                                                                <label><input type='checkbox' value="38">Bloodytearz</label><br>
                                                                                                                                                <label><input type='checkbox' value="51">C'était une mauvaise idée</label><br>
                                                                                                                                                <label><input type='checkbox' value="22">Caedem Dominatur</label><br>
                                                                                                                                                <label><input type='checkbox' value="48">Crêpière Tefal</label><br>
                                                                                                                                                <label><input type='checkbox' value="65">Delikan57 #2256</label><br>
                                                                                                                                                <label><input type='checkbox' value="20">Doctors X</label><br>
                                                                                                                                                <label><input type='checkbox' value="26">Dofusian GAMING</label><br>
                                                                                                                                                <label><input type='checkbox' value="24">Don't feed the ginger</label><br>
                                                                                                                                                <label><input type='checkbox' value="63">Droledami #2473</label><br>
                                                                                                                                                <label><input type='checkbox' value="66">Ebaral #2123</label><br>
                                                                                                                                                <label><input type='checkbox' value="61">Echofox #2924</label><br>
                                                                                                                                                <label><input type='checkbox' value="33">First</label><br>
                                                                                                                                                <label><input type='checkbox' value="25">FPMs</label><br>
                                                                                                                                                <label><input type='checkbox' value="8">Gitan</label><br>
                                                                                                                                                <label><input type='checkbox' value="50">Go Nerf Karma</label><br>
                                                                                                                                                <label><input type='checkbox' value="13">God Sake</label><br>
                                                                                                                                                <label><input type='checkbox' value="29">Gods of Chocolate</label><br>
                                                                                                                                                <label><input type='checkbox' value="53">GoldTeam</label><br>
                                                                                                                                                <label><input type='checkbox' value="68">Guerrier666 #2345</label><br>
                                                                                                                                                <label><input type='checkbox' value="1">HeHLan</label><br>
                                                                                                                                                <label><input type='checkbox' value="6">Inception eSport</label><br>
                                                                                                                                                <label><input type='checkbox' value="32">iNPhase</label><br>
                                                                                                                                                <label><input type='checkbox' value="43">ISWEARSHEWAS18</label><br>
                                                                                                                                                <label><input type='checkbox' value="45">Je mange des shtroumpfs</label><br>
                                                                                                                                                <label><input type='checkbox' value="21">JokS</label><br>
                                                                                                                                                <label><input type='checkbox' value="36">La Dream Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="37">La Nouvelle Génération</label><br>
                                                                                                                                                <label><input type='checkbox' value="35">Lamastruche Gaming</label><br>
                                                                                                                                                <label><input type='checkbox' value="58">Lambox #2917</label><br>
                                                                                                                                                <label><input type='checkbox' value="14">Les Bifflettes Maison</label><br>
                                                                                                                                                <label><input type='checkbox' value="18">Les Michel Forever</label><br>
                                                                                                                                                <label><input type='checkbox' value="7">Les Tites Fioles</label><br>
                                                                                                                                                <label><input type='checkbox' value="52">Ma grosse bite en plâtre</label><br>
                                                                                                                                                <label><input type='checkbox' value="2">MABITE</label><br>
                                                                                                                                                <label><input type='checkbox' value="19">Mid Or Feed</label><br>
                                                                                                                                                <label><input type='checkbox' value="17">Midget Pineapple Wolverine</label><br>
                                                                                                                                                <label><input type='checkbox' value="30">Murderous Insanity in ET</label><br>
                                                                                                                                                <label><input type='checkbox' value="60">Nedria #2996</label><br>
                                                                                                                                                <label><input type='checkbox' value="49">NIP TA MERE</label><br>
                                                                                                                                                <label><input type='checkbox' value="16">NoneEsCape</label><br>
                                                                                                                                                <label><input type='checkbox' value="15">Nothing</label><br>
                                                                                                                                                <label><input type='checkbox' value="9">Olaf Alope</label><br>
                                                                                                                                                <label><input type='checkbox' value="44">On suce des Schtroumphs</label><br>
                                                                                                                                                <label><input type='checkbox' value="34">Petits Kebabs Volant</label><br>
                                                                                                                                                <label><input type='checkbox' value="31">Petits Lézards Tous Nus</label><br>
                                                                                                                                                <label><input type='checkbox' value="42">Phoenix Team</label><br>
                                                                                                                                                <label><input type='checkbox' value="70">Pinguiz #2232</label><br>
                                                                                                                                                <label><input type='checkbox' value="64">Rayalok #2449</label><br>
                                                                                                                                                <label><input type='checkbox' value="41">Reflex Belgium</label><br>
                                                                                                                                                <label><input type='checkbox' value="39">Skillshout</label><br>
                                                                                                                                                <label><input type='checkbox' value="47">Stupid Move</label><br>
                                                                                                                                                <label><input type='checkbox' value="46">Stupid-Move</label><br>
                                                                                                                                                <label><input type='checkbox' value="10">The Bleeding Rocks</label><br>
                                                                                                                                                <label><input type='checkbox' value="27">The Legion of Nether</label><br>
                                                                                                                                                <label><input type='checkbox' value="12">The LuckyTeam</label><br>
                                                                                                                                                <label><input type='checkbox' value="28">Tish-cake KaWaii</label><br>
                                                                                                                                                <label><input type='checkbox' value="62">Touza #2628</label><br>
                                                                                                                                                <label><input type='checkbox' value="59">Unexard #2460</label><br>
                                                                                                                                                <label><input type='checkbox' value="11">WeAreVincent</label><br>
                                                                                                                                                <label><input type='checkbox' value="69">Witch Doctor #2256</label><br>
                                                                                                </div>
                            <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="2" value="Valider les inscriptions">
                        </div>                        
                                 
                    <!-- tournois individuels -->
                                            <div class='ListePourInscrireTournoi'>
                            <h6>Trackmania</h6>
                            <div id="ListeInscritJT3">
                                                                    <br />
<b>Notice</b>:  Undefined offset: 3 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>196</b><br />
                                        <label><input type="checkbox" value="<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>201</b><br />
"><br />
<b>Notice</b>:  Undefined index: pseudo in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>202</b><br />
</label>                                    
                                                                        <input type="text" id="Joueur<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>205</b><br />
3" value="<br />
<b>Notice</b>:  Undefined offset: 3 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>206</b><br />
">
                                                                    <br />
<b>Notice</b>:  Undefined offset: 3 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>196</b><br />
                                        <label><input type="checkbox" value="<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>201</b><br />
"><br />
<b>Notice</b>:  Undefined index: pseudo in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>202</b><br />
</label>                                    
                                                                        <input type="text" id="Joueur<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>205</b><br />
3" value="<br />
<b>Notice</b>:  Undefined offset: 3 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>206</b><br />
">
                                                            </div>
                            <input type="button" class="submitInscriptionJTAdmin" id="3" value="Valider les inscriptions">
                        </div>                        
                                            <div class='ListePourInscrireTournoi'>
                            <h6>UT3</h6>
                            <div id="ListeInscritJT4">
                                                                    <br />
<b>Notice</b>:  Undefined offset: 4 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>196</b><br />
                                        <label><input type="checkbox" value="<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>201</b><br />
"><br />
<b>Notice</b>:  Undefined index: pseudo in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>202</b><br />
</label>                                    
                                                                        <input type="text" id="Joueur<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>205</b><br />
4" value="<br />
<b>Notice</b>:  Undefined offset: 4 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>206</b><br />
">
                                                                    <br />
<b>Notice</b>:  Undefined offset: 4 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>196</b><br />
                                        <label><input type="checkbox" value="<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>201</b><br />
"><br />
<b>Notice</b>:  Undefined index: pseudo in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>202</b><br />
</label>                                    
                                                                        <input type="text" id="Joueur<br />
<b>Notice</b>:  Undefined index: id_joueur in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>205</b><br />
4" value="<br />
<b>Notice</b>:  Undefined offset: 4 in <b>C:\xampp\htdocs\Intranet\templates_c\94f13fa4efc15969672cba9b1684de9b92273f18_0.file.inscriptions.tpl.cache.php</b> on line <b>206</b><br />
">
                                                            </div>
                            <input type="button" class="submitInscriptionJTAdmin" id="4" value="Valider les inscriptions">
                        </div>                        
                                        <br>    
                    <div id="test"></div>
                </div>
            </div>
        </div>	
	<!-- gap to have the footer in the bottom of the window -->
	<div style="height: 1000px;"></div>
    
	
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved Copyright 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/templates/default/assets/img/logo3.png" alt="CEHECOFH">
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/templates/default/assets/img/logo4.png" alt="HeH">
        </a>
    </div>
</footer>

    </body>
</html><?php }
}
