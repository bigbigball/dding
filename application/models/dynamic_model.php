<?php
class Dynamic_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_dynamic($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('dynamic', $data);
		return $query->row_array();
	}
	
	

    public function get_count($data = array())
    {
        $this->db->select('count(*) as num');
        //$this->db->where('type', 0);
        $query = $this->db->get_where('dynamic', $data);
        return $query->row_array();
    }
	
	public function get_alldynamic($page)
	{
		$this->db->select('*');
		$this->db->from('dynamic');
		//$this->db->where('type', 0);
		$this->db->limit(4, ($page - 1) * 4);
		$query = $this->db->get();
		return $query->result_array();
	}
}
