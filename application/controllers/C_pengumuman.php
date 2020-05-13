<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_pengumuman extends CI_Controller {
        
        function __construct(){

            parent::__construct();

            $this->load->model('M_dashboard');
        }

        public function index(){

            $data['title'] = "";

            $this->load->view('template/header');
            $this->load->view('admin/V_pengumuman', $data);
            $this->load->view('template/footer');
        }   

        function actProcessAnnouncement(){

            // $this->
        }
    
    }
    
    /* End of file C_pengumuman.php */
    