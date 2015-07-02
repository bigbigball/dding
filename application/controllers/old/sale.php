<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		redirect('http://item.jd.com/1329196.html');
	}
}