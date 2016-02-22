<?php



$domain = 'Intranet';
$root = $_SERVER['DOCUMENT_ROOT'].$domain;
$path = $root.'/lib/Smarty/Smarty.class.php';
require_once($path);


// Smarty_HEHLan class
class Smarty_HEHLan extends Smarty {
    
    public function __construct()
    {
        parent::__construct();
      
        
        //$this->setTemplateDir($root.'/templates');
        //$this->setCompileDir($root.'/templates_c');
        //$this->setCacheDir('lib/smarty/cache');
        //$this->setConfigDir($root.'/templates');
        
        $this->force_compile = true;
        $this->debugging = true;
        $this->caching = false;
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
