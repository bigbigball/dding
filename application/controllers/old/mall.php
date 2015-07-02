<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mall extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		redirect('http://mall.dding.net');
	}
}