<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class panduan extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Panduan";
            $this->load->view('panduan', $data);
        }
    
    }
    
    /* End of file panduan.php */
    
?>            