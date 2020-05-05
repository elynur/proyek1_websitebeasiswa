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
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->bioSiswa_model->getSiswabyId($nisn);
            
            $this->load->view('template/header2');
            $this->load->view('siswa/biodata_siswa', $data);
            $this->load->view('template/footer2');
        }

        public function tambah(){
            $data['title']='Tambah Data';
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->bioSiswa_model->getSiswabyId($nisn);

            $this->load->view('template/header2',$data);
            $this->load->view('siswa/tambah_biodata',$data);
            $this->load->view('template/footer2');   
        }

        public function tambahBaru(){
            $this->bioSiswa_model->tambahBio();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('biodata_siswa','refresh');  
        }

        public function edit(){
            $data['title']='Edit Data';
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->bioSiswa_model->getSiswabyId($nisn);
           
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/siswa_edit',$data);
            $this->load->view('template/footer2');
    
        }
        public function editBio(){
            $this->bioSiswa_model->edit();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('biodata_siswa','refresh');  
        }
    }
    
    /* End of file biodata_siswa.php */
    
?>