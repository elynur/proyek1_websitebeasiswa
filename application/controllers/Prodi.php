<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
            //Do your magic here
            $this->load->model('M_prodi');
            $this->load->library('form_validation');
            $this->load->library('session');
    }
    

    public function index()
    {
        $data['title'] = "Data Prodi";
            $data['data'] = $this->M_prodi->getDataProdi();
           
            $this->load->view('template/header');
            $this->load->view('admin/V_prodi', $data);
            $this->load->view('template/footer');

    }

}

/* End of file Prodi.php */
