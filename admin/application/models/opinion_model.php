<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//观点模型

class Opinion_model extends CI_Model{
	//添加
	public function addOpinion($data){
		$this->db->insert('opinion',$data);
	}
	//全部查询
	public function opinionList(){
	    //联合opinion和user表
		$data = $this->db->select('o.id, u.user_name, u.mobile, o.device, o.pictures, o.score, o.stars, o.view, 
				                  o.status, o.create_time, o.update_time')->from('opinion as o')
				        ->join('user as u', 'o.user_id = u.id')->order_by('o.status', 'asc')->get()->result_array();
		return $data;
	}
	//条件查询
	public function checkOpinion($id){
		//$data = $this->db->where(array('id'=>$id))->get('opinion')->result_array();
		
		$data = $this->db->select('o.id, u.user_name, u.mobile, o.device, o.pictures, o.score, o.stars, o.view,
				                  o.status, o.create_time, o.update_time')->from('opinion as o')
				         ->where(array('o.id'=>$id))->join('user as u', 'o.user_id = u.id')
		                 ->get()->result_array();
		/*
		$data = $this->db->select('o.id, u.user_name, o.device, o.pictures, o.score, o.stars, o.view,
				                  o.status, o.create_time, o.update_time')
				         ->from('(select * from opinion where id = '.$id.') as o')
				         ->join('user as u', 'o.user_id = u.id', 'left')
		                 ->get()->result_array();*/
		return $data;
	}
	
	//修改动作
	public function updateOpinion($id, $data){
		$this->db->update('opinion', $data, array('id'=>$id));	
	}
	//删除
	public function delOpinion($id){
		$this->db->delete('opinion', array('id'=>$id));
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
}