<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Upload_berkas extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
            $this->load->model('Uploadberkas_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Upload Berkas";
            $nisn = $this->session->userdata('nisn'); 
            $data['berkas']=$this->Uploadberkas_model->getSiswabyId($nisn);

            $this->load->view('template/header2');
            $this->load->view('siswa/upload_berkas', $data);
            $this->load->view('template/footer2');
        }
       

        function actProcessUpload( $section ) {

            $this->Uploadberkas_model->actUploadDocument( $section );
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>