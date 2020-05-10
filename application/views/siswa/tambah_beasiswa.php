<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Biodata Siswa</div>
            <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <?php echo form_open('IsiBeasiswa/tambahBaru'); ?>
                <form method="POST">
                <tr>
                  <td> NISN : </td>
                  <td><input type="text" class="form-control" id="nisn" name="nisn"></td>
              </tr>
              <tr>
                  <td> Nilai Rata UN : </td>
                  <td><input type="text" class="form-control" id="nilai_rata" name="nilai_rata"></td>
              </tr>
              <tr>
                  <td> Politeknik Pilihan : </td>
                  <td> 
                    <select name="politeknik_id" id="politeknik_id" class="form-control">
                      <?php foreach( $getDataPoliteknik AS $rowPoliteknik ) { ?>
                      <option value=""><?php echo $rowPoliteknik['nama_politeknik'];?></option>
                      <?php } ?>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td> Prodi Pilihan : </td>
                  <td> 
                    <select name="prodi_id" id="prodi_id" class="form-control">
                      <?php foreach( $getDataProdi AS $rowProdi ) { ?>
                      <option value=""><?php echo $rowProdi['nama_prodi'] ?></option>
                      <?php } ?>
                    </select>
                  </td>
              </tr>
              </table>
            </div>
            <button type="submit" name="submit" class="btn btn-danger">Tambah Data</button><br><br>
            </form></div>
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