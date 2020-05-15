<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Berkas_model extends CI_Model {

        
        function getDataSiswa(){

            $this->db->select('user.*, siswa.*, berkas.*')->from('user');
            $this->db->join('siswa', 'user.nisn = siswa.nisn');
            $this->db->join('berkas','siswa.nisn = berkas.nisn');

            $this->db->where('level', 'siswa');

            return $this->db->get();
        }
        
       

        function getAdvancedData( $table, $key ) {

            if ( $key ) {

                return $this->db->get_where( $table, $key );
            } else return $this->db->get( $table );
        }




        // confirm 
        function actConfirmBeasiswa( $nisn, $code ){

            $this->db->where('nisn', $nisn);
            $this->db->update('siswa', array('status_beasiswa' => $code));
        }
    }
    
    /* End of file berkas_model.php */
    
?>