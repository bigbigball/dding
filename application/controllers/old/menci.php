<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menci extends CI_Controller {

	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		$this->cismarty->display($device . '/download.tpl');

	}
	
	public function sm()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		$this->cismarty->display($device . '/download.tpl');

	}
}