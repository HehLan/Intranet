<?php
session_start();
require_once('modules/connect.php');
require_once('../common/utils.php');
$con=false;

require_once('modules/connexion/classAuth.php');

if(isset($_SESSION['id_joueur']))
{
	if(($_SESSION['id_joueur']!=0) && $_SESSION['level']<=3) $con=true;
}
if(!$con)
{
 header('Location: ../index.php');
} 
/**********************************
 *	tournois avec equipes
 **********************************/
$query="SELECT id_tournoi, nomTournoi FROM tournoi WHERE joueurParTeam = 5";
$requete_preparee=$connexion->prepare($query);
$requete_preparee->execute();
$select="SELECT e.*";
$lefton=" FROM  equipes e";
$i=0;
while($tournoi=$requete_preparee->fetch(PDO::FETCH_ASSOC)){
    $tab[$i][1]=$tournoi['id_tournoi'];
    $tab[$i][2]=$tournoi['nomTournoi'];
    $select.=", et".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN equipes_tournoi AS et".$tournoi['id_tournoi']." ON et".$tournoi['id_tournoi'].".id_equipe = e.id_equipes AND et".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql=$select.$lefton.' ORDER BY e.nom';
$req=$connexion->prepare($sql);
$req->execute();
// On affiche le resultat
$donnees = $req->fetchAll();
/**********************************
 *	tournois individuels
 **********************************/
$query="SELECT id_tournoi, nomTournoi FROM tournoi WHERE joueurParTeam = 1";
$requete_preparee2=$connexion->prepare($query);
$requete_preparee2->execute();
$select="SELECT j.*";
$lefton=" FROM  joueurs j";
$i=0;
while($tournoi=$requete_preparee2->fetch(PDO::FETCH_ASSOC)){
    $tabJT[$i][1]=$tournoi['id_tournoi'];
    $tabJT[$i][2]=$tournoi['nomTournoi'];
    $select.=", jt".$tournoi['id_tournoi'].".id_tournoi AS id_tournoi".$tournoi['id_tournoi'].", jt".$tournoi['id_tournoi'].".pseudoJeux AS pseudoJeux".$tournoi['id_tournoi'];
    $lefton.=" LEFT OUTER JOIN joueurtournoi AS jt".$tournoi['id_tournoi']." ON jt".$tournoi['id_tournoi'].".id_joueur = j.id_joueur AND jt".$tournoi['id_tournoi'].".id_tournoi = ".$tournoi['id_tournoi'];
    $i++;
}
$sql2=$select.$lefton.' ORDER BY j.pseudo';
$req2=$connexion->prepare($sql2);
$req2->execute();
// On affiche le resultat
$donneesJT = $req2->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once('../includes/_meta.php'); ?> 
    
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/getXhr.js"></script>

<script>
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
                url: "admin/insertInscritEquipe.php",
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
                url: "admin/insertInscritJoueur.php",
                data: donnee,
                success : function(contenu,etat){ 
                    alert(contenu);
		    
                }
            });
        });
        
    });
</script>  
</head>

<body role="document">

 	<?php require_once('../includes/_header.php'); ?>
	<?php require_once('modules/menuTop.php'); ?>  
	
	<div id="container">
		<div id="contenu">
<div id="InscriptionDesJoueursEquipesAuxTournois" >
    <?php
    /**********************************
    *	tournois avec equipes
    **********************************/
    foreach($tab as $ligne)
    {
	echo"
	<div class='ListePourInscrireTournoi' >
	    <h6>".$ligne[2]."</h6>
	    <div id='ListeInscrit".$ligne[1]."'>
	";
	foreach($donnees as $row)
	{
	    if($row['id_tournoi'.$ligne[1]]==$ligne[1]){
		echo"<label><input type='checkbox' checked value='".$row['id_equipes']."'>".$row['nom']."</label><br>";
	    }
	    else{
	    	echo"<label><input type='checkbox' value='".$row['id_equipes']."'>".$row['nom']."</label><br>";
	    }
	}
	echo'
	    </div>
	    <input type="button" class="submitInscriptionEquipesTournoiAdmin" id="'.$ligne[1].'" value="Valider les inscriptions">
	</div>
	';
    }
    /**********************************
    *	tournois individuels
    **********************************/
    foreach($tabJT as $ligne)
    {
	echo"
	<div class='ListePourInscrireTournoi' >
	    <h6>".$ligne[2]."</h6>
	    <div id='ListeInscritJT".$ligne[1]."'>
	";
	foreach($donneesJT as $row)
	{
	    if($row['id_tournoi'.$ligne[1]]==$ligne[1]){
		echo"<label><input type='checkbox' checked value='".$row['id_joueur']."'>".$row['pseudo']."</label>";
	    }
	    else{
	    	echo"<label><input type='checkbox' value='".$row['id_joueur']."'>".$row['pseudo']."</label>";
	    }
	    //echo' ==> <input type="text" id="Joueur'.$ligne[1].$row['id_joueur'].'" value="'.$row['pseudoJeux'.$ligne[1]].'">';
	    echo'<br>';
	}
	echo'
	    </div>
	    <input type="button" class="submitInscriptionJTAdmin" id="'.$ligne[1].'" value="Valider les inscriptions">
	</div>
	';
    }
    ?>
     
    <div id="test"></div>
</div>
		</div>	
	</div>
	
	<!-- gap to have the footer in the bottom of the window -->
	<div style="height: 1000px;">
	
	</div>
    
	<?php require_once('../includes/_footer.php'); ?>

</body>
</html>