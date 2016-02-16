/**************************
 fonction recherche joueurs
 **************************/
$(document).ready(function () {
    // d�tection de la saisie dans le champ de recherche
    $('#recherche_joueur').keyup(function () {
        $('#results').show();

        $('.ClassPseudo').hide();
        $('.ClassPseudo:contains("' + $('#recherche_joueur').val() + '")').each(function () {

            $(this).show();
            $('#results').hide();
        });


    });
    $('#recherche_equipe').keyup(function () {
        $('#results_equipe').show();

        $('.ClassEquipe').hide();
        $('.ClassEquipe:contains("' + $('#recherche_equipe').val() + '")').each(function () {

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
        $('#' + $(this).attr("value")).css({background: '#337ab7'});
    });


// recupere id_equipes pour l'envoi en AJAX
    $('.ClassEquipe').click(function (e)
    {
        valeur = $(this).attr("value");
        $('.place').css({background: "none"});
        $.ajax({
            type: "POST",
            url: "assets/ajax/color_equipe.php",
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