<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class User_model extends CI_Model{
    //添加
    public function addUser($data){
        $this->db->insert('user',$data);
    }
	//全部查询
	public function userList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('user')->result_array();
		return $data;
	}
	//条件查询
	public function checkUser($id){
		$data = $this->db->where(array('id'=>$id))->get('user')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateUser($id, $data){
		$this->db->update('user', $data, array('id'=>$id));	
	}
	//删除
	public function delUser($id){
		$this->db->delete('user', array('id'=>$id));
	}
}