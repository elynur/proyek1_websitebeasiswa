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
            
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }else{
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success', $data);
            }
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>