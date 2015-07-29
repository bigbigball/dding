<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AppEvaluation extends MY_Controller{
    
    
	public function appEvaluationList(){
	    $this->load->view('apply/evaluation/evaluation');
	}
	
	
	
}