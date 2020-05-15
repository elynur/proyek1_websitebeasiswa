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
                    <?php if ( $getPengumuman->num_rows() > 0 ) { ?>
                    
                    <h3 id="demo"></h3>
                    
                    
                    <?php } else { ?>
                    
                    <h3>Belum dibuka !</h3>
                    <?php } ?>

                    <hr>

                    <form action="<?php echo base_url() ?>c_pengumuman/actProcessAnnouncement" method="POST">



                        <div class="row">
                        
                            <div class="col-md-4">
                                <label for="">Pemilihan Waktu</label>
                                <div class="input-append date form_datetime">
                                <?php
                                    $dateInput = "";

                                    if ( $getPengumuman->num_rows() > 0 ){

                                        $dateInput = date('d M Y - H:i', strtotime( $getPengumuman->row()->date ));
                                    }
                                ?>
                                    <input size="16" type="text" class="form-control" name="date" value="<?php echo $dateInput ?>" placeholder="Pilih waktu" readonly>
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


        // Set the date we're counting down to
        <?php
            $date = "";

            if ( $getPengumuman->num_rows() > 0 ){

                $date = date('M d, Y H:i:s', strtotime( $getPengumuman->row()->date ));
            }
        ?>
        var countDownDate = new Date("<?php echo $date ?>").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = "Waktu berjalan : " + days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Waktu sudah terlewat !";
        }
        }, 1000);
    });

</script>