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


$total = $teamsHOTS + $teamsCOD4 + $teamsTMNF + $teamsHS;


$data = array(
    ($teamsHOTS/$total)*100,
    ($teamsCOD4/$total)*100,
    ($teamsTMNF/$total)*100,
    ($teamsHS/$total)*100
);

$labels = array(
    "HOTS\n(%.1f%%)",
    "COD4\n(%.1f%%)",
    "TMNF\n(%.1f%%)",
    "HS\n(%.1f%%)"
);




$graph = new PieGraph(300,250);;
$graph->ClearTheme();
$graph->SetShadow();
$graph->title->Set('Teams Games Ratio');
$graph->title->SetFont(FF_VERDANA,FS_BOLD,11);
$graph->title->SetColor('black');

$p1 = new PiePlot($data);
$graph->Add($p1);
$p1->SetCenter(0.5,0.5);
$p1->SetSize(0.25);
$p1->ShowBorder();
$p1->value->SetFormat('%d%%');
$p1->SetGuideLines();
$p1->SetGuideLinesAdjust(1.5);
$p1->SetLabels($labels);
$p1->SetLabelPos(1);
$p1->SetLabelType(PIE_VALUE_ADJPERCENTAGE);
$p1->value->Show();
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,9);
$p1->value->SetColor('darkgray');
$p1->SetSliceColors(array('#366797','#6995BF','#58647E','#222C43'));




$graph->Stroke();


?>



