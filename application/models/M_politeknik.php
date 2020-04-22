<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Politeknik extends CI_Model {


    function getDataPoliteknik() {
        return $this->db->get('politeknik')->result_array();
    }

}

/* End of file M_Politeknik.php */
