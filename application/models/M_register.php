<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_register extends CI_Model {

        /** Refactor */
        function proses_register(){
            $data=[
                "name" => $this->input->post('nama', true),
                "nisn" => $this->input->post('nisn', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "level" => "siswa"
            ];
            
            $this->db->insert('user', $data);

        }
    
    }
    
    /* End of file M_register.php */
    
?>