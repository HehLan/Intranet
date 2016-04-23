<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:04:59
  from "E:\wamp\www\Intranet\view\templates\default\tournoisRounds.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f5377b19c6e6_62480590',
  'file_dependency' => 
  array (
    '22ca7d08a07342e8dbb2851259088780ec16caa8' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\tournoisRounds.tpl',
      1 => 1458877426,
      2 => 'file',
    ),
    'ed988336c4343083b0c42e2ff20b9d17b41f4bae' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\meta.tpl',
      1 => 1458864197,
      2 => 'file',
    ),
    '38b87550390b4498246829deafc9d57640d6d43a' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\header.tpl',
      1 => 1458894385,
      2 => 'file',
    ),
    'eb253ea85fa0c415276f6fd713630b1f49745222' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\nav.tpl',
      1 => 1458904470,
      2 => 'file',
    ),
    'c083a58202c533e2b690828b2c323e50174f0471' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\footer.tpl',
      1 => 1458896334,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f5377b19c6e6_62480590 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        
<title>HEHLan</title>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="content-language" content="fr" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="expires" content="never" />
<meta http-equiv="window-target" content="_top" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
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

<link rel="shortcut icon" href="/Intranet/view/templates/default/assets/img/logos/logo-lan.ico" />
<link rel="icon" href="/Intranet/view/templates/default/assets/img/logos/logo-lan.ico" />

<!-- CSS STYLESHEETS BASE -->
<link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/Bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/lib/FontAwesome/css/font-awesome.min.css" />

<!-- CSS STYLESHEETS LAYERS -->
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/main.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/header.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/nav.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/notif.css" />


<!--[if !IE 7]>
    <style type="text/css">
        #container { display:table;height:100% }
    </style>
<![endif]-->
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/tournoisRounds.css" />
    </head>
    <body role="document">
        
<header id="header" class="row" >
    <div id="logo" class="col-lg-7 col-sm-7 col-xs-12" >
        <a href="index.php">
            <img src="/Intranet/view/templates/default/assets/img/logos/logo-hehlan.png" alt="HEHLan" width="250px">
        </a>
    </div>
    <div id="login" class="col-lg-5 col-sm-5 col-xs-12" >
                    <p id="welcome">Bienvenue <span id="user-login">admin</span> !</p>
            <div id="userbar">
                <a href="profile.php"><img src="/Intranet/view/templates/default/assets/img/userbar/profile.png" alt="Votre profil" data-toggle="tooltip" data-placement="bottom" title="Votre profil"></a>
                <a href="#" id="notifBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Vos notifications" notif-lastUpdate="0" data-content='<div id="notifPane">Aucune notification</div>'>
                    <img src="/Intranet/view/templates/default/assets/img/userbar/notif_off.png" alt="Vos Notifications" data-toggle="tooltip" data-placement="bottom" title="Vos notifications">
                </a>
                <a href="#" id="downloadBlock"
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Téléchargements" data-content='<div id="downloadPane" class="list-group">Aucun téléchargement</div>'>
                     <img src="/Intranet/view/templates/default/assets/img/userbar/download.png" alt="Téléchargements" data-toggle="tooltip" data-placement="bottom" title="Téléchargements"> 
                </a>
                <a href="#" class=""
                   data-container="body" data-toggle="popover" data-placement="bottom" title="Votre adresse IP est" data-content="::1">
                    <img src="/Intranet/view/templates/default/assets/img/userbar/ip.png" alt="Votre adresse IP" data-toggle="tooltip" data-placement="bottom" title="Votre adresse IP">
                </a>
                <a href="commande.php"><img src="/Intranet/view/templates/default/assets/img/userbar/command.png" alt="Passer une commande" data-toggle="tooltip" data-placement="bottom" title="Passer une commande"></a>
                <a href="common/logout.php"><img src="/Intranet/view/templates/default/assets/img/userbar/logout.png" alt="Se déconnecter" data-toggle="tooltip" data-placement="bottom" title="Se déconnecter"></a>
            </div>
                       
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
                <li><a href="/Intranet/index.php">Accueil</a></li>
                <li><a href="/Intranet/places.php">Places</a></li>         
                                    <li><a href="/Intranet/tournois.php?id=1">HOTS</a></li>
                                    <li><a href="/Intranet/tournois.php?id=2">COD4</a></li>
                                    <li><a href="/Intranet/tournois.php?id=3">TMNF</a></li>
                                    <li><a href="/Intranet/tournois.php?id=5">HS</a></li>
                                      
                                    <li><a href="/Intranet/admin/index.php">Admin</a></li>
                            </ul>
        </div>
    </div>			
