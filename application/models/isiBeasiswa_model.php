<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class isiBeasiswa_model extends CI_Model {

        public function getSiswabyId($id){
            $this->db->select('*');
            $this->db->where('id_user'=> $id);
            $this->db->from('siswa');
            $this->db->distinct();
            $this->db->join('politeknik','politeknik.id_politeknik = siswa.politeknik_id');
            $this->db->join('prodi','prodi.id_prodi = siswa.prodi_id');

            $query = $this->db->get();
            return $query->row_array();
        }
    
        public function tambahBio(){
            $data=[
                "nama_siswa" => $this->input->post('nama_siswa', true),
                "asal_sekolah" => $this->input->post('asal_sekolah', true),
                "jurusan_sekolah" => $this->input->post('jurusan_sekolah', true),
                "nilai_rata" => $this->input->post('nilai_rata', true),
                "politeknik_id" => $this->input->post('politeknik_id', true),
                "prodi" => $this->input->post('prodi_id', true)
            ];
    
            $this->db->insert('siswa', $data);
        }        
    
    }
    
    /* End of file isiBeasiswa_model.php */
    
?>