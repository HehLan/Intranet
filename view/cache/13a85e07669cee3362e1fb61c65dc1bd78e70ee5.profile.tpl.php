<?php
/* Smarty version 3.1.29, created on 2016-03-25 12:14:32
  from "E:\wamp\www\Intranet\view\templates\default\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f51d98e525b7_43345003',
  'file_dependency' => 
  array (
    '13a85e07669cee3362e1fb61c65dc1bd78e70ee5' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\profile.tpl',
      1 => 1458864322,
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
function content_56f51d98e525b7_43345003 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/profile.css" />
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

        <div class="container" id="container">
            <div class="row" id="contenu">

                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-infos" aria-controls="tab-infos" role="tab" data-toggle="tab">Infos</a></li>
                        <li role="presentation"><a href="#tab-games" aria-controls="tab-games" role="tab" data-toggle="tab">Jeux</a></li>
                        <li role="presentation"><a href="#tab-teams" aria-controls="tab-teams" role="tab" data-toggle="tab">Teams</a></li>
                        <li role="presentation"><a href="#tab-stats" aria-controls="tab-stats" role="tab" data-toggle="tab">Stats</a></li>
                    </ul>
                </div>

                <form id="form-profile" class="form-horizontal col-lg-12" method="post" action="validformulaire.php">
                    <div class="tab-content">
                        
                        <!-- tab-infos -->
                        <div role="tabpanel" class="tab-pane active my-tab-content" id="tab-infos">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="pseudo">Pseudo :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="Veuillez indiquer votre pseudo" value="admin">
                                            <span class="help-block" style="display: none">Corrigez l'erreur s'il vous plait</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="laststname">Nom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Veuillez indiquer votre nom" value="">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="firstname">Prénom :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Veuillez indiquer votre prénom" value="">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="date-of-birth">Naissance :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" name="date-of-birth" id="date-of-birth" placeholder="Veuillez indiquer votre data de naissance" value="01/01/1970">
                                        </div>
                                    </div>
                                </div>       
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="phone">Téléphone :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="Veuillez indiquer votre numéro de téléphone" value="">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="email">Email :</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Veuillez indiquer votre email" value="">
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            
                            <div class="col-lg-6">
                                <button disabled class ="btn btn-primary" type="submit">Enregistrer</button>
                                <button disabled id="password-change" class ="btn btn-primary">Changer de mot de passe</button>
                                
                                <fieldset id="password-editing" style="display: none">
                                    <legend>Modification de mot de passe</legend>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-old">Ancien mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-old" id="password-old" placeholder="Veuillez entrer votre ancien mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-new">Nouveau mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-new" id="password-new" placeholder="Veuillez entrer votre nouveau mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="password-new-confirmed">Nouveau mot de passe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="password-new-confirmed" id="password-new-confirmed" placeholder="Veuillez entrer confirmer votre mot de passe">
                                            </div>
                                        </div>
                                    </div> 
                                    <button disabled id="validate-password" class ="btn btn-primary">Valider</button>
                                </fieldset>
                            </div>                            

                        </div>
                            
                           
                        <!-- tab-games -->
                        <div role="tabpanel" class="tab-pane my-tab-content" id="tab-games">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 3
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="" id=""> Jeu 4
                                </label>
                            </div>
                        </div>
                        
                        
                        <!-- tab-teams -->
                        <div role="tabpanel" class="tab-pane" id="tab-teams">
                                                            <p>Vous n'avez pas encore d'équipe !</p>
                                <input id="newTeam" type="button" value="Créer votre équipe">                                
                                <input id="joinATeam" type="button" value="Rejoindre une équipe">
                                
                                <div id="createTeam" style="display: none;">
                                    <input id="RetourTeam2" style="width: 100px" type="button" value="Retour">
                                    
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-name">Nom de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-name" id="team-name" placeholder="Veuillez indiquer le nom de votre équipe" value="01/01/1970">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-tag">Tag de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="team-tag" id="team-tag" placeholder="Veuillez indiquer le tag de votre équipe" value="01/01/1970">
                                            </div>
                                        </div>
                                    </div>       
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password" id="team-password" placeholder="Veuillez indiquer le mot de passe de votre équipe" value="01/01/1970">
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" for="team-password-confirmed">Password de l'équipe :</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="password" name="team-password-confirmed" id="team-password-confirmed" placeholder="Veuillez confirmer le mot de passe de votre équipe" value="01/01/1970">
                                            </div>
                                        </div>
                                    </div> 
                                    <input id="submitNewTeam" type="button" value="Créer cette team">
                                </div>										

                                <div id="rejoindreTeam" style="display:none;">
                                    <input id="RetourTeam" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="rejoindre_Team">Le nom de la team :</label>
                                    <select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
                                                                                    <option value="71" style="color:#000"/>Alcyol #2207</option>
                                                                                    <option value="67" style="color:#000"/>Alfatta #2772</option>
                                                                                    <option value="40" style="color:#000"/>Annie's Firstblood</option>
                                                                                    <option value="3" style="color:#000"/>Belgian Inoffensive Team</option>
                                                                                    <option value="23" style="color:#000"/>Belgian Rape Squad</option>
                                                                                    <option value="56" style="color:#000"/>BIT1</option>
                                                                                    <option value="57" style="color:#000"/>BIT2</option>
                                                                                    <option value="38" style="color:#000"/>Bloodytearz</option>
                                                                                    <option value="51" style="color:#000"/>C'était une mauvaise idée</option>
                                                                                    <option value="22" style="color:#000"/>Caedem Dominatur</option>
                                                                                    <option value="48" style="color:#000"/>Crêpière Tefal</option>
                                                                                    <option value="65" style="color:#000"/>Delikan57 #2256</option>
                                                                                    <option value="20" style="color:#000"/>Doctors X</option>
                                                                                    <option value="26" style="color:#000"/>Dofusian GAMING</option>
                                                                                    <option value="24" style="color:#000"/>Don't feed the ginger</option>
                                                                                    <option value="63" style="color:#000"/>Droledami #2473</option>
                                                                                    <option value="66" style="color:#000"/>Ebaral #2123</option>
                                                                                    <option value="61" style="color:#000"/>Echofox #2924</option>
                                                                                    <option value="33" style="color:#000"/>First</option>
                                                                                    <option value="25" style="color:#000"/>FPMs</option>
                                                                                    <option value="8" style="color:#000"/>Gitan</option>
                                                                                    <option value="50" style="color:#000"/>Go Nerf Karma</option>
                                                                                    <option value="13" style="color:#000"/>God Sake</option>
                                                                                    <option value="29" style="color:#000"/>Gods of Chocolate</option>
                                                                                    <option value="53" style="color:#000"/>GoldTeam</option>
                                                                                    <option value="68" style="color:#000"/>Guerrier666 #2345</option>
                                                                                    <option value="1" style="color:#000"/>HeHLan</option>
                                                                                    <option value="6" style="color:#000"/>Inception eSport</option>
                                                                                    <option value="32" style="color:#000"/>iNPhase</option>
                                                                                    <option value="43" style="color:#000"/>ISWEARSHEWAS18</option>
                                                                                    <option value="45" style="color:#000"/>Je mange des shtroumpfs</option>
                                                                                    <option value="21" style="color:#000"/>JokS</option>
                                                                                    <option value="36" style="color:#000"/>La Dream Team</option>
                                                                                    <option value="37" style="color:#000"/>La Nouvelle Génération</option>
                                                                                    <option value="35" style="color:#000"/>Lamastruche Gaming</option>
                                                                                    <option value="58" style="color:#000"/>Lambox #2917</option>
                                                                                    <option value="14" style="color:#000"/>Les Bifflettes Maison</option>
                                                                                    <option value="18" style="color:#000"/>Les Michel Forever</option>
                                                                                    <option value="7" style="color:#000"/>Les Tites Fioles</option>
                                                                                    <option value="52" style="color:#000"/>Ma grosse bite en plâtre</option>
                                                                                    <option value="2" style="color:#000"/>MABITE</option>
                                                                                    <option value="19" style="color:#000"/>Mid Or Feed</option>
                                                                                    <option value="17" style="color:#000"/>Midget Pineapple Wolverine</option>
                                                                                    <option value="30" style="color:#000"/>Murderous Insanity in ET</option>
                                                                                    <option value="60" style="color:#000"/>Nedria #2996</option>
                                                                                    <option value="49" style="color:#000"/>NIP TA MERE</option>
                                                                                    <option value="16" style="color:#000"/>NoneEsCape</option>
                                                                                    <option value="15" style="color:#000"/>Nothing</option>
                                                                                    <option value="9" style="color:#000"/>Olaf Alope</option>
                                                                                    <option value="44" style="color:#000"/>On suce des Schtroumphs</option>
                                                                                    <option value="34" style="color:#000"/>Petits Kebabs Volant</option>
                                                                                    <option value="31" style="color:#000"/>Petits Lézards Tous Nus</option>
                                                                                    <option value="42" style="color:#000"/>Phoenix Team</option>
                                                                                    <option value="70" style="color:#000"/>Pinguiz #2232</option>
                                                                                    <option value="64" style="color:#000"/>Rayalok #2449</option>
                                                                                    <option value="41" style="color:#000"/>Reflex Belgium</option>
                                                                                    <option value="39" style="color:#000"/>Skillshout</option>
                                                                                    <option value="47" style="color:#000"/>Stupid Move</option>
                                                                                    <option value="46" style="color:#000"/>Stupid-Move</option>
                                                                                    <option value="10" style="color:#000"/>The Bleeding Rocks</option>
                                                                                    <option value="27" style="color:#000"/>The Legion of Nether</option>
                                                                                    <option value="12" style="color:#000"/>The LuckyTeam</option>
                                                                                    <option value="28" style="color:#000"/>Tish-cake KaWaii</option>
                                                                                    <option value="62" style="color:#000"/>Touza #2628</option>
                                                                                    <option value="59" style="color:#000"/>Unexard #2460</option>
                                                                                    <option value="11" style="color:#000"/>WeAreVincent</option>
                                                                                    <option value="69" style="color:#000"/>Witch Doctor #2256</option>
                                                                         
                                    </select><br />
                                    <label for="psw_equipe">Mot de passe :</label>
                                    <input type="password" name="psw_equipe" id="psw_equipe" ><br />
                                    <div id="infoJoinTeam" style="border: none"></div>
                                    <input disabled id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                                                    </div>
                        
                        <!-- tab-stats -->
                        <div role="tabpanel" class="tab-pane" id="tab-stats">
                            Vos statistiques ne sont pas disponibles dans cette version.
                        </div>
  
                    </div>
  
                </form>

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


        
        
        <script>
            $(function(){
                
                $("#password-change").click(function() {
                    $("#password-editing").css({ display: block });
                });

                $("form").on("submit", function() {
                    if($("#pseudo").val().length() < 2) {
                        $(".form-group").addClass("has-error");
                        return false;
                    }
                });
                
            });
        </script>
        
        
    </body>
</html><?php }
}
