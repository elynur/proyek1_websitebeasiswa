<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Akun extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
            //Do your magic here
            $this->load->model('AkunModel');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index(){
            $data['title'] = "Data Akun";
            $data['akun'] = $this->AkunModel->getAllakun();

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
                $data['identitas'] = $this->AkunModel->getakunById( $param );

                $this->load->view('template/header',$data);
                $this->load->view('account/edit',$data);
                $this->load->view('template/footer');
            
                if( $this->input->post('email') ){
                    $this->AkunModel->editAkun();
                    $this->session->set_flashdata('flash-data', 'diedit');
                    redirect('Akun/index','refresh');    
                }  

            } else {
                echo "Hayoo mau ngapain ? cari bug yaa";
            }
 
        }

        public function tambah(){
            $data['title']='Tambah Akun';
            $this->load->view('template/header',$data);
            $this->load->view('account/tambah',$data);
            $this->load->view('template/footer');
            
            if( $this->input->post('email') ){
         
                $this->AkunModel->tambahAkun();
                $this->session->set_flashdata('flash-data', 'ditambah');
                    
                redirect('Akun/index','refresh');
        
            }
        }

        public function hapus( $param = null ){
            if ( $param ) {
                $this->AkunModel->actDelete( $param );
                
                redirect('Akun/index','refresh');
            }
        }

    }    
    /* End of file akun.php */
    
?>