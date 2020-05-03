<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class register extends CI_Controller {

        public function __construct(){
            //Do your magic here
            parent::__construct();
            $this->load->model('M_register');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
    
        public function index(){
            $this->load->view('register');
        }

        public function proses_register(){
            if( $this->input->post('email') ){
         
                $this->M_register->proses_register();
                $this->session->set_flashdata('flash-data', 'ditambah');
                    
                redirect('login/index','refresh');
        
            }
        
        } 
    
    }
    
    /* End of file register.php */
    
?>