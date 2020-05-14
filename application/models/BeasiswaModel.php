<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class BeasiswaModel extends CI_Model {
    
        public function getAllbeasiswa( $key = null ){
            
            $this->db->select('siswa.*, politeknik.*, prodi.*, jurusan.*');
            $this->db->from('siswa');
            $this->db->distinct();
            $this->db->join('beasiswa','beasiswa.nisn = siswa.nisn','Left');
            $this->db->join('politeknik', 'politeknik.id_politeknik = siswa.politeknik_id','Left');
            $this->db->join('jurusan', 'jurusan.id_jurusan = siswa.jurusan_id','Left');
            $this->db->join('prodi', 'prodi.id_prodi = siswa.prodi_id','Left');
            
            if ( $key ) {
                
                $this->db->where($key);
                $query = $this->db->get();
                return $query->row_array();
            
            } else {

                $query = $this->db->get();
                return $query->result_array();
            }
            
        }
        
    }
    
    /* End of file beasiswa_model.php */
    
?>