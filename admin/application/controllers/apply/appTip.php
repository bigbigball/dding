<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class AppTip extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'apptip_model', 'app' );
	}
	public function addTip() {
		$this->load->helper ( 'form' );
		$this->load->view ( 'apply/applytip/addAppTip' );
	}
	
	// 显示留学申请资讯列表
	public function appTipList() {
	    
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 4;
	    
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('apply/appTip/appTipList');
	    $config['total_rows'] = $this->db->count_all_results('applytip');
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
	    
		$data ['applytip'] = $this->app->appTipList ();
		$this->load->view ( 'apply/applytip/appTipList', $data );
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
		$status = $this->form_validation->run ( 'applytip' );
		
		if ($status) {
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'author' => $this->input->post ( 'author' ),
					'ctime' => time(),
					'type' => $this->input->post ( 'type' ),
					'position' => $this->input->post ( 'position' ),
					'source' => $this->input->post ( 'source' ),
					'status' => $this->input->post ( 'status' ),
					'desc' => $this->input->post ( 'desc' ),
					'content' => $this->input->post ( 'content' ) 
			);
			
			$this->app->addAppTip ( $data );
			success ( 'apply/appTip/appTipList', '留学资讯添加成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'apply/applytip/addAppTip' );
		}
	}
	// 编辑文章
	public function editTip() {
		$id = $this->uri->segment ( 4 );
		
		$data ['applytip'] = $this->app->checkAppTip ( $id );
		
		$this->load->helper ( 'form' );
		$this->load->view ( 'apply/applytip/editAppTip', $data );
	}
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'applytip' );
		
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
			
			$data ['applytip'] = $this->app->updateAppTip ( $id, $data );
			success ( 'apply/appTip/appTipList', '留学资讯修改成功！' );
		} else {
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'apply/applytip/editAppTip' );
		}
	}
	// 删除留学资讯
	
	public function delTip() {
		$id = $this->uri->segment ( 4 );
	
		$this->app->delAppTip ( $id );
		success ( 'apply/appTip/appTipList', '留学资讯删除成功！' );
	}
}