</nav>


        <!-- Header and Rules -->
                    <div id="headerTournoi">
                <img id="headerTournoiImg" src="/Intranet/src/img/tournoisHeaders/tmnf_header.jpg" alt="TMNF" />
            </div>
                            <div id="reglementTournoi">
                Pour consulter le règlement de ce tournoi, <a href="/Intranet/src/pdf/rules/Track Mania - Réglement.pdf"> cliquez ici </a>
            </div>
        
        <div class="container-fluid" id="container">
            <div class="row" id="contenu">
                <div class="col-lg-offset-1 col-lg-10">
                    
                    <h1>Groupes de qualifications de TMNF</h1>
                    
                    <p>Cliquez ici pour voir les <a href="finales.php?id=3">FINALES DES PGM'S (gold)</a></p>
                                         
   
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                                                                                                <li role="presentation" id="nav-tab-60" class="active"><a href="#tab-60" aria-controls="tab-60" role="tab" data-toggle="tab">Groupe 1</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-61"><a href="#tab-61" aria-controls="tab-61" role="tab" data-toggle="tab">Groupe 2</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-62"><a href="#tab-62" aria-controls="tab-62" role="tab" data-toggle="tab">Groupe 3</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-63"><a href="#tab-63" aria-controls="tab-63" role="tab" data-toggle="tab">Groupe 4</a></li>
                                                                                    </ul>
                    </div> 
                    
                    
                    <div class="tab-content">
                                                                                    <div role="tabpanel" class="tab-pane active" id="tab-60">     
                             
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="9">
                                            Groupe 1 ( samedi 18h00 )
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="th_manche_round" >
                                            Participants
                                        </th>
                                                                                    <th class="th_manche_round">Manche 1</th>
                                                                                        <th class="th_manche_round">Manche 2</th>
                                                                                        <th class="th_manche_round">Manche 3</th>
                                                                                        <th class="th_manche_round">Manche 4</th>
                                                                                        <th class="th_manche_round">Manche 5</th>
                                                                                        <th class="th_manche_round">Manche 6</th>
                                                                                        <th class="th_manche_round">Manche 7</th>
                                            
                                        <th class="th_points_round">Points</th>
                                    </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Canon6etoiles</td>
                                                                                            <td class="td_score_round">10</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">10</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Boulvay</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">gosh101</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">gwennytoux</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Ash</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Danilus</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">1ST_Tr45HxC</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">cloud1213</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">30</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">30</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Broflovsky</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                    </table>                                
                            </div>
                        </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-61">
                             
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="9">
                                            Groupe 2 ( samedi 18h00 )
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="th_manche_round" >
                                            Participants
                                        </th>
                                                                                    <th class="th_manche_round">Manche 1</th>
                                                                                        <th class="th_manche_round">Manche 2</th>
                                                                                        <th class="th_manche_round">Manche 3</th>
                                                                                        <th class="th_manche_round">Manche 4</th>
                                                                                        <th class="th_manche_round">Manche 5</th>
                                                                                        <th class="th_manche_round">Manche 6</th>
                                                                                        <th class="th_manche_round">Manche 7</th>
                                            
                                        <th class="th_points_round">Points</th>
                                    </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">LamboX</td>
                                                                                            <td class="td_score_round">52</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">52</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Happy Nems</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">NamaTroX</td>
                                                                                            <td class="td_score_round">10</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">10</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">iGlooW</td>
                                                                                            <td class="td_score_round">525</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">525</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">JankulaseK</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">landre164</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Mikeman</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Loraline</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Navarro</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                    </table>                                
                            </div>
                        </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-62">
                             
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="9">
                                            Groupe 3 ( samedi 18h00 )
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="th_manche_round" >
                                            Participants
                                        </th>
                                                                                    <th class="th_manche_round">Manche 1</th>
                                                                                        <th class="th_manche_round">Manche 2</th>
                                                                                        <th class="th_manche_round">Manche 3</th>
                                                                                        <th class="th_manche_round">Manche 4</th>
                                                                                        <th class="th_manche_round">Manche 5</th>
                                                                                        <th class="th_manche_round">Manche 6</th>
                                                                                        <th class="th_manche_round">Manche 7</th>
                                            
                                        <th class="th_points_round">Points</th>
                                    </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">RectoO</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Salcatin</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">satanasth250</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">roden164</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Shyrøw</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">rougetta</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">skuyz</td>
                                                                                            <td class="td_score_round">52</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">52</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">PuLse Olen</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">RaKyora</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">0</td>
                                        </tr>
                                                                    </table>                                
                            </div>
                        </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-63">
                             
                            <div class="row">
                                <h2>Classements et manches</h2>
                                <table class="table_round">
                                    <tr>
                                        <th class="title_round" colspan="9">
                                            Groupe 4 ( samedi 18h00 )
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="th_manche_round" >
                                            Participants
                                        </th>
                                                                                    <th class="th_manche_round">Manche 1</th>
                                                                                        <th class="th_manche_round">Manche 2</th>
                                                                                        <th class="th_manche_round">Manche 3</th>
                                                                                        <th class="th_manche_round">Manche 4</th>
                                                                                        <th class="th_manche_round">Manche 5</th>
                                                                                        <th class="th_manche_round">Manche 6</th>
                                                                                        <th class="th_manche_round">Manche 7</th>
                                            
                                        <th class="th_points_round">Points</th>
                                    </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Thaerith</td>
                                                                                            <td class="td_score_round">88</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">88</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Sponos</td>
                                                                                            <td class="td_score_round">25</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">70</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">ximunou</td>
                                                                                            <td class="td_score_round">42</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">42</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Skynyx</td>
                                                                                            <td class="td_score_round">14</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">14</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Zarak</td>
                                                                                            <td class="td_score_round">25</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">25</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">Wadosh</td>
                                                                                            <td class="td_score_round">36</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">36</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">thotwith</td>
                                                                                            <td class="td_score_round">54</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">54</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">sleve</td>
                                                                                            <td class="td_score_round">25</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">25</td>
                                        </tr>
                                                                            <tr>
                                            <td class="td_pseudo_round">supertinez</td>
                                                                                            <td class="td_score_round">14</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                                                                            <td class="td_score_round">0</td>
                                            
                                            <td class="td_total_round">14</td>
                                        </tr>
                                                                    </table>                                
                            </div>
                        </div>
                                            </div>
                </div>
            </div>
        </div>
        
