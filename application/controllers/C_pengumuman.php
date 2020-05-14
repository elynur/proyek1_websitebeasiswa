<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_pengumuman extends CI_Controller {
        
        function __construct(){

            parent::__construct();

            $this->load->model('M_dashboard');
        }

        public function index(){

            $data['getPengumuman'] = $this->M_dashboard->getAnnouncement();

            $this->load->view('template/header');
            $this->load->view('admin/V_pengumuman', $data);
            $this->load->view('template/footer');
        }   

        function actProcessAnnouncement(){

            // $this->M_dashboard->actAnnouncement();

            $date = explode('-', $this->input->post('date'));
            $convert = date('Y-m-d', strtotime( $date[0] ));

            $date = $convert.' '.date('H:i:s', strtotime($date[1]));

            $data = array(

                'date' => $date
            );
            $this->M_dashboard->actAnnouncement( $data );
        }
    
    }
    
    /* End of file C_pengumuman.php */
    