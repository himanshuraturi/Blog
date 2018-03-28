<?php

class Blogmodel extends CI_Model{

	public function blogs_list( $limit, $offset){
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select(['title','id'])
							//->select('id')
							->from('blogs')
							->where('user_id', $user_id)
							->limit( $limit, $offset)
							->get();
		//print_r($query->result()); exit;
		return $query->result();
	}

	public function all_blogs_list( $limit, $offset){
		$query = $this->db
							->select(['title','id'])
							//->select('id')
							->from('blogs')
							->limit( $limit, $offset)
							->get();
		//print_r($query->result()); exit;
		return $query->result();
	}

	public function count_all_blogs()
	{
		$query = $this->db
							->select(['title','id'])
							//->select('id')
							->from('blogs')
							->get();
		//print_r($query->result()); exit;
		return $query->num_rows();
	}

	public function num_rows()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							->select(['title','id'])
							//->select('id')
							->from('blogs')
							->where('user_id', $user_id)
							->get();
		//print_r($query->result()); exit;
		return $query->num_rows();
	}

	public function add_blog($array)
	{
		return $this->db->insert( 'blogs', $array);
	}

	public function find_blog($blog_id)
	{
		$q = $this->db->select(['id', 'title', 'body'])
						->where('id', $blog_id)
						->get('blogs');
		return $q->row();
	}

	public function update_blog($blog_id, $blog)
	{
		return $this->db
					->where('id', $blog_id)
					->update('blogs', $blog);
	}

	public function delete_blog($blog_id)
	{
		return $this->db->delete('blogs',['id'=>$blog_id]);
	}

	public function search( $query,$limit, $offset)
	{
		$q = $this->db->from('blogs')
						->like('title',$query)
						->limit($limit, $offset)
						->get();
		return $q->result();
	}

	public function count_search_results($query)
	{
		$q = $this->db->from('blogs')
						->like('title',$query)
						->get();
		return $q->num_rows();	
	}

	public function find($id)
	{
		$q = $this->db->from('blogs')
					->where( ['id'=>$id])
					->get();
		if ($q->num_rows() )
			return $q->row();
		return false;
	}
}
?>