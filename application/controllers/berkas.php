<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Berkas extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('Berkas_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Admin";
            $data['getDataSiswa'] = $this->Berkas_model->getDataSiswa();

            $this->load->view('template/header');
            $this->load->view('admin/berkas', $data);
            $this->load->view('template/footer');
        }


        function actionConfirmBeasiswa( $code, $nisn = null ) {

            if ( $nisn ) {

                $this->Berkas_model->actConfirmBeasiswa( $nisn, $code );
                redirect('berkas');
            } else {

                echo "Hayo ngaps";
            }
            
        }
    
    }
    
    /* End of file berkas.php */
    
?>