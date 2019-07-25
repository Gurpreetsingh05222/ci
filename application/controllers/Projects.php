<?php 
class Projects extends CI_Controller{

    public function __construct(){
        
        parent::__construct();

        $this->load->model('project_model');

        if(!$this->session->userdata('logged_in')){
    
            $this->session->set_flashdata('no_access', 'You are not logged in');
    
            redirect('home/index');
    
        }

    }

    public function index(){

        $data['projects'] = $this->Project_model->get_projects();

        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);
    
    }

    public function display($project_id){

        $data['project_data'] = $this->Project_model->get_project($project_id);

        $data['main_view'] = "projects/display";
        $this->load->view("layouts/main", $data);

    }

    public function create(){

        $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
        $this->form_validation->set_rules('project_body', 'Project Description', 'trim|required');

        if($this->form_validation->run() == false){

            $data['main_view'] = 'projects/create_project';
            $this->load->view('layouts/main', $data);

        }else{
            $data = array(
                'project_user_id' => $this->session->userdata('user_id'),
                'project_name' => $this->input->post('project_name'),
                'project_body' => $this->input->post('project_body')
            );

            if($this->project_model->create_project($data)){
                $this->session->set_flashdata('project_created', 'Project has been created');
                redirect('projects/index');
            }
        }


    }

}