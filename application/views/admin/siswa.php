<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Siswa</div>
          <div class="card-body">
            <div class="table-responsive">
            <!-- <a href="pegawai/formtambah" class="btn btn-primary mb-3">Tambah Data Pegawai</a> -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nama Orangtua</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan Sekolah</th>
                    <th>Politeknik Pilihan</th>
                    <th>Prodi Pilihan</th>
                    <th>Priveledge</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($siswa as $siswa){?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $siswa['nisn']?></td>
                        <td><?= $siswa['nama_siswa']?></td>
                        <td><?= $siswa['alamat_siswa']?></td>
                        <td><?= $siswa['nama_orangtua']?></td>
                        <td><?= $siswa['email']?></td>
                        <td><?= $siswa['no_telepon']?></td>
                        <td><?= $siswa['asal_sekolah']?></td>
                        <td><?= $siswa['jurusan_sekolah']?></td>
                        <td><?= $siswa['nama_politeknik']?></td>
                        <td><?= $siswa['nama_prodi']?></td>
                        <td>
                          <a href="" class="badge badge-success">Konfirm</a>
                        </td>
                      </tr>
                      <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>