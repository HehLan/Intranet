{* Smarty *}}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <script type="text/javascript" src="{#domain#}/assets/js/jquery.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="{#domain#}/assets/js/getXhr.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
            //colorie la case pour le pseudo
                $('#SelectPseudo').change(function()
                {
                $("#dialogInfo_equipe").css(display :"none");
                $('.place').css(background : "none");
                $('#'+$('#SelectPseudo').val()).css(background : "#9ba0ee");
                valeur = $('#SelectPseudo').val();
                    $.ajax(
                    { 
                    type: "POST", 
                    url: "admin/info_joueur.php",
                    data: "id_emplacement="+valeur,
                    success : function(contenu,etat)
                        { 
                        $("#dialogInfo_joueur").php(contenu);
                        }
                    });
               });
             //colorie la place pour le select emplacement
                $('#SelectEmplacement').change(function()
                {
                    $('.place').css(background : "none");
                  $('#'+$('#SelectEmplacement').val()).css(background : "green");
               });
            // recupere id_equipes pour l'envoi en AJAX
                $('#SelectEquipe').change(function()
                {
                    $("#dialogInfo_joueur").css(display :"none");
                    $('.place').css(background : "none");
                    valeur=$('#SelectEquipe').val();
                    $.ajax(
                        { 
                        type: "POST", 
                        url: "admin/color_equipe.php",
                        data: "id_equipes="+valeur,
                        success : function(contenu,etat)
                                { 
                                $( "#dialogEquipe_Emplacement" ).php(contenu);
                                $( "#dialogInfo_equipe" ).php(contenu);
                                }         

                        });  
               });
            });
	</script>
    <style>    
        #info{
        position:relative;
        z-index:24;
        color:#000;
        text-decoration:blink
        }

        #info:hover{
        z-index:25;
        background-color:red;
        cursor: help;
        }

        #info span{
        display: none
        }

        #info:hover span{
        display:block;
        position:absolute;
        top:2em; left:2em; width:10em;
        border:1px solid #000;
        background-color:#FFF;
        color:#000;
        text-align: justify;
        font-size: medium;
        font-weight:none;
        padding:5px;
        }
    </style>	
</head>

<body role="document">
    {include file="admin/header.tpl" con=$con }
    {include file="admin/nav.tpl"  con=$con }      

    <div id="container">
        <div id="contenu">
            <div style="position: relative;
                float:right; 
                height: 110%;
                width: 80%;
                font-size:10px;
                border-width: 1px;
                border-style: solid;">
                <img class="photo" src="{#assets#}/img/plan.jpg" width="100%" height="100%" >
                {foreach from=$locations item=location}
                    <div class="place" id="{$location['id_emplacement']}"
                           style="
                              position:absolute;
                              top:{$location['top']}%;
                              left:{$location['xy_left']}%;
                              width:{$location['width']}%;
                              height:{$location['height']}%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      {$location['numero']}                          
                    </div>
                {/foreach}                        
                {foreach from=$locations_1 item=location_1}
                    <div class="place" id="info"
                         style="
                         position:absolute;
                         top:{$location_1['top']}%;
                         left:{$location_1['xy_left']}%;
                         width:{$location_1['width']}%;
                         height:{$location_1['height']}%;
                         border:0.1em solid red;
                         background:rgba(100,100,100,0.3);
                         text-align:center;"
                         >
                        
                        
                        
                        <span><u>pseudo :</u>{$location_1['pseudo']}<br>
                            <u>Equipe :</u>
                                {', '|implode:$teams}
                        </span></a>
                    </div>
                {/foreach}                        
                <div id="cadre" style="
                     position: absolute;
                     top: 5%;
                     left: 36%;
                     width: 4.5%;
                     height:3%;
                     border:0.1em solid #000;
                     text-align:center;">
                </div>
                <!-- VISIONNER LA PLACE DU JOUEUR -->    
                <b><u><center>Consulter la place :</center></u></b></b>
                <br><br>
                <!-- PSEUDO -->
                Pseudo :
                <select class="SelectPseudo" name="SelectPseudo" id="SelectPseudo">
                    <option value="" selected ></option>
                    {foreach from=$joueurs item=joueur}
                        <option value="{$joueur['id_emplacement']}">{$joueur['pseudo']}</option>
                    {/foreach}
                </select>
                <br>
                <br>
                <!-- Equipe -->
                Equipe :
                <select id="SelectEquipe">
                    <option value="" selected ></option>
                    {foreach from=$equipes item=equipe}
                        <option value="{$equipes['id_equipes']}">{$equipes['nom']}</option>
                    {/foreach}           
                </select>
                <div id="dialogEquipe_Emplacement" style='display:none;'></div>
                <br>
                <br>
                <!-- AJOUTER PLACE AU JOUEUR -->                                                                                       
                <form method="post" action="place.php">
                    <b><u><center>Associer la place :</center></u></b></b>
                    <br><br> 
                    Emplacement :
                    <select name="SelectEmplacement" id="SelectEmplacement">	
                        {foreach from=$emplacements item=emplacement}
                            <option value="{$emplacement['id_emplacement']}">{$emplacement['numero']}</option>"; 
                        {/foreach}	
                    </select> 
                    <br><br>
                    Pseudo :
                    <select name="SelectPseudo" id="SelectPseudo">
                        <option value="" selected ></option>
                        {foreach from=$joueurs_autre item=joueur_autre}
                            <option value="{$joueur_autre['pseudo']}">{$joueur_autre["pseudo"]}</option>
                        {/foreach}
                    </select>
                    <br><br>
                    <p><center><input class="submit" type="submit" value="Valider" /></center></p>
                </form>
                <div id="dialogInfo_joueur" style="width:300px;
                     height:auto;
                     border:1px solid #000;
                    display: none;
                    padding:5px; 
                    background-color:#9ba0ee; 
                    border:2px solid #656ab0;
                -khtml-border-radius:9px; 
                -webkit-border-radius:9px; 
                border-radius:9px;">
                    
                </div>
                <div id="dialogInfo_equipe" style="width:300px;
                     height:auto;
                     border:1px solid #000;
                display: none;
                padding:5px; 
                background-color:#ffaca3; 
                border:2px solid #ff3924;
                -khtml-border-radius:9px;
                -webkit-border-radius:9px; 
                border-radius:9px;">
                    
                </div>
            </div>
	</div>	
	
        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;"></div>
        
	{include file="admin/footer.tpl"}
    </body>
</html>