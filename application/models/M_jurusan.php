<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

    function getDataJurusan() {
        // return $this->db->get('jurusan')->result_array();
        $sql = "SELECT jurusan.*, nama_politeknik FROM jurusan JOIN politeknik ON jurusan.id_politeknik = politeknik.id_politeknik";
        return $this->db->query( $sql )->result_array();
    }

    public function getJurusanByID($id){
            
        $query=$this->db->get_where('jurusan', array('id_jurusan' => $id));
        return $query->row_array();
    }

    function editJurusan(){
        $data=[
            "id_jurusan" => $this->input->post('id_jurusan', true),
            "nama_jurusan" => $this->input->post('nama_jurusan', true)
        ];

        // ambil nisn berdasarkan parameter NISN=
        $getIDJ = $this->input->get('id_jurusan');
        
        $this->db->where('id_jurusan', $getIDJ)->update('jurusan', $data);
    }

}

/* End of file M_jurusan.php */
