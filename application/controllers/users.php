<?php

class Users extends CI_Controller{

	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|matches[password]');

		if($this->form_validation->run() == FALSE){

			$data = array(
				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data);

			redirect('home');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->user_model->login_user($username, $password);

		}

	}
}