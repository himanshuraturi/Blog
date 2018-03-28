<?php

	class Admin extends My_Controller{

		public function dashboard(){
			$this->load->library('pagination');
			$config = [
				'base_url'  => base_url('admin/dashboard'),
				'per_page' => 5,
				'total_rows' => $this->blogmodel->num_rows(),
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
			$blogs = $this->blogmodel->blogs_list( $config['per_page'], $this->uri->segment(3) );
			$this->load->view('admin/dashboard',['blogs'=>$blogs]);
		}

		public function add_blog(){
			$this->load->view('admin/add_blog');
		}

		public function store_blog(){

			$this->load->library('form_validation');
			if( $this->form_validation->run('add_blog_rules') ){
				$post = $this->input->post();

				unset($post['submit']);
				return $this->flashAndRedirect(
								$this->blogmodel->add_blog($post),
								"Blog Added successfully",
								"Failed to add, try again"
							);
			}
			else{
				$this->load->view('admin/add_blog');
			}
		}

		public function edit_blog($blog_id)
		{
			$blog = $this->blogmodel->find_blog($blog_id);
			$this->load->view('admin/edit_blog',['blog'=>$blog]);
		}

		public function update_blog($blog_id)
		{

			$this->load->library('form_validation');
			if( $this->form_validation->run('add_blog_rules') ){
				$post = $this->input->post();
				unset($post['submit']);
				return $this->flashAndRedirect(
								$this->blogmodel->update_blog($blog_id, $post),
								"Blog Updated successfully",
								"Failed to update, try again"
							);
				
			}
			else{
				$this->load->view('admin/edit_blog');
			} 
		}

		public function delete_blog(){
			$blog_id = $this->input->post('blog_id');
			return $this->flashAndRedirect(
							$this->blogmodel->delete_blog($blog_id),
							"Blog deleted successfully",
							"Failed to delete, try again"
						);
		}

		public function __construct()
		{
			parent::__construct();
			if(! $this->session->userdata('user_id') )
				return redirect('login');
			$this->load->model('blogmodel');
			$this->load->helper('form');
		}

		private function flashAndRedirect( $successful, $successMsg, $failureMsg)
		{
			if( $successful ){
				$this->session->set_flashdata('feedback', $successMsg);
				$this->session->set_flashdata('feedback_class', 'alert_success');
			}
			else{
				$this->session->set_flashdata('feedback', $failureMsg);
				$this->session->set_flashdata('feedback_class', 'alert_danger');
			}
			return redirect('admin/dashboard');
		}

	}
?>