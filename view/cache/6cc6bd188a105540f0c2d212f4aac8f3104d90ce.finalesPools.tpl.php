<?php
/* Smarty version 3.1.29, created on 2016-04-09 16:51:08
  from "E:\wamp\www\Intranet\view\templates\admin\finalesPools.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570916dcd9ea37_04483916',
  'file_dependency' => 
  array (
    '6cc6bd188a105540f0c2d212f4aac8f3104d90ce' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\finalesPools.tpl',
      1 => 1458867193,
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
    '13498c73bf46a05f2abff41b545f6992d58589b2' => 
    array (
      0 => 'E:\\wamp\\www\\Intranet\\view\\templates\\admin\\assets\\js\\finalesPools.js.tpl',
      1 => 1458819247,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_570916dcd9ea37_04483916 ($_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/Intranet/view/templates/admin/assets/css/finalesPools.css" >
        <!-- jquery-bracket -->
        <link rel="stylesheet" type="text/css" href="/Intranet/lib/jQuery/jquery.bracket.min.css" />
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
                
                <h1>Finales de HOTS GOLD</h1>      
                
                <div id="bloc_tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-bracket-winner" aria-controls="tab-bracket-winner" role="tab" data-toggle="tab">Winner bracket</a></li>
                        <li role="presentation"><a href="#tab-bracket-looser" aria-controls="tab-bracket-looser" role="tab" data-toggle="tab">Looser bracket</a></li>
                    </ul>
                </div>                
                <div class="tab-content">
                    <!-- tab-bracket-winner -->
                    <div role="tabpanel" class="tab-pane active" id="tab-bracket-winner">
                        <div class="row">
                            <div id="components" class="col-lg-6">
                                <h2>Editeur</h2>
                                <div id="editor" class="bracket"></div>
                                <h2>Vue de l'utilisateur</h2>
                                <div id="view"></div>
                            </div>  
                            <div id="data" class="col-lg-6">
                                <h2>Code JSON</h2>
                                <p>Code JSON pour le stockage dans la base de données.</p>
                                <pre id="state">&lt;-- Utilisez l'éditeur de gauche afin de voir le code généré.</pre>                        
                            </div>                                      
                        </div> 
                    </div>
                    <!-- tab-bracket-looser -->
                    <div role="tabpanel" class="tab-pane" id="tab-bracket-looser">
                        <div class="row">
                            <p>No looser bracket man !</p>                                     
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

        <!-- jquery-bracket -->
        <script type="text/javascript" src="/Intranet/lib/jQuery/jquery.bracket.min.js"></script>

        
<script>

    function getBracket()
    {
        // Initial data if is not encoded in the database
        var result =  {
            teams: [
                ["Team 1", "Team 2"], 
                ["Team 3", "Team 4"] 
            ],
            results: [[1, 0], [2, 7]]
        };
    
        // Getting the bracket - the group_number must be dynamic
        $.ajax(
            {
                url: '../common/bracket_get.php?id_tournoi=1&type=2&number=1',
                type: 'GET',
                dataType: 'text',
                success: function (text, status)
                {
                    /*if(text.contains("error"))
                    {
                        result = {
                            teams: [
                                ["Team 1", "Team 2"], 
                                ["Team 3", "Team 4"] 
                            ],
                            results: [[1, 0], [2, 7]]
                        };
                    }*/
                    //else
                    //{
                        result = JSON.parse(text);
                    //}
 
                },
                error: function (resultat, statut, erreur)
                {
                    result = {
                            teams: [
                                ["Team 1", "Team 2"], 
                                ["Team 3", "Team 4"] 
                            ],
                            results: [[1, 0], [2, 7]]
                        };
                },
                complete: function (resultat, statut)
                {

                },
                async: false
            }
        );
        return result;
    }
        
    function saveBracket(state)
    {
        // Write your storage code here, now just display JSON above
        $('#state').text(JSON.stringify(state, undefined, 2));
        // Reconstruct read-only version by initializing it with received state
        $('#view').empty().bracket({
            init: state
        });
        $.ajax(
            {
                url: 'modules/bracket_save.php',
                type: 'POST',
                data: "json=" + $("#state").text() + "&id_tournoi=1&type=2&number=1", 
                dataType: 'text'
            }
        );      
    }; 
    
    // Function when document is ready
    $(function ()
    {       
        // Initial data if is not encoded in the database
        var bracketData = {
            teams: [
                ["Team 1", "Team 2"], 
                ["Team 3", "Team 4"] 
            ],
            results: [[1, 0], [2, 7]]
        };         
        
        //var bracketData = null;
        bracketData = getBracket();
        
        var editor = $("#editor");
        var view = $("#view");
        
        editor.empty();
        editor.bracket(
            { 
                init: bracketData,
                save: saveBracket
            }
        );

        view.empty();
        view.bracket(
            {
                init: bracketData
            }
        );

    });

</script>


    </body>
</html><?php }
}
