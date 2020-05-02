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
