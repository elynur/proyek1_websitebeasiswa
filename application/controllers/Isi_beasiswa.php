<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Isi_beasiswa extends CI_Controller {
        
        function __construct(){

            parent::__construct();
            $this->load->model('M_politeknik');
            $this->load->model('M_prodi');
            $this->load->model('M_jurusan');
            $this->load->model('Isibeasiswa_model');
            $this->load->library('form_validation');
            $this->load->library('session');
        }

        public function index()
        {
            $data['title'] = "Isi Beasiswa Siswa";
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            $data['getDataJurusan'] = $this->M_jurusan->getDataJurusan();
            $data['getDataProdi'] = $this->M_prodi->getDataProdi();
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->Isibeasiswa_model->getSiswabyId($nisn);

            $data['cekBeasiswa'] = $this->Isibeasiswa_model->cekBeasiswa( $nisn ); 
            
           
            $this->load->view('template/header2');
            $this->load->view('siswa/isi_beasiswa', $data);
            $this->load->view('template/footer2');
        }


       


        public function tambah(){
            $data['title']='Tambah Data Beasiswa';
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            $data['getDataProdi'] = $this->M_prodi->getDataProdi();
            $data['getDataJurusan'] = $this->M_jurusan->getDataJurusan();
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->Isibeasiswa_model->getSiswabyId($nisn);
            
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/tambah_beasiswa',$data);
            $this->load->view('template/footer2');
        }

         public function tambahBaru(){
            $this->Isibeasiswa_model->tambahData();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('isi_beasiswa','refresh');  
         }


         function getJurusan() {

            $getPoliteknik = $this->input->get('id_politeknik');

            $kondisi = array('id_politeknik' => $getPoliteknik);
            $getDataJurusan = $this->Isibeasiswa_model->getDataInstitusi('jurusan', $kondisi);
            // select * from jurusan where id_politeknik = $getPoliteknik

            $data = "";

            if ( $getDataJurusan->num_rows() > 0 ) {                
                $elementOption = "<option>-- Pilih Jurusan --</option>";
                
                // kondisi selectjurusan terpenuhi :: mengindentifikasikan akan melakukan update
                if ( $this->input->get('selectjurusan') ) { 
                    
                    // data
                    foreach ( $getDataJurusan->result_array() AS $row ) {                        
                        // id_jurusan == selectjurusan
                        $elementOption .= '<option value="'.$row['id_jurusan'].'" '.( ($row['id_jurusan'] == $this->input->get('selectjurusan')) ? 'selected' : '' ).'>'.$row['nama_jurusan'].'</option>';
                    }

                } else { // kondisi jika melakukan tambah / selectjurusan = kosong
                    foreach ( $getDataJurusan->result_array() AS $row ) {
                        $elementOption .= '<option value="'.$row['id_jurusan'].'">'.$row['nama_jurusan'].'</option>';
                    }
                }

                $data = '<select name="jurusan_id" id="jurusan_id" class="form-control">'. $elementOption.'</select>';
            }

            echo json_encode( array('value' => $data) );
        }

        function getProdi() {

            $getJurusan = $this->input->get('id_jurusan');

            $kondisi = array('id_jurusan' => $getJurusan);
            $getDataProdi = $this->Isibeasiswa_model->getDataInstitusi('prodi', $kondisi);
            // select * from jurusan where id_politeknik = $getPoliteknik

            $data = "";

            if ( $getDataProdi->num_rows() > 0 ) { // pengecekan jika terdapat prodi
        
                $elementOption = "<option>-- Pilih Prodi --</option>";

                // kondisi selectjurusan terpenuhi :: mengindentifikasikan akan melakukan update
                if ( $this->input->get('selectProdi') ) { 
                    
                    // data
                    foreach ( $getDataProdi->result_array() AS $row ) {                        
                        // id_jurusan == selectjurusan
                        $elementOption .= '<option value="'.$row['id_prodi'].'" '.( ($row['id_prodi'] == $this->input->get('selectProdi')) ? 'selected' : '' ).'>'.$row['nama_prodi'].'</option>';
                    }

                } else { // kondisi jika melakukan tambah / selectprodi = kosong
                    foreach ( $getDataProdi->result_array() AS $row ) {
                        $elementOption .= '<option value="'.$row['id_prodi'].'">'.$row['nama_prodi'].'</option>';
                    }
                } 
            } else {
                $elementOption = '<option value="">Prodi tidak tersedia</option>';
            }
            $data = '<select name="prodi_id" id="prodi_id" class="form-control">'. $elementOption.'</select>';

            echo json_encode( array('value' => $data) );
        }

                // view
        public function edit(){
            $data['title']='Edit Data';
            
            $nisn = $this->session->userdata('nisn'); 
            $data['siswa']=$this->Isibeasiswa_model->getSiswabyId($nisn);
            $data['getDataPoliteknik'] = $this->M_politeknik->getDataPoliteknik();
            
            $this->load->view('template/header2',$data);
            $this->load->view('siswa/beasiswa_edit',$data);
            $this->load->view('template/footer2');
    
        }

        // action - update
        public function editBeasiswa(){
            $this->Isibeasiswa_model->edit();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('isi_beasiswa','refresh');  
        }
    
    }
    
    /* End of file isi_beasiswa.php */
    
?>