<?php

class Users extends CI_Controller{
	
	public function index(){

		$this->load->model('usermodel');
		$data['users'] = $this->usermodel->getUsers();
	//	print_r($users);

		$this->load->view('users_list',$data);
	}
}
?>