<?php
/* Smarty version 3.1.29, created on 2016-03-25 14:04:53
  from "E:\wamp\www\Intranet\view\templates\admin\scoresPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f537751c9f73_66791735',
  'file_dependency' => 
  array (
    '882778c0f923b10ab83e0f1f0fc981ee68773131' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\scoresPools.tpl',
      1 => 1458829788,
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
    '69026309d953adb5dc4f8a125d66439255df2231' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\scoresPools.js.tpl',
      1 => 1458830691,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f537751c9f73_66791735 ($_smarty_tpl) {
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
        <link type="text/css" rel="stylesheet" href="/Intranet/lib/jQuery/jquery.group.min.css" />
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
	
	
        <div id="container" class="container-fluid">
            <div id="contenu" class="row">
                
                <h1>Qualifications de HOTS</h1> 
                

                
                    <div id="bloc_tab">
                        <ul class="nav nav-tabs" role="tablist">
                                                                                                <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                    
                                    <li role="presentation" id="nav-tab-56"><a href="#tab-56" aria-controls="tab-56" role="tab" data-toggle="tab">Groupe 1</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-57"><a href="#tab-57" aria-controls="tab-57" role="tab" data-toggle="tab">Groupe 2</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-58"><a href="#tab-58" aria-controls="tab-58" role="tab" data-toggle="tab">Groupe 3</a></li>
                                                                                              
                                    <li role="presentation" id="nav-tab-59"><a href="#tab-59" aria-controls="tab-59" role="tab" data-toggle="tab">Groupe 4</a></li>
                                                                                    </ul>
                    </div>                          
                            
                    <div class="tab-content">
                                                                                    <!-- DO NOT set the tab active because we need to click on the tab to load its content otherwise others tabs will be empty -->
                                
                                <div role="tabpanel" class="tab-pane" id="tab-56">
                                                                <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>                                                 
                                                                                                                                                <li>Belgian Rape Squad</li>
                                                                                                     <li>Dofusian GAMING</li>
                                                                                                     <li>Annie's Firstblood</li>
                                                                                                     <li>Crêpière Tefal</li>
                                                                                                     <li>BIT1</li>
                                                                                                     <li>BIT2</li>
                                                                                              
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-56"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-56"></div>
                                            </div>
                                        </div>
                                        <div id="data-56" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-56">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                        </div>
                                    </div>
                                </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-57">
                                                                <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>                                                 
                                                                                                                                                <li>God Sake</li>
                                                                                                     <li>Don't feed the ginger</li>
                                                                                                     <li>FPMs</li>
                                                                                                     <li>ISWEARSHEWAS18</li>
                                                                                                     <li>Go Nerf Karma</li>
                                                                                                     <li>GoldTeam</li>
                                                                                              
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-57"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-57"></div>
                                            </div>
                                        </div>
                                        <div id="data-57" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-57">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                        </div>
                                    </div>
                                </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-58">
                                                                <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>                                                 
                                                                                                                                                <li>Les Tites Fioles</li>
                                                                                                     <li>Les Bifflettes Maison</li>
                                                                                                     <li>Les Michel Forever</li>
                                                                                                     <li>Mid Or Feed</li>
                                                                                                     <li>Murderous Insanity in ET</li>
                                                                                                     <li>Ma grosse bite en plâtre</li>
                                                                                              
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-58"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-58"></div>
                                            </div>
                                        </div>
                                        <div id="data-58" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-58">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                                        </div>
                                    </div>
                                </div>
                                                                                
                                <div role="tabpanel" class="tab-pane" id="tab-59">
                                                                <div class="row">
                                        <div class="col-lg-6">
                                            <h2>Liste des équipes sélectionnables</h2>
                                            <ul>                                                 
                                                                                                                                                <li>The Bleeding Rocks</li>
                                                                                                     <li>Petits Lézards Tous Nus</li>
                                                                                                     <li>Skillshout</li>
                                                                                                     <li>On suce des Schtroumphs</li>
                                                                                                     <li>Stupid Move</li>
                                                                                                     <li>NIP TA MERE</li>
                                                                                              
                                            </ul>
                                            <div id="components">
                                                <h2>Editeur</h2>
                                                <div id="editor-59"></div>
                                                <h2>Aperçu</h2>
                                                <div id="view-59"></div>
                                            </div>
                                        </div>
                                        <div id="data-59" class="col-lg-6">
                                            <h2>Code JSON</h2>
                                            <p>Code JSON pour le stockage dans la base de données.</p>
                                            <pre id="state-59">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
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
        <img src="/Intranet/view/templates/admin/assets/img/logos/logo-ceheh.png" alt="CEHECOFH" />
    </div>
    <div id="campus_technique" class="col-lg-offset-3 col-lg-2 col-sm-12 col-xs-12">
        <a href="http://www.heh.be" target="_blank">
            <img src="/Intranet/view/templates/admin/assets/img/logos/logo-campus-technique.png" alt="HeH" />
        </a>
    </div>
</footer>

        <script type="text/javascript" src="/Intranet/lib/baconjs/Bacon-1ab32ffb.min.js"></script>
        <script type="text/javascript" src="/Intranet/lib/lodash/lodash-2.2.1.min.js"></script>
        <script type="text/javascript" src="/Intranet/lib/live/live.js"></script>
        <script type="text/javascript" src="/Intranet/lib/handlebars/handlebars.1.0.0.js"></script>
        <script type="text/javascript" src="/Intranet/lib/jQuery/jquery.group.min.js"></script>

        
            
<script>

    
            
            function getBracket_56()
        {
            // Initial data if is not encoded in the database
            var result_56 = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi=1&type=1&number=56',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_56, status)
                    {
                        
                        //if(text_56.contains("error"))
                        //{
                            //alert(text_56);
                            //result_56 = null;
                        //}
                        //else
                        //{ 
                            result_56 = JSON.parse(text_56);
                        //}
                    },
                    error: function (resultat, statut, erreur)
                    {

                    },
                    complete: function (resultat, statut)
                    {

                    },
                    async: false
                }
            );
            return result_56;
        }
            function getBracket_57()
        {
            // Initial data if is not encoded in the database
            var result_57 = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi=1&type=1&number=57',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_57, status)
                    {
                        
                        //if(text_57.contains("error"))
                        //{
                            //alert(text_57);
                            //result_57 = null;
                        //}
                        //else
                        //{ 
                            result_57 = JSON.parse(text_57);
                        //}
                    },
                    error: function (resultat, statut, erreur)
                    {

                    },
                    complete: function (resultat, statut)
                    {

                    },
                    async: false
                }
            );
            return result_57;
        }
            function getBracket_58()
        {
            // Initial data if is not encoded in the database
            var result_58 = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi=1&type=1&number=58',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_58, status)
                    {
                        
                        //if(text_58.contains("error"))
                        //{
                            //alert(text_58);
                            //result_58 = null;
                        //}
                        //else
                        //{ 
                            result_58 = JSON.parse(text_58);
                        //}
                    },
                    error: function (resultat, statut, erreur)
                    {

                    },
                    complete: function (resultat, statut)
                    {

                    },
                    async: false
                }
            );
            return result_58;
        }
            function getBracket_59()
        {
            // Initial data if is not encoded in the database
            var result_59 = null;

            // Getting the bracket - the group_number must be dynamic
            $.ajax(
                {
                    url: '../common/bracket_get.php?id_tournoi=1&type=1&number=59',
                    type: 'GET',
                    dataType: 'text',
                    success: function (text_59, status)
                    {
                        
                        //if(text_59.contains("error"))
                        //{
                            //alert(text_59);
                            //result_59 = null;
                        //}
                        //else
                        //{ 
                            result_59 = JSON.parse(text_59);
                        //}
                    },
                    error: function (resultat, statut, erreur)
                    {

                    },
                    complete: function (resultat, statut)
                    {

                    },
                    async: false
                }
            );
            return result_59;
        }
    
            function saveBracket_56(state)
        {
            // Write your storage code here, now just display JSON above
            $("#state-56").text(JSON.stringify(state, undefined, 2));
            // Reconstruct read-only version by initializing it with received state
            $("#view-56").empty().group({
                init: state
            });  
            $.ajax(
                {
                    url: 'modules/bracket_save.php',
                    type: 'POST',
                    data: "json=" + $("#state-56").text() + "&id_tournoi=1&type=1&number=56", 
                    dataType: 'text'
                }
            );      
        };   
            function saveBracket_57(state)
        {
            // Write your storage code here, now just display JSON above
            $("#state-57").text(JSON.stringify(state, undefined, 2));
            // Reconstruct read-only version by initializing it with received state
            $("#view-57").empty().group({
                init: state
            });  
            $.ajax(
                {
                    url: 'modules/bracket_save.php',
                    type: 'POST',
                    data: "json=" + $("#state-57").text() + "&id_tournoi=1&type=1&number=57", 
                    dataType: 'text'
                }
            );      
        };   
            function saveBracket_58(state)
        {
            // Write your storage code here, now just display JSON above
            $("#state-58").text(JSON.stringify(state, undefined, 2));
            // Reconstruct read-only version by initializing it with received state
            $("#view-58").empty().group({
                init: state
            });  
            $.ajax(
                {
                    url: 'modules/bracket_save.php',
                    type: 'POST',
                    data: "json=" + $("#state-58").text() + "&id_tournoi=1&type=1&number=58", 
                    dataType: 'text'
                }
            );      
        };   
            function saveBracket_59(state)
        {
            // Write your storage code here, now just display JSON above
            $("#state-59").text(JSON.stringify(state, undefined, 2));
            // Reconstruct read-only version by initializing it with received state
            $("#view-59").empty().group({
                init: state
            });  
            $.ajax(
                {
                    url: 'modules/bracket_save.php',
                    type: 'POST',
                    data: "json=" + $("#state-59").text() + "&id_tournoi=1&type=1&number=59", 
                    dataType: 'text'
                }
            );      
        };   
    

    // Function when document is ready
    $(function ()
    {
                  
            var groupData_56 = null;
                  
            var groupData_57 = null;
                  
            var groupData_58 = null;
                  
            var groupData_59 = null;
        
          
            groupData_56 = getBracket_56();
          
            groupData_57 = getBracket_57();
          
            groupData_58 = getBracket_58();
          
            groupData_59 = getBracket_59();
          
            
                    $("#nav-tab-56").click(function ()
                {
                    var groupData_56 = null;
                    groupData_56 = getBracket_56();
                    var editor_56 = $("#editor-56");
                    var view_56 = $("#view-56");
                    
                    editor_56.empty();
                    editor_56.group(
                        { 
                            init: groupData_56,
                            save: saveBracket_56
                        }
                    );

                    view_56.empty();
                    view_56.group(
                        {
                            init: groupData_56
                        }
                    );
                }
            ); 
                    $("#nav-tab-57").click(function ()
                {
                    var groupData_57 = null;
                    groupData_57 = getBracket_57();
                    var editor_57 = $("#editor-57");
                    var view_57 = $("#view-57");
                    
                    editor_57.empty();
                    editor_57.group(
                        { 
                            init: groupData_57,
                            save: saveBracket_57
                        }
                    );

                    view_57.empty();
                    view_57.group(
                        {
                            init: groupData_57
                        }
                    );
                }
            ); 
                    $("#nav-tab-58").click(function ()
                {
                    var groupData_58 = null;
                    groupData_58 = getBracket_58();
                    var editor_58 = $("#editor-58");
                    var view_58 = $("#view-58");
                    
                    editor_58.empty();
                    editor_58.group(
                        { 
                            init: groupData_58,
                            save: saveBracket_58
                        }
                    );

                    view_58.empty();
                    view_58.group(
                        {
                            init: groupData_58
                        }
                    );
                }
            ); 
                    $("#nav-tab-59").click(function ()
                {
                    var groupData_59 = null;
                    groupData_59 = getBracket_59();
                    var editor_59 = $("#editor-59");
                    var view_59 = $("#view-59");
                    
                    editor_59.empty();
                    editor_59.group(
                        { 
                            init: groupData_59,
                            save: saveBracket_59
                        }
                    );

                    view_59.empty();
                    view_59.group(
                        {
                            init: groupData_59
                        }
                    );
                }
            ); 
            
    }); 
    
    


</script>
        

    </body>
</html><?php }
}
