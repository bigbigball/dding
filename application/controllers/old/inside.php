<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inside extends CI_Controller {

	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		$this->cismarty->display($device . '/inside.tpl');

	}
}