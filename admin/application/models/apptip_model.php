<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class Apptip_model extends CI_Model{
	//添加
	public function addAppTip($data){
		$this->db->insert('applytip',$data);
	}
	//全部查询
	public function appTipList(){
	    //添加查询条件，降序
	    $this->db->order_by('id','DESC');
		$data = $this->db->get('applytip')->result_array();
		return $data;
	}
	//条件查询
	public function checkAppTip($id){
		$data = $this->db->where(array('id'=>$id))->get('applytip')->result_array();
		return $data;
	}
	
	//修改动作
	public function updateAppTip($id, $data){
		$this->db->update('applytip', $data, array('id'=>$id));	
	}
	//删除
	public function delAppTip($id){
		$this->db->delete('applytip', array('id'=>$id));
	}
	//统计总数量：
	public function get_column($num,$offset){
	    $query=$this->db->get('column',$num,$offset);
	    return $query->result_array();
	}
}