<?php

session_start();
require_once('../common/utils.php');
require_once('../class/Smarty_HEHLan.class.php');
require_once('../class/Database.class.php');
require_once('../class/Auth.class.php');


$connected = false;
$allowed = false;
$chatIsActive = false;
$database = new Database();
$smarty = new Smarty_HEHLan();


$connected = Auth::isLogged();
$allowed = Auth::isAllowed(3);


if(!$connected && !$allowed)
{
    header('Location: ../index.php');
} 



$sql = 'SELECT * FROM news ORDER by invisible, quand DESC';
$database->setQuery($sql);
$database->getQuery()->execute();
while($new = $database->getQuery()->fetch(PDO::FETCH_ASSOC))
{
    $news[] = $new;
}  



// send to the template
$smarty->assign("con", $connected);
$smarty->assign("chat", $chatIsActive);
$smarty->assign('news', $news);



$smarty->display(DOCUMENT_ROOT.'/templates/default/admin/news.tpl');	
?>