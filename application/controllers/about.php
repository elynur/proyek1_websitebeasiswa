<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class about extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Tentang Kami";
            $this->load->view('about', $data);
        }
    
    }
    
    /* End of file about.php */
    
?>