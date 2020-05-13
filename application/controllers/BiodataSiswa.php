<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class BiodataSiswa extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('BioSiswaModel');
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index(){
            $data['title'] = "Biodata Siswa";
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->BioSiswaModel->getSiswabyId($nisn);

            $data['cekBiodata'] = $this->BioSiswaModel->cekBiodata( $nisn ); 
            
            $this->load->view('template/header2');
            $this->load->view('siswa/biodata_siswa', $data);
            $this->load->view('template/footer2');
        }

        public function tambah(){
            $data['title']='Tambah Data';
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->BioSiswaModel->getSiswabyId($nisn);

            $this->load->view('template/header2',$data);
            $this->load->view('siswa/tambah_biodata',$data);
            $this->load->view('template/footer2');   
        }

        public function tambahBaru(){
            $this->BioSiswaModel->tambahBio();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('BiodataSiswa','refresh');  
        }

        // view
        public function edit(){
            $data['title']='Edit Data';
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->BioSiswaModel->getSiswabyId($nisn);
           
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/siswa_edit',$data);
            $this->load->view('template/footer2');
    
        }

        // action - update
        public function editBio(){
            $this->BioSiswaModel->edit();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('BiodataSiswa','refresh');  
        }

        function actProcessUpload($section){
            $this->Upload_berkas->actUploadDocument( $section );
        }
        
    }
    
    /* End of file biodata_siswa.php */
    
?>