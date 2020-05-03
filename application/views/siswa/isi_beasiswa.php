<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Pendaftaran Beasiswa</div>
          <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <form action="addBeasiswa" method="POST">
                <tr>
                  <td> NISN : </td>
                  <td> <input type="text" name="nisn" class="form-control"></td>
              </tr>
              <tr>
                  <td> Nama : </td>
                  <td> <input type="text" name="nama"></td>
              </tr>
              <tr>
                  <td> Asal Sekolah : </td>
                  <td> <input type="text" name="asal_sekolah"></td>
              </tr>
              <tr>
                  <td> Nilai Rata Rata UN: </td>
                  <td> <input type="text" name="rata_un"></td>
              </tr>
              <tr>
                  <td> Jurusan Sekolah : </td>
                  <td> <input type="text" name="jrsn_sekolah"></td>
              </tr>
              <tr>
                  <td> Politeknik Pilihan : </td>
                  <td> 
                    <select name="" id="" class="form-control">
                      <?php foreach( $getDataPoliteknik AS $rowPoliteknik ) { ?>
                      <option value=""><?php echo $rowPoliteknik['nama_politeknik'] ?></option>
                      <?php } ?>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td> Prodi Pilihan : </td>
                  <td>
                  <select name="" id="" class="form-control">
                      <?php foreach( $getDataProdi AS $rowProdi ) { ?>
                      <option value=""><?php echo $rowProdi['nama_prodi'] ?></option>
                      <?php } ?>
                    </select>
                  </td>
              </tr>
              </table>
              <button type="submit" name="submit" class="btn btn-primary">Tambah Buku</button></div> 
          </form>
              </table>
            </div>
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
