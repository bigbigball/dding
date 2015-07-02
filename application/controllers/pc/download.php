<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if($device=='pc')
		$this->cismarty->display($device . '/download.tpl');
		else
		$this->load->view('m/download.php');
	}
}