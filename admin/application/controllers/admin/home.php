<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*默认首页*/

class Home extends MY_Controller{
	/*默认方法*/
	public function index(){
		
		$this->load->view('admin/admin');
	}
	public function header(){
	
	    $this->load->view('public/header');
	}
	public function meau(){
		
		$this->load->view('public/meau');
	}
	public function right(){
		
		$this->load->view('admin/welcome');
	}
	
	
	
	public function usa(){
		$this->load->view('apply/applycountry/usa');
	}
	public function uk(){
		$this->load->view('apply/applycountry/uk');
	}
	public function hk(){
		$this->load->view('apply/applycountry/hk');
	}
	public function aus(){
		$this->load->view('apply/applycountry/aus');
	}
	public function singapore(){
		$this->load->view('apply/applycountry/singapore');
	}
	
	public function evaluelist(){
		$this->load->view('apply/evaluation/evaluation');
	}
}