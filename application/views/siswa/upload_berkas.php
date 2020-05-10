<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Biodata Siswa</div>
            <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <!-- <?php echo form_open('Uploadberkas/upload'); ?> -->
                <form method="POST">
                <?php foreach($berkas as $bk){ ?>
                <tr>
                  <td> No </td>
                  <td>1</td>
                  <td></td>
              </tr>
              <tr>
                  <td> NISN</td>
                  <td><?=$bk['nisn'];?></td>
                  <td></td>
              </tr>
              <tr>
                  <td> Ijazah </td>
                  <td><?=$bk['ijasah'];?></td>
                  <td><a type="submit" class="btn btn-success" href=<?php echo base_url('UploadBerkas/upload')?>>Upload</a></td>
              </tr>
              <tr>
                  <td> Kartu Keluarga </td>
                  <td><?=$bk['kartu_keluarga'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> SK Siswa : </td>
                  <td><?=$bk['sk_siswa'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> SK Bermaterai </td>
                  <td><?=$bk['sk_bermaterai'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> SK Pernyataan Sekolah </td>
                  <td><?=$bk['sk_pernyataan_sekolah'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> Slip Gaji </td>
                  <td><?=$bk['slip_gaji'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> Slip Tagihan Listrik </td>
                  <td><?=$bk['slip_listrik_rumah'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td>Denah RUmah </td>
                  <td><?=$bk['denah_rumah'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              <tr>
                  <td> Foto Rumah </td>
                  <td><?=$bk['foto_rumah'];?></td>
                  <td><button type="submit" class="btn btn-success">Upload</button></td>
              </tr>
              </table>
            </div>
                <?php }?>
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