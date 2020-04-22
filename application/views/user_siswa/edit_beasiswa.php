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
                  <td> <input type="text" name="nisn"></td>
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
                  <td> <input type="text" name="poltek"></td>
              </tr>
              <tr>
                  <td> Prodi Pilihan : </td>
                  <td> <input type="text" name="prodi"></td>
              </tr>
              </table>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button></div> 
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>