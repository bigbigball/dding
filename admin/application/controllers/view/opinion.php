<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Opinion extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'opinion_model', 'opinion' );
	}
	
	
	// 显示观点列表
	public function opinionList() {
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	    
	    //配置项设置
	    $config['base_url'] = site_url('view/opinion/opinionList');
	    $config['total_rows'] = $this->db->count_all_results('opinion');
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
	    
		$opinion = $this->opinion->opinionList ();
		
		foreach($opinion as &$v){//编号转文本
			if('0' == $v['device']) $v['device'] = "丁盯指纹锁";
				else if('1' == $v['device']) $v['device'] = "丁盯门磁";
					else if('2' == $v['device']) $v['device'] = "丁盯密码锁";
						else $v['device'] = "未知设备";
			if(0 == $v['status']) $v['status'] = "未审核";
				else if(1 == $v['status']) $v['status'] = "已审核";
					else $v['status'] = "状态未知";
		}
		
		$data ['opinion'] = $opinion;
		$this->load->view ( 'view/opinion/opinionList', $data );
	}
	
	
	// 编辑观点
	public function editOpinion() {
		$id = $this->uri->segment ( 4 );
		
		$opinion = $this->opinion->checkOpinion ( $id );
		error_log(var_export($opinion, true), 3, 'opinion_opinion');
		
		foreach($opinion as &$v){//编号转文本
			if('0' == $v['device']) $v['device'] = "丁盯指纹锁";
				else if('1' == $v['device']) $v['device'] = "丁盯门磁";
					else if('2' == $v['device']) $v['device'] = "丁盯密码锁";
						else $v['device'] = "未知设备";
		}
		
		$data ['opinion'] = $opinion;
		$this->load->helper ( 'form' );
		$this->load->view ( 'view/opinion/editOpinion', $data );
	}
	
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'opinion' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			$status = $this->input->post ( 'status' );
			$view = $this->input->post ( 'view' );
			$update_time = time();
			
			$data = array (
					'status' => $status,
					'view' => $view,
					'update_time' => $update_time 
			);
			
			$data ['opinion'] = $this->opinion->updateOpinion ( $id, $data );
			success ( 'view/opinion/opinionList', '观点修改成功！' );
		} else {
			// 重载
			$id = $this->input->post ( 'id' );
			$user_name = $this->input->post ( 'user_name' );
			$device = $this->input->post ( 'device' );
			$status = $this->input->post ( 'status' );
			$pictures = $this->input->post ( 'pictures' );
			$score = $this->input->post ( 'score' );
			$stars = $this->input->post ( 'stars' );
			$view = $this->input->post ( 'view' );
			$create_time = $this->input->post ( 'create_time' );
			$update_time = $this->input->post ( 'update_time' );
				
			$opinion = array (
					'id' => $id,
					'user_name' => $user_name,
					'device' => $device,
					'status' => $status,
					'pictures' => $pictures,
					'score' => $score,
					'stars' => $stars,
					'view' => $view,
					'create_time' => $create_time,
					'update_time' => $update_time
			);
			
			$data ['opinion'][0] = $opinion;
			$this->load->helper ( 'form' );
			$this->load->view ( 'view/opinion/editOpinion', $data);
		}
	}
	
	// 删除观点	
	public function delOpinion() {
		$id = $this->uri->segment ( 4 );
	
		$this->opinion->delOpinion ( $id );
		success ( 'view/opinion/opinionList', '观点删除成功！' );
	}
}