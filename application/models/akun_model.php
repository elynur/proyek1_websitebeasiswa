<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class akun_model extends CI_Model {
        /**
         * 
         *  Penjelasan mengenai return query | getAllAkun dan getAkunById
         * 1. Perbedaan menggunakan quey
         *      a. $this->db->get('tabel database');
         *          "SELECT * FROM tabel"
         *      b. $this->db->get_where( 'tabel database', kondisi yang diinginkan )
         *          "SELECT * FROM tabel WHERE kolomA = ...
         * 2. Perbedaan result query
         *      a. $objek->result_array()
         *          - Mengembalikan nilai lebih dari 1 data, namun bertipe array
         *              Contoh sintaks 
         *              foreach ( namaObjek as AliasPemanggilan ) {
         *                  
         *                  $AliasPemanggilan['index/namakolom']
         *              }
         * 
         * 
         */
        public function getAllAkun(){
            $query = $this->db->get('user');
            return $query->result_array();
        }

        public function getAkunById($id){
            $query=$this->db->get_where('user', array('id_user' => $id));
            return $query->row_array();

        }
        public function editAkun(){
            $data=[
                "name" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "level" => $this->input->post('level', true)
            ];

            // ambil nisn berdasarkan parameter NISN=
            $getNISN = $this->input->get('id_user');
            $this->db->where('id_user', $getNISN)->update('user', $data);
        }

        public function tambahAkun(){
            $data=[
                "name" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "level" => $this->input->post('level', true)
            ];
            $this->db->insert('user', $data);
        }

        // Delete
        function actDelete( $id ) {
            $this->db->where('id_user', $id)->delete('user');
            // "DELETE FROM jurusan WHERE "
            // echo 'param dari controller elah diterima ' .$id;
        }
    }
    
    /* End of file akun_model.php */
    
?>







<!-- 

NYOBAKKKKKKKKKKKKKKKKKKKKKKKKKKK yooooo -->