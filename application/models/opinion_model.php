<?php
class Opinion_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_opinion($data)
	{
		$this->db->select('*');
		$query = $this->db->get_where('opinion', $data);
		return $query->row_array();
	}
	
	public function insert_opinion($data)
	{
		return $this->db->insert('opinion', $data);
	}
	
	public function update_opinion($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('opinion', $data);
	}

    public function get_count($data = array())
    {
        $this->db->select('count(*) as num');
        //审核
        $this->db->where('status', 1);
		$this->db->where_not_in('user_id', array(0));
        $query = $this->db->get_where('opinion', $data);
         return $query->row_array();
    }
	
	public function get_allopinion($page)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('opinion', 'user.id = opinion.user_id');
		$this->db->where('opinion.status', 1);
		$this->db->order_by('update_time', 'desc');
		$this->db->limit(12, ($page - 1) * 12);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	//观点页面，显示问题
	public function get_questions(){
	    $this->db->select('*');
	    $this->db->from('questions');
	    
	    $this->db->order_by('id', 'asc');
	    $this->db->limit(6);
	    $query = $this->db->get();
	    return $query->result_array();
	}
	//观点页面，显示动态
	public function get_news(){
	    $this->db->select('*');
	    $this->db->from('news');
	     
	    $this->db->order_by('id', 'asc');
	    $this->db->limit(4);
	    $query = $this->db->get();
	    return $query->result_array();
	}
}
