<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Comment extends MY_Controller {
	/**
	 * 构造函数
	 */
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'comment_model', 'comment' );
	}
	
	
	// 显示评论列表
	public function commentList() {
	    //后台设置后缀为空，否则分页出错
	    $this->config->set_item('url_suffix', '');
	    //载入分页类
	    $this->load->library('pagination');
	    //每页显示数量
	    $perPage = 10;
	    
	    //配置项设置
	    $config['base_url'] = site_url('view/comment/commentList');
	    $config['total_rows'] = $this->db->count_all_results('comment');
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
	    
		$comment = $this->comment->commentList ();	
		$data ['comment'] = $comment;
		$this->load->view ( 'view/comment/commentList', $data );
	}
	
	// 编辑观点
	public function editComment() {
		$id = $this->uri->segment ( 4 );
		$comment = $this->comment->checkComment ( $id );
		$data ['comment'] = $comment;
		$this->load->helper ( 'form' );
		$this->load->view ( 'view/comment/editComment', $data );
	}
	
	// 编辑动作
	public function editArticle() {
		// 载入表单验证类
		$this->load->library ( 'form_validation' );
		// 执行验证
		$status = $this->form_validation->run ( 'comment' );
		
		if ($status) {
			$id = $this->input->post ( 'id' );
			$content = $this->input->post ( 'content' );
			
			$data = array (
					'content' => $content, 
			);
			
			$data ['comment'] = $this->comment->updateComment ( $id, $data );
			success ( 'view/comment/commentList', '评论修改成功！' );
		} else {
			// 重载
			$id = $this->input->post ( 'id' );
			$comment = $this->comment->checkComment ( $id );
			$comment[0]['content'] = ' ';
			$data ['comment'] = $comment;
			
			$this->load->helper ( 'form' );
			$this->load->view ( 'view/comment/editComment', $data);
		}
	}
	
	// 删除观点	
	public function delComment() {
		$id = $this->uri->segment ( 4 );
	
		$this->comment->delComment ( $id );
		success ( 'view/comment/commentList', '观点删除成功！' );
	}
}