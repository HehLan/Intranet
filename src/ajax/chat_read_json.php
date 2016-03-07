<?php



// Includes
session_start();
require_once('../../common/utils.php'); // get some utility functions
require_once('../../class/Smarty_HEHLan.class.php');
require_once('../../class/Database.class.php');
require_once('../../class/Auth.class.php');
require_once('../../class/Query.class.php');

$database = new Database();



header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: text/xml; charset=utf-8");


$sql = 'SELECT * FROM tchat WHERE quand >=';

if (!isset($_POST['start']))
{
    $sql.="NOW()";
}
else
{
    $sql.=":start";
}
    

$sql.=' AND id_chat >:max ORDER BY quand'; 
$query = new Query($database, $sql);

$max = 0;
if (isset($_POST['max']))
{
    $max = $_POST['max'];
}
$query->bind('max', $max, PDO::PARAM_INT);
if (isset($_POST['start']))
{
    $query->bind('start', $_POST['start'], PDO::PARAM_INT);
}

echo '
{"messages":
	{"message":[ ';
if ($query->execute())
{
    $first = true;
    foreach($query->getResult() as $msg)
    {
        $pseudo = htmlspecialchars($msg['pseudo']);
        $message = htmlspecialchars($msg['message']);
        //$quand=get_date($msg['quand']).' à '.get_heure($msg['quand']);
        $quand = get_heure($msg['quand']);
        if (!$first)
            echo ',';
        echo '{"id": "' . $msg['id_chat'] . '","user": "' . $pseudo . '", "text": "' . $message . '", "time": "' . $quand . '" }';
        $first = false;
    }
}
else {
    echo 'ERREUR NEWS SQL';
}
echo ' ]
	}
}';


