<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

    /** Refactor */
    function processLogin($username, $password)
    {
        $this->db->select('id_user, nisn, email, username, password, name, level');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        // SELECT * FROM user WHERE username = "$username" AND password = "$password"
        return ($query->num_rows() > 0) ? $query->result_array() : false;
        // kondisi |  (kondisi) ? kondisi terpenuhi : tidak terpenuhi (else)

    }
}
    
    /* End of file Login_model.php */