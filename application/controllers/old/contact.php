<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->cismarty->display('pc/guide.tpl');
		} else {
			$this->cismarty->display('mobile/contact.tpl');
		}
	}
}