<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

    function getDataJurusan() {
        // return $this->db->get('jurusan')->result_array();
        $sql = "SELECT jurusan.*, nama_politeknik FROM jurusan JOIN politeknik ON jurusan.id_politeknik = politeknik.id_politeknik";
        return $this->db->query( $sql )->result_array();
    }

}

/* End of file M_jurusan.php */
