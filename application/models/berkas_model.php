<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class berkas_model extends CI_Model {

        public function getAllberkas(){
            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->join('berkas','siswa.nisn = berkas.nisn');
            
            $query = $this->db->get();
            return $query->result_array();
        }
    }
    
    /* End of file berkas_model.php */
    
?>