<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class biodata_siswa extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Biodata Siswa";
            $this->load->view('template/header2');
            $this->load->view('siswa/biodata_siswa', $data);
            $this->load->view('template/footer2');
        }
    
    }
    
    /* End of file biodata_siswa.php */
    
?>