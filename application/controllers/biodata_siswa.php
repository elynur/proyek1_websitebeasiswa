<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class biodata_siswa extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('bioSiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        

        public function index($nisn){
            $data['title'] = "Biodata Siswa";
            $data['siswa']=$this->bioSiswa_model->getSiswabyId($nisn);
            $this->load->view('template/header2');
            $this->load->view('siswa/biodata_siswa', $data);
            $this->load->view('template/footer2');
        }
    }
    
    /* End of file biodata_siswa.php */
    
?>