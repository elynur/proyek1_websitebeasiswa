<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class isi_beasiswa extends CI_Controller {
        
        function __construct(){

            parent::__construct();
            $this->load->model('M_politeknik');
        }

        public function index()
        {
            $data['title'] = "Isi Biodata Siswa";
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            
            $this->load->view('template/header2');
            $this->load->view('siswa/isi_beasiswa', $data);
            $this->load->view('template/footer2');
        }
    
    }
    
    /* End of file isi_beasiswa.php */
    
?>