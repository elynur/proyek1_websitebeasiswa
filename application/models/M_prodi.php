<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_prodi extends CI_Model {

    function getDataProdi() {
        // $sql = "SELECT prodi.*, nama_jurusan FROM prodi JOIN jurusan ON jurusan.id_politeknik = politeknik.id_politeknik";
        // return $this->db->query( $sql )->result_array();
        $this->db->select('prodi.*, jurusan.*, politeknik.*');
        $this->db->from('prodi');
        $this->db->join('jurusan','prodi.id_jurusan = jurusan.id_jurusan');
        $this->db->join('politeknik','jurusan.id_politeknik = politeknik.id_politeknik');

        
        $query = $this->db->get();
        return $query->result_array();

    }



}
/* End of file M_prodi.php */