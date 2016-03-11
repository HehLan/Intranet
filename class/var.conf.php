<?php
$domain = 'Intranet';
define('DOCUMENT_ROOT', $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/'.$domain);
define('SMARTY_DIR', DOCUMENT_ROOT.'/lib/Smarty/');
define('WEB_ROOT', 'http://localhost:8080/'.$domain);
define('ADMIN_ROOT', 'http://localhost:8080/'.$domain.'/admin');

$root=pathinfo($_SERVER['SCRIPT_FILENAME']);
define ('BASE_FOLDER', basename($root['dirname']));
define ('SITE_ROOT',    realpath(dirname(__FILE__)));
define ('SITE_URL',    'http://'.$_SERVER['HTTP_HOST'].'/'.BASE_FOLDER);

$glob_host = 'localhost';
$glob_port = '3306';
$glob_database = 'intranetbd'; 
$glob_user = 'root';
$glob_pwd = '';
$glob_debug = true;

?>