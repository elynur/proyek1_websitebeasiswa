<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Biodata Siswa</div>
            <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <form action="addBeasiswa" method="POST">
                <?php foreach($siswa as $siswa){ ?>
                <tr>
                  <td> NISN : </td>
                  <td name="nisn"><?=$siswa['nisn'];?></td>
              </tr>
              <tr>
                  <td> Nama : </td>
                  <td name="nama_siswa"><?=$siswa['nama_siswa'];?></td>
              </tr>
              <tr>
                  <td> Asal Sekolah : </td>
                  <td name="asal_sekolah"><?=$siswa['asal_sekolah'];?></td>
              </tr>
              <tr>
                  <td> Jurusan Sekolah : </td>
                  <td><?=$siswa['jurusan_sekolah'];?></td>
              </tr>
              <tr>
                  <td> Nilai Rata UN : </td>
                  <td><?=$siswa['nilai_rata'];?></td>
              </tr>
              <tr>
                  <td> Politeknik Pilihan : </td>
                  <td><?=$siswa['politeknik_id'];?></td>
              </tr>
              <tr>
                  <td> Prodi Pilihan : </td>
                  <td><?= $siswa['politeknik_id']; ?></td>
              </tr>
                </form>
                <?php } ?>
              </table>
            </div>
                <a href="<?php echo base_url('IsiBeasiswa/tambah')?>" class="btn btn-primary">Tambah Data Beasiswa</a>
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