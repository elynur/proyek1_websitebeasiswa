<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class bioSiswa_model extends CI_Model {
    
        public function getSiswabyId($nisn){
            $query=$this->db->get_where('siswa', array('id_user' => $nisn));
            return $query->row_array();
        }
    
        public function tambahBio(){
            $data=[
                "nisn" => $this->input->post('nisn', true),
                "nama_siswa" => $this->input->post('nama_siswa', true),
                "alamat_siswa" => $this->input->post('alamat_siswa', true),
                "email" => $this->input->post('email', true),
                "no_telepon" => $this->input->post('no_telepon', true),
                "asal_sekolah" => $this->input->post('asal_sekolah', true),
                "jurusan_sekolah" => $this->input->post('jurusan_sekolah', true)
            ];
            $this->db->insert('siswa', $data);
        }
        public function editBio(){
            $data=[
                "nisn" => $this->input->post('nisn', true),
                "nama_siswa" => $this->input->post('nama_siswa', true),
                "foto" => $this->input->post('foto',true),
                "alamat_siswa" => $this->input->post('alamat_siswa',true),
                "nama_orangtua" => $this->input->post('nama_orangtua',true),
                "email" => $this->input->post('email',true),
                "no_telepon" => $this->input->post('no_telepom',true),
                "asal_sekolah" => $this->input->post('asal_sekolah',true),
                "jurusan_sekolah" => $this->input->post('jurusan_sekolah',true)
            ];
    
            // ambil id_jurusan berdasarkan parameter id
            $getIDP = $this->input->get('nisn');
            
            $this->db->where('nisn', $getIDP)->update('siswa', $data);
        }
    }
    
    /* End of file bioSiswa_model.php */
    
?>