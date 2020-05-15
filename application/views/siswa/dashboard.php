<div class="container-fluid">


	<!-- /.container-fluid -->

  <?php 
    if ( $status_pengumuman ) {  // true : pengumuman dibuka
      
      echo '<div id="load-view-content"></div>';

    } else { // sik tutup ya

      echo '<div id="load-view-content"></div>';
    }
  ?>
	




</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>


<script>
	$(function () {

    <?php if ( $status_pengumuman ) {  // true : pengumuman dibuka ?>
      
      $('#load-view-content').load("<?php echo base_url('dashboard_siswa/onLoadHasilSeleksi') ?>");

    <?php } else { ?>

      $('#load-view-content').load("<?php echo base_url('dashboard_siswa/onLoadCountDown') ?>");

      // Set the date we're counting down to
      <?php
            $date = "";

            if ( $Announcement->num_rows() > 0 ){

                $date = date('M d, Y H:i:s', strtotime( $Announcement->row()->date ));
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
            
        
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);

            alert("Batas waktu pengumuman telah habis, lihat hasil");
            $('#load-view-content').load("<?php echo base_url('dashboard_siswa/onLoadHasilSeleksi') ?>");
        }
        }, 1000);

    <?php } ?>



		
	});

</script>
