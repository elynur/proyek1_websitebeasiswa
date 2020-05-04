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
                <tr>
                  <td> NISN : </td>
                  <td><?=$nisn['nisn'];?></td>
              </tr>
              <tr>
                  <td> Nama : </td>
                  <td><?=$nisn['nama_siswa'];?></td>
              </tr>
              <tr>
                  <td>Foto : </td>
                  <td><button>upload</button></td>
              </tr>
              <tr>
                  <td> Alamat : </td>
                  <td><?=$nisn['alamat_siswa'];?></td>
              </tr>
              <tr>
                  <td> Nama Orang Tua : </td>
                  <td><?=$nisn['nama_orangtua'];?></td>
              </tr>
              <tr>
                  <td> Email : </td>
                  <td><?=$nisn['email'];?></td>
              </tr>
              <tr>
                  <td> No Telepon : </td>
                  <td><?=$nisn['no_telepon'];?></td>
              </tr>
              <tr>
                  <td> Asal Sekolah : </td>
                  <td><?=$nisn['asal_sekolah'];?></td>
              </tr>
              <tr>
                  <td> Jurusan Sekolah : </td>
                  <td><?=$nisn['jurusan_sekolah'];?></td>
              </tr>
                </form>
              </table>
            </div>
            <a href="" class="btn btn-primary">Tambah Data Diri</a>
            <a href="<?php echo base_url()?>siswa/siswa_edit" class="btn btn-success" >Edit</a>
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