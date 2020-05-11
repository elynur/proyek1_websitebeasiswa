<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DashboardSiswa extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_dashboard');
            $this->load->library('form_validation');
        }
    
        public function index()
        {
            $data['title'] = "Dashboard Siswa";
            
            $this->load->view('template/header2');
            $this->load->view('siswa/dashboard', $data);
            $this->load->view('template/footer2');
        }
    
    }
    
    /* End of file DashboardSiswa.php */
    
?>