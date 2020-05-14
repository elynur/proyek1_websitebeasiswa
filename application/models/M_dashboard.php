<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dashboard extends CI_Model {
    
        
        function actAnnouncement( $data ){

            $getData = $this->db->get('pengumuman');
            
            if ( $getData->num_rows() > 0 ) {
                
                $this->db->where('id_pengumuman', $getData->row()->id_pengumuman);
                $this->db->update('pengumuman', $data);
                
            } else {
                
                $this->db->insert('pengumuman', $data);
            }

            redirect('C_pengumuman');
        }

        function getAnnouncement(){

            return $this->db->get('pengumuman');
        }


        
    
    }
    
    /* End of file M_dashboard.php */
    


?>