<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class UploadBerkas extends CI_Controller {

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
        public function upload(){
            
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']  = 200000;
            
            $this->load->library('upload', $config);

            $this->upload->do_upload('file1');
            $file1 = $this->upload->data();
            echo "<pre>";
            print_r($file1);
            echo "</pre>";
            
            // script uplaod file kedua
            $this->upload->do_upload('file2');
            $file2 = $this->upload->data();
            echo "<pre>";
            print_r($file2);
            echo "</pre>";
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>