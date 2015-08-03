<?php
class Media_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_media($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('news', $data);
		return $query->row_array();
	}
	
	

    public function get_count($data = array())
    {
        $this->db->select('count(*) as num');
        //$this->db->where('type', 0);
        $query = $this->db->get_where('news', $data);
        return $query->row_array();
    }
	
	public function get_allmedia($page)
	{
		$this->db->select('*');
		$this->db->from('news');
		//$this->db->where('type', 0);
		$this->db->order_by('rank', 'desc');
		$this->db->limit(4, ($page - 1) * 4);
		$query = $this->db->get();
		return $query->result_array();
	}
}
