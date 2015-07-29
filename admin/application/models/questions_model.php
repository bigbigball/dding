<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Questions_model extends CI_Model{
    //全部查询
	public function questionsList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','ASC');
		$data = $this->db->get('questions')->result_array();
		return $data;
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
	
	//添加
	public function addQuestions($data){
	    $this->db->insert('questions',$data);
	}
	
	//条件查询
	public function checkQuestions($id){
	    $data = $this->db->where(array('id'=>$id))->get('questions')->result_array();
	    return $data;
	}
	
	//修改动作
	public function updateQuestions($id, $data){
	    $this->db->update('questions', $data, array('id'=>$id));
	}
	//删除
	public function delQuestions($id){
	    $this->db->delete('questions', array('id'=>$id));
	}
	
}