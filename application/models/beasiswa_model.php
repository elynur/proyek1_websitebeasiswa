<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class beasiswa_model extends CI_Model {
    
        public function getAllbeasiswa(){
            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->distinct();
            $this->db->join('beasiswa','beasiswa.nisn = siswa.nisn','Left');
            $this->db->join('politeknik', 'politeknik.id_politeknik = siswa.politeknik_id','Left');
            $this->db->join('prodi', 'prodi.id_prodi = siswa.prodi_id','Left');
            
            $query = $this->db->get();
            return $query->result_array();
        }
        
    }
    
    /* End of file beasiswa_model.php */
    
?>