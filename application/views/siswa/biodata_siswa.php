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
                  <td><?=$siswa['nisn'];?></td>
              </tr>
              <tr>
                  <td> Nama : </td>
                  <td><?=$siswa['nama_siswa'];?></td>
              </tr>
              <tr>
                  <td> Alamat : </td>
                  <td><?=$siswa['alamat_siswa'];?></td>
              </tr>
              <tr>
                  <td> Nama Orang Tua : </td>
                  <td><?=$siswa['nama_orangtua'];?></td>
              </tr>
              <tr>
                  <td> Email : </td>
                  <td><?=$siswa['email'];?></td>
              </tr>
              <tr>
                  <td> No Telepon : </td>
                  <td><?=$siswa['no_telepon'];?></td>
              </tr>
              <tr>
                  <td> Asal Sekolah : </td>
                  <td><?=$siswa['asal_sekolah'];?></td>
              </tr>
              <tr>
                  <td> Jurusan Sekolah : </td>
                  <td><?=$siswa['jurusan_sekolah'];?></td>
              </tr>
              <tr>
                  <td>Foto : </td>
                  <td><?=$siswa['foto'];?>
                  	<?php

                      if ( $siswa['foto'] ){

                        echo '<br><small><a target="_blank" href="'.base_url('assets/berkas/foto/'. $siswa['foto']).'">Klik untuk melihat gambar</a><br>';
                      }

                      ?>
                </td>
              </tr>
                </form>
                <?php } ?>
              </table>
            </div>
            <a href="<?php echo base_url('biodata_siswa/edit') ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Sunting data siswa</a>
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