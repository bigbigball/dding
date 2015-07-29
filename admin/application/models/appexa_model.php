<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学案例模型

class Appexa_model extends CI_Model{
	//添加
	public function addAppExa($data){
		$this->db->insert('apply',$data);
	}
	//全部查询
	public function appExaList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('apply')->result_array();
		return $data;
	}
	//条件查询
	public function checkAppExa($id){
		$data = $this->db->where(array('id'=>$id))->get('apply')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateAppExa($id, $data){
		$this->db->update('apply', $data, array('id'=>$id));	
	}
	//删除
	public function delAppExa($id){
		$this->db->delete('apply', array('id'=>$id));
	}
}