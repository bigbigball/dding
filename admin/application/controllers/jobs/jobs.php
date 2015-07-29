<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Jobs extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'jobs_model', 'jobs' );
	}
	
	
	// 显示jobs列表
	public function jobsList() {
	     
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('jobs/jobs/jobsList');
	    $config['total_rows'] = $this->db->count_all_results('jobs');
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
	     
	    $jobs = $this->jobs->jobsList ();
	    //做一次转化
	    foreach($jobs as &$v){//编号转文本
	        if('0' == $v['type']) $v['type'] = "全职";
	        else if('1' == $v['type']) $v['type'] = "实习";
	        else $v['type'] = "全职/实习";
	        
	    }
	    
	    $data ['jobs'] = $jobs;
	    //p($data);die;
	    $this->load->view ( 'jobs/jobs/jobsList', $data );
	}
	//添加
	public function addJobs() {
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'jobs/jobs/addJobs' );
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
	    $status = $this->form_validation->run ( 'jobs' );
	
	    if ($status) {
	        // 操作model层
	        $data = array (
	            'position' => $this->input->post ( 'position' ),
	            'type' => $this->input->post ( 'type' ),
	            'salary' => $this->input->post ( 'salary' ),
	            'age' => $this->input->post ( 'age' ),
	            'education' => $this->input->post ( 'education' ),
	            'rank' => $this->input->post ( 'rank' ),
	            'ctime' => time(),
	            
	            
	            'description' => $this->input->post ( 'description' ),
	            
	        );
	        	
	        $this->jobs->addJobs ( $data );
	        success ( 'jobs/jobs/jobsList', '新职位添加成功！' );
	    } else {
	        // 重载
	        $this->load->helper ( 'form' );
	        $this->load->view ( 'jobs/jobs/addJobs' );
	    }
	}
	
	// 编辑文章
	public function editJobs() {
	    $id = $this->uri->segment ( 4 );
	
	    $data ['jobs'] = $this->jobs->checkJobs ( $id );
	
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'jobs/jobs/editJobs', $data );
	}
	// 编辑动作
	public function editArticle() {
	    // 载入表单验证类
	    $this->load->library ( 'form_validation' );
	    // 执行验证
	    $status = $this->form_validation->run ( 'jobs' );
	
	    if ($status) {
	        $id = $this->input->post ( 'id' );
	        	
	        $position = $this->input->post ( 'position' );
	        $type = $this->input->post ( 'type' );
	        $salary = $this->input->post ( 'salary' );
	        $age = $this->input->post ( 'age' );
	        $education = $this->input->post ( 'education' );
	        $ctime = $this->input->post ( 'ctime' );
	       
	        $description = $this->input->post ( 'description' );
	        
	        	
	        $data = array (
	            'position' => $position,
	            'type' => $type,
	            'salary' => $salary,
	            'age' => $age,
	            'education' => $education,
	            'ctime' => time(),	            
	            'description' => $description
	        );
	        	
	        $data ['jobs'] = $this->jobs->updateJobs ( $id, $data );
	        success ( 'jobs/jobs/jobsList', '招聘职位修改成功！' );
	    } else {
	        // 重载
	        $this->load->helper ( 'form' );
	        $this->load->view ( 'jobs/jobs/editJobs' );
	    }
	}
	public function delJobs() {
	    $id = $this->uri->segment ( 4 );
	
	    $this->jobs->delJobs ( $id );
	    success ( 'jobs/jobs/jobsList', '招聘职位删除成功！' );
	}
	
}