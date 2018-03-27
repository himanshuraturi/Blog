<?php

	class Admin extends My_Controller{

		public function dashboard(){

			$this->load->model('blogmodel');
			$blogs = $this->blogmodel->blogs_list();

			$this->load->view('admin/dashboard',['blogs'=>$blogs]);
		}

		public function add_blog(){

			$this->load->helper('form');
			$this->load->view('admin/add_blog');
		
		}

		public function store_blog(){

			$this->load->library('form_validation');
			if( $this->form_validation->run('add_blog_rules') ){
				$post = $this->input->post();

				unset($post['submit']);
				$this->load->model('blogmodel');
				if( $this->blogmodel->add_blog($post) ){

					$this->session->set_flashdata('feedback',"Added successfully");
					$this->session->set_flashdata('feedback_class','alert_success');
				}
				else{

					$this->session->set_flashdata('feedback',"Failed to add, try again");
					$this->session->set_flashdata('feedback_class','alert_danger');
				}
				return redirect('admin/add_blog');
			}
			else{
				return redirect('admin/add_blog');
			}
		}

		public function edit_blog(){

		}

		public function delete_blog(){

		}

		public function __construct()
		{
			parent::__construct();
			if(! $this->session->userdata('user_id') )
				return redirect('login');

		}

	}
?>