<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		redirect('/guide#wenti');
	}
}
