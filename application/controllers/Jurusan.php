<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
            //Do your magic here
            $this->load->model('M_jurusan');
            $this->load->model('M_politeknik');
            $this->load->library('form_validation');
            $this->load->library('session');
    }
    

    public function index()
    {
        $data['title'] = "Data Jurusan";
            $data['data'] = $this->M_jurusan->getDataJurusan();
           
            $this->load->view('template/header');
            $this->load->view('admin/V_jurusan', $data);
            $this->load->view('template/footer');
    }

    public function edit( $param = null){
        if ( $param ) { // apakah parameter memiliki nilai ?

            // @TODO 2 
            $data['title']='Edit Jurusan';
            $data['identitas'] = $this->M_jurusan->getJurusanByID( $param );

            $this->load->view('template/header',$data);
            $this->load->view('jurusan/edit',$data);
            $this->load->view('template/footer');

            if ( $this->input->post('nama_jurusan', true) ) {

                $this->M_jurusan->editJurusan();
                $this->session->set_flashdata('flash-data', 'diedit');

                redirect('jurusan/index','refresh');
            }
            

            // kondisi dimana melakukan update (submit update)
            // $this->form_validation->set_rules('id_jurusan', 'id_jurusan', 'required');
            // $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required');
        
            // if ($this->form_validation->run()) {
            //     echo"well";
    
            // }  else {
            //     echo"gakk";
            // } 

        } else {

            echo "Hayoo mau ngapain ? cari bug yaa";
        }
    }

    public function hapus( $param = null ){
        if ( $param ) {
            // $data['identitas'] = $this->M_jurusan->getJurusanByID( $param );
            $this->M_jurusan->actDelete( $param );
            
            redirect('jurusan/index','refresh');
        }
        /** 
         * 
         *  1. Kirim id dari view -> controller (function)
         *  2. Lempar ke moel -> function hapus
         *  3. Masukan query $this->db->where()->delete()
         */
    }


    function tambah(){
        $data['title']='Tambah Jurusan';
        $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();

        $this->load->view('template/header',$data);
        $this->load->view('jurusan/tambah',$data);
        $this->load->view('template/footer');

        if( $this->input->post('nama_jurusan') ){
         
            $this->M_jurusan->tambahJurusan();
            $this->session->set_flashdata('flash-data', 'ditambah');
                
            redirect('jurusan/index','refresh');
    
        }
    }
}

/* End of file Jurusan.php */
