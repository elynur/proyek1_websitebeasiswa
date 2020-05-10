<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Upload_Berkas extends CI_Model {
    
        public function getSiswabyId($nisn){
            $query=$this->db->get_where('berkas', array('nisn' => $nisn));
            return $query->result_array();
        }

        public function tambahBerkas(){
            $data1['pic_title'] = $data['pic_title'];
            $data1['pic_desc'] = $data['pic_desc'];
            $data1['pic_file'] = $data['pic_file'];

		$query = $this->db->insert('berkas', $data1);
        }
    
    }
    
    /* End of file Upload_Berkas.php */
    
?>