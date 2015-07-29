<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
	
	/* 默认首页 */
class Sysconfig extends MY_Controller {
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Login_model', 'user' );
	}
	
	/* 默认方法 */
	public function index() {
		$this->load->view ( 'admin/admin' );
	}
	
	// 修改密码视图
	public function modifyPass() {
		$this->load->view ( 'sys/modifyPass' );
	}
	// 修改密码动作
	public function modifyPassword() {
		$this->load->model ( 'login_model', 'logg' );
		
		$username = $this->session->userdata ( 'username' );
		$userData = $this->logg->check ( $username );
		
		// p($userData);die;
		
		$password = $this->input->post ( 'password' );
		if (md5 ( $password ) != $userData [0] ['password'])
			error ( '原始密码错误' );
		
		$pass1 = $this->input->post ( 'pass1' );
		$pass2 = $this->input->post ( 'pass2' );
		
		if ($pass1 != $pass2)
			error ( '两次密码不相同' );
		
		$id = $this->session->userdata ( 'id' );
		
		$data = array (
				'password' => md5 ( $pass1 ) 
		);
		$this->logg->modifyPass ( $id, $data );
		
		success ( 'sysconfig/sysconfig/modifyPass', '修改成功！' );
	}
}