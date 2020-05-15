<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Siswa_model extends CI_Model {

        public function getAllsiswa(){
            $this->db->select('*');
            $this->db->from('siswa');
            $this->db->distinct();
            $this->db->join('politeknik','politeknik.id_politeknik = siswa.politeknik_id');
            $this->db->join('prodi','prodi.id_prodi = siswa.prodi_id');

            $query = $this->db->get();
            return $query->result_array();
        }
    }

        // function getStatusKelolosan(){
        //     $getStatus = $this->db->get('status_beasiswa');

        //     if($getStatus == 1){
        //         echo "LOLOS";
        //     } else {
        //         echo"GAGAL";
        //     }
        //     return $this->db->get('status_beasiswa');

        // }
    
    /* End of file siswa_model.php */
    
?>