<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div id="content-wrapper">
	<div class="container-fluid">
		<!-- DataTables Example -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-users"></i>
				Data Pengajuan Bidiksiba</div>
			<div class="card-body">
				<div class="table-responsive">
					<!-- <a href="pegawai/formtambah" class="btn btn-primary mb-3">Tambah Data Pegawai</a> -->
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>NO.</th>
								<th>NISN & Berkas</th>
								<th>Informasi Siswa</th>
								<th>Pendidikan</th>
								<th>Status Kelolosan</th>
							</tr>
						</thead>
						<tbody>
					<?php
						$i = 1;
						foreach($getDataSiswa->result_array() as $row){
						
						
						// presentase 
						$sk_siswa = ($row['sk_siswa']) ? 1 : 0;  
						$sk_bermaterai = ($row['sk_bermaterai']) ? 1 : 0;
						$sk_pernyataan = ($row['sk_pernyataan_sekolah']) ? 1 : 0;
						$sk_gaji = ($row['slip_gaji']) ? 1 : 0;
						$sk_listrik = ($row['slip_listrik_rumah']) ? 1 : 0;
						$sk_denah = ($row['denah_rumah']) ? 1 : 0;
						$sk_foto = ($row['foto_rumah']) ? 1 : 0;
						$sk_ijazah = ($row['ijasah']) ? 1 : 0;
						$sk_kk = ($row['kartu_keluarga']) ? 1 : 0;


						$total = $sk_siswa + $sk_bermaterai + $sk_pernyataan + $sk_gaji + $sk_listrik + $sk_denah + $sk_foto + $sk_ijazah + $sk_kk;
						
						$percent = ($total * 100) / 9;
                      
                    ?>
                    <?php 

                      $styleProgress = "bg-danger";
                      if ( $percent == 100 ) {
                        $styleProgress = "";
                      } else if ( $percent > 80 ) {

                        $styleProgress = "bg-success";
                      
                      } else if ( $percent > 60 ) {

                        $styleProgress = "bg-info";
                      

                      } else if ( $percent > 40 ) {

                        $styleProgress = "bg-warning";
                      }
                      
                    ?>

							<tr>
								<td><?= $i++; ?></td>
								<td>
									<?= 'NISN : '.$row['nisn']?> <br>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated <?php echo $styleProgress ?>" role="progressbar" style="width: <?php echo intval($percent) ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo intval( $percent ).'%' ?></div>
                  </div>
								</td>
								<td>
									<b><?php echo $row['nama_siswa'] ?></b> <br>
									<small><a href="">Lihat Detail Siswa</a></small>
								</td>
								<td>
									<?php echo $row['asal_sekolah'] ?> <br>
									- Jurusan <?php echo $row['jurusan_sekolah'] ?>
								</td>
								<td align="center">

                  <?php if ( $row['status_beasiswa'] == 0 ) { ?>
									<?php if ( $percent != 100 ) { ?>
									<a href="javascript:;" data-toggle="modal" data-target="#confirm-<?php echo $row['nisn'] ?>"
										class="btn btn-info btn-sm">Konfirmasi Beasiswa</a> <br>
									<small>Berkas belum memenuhi</small>
									<?php } else { ?>

									<a href="javascript:;" data-toggle="modal" data-target="#confirm-<?php echo $row['nisn'] ?>"
										class="btn btn-success btn-sm">Konfirmasi Beasiswa</a> <br>
									<small>Berkas sudah dilengkapi</small>

									<?php } } else { ?>
                  
                  <a href="javascript:;" data-toggle="modal" data-target="#confirm-<?php echo $row['nisn'] ?>"
										class="btn btn-danger btn-sm">Batalkan Konfirmasi</a> <br>
									<small>Berkas sudah dilengkapi</small>

                  <?php } ?>



									<!-- Modal -->
									<div class="modal fade" id="confirm-<?php echo $row['nisn'] ?>" tabindex="-1" role="dialog"
										aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pengajuan</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<h4>Perhatian !</h4>
                          <p style="font-size: 13px">
                            Dengan hal ini siswa menerima status konfirmasi ini sehingga siswa dapat melanjutkan ketahap seleksi berikutnya
                            Apakah anda ingin mengkonfirmasi bahwa siswa atas nama <b><?php echo $row['nama_siswa'] ?></b> telah disetujui ?
                          </p>

                          <hr>

                          <div class="text-left">
                            <b>Informasi Siswa</b>
                            <table width="100%">
                              <tr>
                                <td>NISN :</td>
                                <td><?php echo $row['nisn'] ?></td>
                              </tr>
                              <tr>
                                <td>Nama Lengkap :</td>
                                <td><?php echo $row['nama_siswa'] ?></td>
                              </tr>
                              <tr>
                                <td>Asal Sekolah :</td>
                                <td><?php echo $row['asal_sekolah'] ?></td>
                              </tr>
                            </table>
                          </div>

												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <?php
                            $styleBtn = "btn btn-primary";
                            $textBtn  = "Simpan dan Konfirmasi";

                            if ( $row['status_beasiswa'] == 1 ) {

                              $styleBtn = "btn btn-warning";
                              $textBtn  = "Konfirmasi Pembatalan";
                            }
                          
                          ?>
													<a href="<?php echo base_url('berkas/actionConfirmBeasiswa/'. (($row['status_beasiswa'] == 0) ? 1 : 0).'/'. $row['nisn']) ?>" onclick="return confirm('Klik untuk melanjutkan')" class="<?php echo $styleBtn ?>"><?php echo $textBtn ?></a>
												</div>
											</div>
										</div>
									</div>
								</td>

							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>


	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#dataTable').DataTable();
		});

	</script>
