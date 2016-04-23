<?php
/* Smarty version 3.1.29, created on 2016-03-25 13:17:54
  from "E:\wamp\www\Intranet\view\templates\admin\scoresRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52c728f5156_13203078',
  'file_dependency' => 
  array (
    'b4b4444bdd9b40b07a80a4f304bdff09eaed3658' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresRounds.tpl',
      1 => 1458898235,
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
function content_56f52c728f5156_13203078 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/scores.css" />
        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/scores.js"></script>
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
                <h1>Qualifications TMNF</h1>
                <form method="POST" action="modules/scores_save.php">
                    <input type="hidden" name="id_tournoi" value="3">
                    <input type="SUBMIT" value="Enregistrer">
                    <br>
                                            <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="9">
                                    Groupe 1<br />
                                    <a href="#" onclick="popup_heure(994)" >samedi 18h00</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                                                        <th class="th_manche_pool_tm">Manche 1<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 2<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 3<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 4<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 5<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 6<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 7<br></th>
                                    
                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Canon6etoiles</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_6" value="1" 
                                                   onclick="active_score2(994,1,6)"> 
                                            <input type="text" name="score_m_994_ma_1_p_6" 
                                                   id="score_m_994_ma_1_p_6" 

                                                                                                          value="10"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_6" value="1" 
                                                   onclick="active_score2(994,2,6)"> 
                                            <input type="text" name="score_m_994_ma_2_p_6" 
                                                   id="score_m_994_ma_2_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_6" value="1" 
                                                   onclick="active_score2(994,3,6)"> 
                                            <input type="text" name="score_m_994_ma_3_p_6" 
                                                   id="score_m_994_ma_3_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_6" value="1" 
                                                   onclick="active_score2(994,4,6)"> 
                                            <input type="text" name="score_m_994_ma_4_p_6" 
                                                   id="score_m_994_ma_4_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_6" value="1" 
                                                   onclick="active_score2(994,5,6)"> 
                                            <input type="text" name="score_m_994_ma_5_p_6" 
                                                   id="score_m_994_ma_5_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_6" value="1" 
                                                   onclick="active_score2(994,6,6)"> 
                                            <input type="text" name="score_m_994_ma_6_p_6" 
                                                   id="score_m_994_ma_6_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_6" value="1" 
                                                   onclick="active_score2(994,7,6)"> 
                                            <input type="text" name="score_m_994_ma_7_p_6" 
                                                   id="score_m_994_ma_7_p_6" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">10</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">1ST_Tr45HxC</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_138" value="1" 
                                                   onclick="active_score2(994,1,138)"> 
                                            <input type="text" name="score_m_994_ma_1_p_138" 
                                                   id="score_m_994_ma_1_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_138" value="1" 
                                                   onclick="active_score2(994,2,138)"> 
                                            <input type="text" name="score_m_994_ma_2_p_138" 
                                                   id="score_m_994_ma_2_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_138" value="1" 
                                                   onclick="active_score2(994,3,138)"> 
                                            <input type="text" name="score_m_994_ma_3_p_138" 
                                                   id="score_m_994_ma_3_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_138" value="1" 
                                                   onclick="active_score2(994,4,138)"> 
                                            <input type="text" name="score_m_994_ma_4_p_138" 
                                                   id="score_m_994_ma_4_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_138" value="1" 
                                                   onclick="active_score2(994,5,138)"> 
                                            <input type="text" name="score_m_994_ma_5_p_138" 
                                                   id="score_m_994_ma_5_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_138" value="1" 
                                                   onclick="active_score2(994,6,138)"> 
                                            <input type="text" name="score_m_994_ma_6_p_138" 
                                                   id="score_m_994_ma_6_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_138" value="1" 
                                                   onclick="active_score2(994,7,138)"> 
                                            <input type="text" name="score_m_994_ma_7_p_138" 
                                                   id="score_m_994_ma_7_p_138" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Ash</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_106" value="1" 
                                                   onclick="active_score2(994,1,106)"> 
                                            <input type="text" name="score_m_994_ma_1_p_106" 
                                                   id="score_m_994_ma_1_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_106" value="1" 
                                                   onclick="active_score2(994,2,106)"> 
                                            <input type="text" name="score_m_994_ma_2_p_106" 
                                                   id="score_m_994_ma_2_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_106" value="1" 
                                                   onclick="active_score2(994,3,106)"> 
                                            <input type="text" name="score_m_994_ma_3_p_106" 
                                                   id="score_m_994_ma_3_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_106" value="1" 
                                                   onclick="active_score2(994,4,106)"> 
                                            <input type="text" name="score_m_994_ma_4_p_106" 
                                                   id="score_m_994_ma_4_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_106" value="1" 
                                                   onclick="active_score2(994,5,106)"> 
                                            <input type="text" name="score_m_994_ma_5_p_106" 
                                                   id="score_m_994_ma_5_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_106" value="1" 
                                                   onclick="active_score2(994,6,106)"> 
                                            <input type="text" name="score_m_994_ma_6_p_106" 
                                                   id="score_m_994_ma_6_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_106" value="1" 
                                                   onclick="active_score2(994,7,106)"> 
                                            <input type="text" name="score_m_994_ma_7_p_106" 
                                                   id="score_m_994_ma_7_p_106" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Boulvay</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_29" value="1" 
                                                   onclick="active_score2(994,1,29)"> 
                                            <input type="text" name="score_m_994_ma_1_p_29" 
                                                   id="score_m_994_ma_1_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_29" value="1" 
                                                   onclick="active_score2(994,2,29)"> 
                                            <input type="text" name="score_m_994_ma_2_p_29" 
                                                   id="score_m_994_ma_2_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_29" value="1" 
                                                   onclick="active_score2(994,3,29)"> 
                                            <input type="text" name="score_m_994_ma_3_p_29" 
                                                   id="score_m_994_ma_3_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_29" value="1" 
                                                   onclick="active_score2(994,4,29)"> 
                                            <input type="text" name="score_m_994_ma_4_p_29" 
                                                   id="score_m_994_ma_4_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_29" value="1" 
                                                   onclick="active_score2(994,5,29)"> 
                                            <input type="text" name="score_m_994_ma_5_p_29" 
                                                   id="score_m_994_ma_5_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_29" value="1" 
                                                   onclick="active_score2(994,6,29)"> 
                                            <input type="text" name="score_m_994_ma_6_p_29" 
                                                   id="score_m_994_ma_6_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_29" value="1" 
                                                   onclick="active_score2(994,7,29)"> 
                                            <input type="text" name="score_m_994_ma_7_p_29" 
                                                   id="score_m_994_ma_7_p_29" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Broflovsky</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_199" value="1" 
                                                   onclick="active_score2(994,1,199)"> 
                                            <input type="text" name="score_m_994_ma_1_p_199" 
                                                   id="score_m_994_ma_1_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_199" value="1" 
                                                   onclick="active_score2(994,2,199)"> 
                                            <input type="text" name="score_m_994_ma_2_p_199" 
                                                   id="score_m_994_ma_2_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_199" value="1" 
                                                   onclick="active_score2(994,3,199)"> 
                                            <input type="text" name="score_m_994_ma_3_p_199" 
                                                   id="score_m_994_ma_3_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_199" value="1" 
                                                   onclick="active_score2(994,4,199)"> 
                                            <input type="text" name="score_m_994_ma_4_p_199" 
                                                   id="score_m_994_ma_4_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_199" value="1" 
                                                   onclick="active_score2(994,5,199)"> 
                                            <input type="text" name="score_m_994_ma_5_p_199" 
                                                   id="score_m_994_ma_5_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_199" value="1" 
                                                   onclick="active_score2(994,6,199)"> 
                                            <input type="text" name="score_m_994_ma_6_p_199" 
                                                   id="score_m_994_ma_6_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_199" value="1" 
                                                   onclick="active_score2(994,7,199)"> 
                                            <input type="text" name="score_m_994_ma_7_p_199" 
                                                   id="score_m_994_ma_7_p_199" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">cloud1213</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_171" value="1" 
                                                   onclick="active_score2(994,1,171)"> 
                                            <input type="text" name="score_m_994_ma_1_p_171" 
                                                   id="score_m_994_ma_1_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_171" value="1" 
                                                   onclick="active_score2(994,2,171)"> 
                                            <input type="text" name="score_m_994_ma_2_p_171" 
                                                   id="score_m_994_ma_2_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_171" value="1" 
                                                   onclick="active_score2(994,3,171)"> 
                                            <input type="text" name="score_m_994_ma_3_p_171" 
                                                   id="score_m_994_ma_3_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_171" value="1" 
                                                   onclick="active_score2(994,4,171)"> 
                                            <input type="text" name="score_m_994_ma_4_p_171" 
                                                   id="score_m_994_ma_4_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_171" value="1" 
                                                   onclick="active_score2(994,5,171)"> 
                                            <input type="text" name="score_m_994_ma_5_p_171" 
                                                   id="score_m_994_ma_5_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_171" value="1" 
                                                   onclick="active_score2(994,6,171)"> 
                                            <input type="text" name="score_m_994_ma_6_p_171" 
                                                   id="score_m_994_ma_6_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_171" value="1" 
                                                   onclick="active_score2(994,7,171)"> 
                                            <input type="text" name="score_m_994_ma_7_p_171" 
                                                   id="score_m_994_ma_7_p_171" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Danilus</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_111" value="1" 
                                                   onclick="active_score2(994,1,111)"> 
                                            <input type="text" name="score_m_994_ma_1_p_111" 
                                                   id="score_m_994_ma_1_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_111" value="1" 
                                                   onclick="active_score2(994,2,111)"> 
                                            <input type="text" name="score_m_994_ma_2_p_111" 
                                                   id="score_m_994_ma_2_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_111" value="1" 
                                                   onclick="active_score2(994,3,111)"> 
                                            <input type="text" name="score_m_994_ma_3_p_111" 
                                                   id="score_m_994_ma_3_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_111" value="1" 
                                                   onclick="active_score2(994,4,111)"> 
                                            <input type="text" name="score_m_994_ma_4_p_111" 
                                                   id="score_m_994_ma_4_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_111" value="1" 
                                                   onclick="active_score2(994,5,111)"> 
                                            <input type="text" name="score_m_994_ma_5_p_111" 
                                                   id="score_m_994_ma_5_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_111" value="1" 
                                                   onclick="active_score2(994,6,111)"> 
                                            <input type="text" name="score_m_994_ma_6_p_111" 
                                                   id="score_m_994_ma_6_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_111" value="1" 
                                                   onclick="active_score2(994,7,111)"> 
                                            <input type="text" name="score_m_994_ma_7_p_111" 
                                                   id="score_m_994_ma_7_p_111" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">gosh101</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_51" value="1" 
                                                   onclick="active_score2(994,1,51)"> 
                                            <input type="text" name="score_m_994_ma_1_p_51" 
                                                   id="score_m_994_ma_1_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_51" value="1" 
                                                   onclick="active_score2(994,2,51)"> 
                                            <input type="text" name="score_m_994_ma_2_p_51" 
                                                   id="score_m_994_ma_2_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_51" value="1" 
                                                   onclick="active_score2(994,3,51)"> 
                                            <input type="text" name="score_m_994_ma_3_p_51" 
                                                   id="score_m_994_ma_3_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_51" value="1" 
                                                   onclick="active_score2(994,4,51)"> 
                                            <input type="text" name="score_m_994_ma_4_p_51" 
                                                   id="score_m_994_ma_4_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_51" value="1" 
                                                   onclick="active_score2(994,5,51)"> 
                                            <input type="text" name="score_m_994_ma_5_p_51" 
                                                   id="score_m_994_ma_5_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_51" value="1" 
                                                   onclick="active_score2(994,6,51)"> 
                                            <input type="text" name="score_m_994_ma_6_p_51" 
                                                   id="score_m_994_ma_6_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_51" value="1" 
                                                   onclick="active_score2(994,7,51)"> 
                                            <input type="text" name="score_m_994_ma_7_p_51" 
                                                   id="score_m_994_ma_7_p_51" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">gwennytoux</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_1_p_97" value="1" 
                                                   onclick="active_score2(994,1,97)"> 
                                            <input type="text" name="score_m_994_ma_1_p_97" 
                                                   id="score_m_994_ma_1_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_2_p_97" value="1" 
                                                   onclick="active_score2(994,2,97)"> 
                                            <input type="text" name="score_m_994_ma_2_p_97" 
                                                   id="score_m_994_ma_2_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_3_p_97" value="1" 
                                                   onclick="active_score2(994,3,97)"> 
                                            <input type="text" name="score_m_994_ma_3_p_97" 
                                                   id="score_m_994_ma_3_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_4_p_97" value="1" 
                                                   onclick="active_score2(994,4,97)"> 
                                            <input type="text" name="score_m_994_ma_4_p_97" 
                                                   id="score_m_994_ma_4_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_5_p_97" value="1" 
                                                   onclick="active_score2(994,5,97)"> 
                                            <input type="text" name="score_m_994_ma_5_p_97" 
                                                   id="score_m_994_ma_5_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_6_p_97" value="1" 
                                                   onclick="active_score2(994,6,97)"> 
                                            <input type="text" name="score_m_994_ma_6_p_97" 
                                                   id="score_m_994_ma_6_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_994_ma_7_p_97" value="1" 
                                                   onclick="active_score2(994,7,97)"> 
                                            <input type="text" name="score_m_994_ma_7_p_97" 
                                                   id="score_m_994_ma_7_p_97" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </table>
                        <br><br>
                                            <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="9">
                                    Groupe 2<br />
                                    <a href="#" onclick="popup_heure(995)" >samedi 18h00</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                                                        <th class="th_manche_pool_tm">Manche 1<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 2<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 3<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 4<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 5<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 6<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 7<br></th>
                                    
                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">lion24</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_5" value="1" 
                                                   onclick="active_score2(995,1,5)"> 
                                            <input type="text" name="score_m_995_ma_1_p_5" 
                                                   id="score_m_995_ma_1_p_5" 

                                                                                                          value="5"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_5" value="1" 
                                                   onclick="active_score2(995,2,5)"> 
                                            <input type="text" name="score_m_995_ma_2_p_5" 
                                                   id="score_m_995_ma_2_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_5" value="1" 
                                                   onclick="active_score2(995,3,5)"> 
                                            <input type="text" name="score_m_995_ma_3_p_5" 
                                                   id="score_m_995_ma_3_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_5" value="1" 
                                                   onclick="active_score2(995,4,5)"> 
                                            <input type="text" name="score_m_995_ma_4_p_5" 
                                                   id="score_m_995_ma_4_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_5" value="1" 
                                                   onclick="active_score2(995,5,5)"> 
                                            <input type="text" name="score_m_995_ma_5_p_5" 
                                                   id="score_m_995_ma_5_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_5" value="1" 
                                                   onclick="active_score2(995,6,5)"> 
                                            <input type="text" name="score_m_995_ma_6_p_5" 
                                                   id="score_m_995_ma_6_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_5" value="1" 
                                                   onclick="active_score2(995,7,5)"> 
                                            <input type="text" name="score_m_995_ma_7_p_5" 
                                                   id="score_m_995_ma_7_p_5" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">5</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Happy Nems</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_49" value="1" 
                                                   onclick="active_score2(995,1,49)"> 
                                            <input type="text" name="score_m_995_ma_1_p_49" 
                                                   id="score_m_995_ma_1_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_49" value="1" 
                                                   onclick="active_score2(995,2,49)"> 
                                            <input type="text" name="score_m_995_ma_2_p_49" 
                                                   id="score_m_995_ma_2_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_49" value="1" 
                                                   onclick="active_score2(995,3,49)"> 
                                            <input type="text" name="score_m_995_ma_3_p_49" 
                                                   id="score_m_995_ma_3_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_49" value="1" 
                                                   onclick="active_score2(995,4,49)"> 
                                            <input type="text" name="score_m_995_ma_4_p_49" 
                                                   id="score_m_995_ma_4_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_49" value="1" 
                                                   onclick="active_score2(995,5,49)"> 
                                            <input type="text" name="score_m_995_ma_5_p_49" 
                                                   id="score_m_995_ma_5_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_49" value="1" 
                                                   onclick="active_score2(995,6,49)"> 
                                            <input type="text" name="score_m_995_ma_6_p_49" 
                                                   id="score_m_995_ma_6_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_49" value="1" 
                                                   onclick="active_score2(995,7,49)"> 
                                            <input type="text" name="score_m_995_ma_7_p_49" 
                                                   id="score_m_995_ma_7_p_49" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">iGlooW</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_53" value="1" 
                                                   onclick="active_score2(995,1,53)"> 
                                            <input type="text" name="score_m_995_ma_1_p_53" 
                                                   id="score_m_995_ma_1_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_53" value="1" 
                                                   onclick="active_score2(995,2,53)"> 
                                            <input type="text" name="score_m_995_ma_2_p_53" 
                                                   id="score_m_995_ma_2_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_53" value="1" 
                                                   onclick="active_score2(995,3,53)"> 
                                            <input type="text" name="score_m_995_ma_3_p_53" 
                                                   id="score_m_995_ma_3_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_53" value="1" 
                                                   onclick="active_score2(995,4,53)"> 
                                            <input type="text" name="score_m_995_ma_4_p_53" 
                                                   id="score_m_995_ma_4_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_53" value="1" 
                                                   onclick="active_score2(995,5,53)"> 
                                            <input type="text" name="score_m_995_ma_5_p_53" 
                                                   id="score_m_995_ma_5_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_53" value="1" 
                                                   onclick="active_score2(995,6,53)"> 
                                            <input type="text" name="score_m_995_ma_6_p_53" 
                                                   id="score_m_995_ma_6_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_53" value="1" 
                                                   onclick="active_score2(995,7,53)"> 
                                            <input type="text" name="score_m_995_ma_7_p_53" 
                                                   id="score_m_995_ma_7_p_53" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">JankulaseK</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_62" value="1" 
                                                   onclick="active_score2(995,1,62)"> 
                                            <input type="text" name="score_m_995_ma_1_p_62" 
                                                   id="score_m_995_ma_1_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_62" value="1" 
                                                   onclick="active_score2(995,2,62)"> 
                                            <input type="text" name="score_m_995_ma_2_p_62" 
                                                   id="score_m_995_ma_2_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_62" value="1" 
                                                   onclick="active_score2(995,3,62)"> 
                                            <input type="text" name="score_m_995_ma_3_p_62" 
                                                   id="score_m_995_ma_3_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_62" value="1" 
                                                   onclick="active_score2(995,4,62)"> 
                                            <input type="text" name="score_m_995_ma_4_p_62" 
                                                   id="score_m_995_ma_4_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_62" value="1" 
                                                   onclick="active_score2(995,5,62)"> 
                                            <input type="text" name="score_m_995_ma_5_p_62" 
                                                   id="score_m_995_ma_5_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_62" value="1" 
                                                   onclick="active_score2(995,6,62)"> 
                                            <input type="text" name="score_m_995_ma_6_p_62" 
                                                   id="score_m_995_ma_6_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_62" value="1" 
                                                   onclick="active_score2(995,7,62)"> 
                                            <input type="text" name="score_m_995_ma_7_p_62" 
                                                   id="score_m_995_ma_7_p_62" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">LamboX</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_47" value="1" 
                                                   onclick="active_score2(995,1,47)"> 
                                            <input type="text" name="score_m_995_ma_1_p_47" 
                                                   id="score_m_995_ma_1_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_47" value="1" 
                                                   onclick="active_score2(995,2,47)"> 
                                            <input type="text" name="score_m_995_ma_2_p_47" 
                                                   id="score_m_995_ma_2_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_47" value="1" 
                                                   onclick="active_score2(995,3,47)"> 
                                            <input type="text" name="score_m_995_ma_3_p_47" 
                                                   id="score_m_995_ma_3_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_47" value="1" 
                                                   onclick="active_score2(995,4,47)"> 
                                            <input type="text" name="score_m_995_ma_4_p_47" 
                                                   id="score_m_995_ma_4_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_47" value="1" 
                                                   onclick="active_score2(995,5,47)"> 
                                            <input type="text" name="score_m_995_ma_5_p_47" 
                                                   id="score_m_995_ma_5_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_47" value="1" 
                                                   onclick="active_score2(995,6,47)"> 
                                            <input type="text" name="score_m_995_ma_6_p_47" 
                                                   id="score_m_995_ma_6_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_47" value="1" 
                                                   onclick="active_score2(995,7,47)"> 
                                            <input type="text" name="score_m_995_ma_7_p_47" 
                                                   id="score_m_995_ma_7_p_47" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">landre164</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_91" value="1" 
                                                   onclick="active_score2(995,1,91)"> 
                                            <input type="text" name="score_m_995_ma_1_p_91" 
                                                   id="score_m_995_ma_1_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_91" value="1" 
                                                   onclick="active_score2(995,2,91)"> 
                                            <input type="text" name="score_m_995_ma_2_p_91" 
                                                   id="score_m_995_ma_2_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_91" value="1" 
                                                   onclick="active_score2(995,3,91)"> 
                                            <input type="text" name="score_m_995_ma_3_p_91" 
                                                   id="score_m_995_ma_3_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_91" value="1" 
                                                   onclick="active_score2(995,4,91)"> 
                                            <input type="text" name="score_m_995_ma_4_p_91" 
                                                   id="score_m_995_ma_4_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_91" value="1" 
                                                   onclick="active_score2(995,5,91)"> 
                                            <input type="text" name="score_m_995_ma_5_p_91" 
                                                   id="score_m_995_ma_5_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_91" value="1" 
                                                   onclick="active_score2(995,6,91)"> 
                                            <input type="text" name="score_m_995_ma_6_p_91" 
                                                   id="score_m_995_ma_6_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_91" value="1" 
                                                   onclick="active_score2(995,7,91)"> 
                                            <input type="text" name="score_m_995_ma_7_p_91" 
                                                   id="score_m_995_ma_7_p_91" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Loraline</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_163" value="1" 
                                                   onclick="active_score2(995,1,163)"> 
                                            <input type="text" name="score_m_995_ma_1_p_163" 
                                                   id="score_m_995_ma_1_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_163" value="1" 
                                                   onclick="active_score2(995,2,163)"> 
                                            <input type="text" name="score_m_995_ma_2_p_163" 
                                                   id="score_m_995_ma_2_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_163" value="1" 
                                                   onclick="active_score2(995,3,163)"> 
                                            <input type="text" name="score_m_995_ma_3_p_163" 
                                                   id="score_m_995_ma_3_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_163" value="1" 
                                                   onclick="active_score2(995,4,163)"> 
                                            <input type="text" name="score_m_995_ma_4_p_163" 
                                                   id="score_m_995_ma_4_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_163" value="1" 
                                                   onclick="active_score2(995,5,163)"> 
                                            <input type="text" name="score_m_995_ma_5_p_163" 
                                                   id="score_m_995_ma_5_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_163" value="1" 
                                                   onclick="active_score2(995,6,163)"> 
                                            <input type="text" name="score_m_995_ma_6_p_163" 
                                                   id="score_m_995_ma_6_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_163" value="1" 
                                                   onclick="active_score2(995,7,163)"> 
                                            <input type="text" name="score_m_995_ma_7_p_163" 
                                                   id="score_m_995_ma_7_p_163" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Mikeman</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_148" value="1" 
                                                   onclick="active_score2(995,1,148)"> 
                                            <input type="text" name="score_m_995_ma_1_p_148" 
                                                   id="score_m_995_ma_1_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_148" value="1" 
                                                   onclick="active_score2(995,2,148)"> 
                                            <input type="text" name="score_m_995_ma_2_p_148" 
                                                   id="score_m_995_ma_2_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_148" value="1" 
                                                   onclick="active_score2(995,3,148)"> 
                                            <input type="text" name="score_m_995_ma_3_p_148" 
                                                   id="score_m_995_ma_3_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_148" value="1" 
                                                   onclick="active_score2(995,4,148)"> 
                                            <input type="text" name="score_m_995_ma_4_p_148" 
                                                   id="score_m_995_ma_4_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_148" value="1" 
                                                   onclick="active_score2(995,5,148)"> 
                                            <input type="text" name="score_m_995_ma_5_p_148" 
                                                   id="score_m_995_ma_5_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_148" value="1" 
                                                   onclick="active_score2(995,6,148)"> 
                                            <input type="text" name="score_m_995_ma_6_p_148" 
                                                   id="score_m_995_ma_6_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_148" value="1" 
                                                   onclick="active_score2(995,7,148)"> 
                                            <input type="text" name="score_m_995_ma_7_p_148" 
                                                   id="score_m_995_ma_7_p_148" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">NamaTroX</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_50" value="1" 
                                                   onclick="active_score2(995,1,50)"> 
                                            <input type="text" name="score_m_995_ma_1_p_50" 
                                                   id="score_m_995_ma_1_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_50" value="1" 
                                                   onclick="active_score2(995,2,50)"> 
                                            <input type="text" name="score_m_995_ma_2_p_50" 
                                                   id="score_m_995_ma_2_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_50" value="1" 
                                                   onclick="active_score2(995,3,50)"> 
                                            <input type="text" name="score_m_995_ma_3_p_50" 
                                                   id="score_m_995_ma_3_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_50" value="1" 
                                                   onclick="active_score2(995,4,50)"> 
                                            <input type="text" name="score_m_995_ma_4_p_50" 
                                                   id="score_m_995_ma_4_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_50" value="1" 
                                                   onclick="active_score2(995,5,50)"> 
                                            <input type="text" name="score_m_995_ma_5_p_50" 
                                                   id="score_m_995_ma_5_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_50" value="1" 
                                                   onclick="active_score2(995,6,50)"> 
                                            <input type="text" name="score_m_995_ma_6_p_50" 
                                                   id="score_m_995_ma_6_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_50" value="1" 
                                                   onclick="active_score2(995,7,50)"> 
                                            <input type="text" name="score_m_995_ma_7_p_50" 
                                                   id="score_m_995_ma_7_p_50" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Navarro</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_1_p_195" value="1" 
                                                   onclick="active_score2(995,1,195)"> 
                                            <input type="text" name="score_m_995_ma_1_p_195" 
                                                   id="score_m_995_ma_1_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_2_p_195" value="1" 
                                                   onclick="active_score2(995,2,195)"> 
                                            <input type="text" name="score_m_995_ma_2_p_195" 
                                                   id="score_m_995_ma_2_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_3_p_195" value="1" 
                                                   onclick="active_score2(995,3,195)"> 
                                            <input type="text" name="score_m_995_ma_3_p_195" 
                                                   id="score_m_995_ma_3_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_4_p_195" value="1" 
                                                   onclick="active_score2(995,4,195)"> 
                                            <input type="text" name="score_m_995_ma_4_p_195" 
                                                   id="score_m_995_ma_4_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_5_p_195" value="1" 
                                                   onclick="active_score2(995,5,195)"> 
                                            <input type="text" name="score_m_995_ma_5_p_195" 
                                                   id="score_m_995_ma_5_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_6_p_195" value="1" 
                                                   onclick="active_score2(995,6,195)"> 
                                            <input type="text" name="score_m_995_ma_6_p_195" 
                                                   id="score_m_995_ma_6_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_995_ma_7_p_195" value="1" 
                                                   onclick="active_score2(995,7,195)"> 
                                            <input type="text" name="score_m_995_ma_7_p_195" 
                                                   id="score_m_995_ma_7_p_195" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </table>
                        <br><br>
                                            <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="9">
                                    Groupe 3<br />
                                    <a href="#" onclick="popup_heure(996)" >samedi 18h00</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                                                        <th class="th_manche_pool_tm">Manche 1<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 2<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 3<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 4<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 5<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 6<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 7<br></th>
                                    
                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Zelof</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_4" value="1" 
                                                   onclick="active_score2(996,1,4)"> 
                                            <input type="text" name="score_m_996_ma_1_p_4" 
                                                   id="score_m_996_ma_1_p_4" 

                                                                                                          value="2"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_4" value="1" 
                                                   onclick="active_score2(996,2,4)"> 
                                            <input type="text" name="score_m_996_ma_2_p_4" 
                                                   id="score_m_996_ma_2_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_4" value="1" 
                                                   onclick="active_score2(996,3,4)"> 
                                            <input type="text" name="score_m_996_ma_3_p_4" 
                                                   id="score_m_996_ma_3_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_4" value="1" 
                                                   onclick="active_score2(996,4,4)"> 
                                            <input type="text" name="score_m_996_ma_4_p_4" 
                                                   id="score_m_996_ma_4_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_4" value="1" 
                                                   onclick="active_score2(996,5,4)"> 
                                            <input type="text" name="score_m_996_ma_5_p_4" 
                                                   id="score_m_996_ma_5_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_4" value="1" 
                                                   onclick="active_score2(996,6,4)"> 
                                            <input type="text" name="score_m_996_ma_6_p_4" 
                                                   id="score_m_996_ma_6_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_4" value="1" 
                                                   onclick="active_score2(996,7,4)"> 
                                            <input type="text" name="score_m_996_ma_7_p_4" 
                                                   id="score_m_996_ma_7_p_4" 

                                                                                                          value=""
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">2</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">PuLse Olen</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_166" value="1" 
                                                   onclick="active_score2(996,1,166)"> 
                                            <input type="text" name="score_m_996_ma_1_p_166" 
                                                   id="score_m_996_ma_1_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_166" value="1" 
                                                   onclick="active_score2(996,2,166)"> 
                                            <input type="text" name="score_m_996_ma_2_p_166" 
                                                   id="score_m_996_ma_2_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_166" value="1" 
                                                   onclick="active_score2(996,3,166)"> 
                                            <input type="text" name="score_m_996_ma_3_p_166" 
                                                   id="score_m_996_ma_3_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_166" value="1" 
                                                   onclick="active_score2(996,4,166)"> 
                                            <input type="text" name="score_m_996_ma_4_p_166" 
                                                   id="score_m_996_ma_4_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_166" value="1" 
                                                   onclick="active_score2(996,5,166)"> 
                                            <input type="text" name="score_m_996_ma_5_p_166" 
                                                   id="score_m_996_ma_5_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_166" value="1" 
                                                   onclick="active_score2(996,6,166)"> 
                                            <input type="text" name="score_m_996_ma_6_p_166" 
                                                   id="score_m_996_ma_6_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_166" value="1" 
                                                   onclick="active_score2(996,7,166)"> 
                                            <input type="text" name="score_m_996_ma_7_p_166" 
                                                   id="score_m_996_ma_7_p_166" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">RaKyora</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_170" value="1" 
                                                   onclick="active_score2(996,1,170)"> 
                                            <input type="text" name="score_m_996_ma_1_p_170" 
                                                   id="score_m_996_ma_1_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_170" value="1" 
                                                   onclick="active_score2(996,2,170)"> 
                                            <input type="text" name="score_m_996_ma_2_p_170" 
                                                   id="score_m_996_ma_2_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_170" value="1" 
                                                   onclick="active_score2(996,3,170)"> 
                                            <input type="text" name="score_m_996_ma_3_p_170" 
                                                   id="score_m_996_ma_3_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_170" value="1" 
                                                   onclick="active_score2(996,4,170)"> 
                                            <input type="text" name="score_m_996_ma_4_p_170" 
                                                   id="score_m_996_ma_4_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_170" value="1" 
                                                   onclick="active_score2(996,5,170)"> 
                                            <input type="text" name="score_m_996_ma_5_p_170" 
                                                   id="score_m_996_ma_5_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_170" value="1" 
                                                   onclick="active_score2(996,6,170)"> 
                                            <input type="text" name="score_m_996_ma_6_p_170" 
                                                   id="score_m_996_ma_6_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_170" value="1" 
                                                   onclick="active_score2(996,7,170)"> 
                                            <input type="text" name="score_m_996_ma_7_p_170" 
                                                   id="score_m_996_ma_7_p_170" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">RectoO</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_25" value="1" 
                                                   onclick="active_score2(996,1,25)"> 
                                            <input type="text" name="score_m_996_ma_1_p_25" 
                                                   id="score_m_996_ma_1_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_25" value="1" 
                                                   onclick="active_score2(996,2,25)"> 
                                            <input type="text" name="score_m_996_ma_2_p_25" 
                                                   id="score_m_996_ma_2_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_25" value="1" 
                                                   onclick="active_score2(996,3,25)"> 
                                            <input type="text" name="score_m_996_ma_3_p_25" 
                                                   id="score_m_996_ma_3_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_25" value="1" 
                                                   onclick="active_score2(996,4,25)"> 
                                            <input type="text" name="score_m_996_ma_4_p_25" 
                                                   id="score_m_996_ma_4_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_25" value="1" 
                                                   onclick="active_score2(996,5,25)"> 
                                            <input type="text" name="score_m_996_ma_5_p_25" 
                                                   id="score_m_996_ma_5_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_25" value="1" 
                                                   onclick="active_score2(996,6,25)"> 
                                            <input type="text" name="score_m_996_ma_6_p_25" 
                                                   id="score_m_996_ma_6_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_25" value="1" 
                                                   onclick="active_score2(996,7,25)"> 
                                            <input type="text" name="score_m_996_ma_7_p_25" 
                                                   id="score_m_996_ma_7_p_25" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">roden164</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_90" value="1" 
                                                   onclick="active_score2(996,1,90)"> 
                                            <input type="text" name="score_m_996_ma_1_p_90" 
                                                   id="score_m_996_ma_1_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_90" value="1" 
                                                   onclick="active_score2(996,2,90)"> 
                                            <input type="text" name="score_m_996_ma_2_p_90" 
                                                   id="score_m_996_ma_2_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_90" value="1" 
                                                   onclick="active_score2(996,3,90)"> 
                                            <input type="text" name="score_m_996_ma_3_p_90" 
                                                   id="score_m_996_ma_3_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_90" value="1" 
                                                   onclick="active_score2(996,4,90)"> 
                                            <input type="text" name="score_m_996_ma_4_p_90" 
                                                   id="score_m_996_ma_4_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_90" value="1" 
                                                   onclick="active_score2(996,5,90)"> 
                                            <input type="text" name="score_m_996_ma_5_p_90" 
                                                   id="score_m_996_ma_5_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_90" value="1" 
                                                   onclick="active_score2(996,6,90)"> 
                                            <input type="text" name="score_m_996_ma_6_p_90" 
                                                   id="score_m_996_ma_6_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_90" value="1" 
                                                   onclick="active_score2(996,7,90)"> 
                                            <input type="text" name="score_m_996_ma_7_p_90" 
                                                   id="score_m_996_ma_7_p_90" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">rougetta</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_127" value="1" 
                                                   onclick="active_score2(996,1,127)"> 
                                            <input type="text" name="score_m_996_ma_1_p_127" 
                                                   id="score_m_996_ma_1_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_127" value="1" 
                                                   onclick="active_score2(996,2,127)"> 
                                            <input type="text" name="score_m_996_ma_2_p_127" 
                                                   id="score_m_996_ma_2_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_127" value="1" 
                                                   onclick="active_score2(996,3,127)"> 
                                            <input type="text" name="score_m_996_ma_3_p_127" 
                                                   id="score_m_996_ma_3_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_127" value="1" 
                                                   onclick="active_score2(996,4,127)"> 
                                            <input type="text" name="score_m_996_ma_4_p_127" 
                                                   id="score_m_996_ma_4_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_127" value="1" 
                                                   onclick="active_score2(996,5,127)"> 
                                            <input type="text" name="score_m_996_ma_5_p_127" 
                                                   id="score_m_996_ma_5_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_127" value="1" 
                                                   onclick="active_score2(996,6,127)"> 
                                            <input type="text" name="score_m_996_ma_6_p_127" 
                                                   id="score_m_996_ma_6_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_127" value="1" 
                                                   onclick="active_score2(996,7,127)"> 
                                            <input type="text" name="score_m_996_ma_7_p_127" 
                                                   id="score_m_996_ma_7_p_127" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Salcatin</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_56" value="1" 
                                                   onclick="active_score2(996,1,56)"> 
                                            <input type="text" name="score_m_996_ma_1_p_56" 
                                                   id="score_m_996_ma_1_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_56" value="1" 
                                                   onclick="active_score2(996,2,56)"> 
                                            <input type="text" name="score_m_996_ma_2_p_56" 
                                                   id="score_m_996_ma_2_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_56" value="1" 
                                                   onclick="active_score2(996,3,56)"> 
                                            <input type="text" name="score_m_996_ma_3_p_56" 
                                                   id="score_m_996_ma_3_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_56" value="1" 
                                                   onclick="active_score2(996,4,56)"> 
                                            <input type="text" name="score_m_996_ma_4_p_56" 
                                                   id="score_m_996_ma_4_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_56" value="1" 
                                                   onclick="active_score2(996,5,56)"> 
                                            <input type="text" name="score_m_996_ma_5_p_56" 
                                                   id="score_m_996_ma_5_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_56" value="1" 
                                                   onclick="active_score2(996,6,56)"> 
                                            <input type="text" name="score_m_996_ma_6_p_56" 
                                                   id="score_m_996_ma_6_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_56" value="1" 
                                                   onclick="active_score2(996,7,56)"> 
                                            <input type="text" name="score_m_996_ma_7_p_56" 
                                                   id="score_m_996_ma_7_p_56" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">satanasth250</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_82" value="1" 
                                                   onclick="active_score2(996,1,82)"> 
                                            <input type="text" name="score_m_996_ma_1_p_82" 
                                                   id="score_m_996_ma_1_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_82" value="1" 
                                                   onclick="active_score2(996,2,82)"> 
                                            <input type="text" name="score_m_996_ma_2_p_82" 
                                                   id="score_m_996_ma_2_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_82" value="1" 
                                                   onclick="active_score2(996,3,82)"> 
                                            <input type="text" name="score_m_996_ma_3_p_82" 
                                                   id="score_m_996_ma_3_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_82" value="1" 
                                                   onclick="active_score2(996,4,82)"> 
                                            <input type="text" name="score_m_996_ma_4_p_82" 
                                                   id="score_m_996_ma_4_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_82" value="1" 
                                                   onclick="active_score2(996,5,82)"> 
                                            <input type="text" name="score_m_996_ma_5_p_82" 
                                                   id="score_m_996_ma_5_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_82" value="1" 
                                                   onclick="active_score2(996,6,82)"> 
                                            <input type="text" name="score_m_996_ma_6_p_82" 
                                                   id="score_m_996_ma_6_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_82" value="1" 
                                                   onclick="active_score2(996,7,82)"> 
                                            <input type="text" name="score_m_996_ma_7_p_82" 
                                                   id="score_m_996_ma_7_p_82" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Shyrøw</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_126" value="1" 
                                                   onclick="active_score2(996,1,126)"> 
                                            <input type="text" name="score_m_996_ma_1_p_126" 
                                                   id="score_m_996_ma_1_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_126" value="1" 
                                                   onclick="active_score2(996,2,126)"> 
                                            <input type="text" name="score_m_996_ma_2_p_126" 
                                                   id="score_m_996_ma_2_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_126" value="1" 
                                                   onclick="active_score2(996,3,126)"> 
                                            <input type="text" name="score_m_996_ma_3_p_126" 
                                                   id="score_m_996_ma_3_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_126" value="1" 
                                                   onclick="active_score2(996,4,126)"> 
                                            <input type="text" name="score_m_996_ma_4_p_126" 
                                                   id="score_m_996_ma_4_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_126" value="1" 
                                                   onclick="active_score2(996,5,126)"> 
                                            <input type="text" name="score_m_996_ma_5_p_126" 
                                                   id="score_m_996_ma_5_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_126" value="1" 
                                                   onclick="active_score2(996,6,126)"> 
                                            <input type="text" name="score_m_996_ma_6_p_126" 
                                                   id="score_m_996_ma_6_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_126" value="1" 
                                                   onclick="active_score2(996,7,126)"> 
                                            <input type="text" name="score_m_996_ma_7_p_126" 
                                                   id="score_m_996_ma_7_p_126" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">skuyz</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_1_p_129" value="1" 
                                                   onclick="active_score2(996,1,129)"> 
                                            <input type="text" name="score_m_996_ma_1_p_129" 
                                                   id="score_m_996_ma_1_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_2_p_129" value="1" 
                                                   onclick="active_score2(996,2,129)"> 
                                            <input type="text" name="score_m_996_ma_2_p_129" 
                                                   id="score_m_996_ma_2_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_3_p_129" value="1" 
                                                   onclick="active_score2(996,3,129)"> 
                                            <input type="text" name="score_m_996_ma_3_p_129" 
                                                   id="score_m_996_ma_3_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_4_p_129" value="1" 
                                                   onclick="active_score2(996,4,129)"> 
                                            <input type="text" name="score_m_996_ma_4_p_129" 
                                                   id="score_m_996_ma_4_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_5_p_129" value="1" 
                                                   onclick="active_score2(996,5,129)"> 
                                            <input type="text" name="score_m_996_ma_5_p_129" 
                                                   id="score_m_996_ma_5_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_6_p_129" value="1" 
                                                   onclick="active_score2(996,6,129)"> 
                                            <input type="text" name="score_m_996_ma_6_p_129" 
                                                   id="score_m_996_ma_6_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_996_ma_7_p_129" value="1" 
                                                   onclick="active_score2(996,7,129)"> 
                                            <input type="text" name="score_m_996_ma_7_p_129" 
                                                   id="score_m_996_ma_7_p_129" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">0</td>
                                </tr>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </table>
                        <br><br>
                                            <table class="table_pool_tm">
                            <tr>
                                <th class="th_titre_pool_tm" colspan="9">
                                    Groupe 4<br />
                                    <a href="#" onclick="popup_heure(997)" >samedi 18h00</a>
                                </th>
                            </tr>
                            <tr>
                                <th class="th_part_pool_tm">Participants</th>
                                                                        <th class="th_manche_pool_tm">Manche 1<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 2<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 3<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 4<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 5<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 6<br></th>
                                                                        <th class="th_manche_pool_tm">Manche 7<br></th>
                                    
                                <th class="th_score_pool_tm">Points</th>
                            </tr>

                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Thaerith</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_23" value="1" 
                                                   onclick="active_score2(997,1,23)"> 
                                            <input type="text" name="score_m_997_ma_1_p_23" 
                                                   id="score_m_997_ma_1_p_23" 

                                                                                                          value="88"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_23" value="1" 
                                                   onclick="active_score2(997,2,23)"> 
                                            <input type="text" name="score_m_997_ma_2_p_23" 
                                                   id="score_m_997_ma_2_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_23" value="1" 
                                                   onclick="active_score2(997,3,23)"> 
                                            <input type="text" name="score_m_997_ma_3_p_23" 
                                                   id="score_m_997_ma_3_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_23" value="1" 
                                                   onclick="active_score2(997,4,23)"> 
                                            <input type="text" name="score_m_997_ma_4_p_23" 
                                                   id="score_m_997_ma_4_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_23" value="1" 
                                                   onclick="active_score2(997,5,23)"> 
                                            <input type="text" name="score_m_997_ma_5_p_23" 
                                                   id="score_m_997_ma_5_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_23" value="1" 
                                                   onclick="active_score2(997,6,23)"> 
                                            <input type="text" name="score_m_997_ma_6_p_23" 
                                                   id="score_m_997_ma_6_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_23" value="1" 
                                                   onclick="active_score2(997,7,23)"> 
                                            <input type="text" name="score_m_997_ma_7_p_23" 
                                                   id="score_m_997_ma_7_p_23" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">88</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">thotwith</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_128" value="1" 
                                                   onclick="active_score2(997,1,128)"> 
                                            <input type="text" name="score_m_997_ma_1_p_128" 
                                                   id="score_m_997_ma_1_p_128" 

                                                                                                          value="54"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_128" value="1" 
                                                   onclick="active_score2(997,2,128)"> 
                                            <input type="text" name="score_m_997_ma_2_p_128" 
                                                   id="score_m_997_ma_2_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_128" value="1" 
                                                   onclick="active_score2(997,3,128)"> 
                                            <input type="text" name="score_m_997_ma_3_p_128" 
                                                   id="score_m_997_ma_3_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_128" value="1" 
                                                   onclick="active_score2(997,4,128)"> 
                                            <input type="text" name="score_m_997_ma_4_p_128" 
                                                   id="score_m_997_ma_4_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_128" value="1" 
                                                   onclick="active_score2(997,5,128)"> 
                                            <input type="text" name="score_m_997_ma_5_p_128" 
                                                   id="score_m_997_ma_5_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_128" value="1" 
                                                   onclick="active_score2(997,6,128)"> 
                                            <input type="text" name="score_m_997_ma_6_p_128" 
                                                   id="score_m_997_ma_6_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_128" value="1" 
                                                   onclick="active_score2(997,7,128)"> 
                                            <input type="text" name="score_m_997_ma_7_p_128" 
                                                   id="score_m_997_ma_7_p_128" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">54</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Sponos</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_30" value="1" 
                                                   onclick="active_score2(997,1,30)"> 
                                            <input type="text" name="score_m_997_ma_1_p_30" 
                                                   id="score_m_997_ma_1_p_30" 

                                                                                                          value="45"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_30" value="1" 
                                                   onclick="active_score2(997,2,30)"> 
                                            <input type="text" name="score_m_997_ma_2_p_30" 
                                                   id="score_m_997_ma_2_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_30" value="1" 
                                                   onclick="active_score2(997,3,30)"> 
                                            <input type="text" name="score_m_997_ma_3_p_30" 
                                                   id="score_m_997_ma_3_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_30" value="1" 
                                                   onclick="active_score2(997,4,30)"> 
                                            <input type="text" name="score_m_997_ma_4_p_30" 
                                                   id="score_m_997_ma_4_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_30" value="1" 
                                                   onclick="active_score2(997,5,30)"> 
                                            <input type="text" name="score_m_997_ma_5_p_30" 
                                                   id="score_m_997_ma_5_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_30" value="1" 
                                                   onclick="active_score2(997,6,30)"> 
                                            <input type="text" name="score_m_997_ma_6_p_30" 
                                                   id="score_m_997_ma_6_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_30" value="1" 
                                                   onclick="active_score2(997,7,30)"> 
                                            <input type="text" name="score_m_997_ma_7_p_30" 
                                                   id="score_m_997_ma_7_p_30" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">45</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">ximunou</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_44" value="1" 
                                                   onclick="active_score2(997,1,44)"> 
                                            <input type="text" name="score_m_997_ma_1_p_44" 
                                                   id="score_m_997_ma_1_p_44" 

                                                                                                          value="42"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_44" value="1" 
                                                   onclick="active_score2(997,2,44)"> 
                                            <input type="text" name="score_m_997_ma_2_p_44" 
                                                   id="score_m_997_ma_2_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_44" value="1" 
                                                   onclick="active_score2(997,3,44)"> 
                                            <input type="text" name="score_m_997_ma_3_p_44" 
                                                   id="score_m_997_ma_3_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_44" value="1" 
                                                   onclick="active_score2(997,4,44)"> 
                                            <input type="text" name="score_m_997_ma_4_p_44" 
                                                   id="score_m_997_ma_4_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_44" value="1" 
                                                   onclick="active_score2(997,5,44)"> 
                                            <input type="text" name="score_m_997_ma_5_p_44" 
                                                   id="score_m_997_ma_5_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_44" value="1" 
                                                   onclick="active_score2(997,6,44)"> 
                                            <input type="text" name="score_m_997_ma_6_p_44" 
                                                   id="score_m_997_ma_6_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_44" value="1" 
                                                   onclick="active_score2(997,7,44)"> 
                                            <input type="text" name="score_m_997_ma_7_p_44" 
                                                   id="score_m_997_ma_7_p_44" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">42</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Wadosh</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_83" value="1" 
                                                   onclick="active_score2(997,1,83)"> 
                                            <input type="text" name="score_m_997_ma_1_p_83" 
                                                   id="score_m_997_ma_1_p_83" 

                                                                                                          value="36"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_83" value="1" 
                                                   onclick="active_score2(997,2,83)"> 
                                            <input type="text" name="score_m_997_ma_2_p_83" 
                                                   id="score_m_997_ma_2_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_83" value="1" 
                                                   onclick="active_score2(997,3,83)"> 
                                            <input type="text" name="score_m_997_ma_3_p_83" 
                                                   id="score_m_997_ma_3_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_83" value="1" 
                                                   onclick="active_score2(997,4,83)"> 
                                            <input type="text" name="score_m_997_ma_4_p_83" 
                                                   id="score_m_997_ma_4_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_83" value="1" 
                                                   onclick="active_score2(997,5,83)"> 
                                            <input type="text" name="score_m_997_ma_5_p_83" 
                                                   id="score_m_997_ma_5_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_83" value="1" 
                                                   onclick="active_score2(997,6,83)"> 
                                            <input type="text" name="score_m_997_ma_6_p_83" 
                                                   id="score_m_997_ma_6_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_83" value="1" 
                                                   onclick="active_score2(997,7,83)"> 
                                            <input type="text" name="score_m_997_ma_7_p_83" 
                                                   id="score_m_997_ma_7_p_83" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">36</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">sleve</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_196" value="1" 
                                                   onclick="active_score2(997,1,196)"> 
                                            <input type="text" name="score_m_997_ma_1_p_196" 
                                                   id="score_m_997_ma_1_p_196" 

                                                                                                          value="25"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_196" value="1" 
                                                   onclick="active_score2(997,2,196)"> 
                                            <input type="text" name="score_m_997_ma_2_p_196" 
                                                   id="score_m_997_ma_2_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_196" value="1" 
                                                   onclick="active_score2(997,3,196)"> 
                                            <input type="text" name="score_m_997_ma_3_p_196" 
                                                   id="score_m_997_ma_3_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_196" value="1" 
                                                   onclick="active_score2(997,4,196)"> 
                                            <input type="text" name="score_m_997_ma_4_p_196" 
                                                   id="score_m_997_ma_4_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_196" value="1" 
                                                   onclick="active_score2(997,5,196)"> 
                                            <input type="text" name="score_m_997_ma_5_p_196" 
                                                   id="score_m_997_ma_5_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_196" value="1" 
                                                   onclick="active_score2(997,6,196)"> 
                                            <input type="text" name="score_m_997_ma_6_p_196" 
                                                   id="score_m_997_ma_6_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_196" value="1" 
                                                   onclick="active_score2(997,7,196)"> 
                                            <input type="text" name="score_m_997_ma_7_p_196" 
                                                   id="score_m_997_ma_7_p_196" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">25</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Zarak</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_55" value="1" 
                                                   onclick="active_score2(997,1,55)"> 
                                            <input type="text" name="score_m_997_ma_1_p_55" 
                                                   id="score_m_997_ma_1_p_55" 

                                                                                                          value="25"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_55" value="1" 
                                                   onclick="active_score2(997,2,55)"> 
                                            <input type="text" name="score_m_997_ma_2_p_55" 
                                                   id="score_m_997_ma_2_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_55" value="1" 
                                                   onclick="active_score2(997,3,55)"> 
                                            <input type="text" name="score_m_997_ma_3_p_55" 
                                                   id="score_m_997_ma_3_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_55" value="1" 
                                                   onclick="active_score2(997,4,55)"> 
                                            <input type="text" name="score_m_997_ma_4_p_55" 
                                                   id="score_m_997_ma_4_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_55" value="1" 
                                                   onclick="active_score2(997,5,55)"> 
                                            <input type="text" name="score_m_997_ma_5_p_55" 
                                                   id="score_m_997_ma_5_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_55" value="1" 
                                                   onclick="active_score2(997,6,55)"> 
                                            <input type="text" name="score_m_997_ma_6_p_55" 
                                                   id="score_m_997_ma_6_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_55" value="1" 
                                                   onclick="active_score2(997,7,55)"> 
                                            <input type="text" name="score_m_997_ma_7_p_55" 
                                                   id="score_m_997_ma_7_p_55" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">25</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">Skynyx</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_46" value="1" 
                                                   onclick="active_score2(997,1,46)"> 
                                            <input type="text" name="score_m_997_ma_1_p_46" 
                                                   id="score_m_997_ma_1_p_46" 

                                                                                                          value="14"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_46" value="1" 
                                                   onclick="active_score2(997,2,46)"> 
                                            <input type="text" name="score_m_997_ma_2_p_46" 
                                                   id="score_m_997_ma_2_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_46" value="1" 
                                                   onclick="active_score2(997,3,46)"> 
                                            <input type="text" name="score_m_997_ma_3_p_46" 
                                                   id="score_m_997_ma_3_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_46" value="1" 
                                                   onclick="active_score2(997,4,46)"> 
                                            <input type="text" name="score_m_997_ma_4_p_46" 
                                                   id="score_m_997_ma_4_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_46" value="1" 
                                                   onclick="active_score2(997,5,46)"> 
                                            <input type="text" name="score_m_997_ma_5_p_46" 
                                                   id="score_m_997_ma_5_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_46" value="1" 
                                                   onclick="active_score2(997,6,46)"> 
                                            <input type="text" name="score_m_997_ma_6_p_46" 
                                                   id="score_m_997_ma_6_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_46" value="1" 
                                                   onclick="active_score2(997,7,46)"> 
                                            <input type="text" name="score_m_997_ma_7_p_46" 
                                                   id="score_m_997_ma_7_p_46" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">14</td>
                                </tr>
                                                            <tr class="tr_pool_tm">
                                    <th class="th_team_pool_tm">supertinez</th>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_1_p_198" value="1" 
                                                   onclick="active_score2(997,1,198)"> 
                                            <input type="text" name="score_m_997_ma_1_p_198" 
                                                   id="score_m_997_ma_1_p_198" 

                                                                                                          value="14"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_2_p_198" value="1" 
                                                   onclick="active_score2(997,2,198)"> 
                                            <input type="text" name="score_m_997_ma_2_p_198" 
                                                   id="score_m_997_ma_2_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_3_p_198" value="1" 
                                                   onclick="active_score2(997,3,198)"> 
                                            <input type="text" name="score_m_997_ma_3_p_198" 
                                                   id="score_m_997_ma_3_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_4_p_198" value="1" 
                                                   onclick="active_score2(997,4,198)"> 
                                            <input type="text" name="score_m_997_ma_4_p_198" 
                                                   id="score_m_997_ma_4_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_5_p_198" value="1" 
                                                   onclick="active_score2(997,5,198)"> 
                                            <input type="text" name="score_m_997_ma_5_p_198" 
                                                   id="score_m_997_ma_5_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_6_p_198" value="1" 
                                                   onclick="active_score2(997,6,198)"> 
                                            <input type="text" name="score_m_997_ma_6_p_198" 
                                                   id="score_m_997_ma_6_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                                                            <td class="td_score_pool_tm">
                                            <input type="checkbox" 
                                                   name="cb_m_997_ma_7_p_198" value="1" 
                                                   onclick="active_score2(997,7,198)"> 
                                            <input type="text" name="score_m_997_ma_7_p_198" 
                                                   id="score_m_997_ma_7_p_198" 

                                                                                                          value="0"
                                                                                                      size="4">								
                                        </td>
                                    
                                    <td class="td_total_pool_tm">14</td>
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
            <form method="POST" action="/Intranet/admin/modules/modifier_heure.php">
                <input type="hidden" name="id_match" id="input_id_match" value="0" />
                <input type="hidden" name="id_tournoi" value="<?php echo '<?php ';?>echo $id_tournoi; <?php echo '?>';?>" />
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
                            0                            0
                        </option>
                                            <option>
                            0                            5
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
