<?php


session_start();
require_once('../../common/var.conf.php');
require_once(DOCUMENT_ROOT.'/common/utils.php');
require_once(DOCUMENT_ROOT.'/class/Smarty_HEHLan.class.php');
require_once(DOCUMENT_ROOT.'/class/Database.class.php');
require_once(DOCUMENT_ROOT.'/class/Auth.class.php');
require_once(DOCUMENT_ROOT.'/class/Query.class.php');



$database = new Database();





if (isset($_POST['id_tournoi']) && isset($_POST['group_name']))
{
    $id_tournoi = $_POST['id_tournoi'];
    $group_name = $_POST['group_name'];
    
    
    $sql = 'INSERT INTO groupes_pool VALUES (NULL, :id_tournoi , :group_name)';
    $query = new Query($database, $sql);
    $query->bind(':id_tournoi', $id_tournoi, PDO::PARAM_INT);
    $query->bind(':group_name', $group_name, PDO::PARAM_STR);
    $query->execute();
    
} 
else
{
    exit;
}






?>