<footer id="footer" class="row">
    <div id="copyright" class="col-lg-3 col-sm-12 col-xs-12">
        <p>HEHLan All Rights Reserved - Copyright <i class="fa fa-copyright"></i> 2016</p>
    </div>
    <div id="ceheh" class="col-lg-offset-2 col-lg-2 col-sm-12 col-xs-12">
        <img src="/Intranet/view/templates/default/assets/img/logos/logo-ceheh.png" alt="CEHECOFH" />
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/default/assets/img/logos/logo-campus-technique.png" alt="HeH" />
        </a>
    </div>
</footer>



<!-- JAVASCRIPT LIBRARIES -->
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery-ui.js"></script>
<script type="text/javascript" src="/Intranet/lib/jQuery/jquery.media.js"></script>
<script type="text/javascript" src="/Intranet/lib/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/Less/less.js"></script>


<script type="text/javascript" src="/Intranet/lib/baconjs/Bacon-1ab32ffb.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/lodash/lodash-2.2.1.min.js"></script>
<script type="text/javascript" src="/Intranet/lib/live/live.js"></script>
<script type="text/javascript" src="/Intranet/lib/handlebars/handlebars.1.0.0.js"></script>
<script type="text/javascript" src="/Intranet/lib/jquery.group.min.js"></script>



<script type="text/javascript" src="/Intranet/src/js/menu.js"></script>
<script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
<script type="text/javascript" src="/Intranet/src/js/init.js"></script>


<script type="text/javascript" src="/Intranet/view/templates/default/assets/js/notifications.js"></script>
<script type="text/javascript" src="/Intranet/view/templates/default/assets/js/downloads.js"></script>


    </body>
</html><?php }
}
