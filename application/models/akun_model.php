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
            
            $query=$this->db->get_where('user', array('nisn' => $id));
            return $query->row_array();
        }
        public function editAkun(){
            $data=[
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true)
            ];

            // ambil nisn berdasarkan parameter NISN=
            $getNISN = $this->input->get('nisn');
            
            $this->db->where('nisn', $getNISN)->update('user', $data);
            // $this->db->where('nisn', $getNISN);
            // $this->db->update('user',$data);
        }

        public function tambahAkun(){
            $data=[
                "nisn" => $this->input->post('nisn', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true)
            ];
            

            // add child row 
            $dataChild = array(
                'nisn' => $this->input->post('nisn', true)
            );
            $this->db->insert('siswa', $dataChild);


            $this->db->insert('user', $data);
            // $this->db->where('nisn', $getNISN);
            // $this->db->update('user',$data);
        }


    }
    
    /* End of file akun_model.php */
    
?>







<!-- 

NYOBAKKKKKKKKKKKKKKKKKKKKKKKKKKK yooooo -->