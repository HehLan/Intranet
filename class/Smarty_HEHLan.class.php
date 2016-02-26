<?php



$domain = '/Intranet';
define('DOCUMENT_ROOT', $_SERVER['CONTEXT_DOCUMENT_ROOT'].$domain);
define('SMARTY_DIR', DOCUMENT_ROOT.'/lib/Smarty/');


require_once(SMARTY_DIR.'Smarty.class.php');


// Smarty_HEHLan class
class Smarty_HEHLan extends Smarty {
    
    public function __construct()
    {
        parent::__construct();
      
        // It is not recommended to put these directories under the web server document root
        $this->setTemplateDir(DOCUMENT_ROOT.'/templates/default/');
        $this->setCompileDir(DOCUMENT_ROOT.'/templates_c/');
        $this->setCacheDir(DOCUMENT_ROOT.'/cache/');
        $this->setConfigDir(DOCUMENT_ROOT.'/configs/');
        
        $this->configLoad('paths.conf');
              
        
        $this->compile_check = true;    // put to false for maximal performance when it is into production
        $this->force_compile = true;    // should never be used in a production environment
        $this->debugging = true;
        //$this->debugging_ctrl = ($_SERVER['SERVER_NAME'] == 'localhost')
        $this->caching = 2;
        $this->cache_lifetime = 0;
        
        
        
        // Delimiters in HTML codes
        $this->left_delimiter = '{';
        $this->right_delimiter = '}';
        
        // Delimiters in JavaScript codes
        //$this->left_delimiter = '<!--{';
        //$this->right_delimiter = '}-->';
        
        $this->assign('app_name', 'HEHLan');
    }
}
