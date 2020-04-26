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

            $ceklogin=$this->login_model->login($username,$password);
            // var_dump($ceklogin);
            // die();

            if($ceklogin){
                foreach($ceklogin as $row);
                $this->session->set_userdata('user',$row->username);
                $this->session->set_userdata('level',$row->level);

                if($this->session->userdata('level')=='admin'){
                    $this->load->view('admin/akun')
                }elseif($this->session->userdata('level')=='siswa'){
                    $this->load->view('siswa/biodata_siswa')
                }
            }
            else{
            $this->session->set_flashdata('message', 'Password salah');
            redirect('login');
            }
        }
        
        // public function logout(){
        //     $this->session->sess_destroy();
        //     redirect('login','refresh');
        // }
    }
    
    /* End of file login.php */
    
?> 