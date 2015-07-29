<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	//公共类，检测登录
	public function __construct(){
		parent::__construct();
		
		$username = $this->session->userdata('username');
		$id = $this->session->userdata('id');
		
		if(!$username || !$id){
			redirect('login/login');
		}
	}
}