<?php

namespace LCloss\Page;

use Rain\Tpl;

define('VIEW_DIR', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'front');

class Page {
    private $tpl;
    private $options = [];
    private $defaults = [
        'header'    => true,
        'footer'    => true,
        'data'      => [],
    ];
    
    public function __construct($opts = array(), $tpl_dir = VIEW_DIR)
    {
        die($tpl_dir);
        
        $this->options = array_merge($this->defaults, $opts);
        
        // config
        $config = array(
            "tpl_dir"       => $_SERVER['DOCUMENT_ROOT'] . $tpl_dir . "/src/",
            "cache_dir"     => $_SERVER['DOCUMENT_ROOT'] . $tpl_dir . "/cache/",
            "debug"         => true, // set to false to improve the speed
        );
        
        Tpl::configure( $config );
        
        $this->tpl = new Tpl;
        
        $this->_setData($this->options['data']);
        
        if ( $this->options['header'] ) {
            $this->tpl->draw('header');
        }
    }
    
    public function setTpl($name, $data = array(), $returnHTML = false)
    {
        $this->_setData($data);
        
        return $this->tpl->draw($name, $returnHTML);
    }
    
    private function _setData($data)
    {
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }
    
    public function __destruct()
    {
        if ( $this->options['footer'] ) {
            $this->tpl->draw('footer');
        }
    }
}

?>