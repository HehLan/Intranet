<?php
/* Smarty version 3.1.29, created on 2016-03-07 13:05:54
  from "E:\wamp\www\Intranet\view\templates\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dd6ea267eba7_46136064',
  'file_dependency' => 
  array (
    '50dbe11ea4d13b924c1b789ce0ec2821a8872026' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\index.tpl',
      1 => 1457293946,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1457281706,
      2 => 'file',
    ),
    '38b87550390b4498246829deafc9d57640d6d43a' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\header.tpl',
      1 => 1457191474,
      2 => 'file',
    ),
    'eb253ea85fa0c415276f6fd713630b1f49745222' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\nav.tpl',
      1 => 1457194650,
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
function content_56dd6ea267eba7_46136064 ($_smarty_tpl) {
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

<link rel="shortcut icon" href="/Intranet/view/templates/default/assets/img/logoheh.ico" />
<link rel="icon" href="/Intranet/view/templates/default/assets/img/logoheh.ico" />

<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/css/bootstrap.min.css" />
<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/footer.css" />





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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/index.css" />
        <script type="text/javascript" src="/Intranet/src/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
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
                                        
                    
                                        <li><a href="profile.php">Mon profil</a></li>
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
                                R&eacute;sultat Trackmania
                                <div class="date_news" id="footer_news_10">
                                    dimanche à 02h46
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_10">
                                <IMG SRC="assets/img/resultTM.png" WIDTH=100<?php echo '%>'; ?>

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
                                            <div class="une_news" id="bloc_news_3">
                            <div class="titre_news" id="titre_news_3" onclick="news_toggle(3);">
                                Téléchargement COD4
                                <div class="date_news" id="footer_news_3">
                                    samedi à 05h08
                                </div>
                            </div>
                            <div class="contenu_news" id="contenu_news_3">
                                <a href="cod4.rar">COD4</a>
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
        <img src="/Intranet/view/templates/default/assets/img/logo3.png" alt="CEHECOFH">
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/default/assets/img/logo4.png" alt="HeH">
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
