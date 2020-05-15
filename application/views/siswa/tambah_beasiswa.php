<div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Biodata Siswa</div>
            <div class="card-body">
            <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             <?php echo form_open('isi_beasiswa/tambahBaru'); ?>
                <form method="POST">
                <tr>
                  <td> NISN : </td>
                  <td><input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $this->session->userdata('nisn') ?>" readonly></td>
              </tr>
              <tr>
                  <td> Nilai Rata UN : </td>
                  <td><input type="text" class="form-control" id="nilai_rata" name="nilai_rata"></td>
              </tr>
              <tr>
                  <td> Politeknik Pilihan : </td>
                  <td> 
                    <select name="politeknik_id" id="politeknik_id" class="form-control">
                      <option value="">-- Pilih Politeknik --</option>
                      <?php foreach( $getDataPoliteknik AS $rowPoliteknik ) { ?>
                      <option value="<?php echo $rowPoliteknik['id_politeknik'];?>"><?php echo $rowPoliteknik['nama_politeknik'];?></option>
                      <?php } ?>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td> Jurusan Pilihan : </td>
                  <td> 
                    <select name="jurusan_id" id="jurusan_id" class="form-control">
                        <option>-- Pilih Jurusan --</option>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td> Prodi Pilihan : </td>
                  <td> 
                    <select name="prodi_id" id="prodi_id" class="form-control">
                    <option>-- Pilih Prodi --</option>
                    </select>
                  </td>
              </tr>
              </table>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button><br><br>
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


  <script>

    $(function(){

      // event - politeknik 
      $('select[name="politeknik_id"]').change(function(){

        
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url() ?>isi_beasiswa/getJurusan?id_politeknik=" + this.value,
            dataType : "json",
            success: function( data ){

              $('#jurusan_id').html( data.value );
            }
        });

      });


      // event - jurusan
      $('select[name="jurusan_id"]').change(function(){

  
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url() ?>isi_beasiswa/getProdi?id_jurusan=" + this.value,
            dataType : "json",
            success: function( data ){

              $('#prodi_id').html( data.value );
            }
        });

    });


    })
  
  
  </script>