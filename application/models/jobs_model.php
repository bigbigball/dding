<?php
class Jobs_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_jobs($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('jobs', $data);
		return $query->row_array();
	}
	
	

    public function get_count($data = array())
    {
        $this->db->select('count(*) as num');
        
        $query = $this->db->get_where('jobs', $data);
        return $query->row_array();
    }
	
	public function get_alljobs($page)
	{
		$this->db->select('*');
		$this->db->from('jobs');
		
		$this->db->order_by('rank', 'asc');
		$this->db->limit(8, ($page - 1) * 8);
		$query = $this->db->get();
		return $query->result_array();
	}
}
