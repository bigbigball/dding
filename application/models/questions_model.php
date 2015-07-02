<?php
class Questions_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_ques($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('questions', $data);
		return $query->row_array();
	}
	
	

    public function get_count($data = array())
    {
        $this->db->select('count(*) as num');
        $this->db->where('type', 0);
        $query = $this->db->get_where('questions', $data);
        return $query->row_array();
    }
	
	public function get_allques($page)
	{
		$this->db->select('*');
		$this->db->from('questions');
		$this->db->where('type', 0);
		$this->db->limit(6, ($page - 1) * 6);
		$query = $this->db->get();
		return $query->result_array();
	}
}
