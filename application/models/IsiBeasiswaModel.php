<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class IsiBeasiswaModel extends CI_Model {


        function getDataInstitusi( $table, $key ) {

            return $this->db->get_where( $table, $key );
        }

        public function getSiswabyId($nisn){
            // $query=$this->db->get_where('siswa', array('nisn' => $nisn));
            // return $query->result_array();

            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->join('politeknik','politeknik.id_politeknik = siswa.politeknik_id');
            $this->db->join('prodi','prodi.id_prodi = siswa.prodi_id');

            $this->db->where('nisn', $nisn);
            $query = $this->db->get();
            return $query->result_array();
        }


        function cekBeasiswa( $nisn ){

            return $this->db->where('nisn', $nisn)->get('siswa');
        }
        
        public function tambahData(){
            $data=[
                'nisn' => $this->input->post('nisn', true),
                "nilai_rata" => $this->input->post('nilai_rata', true),
                "politeknik_id" => $this->input->post('politeknik_id', true),
                "jurusan_id" => $this->input->post('jurusan_id', true),
                "prodi_id" => $this->input->post('prodi_id', true)
            ];
            $this->db->where('nisn', $this->input->post('nisn'));
            $this->db->insert('siswa', $data);
            redirect('IsiBeasiswa','refresh');
            
        }      
        
        public function edit(){
            $data=[
                'nisn' => $this->session->userdata('nisn'),    
                'nilai_rata' => $this->input->post('nilai_rata', true),
                'politeknik_id' => $this->input->post('politeknik_id', true),
                'jurusan_id' => $this->input->post('jurusan_id', true),
                'prodi_id' => $this->input->post('prodi_id', true)
            ];
            $this->db->where('nisn', $this->input->post('nisn'));
            $this->db->update('siswa', $data);
            }
    
    }
    
    /* End of file isiBeasiswa_model.php */
    
?>