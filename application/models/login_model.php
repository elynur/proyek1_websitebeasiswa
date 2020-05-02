<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login_model extends CI_Model {
    
        function login($username, $password){
            // var_dump($username);
            // var_dump($password);
            // die();
            $this->db->select('username,password,level');
            $this->db->from('user');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $this->db->limit(1);
            
            $query=$this->db->get();
            // var_dump($username,$password);
            // die();
            if($query->num_rows()==1){
                return $query->result();
            }else{
                return false;
            }
        }

        /** Refactor */
        function processLogin( $username, $password ){

            // kondisi
            $kondisi = [
                'username'  => $username, // ely cantik
                'password'  => $password // 123
            ];
            $query = $this->db->get_where('user', $kondisi);
            // SELECT * FROM user WHERE username = "$username" AND password = "$password"
            return ($query->num_rows() > 0) ? $query->row() : false;

            // kondisi |  (kondisi) ? kondisi terpenuhi : tidak terpenuhi (else)

        }
    
    }
    
    /* End of file login_model.php */
    
?>