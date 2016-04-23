<?php
/* Smarty version 3.1.29, created on 2016-03-25 11:40:17
  from "E:\wamp\www\Intranet\view\templates\admin\scoresPools-old.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f51591c95f52_08591198',
  'file_dependency' => 
  array (
    '18348aaa1b586396982b5c5a8568902ecd8d7fa0' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresPools-old.tpl',
      1 => 1458870971,
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
function content_56f51591c95f52_08591198 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/scoresPools-old.css" />
        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/scoresPools-old.js"></script>
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
                <h1>Qualifications HOTS</h1>
                <form method="POST" action="modules/scores_save.php">
                    <input type="hidden" name="id_tournoi" value="1">
                    <input type="submit" value="Enregistrer">
                    <br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="5">Groupe 1</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">Petits Lézards Tous Nus</th>
                                                                        <th class="th_team2_pool_lol">Annie's Firstblood</th>
                                                                        <th class="th_team2_pool_lol">GoldTeam</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Petits Lézards Tous Nus</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1063)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1063_p_31" 
                                                       value="1" onclick="active_score(1063,31)" />
                                                <input type="text" name="score_m_1063_p_31" 
                                                       id="score_m_1063_p_31" 
                                                       value="99" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1064)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1064_p_31" 
                                                       value="1" onclick="active_score(1064,31)" />
                                                <input type="text" name="score_m_1064_p_31" 
                                                       id="score_m_1064_p_31" 
                                                       value="545" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Annie's Firstblood</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1063)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1063_p_40" 
                                                       value="1" onclick="active_score(1063,40)" />
                                                <input type="text" name="score_m_1063_p_40" 
                                                       id="score_m_1063_p_40" 
                                                       value="65464" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1065)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1065_p_40" 
                                                       value="1" onclick="active_score(1065,40)" />
                                                <input type="text" name="score_m_1065_p_40" 
                                                       id="score_m_1065_p_40" 
                                                       value="54" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">GoldTeam</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1064)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1064_p_53" 
                                                       value="1" onclick="active_score(1064,53)" />
                                                <input type="text" name="score_m_1064_p_53" 
                                                       id="score_m_1064_p_53" 
                                                       value="4554" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1065)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1065_p_53" 
                                                       value="1" onclick="active_score(1065,53)" />
                                                <input type="text" name="score_m_1065_p_53" 
                                                       id="score_m_1065_p_53" 
                                                       value="54" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="7">Groupe 2</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">God Sake</th>
                                                                        <th class="th_team2_pool_lol">Belgian Rape Squad</th>
                                                                        <th class="th_team2_pool_lol">Skillshout</th>
                                                                        <th class="th_team2_pool_lol">ISWEARSHEWAS18</th>
                                                                        <th class="th_team2_pool_lol">On suce des Schtroumphs</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">God Sake</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1066)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1066_p_13" 
                                                       value="1" onclick="active_score(1066,13)" />
                                                <input type="text" name="score_m_1066_p_13" 
                                                       id="score_m_1066_p_13" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1074)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1074_p_13" 
                                                       value="1" onclick="active_score(1074,13)" />
                                                <input type="text" name="score_m_1074_p_13" 
                                                       id="score_m_1074_p_13" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1071)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1071_p_13" 
                                                       value="1" onclick="active_score(1071,13)" />
                                                <input type="text" name="score_m_1071_p_13" 
                                                       id="score_m_1071_p_13" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1072)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1072_p_13" 
                                                       value="1" onclick="active_score(1072,13)" />
                                                <input type="text" name="score_m_1072_p_13" 
                                                       id="score_m_1072_p_13" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Belgian Rape Squad</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1066)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1066_p_23" 
                                                       value="1" onclick="active_score(1066,23)" />
                                                <input type="text" name="score_m_1066_p_23" 
                                                       id="score_m_1066_p_23" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1068)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1068_p_23" 
                                                       value="1" onclick="active_score(1068,23)" />
                                                <input type="text" name="score_m_1068_p_23" 
                                                       id="score_m_1068_p_23" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1073)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1073_p_23" 
                                                       value="1" onclick="active_score(1073,23)" />
                                                <input type="text" name="score_m_1073_p_23" 
                                                       id="score_m_1073_p_23" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1075)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1075_p_23" 
                                                       value="1" onclick="active_score(1075,23)" />
                                                <input type="text" name="score_m_1075_p_23" 
                                                       id="score_m_1075_p_23" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Skillshout</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1074)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1074_p_39" 
                                                       value="1" onclick="active_score(1074,39)" />
                                                <input type="text" name="score_m_1074_p_39" 
                                                       id="score_m_1074_p_39" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1068)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1068_p_39" 
                                                       value="1" onclick="active_score(1068,39)" />
                                                <input type="text" name="score_m_1068_p_39" 
                                                       id="score_m_1068_p_39" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1067)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1067_p_39" 
                                                       value="1" onclick="active_score(1067,39)" />
                                                <input type="text" name="score_m_1067_p_39" 
                                                       id="score_m_1067_p_39" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1070)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1070_p_39" 
                                                       value="1" onclick="active_score(1070,39)" />
                                                <input type="text" name="score_m_1070_p_39" 
                                                       id="score_m_1070_p_39" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">ISWEARSHEWAS18</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1071)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1071_p_43" 
                                                       value="1" onclick="active_score(1071,43)" />
                                                <input type="text" name="score_m_1071_p_43" 
                                                       id="score_m_1071_p_43" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1073)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1073_p_43" 
                                                       value="1" onclick="active_score(1073,43)" />
                                                <input type="text" name="score_m_1073_p_43" 
                                                       id="score_m_1073_p_43" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1067)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1067_p_43" 
                                                       value="1" onclick="active_score(1067,43)" />
                                                <input type="text" name="score_m_1067_p_43" 
                                                       id="score_m_1067_p_43" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1069)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1069_p_43" 
                                                       value="1" onclick="active_score(1069,43)" />
                                                <input type="text" name="score_m_1069_p_43" 
                                                       id="score_m_1069_p_43" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">On suce des Schtroumphs</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1072)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1072_p_44" 
                                                       value="1" onclick="active_score(1072,44)" />
                                                <input type="text" name="score_m_1072_p_44" 
                                                       id="score_m_1072_p_44" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1075)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1075_p_44" 
                                                       value="1" onclick="active_score(1075,44)" />
                                                <input type="text" name="score_m_1075_p_44" 
                                                       id="score_m_1075_p_44" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1070)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1070_p_44" 
                                                       value="1" onclick="active_score(1070,44)" />
                                                <input type="text" name="score_m_1070_p_44" 
                                                       id="score_m_1070_p_44" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1069)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1069_p_44" 
                                                       value="1" onclick="active_score(1069,44)" />
                                                <input type="text" name="score_m_1069_p_44" 
                                                       id="score_m_1069_p_44" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="7">Groupe 3</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">Les Bifflettes Maison</th>
                                                                        <th class="th_team2_pool_lol">Stupid Move</th>
                                                                        <th class="th_team2_pool_lol">NIP TA MERE</th>
                                                                        <th class="th_team2_pool_lol">Go Nerf Karma</th>
                                                                        <th class="th_team2_pool_lol">BIT1</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Les Bifflettes Maison</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1076)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1076_p_14" 
                                                       value="1" onclick="active_score(1076,14)" />
                                                <input type="text" name="score_m_1076_p_14" 
                                                       id="score_m_1076_p_14" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1084)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1084_p_14" 
                                                       value="1" onclick="active_score(1084,14)" />
                                                <input type="text" name="score_m_1084_p_14" 
                                                       id="score_m_1084_p_14" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1081)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1081_p_14" 
                                                       value="1" onclick="active_score(1081,14)" />
                                                <input type="text" name="score_m_1081_p_14" 
                                                       id="score_m_1081_p_14" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1082)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1082_p_14" 
                                                       value="1" onclick="active_score(1082,14)" />
                                                <input type="text" name="score_m_1082_p_14" 
                                                       id="score_m_1082_p_14" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Stupid Move</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1076)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1076_p_47" 
                                                       value="1" onclick="active_score(1076,47)" />
                                                <input type="text" name="score_m_1076_p_47" 
                                                       id="score_m_1076_p_47" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1078)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1078_p_47" 
                                                       value="1" onclick="active_score(1078,47)" />
                                                <input type="text" name="score_m_1078_p_47" 
                                                       id="score_m_1078_p_47" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1083)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1083_p_47" 
                                                       value="1" onclick="active_score(1083,47)" />
                                                <input type="text" name="score_m_1083_p_47" 
                                                       id="score_m_1083_p_47" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1085)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1085_p_47" 
                                                       value="1" onclick="active_score(1085,47)" />
                                                <input type="text" name="score_m_1085_p_47" 
                                                       id="score_m_1085_p_47" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">NIP TA MERE</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1084)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1084_p_49" 
                                                       value="1" onclick="active_score(1084,49)" />
                                                <input type="text" name="score_m_1084_p_49" 
                                                       id="score_m_1084_p_49" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1078)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1078_p_49" 
                                                       value="1" onclick="active_score(1078,49)" />
                                                <input type="text" name="score_m_1078_p_49" 
                                                       id="score_m_1078_p_49" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1077)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1077_p_49" 
                                                       value="1" onclick="active_score(1077,49)" />
                                                <input type="text" name="score_m_1077_p_49" 
                                                       id="score_m_1077_p_49" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1080)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1080_p_49" 
                                                       value="1" onclick="active_score(1080,49)" />
                                                <input type="text" name="score_m_1080_p_49" 
                                                       id="score_m_1080_p_49" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Go Nerf Karma</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1081)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1081_p_50" 
                                                       value="1" onclick="active_score(1081,50)" />
                                                <input type="text" name="score_m_1081_p_50" 
                                                       id="score_m_1081_p_50" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1083)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1083_p_50" 
                                                       value="1" onclick="active_score(1083,50)" />
                                                <input type="text" name="score_m_1083_p_50" 
                                                       id="score_m_1083_p_50" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1077)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1077_p_50" 
                                                       value="1" onclick="active_score(1077,50)" />
                                                <input type="text" name="score_m_1077_p_50" 
                                                       id="score_m_1077_p_50" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1079)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1079_p_50" 
                                                       value="1" onclick="active_score(1079,50)" />
                                                <input type="text" name="score_m_1079_p_50" 
                                                       id="score_m_1079_p_50" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">BIT1</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1082)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1082_p_56" 
                                                       value="1" onclick="active_score(1082,56)" />
                                                <input type="text" name="score_m_1082_p_56" 
                                                       id="score_m_1082_p_56" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1085)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1085_p_56" 
                                                       value="1" onclick="active_score(1085,56)" />
                                                <input type="text" name="score_m_1085_p_56" 
                                                       id="score_m_1085_p_56" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1080)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1080_p_56" 
                                                       value="1" onclick="active_score(1080,56)" />
                                                <input type="text" name="score_m_1080_p_56" 
                                                       id="score_m_1080_p_56" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1079)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1079_p_56" 
                                                       value="1" onclick="active_score(1079,56)" />
                                                <input type="text" name="score_m_1079_p_56" 
                                                       id="score_m_1079_p_56" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="7">Groupe 4</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">The Bleeding Rocks</th>
                                                                        <th class="th_team2_pool_lol">Les Michel Forever</th>
                                                                        <th class="th_team2_pool_lol">FPMs</th>
                                                                        <th class="th_team2_pool_lol">Murderous Insanity in ET</th>
                                                                        <th class="th_team2_pool_lol">BIT2</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">The Bleeding Rocks</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1086)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1086_p_10" 
                                                       value="1" onclick="active_score(1086,10)" />
                                                <input type="text" name="score_m_1086_p_10" 
                                                       id="score_m_1086_p_10" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1094)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1094_p_10" 
                                                       value="1" onclick="active_score(1094,10)" />
                                                <input type="text" name="score_m_1094_p_10" 
                                                       id="score_m_1094_p_10" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1091)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1091_p_10" 
                                                       value="1" onclick="active_score(1091,10)" />
                                                <input type="text" name="score_m_1091_p_10" 
                                                       id="score_m_1091_p_10" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1092)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1092_p_10" 
                                                       value="1" onclick="active_score(1092,10)" />
                                                <input type="text" name="score_m_1092_p_10" 
                                                       id="score_m_1092_p_10" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Les Michel Forever</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1086)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1086_p_18" 
                                                       value="1" onclick="active_score(1086,18)" />
                                                <input type="text" name="score_m_1086_p_18" 
                                                       id="score_m_1086_p_18" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1088)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1088_p_18" 
                                                       value="1" onclick="active_score(1088,18)" />
                                                <input type="text" name="score_m_1088_p_18" 
                                                       id="score_m_1088_p_18" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1093)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1093_p_18" 
                                                       value="1" onclick="active_score(1093,18)" />
                                                <input type="text" name="score_m_1093_p_18" 
                                                       id="score_m_1093_p_18" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1095)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1095_p_18" 
                                                       value="1" onclick="active_score(1095,18)" />
                                                <input type="text" name="score_m_1095_p_18" 
                                                       id="score_m_1095_p_18" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">FPMs</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1094)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1094_p_25" 
                                                       value="1" onclick="active_score(1094,25)" />
                                                <input type="text" name="score_m_1094_p_25" 
                                                       id="score_m_1094_p_25" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1088)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1088_p_25" 
                                                       value="1" onclick="active_score(1088,25)" />
                                                <input type="text" name="score_m_1088_p_25" 
                                                       id="score_m_1088_p_25" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1087)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1087_p_25" 
                                                       value="1" onclick="active_score(1087,25)" />
                                                <input type="text" name="score_m_1087_p_25" 
                                                       id="score_m_1087_p_25" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1090)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1090_p_25" 
                                                       value="1" onclick="active_score(1090,25)" />
                                                <input type="text" name="score_m_1090_p_25" 
                                                       id="score_m_1090_p_25" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Murderous Insanity in ET</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1091)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1091_p_30" 
                                                       value="1" onclick="active_score(1091,30)" />
                                                <input type="text" name="score_m_1091_p_30" 
                                                       id="score_m_1091_p_30" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1093)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1093_p_30" 
                                                       value="1" onclick="active_score(1093,30)" />
                                                <input type="text" name="score_m_1093_p_30" 
                                                       id="score_m_1093_p_30" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1087)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1087_p_30" 
                                                       value="1" onclick="active_score(1087,30)" />
                                                <input type="text" name="score_m_1087_p_30" 
                                                       id="score_m_1087_p_30" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1089)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1089_p_30" 
                                                       value="1" onclick="active_score(1089,30)" />
                                                <input type="text" name="score_m_1089_p_30" 
                                                       id="score_m_1089_p_30" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">BIT2</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1092)">
                                                    samedi 15h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1092_p_57" 
                                                       value="1" onclick="active_score(1092,57)" />
                                                <input type="text" name="score_m_1092_p_57" 
                                                       id="score_m_1092_p_57" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1095)">
                                                    samedi 17h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1095_p_57" 
                                                       value="1" onclick="active_score(1095,57)" />
                                                <input type="text" name="score_m_1095_p_57" 
                                                       id="score_m_1095_p_57" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1090)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1090_p_57" 
                                                       value="1" onclick="active_score(1090,57)" />
                                                <input type="text" name="score_m_1090_p_57" 
                                                       id="score_m_1090_p_57" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1089)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1089_p_57" 
                                                       value="1" onclick="active_score(1089,57)" />
                                                <input type="text" name="score_m_1089_p_57" 
                                                       id="score_m_1089_p_57" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="6">Groupe 5</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">Les Tites Fioles</th>
                                                                        <th class="th_team2_pool_lol">Mid Or Feed</th>
                                                                        <th class="th_team2_pool_lol">Don't feed the ginger</th>
                                                                        <th class="th_team2_pool_lol">Crêpière Tefal</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Les Tites Fioles</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1096)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1096_p_7" 
                                                       value="1" onclick="active_score(1096,7)" />
                                                <input type="text" name="score_m_1096_p_7" 
                                                       id="score_m_1096_p_7" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1098)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1098_p_7" 
                                                       value="1" onclick="active_score(1098,7)" />
                                                <input type="text" name="score_m_1098_p_7" 
                                                       id="score_m_1098_p_7" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1100)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1100_p_7" 
                                                       value="1" onclick="active_score(1100,7)" />
                                                <input type="text" name="score_m_1100_p_7" 
                                                       id="score_m_1100_p_7" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Mid Or Feed</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1096)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1096_p_19" 
                                                       value="1" onclick="active_score(1096,19)" />
                                                <input type="text" name="score_m_1096_p_19" 
                                                       id="score_m_1096_p_19" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1101)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1101_p_19" 
                                                       value="1" onclick="active_score(1101,19)" />
                                                <input type="text" name="score_m_1101_p_19" 
                                                       id="score_m_1101_p_19" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1099)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1099_p_19" 
                                                       value="1" onclick="active_score(1099,19)" />
                                                <input type="text" name="score_m_1099_p_19" 
                                                       id="score_m_1099_p_19" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Don't feed the ginger</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1098)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1098_p_24" 
                                                       value="1" onclick="active_score(1098,24)" />
                                                <input type="text" name="score_m_1098_p_24" 
                                                       id="score_m_1098_p_24" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1101)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1101_p_24" 
                                                       value="1" onclick="active_score(1101,24)" />
                                                <input type="text" name="score_m_1101_p_24" 
                                                       id="score_m_1101_p_24" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1097)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1097_p_24" 
                                                       value="1" onclick="active_score(1097,24)" />
                                                <input type="text" name="score_m_1097_p_24" 
                                                       id="score_m_1097_p_24" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Crêpière Tefal</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1100)">
                                                    samedi 13h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1100_p_48" 
                                                       value="1" onclick="active_score(1100,48)" />
                                                <input type="text" name="score_m_1100_p_48" 
                                                       id="score_m_1100_p_48" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1099)">
                                                    samedi 11h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1099_p_48" 
                                                       value="1" onclick="active_score(1099,48)" />
                                                <input type="text" name="score_m_1099_p_48" 
                                                       id="score_m_1099_p_48" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1097)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1097_p_48" 
                                                       value="1" onclick="active_score(1097,48)" />
                                                <input type="text" name="score_m_1097_p_48" 
                                                       id="score_m_1097_p_48" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
                                            <table class="table_pool_lol">
                            <tr>
                                <th class="th_titre_pool_lol" colspan="4">Groupe 6</th>
                            </tr>
                            <tr>
                                <td class="td_vide_pool_lol"></td>
                                                                    <th class="th_team2_pool_lol">Dofusian GAMING</th>
                                                                        <th class="th_team2_pool_lol">Ma grosse bite en plâtre</th>
                                    
                                <th class="th_score_pool_lol">score</th>
                            </tr>
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Dofusian GAMING</th>
                                                                                                                                <td class="td_X_pool_lol">X</td>
                                                                                                                                                                    <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1102)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1102_p_26" 
                                                       value="1" onclick="active_score(1102,26)" />
                                                <input type="text" name="score_m_1102_p_26" 
                                                       id="score_m_1102_p_26" 
                                                       value="0" size="4" />
                                            </td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                            <tr class="tr_pool_lol">
                                    <th class="th_team_pool_lol">Ma grosse bite en plâtre</th>
                                                                                                                                <td class="td_same_pool_lol">
                                                <a href="#" onclick="popup_heure(1102)">
                                                    samedi 09h00
                                                </a>
                                                <br />
                                                <input type="checkbox" name="cb_m_1102_p_52" 
                                                       value="1" onclick="active_score(1102,52)" />
                                                <input type="text" name="score_m_1102_p_52" 
                                                       id="score_m_1102_p_52" 
                                                       value="0" size="4" />
                                            </td>
                                                                                                                                                                    <td class="td_X_pool_lol">X</td>
                                                                            	
                                    <td class="td_score_pool_lol">0</td>
                                </tr>	
                                                    </table>
                        <br><br>
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
            <form method="POST" action="modifier_heure.php">
                <input type="hidden" name="id_match" id="input_id_match" value="0" />
                <input type="hidden" name="id_tournoi" value="1" />
                <input type="hidden" name="page" value="scores" />
                vendredi <input type="radio" name="jour" value="vendredi"> / samedi <input type="radio" name="jour" value="samedi"> / dimanche <input type="radio" name="jour" value="dimanche"><br>
                Heure : <select name="heure">
                                            <option>
                            0                            0
                        </option>
                                            <option>
                            0                            1
                        </option>
                                            <option>
                            0                            2
                        </option>
                                            <option>
                            0                            3
                        </option>
                                            <option>
                            0                            4
                        </option>
                                            <option>
                            0                            5
                        </option>
                                            <option>
                            0                            6
                        </option>
                                            <option>
                            0                            7
                        </option>
                                            <option>
                            0                            8
                        </option>
                                            <option>
                            0                            9
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
                                            <option>
                                                        24
                        </option>
                    
                </select>h<select name="minute">
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
                                            <option>
                                                            60
                                                    </option>
                    
                </select>
                <br />
                <input type="submit" value="Modifier" /><br>
            </form>
        </div>
    </body>
</html><?php }
}
