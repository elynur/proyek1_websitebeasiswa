<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Politeknik extends CI_Model {


    function getDataPoliteknik() {
        // return $this->db->get('politeknik')->result_array();

        $this->db->select('*');
        $this->db->from('politeknik');

        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file M_Politeknik.php */
