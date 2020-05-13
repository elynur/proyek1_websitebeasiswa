<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Upload_Berkas extends CI_Model {
    
        public function getSiswabyId($nisn){
            $query=$this->db->get_where('berkas', array('nisn' => $nisn));
            return $query->row_array();
        }

        public function tambahBerkas(){
            $data1['pic_title'] = $data['pic_title'];
            $data1['pic_desc'] = $data['pic_desc'];
            $data1['pic_file'] = $data['pic_file'];

		    $query = $this->db->insert('berkas', $data1);
        }

        // configure upload
        function conf_upload( $name ){

            $nisn = $this->session->userdata('nisn');
            $config['allowed_types']= 'pdf|png|';
            $config['upload_path']  = './assets/berkas/beasiswa/';
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
                $getDataBerkas = $this->db->get_where('berkas', array('nisn' => $nisn))->row();
                $data = array(

                    $section => $this->upload->data('file_name')
                );
                
                if ( $getDataBerkas->$section ) {

                    $dir = './assets/berkas/beasiswa/'. $getDataBerkas->$section; // delete file directory
                    unlink( $dir );
                }

                // execute
                $this->db->where('nisn', $nisn)->update('berkas', $data);
                $style = '<div class="alert alert-success">
                            <label for=""><b>Pemberitahuan !</b></label><br>
                            <span>Berkas berhasil diunggah pada '.date('d F Y H:i A').'</span>
                        </div>';
                $this->session->set_flashdata('msg', $style);
                redirect('UploadBerkas');
            } else {

                $style = '<div class="alert alert-danger">
                            <label for=""><b>Pemberitahuan !</b></label><br>
                            <span>'.$this->upload->display_errors().' pada '.date('d F Y H:i A').'</span>
                        </div>';
                $this->session->set_flashdata('msg', $style);
                redirect('UploadBerkas');
            }
        }
    
    }
    
    /* End of file Upload_Berkas.php */
    
?>