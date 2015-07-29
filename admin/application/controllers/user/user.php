<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class User extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'user_model', 'user' );
	}

	// 显示用户列表
	public function userList() {	    
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	    
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('user/user/userList');
	    $config['total_rows'] = $this->db->count_all_results('user');
	    $config['per_page'] = $perPage;
	    $config['uri_segment'] = 4;
	    $config['first_link'] = '首页';
	    $config['prev_link'] = '上一页';
	    $config['next_link'] = '下一页';
	    $config['last_link'] = '尾页';
	    
	    $this->pagination->initialize($config);
	    
	    $data['links'] = $this->pagination->create_links();
	    
	    $offset = $this->uri->segment(4);
	    $this->db->limit($perPage, $offset);
	    
		$user = $this->user->userList ();		
		foreach($user as &$v){//编号转文本
			if(1 == $v['is_leader']) 
				$v['is_leader'] = "是";
			else
				$v['is_leader'] = "否";
		}		
		$data ['user'] = $user;
		
		$this->load->view ( 'user/user/userList', $data );
	}
	
	// 编辑文章
	public function editUser() {
		$id = $this->uri->segment ( 4 );		
		$user = $this->user->checkUser ( $id );
		$data ['user'] = $user;	
		$this->load->helper ( 'form' );
		$this->load->view ( 'user/user/editUser', $data );
	}
	
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'user' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			$user_name = $this->input->post ( 'user_name' );
			$mobile = $this->input->post ( 'mobile' );
			$brief = $this->input->post ( 'brief' );
			$integral = $this->input->post ( 'integral' );
			$is_leader = $this->input->post ( 'is_leader' );
			$photo = $this->input->post ( 'photo' );
			
			$data = array (
					'user_name' => $user_name,
					'mobile' => $mobile,
					'brief' => $brief,
					'integral' => $integral,
					'is_leader' => $is_leader,
					'photo' => $photo,
			);
			
			$data ['user'] = $this->user->updateUser ( $id, $data );
			success ( 'user/user/userList', '用户修改成功！' );
		} else {
			// 重载
			$id = $this->input->post ( 'id' );	
			$user_name = $this->input->post ( 'user_name' );
			$mobile = $this->input->post ( 'mobile' );
			$brief = $this->input->post ( 'brief' );
			$integral = $this->input->post ( 'integral' );
			$is_leader = $this->input->post ( 'is_leader' );
			$photo = $this->input->post ( 'photo' );
			
			$user = array (
					'id' => $id,
					'user_name' => $user_name,
					'mobile' => $mobile,
					'brief' => $brief,
					'integral' => $integral,
					'is_leader' => $is_leader,
					'photo' => $photo,
			);
			$data['user'][0] = $user;
			
			$this->load->helper ( 'form' );
			$this->load->view ( 'user/user/editUser', $data);
		}
	}
	
	// 删除用户
	public function delUser() {
		$id = $this->uri->segment ( 4 );
	
		$this->user->delUser ( $id );
		success ( 'user/user/UserList', '用户删除成功！' );
	}
	
	//添加用户
	public function addUser() {
		$this->load->helper ( 'form' );
		$this->load->view ( 'user/user/addUser' );
	}
	
	// 添加文章
	public function addArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 设置验证
		/*
		 * $this->form_validation->set_rules('title', '文章标题不为空', 'required|min_length[5]'); $this->form_validation->set_rules('author', '作者不为空', 'required'); $this->form_validation->set_rules('type', '类型不为空', 'required'); $this->form_validation->set_rules('desc', '摘要不为空', 'required|max_length[10]'); $this->form_validation->set_rules('content', '内容不为空', 'required');
		*/
		// 执行验证
		$status = $this->form_validation->run ( 'user' );
	
		if ($status) {
			// 操作model层
			$data = array (
					'user_name' => $this->input->post ( 'user_name' ),
					'nick_name' => $this->input->post ( 'nick_name' ),
					'mobile' => $this->input->post ( 'mobile' ),
					'photo' => $this->input->post ( 'photo' ),
					'brief' => $this->input->post ( 'brief' ),
					'integral' => $this->input->post ( 'integral' ),
					'is_leader' => $this->input->post ( 'is_leader' )
			);
				
			$this->user->addUser ( $data );
			success ( 'user/user/userList', '用户添加成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'user/user/addUser' );
		}
	}
}