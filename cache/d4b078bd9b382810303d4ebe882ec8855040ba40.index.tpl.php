<?php
/* Smarty version 3.1.29, created on 2016-03-05 15:59:54
  from "C:\xampp\htdocs\Intranet\templates\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56daf46a820267_21557748',
  'file_dependency' => 
  array (
    'd4b078bd9b382810303d4ebe882ec8855040ba40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\index.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
    'a8a4a27188d1166d70939cf67a1b3cb7110cd173' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\meta.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
    '3b4fab3b6c0ab020216cc9c065008e808669f6e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\header.tpl',
      1 => 1457189813,
      2 => 'file',
    ),
    'da870d7e68d069bacb39bc90043576474f293a9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\nav.tpl',
      1 => 1457189813,
      2 => 'file',
    ),
    '1689aac45742ae864d63bee6eda739ed6bb0d226' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Intranet\\templates\\default\\footer.tpl',
      1 => 1456496461,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56daf46a820267_21557748 ($_smarty_tpl) {
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
        <script type="text/javascript" src="/Intranet/assets/js/getXhr.js"></script>
        <script type="text/javascript">
            function news_toggle(idn)
            {
                var nom = '#contenu_news_' + idn;
                $(nom).toggle();
            }
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

        <div id="container" class="container-fluid">
            <div class="row">
                <div id="bloc_news" class="col-lg-6 col-xs-12">
                    <h3>News</h3>
                                            <div class="une_news" id="bloc_news_10">
                            <div class="titre_news" id="titre_news_10" onclick="news_toggle(10);">
                                Résultat Trackmania
                                <div class="date_news" id="footer_news_10">
                                    dimanche à 02h46
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_10">
                                <IMG SRC="resultTM.png" WIDTH=100<?php echo '%>'; ?>

                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_9">
                            <div class="titre_news" id="titre_news_9" onclick="news_toggle(9);">
                                Gagnants COD
                                <div class="date_news" id="footer_news_9">
                                    dimanche à 02h33
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_9">
                                1. BIT1<br /><br />
2. NIP TA MERE<br /><br />
3. Don't feed the ginger
                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_6">
                            <div class="titre_news" id="titre_news_6" onclick="news_toggle(6);">
                                Horaire soirée de samedi
                                <div class="date_news" id="footer_news_6">
                                    samedi à 22h49
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_6">
                                22H00 :<br /><br />
Tournoi Trackmania<br /><br />
23h00 : <br /><br />
Tournoi COD4<br /><br />
<br /><br />
Serveur tournoi 1(IP : 192.168.10.211) -> BIT2 vs Belgian Rape Squad<br /><br />
Serveur tournoi 2 (IP : 192.168.10.212) -> Don't feed the ginger vs BIT1<br /><br />
Serveur tournoi 3 (IP : 192.168.10.213) -> Go Nerf Karma vs NIP TA MERE<br /><br />
<br /><br />
00h00 :<br /><br />
- Tournoi UT3 <br /><br />
- BO3 de League Of Legend<br /><br />

                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_7">
                            <div class="titre_news" id="titre_news_7" onclick="news_toggle(7);">
                                Clé Unreal Tournament 3
                                <div class="date_news" id="footer_news_7">
                                    samedi à 21h39
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_7">
                                CD KEY LIST:<br /><br />
ZJ3P-TUDF-LHKT-4GK2<br /><br />
E8ML-6ZA7-ZZA4-DW4D<br /><br />
PHM3-QYC3-LEWY-VCC4<br /><br />
HPAP-4AUU-BBTD-YE6R<br /><br />
M3YX-UPD2-JGZK-7TAB<br /><br />
CLAG-WAJD-NWDA-GLCQ<br /><br />
4X7Y-M5KD-TS99-JECJ<br /><br />
W8EL-7KJZ-52JL-EQ6U<br /><br />
WMEM-ZJUT-992A-WQTC<br /><br />
VKJF-VSL8-WE5B-CB95<br /><br />
FBGK-CNU3-SMSF-FHM2<br /><br />
T64B-3XVJ-CLLM-5XKQ<br /><br />
Z8NN-73SC-QEKL-ACBK<br /><br />
FARK-A8US-CAAX-BAKS<br /><br />
YX6Q-M3T3-M33R-J8W7<br /><br />
V23F-TVVW-GLM3-4QUH<br /><br />
2BWV-DJVM-P28F-6HVQ<br /><br />
N54Q-UZJJ-A5KU-LRFX<br /><br />
PGT3-NCVV-QLEY-QB77<br /><br />
NJP4-S42S-RXET-SA2D<br /><br />
DF5E-LY33-KKVZ-MTW2<br /><br />
XDCJ-HESN-4K2E-ZZXR<br /><br />
9RE7-9JUV-EK7C-W76Z<br /><br />
BTQB-C7UT-KNUP-T96A<br /><br />
XGBJ-PCSW-BEJY-G5J3<br /><br />
XMNJ-Z2JM-PF2A-A922<br /><br />
KYXP-NMVZ-UGG8-N7SE<br /><br />
FT3J-CV3P-9QS7-LFPQ<br /><br />
FNZJ-2Q3K-URAV-7U36<br /><br />
6QQ5-76LD-SXNC-B475<br /><br />
US3G-HUTN-HV5W-44T5<br /><br />
FRXJ-8LTQ-6KSU-6BPZ<br /><br />
2NEV-3JUN-l3QD-ENNT<br /><br />
XTHJ-DR2A-BQ27-F9JD
                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_5">
                            <div class="titre_news" id="titre_news_5" onclick="news_toggle(5);">
                                Un peu de pub
                                <div class="date_news" id="footer_news_5">
                                    samedi à 14h07
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_5">
                                Tu aimes le heavy metal et tu as l'humour lourd?<br /><br />
<br /><br />
<br /><br />
https://www.facebook.com/pages/Tr%C3%BCe-Funny-Mayhem/261538330566866<br /><br />
<br /><br />
Cette page est pour toi ;-)
                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_4">
                            <div class="titre_news" id="titre_news_4" onclick="news_toggle(4);">
                                Horaire début des tournois
                                <div class="date_news" id="footer_news_4">
                                    samedi à 05h15
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_4">
                                <u>League Of legend :</u> 9h00<br /><br />
<u>Call Of duty 4 :</u> 10h00<br /><br />
<u>Unreal Tournament 3 :</u> 12h00<br /><br />
<u>Trackmania :</u> 18h00
                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_2">
                            <div class="titre_news" id="titre_news_2" onclick="news_toggle(2);">
                                Gagnant de Hearthstone
                                <div class="date_news" id="footer_news_2">
                                    samedi à 04h38
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_2">
                                Félicitation à Echofox pour sa victoire ! Il a gagné un déjeuner gratuit ce samedi matin !  
                            </div>
                        </div>
                                            <div class="une_news" id="bloc_news_1">
                            <div class="titre_news" id="titre_news_1" onclick="news_toggle(1);">
                                Serveur fun en ligne
                                <div class="date_news" id="footer_news_1">
                                    vendredi à 22h44
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_1">
                                <H3>COD4 : </H3><br /><br />
IP : 192.168.10.210<br /><br />
<h3>Unreal Tournament 3 :</h3><br /><br />
Opérationnel (afficher dans le jeu multijoueur -> LAN)<br /><br />
<h3>Trackamnia :</h3><br /><br />
Opérationnel
                            </div>
                        </div>
                                    </div>		
                <div id="bloc_chat" class="col-lg-6 col-xs-12">
                                            <h3>HEHLan Chat</h3>
                                                    <div id="bloc_chat_box">
                                <div id="bloc_chat_texte"></div>
                                <div id="bloc_chat_users">
                                    <strong>Connectés :</strong><br>				
                                </div>
                                <div id="bloc_chat_send">
                                    <input type="text" name="message" id="bloc_chat_message" />
                                    <input type="button" value="Envoyer" id="bloc_chat_bouton" onclick="ecrire();" />
                                </div>
                            </div>
                                                            </div>
            </div>			
        </div>
        
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
                    <script type="text/javascript">
                $("#bloc_chat_message").keyup(function (event)
                {
                    if (event.keyCode === 13)
                    {
                        $("#bloc_chat_bouton").click();
                    }
                });

                afficher(0);
                users();
            </script>
            </body>
</html><?php }
}
