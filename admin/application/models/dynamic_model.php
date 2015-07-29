<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Dynamic_model extends CI_Model{
    //全部查询
	public function dynamicList(){
	    //添加查询条件，降序
	    $this->db->order_by('rank','ASC');
		$data = $this->db->get('dynamic')->result_array();
		return $data;
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
	
	//添加
	public function addDynamic($data){
	    $this->db->insert('dynamic',$data);
	}
	
	//条件查询
	public function checkDynamic($id){
	    $data = $this->db->where(array('id'=>$id))->get('dynamic')->result_array();
	    return $data;
	}
	
	//修改动作
	public function updateDynamic($id, $data){
	    $this->db->update('dynamic', $data, array('id'=>$id));
	}
	//删除
	public function delDynamic($id){
	    $this->db->delete('dynamic', array('id'=>$id));
	}
	
}