<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class EassyTip extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'eassytip_model', 'eassy' );
	}
	public function addTip() {
		$this->load->helper ( 'form' );
		$this->load->view ( 'eassy/eassytip/addEassyTip' );
	}
	public function eassyTipList() {
	    
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 1;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('eassy/eassyTip/eassyTipList');
	    $config['total_rows'] = $this->db->count_all_results('eassytip');
	    $config['per_page'] = $perPage;
	    $config['uri_segment'] = 4;
	    $config['first_link'] = '首页';
	    $config['prev_link'] = '上一页';
	    $config['next_link'] = '下一页';
	    $config['last_link'] = '尾页';
	     
	    $this->pagination->initialize($config);
	     
	    $data['links'] = $this->pagination->create_links();
	    //p($data);die;
	    $offset = $this->uri->segment(4);
	    $this->db->limit($perPage, $offset);
	    
		$data ['eassytip'] = $this->eassy->eassyTipList ();
		$this->load->view ( 'eassy/eassytip/eassyTipList', $data  );
	}
	// 添加文章
	public function addArticle() {
		
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 设置验证
		
		// 执行验证
		$status = $this->form_validation->run ( 'eassytip' );
		
		if ($status) {
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'author' => $this->input->post ( 'author' ),
					'ctime' => $this->input->post ( 'ctime' ),
					'type' => $this->input->post ( 'type' ),
					'position' => $this->input->post ( 'position' ),
					'source' => $this->input->post ( 'source' ),
					'status' => $this->input->post ( 'status' ),
					'desc' => $this->input->post ( 'desc' ),
					'content' => $this->input->post ( 'content' ) 
			);
			
			$this->eassy->addEassyTip ( $data );
			success ( 'eassy/eassytip/eassyTipList', '文书技巧添加成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'eassy/eassytip/addEassyTip' );
		}
	}
	// 编辑文章
	public function editTip() {
		$id = $this->uri->segment ( 4 );
		
		$data ['eassytip'] = $this->eassy->checkEassyTip ( $id );
		$this->load->helper ( 'form' );
		$this->load->view ( 'eassy/eassyTip/editEassyTip', $data );
	}
	// 编辑动作
	public function editArticle() {
		
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'eassytip' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			
			$title = $this->input->post ( 'title' );
			$author = $this->input->post ( 'author' );
			$ctime = $this->input->post ( 'ctime' );
			$type = $this->input->post ( 'type' );
			$position = $this->input->post ( 'position' );
			$source = $this->input->post ( 'source' );
			$status = $this->input->post ( 'status' );
			$desc = $this->input->post ( 'desc' );
			$content = $this->input->post ( 'content' );
			
			$data = array (
					'title' => $title,
					'author' => $author,
					'ctime' => $ctime,
					'type' => $type,
					'position' => $position,
					'source' => $source,
					'status' => $status,
					'desc' => $desc,
					'content' => $content 
			);
			
			$data ['eassytip'] = $this->eassy->updateEassyTip ( $id, $data );
			success ( 'eassy/eassytip/eassyTipList', '文书技巧修改成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'eassy/eassytip/editEassyTip' );
		}
	}
	// 删除留学资讯
        public function delTip() {
		    $id = $this->uri->segment ( 4 );
		
		    $this->eassy->delEassyTip ( $id );
		    success ( 'eassy/eassyTip/eassyTipList', '文书技巧删除成功！' );
	}
}