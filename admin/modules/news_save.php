<?php


session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();





if (isset($_POST['id_news']))
{
     $id_news = $_POST['id_news'];
} 
else
{
    exit;
}
		
if ($id_news == 0)
{
    $sql = 'INSERT INTO news (titre,texte,quand,invisible) 
    VALUES (:title,:textarea,NOW(),:invisible)';
    $query = new Query($database, $sql);
    $query->bind('title', $_POST['title'], PDO::PARAM_STR);
    $query->bind('textarea', $_POST['textarea'], PDO::PARAM_STR);
    $query->bind('invisible', 0, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: ../news.php');
    }
    else
    {
        echo 'ERREUR INSERT';
    }	
}
else
{
    $sql = 'UPDATE news SET titre=:title, texte=:textarea, quand=NOW() WHERE id_news=:id';
    $query = new Query($database, $sql);
    $query->bind('title', $_POST['title'], PDO::PARAM_STR);
    $query->bind('textarea', $_POST['textarea'], PDO::PARAM_STR);
    $query->bind('id', $id_news, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: ../news.php');
    }
    else
    {
        echo 'ERREUR UPDATE';	
    }
}	




?>