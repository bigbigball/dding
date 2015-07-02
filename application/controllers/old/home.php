<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		$this->cismarty->display($device . '/index.tpl', array('device'=>$device));

	}
}
