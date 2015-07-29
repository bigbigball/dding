<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class News_model extends CI_Model{
    //全部查询
	public function newsList(){
	    //添加查询条件，降序
	    $this->db->order_by('rank','ASC');
		$data = $this->db->get('news')->result_array();
		return $data;
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
	
	//添加
	public function addNews($data){
	    $this->db->insert('news',$data);
	}
	
	//条件查询
	public function checkNews($id){
	    $data = $this->db->where(array('id'=>$id))->get('news')->result_array();
	    return $data;
	}
	
	//修改动作
	public function updateNews($id, $data){
	    $this->db->update('news', $data, array('id'=>$id));
	}
	//删除
	public function delNews($id){
	    $this->db->delete('news', array('id'=>$id));
	}
	
}