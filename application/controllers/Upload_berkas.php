<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Upload_berkas extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form', 'url'));
            $this->load->library('upload');
            $this->load->model('Upload_berkas');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Upload Berkas";
            $nisn = $this->session->userdata('nisn'); 
            $data['berkas']=$this->Upload_berkas->getSiswabyId($nisn);

            $this->load->view('template/header2');
            $this->load->view('siswa/upload_berkas', $data);
            $this->load->view('template/footer2');
        }
       

        function actProcessUpload( $section ) {

            $this->Upload_berkas->actUploadDocument( $section );
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>