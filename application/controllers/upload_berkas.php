<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class upload_berkas extends CI_Controller {
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->model('berkas_model');
        $this->load->library('form_validation');
        $this->load->library('session');

        public function index(){
            $data['title'] = "Upload Berkas";
            $this->load->view('template/header2');
            $this->load->view('siswa/upload_berkas', $data);
            $this->load->view('template/footer2');
        }
        public function upload(){
            
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gpdf';
            $config['max_size']  = 100000;
            
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            }else{
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_form', $data);
            }            
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>