<?php
/* Smarty version 3.1.29, created on 2016-03-06 16:55:17
  from "E:\wamp\www\Intranet\view\templates\default\tournoisPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc52e58dc7c5_21412186',
  'file_dependency' => 
  array (
    '020b7c4c949f9a9bc69314be042cf0d6aaaccfea' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\tournoisPools.tpl',
      1 => 1457279360,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1457279279,
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
function content_56dc52e58dc7c5_21412186 ($_smarty_tpl) {
?>

<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/bootstrap.min.css" />
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/tournoisPools.css" />
        <script type="text/javascript" src="/Intranet/src/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
    </head>
    <body>
        
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
	
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    <h1>
                                                    Qualifications 
                                                Hearthstone
                    </h1>
                                            <p>Cliquez ici pour voir les <a href="finales.php?id=5">FINALES DES PGM'S (gold)</a></p><br>
                                                                                        <br>
                    						<div class="row table_pool_row">
							<table class="col-lg-12 table_pool">
								<tr>
									<th class="th_title_pool"> 
										Groupe 1
									</th>
																			<th class="th_team2_pool">Droledami #2473</th>
																				<th class="th_team2_pool">Delikan57 #2256</th>
																				<th class="th_team2_pool">Alfatta #2772</th>
																				<th class="th_team2_pool">Alcyol #2207</th>
																			<th class="th_score_pool">Scores</th>
								</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Droledami #2473</th>
																																			<td class="td_x_pool">X</td>
																																													<td class="td_loose_pool">0-1</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Delikan57 #2256</th>
																																			<td class="td_win_pool">1-0</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																															<td class="td_score_pool">3</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Alfatta #2772</th>
																																			<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Alcyol #2207</th>
																																			<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_x_pool">X</td>
																															<td class="td_score_pool">0</td>
									</tr>
															</table>
						</div>
                    						<div class="row table_pool_row">
							<table class="col-lg-12 table_pool">
								<tr>
									<th class="th_title_pool"> 
										Groupe 2
									</th>
																			<th class="th_team2_pool">Lambox #2917</th>
																				<th class="th_team2_pool">Nedria #2996</th>
																				<th class="th_team2_pool">Echofox #2924</th>
																				<th class="th_team2_pool">Ebaral #2123</th>
																				<th class="th_team2_pool">Guerrier666 #2345</th>
																			<th class="th_score_pool">Scores</th>
								</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Lambox #2917</th>
																																			<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Nedria #2996</th>
																																			<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Echofox #2924</th>
																																			<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Ebaral #2123</th>
																																			<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Guerrier666 #2345</th>
																																			<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_x_pool">X</td>
																															<td class="td_score_pool">0</td>
									</tr>
															</table>
						</div>
                    						<div class="row table_pool_row">
							<table class="col-lg-12 table_pool">
								<tr>
									<th class="th_title_pool"> 
										Groupe 3
									</th>
																			<th class="th_team2_pool">Unexard #2460</th>
																				<th class="th_team2_pool">Touza #2628</th>
																				<th class="th_team2_pool">Rayalok #2449</th>
																				<th class="th_team2_pool">Witch Doctor #2256</th>
																				<th class="th_team2_pool">Pinguiz #2232</th>
																			<th class="th_score_pool">Scores</th>
								</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Unexard #2460</th>
																																			<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Touza #2628</th>
																																			<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Rayalok #2449</th>
																																			<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Witch Doctor #2256</th>
																																			<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">vendredi 22h10</td>
																																													<td class="td_x_pool">X</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																															<td class="td_score_pool">0</td>
									</tr>
																	<tr class="tr_pool">
										<th class="th_team_pool">Pinguiz #2232</th>
																																			<td class="td_same_pool">vendredi 23h40</td>
																																													<td class="td_same_pool">samedi 00h10</td>
																																													<td class="td_same_pool">vendredi 23h10</td>
																																													<td class="td_same_pool">vendredi 22h40</td>
																																													<td class="td_x_pool">X</td>
																															<td class="td_score_pool">0</td>
									</tr>
															</table>
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
    </body>
</html><?php }
}
