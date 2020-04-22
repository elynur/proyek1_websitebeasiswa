<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class beasiswa extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('beasiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Admin";
            $data['beasiswa'] = $this->beasiswa_model->getAllbeasiswa();

            $this->load->view('template/header');
            $this->load->view('admin/beasiswa', $data);
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file beasiswa.php */
    
?>