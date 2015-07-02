<?php
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');

require_once( APPPATH . 'libraries/smarty/Smarty.class.php' );

class Cismarty extends Smarty {
    protected $ci;
    protected $complie_dir;
    protected $template_ext;

    public function  __construct(){
    	parent::__construct();

        $this->ci = & get_instance();

        $this->ci->load->config('smarty');

        $this->template_dir   = $this->ci->config->item('template_dir');

        $this->complie_dir    = $this->ci->config->item('compile_dir');

        $this->cache_dir      = $this->ci->config->item('cache_dir');

        $this->config_dir     = $this->ci->config->item('config_dir');

        $this->template_ext   = $this->ci->config->item('template_ext');

        $this->caching        = $this->ci->config->item('caching');

        $this->cache_lifetime = $this->ci->config->item('lefttime');
        $this->left_delimiter = '{%';
        $this->right_delimiter = '%}';

    }
} 