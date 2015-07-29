<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class News extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'news_model', 'news' );
	}
	
	
	// 显示news列表
	public function newsList() {
	     
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	     
	    //配置项设置
	    //controller的url
	    $config['base_url'] = site_url('news/news/newsList');
	    $config['total_rows'] = $this->db->count_all_results('news');
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
	     
	    $news = $this->news->newsList ();
	    
	    $data ['news'] = $news;
	    //p($data);die;
	    $this->load->view ( 'news/news/newsList', $data );
	}
	
	//添加
	public function addNews() {
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'news/news/addNews' );
	}
	
	// 添加文章
	public function addArticle() {
	
	    //载入表单验证类
	    $this->load->library('form_validation');
	    
	    //执行验证
	    $status = $this->form_validation->run('ne');
	    //p($status);die;
	    if($status){
	        //文件上传------------------------
	        //配置
	        $config['upload_path'] = './uploads/news/';
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
	        $arr['width'] = 452;
	        $arr['height'] = 305;
	        	
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
	            'source' => $this->input->post ( 'source' ),
	            'ctime' => time(),
	            'abstract' => $this->input->post ( 'abstract' ),
	            'thumb' => $info['file_name'],
	            'rank' => $this->input->post ( 'rank' ),
	            'links' => $this->input->post ( 'links' )
	            
	        );
	        //p($data);die;
	        $this->news->addNews($data);
	        success ( 'news/news/newsList', '文章添加成功！' );
	        	
	    }else{
	        //重载
	        $this->load->helper('form');
	        $this->load->view('news/news/addNews');
	    }
	    
	}
	
	// 编辑文章
	public function editNews() {
	    $id = $this->uri->segment ( 4 );
	
	    $data ['news'] = $this->news->checkNews ( $id );
	
	    $this->load->helper ( 'form' );
	    $this->load->view ( 'news/news/editNews', $data );
	}
	// 编辑动作
	public function editArticle() {
	    // 载入表单验证类
	    $this->load->library ( 'form_validation' );
	    // 执行验证
	    $status = $this->form_validation->run ( 'ne' );
	//p($status);die;
	if($status){
		    
		    //文件上传------------------------
		    //配置
		    $config['upload_path'] = './uploads/news/';
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
		    $arr['width'] = 452;
		    $arr['height'] = 305;
		    	
		    //载入缩略图类
		    $this->load->library('image_lib', $arr);
		    //执行动作
		    $status = $this->image_lib->resize();
		    	
		    if(!$status){
		        error('缩略图动作失败');
		    }
		    
		    
			$id = $this->input->post ( 'id' );
			
			$title = $this->input->post ( 'title' );
			$source = $this->input->post ( 'source' );
			$ctime = time();
			$links = $this->input->post ( 'links' );
			$rank = $this->input->post ( 'rank' );
			$thumb = $info['file_name'];
			$abstract = $this->input->post ( 'abstract' );
			
			$data = array (
					'title' => $title,
					'source' => $source,
					'ctime' => $ctime,
					'links' => $links,
					'rank' => $rank,
					'thumb' => $thumb,
					'abstract' => $abstract 
			);
			
			$data ['news'] = $this->news->updateNews ( $id, $data );
			success ( 'news/news/newsList', '文章修改成功！' );
		}else{
			//重载
			$this->load->helper('form');
			$this->load->view('news/news/editNews');
		}
	}
	public function delNews() {
	    $id = $this->uri->segment ( 4 );
	
	    $this->news->delNews ( $id );
	    success ( 'news/news/newsList', '文章删除成功！' );
	}
	
}