<?php

    define('SMARTY_DIR', 'include/smarty-3.1.30/libs/');
    require_once(SMARTY_DIR . 'Smarty.class.php');

    class smarty_setup extends Smarty 
    {

        function __construct()
        {        
            parent::__construct();

            $this->template_dir = 'dir/templates/';
            $this->compile_dir  = 'dir/compile/';
            $this->config_dir   = 'dir/configs/';
            $this->cache_dir    = 'dir/cache/';

            //$this->caching = true;
            $this->assign('app_name', 'dashboard');
        }

    }

?>