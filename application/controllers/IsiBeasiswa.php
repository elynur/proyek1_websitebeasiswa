<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class IsiBeasiswa extends CI_Controller {
        
        function __construct(){

            parent::__construct();
            $this->load->model('M_politeknik');
            $this->load->model('M_prodi');
            $this->load->model('IsiBeasiswaModel');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Isi Biodata Siswa";
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            $data['getDataProdi'] = $this->M_prodi->getDataProdi();
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->IsiBeasiswaModel->getSiswabyId($nisn);
            
            $this->load->view('template/header2');
            $this->load->view('siswa/isi_beasiswa', $data);
            $this->load->view('template/footer2');
        }
        public function tambah(){
            $data['title']='Tambah Data Beasiswa';
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            $data['getDataProdi'] = $this->M_prodi->getDataProdi();
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->IsiBeasiswaModel->getSiswabyId($nisn);
            
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/tambah_beasiswa',$data);
            $this->load->view('template/footer2');
        }

         public function tambahBaru(){
            $this->IsiBeasiswaModel->tambahdata();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('IsiBeasiswa','refresh');  
         }
    
    }
    
    /* End of file isi_beasiswa.php */
    
?>