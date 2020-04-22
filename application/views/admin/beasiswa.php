<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Beasiswa</div>
          <div class="card-body">
            <div class="table-responsive">
            <!-- <a href="pegawai/formtambah" class="btn btn-primary mb-3">Tambah Data Pegawai</a> -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Alamat</tH>
                    <th>Asal Sekolah</th>
                    <th>Jurusan Sekolah</th>
                    <th>Politeknik Pilihan</th>
                    <th>Prodi Pilihan</th>
                    <th>Status Kelolosan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($beasiswa as $beasiswa){?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $beasiswa['nisn']?></td>
                        <td><?= $beasiswa['nama_siswa']?></td>
                        <td><?= $beasiswa['alamat_siswa']?></td>
                        <td><?= $beasiswa['asal_sekolah']?></td>
                        <td><?= $beasiswa['jurusan_sekolah']?></td>
                        <td><?= $beasiswa['nama_politeknik']?></td>
                        <td><?= $beasiswa['nama_prodi']?></td>
                        <td><?= $beasiswa['status_kelolosan']?></td>
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