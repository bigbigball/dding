<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('media_model', 'media');
		
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library ( 'avatarlib' );
        $this->load->library('detect');
		
        $ci = & get_instance();
        $variable = array('haction'=>'dynamic','titles'=>'媒体报道-丁盯智能官网');
        $ci->load->vars($variable);
    }
    
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
	    $info = $this->user_model->get_user(array('id' => $user_id));
		$output['info'] = $info;
		
		//分页开始
		$page = $this->input->get('page');
		$page = empty($page)? 1 : $page;
		
		$allmedia = $this->media->get_allmedia($page);
		//p($allmedia);die;
		$ret = $this->media->get_count();
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		//p($output);die;
	
		$output['allmedia'] = $allmedia;
		//p($output);die;
		$output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '/pc/media';
		$output['page'] = $page;
		
		//分页结束
		
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		
		if ($device == 'pc') {
		    //$this->load->view('pc/newproduct', $output);
		    $this->load->view('pc/media', $output);
		} else {
		    $this->load->view('m/media', $output);
		}

	}
}
