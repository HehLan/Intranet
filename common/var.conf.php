<?php
$domain = 'edsa-Intranet';
define('DOCUMENT_ROOT', $_SERVER['CONTEXT_DOCUMENT_ROOT']);
define('ADMIN_DOCUMENT_ROOT', DOCUMENT_ROOT.'/admin');
define('ADMIN_MODULES_DOCUMENT_ROOT', ADMIN_DOCUMENT_ROOT.'/modules');
define('SMARTY_DIR', DOCUMENT_ROOT.'/lib/Smarty/');
define('WEB_ROOT', 'http://localhost:8080/'.$domain);
define('ADMIN_ROOT', 'http://localhost:8080/'.$domain.'/admin');


$glob_host = 'localhost';
$glob_port = '3306';
$glob_database = 'hehlanbd'; 
$glob_user = 'root';
$glob_pwd = '1234';
$glob_debug = true;

?>