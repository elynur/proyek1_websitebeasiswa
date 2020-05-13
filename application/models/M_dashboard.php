<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_dashboard extends CI_Model {
    
        
        function actAnnouncement( $data ){

            $getData = $this->db->get('pengumuman');
            if ( $getData->num_rows() > 0 ) {

                $this->db->insert('pengumuman', $data);
            } else {
                
                $this->db->where('id_pengumuman', $getData->row()->id_p);
            }
        }
    
    }
    
    /* End of file M_dashboard.php */
    


?>