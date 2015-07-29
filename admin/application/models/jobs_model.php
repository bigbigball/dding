<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Jobs_model extends CI_Model{
    //全部查询
	public function jobsList(){
	    //添加查询条件，降序
	    $this->db->order_by('rank','ASC');
		$data = $this->db->get('jobs')->result_array();
		return $data;
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
	
	//添加
	public function addJobs($data){
	    $this->db->insert('jobs',$data);
	}
	
	//条件查询
	public function checkJobs($id){
	    $data = $this->db->where(array('id'=>$id))->get('jobs')->result_array();
	    return $data;
	}
	
	//修改动作
	public function updateJobs($id, $data){
	    $this->db->update('jobs', $data, array('id'=>$id));
	}
	//删除
	public function delJobs($id){
	    $this->db->delete('jobs', array('id'=>$id));
	}
	
}