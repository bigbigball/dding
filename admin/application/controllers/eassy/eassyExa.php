<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EassyExa extends MY_Controller{
	
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'eassyexa_model', 'eassy' );
	}
	
	public function addExa(){
		$this->load->helper('form');
		$this->load->view('eassy/eassyexa/addEassyExa');
	}
	
	//文书案例列表页面（需要加入分页功能哦~~~）
	public function eassyExaList(){
		
		//后台设置后缀为空，否则分页出错
		$this->config->set_item('url_suffix', '');
		//载入分页类
		$this->load->library('pagination');
		//每页显示数量
		$perPage = 1;
		
		//配置项设置
		$config['base_url'] = site_url('eassy/eassyExa/eassyExaList');
		$config['total_rows'] = $this->db->count_all_results('eassy');
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
		
		$data ['eassyexa'] = $this->eassy->eassyExaList ();
	    $this->load->view('eassy/eassyexa/eassyExaList', $data);
	}
	
	//添加文章
	public function addArticle(){
		
		//载入表单验证类
		$this->load->library('form_validation');
		
		//执行验证
		$status = $this->form_validation->run('eassyexa');
		
		if($status){
			//文件上传------------------------
			//配置
			$config['upload_path'] = './style/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';
			$config['file_name'] = time() . mt_rand(1000,9999);
			
			//载入上传类
			$this->load->library('upload', $config);
			//执行上传
			$status = $this->upload->do_upload('thumb');
			$wrong = $this->upload->display_errors();
			
			if($wrong){
				error($wrong);
			}
			//返回信息
			$info = $this->upload->data();
			//p($info);die;
			
			//缩略图-----------------
			//配置
			$arr['source_image'] = $info['full_path'];
			$arr['create_thumb'] = FALSE;
			$arr['maintain_ratio'] = TRUE;
			$arr['width'] = 442;
			$arr['height'] = 264;
			
			//载入缩略图类
			$this->load->library('image_lib', $arr);
			//执行动作
			$status = $this->image_lib->resize();
			
			if(!$status){
				error('缩略图动作失败');
			}
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'author' => $this->input->post ( 'author' ),
					'ctime' => time(),
					'type' => $this->input->post ( 'type' ),
					'thumb' => $info['file_name'],
					'position' => $this->input->post ( 'position' ),
					'content' => $this->input->post ( 'content' )
			);
				
			$this->eassy->addEassyExa($data);
			success ( 'eassy/eassyExa/eassyExaList', '文书案例添加成功！' );
			
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('eassy/eassyexa/addEassyExa');
		}
	}
	//编辑文章
	public function editExa(){
		$id = $this->uri->segment ( 4 );
		
		$data ['eassyexa'] = $this->eassy->checkEassyExa ( $id );
		
		$this->load->helper('form');
		$this->load->view('eassy/eassyexa/editEassyExa', $data);
	}
	//编辑动作
	public function editArticle(){
		
		//载入表单验证类
		$this->load->library('form_validation');
		//执行验证
		$status = $this->form_validation->run('eassyexa');

		if($status){
		    
		    //文件上传------------------------
		    //配置
		    $config['upload_path'] = './style/uploads/';
		    $config['allowed_types'] = 'gif|jpg|png|jpeg';
		    $config['max_size'] = '10000';
		    $config['file_name'] = time() . mt_rand(1000,9999);
		    	
		    //载入上传类
		    $this->load->library('upload', $config);
		    //执行上传
		    $status = $this->upload->do_upload('thumb');
		    $wrong = $this->upload->display_errors();
		    	
		    if($wrong){
		        error($wrong);
		    }
		    //返回信息
		    $info = $this->upload->data();
		    //p($info);die;
		    	
		    //缩略图-----------------
		    //配置
		    $arr['source_image'] = $info['full_path'];
		    $arr['create_thumb'] = FALSE;
		    $arr['maintain_ratio'] = TRUE;
		    $arr['width'] = 442;
		    $arr['height'] = 264;
		    	
		    //载入缩略图类
		    $this->load->library('image_lib', $arr);
		    //执行动作
		    $status = $this->image_lib->resize();
		    	
		    if(!$status){
		        error('缩略图动作失败');
		    }
		    
		    
			$id = $this->input->post ( 'id' );
			
			$title = $this->input->post ( 'title' );
			$author = $this->input->post ( 'author' );
			$ctime = time();
			$type = $this->input->post ( 'type' );
			$position = $this->input->post ( 'position' );
			$thumb = $info['file_name'];
			$content = $this->input->post ( 'content' );
			
			$data = array (
					'title' => $title,
					'author' => $author,
					'ctime' => $ctime,
					'type' => $type,
					'position' => $position,
					'thumb' => $thumb,
					'content' => $content 
			);
			
			$data ['eassyexa'] = $this->eassy->updateEassyExa ( $id, $data );
			success ( 'eassy/eassyExa/eassyExaList', '文书案例修改成功！' );
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('eassy/eassyexa/editEassyExa');
		}
	}
	
	
}