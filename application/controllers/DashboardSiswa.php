<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DashboardSiswa extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_dashboard');
            $this->load->model('BeasiswaModel');
        }
    
        public function index()
        {
            $data['title'] = "Dashboard Siswa";
            $data['Announcement'] = $this->M_dashboard->getAnnouncement();
            
            $dateSaatIni    = strtotime(date('Y-m-d H:i:s'));
            $datePengumuman = strtotime( $data['Announcement']->row()->date );

            $statusPengumuman = false;
            if ( $dateSaatIni >= $datePengumuman ){

                $statusPengumuman = true;
            }

            $data['status_pengumuman'] = $statusPengumuman;
            
            $this->load->view('template/header2');
            $this->load->view('siswa/dashboard', $data);
            $this->load->view('template/footer2');
        }


        function onLoadCountDown(){

            $getData = $this->M_dashboard->getAnnouncement();
           
            $date1 = new DateTime(date('Y-m-d H:i:s', strtotime($getData->row()->date )));
            $date2 = new DateTime( date('Y-m-d H:i:s') );

            $diff = $date2->diff($date1);
            

            // $hours = $diff->h;
            // $hours = $hours + ($diff->days*24);

            // $minutes = $diff->i;

            $data['getPengumuman'] = array(

                'days'      => $diff->d,
                'hours'     => $diff->h,
                'minutes'   => $diff->i,
                'seconds'   => $diff->s
            );
            $this->load->view('siswa/viewCountdown', $data);
        }


        function onLoadHasilSeleksi(){

            $data['getSiswa'] = $this->BeasiswaModel->getAllbeasiswa( array( 'siswa.nisn' => $this->session->userdata('nisn') ) );
            
            $data['Announcement'] = $this->M_dashboard->getAnnouncement();
            
            $dateSaatIni    = strtotime(date('Y-m-d H:i:s'));
            $datePengumuman = strtotime( $data['Announcement']->row()->date );
            
            if ( $dateSaatIni >= $datePengumuman ) {

                $this->load->view('siswa/viewHasilSeleksi', $data);

            } else {

                echo "it's not time yet bro ! maksa banget lo";
            }
        }
    
    }
    
    /* End of file DashboardSiswa.php */
    
?>