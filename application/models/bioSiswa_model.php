<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class bioSiswa_model extends CI_Model {
    
        public function getSiswabyId($nisn){
            $query=$this->db->get_where('siswa', array('nisn' => $nisn));
            return $query->row_array();
        }
    
    }
    
    /* End of file bioSiswa_model.php */
    
?>