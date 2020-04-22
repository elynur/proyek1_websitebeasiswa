<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Politeknik extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
            $this->load->model('M_politeknik');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        
    
        public function index()
        {
            $data['title'] = "Data Politeknik";
            $data['data'] = $this->M_politeknik->getDataPoliteknik();
           
            $this->load->view('template/header');
            $this->load->view('admin/politeknik', $data);
            $this->load->view('template/footer');
         

        }
    
    }
    
    /* End of file Politeknik.php */
    