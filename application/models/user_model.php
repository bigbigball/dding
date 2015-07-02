<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_user($where)
	{
		$this->db->select('*');
		$query = $this->db->get_where('user', $where);
		return $query->row_array();
	}
	
	public function insert_user($data)
	{
		return $this->db->insert('user', $data);
	}
	
	public function update_user($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('user', $data);
	}
}