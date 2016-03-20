<?php

session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph.php');
require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph_bar.php');



$database = new Database();
$smarty = new Smarty_HEHLan();



$sql = 'SELECT COUNT(*) AS nbr FROM joueurtournoi
        WHERE id_tournoi = 1';
$query =  new Query($database, $sql);
if($query->execute())
{
    $playersHOTS = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM joueurtournoi
        WHERE id_tournoi = 2';
$query =  new Query($database, $sql);
if($query->execute())
{
    $playersCOD4 = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM joueurtournoi
        WHERE id_tournoi = 3';
$query =  new Query($database, $sql);
if($query->execute())
{
    $playersTMNF = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM joueurtournoi
        WHERE id_tournoi = 5';
$query =  new Query($database, $sql);
if($query->execute())
{
    $playersHS = $query->getResult()[0]['nbr'];
}



$sql = 'SELECT COUNT(*) AS nbr FROM equipes_tournoi
        WHERE id_tournoi = 1';
$query =  new Query($database, $sql);
if($query->execute())
{
    $teamsHOTS = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM equipes_tournoi
        WHERE id_tournoi = 2';
$query =  new Query($database, $sql);
if($query->execute())
{
    $teamsCOD4 = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM equipes_tournoi
        WHERE id_tournoi = 3';
$query =  new Query($database, $sql);
if($query->execute())
{
    $teamsTMNF = $query->getResult()[0]['nbr'];
}

$sql = 'SELECT COUNT(*) AS nbr FROM equipes_tournoi
        WHERE id_tournoi = 5';
$query =  new Query($database, $sql);
if($query->execute())
{
    $teamsHS = $query->getResult()[0]['nbr'];
}


$data1y = array(
    $playersHOTS,
    $playersCOD4,
    $playersTMNF,
    $playersHS
);

$data2y = array(
    $teamsHOTS,
    $teamsCOD4,
    $teamsTMNF,
    $teamsHS
);










 
// Create the graph. These two calls are always required
$graph = new Graph(300,250);  
$graph->ClearTheme();
$graph->SetShadow();
$graph->SetScale("textlin");
 
$graph->SetShadow();
$graph->img->SetMargin(40,30,20,40);
 
// Create the bar plots
$b1plot = new BarPlot($data1y);
$b1plot->SetFillColor("#222C43");
$b1plot->SetLegend("Players");

$b2plot = new BarPlot($data2y);
$b2plot->SetFillColor("#366797");
$b2plot->SetLegend("Teams");



 


// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot,$b2plot));
 
// ...and add it to the graPH
$graph->Add($gbplot);
 
$graph->title->Set("Games Rating");
$graph->xaxis->title->Set("Games");
$graph->yaxis->title->Set("Number of registered");
$graph->xaxis->SetTickLabels(array('HOTS','COD4','TMNF','HS'));
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Display the graph
$graph->Stroke();


?>



