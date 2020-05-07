<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class isiBeasiswa_model extends CI_Model {

        public function getSiswabyId($nisn){
            $query=$this->db->get_where('siswa', array('nisn' => $nisn));
            return $query->result_array();

            // $this->db->select('*');
            // $this->db->where('nisn');
            // $this->db->from('siswa');
            // $this->db->distinct();
            // $this->db->join('politeknik','politeknik.id_politeknik = siswa.politeknik_id');
            // $this->db->join('prodi','prodi.id_prodi = siswa.prodi_id');

            // $query = $this->db->get();
            // return $query->result_array();
        }
        
        public function tambahData(){
            $data=[
                'nisn' => $this->input->post('nisn', true),
                "nilai_rata" => $this->input->post('nilai_rata', true),
                "politeknik_id" => $this->input->post('politeknik_id', true),
                "prodi_id" => $this->input->post('prodi_id', true)
            ];
            $this->db->where('nisn', $this->input->post('nisn'));
            $this->db->update('siswa', $data);
            redirect('isi_beasiswa','refresh');
            
        }        
    
    }
    
    /* End of file isiBeasiswa_model.php */
    
?>