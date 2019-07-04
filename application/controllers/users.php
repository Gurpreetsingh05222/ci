<?php

class Users extends CI_Controller{

	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[12]');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[15]');

		if($this->form_validation->run() == FALSE){

			$data = array(
				'errors' => validation_errors()
			);

			$this->session->set_flashdata($data);

			redirect('home');
		}

		// $this->input->post('username');
	}
}