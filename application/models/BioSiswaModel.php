<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class BioSiswaModel extends CI_Model {
        
        public function __construct()
        {
            parent::__construct();
            //Do your magic here
        }
        
        public function getSiswabyId( $nisn ){
            $query=$this->db->get_where('siswa', array('nisn' => $nisn));
            return $query->result_array();
        }

        function cekBiodata( $nisn ){

            return $this->db->where('nisn', $nisn)->get('siswa');
        }
    
        public function tambahBio(){
            $data=[
                "nisn" => $this->session->userdata('nisn'),
                "nama_siswa" => $this->input->post('nama_siswa', true),
                "foto" => $this->input->post('foto'),
                "alamat_siswa" => $this->input->post('alamat_siswa', true),
                "nama_orangtua" => $this->input->post('nama_orangtua',true),
                "email" => $this->input->post('email', true),
                "no_telepon" => $this->input->post('no_telepon', true),
                "asal_sekolah" => $this->input->post('asal_sekolah', true),
                "jurusan_sekolah" => $this->input->post('jurusan_sekolah', true)
            ];
            $this->db->insert('siswa', $data);
            redirect('BiodataSiswa','refresh');
        }
        public function edit(){
            $data=[
                'nisn' => $this->input->post('nisn', true),
                'nama_siswa' => $this->input->post('nama_siswa', true),     
                'foto' => $this->input->post('foto'),
                'alamat_siswa' => $this->input->post('alamat_siswa', true),
                'nama_orangtua' => $this->input->post('nama_orangtua',true),
                'email' => $this->input->post('email', true),
                'no_telepon' => $this->input->post('no_telepon', true),
                'asal_sekolah' => $this->input->post('asal_sekolah', true),
                'jurusan_sekolah' => $this->input->post('jurusan_sekolah', true)
            ];
            $this->db->where('nisn', $this->input->post('nisn'));
            $this->db->update('siswa', $data);
            }

            // configure upload
            function conf_upload( $name ){

                $nisn = $this->session->userdata('nisn');
                $config['allowed_types']= 'pdf|png|';
                $config['upload_path']  = './assets/berkas/foto/';
                $config['max_size']     = 3000; // 3mb
                $config['file_name']    = 'FILE-'.strtoupper($name).'-_'.$nisn.'-'.date('Y-m-d'); // FILE-_-documentlistrik-1231231239.pdf 
    
                return $config;
            }
    
    
            // action upload 
            function actUploadDocument( $section = null ){
    
                $request = $this->input->get('format-name');
                $nisn = $this->session->userdata('nisn');
                
                $this->load->library('upload', $this->conf_upload( $request ));
                $this->upload->initialize( $this->conf_upload( $request ) );
    
                if ( $this->upload->do_upload('userfile') ) {
    
                    // cek data berkas 
                    $getDataBerkas = $this->db->get_where('siswa', array('nisn' => $nisn))->row();
                    $data = array(
    
                        $section => $this->upload->data('file_name')
                    );
                    
                    if ( $getDataBerkas->$section ) {
    
                        $dir = './assets/berkas/foto/'. $getDataBerkas->$section; // delete file directory
                        unlink( $dir );
                    }
    
                    // execute
                    $this->db->where('nisn', $nisn)->update('siswa', $data);
                    $style = '<div class="alert alert-success">
                                <label for=""><b>Pemberitahuan !</b></label><br>
                                <span>Berkas berhasil diunggah pada '.date('d F Y H:i A').'</span>
                            </div>';
                    $this->session->set_flashdata('msg', $style);
                    redirect('BiodataSiswa');
                } else {
    
                    $style = '<div class="alert alert-danger">
                                <label for=""><b>Pemberitahuan !</b></label><br>
                                <span>'.$this->upload->display_errors().' pada '.date('d F Y H:i A').'</span>
                            </div>';
                    $this->session->set_flashdata('msg', $style);
                    redirect('BiodataSiswa');
                }
            }
    }
    
    /* End of file bioSiswa_model.php */
    
?>