<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class biodata_siswa extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('bioSiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Biodata Siswa";
            //$data['siswa']=$this->bioSiswa_model->getSiswabyId($nisn);
            $this->load->view('template/header2');
            $this->load->view('siswa/biodata_siswa', $data);
            $this->load->view('template/footer2');
        }

        public function tambah(){
            $data['title']='Tambah Data';
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/biodata_siswa',$data);
            $this->load->view('template/footer2');
            
            if( $this->input->post('id_user') ){
         
                $this->akun_model->tambahBio();
                $this->session->set_flashdata('flash-data', 'ditambah');
                    
                redirect('siswa/biodata_siswa','refresh');
        
            }
        }
    }
    
    /* End of file biodata_siswa.php */
    
?>