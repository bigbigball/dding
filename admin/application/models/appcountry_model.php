<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//留学申请资讯模型

class Appcountry_model extends CI_Model{
	//添加申请国家资料
	public function addAppCountry($table, $data){
		$this->db->insert($table, $data);
	}
	//全部查询
	public function appCountryList($table){
		$data = $this->db->get($table)->result_array();
		return $data;
	}
	//条件查询
	public function checkAppCountry($table, $id){
		$data = $this->db->where(array('id'=>$id))->get($table)->result_array();
		return $data;
	}
	//查询数据库中的数据项数
	public function appNumOfCountry($table){
		$num = $this->db->get($table)->num_rows();
		return $num;
	}
	//修改动作
	public function updateAppCountry($table, $id, $data){
		$this->db->update($table, $data, array('id'=>$id));	
	}
	//删除
	public function delAppCountry($table, $id){
		$this->db->delete($table, array('id'=>$id));
	}
}