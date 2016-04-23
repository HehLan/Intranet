<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:03
  from "E:\wamp\www\Intranet\view\templates\admin\tournois.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916d7a70f97_30408487',
  'file_dependency' => 
  array (
    '727f3fabeb31a4f5fd30a273894696bd8a65bb85' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\tournois.tpl',
      1 => 1458872131,
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
function content_570916d7a70f97_30408487 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/tournois.css" >
        <script type="text/javascript" src="/Intranet/view/templates/admin/assets/js/tournois.js"></script>
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
	
        <div class="container" id="container">
            <div class="row" id="contenu">
                    
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                                                                                    <li role="presentation" class="active"><a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">COD4</a></li>
                                                                                                            
                                <li role="presentation"><a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">HOTS</a></li>
                                                                                                            
                                <li role="presentation"><a href="#tab-5" aria-controls="tab-5" role="tab" data-toggle="tab">HS</a></li>
                                                                                                            
                                <li role="presentation"><a href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">TMNF</a></li>
                                                                        </ul>
                </div>
                
                <div class="tab-content">
                                                                        <div role="tabpanel" class="tab-pane active" id="tab-2">     
                                                        <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: 2</li>
                                            <li>Participants: 18</li>
                                            <li>Joueurs par team: 5</li>
                                            <li>Teams par match: 2</li>
                                            <li>Nombre de manches: 3</li>
                                            <li>Heure des qualifications: 2014-04-05 10:00:00</li>
                                            <li>Heure des finales: 2014-04-05 22:00:00</li>
                                            <li>Durée intermatch: 02:00:00</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi=2'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi=2'">Gestion des groupes</button>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi=2'">Gestion des pools (old)</button>
                                                                                
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=2'">Gestion des finales brackets</button>
                                                                                
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        
                                            
                                        
                                            
                                            
                                            
                                        


                                        <!-- MANAGE FINALS -->
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        
                                        
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                                                                        
                            <div role="tabpanel" class="tab-pane" id="tab-1">
                                                        <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: 1</li>
                                            <li>Participants: 18</li>
                                            <li>Joueurs par team: 5</li>
                                            <li>Teams par match: 2</li>
                                            <li>Nombre de manches: 1</li>
                                            <li>Heure des qualifications: 2014-04-05 09:00:00</li>
                                            <li>Heure des finales: 2014-04-05 21:00:00</li>
                                            <li>Durée intermatch: 02:00:00</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi=1'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi=1'">Gestion des groupes</button>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi=1'">Gestion des pools (old)</button>
                                                                                
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=1'">Gestion des finales brackets</button>
                                                                                
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        
                                            
                                        
                                            
                                            
                                            
                                        


                                        <!-- MANAGE FINALS -->
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        
                                        
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                                                                        
                            <div role="tabpanel" class="tab-pane" id="tab-5">
                                                        <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: 5</li>
                                            <li>Participants: 18</li>
                                            <li>Joueurs par team: 2</li>
                                            <li>Teams par match: 2</li>
                                            <li>Nombre de manches: 1</li>
                                            <li>Heure des qualifications: 2014-04-04 22:10:00</li>
                                            <li>Heure des finales: 2014-04-04 23:55:00</li>
                                            <li>Durée intermatch: 00:30:00</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi=5'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi=5'">Gestion des groupes</button>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'scores-old.php?id_tournoi=5'">Gestion des pools (old)</button>
                                                                                
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                                                                    <button class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=5'">Gestion des finales brackets</button>
                                                                                
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        
                                            
                                        
                                            
                                            
                                            
                                        


                                        <!-- MANAGE FINALS -->
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        
                                        
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                                                                        
                            <div role="tabpanel" class="tab-pane" id="tab-3">
                                                        <div class="row my-tab-content">
                                    <div class="col-lg-6">
                                        <h3>Informations</h3>
                                        <ul class="list-unstyled">
                                            <li>id: 3</li>
                                            <li>Participants: 18</li>
                                            <li>Joueurs par team: 1</li>
                                            <li>Teams par match: 10</li>
                                            <li>Nombre de manches: 3</li>
                                            <li>Heure des qualifications: 2014-04-05 18:00:00</li>
                                            <li>Heure des finales: 2014-04-05 23:59:00</li>
                                            <li>Durée intermatch: 02:00:00</li>
                                        </ul>
                                    </div>                                
                                    <div class="col-lg-6">
                                                
                                        <!-- MANAGE POOLS -->
                                        <h3>Qualifications</h3>
                                        <button class="btn btn-primary" onclick="document.location.href = 'scores.php?id_tournoi=3'">Gestion des pools brackets</button>
                                        <button class="btn btn-primary" onclick="document.location.href = 'groupes.php?id_tournoi=3'">Gestion des groupes</button>
                                                                                
                                        <!-- MANAGE FINALS -->
                                        <h3>Finales</h3>
                                                                                    <button style="background-color: red" class="btn btn-primary" onclick="document.location.href = 'finales.php?id_tournoi=3'">Gestion des finales brackets</button>
                                                                                
                                        
                                        <!-- MANAGE POOLS -->                                               
                                        
                                            
                                        
                                            
                                            
                                            
                                        


                                        <!-- MANAGE FINALS -->
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
                                            
                                                
                                            
                                                
                                            
                                        
                                            
                                            
                                        
                                        
       
                                        <!-- MANAGE LOOSER BRACKETS -->
                                        
                                        
                                        
                                                                          
                                        <!-- ERASE TOURNOI -->
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                                       
                </div>
            </div>
        </div>

        
        


        <div id="shadowing"></div>

        <div id="div_popup" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="groupes.php">
                <input type="hidden" name="id_tournoi" id="input_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart"></span><br>
                Nombre de groupes : <input type="text" name="nbrgroupes" value="0" size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>
        <div id="div_popup2" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input2_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input2_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart2"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de qualifiés : <select name="qualifs"><option>4<option>6<option>8<option>12<option>16<option>24<option>32<option>48<option>64<option>96<option>128</select><br>
                <input type="submit" value="Créer" /><br>
            </form>
        </div>	
        <div id="div_popup3" class="popup_centree" style="height:200px;width:600px;margin-top:-100px;margin-left:-300px;">
            <input type="button" value="annuler" onclick="popup_close()" />
            <form method="POST" action="finales.php">
                <input type="hidden" name="id_tournoi" id="input3_id_tournoi" value="0" />
                <input type="hidden" name="looser" id="input3_looser" value="0" /><br>
                Nombre de participants : <span id="nbrpart3"></span><br>
                Petite finale ? : <input type="checkbox" name="petite_finale" value="1"/><br>
                Nombre de groupes : <select name="nbrgroupes"><option>1<option>2<option>4<option>8<option>16</select><br>
                Taille des groupes : <input type="text" name="tgroupes" value="0"  size="4"/><br>
                <input type="submit" value="Créer" /><br>
            </form>
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

    </body>
</html><?php }
}
