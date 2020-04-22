<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
    }
    
    public function index(){
        if($this->session->userdata('level') == "admin"){
            $data['title'] = "Welcome Admin";
            $this->session->set_userdata('location', 'index');
            $this->load->view('template/header');
            $this->load->view('admin');
            $this->load->view('template/footer');
        }else if($this->session->userdata('level') == "user"){
            header('location: welcome');
        }else{
            $this->session->set_flashdata('login', 'Anda tidak memiliki akses');
            header('location: login');
        }
    }

}

/* End of file Admin.php */

?>