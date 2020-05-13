<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css') ?>">

<div id="content-wrapper">
	<div class="container-fluid">
		<!-- DataTables Example -->
		<div class="card mb-3">
			<div class="card-header">
				<i class="fas fa-users"></i>
				Data Waktu Pengumuman</div>
                <div class="card-body">

                    <h5>Waktu Pengumuman yang akan dibuka</h5>
                    <h3>Belum dibuka !</h3>
                    <hr>

                    <form action="<?php echo base_url() ?>C_pengumuman" method="POST">



                        <div class="row">
                        
                            <div class="col-md-4">
                                <label for="">Pemilihan Waktu</label>
                                <div class="input-append date form_datetime">
                                    <input size="16" type="text" class="form-control" name="date" placeholder="Pilih waktu" readonly>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                    <small>Pilih tanggal pengumuman</small>
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: 6px">
                                <br>
                                <button class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        
                        </div>
                    </form>

                </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js') ?>"></script>

<script>

    $(function(){

        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii"
        });
    });

</script>