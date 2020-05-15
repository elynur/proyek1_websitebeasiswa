<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('Login_model');
        }
        
        public function index(){
            $this->load->view('login');
        }

        public function proses_login(){
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));
    
            $ceklogin = $this->Login_model->processLogin($username, $password);
    
            if ($ceklogin) {
                foreach ($ceklogin as $row);
                $arr = array(
                    'level' => $row['level'],
                    'username' => $row['username'],
                    'nama' => $row['name'],
                    'password' => $row['password'],
                    'email' => $row['email'],
                    'nisn' => $row['nisn']
                );
                $this->session->set_userdata($arr);
                if ($row['level'] == "admin") {
                    redirect('c_pengumuman');
                } else {
                    redirect('dashboard_siswa');
                }
            } else {
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