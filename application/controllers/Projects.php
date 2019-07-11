<?php 
class Projects extends CI_Controller{

    public function __construct(){
        
        parent::__construct();

        if(!$this->session->userdata('logged_in')){
    
            $this->session->set_flashdata('no_access', 'You are not logged in');
    
            redirect('home/index');
    
        }

    }

    public function index(){

        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);
    
    }

}