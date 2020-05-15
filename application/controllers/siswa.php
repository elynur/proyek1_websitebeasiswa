<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Siswa extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('Siswa_model');
            $this->load->model('Beasiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Data Siswa";
            $data['siswa'] = $this->Siswa_model->getAllsiswa();
           
            $this->load->view('template/header');
            $this->load->view('admin/siswa', $data);
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file siswa.php */
    
?>