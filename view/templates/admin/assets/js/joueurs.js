$(document).ready(function()
{
    $( ".joueurAdmin" ).click(function()
    {
        $(".joueurAdmin").css({background: "none"});
        $( this ).css({background: "rgba(0,0,255,0.2)"});
        $.ajax({ 
            type: "POST", 
            url: "modules/listeDesTournoisDuJoueur.php",
            data: "id_joueur="+$(this).attr("value"),
            success : function(contenu,etat){ 
                $('#listeTournoisInscritDuJoueur').html(contenu);
            }
        });
        $.ajax({ 
            type: "POST", 
            url: "modules/equipesDuJoueur.php",
            data: "id_joueur="+$(this).attr("value"),
            success : function(contenu,etat){ 
                $('#EquipesDuJoueurAdmin').html(contenu);
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
            url: "modules/insertEquipeDuJoueur.php",
            data: id,
            success : function(contenu,etat){ 
                $( "#infoEquipeAdmin" ).html(contenu);
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
            url: "modules/insertTournoiJoueur.php",
            data: id,
            success : function(contenu,etat){ 
                $( "#infoEquipeAdmin" ).php(contenu);
                $( "#infoEquipeAdmin" ).dialog({ buttons: [ { text: "Ok", click: function() { $( this ).dialog( "close" ); location.reload(); } } ] });
                $( "#infoEquipeAdmin" ).dialog( "open" );
            }
        });
    });
});


