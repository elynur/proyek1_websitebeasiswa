<div class="container-fluid">
	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Berkas Siswa</div>
		<div class="card-body">
      
      <?php echo $this->session->flashdata('msg') ?>

      <table class="table table-stripe" width="100%">
        
        <!-- Item SK-SIswa -->
        <tr style="background-color: #<?php echo ( $berkas['sk_siswa'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas SK Siswa</h5>
            <p>Lorep isum dolar sit amlet <br> 
              <?php if ( $berkas['sk_siswa'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['sk_siswa']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-a" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/sk_siswa?format-name=sk-siswa') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['sk_siswa'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['sk_siswa']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->


        <!-- Item SK-Bermaterai-->
        <tr style="background-color: #<?php echo ( $berkas['sk_bermaterai'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas SK Materai</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['sk_bermaterai'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['sk_bermaterai']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-sk_bermaterai" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-sk_bermaterai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/sk_bermaterai?format-name=sk-bermaterai') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['sk_bermaterai'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['sk_bermaterai']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->


        <!-- Item SK-pernyataan sekolah-->
        <tr style="background-color: #<?php echo ( $berkas['sk_pernyataan_sekolah'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas SK Pernyataan Sekolah</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['sk_pernyataan_sekolah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['sk_pernyataan_sekolah']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-sk_pernyataan_sekolah" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-sk_pernyataan_sekolah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/sk_pernyataan_sekolah?format-name=sk-pernyataan-sekolah') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['sk_pernyataan_sekolah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['sk_pernyataan_sekolah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->



        <!-- Item Slip-gaji-->
                <tr style="background-color: #<?php echo ( $berkas['slip_gaji'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas Slip Gaji</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['slip_gaji'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['slip_gaji']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-slip_gaji" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-slip_gaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/slip_gaji?format-name=slip-gaji') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['sk_pernyataan_sekolah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['sk_pernyataan_sekolah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->


        <!-- Item Slip-gaji-->
          <tr style="background-color: #<?php echo ( $berkas['slip_listrik_rumah'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas slip_listrik_rumah</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['slip_listrik_rumah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['slip_listrik_rumah']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-slip_listrik_rumah" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-slip_listrik_rumah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/slip_listrik_rumah?format-name=slip-listrik-rumah') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['slip_listrik_rumah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['slip_listrik_rumah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->

    
    
        <!-- Item Denah-rumah-->
                <tr style="background-color: #<?php echo ( $berkas['denah_rumah'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas Denah Rumah</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['denah_rumah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['denah_rumah']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-denah_rumah" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-denah_rumah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/denah_rumah?format-name=denah-rumah') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['denah_rumah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['denah_rumah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->

      
        <!-- Item foto_rumah-->
        <tr style="background-color: #<?php echo ( $berkas['foto_rumah'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas Foto Rumah</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['denah_rumah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['foto_rumah']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-foto_rumah" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-foto_rumah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/foto_rumah?format-name=foto-rumah') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['denah_rumah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['foto_rumah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->


        <!-- Item ijasah-->
        <tr style="background-color: #<?php echo ( $berkas['ijasah'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas Ijazah</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['denah_rumah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['ijasah']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-ijasah" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-ijasah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/ijasah?format-name=ijasah') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['denah_rumah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['ijasah']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->



    <!-- Item KK-->
      <tr style="background-color: #<?php echo ( $berkas['kartu_keluarga'] ) ? 'e1f5fe' : 'fffde7' ?>">
          <td style="width: 10%; border-right: 1px solid #e0e0e0">
            <span style="font-size: 48px"><i class="ti ti-zip"></i></span>
          </td>
          <td style="border-right: 1px solid #e0e0e0">
            
            <h5 style="margin: 0px;">Berkas Kartu Keluarga</h5>
            <p>Masukan berkas dalam bentuk FIle PDF <br> 
              <?php if ( $berkas['denah_rumah'] ) { ?>
              <span class="badge badge-success">Berkas telah di unggah</span> &emsp;
              <a target="_blank" href="<?php echo base_url('assets/berkas/beasiswa/'. $berkas['kartu_keluarga']) ?>">Lihat berkas siswa</a>
              
              <?php } else { ?>
              <span class="badge badge-secondary">Belum mengunggah berkas</span>
              <?php } ?>
            </p>
            
          </td>
          <td style="width: 30%;" align="center">
            <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-kartu_keluarga" class="btn btn-block btn-sm btn-info" style="margin-top: 12px">
              Upload Berkas Disini
            </a>
            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-kartu_keluarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('uploadBerkas/actProcessUpload/kartu_keluarga?format-name=KK') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .pdf | maksimal upload 3 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan berkas</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['denah_rumah'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/beasiswa/'. $berkas['kartu_keluarga']).'">Lihat berkas</a>';
                          } else {

                            echo "Masukan berkas pada input file diatas";
                          }
                        
                        ?>
                      </small>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan perubahan</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <small>Klik tombol untuk mengunggah berkas</small>
          </td>
        </tr>
        <!-- End Item -->


      </table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright © 2020</span>
		</div>
	</div>
</footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
