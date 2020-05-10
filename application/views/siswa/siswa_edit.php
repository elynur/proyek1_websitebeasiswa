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
                  <td><input type="text"  class="form-control" id="foto" name="foto" value="<?= $siswa['foto']?>"></td>
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
            <button type="submit" name="submit" class="btn btn-danger">Edit</button>
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