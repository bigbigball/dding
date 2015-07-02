<?php
class Comment_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function insert_comment($data)
	{
		return $this->db->insert('comment', $data);
	}
	
	public function delete_comment($data)
	{
		$this->db->where($data);
		return $this->db->update('comment', array('status' => 1));
	}
	
	public function get_count($data)
	{
		$this->db->select('count(*) as num');
		$this->db->where('status', 0);
		$this->db->where_not_in('owner_id', array(0));
		$query = $this->db->get_where('comment', $data);
		return $query->row_array();
	}

	public function get_allcomment($data = array(), $page)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('comment', 'user.id = comment.owner_id');
		if ($data) {
			$this->db->where($data);
		}
		$this->db->where('status', 0);
		$this->db->order_by('create_time', 'desc');
		$this->db->limit(10, ($page - 1) * 10);
		$query = $this->db->get();
		return $query->result_array();
	}
}
