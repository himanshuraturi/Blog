<?php

class Blogmodel extends CI_Model{

	public function blogs_list(){
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select('title')
							->from('blogs')
							->where('user_id', $user_id)
							->get();
		//print_r($query->result()); exit;
		return $query->result();

	}

	public function add_blog($array)
	{
		return $this->db->insert( 'blogs', $array);
	}
}
?>