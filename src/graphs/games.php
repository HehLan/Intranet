<?php

session_start();
require_once('../../class/var.conf.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');


require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph.php');
require_once(DOCUMENT_ROOT.'/lib/JpGraph/src/jpgraph_pie.php');



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


$total = $playersHOTS + $playersCOD4 + $playersTMNF + $playersHS;


$data = array(
    ($playersHOTS/$total)*100,
    ($playersCOD4/$total)*100,
    ($playersTMNF/$total)*100,
    ($playersHS/$total)*100
);

$legend = array(
    'HOTS',
    'COD4',
    'TMNF',
    'HS'
);





$graph = new PieGraph(350,250);
$graph->SetShadow();
$graph->title->Set('Games Ratio');
$graph->SetBox(true);
$graph->SetMargin(1,1,40,1);
$graph->SetMarginColor('white');



$p1 = new PiePlot($data);
$p1->SetLabelType(PIE_VALUE_ADJPERCENTAGE);
$p1->ShowBorder(true);
$p1->SetCenter(0.4);
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C'));




$p1->value->SetFormat('%d%%');
$p1->SetGuideLines(true, true);
$p1->SetGuideLinesAdjust(1.5);
$p1->SetLegends($legend);






$graph->Add($p1);
$graph->Stroke();


?>

