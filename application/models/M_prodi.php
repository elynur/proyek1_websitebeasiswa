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

    public function getProdiByID($id){
        $query=$this->db->get_where('prodi', array('id_prodi' => $id));
        return $query->row_array();
    }

    public function tambahProdi(){
        $data=[
            "nama_prodi" => $this->input->post('nama_prodi', true),
            "id_jurusan" => $this->input->post('nama_jurusan', true)
        ];
        
        $this->db->insert('prodi', $data);
    }

    function editProdi(){
        $data=[
            "id_prodi" => $this->input->post('id_prodi', true),
            "nama_prodi" => $this->input->post('nama_prodi', true)
        ];

        // ambil id_jurusan berdasarkan parameter id
        $getIDP = $this->input->get('id_prodi');
        
        $this->db->where('id_prodi', $getIDP)->update('prodi', $data);
    }

        // Delete
    function actDelete( $id ) {

        $this->db->where('id_prodi', $id)->delete('prodi');
        }
}
/* End of file M_prodi.php */