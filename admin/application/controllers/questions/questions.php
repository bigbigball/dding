<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Questions extends CI_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'questions_model', 'questions' );
	}
	
	
	// 显示questions列表
	public function questionsList() {
	     
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('questions/questions/questionsList');
	    $config['total_rows'] = $this->db->count_all_results('questions');
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
	     
	    $questions = $this->questions->questionsList ();
	    //做一次转化
	    foreach($questions as &$v){//编号转文本
	        if('0' == $v['type']) $v['type'] = "智能门磁";
	        else if('1' == $v['type']) $v['type'] = "智能密码锁";
	        else $v['type'] = "智能指纹锁";
	        
	    }
	    
	    $data ['questions'] = $questions;
	    //p($data);die;
	    $this->load->view ( 'questions/questions/questionsList', $data );
	}
	//添加
	public function addQuestions() {
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'questions/questions/addQuestions' );
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
	    $status = $this->form_validation->run ( 'questions' );
	
	    if ($status) {
	        // 操作model层
	        $data = array (
	            'type' => $this->input->post ( 'type' ),
	            'question' => $this->input->post ( 'question' ),
	            'answer' => $this->input->post ( 'answer' ),
	           
	        );
	        	
	        $this->questions->addQuestions ( $data );
	        success ( 'questions/questions/questionsList', '新问题添加成功！' );
	    } else {
	        // 重载
	        $this->load->helper ( 'form' );
	        $this->load->view ( 'questions/questions/addQuestions' );
	    }
	}
	
	// 编辑文章
	public function editQuestions() {
	    $id = $this->uri->segment ( 4 );
	
	    $data ['questions'] = $this->questions->checkQuestions ( $id );
	
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'questions/questions/editQuestions', $data );
	}
	// 编辑动作
	public function editArticle() {
	    // 载入表单验证类
	    $this->load->library ( 'form_validation' );
	    // 执行验证
	    $status = $this->form_validation->run ( 'questions' );
	
	    if ($status) {
	        $id = $this->input->post ( 'id' );
	        	
	        $type = $this->input->post ( 'type' );
	        $question = $this->input->post ( 'question' );
	        $answer = $this->input->post ( 'answer' );
	        
	        	
	        $data = array (
	            'type' => $type,
	            'question' => $question,
	            'answer' => $answer
	        );
	        
	        //p($data);die;
	        
	        $data ['questions'] = $this->questions->updateQuestions ( $id, $data );
	        success ( 'questions/questions/questionsList', '问题修改成功！' );
	    } else {
	        // 重载
	        $this->load->helper ( 'form' );
	        $this->load->view ( 'questions/questions/editQuestions' );
	    }
	}
	public function delQuestions() {
	    $id = $this->uri->segment ( 4 );
	
	    $this->questions->delQuestions ( $id );
	    success ( 'questions/questions/questionsList', '问题删除成功！' );
	}
	
}