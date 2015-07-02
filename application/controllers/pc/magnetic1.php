<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magnetic extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $ci = & get_instance();
        $variable = array('haction'=>'magnetic');
        $ci->load->vars($variable);
    }
    
	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		
		if ($device == 'pc') {
		    $this->load->view('pc/magnetic');
		} else {
		    $this->cismarty->display('pc/index.tpl');
		}

	}
}
