<?php
/* Smarty version 3.1.29, created on 2016-03-06 16:55:21
  from "E:\wamp\www\Intranet\view\templates\default\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc52e92d0128_88686632',
  'file_dependency' => 
  array (
    '13a85e07669cee3362e1fb61c65dc1bd78e70ee5' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\default\\profile.tpl',
      1 => 1457279340,
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
function content_56dc52e92d0128_88686632 ($_smarty_tpl) {
?>

<!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/default/assets/css/profile.css" />
        <script type="text/javascript" src="/Intranet/src/js/jquery.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/getXhr.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/jquery-ui.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/main.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/menu.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/less.js"></script>
        <script type="text/javascript" src="/Intranet/src/js/jquery.media.js"></script>
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

        <div class="container-fluid" id="container">
            <div class="row" id="contenu">			

                <div id="formInscription">
                    <form id="formModifProfil" class="formular" method="post" action="validformulaire.php">
                        <input  id="afficheModifProfil" type="button" value="Modifier le profil" disabled > 
                        <fieldset>
                            <legend>Profil</legend>
                            <label for="pseudo">Pseudo :</label>
                            <input type="text" name="pseudo" id="pseudo" readonly value="admin"><br>
                            <div id="pseudobox"></div>

                            <label for="firstname">Nom :</label>
                            <input type="text" id="lastname" readonly value="Maigre"><br >

                            <label for="firstname">Prénom :</label>
                            <input type="text" name="firstname" id="firstname" readonly value="Corky"><br >

                            <label for="datepicker">Date de naissance :</label>
                            <input type="text" name="date" id="date" readonly value="12/10/1993"><br >
                           
                                   

                            <label for="telephone">Téléphone :</label>
                            <input type="text" name="telephone" id="telephone" readonly value="+32 (0) 496.63.10.57"><br >

                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" readonly value="corky.maigre@std.heh.be"><br >
                            <div id="ModifEmail">
                                <label for="email2">Confirmer Email :</label>
                                <input type="text" name="email2" id="email2" value="corky.maigre@std.heh.be" ><br >
                            </div> 

                            <input id="afficheChgtMDP" type="button" value="Changer de mot de passe" ><br><br>						

                            <fieldset id="ModifMDP" style="display:none">
                                <legend>Modification de mot de passe</legend>

                                <label for="password">Ancien mot de passe :</label>
                                <input type="password" name="passwordOld" id="passwordOld"><br >

                                <label for="password">Nouveau mot de passe :</label>
                                <input type="password" name="password" id="password"><br >

                                <label for="password2">Confirmer nouveau mot de passe :</label>
                                <input type="password" name="password2" id="password2"><br >
                                <div id="infoChgtMDP" style="border: none"></div>
                                <input id="submitChgtMDP" type="button" value="Valider le nouveau mot de passe">
                            </fieldset>
                        </fieldset>
                        <fieldset>
                            <legend>Jeux</legend>

                            <input type="checkbox" class="jeux" name="tournois[]" id="LOL" disabled value="1">League Of Legends<br >
                                   <!--<?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"1",$connexion,$pseudoJeux); <?php echo '?>';?> -->
                                   
                            <div id="pseudoLOL"
                                                                     style="display : none;"
                                                                >
                                <label for="pseudoLOL" style="padding-left: 40px; ">Votre pseudo à LOL :</label>
                                <input type="text" name="pseudoLOL" id="VerifPseudoLOL" style="margin-left: -40px;" readonly value="">
                                <div id="pseudoboxLOL" style="padding-left: 250px; "></div>
                            </div>
                            <input type="checkbox" class="jeux" name="tournois[]" id="COD4" disabled value="2">Call Of Duty 4<br >
                                   <!--<?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"2",$connexion,$pseudoJeux); <?php echo '?>';?> -->
                            <input type="checkbox" class="jeux" name="tournois[]" id="TM" disabled value="3">TrackMania<br >
                                   <!-- <?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"3",$connexion,$pseudoJeux); <?php echo '?>';?>  -->
                            <input type="checkbox" class="jeux" name="tournois[]" id="UT3" disabled value="4">Unreal Tournament 3
                                   <!--<?php echo '<?php ';?>echo isPlay($joueur['id_joueur'],"4",$connexion,$pseudoJeux); <?php echo '?>';?> -->
                                   <br >
                        </fieldset>

                        <fieldset id="equipe">
                            <legend>Equipe</legend>
                            <br/> 
                                                            <p>Vous n'avez pas de team!</p><br>
                                <input id="newTeam" type="button" class="pasDeTeam" value="Créer votre team">
                                <input id="rejoindreUneTeam" type="button" class="pasDeTeam" value="Rejoindre une team">								
                                <br>
                                <div id="creerTeam" style="display:none;">
                                    <input id="RetourTeam2" style="width: 100px" type="button" value="Retour"><br><br>
                                    <label for="Team">Nom de la team :</label>
                                    <input type="text" name="Team" id="Team"><br >

                                    <div id="pseudoboxTeam" style="border: none; margin: 0px; padding: 0px"></div>

                                    <label for="TagTeam">Tag de la team :</label>
                                    <input type="text" name="TagTeam" id="TagTeam"><br >
                                    <div id="pseudoboxTagTeam" style="border: none; margin: 0px; padding: 0px"></div>

                                    <label for="new_psw_equipe">Mot de passe : </label>
                                    <input type="password" name="new_psw_equipe" id="new_psw_equipe" /><br>
                                    <label for="new_psw_equipe2">Confirmer mot de passe : </label>
                                    <input type="password" name="new_psw_equipe2" id="new_psw_equipe2" >
                                    <div id="infoNewTeam" style="border: none"></div>
                                    <input id="submitNewTeam" style="" type="button" value="Créer cette team">
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
                                    <input id="submitRejoindreTeam" type="button" value="Rejoindre cette team">
                                </div>
                            						
                        </fieldset>

                        <div id='infoModifProfil'></div>
                        <br>					
                    </form>
                    <div id="dialogMessage"></div>
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
