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
            
            if( $this->input->post('nisn') ){
                $this->akun_model->tambahBio();
                $this->session->set_flashdata('flash-data', 'ditambah');
                redirect('siswa/biodata_siswa','refresh');
        
            }
        }
        public function edit($nisn){
            if ( $param ) { // apakah parameter memiliki nilai ?
                // @TODO 2 
                $data['title']='Edit Biodata Siswa';
                $data['identitas'] = $this->bioSiswa_model->getSiswaByID( $param );
    
                $this->load->view('template/header',$data);
                $this->load->view('siswa/siswa_edit',$data);
                $this->load->view('template/footer');
    
                if ( $this->input->post('nisn', true)) {
                    $this->M_prodi->editBio();
                    $this->session->set_flashdata('flash-data', 'diedit');
    
                    redirect('siswa/biodata_siswa','refresh');
                }
            } else {
                echo "Hayoo mau ngapain ? cari bug yaa";
            }
        }
    }
    
    /* End of file biodata_siswa.php */
    
?>