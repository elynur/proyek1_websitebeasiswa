<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
            //Do your magic here
            $this->load->model('M_jurusan');
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

}

/* End of file Jurusan.php */
