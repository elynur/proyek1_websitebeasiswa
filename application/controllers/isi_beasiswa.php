<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class isi_beasiswa extends CI_Controller {
        
        function __construct(){

            parent::__construct();
            $this->load->model('M_politeknik');
            $this->load->model('M_prodi');
        }

        public function index()
        {
            $data['title'] = "Isi Biodata Siswa";
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            $data['getDataProdi'] = $this->M_prodi->getDataProdi();
            
            $this->load->view('template/header2');
            $this->load->view('siswa/isi_beasiswa', $data);
            $this->load->view('template/footer2');
        }
        public function tambah(){
            $data['title']='Tambah Beasiswa';
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/isi_siswa',$data);
            $this->load->view('template/footer2');
            
            if( $this->input->post('id_user') ){
         
                $this->akun_model->tambahBeasiswa();
                $this->session->set_flashdata('flash-data', 'ditambah');
                    
                redirect('siswa/biodata_siswa','refresh');
        
            }
        }
    
    }
    
    /* End of file isi_beasiswa.php */
    
?>