<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class BioSiswaModel extends CI_Model {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
        public function getSiswabyId( $nisn ){
            $query=$this->db->get_where('siswa', array('nisn' => $nisn));
            return $query->result_array();
        }

        function cekBiodata( $nisn ){

            return $this->db->where('nisn', $nisn)->get('siswa');
        }
    
        public function tambahBio(){
            $data=[
                "nisn" => $this->session->userdata('nisn'),
                "nama_siswa" => $this->input->post('nama_siswa', true),
                "foto" => $this->input->post('foto'),
                "alamat_siswa" => $this->input->post('alamat_siswa', true),
                "nama_orangtua" => $this->input->post('nama_orangtua',true),
                "email" => $this->input->post('email', true),
                "no_telepon" => $this->input->post('no_telepon', true),
                "asal_sekolah" => $this->input->post('asal_sekolah', true),
                "jurusan_sekolah" => $this->input->post('jurusan_sekolah', true)
            ];
            $this->db->insert('siswa', $data);
            redirect('BiodataSiswa','refresh');
        }
        public function edit(){
            $data=[
                'nisn' => $this->input->post('nisn', true),
                'nama_siswa' => $this->input->post('nama_siswa', true),     
                'foto' => $this->input->post('foto'),
                'alamat_siswa' => $this->input->post('alamat_siswa', true),
                'nama_orangtua' => $this->input->post('nama_orangtua',true),
                'email' => $this->input->post('email', true),
                'no_telepon' => $this->input->post('no_telepon', true),
                'asal_sekolah' => $this->input->post('asal_sekolah', true),
                'jurusan_sekolah' => $this->input->post('jurusan_sekolah', true)
            ];
            $this->db->where('nisn', $this->input->post('nisn'));
            $this->db->update('siswa', $data);
            }
    }
    
    /* End of file bioSiswa_model.php */
    
?>