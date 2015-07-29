<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 后台登陆控制器 */

class Login extends CI_Controller{
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'login_model', 'login' );
	}
	
	/* 默认登陆方法 */
	
	public function index(){
		
		/*
		//载入验证码辅助函数
		$this->load->helper('captcha');
		
		$speed = '1234567890';
		$word = '';
		for($i = 0; $i < 4; $i++){
		    $word .= $speed[mt_rand(0, strlen($speed) - 1)];
		}
		
		//配置项
		$vals = array(
	    	'word'	=> $word,
		 	'img_path' => './style/captcha/',
		 	'img_url'  => base_url() . '/style/captcha/',
		 	'img_width'=> 60,
		 	'img_height'=>20,
		 	'expiration'=>60
		 	);
		//创建验证码
		$cap = create_captcha($vals);
		//图片路径
		$data['captcha'] = $cap['image'];
		*/
		$this->load->view('login/login');
	}
	
	//验证码
	public function  code(){
		
		$config = array(
				'width'	=>	60,
				'height'=>	20,
				'codeLen'=>	1,
				'fontSize'=>16
		);
		
		$this->load->library('code', $config);
		$this->code->show();
	}
	
	public function login_in(){
		
		$code = $this->input->post('captcha');
		if(!isset($_SESSION)){
			session_start();
		}
		if(strtoupper($code) != $_SESSION['code']) 
			error('验证码错误');
		$username = $this->input->post('username');
		$userData = $this->login->check($username);
		
		$password = $this->input->post('password');

		if(!$userData || $userData[0]['password'] != md5($password)) error('用户名或者密码不正确');
		
		$sessionData = array(
				'username'	=> $username,
				'id'		=> $userData[0]['id'],
				'logintime' => time()
		);
		
		$this->session->set_userdata($sessionData);
		//取出来session里面的username
		$data = $this->session->userdata('username');
		
		success('admin/home/index', '登陆成功');
	}
	
	/**
	 * 退出登陆
	 */
	public function login_out(){
		$this->session->sess_destroy();
		
		$username = $this->session->userdata('username');
		$id = $this->session->userdata('id');
		if(!$username || !$id){
			redirect('login/login');
		}
	}
	
}
