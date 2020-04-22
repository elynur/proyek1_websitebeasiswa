<?php

defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        // $this->load->model("welcome-model");
    }

    public function index(){
        $data['title'] = "Home";
        $this->load->view('welcome', $data);
    }
}
    
    /* End of file home.php */
