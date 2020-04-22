<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class upload_berkas extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Upload Berkas";
            $this->load->view('template/header2');
            $this->load->view('siswa/upload_berkas', $data);
            $this->load->view('template/footer2');
        }
    
    }
    
    /* End of file upload_berkas.php */
    
?>