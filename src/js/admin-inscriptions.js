$(document).ready(function() {

    $( ".submitInscriptionEquipesTournoiAdmin" ).click(function() {
        var id=$( this ).attr('id');
        var donnee='id_tournoi='+id;
        var i=0;
        $( "#ListeInscrit"+id+" input[type=checkbox]:checked").each(function(){

            donnee+="&inscrit["+i+"]="+$(this).val();
            i++;
        });

        $.ajax({ 
            type: "POST", 
            url: "modules/insertInscritEquipe.php",
            data: donnee,
            success : function(contenu,etat){ 
                alert(contenu);

            }
        });
    });

    $( ".submitInscriptionJTAdmin" ).click(function() {
        var id=$( this ).attr('id');
        var donnee='id_tournoi='+id;
        var pseudoJeux='';
        var i=0;
        $( "#ListeInscritJT"+id+" input[type=checkbox]:checked").each(function(){
            //pseudoJeux+="&pseudoJeux["+i+"]="+$( "#Joueur"+id+$(this).val() ).val();
            donnee+="&inscrit["+i+"]="+$(this).val();
            i++;
        });

        $.ajax({ 
            type: "POST", 
            url: "modules/insertInscritJoueur.php",
            data: donnee,
            success : function(contenu,etat){ 
                alert(contenu);

            }
        });
    });

});


