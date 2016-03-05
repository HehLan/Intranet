<?php
/* Smarty version 3.1.29, created on 2016-03-05 15:52:53
  from "E:\wamp\www\Intranet\view\templates\admin\news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56daf2c5eea636_27297446',
  'file_dependency' => 
  array (
    '93069afb6615d428eeea0494ae9a5d297cd237c8' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\news.tpl',
      1 => 1457189572,
      2 => 'file',
    ),
    '0e581425c25b7e4430f823fafb32398a1a42b35f' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\meta.tpl',
      1 => 1457188949,
      2 => 'file',
    ),
    '671975c94dd1e7dba0ca368cae0b42da0a3615ec' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\header.tpl',
      1 => 1456228370,
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
function content_56daf2c5eea636_27297446 ($_smarty_tpl) {
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
        <script type="text/javascript" src="/Intranet/assets/js/getXhr.js"></script>
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
            <div id="contenu" class="row">
         
                <div id="bloc_add_news" class="col-lg-4 col-xs-12">		
                    <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                        <legend>Nouvelle news</legend>
                        <fieldset>
                            <input type="hidden" name="id_news" value="0">
                            <div class="form-group">
                                <label for="title">Titre : </label>
                                <input id="title" class="form-control" type="text" name="title" >  
                            </div>
                            <div class="form-group">
                                <label for="textarea">Texte : </label>
                                <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button> 
                        </fieldset>
                    </form>
                </div>
                
                
                <div id="bloc_update_news" class="col-lg-4 col-xs-12">
                                             
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="11">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="C'est la fin du monde pas du tout">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">La fin du monde!!!</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=11">Hide</a> 
                                    <small><p class="pull-right">Last update : 2015-12-03 14:06:04</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="10">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="R&eacute;sultat Trackmania">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><IMG SRC="assets/img/resultTM.png" WIDTH=100<?php echo '%>'; ?>
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=10">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-06 02:46:21</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="9">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Gagnants COD">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">1. BIT1
2. NIP TA MERE
3. Don't feed the ginger</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=9">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-06 02:33:19</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="6">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Horaire soirée de samedi">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">22H00 :
Tournoi Trackmania
23h00 : 
Tournoi COD4

Serveur tournoi 1(IP : 192.168.10.211) -> BIT2 vs Belgian Rape Squad
Serveur tournoi 2 (IP : 192.168.10.212) -> Don't feed the ginger vs BIT1
Serveur tournoi 3 (IP : 192.168.10.213) -> Go Nerf Karma vs NIP TA MERE

00h00 :
- Tournoi UT3 
- BO3 de League Of Legend
</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=6">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 22:49:23</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="8">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"></textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=8">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 21:45:50</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="7">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Clé Unreal Tournament 3">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">CD KEY LIST:
ZJ3P-TUDF-LHKT-4GK2
E8ML-6ZA7-ZZA4-DW4D
PHM3-QYC3-LEWY-VCC4
HPAP-4AUU-BBTD-YE6R
M3YX-UPD2-JGZK-7TAB
CLAG-WAJD-NWDA-GLCQ
4X7Y-M5KD-TS99-JECJ
W8EL-7KJZ-52JL-EQ6U
WMEM-ZJUT-992A-WQTC
VKJF-VSL8-WE5B-CB95
FBGK-CNU3-SMSF-FHM2
T64B-3XVJ-CLLM-5XKQ
Z8NN-73SC-QEKL-ACBK
FARK-A8US-CAAX-BAKS
YX6Q-M3T3-M33R-J8W7
V23F-TVVW-GLM3-4QUH
2BWV-DJVM-P28F-6HVQ
N54Q-UZJJ-A5KU-LRFX
PGT3-NCVV-QLEY-QB77
NJP4-S42S-RXET-SA2D
DF5E-LY33-KKVZ-MTW2
XDCJ-HESN-4K2E-ZZXR
9RE7-9JUV-EK7C-W76Z
BTQB-C7UT-KNUP-T96A
XGBJ-PCSW-BEJY-G5J3
XMNJ-Z2JM-PF2A-A922
KYXP-NMVZ-UGG8-N7SE
FT3J-CV3P-9QS7-LFPQ
FNZJ-2Q3K-URAV-7U36
6QQ5-76LD-SXNC-B475
US3G-HUTN-HV5W-44T5
FRXJ-8LTQ-6KSU-6BPZ
2NEV-3JUN-l3QD-ENNT
XTHJ-DR2A-BQ27-F9JD</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=7">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 21:39:31</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="5">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Un peu de pub">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">Tu aimes le heavy metal et tu as l'humour lourd?


https://www.facebook.com/pages/Tr%C3%BCe-Funny-Mayhem/261538330566866

Cette page est pour toi ;-)</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=5">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 14:07:51</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="4">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Horaire début des tournois">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><u>League Of legend :</u> 9h00
<u>Call Of duty 4 :</u> 10h00
<u>Unreal Tournament 3 :</u> 12h00
<u>Trackmania :</u> 18h00</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=4">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 05:15:23</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="3">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Téléchargement COD4">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><a href="cod4.rar">COD4</a></textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=3">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 05:08:18</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="2">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Gagnant de Hearthstone">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">Félicitation à Echofox pour sa victoire ! Il a gagné un déjeuner gratuit ce samedi matin !  </textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=2">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-05 04:38:15</p></small>                                    
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Published news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="1">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="Serveur fun en ligne">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea"><H3>COD4 : </H3>
IP : 192.168.10.210
<h3>Unreal Tournament 3 :</h3>
Opérationnel (afficher dans le jeu multijoueur -> LAN)
<h3>Trackamnia :</h3>
Opérationnel</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=1&id_news=1">Hide</a> 
                                    <small><p class="pull-right">Last update : 2014-04-04 22:44:47</p></small>                                    
                                </fieldset>
                            </form>
                                                                                                                                                                                  
                </div>
                
                
                <div id="bloc_deleted_news" class="col-lg-4 col-xs-12">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Hidden news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="15">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="test Query class">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">fsdfsdfs</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=0&id_news=15">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/news_delete.php?id_news=15">Delete</a> 
                                    <small><p class="pull-right">Last update : 2016-03-05 11:06:36</p></small>
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Hidden news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="13">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="test avec smarty (modif ?)">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">write in white on white, ... well</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=0&id_news=13">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/news_delete.php?id_news=13">Delete</a> 
                                    <small><p class="pull-right">Last update : 2016-02-24 00:03:00</p></small>
                                </fieldset>
                            </form>
                                                                     
                            <form class="well col-lg-12" method="POST" action="modules/news_save.php">
                                <legend>Hidden news</legend>
                                <fieldset>
                                    <input type="hidden" name="id_news" value="12">
                                    <div class="form-group">
                                        <label for="title">Titre : </label>
                                        <input id="title" class="form-control" type="text" name="title"  value="test">  
                                    </div>
                                    <div class="form-group">
                                        <label for="textarea">Texte : </label>
                                        <textarea id="textarea" type class="form-control" name="textarea">test</textarea>  
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a class="btn btn-primary" href="modules/news_hide.php?invisible=0&id_news=12">Unhide</a> 
                                    <a class="btn btn-primary" href="modules/news_delete.php?id_news=12">Delete</a> 
                                    <small><p class="pull-right">Last update : 2015-11-26 23:54:51</p></small>
                                </fieldset>
                            </form>
                                              
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
