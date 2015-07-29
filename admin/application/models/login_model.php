<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//用户管理模型

class Login_model extends CI_Model{
	//查询用户数据
	public function check($username){
		//$this->db->get_where(array('username'=>$username))->get('user')->result_array();
		$data = $this->db->get_where('useradmin',array('username'=>$username))->result_array();
		return $data;
	}
	
	public function modifyPass($id, $data){
		$this->db->update('useradmin', $data, array('id'=>$id));
	}
	
}