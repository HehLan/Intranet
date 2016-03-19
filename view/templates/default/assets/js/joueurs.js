/**************************
 Bootstrap tabs
**************************/


/**************************
 fonction recherche joueurs
 **************************/
$(document).ready(function () {
    // détection de la saisie dans le champ de recherche
    $('#recherche_joueur').keyup(function () {
        $('#results').show();

        $('.ClassPseudo').hide();

        // on recupère le 1 cractère qu'on met en majusqule. Et en suite on lui ajoute la suite de la chaine rentré par user.
        var modifiedString = $('#recherche_joueur').val().charAt(0).toUpperCase() + $('#recherche_joueur').val().substring(1);

        $('.ClassPseudo:contains("' + $('#recherche_joueur').val() + '"), .ClassPseudo:contains("' + modifiedString + '")').each(function () {
            $(this).show();
            $('#results').hide();
        });
    });

    $('#recherche_equipe').keyup(function () {
        $('#results_equipe').show();

        $('.ClassEquipe').hide();

        // on recupère le 1 cractère qu'on met en majusqule. Et en suite on lui ajoute la suite de la chaine rentré par user.
        var modifiedString = $('#recherche_equipe').val().charAt(0).toUpperCase() + $('#recherche_equipe').val().substring(1);

        $('.ClassEquipe:contains("' + $('#recherche_equipe').val() + '"), .ClassEquipe:contains("' + modifiedString + '")').each(function () {
            $(this).show();
            $('#results_equipe').hide();
        });
    });

    /*********************************************
     alerte apparait lors du clic sur l'emplacement
     **********************************************/
    //colorie la case pour le pseudo
    $('div').delegate('.ClassPseudo', 'click', function (e)
    {
        $('.place').css({background: "none"});
        $('#' + $(this).attr("value")).css({background: '#0076a3'});
    });

    // recupere id_equipes pour l'envoi en AJAX
    $('.ClassEquipe').click(function (e)
    {
        valeur = $(this).attr("value");
        $('.place').css({background: "none"});
        $.ajax({
            type: "POST",
            url: "modules/color_equipe.php",
            data: "id_equipes=" + valeur,
            success: function (contenu, etat)
            {
                $("#dialogEquipe_Emplacement").html(contenu);
            }
        });
    });
});

/*****       
 onglet
 ******/
function show_tab(num)
{
    if (num == 1)
    {
        document.getElementById('tabs-1').style.display = "";
        document.getElementById('tabs-2').style.display = "none";
    }
    else
    {
        document.getElementById('tabs-2').style.display = "";
        document.getElementById('tabs-1').style.display = "none";
    }
}