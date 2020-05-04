<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class login extends CI_Controller {
    
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('login_model');
            $this->load->library('session');
        }
        
        public function index(){
            $this->load->view('login');
        }

        public function proses_login(){
            $username=htmlspecialchars($this->input->post('username'));
            $password=htmlspecialchars($this->input->post('password'));

            $ceklogin=$this->login_model->processLogin($username,$password);
            // var_dump($ceklogin);
            // die();

            if($ceklogin){
                // membuat session baru (sesi)
                $this->session->set_userdata('user', $ceklogin->username);
                $this->session->set_userdata('level', $ceklogin->level);
                $this->session->set_userdata('sess_id', $ceklogin->id_user);
               
                if($this->session->userdata('level') == 'admin'){
                    redirect('akun');

                }else if($this->session->userdata('level') == 'siswa'){
                    redirect('biodata_siswa');
                }
            }
            else{
                $this->session->set_flashdata('message', 'Password salah');
                redirect('login');
            }
        }
        
        public function proses_logout(){
            $this->session->sess_destroy();
            redirect('login','refresh');
        }
    }
    
    /* End of file login.php */
    
?> 