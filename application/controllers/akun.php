<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Akun extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('akun_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Data Akun";
            $data['akun'] = $this->akun_model->getAllakun();

            $this->load->view('template/header');
            $this->load->view('admin/akun', $data);
            $this->load->view('template/footer');
        }
       
        public function edit( $param = null ){

            /** Todo List 
             * 
             * 1. Pastikan memiliki id yang dilempar pada URL (parameter)
             * 2. Ambil data dari tabel "user" berdasarkan parameter yang diterima
             */

            // @TODO 1 - URL
            // $param adalah parameter pastikan terpanggil seperti  url dibawah ini 
            // -> http://localhost/proyek/akun/edit/1234  
            // 1234 adalah parameter
            if ( $param ) { // apakah parameter memiliki nilai ?

                // @TODO 2 
                $data['title']='Edit Akun';
                $data['identitas'] = $this->akun_model->getakunById( $param );

                $this->load->view('template/header',$data);
                $this->load->view('account/edit',$data);
                $this->load->view('template/footer');


                // kondisi dimana melakukan update (submit update)
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
            
                if ($this->form_validation->run()) {
                    
                    $this->akun_model->editAkun();
                    $this->session->set_flashdata('flash-data', 'diedit');
                    redirect('akun','refresh');    
                }  

            } else {

                echo "Hayoo mau ngapain ? cari bug yaa";
            }

            // $data['title']='Edit Akun';
            // $this->form_validation->set_rules('id_user', 'id_user', 'required');
            // $this->form_validation->set_rules('username', 'username', 'required');
            // $this->form_validation->set_rules('password', 'password', 'required');
            
            // if ($this->form_validation->run() == FALSE) {
            //     $data['akun']=$this->buku_model->getbukuById($id);
            //     $this->load->view('template/header',$data);
            //     $this->load->view('account/formedit',$data);
            //     $this->load->view('template/footer');
            // }else {
            //     $this->akun_model->editAkun();
            //     $this->session->set_flashdata('flash-data', 'diedit');
            //     redirect('akun','refresh');     
            // }  
            
        
        }

        public function tambah(){
            $data['title']='Tambah Akun';
            $this->load->view('template/header',$data);
            $this->load->view('account/tambah',$data);
            $this->load->view('template/footer');

            $this->form_validation->set_rules('nisn', 'nisn', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
                if ($this->form_validation->run()) {
                    $this->akun_model->tambahAkun();
                    $this->session->set_flashdata('flash-data', 'ditambah');
                    redirect('akun/index','refresh'); 
                    
                }

        }

    }

    
    /* End of file akun.php */
    
?>