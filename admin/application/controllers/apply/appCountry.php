<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );

class AppCountry extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'appcountry_model', 'app' );
		$this->country_eToc = array('usa'=>'美国','uk'=>'英国','hk'=>'香港','aus'=>'澳洲','singapore'=>'新加坡');
	}

	/*
	// 显示美国留学页面
	public function appUSA() {
		$table = 'usa';
		$data ['appcountry_list'] = $this->app->appCountryList ($table);
		$this->load->view ( 'apply/applycountry/usa', $data );
	}
	*/
	public function appKcountry() { //多国留学总控函数
		$country = $this->uri->segment ( 4 );
		$table = $country;
		$data ['appcountry_list'] = $this->app->appCountryList ($table);
		$this->load->view ( 'apply/applycountry/'.$country, $data );	
	}
	
	//显示国家留学编辑界面
	public function addCountry() {
		$country = $this->uri->segment ( 4 );
		$num = $this->app->appNumOfCountry($country);
		if( $num!=0 ){
			error("本版块最多只能添加一条记录！");
		}
		
		$data['country'] = $this->country_eToc[$country];
		$data['country_en'] = $country;
		$this->load->helper ( 'form' );
		$this->load->view ( 'apply/applycountry/addAppCountry', $data);
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
		$status = $this->form_validation->run ( 'apply_country' );
		$country = $this->uri->segment ( 4 );

		if ($status) {
			// 操作model层
			$data = array (
					'title' => $this->input->post ( 'title' ),
					'author' => $this->input->post ( 'author' ),
					'ctime' => time(),
					'content' => $this->input->post ( 'content' )
			);
				
			$this->app->addAppCountry ( $country, $data );
			success ( 'apply/appCountry/appKcountry/'.$country, $this->country_eToc[$country].'留学资料添加成功！' );
		} else {
			$data['country'] = $this->country_eToc[$country];
			$data['country_en'] = $country;
			// 重载
			$this->load->helper ( 'form' );
			$this->load->view ( 'apply/applyCountry/addAppCountry', $data);
		}
	}
	
	// 编辑留学国家资料
	public function editCountry() {
		$id = $this->uri->segment ( 4 );
		$country = $this->uri->segment ( 5 );
		$data ['applytip'] = $this->app->checkAppCountry ( $country, $id );
		$data['country'] = $this->country_eToc[$country];
		$data['country_en'] = $country;
		
		$this->load->helper ( 'form' );
		$this->load->view ( 'apply/applyCountry/editAppCountry', $data );
	}
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'apply_country' );
		
		$country = $this->uri->segment ( 4 );
		if ($status) {
			$id = $this->input->post ( 'id' );	
			$title = $this->input->post ( 'title' );
			$author = $this->input->post ( 'author' );
			$ctime = $this->input->post ( 'ctime' );
			$content = $this->input->post ( 'content' );
				
			$data = array (
					'title' => $title,
					'author' => $author,
					'ctime' => $ctime,
					'content' => $content
			);

			$data ['applytip'] = $this->app->updateAppCountry ( $country, $id, $data );
			success ( 'apply/appCountry/appKcountry/'.$country, $this->country_eToc[$country].'留学资料修改成功！' );
		} else {
			// 重载
			$data['country'] = $this->country_eToc[$country];
			$data['country_en'] = $country;
			$id = $this->input->post ( 'id' );
			$title = $this->input->post ( 'title' );
			$author = $this->input->post ( 'author' );
			$ctime = $this->input->post ( 'ctime' );
			$content = $this->input->post ( 'content' );
			$data ['applytip'][] = array (
					'id' => $id,
					'title' => $title,
					'author' => $author,
					'ctime' => $ctime,
					'content' => $content
			);
			
			$this->load->helper ( 'form' );
			$this->load->view ( 'apply/applyCountry/editAppCountry', $data);
		}
	}
	
	// 删除留学国家资料
	public function delCountry() {
		$id = $this->uri->segment ( 4 );
		$country = $this->uri->segment ( 5 );
        //$table = "usa";
		$this->app->delAppCountry ( $country, $id );
		success ( 'apply/appCountry/appKcountry/'.$country, $this->country_eToc[$country].'留学资料删除成功！' );
	}
}