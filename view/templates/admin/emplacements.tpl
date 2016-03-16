{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/emplacements.css" >
        <script type="text/javascript" src="{#adminAssets#}/js/emplacements.js"></script>	
</head>

<body role="document">
    {include file="admin/header.tpl" con=$con }
    {include file="admin/nav.tpl"  con=$con }      

    <div id="container" class="container-fluid">
        <div id="contenu" class="row">
            <div class="col-lg-2">
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
                        <option value="{$equipe['id_equipes']}">{$equipe['nom']}</option>
                    {/foreach}           
                </select>
                <div id="dialogEquipe_Emplacement"></div>
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
                <div id="dialogInfo_joueur"></div>
                <div id="dialogInfo_equipe"></div>
            </div>
            <div class="col-lg-10" style="position: relative;
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
                <div id="cadre"</div>
            </div>
	</div>	
    </div>
	
        <!-- gap to have the footer in the bottom of the window -->
        <div style="height: 450px;"></div>
        
	{include file="admin/footer.tpl"}
    </body>
</html>