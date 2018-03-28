<?php
	
	class User extends My_Controller{

		public function index()
		{
			$this->load->helper('form');
			$this->load->model('blogmodel');
			$this->load->library('pagination');
			$config = [
				'base_url'  => base_url('user/index'),
				'per_page' => 5,
				'total_rows' => $this->blogmodel->count_all_blogs(),
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'first_tag_open' => "<li>",
				'first_tag_close' => "</li>",
				'last_tag_open' => "<li>",
				'last_tag_close' => "</li>",
				'next_tag_open' => "<li>",
				'next_tag_close' => "</li>",
				'prev_tag_open' => "<li>",
				'prev_tag_close' => "</li>",
				'num_tag_open'  => "<li>",
				'num_tag_close' => "</li>",
				'cur_tag_open'  => "<li class='active'><a>",
				'cur_tag_close' => '</a></li>',
			];
			$this->pagination->initialize($config);
			$blogs = $this->blogmodel->all_blogs_list($config['per_page'], $this->uri->segment(3));
			$this->load->view('public/blogs_list', compact('blogs'));
		}

		public function search()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('query','Query','required');
			if( !$this->form_validation->run())
				return $this->index();
			$query = $this->input->post('query');
			
			$this->load->model('blogmodel');
			return redirect("user/search_results/$query");
		}

		public function search_results($query)
		{
			$this->load->helper('form');
			$this->load->model('blogmodel');
			$this->load->library('pagination');
			$config = [
				'base_url'  => base_url("user/search_results/$query"),
				'per_page' => 5,
				'total_rows' => $this->blogmodel->count_search_results($query),
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'first_tag_open' => "<li>",
				'uri_segment'  => 4,
				'first_tag_close' => "</li>",
				'last_tag_open' => "<li>",
				'last_tag_close' => "</li>",
				'next_tag_open' => "<li>",
				'next_tag_close' => "</li>",
				'prev_tag_open' => "<li>",
				'prev_tag_close' => "</li>",
				'num_tag_open'  => "<li>",
				'num_tag_close' => "</li>",
				'cur_tag_open'  => "<li class='active'><a>",
				'cur_tag_close' => '</a></li>',
			];
			$this->pagination->initialize($config); 
			$blogs = $this->blogmodel->search($query, $config['per_page'], $this->uri->segment(4));
			$this->load->view('public/search_results', compact('blogs'));
		}

		public function blog($id)
		{
			$this->load->helper('form');
			$this->load->model('blogmodel');
			$blog = $this->blogmodel->find($id);
			$this->load->view('public/blog_detail', compact('blog') );
		}
	}
?>