<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//文书案例模型

class Eassyexa_model extends CI_Model{
	//添加
	public function addEassyExa($data){
		$this->db->insert('eassy',$data);
	}
	//全部查询
	public function eassyExaList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('eassy')->result_array();
		return $data;
	}
	//条件查询
	public function checkEassyExa($id){
		$data = $this->db->where(array('id'=>$id))->get('eassy')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateEassyExa($id, $data){
		$this->db->update('eassy', $data, array('id'=>$id));	
	}
	//删除
	public function delEassyExa($id){
		$this->db->delete('eassy', array('id'=>$id));
	}
	
	//统计总数量：
	public function get_column($num,$offset){
		$query=$this->db->get('column',$num,$offset);
		return $query->result_array();
	}
}