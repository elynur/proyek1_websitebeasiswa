<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class register extends CI_Controller {
    
        public function index()
        {
            $data['title'] = "Admin";
            $this->load->view('register', $data);
        }
    
    }
    
    /* End of file register.php */
    
?>