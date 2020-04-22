<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class berkas extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('berkas_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Admin";
            $data['berkas'] = $this->berkas_model->getAllberkas();

            $this->load->view('template/header');
            $this->load->view('admin/berkas', $data);
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file berkas.php */
    
?>