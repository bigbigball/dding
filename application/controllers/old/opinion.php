<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('opinion_model');
		$this->load->model('comment_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->library ( 'avatarlib' );
		$this->load->library('detect');
	}

	public function index()
	{
		//$this->session->set_userdata('user_id', 3);
        $page = $this->input->get('page');
        $page = empty($page)? 1 : $page;
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		$allopinion = $this->opinion_model->get_allopinion($page);
		$ret = $this->opinion_model->get_count();
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		foreach($allopinion as $i => $opinion){
			$ret = $this->comment_model->get_count(array('opinion_id' => $opinion['id']));
			$allopinion[$i]['count'] = isset($ret['num']) ? $ret['num'] : 0;
		}
		$output['info'] = $info;
		$output['allopinion'] = $allopinion;
                $output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . '/opinion/index';
                $output['page'] = $page;
		//$this->load->view('opinions', $output);
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('opinions', $output);
		} else {
			$this->load->view('m/opinions', $output);
		}	}
	
	public function edit()
	{
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		//$this->load->view('edit', array('info' => $info));
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('edit', array('info' => $info));
		} else {
			$this->load->view('m/edit', array('info' => $info));
		}	}
	
	public function personal()
	{
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		$opinion = $this->opinion_model->get_opinion(array('user_id' => $user_id));
		$output['info'] = $info;
		if ($opinion) {
			$output['published'] = true;
			$ret = $this->comment_model->get_count(array('opinion_id' => $opinion['id']));
			$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		} else {
			$output['published'] = false;
			$output['count'] = 0;
		}
		//$this->load->view('personal', $output);
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('personal', $output);
		} else {
			$this->load->view('m/personal', $output);
		}
	}
	
	function do_edit()
	{
		$user_id = $this->session->userdata('user_id');
		$data['user_name'] = $this->input->post('name');
		$data['brief'] = $this->input->post('brief');
		//if($_FILES['file']['error']==0){
			//var_dump($_FILES['file']);
		//	$user_id = $this->session->userdata('user_id');
		//	$fileName = '-user-'.$user_id.'-'.rand(10,99).'.jpg';
		//	$uploadType = $_FILES['file']['type'];
		//	$uploadFileName=$_FILES['file']['name'];
        	//$uploadFileTemp=$_FILES['file']['tmp_name'];
        	//$uploadFileTrue= getcwd().'/uploads/'.'photos'.$fileName;
        	//move_uploaded_file($uploadFileTemp,$uploadFileTrue);
        	//$data['photo']='/uploads/'.'photos'.$fileName;
     	//}			
		$this->user_model->update_user(array('id' => $user_id), $data);
		redirect('/opinion/personal');
	}
	
	public function myop()
	{
		$page = $this->input->get('page');
		$page = empty($page)? 1 : $page;
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		$opinion = $this->opinion_model->get_opinion(array('user_id' => $user_id));
		$comments = array();
		$ret = array();
		if (isset($opinion['id'])) {
			$comments = $this->comment_model->get_allcomment(array('opinion_id' => $opinion['id']), $page);
			$ret = $this->comment_model->get_count(array('opinion_id' => $opinion['id']));
		}
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		$output['info'] = $info;
		$output['opinion'] = $opinion;
		$output['comments'] = $comments;
		if (isset($opinion['pictures'])) {
			$output['pictures'] = explode(',', $opinion['pictures']);
		} else {
			$output['pictures'] = '';
		}
		if (isset($opinion['stars'])) {
			$output['stars'] = explode(',', $opinion['stars']);
		} else {
			$output['stars'] = '';
		}
		$output['user_id'] = $this->session->userdata('user_id');
		$output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . '/opinion/myop';
		$output['page'] = $page;
		//$this->load->view('myop', $output);
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('myop', $output);
		} else {
			$this->load->view('m/myop', $output);
		}	}
	
	public function op()
	{
		$id = $this->input->get('id');
		$page = $this->input->get('page');
		$page = empty($page)? 1 : $page;
		$opinion = $this->opinion_model->get_opinion(array('id' => $id));
		$info = $this->user_model->get_user(array('id' => $opinion['user_id']));
		$comments = $this->comment_model->get_allcomment(array('opinion_id' => $opinion['id']), $page);
		$ret = $this->comment_model->get_count(array('opinion_id' => $opinion['id']));
		$output['count'] = isset($ret['num']) ? $ret['num'] : 0;
		$output['info'] = $info;
		$output['opinion'] = $opinion;
		$output['comments'] = $comments;
		$user_id = $this->session->userdata('user_id');
		$myinfo = $this->user_model->get_user(array('id' => $user_id));
		$output['myinfo'] = $myinfo;
		if (isset($opinion['pictures'])) {
			$output['pictures'] = explode(',', $opinion['pictures']);
		} else {
			$output['pictures'] = '';
		}
		if (isset($opinion['stars'])) {
			$output['stars'] = explode(',', $opinion['stars']);
		} else {
			$output['stars'] = '';
		}
		$output['user_id'] = $this->session->userdata('user_id');
		$output['path'] = 'http://' . $_SERVER['HTTP_HOST'] . '/opinion/op';
		$output['page'] = $page;
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('op', $output);
		} else {
			$this->load->view('m/op', $output);
		}
	}
	
	function comment()
	{
		$user_id = $this->session->userdata('user_id');
		if ($user_id) {
			$info = $this->user_model->get_user(array('id' => $user_id));
		} else {
			$info = $this->user_model->get_user(array('user_name' => '游客'));
		}

		$data['owner_id'] = $info['id'];
		$data['opinion_id'] = $this->input->post('opid');
		$data['target'] = $this->input->post('target');
		$data['content'] = $this->input->post('content');
		$data['content'] = trim($data['content']);
		$data['create_time'] = time();
		
		if(!empty($data['content'])) {
			$this->comment_model->insert_comment($data);
		}
		$id = $data['opinion_id'];
		redirect("/opinion/op?id=$id");
	}
	
	function reply()
	{
		$user_id = $this->session->userdata('user_id');
		if ($user_id) {
			$info = $this->user_model->get_user(array('id' => $user_id));
		} else {
			$info = $this->user_model->get_user(array('user_name' => '游客'));
		}

		if (isset($info['id'])) {
			$data['owner_id'] = $info['id'];
		}
		$data['opinion_id'] = $this->input->post('opid');
		$data['target'] = $this->input->post('target');
		$data['content'] = $this->input->post('content');
		$data['content'] = trim($data['content']);
		$data['create_time'] = time();
		
		$ret = 0;
		if(!empty($data['content'])) {
			$ret = $this->comment_model->insert_comment($data);
		}
		if ($ret) {
			$output = array('errno' => 0);
		} else {
			$output = array('errno' => 1);
		}
		print_r(json_encode($output));
		return;
	}
	
	function delcom()
	{
		$id = $this->input->post('id');
		$ret = $this->comment_model->delete_comment(array('id' => $id));
		if ($ret) {
			$output = array('errno' => 0);
		} else {
			$output = array('errno' => 1);
		}
		print_r(json_encode($output));
		return;
	}
	
	public function myopmf()
	{
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		$opinion = $this->opinion_model->get_opinion(array('user_id' => $user_id));
		$output['info'] = $info;
		$output['opinion'] = $opinion;
		if (isset($opinion['pictures'])) {
			$output['pictures'] = explode(',', $opinion['pictures']);
		} else {
			$output['pictures'] = '';
		}
		if (isset($opinion['stars'])) {
			$output['stars'] = explode(',', $opinion['stars']);
		} else {
			$output['stars'] = '';
		}
		//$this->load->view('myopmf', $output);
		$this->load->library('detect');
		$device = $this->detect->is_mobile() ? 'mobile' : 'pc';
		if ($device == 'pc') {
			$this->load->view('myopmf', $output);
		} else {
			$this->load->view('m/myopmf', $output);
		}
	}
	
	function do_modify()
	{
		$user_id = $this->session->userdata('user_id');
		$info = $this->user_model->get_user(array('id' => $user_id));
		
		$star1 = $this->input->post('star1');
		$star2 = $this->input->post('star2');
		$star3 = $this->input->post('star3');
		$star4 = $this->input->post('star4');
		$data['stars'] = $star1 . ',' . $star2 . ',' . $star3 . ',' . $star4;
		$data['score'] = $this->input->post('score');
		$data['view'] = $this->input->post('web_description');

		$this->opinion_model->update_opinion(array('user_id' => $user_id), $data);
		redirect('/opinion/myop');
	}
	
	function upload_photo() //上传头像
	{
		$user_id = $this->session->userdata('user_id');
		$data = $this->user_model->get_user(array('id' => $user_id));
		$data ['avatarflash'] = $this->avatarlib->uc_avatar ($user_id);
		$this->load->view ( 'photo', array('info' => $data) );		
	}
	
	function doavatar(){ 
		$action='on'.$_GET['a']; 
		$data = $this->avatarlib->$action(); 
		echo $data;
	}
	
	function getavatar(){ //获得头像信息
		$user_id = $this->session->userdata('user_id');
		$data = $this->user_model->get_user(array('id' => $user_id));
		echo $data['photo'];	
	}
	
	function upload_prodpic() //上传观点图片
	{
		$config['upload_path'] = "./uploads/product/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$user_id = $this->session->userdata('user_id');
		$data = $this->opinion_model->get_opinion(array('user_id' => $user_id));

		if ( ! $this->upload->do_upload('uploadImg'))
		{
			echo $data['pictures'];
		}
		else
		{
			$upload_data = $this->upload->data();
			$base_dir = str_replace('\\' , '/' ,getcwd());
			$dir = $upload_data['full_path'];
			$data['pictures'] = str_replace($base_dir , '' , $dir);
			$opinion = $this->opinion_model->get_opinion(array('user_id' => $user_id));
			if (!$opinion) {
				$data['user_id'] = $user_id;
				$ret = $this->opinion_model->insert_opinion($data);
			} else {
				$pictures = explode(',', $opinion['pictures']);
				if (count($pictures) > 4 || empty($pictures[0])){
					$pictures[0] = $data['pictures'];
				} else {
					$pictures[] = $data['pictures'];
				}
				$data['pictures'] = implode(',', $pictures);
				$ret = $this->opinion_model->update_opinion(array('user_id' => $user_id), $data);
			}
			echo $data['pictures'];
		}
	}
	
	function del_prodpic(){ //删除观点图片
		$index = $this->input->get('index');
		$user_id = $this->session->userdata('user_id');		
		$opinion = $this->opinion_model->get_opinion(array('user_id' => $user_id));
		$pictures = explode(',', $opinion['pictures']);
		if (count($pictures) >0 || !empty($pictures[0])){
			@unlink(FCPATH.$pictures[$index]);
			unset($pictures[$index]);
		}
		$opinion['pictures'] = implode(',', $pictures);
		$ret = $this->opinion_model->update_opinion(array('user_id' => $user_id), $opinion);
		echo $opinion['pictures'];
	}
}
