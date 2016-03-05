<?php
/* Smarty version 3.1.29, created on 2016-03-05 16:15:57
  from "C:\xampp\htdocs\Intranet\view\templates\admin\equipes.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56daf82d36f349_06953680',
  'file_dependency' => 
  array (
    '45a645cc6d37acf0eb25a63d72368f5cdb9a02b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\view\\templates\\admin\\equipes.tpl',
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
function content_56daf82d36f349_06953680 ($_smarty_tpl) {
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
                <div id="ListeEquipeAdmin">
                    <fieldset>
                        <legend>Liste des équipes</legend>
                        <table class="listeEquipes">
                            <thead>
                                <tr>
                                    <th>Les équipes</th>
                                    <th>Joueurs dans l'équipe</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="listeEquipeAdmin">
                                                                                            <h6 class="EquipeAdmin" value="71">Alcyol #2207</h6>
                                                                                            <h6 class="EquipeAdmin" value="67">Alfatta #2772</h6>
                                                                                            <h6 class="EquipeAdmin" value="40">Annie's Firstblood</h6>
                                                                                            <h6 class="EquipeAdmin" value="3">Belgian Inoffensive Team</h6>
                                                                                            <h6 class="EquipeAdmin" value="23">Belgian Rape Squad</h6>
                                                                                            <h6 class="EquipeAdmin" value="56">BIT1</h6>
                                                                                            <h6 class="EquipeAdmin" value="57">BIT2</h6>
                                                                                            <h6 class="EquipeAdmin" value="38">Bloodytearz</h6>
                                                                                            <h6 class="EquipeAdmin" value="51">C'était une mauvaise idée</h6>
                                                                                            <h6 class="EquipeAdmin" value="22">Caedem Dominatur</h6>
                                                                                            <h6 class="EquipeAdmin" value="48">Crêpière Tefal</h6>
                                                                                            <h6 class="EquipeAdmin" value="65">Delikan57 #2256</h6>
                                                                                            <h6 class="EquipeAdmin" value="20">Doctors X</h6>
                                                                                            <h6 class="EquipeAdmin" value="26">Dofusian GAMING</h6>
                                                                                            <h6 class="EquipeAdmin" value="24">Don't feed the ginger</h6>
                                                                                            <h6 class="EquipeAdmin" value="63">Droledami #2473</h6>
                                                                                            <h6 class="EquipeAdmin" value="66">Ebaral #2123</h6>
                                                                                            <h6 class="EquipeAdmin" value="61">Echofox #2924</h6>
                                                                                            <h6 class="EquipeAdmin" value="33">First</h6>
                                                                                            <h6 class="EquipeAdmin" value="25">FPMs</h6>
                                                                                            <h6 class="EquipeAdmin" value="8">Gitan</h6>
                                                                                            <h6 class="EquipeAdmin" value="50">Go Nerf Karma</h6>
                                                                                            <h6 class="EquipeAdmin" value="13">God Sake</h6>
                                                                                            <h6 class="EquipeAdmin" value="29">Gods of Chocolate</h6>
                                                                                            <h6 class="EquipeAdmin" value="53">GoldTeam</h6>
                                                                                            <h6 class="EquipeAdmin" value="68">Guerrier666 #2345</h6>
                                                                                            <h6 class="EquipeAdmin" value="1">HeHLan</h6>
                                                                                            <h6 class="EquipeAdmin" value="6">Inception eSport</h6>
                                                                                            <h6 class="EquipeAdmin" value="32">iNPhase</h6>
                                                                                            <h6 class="EquipeAdmin" value="43">ISWEARSHEWAS18</h6>
                                                                                            <h6 class="EquipeAdmin" value="45">Je mange des shtroumpfs</h6>
                                                                                            <h6 class="EquipeAdmin" value="21">JokS</h6>
                                                                                            <h6 class="EquipeAdmin" value="36">La Dream Team</h6>
                                                                                            <h6 class="EquipeAdmin" value="37">La Nouvelle Génération</h6>
                                                                                            <h6 class="EquipeAdmin" value="35">Lamastruche Gaming</h6>
                                                                                            <h6 class="EquipeAdmin" value="58">Lambox #2917</h6>
                                                                                            <h6 class="EquipeAdmin" value="14">Les Bifflettes Maison</h6>
                                                                                            <h6 class="EquipeAdmin" value="18">Les Michel Forever</h6>
                                                                                            <h6 class="EquipeAdmin" value="7">Les Tites Fioles</h6>
                                                                                            <h6 class="EquipeAdmin" value="52">Ma grosse bite en plâtre</h6>
                                                                                            <h6 class="EquipeAdmin" value="2">MABITE</h6>
                                                                                            <h6 class="EquipeAdmin" value="19">Mid Or Feed</h6>
                                                                                            <h6 class="EquipeAdmin" value="17">Midget Pineapple Wolverine</h6>
                                                                                            <h6 class="EquipeAdmin" value="30">Murderous Insanity in ET</h6>
                                                                                            <h6 class="EquipeAdmin" value="60">Nedria #2996</h6>
                                                                                            <h6 class="EquipeAdmin" value="49">NIP TA MERE</h6>
                                                                                            <h6 class="EquipeAdmin" value="16">NoneEsCape</h6>
                                                                                            <h6 class="EquipeAdmin" value="15">Nothing</h6>
                                                                                            <h6 class="EquipeAdmin" value="9">Olaf Alope</h6>
                                                                                            <h6 class="EquipeAdmin" value="44">On suce des Schtroumphs</h6>
                                                                                            <h6 class="EquipeAdmin" value="34">Petits Kebabs Volant</h6>
                                                                                            <h6 class="EquipeAdmin" value="31">Petits Lézards Tous Nus</h6>
                                                                                            <h6 class="EquipeAdmin" value="42">Phoenix Team</h6>
                                                                                            <h6 class="EquipeAdmin" value="70">Pinguiz #2232</h6>
                                                                                            <h6 class="EquipeAdmin" value="64">Rayalok #2449</h6>
                                                                                            <h6 class="EquipeAdmin" value="41">Reflex Belgium</h6>
                                                                                            <h6 class="EquipeAdmin" value="39">Skillshout</h6>
                                                                                            <h6 class="EquipeAdmin" value="47">Stupid Move</h6>
                                                                                            <h6 class="EquipeAdmin" value="46">Stupid-Move</h6>
                                                                                            <h6 class="EquipeAdmin" value="10">The Bleeding Rocks</h6>
                                                                                            <h6 class="EquipeAdmin" value="27">The Legion of Nether</h6>
                                                                                            <h6 class="EquipeAdmin" value="12">The LuckyTeam</h6>
                                                                                            <h6 class="EquipeAdmin" value="28">Tish-cake KaWaii</h6>
                                                                                            <h6 class="EquipeAdmin" value="62">Touza #2628</h6>
                                                                                            <h6 class="EquipeAdmin" value="59">Unexard #2460</h6>
                                                                                            <h6 class="EquipeAdmin" value="11">WeAreVincent</h6>
                                                                                            <h6 class="EquipeAdmin" value="69">Witch Doctor #2256</h6>
                                                                                    </div>
                                    </td>
                                    <td>
                                        <div id="listeEquipeJoueurAdmin">
                                            What here ?
                                        </div>
                                        <input id="submitNewPlayerInTeam" type="button" value="Ajouter un joueur" style="display: none;">
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
                                        Informations du joueur
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <div id="InfoJoueurEquipes" style="height:250px;">
                                              What here ?
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>        
                    </fieldset>

                    <fieldset>
                        <legend>Ajouter une équipe</legend>
                        <div id="creerTeamAdmin" >
                            <label for="Team">Nom de la team :</label>
                            <input type="text" name="Team" id="Team"><br />

                            <div id="pseudoboxTeam" style="border: none; margin: 0px; padding: 0px"></div>

                            <label for="TagTeam">Tag de la team :</label>
                            <input type="text" name="TagTeam" id="TagTeam"><br />
                            <div id="pseudoboxTagTeam" style="border: none; margin: 0px; padding: 0px"></div>

                            <label for="new_psw_equipe">Mot de passe : </label>
                            <input type="password" name="new_psw_equipe" id="new_psw_equipe" /><br/>
                            <label for="new_psw_equipe2">Confirmer mot de passe : </label>
                            <input type="password" name="new_psw_equipe2" id="new_psw_equipe2" />
                        </div>
                        <div id="erreurNewTeamAdmin" style="height: auto;"></div>
                        <input type="button" id="submitCreerNewEquipeAdmin" value="Ajouter l'équipe">
                    </fieldset>
                    <div id="infoEquipeAdmin" style="display: none"></div>
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
</html><?php }
}
