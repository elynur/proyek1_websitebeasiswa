<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Berkas</div>
          <div class="card-body">
            <div class="table-responsive">
            <!-- <a href="pegawai/formtambah" class="btn btn-primary mb-3">Tambah Data Pegawai</a> -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NISN</th>
                    <th>SK Siswa</th>
                    <th>SK Bermaterai</th>
                    <th>SK Sekolah</th>
                    <th>Slip Gaji</th>
                    <th>Slip Lstrik</th>
                    <th>Denah Rumah</th>
                    <th>Foto Rumah</th>
                    <th>Ijazah</th>
                    <th>KK</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($berkas as $berkas){?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $berkas['nisn']?></td>
                        <td><?= $berkas['sk_siswa']?></td>
                        <td><?= $berkas['sk_bermaterai']?></td>
                        <td><?= $berkas['sk_pernyataan_sekolah']?></td>
                        <td><?= $berkas['slip_gaji']?></td>
                        <td><?= $berkas['slip_listrik_rumah']?></td>
                        <td><?= $berkas['denah_rumah']?></td>
                        <td><?= $berkas['foto_rumah']?></td>
                        <td><?= $berkas['ijasah']?></td>
                        <td><?= $berkas['kartu_keluarga']?></td>
                      </tr>
                      <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid
      
       -->