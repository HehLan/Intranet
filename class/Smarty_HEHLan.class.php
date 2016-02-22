<?php

// Smarty Library
require_once('lib/smarty/Smarty.class.php');

// Smarty_HEHLan class
class Smarty_HEHLan extends Smarty {
    
    public function __construct()
    {
        parent::__construct();
        
        //$this->template_dir = '{#templatePath#}templates/';       
        //$this->compile_dir = '/Intranet/templates_c/';
        //$this->config_dir = '/Intranet/configs/';
        //$this->cache_dir = '/Intranet/cache/';
        
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
