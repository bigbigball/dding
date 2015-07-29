<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Dynamic extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'dynamic_model', 'dy' );
	}
	
	
	// 显示dynamic列表
	public function dynamicList() {
	     
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('dynamic/dynamic/dynamicList');
	    $config['total_rows'] = $this->db->count_all_results('dynamic');
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
	     
	    $dynamic = $this->dy->dynamicList ();
	    
	    $data ['dynamic'] = $dynamic;
	    //var_dump($data);
	    //p($data);die;
	    $this->load->view ( 'dynamic/dynamic/dynamicList', $data );
	}
	
	//添加
	public function addDynamic() {
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'dynamic/dynamic/addDynamic' );
	}
	
	// 添加文章
	public function addArticle() {
	
	    //载入表单验证类
	    $this->load->library('form_validation');
	    
	    //执行验证
	    $status = $this->form_validation->run('dy');
	    //p($status);die;
	    if($status){
	        //文件上传------------------------
	        //配置
	        $config['upload_path'] = './uploads/dynamic/';
	        $config['allowed_types'] = 'gif|jpg|png|jpeg';
	        $config['max_size'] = '10000';
	        $config['file_name'] = time() . mt_rand(1000,9999);
	        //$config['file_name1'] = time() . mt_rand(1000,9999);
	        	
	        //载入上传类
	        $this->load->library('upload', $config);
	        //执行上传
	        $status = $this->upload->do_upload('thumb');
	        //$status = $this->upload->do_upload('pic');
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
	        $arr['width'] = 790;
	        $arr['height'] = 170;
	        	
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
	            'rank' => $this->input->post ( 'rank' ),
	            'thumb' => $info['file_name'],
	            //'pic' => $info['file_name1'],
	            'ctime' => time(),	            
	            'video' => $this->input->post ( 'video' ),
	            'in' => $this->input->post ( 'in' ),
	            'description' => $this->input->post ( 'description' )                
	            
	        );
	        //p($data);die;
	        $this->dy->addDynamic($data);
	        success ( 'dynamic/dynamic/dynamicList', '动态添加成功！' );
	        	
	    }else{
	        //重载
	        $this->load->helper('form');
	        $this->load->view('dynamic/dynamic/addDynamic');
	    }
	    
	}
	
	// 编辑文章
	public function editDynamic() {
	    
	    $id = $this->uri->segment ( 4 );
	
	    $data ['dynamic'] = $this->dy->checkDynamic ( $id );
	
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'dynamic/dynamic/editDynamic', $data );
	}
	// 编辑动作
	public function editArticle() {
	    // 载入表单验证类
	    $this->load->library ( 'form_validation' );
	    // 执行验证
	    $status = $this->form_validation->run ( 'dy' );
	//p($status);die;
	if($status){
		    
		    //文件上传------------------------
		    //配置
		    $config['upload_path'] = './uploads/dynamic/';
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
		    $arr['width'] = 790;
		    $arr['height'] = 170;
		    	
		    //载入缩略图类
		    $this->load->library('image_lib', $arr);
		    //执行动作
		    $status = $this->image_lib->resize();
		    	
		    if(!$status){
		        error('缩略图动作失败');
		    }
		    
		    
			$id = $this->input->post ( 'id' );
			
			$title = $this->input->post ( 'title' );
			$rank = $this->input->post ( 'rank' );
			$thumb = $info['file_name'];
			$ctime = time();
			$video = $this->input->post ( 'video' );
			$in = $this->input->post ( 'in' );
			$description = $this->input->post ( 'description' );
			
			$data = array (
					'title' => $title,
			        'rank' => $rank,
			        'thumb' => $thumb,
			        'ctime' => $ctime,    
					'video' => $video,					
					'in' => $in,				
					'description' => $description 
			);
			
			$data ['dynamic'] = $this->dy->updateDynamic ( $id, $data );
			success ( 'dynamic/dynamic/dynamicList', '文章修改成功！' );
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('dynamic/dynamic/editDynamic');
		}
	}
	public function delDynamic() {
	    $id = $this->uri->segment ( 4 );
	
	    $this->dy->delDynamic ( $id );
	    success ( 'dynamic/dynamic/dynamicList', '文章删除成功！' );
	}
	
}