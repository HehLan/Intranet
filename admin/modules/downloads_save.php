<?php


session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();




if (isset($_POST['id_downloads']))
{
     $id_downloads = $_POST['id_downloads'];
} 
else
{
    exit;
}
		
if ($id_downloads == 0)
{
    $sql = 'INSERT INTO downloads (title,src,published_date,invisible) 
    VALUES (:title,:textarea,NOW(),:invisible)';
    $query = new Query($database, $sql);
    $query->bind(':title', $_POST['title'], PDO::PARAM_STR);
    $query->bind(':textarea', $_POST['textarea'], PDO::PARAM_STR);
    $query->bind(':invisible', 0, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: ../downloads.php');
    }
    else
    {
        echo 'ERREUR INSERT DOWNLOADS';
    }	
}
else
{
    $sql = 'UPDATE downloads SET title=:title, src=:textarea, published_date=NOW() WHERE id_downloads=:id';
    $query = new Query($database, $sql);
    $query->bind(':title', $_POST['title'], PDO::PARAM_STR);
    $query->bind(':textarea', $_POST['textarea'], PDO::PARAM_STR);
    $query->bind(':id', $id_downloads, PDO::PARAM_INT);
    if($query->execute())
    {
        header('Location: ../downloads.php');
    }
    else
    {
        echo 'ERREUR UPDATE';	
    }
}




?>