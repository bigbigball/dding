<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('questions_model', 'que');
		
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library ( 'avatarlib' );
        $this->load->library('detect');
		
        $ci = & get_instance();
        $variable = array('haction'=>'home','titles'=>'常见问题-丁盯智能官网');
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
		
		$allques = $this->que->get_allques($page);
			
		$ret = $this->que->get_count();
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		//p($output);die;
		
		//做一次转化
		foreach($allques as &$v){//编号转文本
			if('0' == $v['type']) $v['type'] = "智能门磁";
			else if('1' == $v['type']) $v['type'] = "智能密码锁";
			else $v['type'] = "智能指纹锁";
		
		}
		
		$output['allques'] = $allques;
		//p($output);die;
		$output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '/pc/questions';
		$output['page'] = $page;
		
		//分页结束
		
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		
		if ($device == 'pc') {
		    $this->load->view('pc/questions', $output);
		} else {
		    $this->cismarty->display('m/questions');
		}

	}
}
