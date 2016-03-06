{* Smarty *}
<!DOCTYPE html>
<html>
    <head> 
        {include file="admin/meta.tpl"} 
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/joueurs.css" >
        <script type="text/javascript" src="{#domain#}/src/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/src/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/src/js/getXhr.js"></script>
        <script>
            $(document).ready(function() {

                $( ".joueurAdmin" ).click(function() {

                    $(".joueurAdmin").css(background: "none");
                    $( this ).css(background: "rgba(0,0,255,0.2)");
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/listeDesTournoisDuJoueur.php",
                        data: "id_joueur="+$(this).attr("value"),
                        success : function(contenu,etat){ 
                            $('#listeTournoisInscritDuJoueur').php(contenu);
                        }
                    });
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/equipesDuJoueur.php",
                        data: "id_joueur="+$(this).attr("value"),
                        success : function(contenu,etat){ 
                            $('#EquipesDuJoueurAdmin').php(contenu);
                        }
                    });

                });

                $( "#infoEquipeAdmin" ).dialog({
                    autoOpen: false,
                    title:"information",
                    height: 300,
                    width: 350,
                    modal: true,
                    close: function() {

                    }
                });

                $("div").delegate("#submitChangementEquipeDuJoueur", "click", function(){
                    var AuMoinsUneEquipe=false;
                    var i=0;
                    var id ='id_joueur='+$("#idJoueurAdminForEquipe").attr("value");
                    $( ".chkbxEquipeDuJoueur:checked" ).each(function(){
                        id +='&inscrit['+i+']='+$(this).attr("value");
                        i++;
                        AuMoinsUneEquipe=true;
                    });
                    if ($( "#SelectAjoutJoueurEquipe" ).val()) {
                        id +='&inscrit['+i+']='+$( "#SelectAjoutJoueurEquipe" ).val();
                    }else if (!AuMoinsUneEquipe){
                        id +='&deleteAll=1';
                    }
                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertEquipeDuJoueur.php",
                        data: id,
                        success : function(contenu,etat){ 
                            $( "#infoEquipeAdmin" ).php(contenu);
                            $( "#infoEquipeAdmin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); location.reload(); } } ] });
                            $( "#infoEquipeAdmin" ).dialog( "open" );
                        }
                    });

                });


                $("div").delegate("#submitChgtTournoijoueurAdmin", "click", function(){
                    var erreurSurvenue=false;
                    var i=0;

                    var id ='id_joueur='+$("#idJoueurAdmin").attr("value");
                    $( ".chkbxJoueurTournoi:checked" ).each(function(){
                        id +='&inscrit['+i+'][1]='+$(this).attr("value");
                        id +='&inscrit['+i+'][2]='+$("#txtbxJoueurTournoi"+$(this).attr("value")).val();
                        i++;

                    });

                    $.ajax({ 
                        type: "POST", 
                        url: "admin/insertTournoiJoueur.php",
                        data: id,
                        success : function(contenu,etat){ 
                            $( "#infoEquipeAdmin" ).php(contenu);
                            $( "#infoEquipeAdmin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); location.reload(); } } ] });
                            $( "#infoEquipeAdmin" ).dialog( "open" );
                        }
                    });
                });
            });
        </script>  
    </head>

    <body role="document">
        {include file="admin/header.tpl" con=$con }
        {include file="admin/nav.tpl"  con=$con } 

        <div id="container" class="container-fluid">
            <div id="contenu">
                <div id="ListejoueurAdmin">
                    <fieldset>
                        <legend>Liste des joueurs</legend>
                        <table class="listeJoueurs">
                            <thead>
                                <tr>
                                    <th>Les Joueurs</th>
                                    <th>Tournois</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div id="listejoueurAdmin" >
                                            {foreach from=$joueurs item=joueur}
                                               <h6 class="joueurAdmin" value="{$joueur['id_joueur']}">{$joueur['pseudo']}</h6> 
                                            {/foreach}
                                        </div>
                                    </td>
                                    <td>
                                        <div id="listeTournoisInscritDuJoueur">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2" style="font-size: 16px; font-weight: bold; color: #fff;">
                                        Equipes du joueur
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <div id="EquipesDuJoueurAdmin" style="height:150px;">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>    
                    </fieldset>
                    <div id="infoEquipeAdmin" style="display: none"></div>
                </div>
            </div>	
        </div> 

        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 150px;">

        </div>

        {include file="admin/footer.tpl"  con=$con } 
    </body>
</html>