{* Smarty *}
<!DOCTYPE html>
<html lang="fr">
    <head>
        {include file="admin/meta.tpl"}
        <link rel="stylesheet" type="text/css" href="{#adminAssets#}/css/emplacements.css" >
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
                    <br><br>
                    <p><center><input class="submit" type="submit" value="Valider" /></center></p>
                </form>
                <!--<div id="dialogInfo_joueur"></div>
                <div id="dialogInfo_equipe"></div>-->
            </div>
            <div class="col-lg-10" style="position: relative;
                float:right; 
                height: 110%;
                width: 80%;
                font-size:10px;
                border-width: 1px;
                border-style: solid;">
                <img class="photo" src="{#src#}/img/plan.jpg" width="100%" height="100%" >
                {foreach from=$emplacements item=emplacement}
                    <div class="place" id="{$emplacement['id_emplacement']}"
                           style="
                              position:absolute;
                              top:{$emplacement['top']}%;
                              left:{$emplacement['xy_left']}%;
                              width:{$emplacement['width']}%;
                              height:{$emplacement['height']}%;
                              border:0.1em solid #000;
                              text-align: center;
                              color: #000000;">
                      {$emplacement['numero']}                          
                    </div>
                {/foreach}                        
                {foreach from=$emplacements1 item=emplacement1}
                    <div class="place" id="info" style='position:absolute;
                             top: {$emplacement1.top}%;
                             left: {$emplacement1.xy_left}%;
                             width: {$emplacement1.width}%;
                             height: {$emplacement1.height}%;
                             border:0.1em solid red;
							background:rgba(100,100,100,0.3);
							text-align:center;'>
                            <span>
                                Pseudo : <strong> {$emplacement1.pseudo}</strong>
                                <br>
                                Prénom : <strong> {$emplacement1.prenom}</strong>
                                <br>
                                Nom : <strong> {$emplacement1.nom}</strong>
                                <br>
                                Equipe : {$emplacement1.team}
                                <br>
                                <u>Tournois : {$emplacement1.nomTournoi}</u>
                                <br>
                            </span>
					</div>
                {/foreach}                        
                <div id="cadre"</div>
            </div>
	</div>	
    </div>
	
        <!-- gap to have the footer in the bottom of the window -->
        <!--<div style="height: 450px;"></div>-->
        
	{include file="admin/footer.tpl"}
	<script type="text/javascript" src="{#adminAssets#}/js/emplacements.js"></script>	
    </body>
</html>