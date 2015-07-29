<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class Useradmin_model extends CI_Model{
    //添加
    public function addUseradmin($data){
        $this->db->insert('useradmin',$data);
    }
	//全部查询
	public function useradminList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('useradmin')->result_array();
		return $data;
	}
	//条件查询
	public function checkUseradmin($id){
		$data = $this->db->where(array('id'=>$id))->get('useradmin')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateUseradmin($id, $data){
		$this->db->update('useradmin', $data, array('id'=>$id));	
	}
	//删除
	public function delUseradmin($id){
		$this->db->delete('useradmin', array('id'=>$id));
	}
}