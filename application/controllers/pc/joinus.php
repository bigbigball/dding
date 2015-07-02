<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinus extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('jobs_model', 'jobs');
		
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->library ( 'avatarlib' );
        $this->load->library('detect');
		
        $ci = & get_instance();
        $variable = array('haction'=>'home','titles'=>'加入我们-丁盯智能官网');
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
		
		$alljobs = $this->jobs->get_alljobs($page);
		 
		$ret = $this->jobs->get_count();
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		//p($output);die;
		
		//做一次转化
		foreach($alljobs as &$v){//编号转文本
			if('0' == $v['type']) $v['type'] = "全职";
			else if('1' == $v['type']) $v['type'] = "实习";
			else $v['type'] = "全职/实习";
			 
		}
		
		$output['alljobs'] = $alljobs;
		//p($output);die;
		$output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '/pc/joinus';
		$output['page'] = $page;
		
		//分页结束
		
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		
		if ($device == 'pc') {
		    $this->load->view('pc/joinus', $output);
		} else {
		    $this->cismarty->display('m/joinus');
		}

	}
	
	public function joinusDetail()
	{
	    $id = $this->input->get('id');
	    //p($id);die;
	    $user_id = $this->session->userdata('user_id');
	    $info = $this->user_model->get_user(array('id' => $user_id));
		$output['info'] = $info;
		//p($output);die;
		$jobs = $this->jobs->get_jobs(array('id' => $id));
		
		$v=$jobs;
		
		if('0' == $v['type']) $jobs['type'] = "全职";
		else if('1' == $v['type']) $jobs['type'] = "实习";
		else $jobs['type'] = "全职/实习";
		
		$output['jobs'] = $jobs;
		//p($output);die;
		$this->load->library('detect');
	    $device = $this->detect->is_mobile() ? 'mobile' : 'pc';
	
	    if ($device == 'pc') {
	        $this->load->view('pc/joinusDetail', $output);
	    } else {
	        $this->cismarty->display('m/joinusDetail');
	    }
	
	}
	
}
