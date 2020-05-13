<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Biodata Siswa</div>
            <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <?php echo form_open('BiodataSiswa/editBio'); ?>
             <form method="POST">
             <?php foreach($siswa as $siswa){ ?>
                <tr>
                  <td> NISN : </td>
                  <td><input type="text" class="form-control" id="nisn" name="nisn" value="<?= $siswa['nisn']?>"></td>
              </tr>
              <tr>
                  <td> Nama : </td>
                  <td><input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $siswa['nama_siswa']?>"></td>
              </tr>
              <tr>
              <td>Foto : </td>
                  <td style="width: 20%;" align="center">
                  <a href="javascript:;" data-toggle="modal" data-target="#unggahberkas-foto" class="btn btn-block btn-sm btn-info" style="margin-top: 12px" value="<?= $siswa['foto']?>">
                      Upload Foto
                  </a>

            <!-- Modal -->
            <div class="modal fade" id="unggahberkas-foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Unggah Berkas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?php echo base_url('biodataSiswa/actProcessUpload/foto?format-name=foto-siswa') ?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body text-left">

                   <code style="font-weight: bold">Masukan format ekstensi file .jpg | maksimal upload 4 mb</code><hr>
                    <div class="form-group">
                      <label for="" class="text-semibold">Masukan foto</label><br>
                      <input type="file" name="userfile" /> <br>
                      <small>
                        
                        <?php

                          if ( $berkas['foto'] ){

                            echo '<a target="_blank" href="'.base_url('assets/berkas/foto/'. $berkas['foto']).'">Lihat foto</a>';
                          } else {

                            echo "Masukan foto pada input file diatas";
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
          </td>
        </tr>
              </tr>
              <tr>
                  <td> Alamat : </td>
                  <td><input type="text" class="form-control"  name="alamat_siswa" id="alamat_siswa" value="<?= $siswa['alamat_siswa']?>"></td>
              </tr>
              <tr>
                  <td> Nama Orang Tua : </td>
                  <td><input type="text" class="form-control" name="nama_orangtua" id="nama_orangtua" value="<?= $siswa['nama_orangtua']?>"></td>
              </tr>
              <tr>
                  <td> Email : </td>
                  <td><input type="text" class="form-control" name="email" id="email" value="<?= $siswa['email']?>"></td>
              </tr>
              <tr>
                  <td> No Telepon : </td>
                  <td><input type="text" class="form-control" name="no_telepon" id="no_telepon" value="<?= $siswa['no_telepon']?>"></td>
              </tr>
              <tr>
                  <td> Asal Sekolah : </td>
                  <td><input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="<?= $siswa['asal_sekolah']?>"></td>
              </tr>
              <tr>
                  <td> Jurusan Sekolah : </td>
                  <td><input type="text" class="form-control" name="jurusan_sekolah" id="jurusan_sekolah" value="<?= $siswa['jurusan_sekolah']?>"></td>
              </tr>
              </table>
            </div>
            <button type="submit" name="submit"class="btn btn-warning">Edit Data</button>
            <?php } ?>
            </form>
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
  </a>