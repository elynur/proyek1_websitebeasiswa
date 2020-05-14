
 <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url() ?>assets/css/sb-admin.css" rel="stylesheet">


<div style="background-color: #dcedc8; border: 1px solid #1b5e20 ; padding: 20px; border-radius: 5px">
    <div class="">

        <div class="row">
            <div class="col-md-2">
                <img src="<?php echo base_url('assets/img/logo-bukit_asam.png') ?>" alt="Logo" style="width: 100px">
            </div>
            <div class="col-md-10" style="margin-top: 15px">
                <h4>Hasil Pengumuman Beasiswa <strong style="color: #0d47a1">BIDIKSIBA</strong></h4>
                <p>Berikut adalah hasil pengumuman atas nama :</p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <hr style="border-bottom: 1px solid #e0e0e0">
                <table class="" border="0" width="100%">
                    <tr>
                        <td width="38%">NISN</td>
                        <td>: <?php echo $getSiswa['nisn'] ?></td>
                    </tr>
                    <tr>
                        <td width="38%">Nama Siswa</td>
                        <td>: <?php echo $getSiswa['nama_siswa'] ?></td>
                    </tr>
                    <tr>
                        <td width="38%">Asal Sekolah </td>
                        <td>: <?php echo $getSiswa['asal_sekolah'] ?></td>
                    </tr>
                    <tr>
                        <td width="38%">Pilihan Politeknik</td>
                        <td>: <?php echo $getSiswa['nama_politeknik'] ?></td>
                    </tr>
                    <tr>
                        <td width="38%">Jurusan</td>
                        <td>: <?php echo $getSiswa['nama_jurusan'] ?></td>
                    </tr>
                    <tr>
                        <td width="38%">Prodi</td>
                        <td>: <?php echo $getSiswa['nama_prodi'] ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h5 style="color: #212121 ; margin-top:20px;">Selamat!! Anda dinyatakan <strong>LOLOS
                        SELEKSI</strong> <br> Beasiswa BIDIKSIBA 2020</h5>
                <p style="font-size: 12px">Dicetak pada <?php echo date('l M d, Y - H:i A') ?>
                </p>
            </div>
        </div>

    </div>
</div>



<script>

    window.print();

</script>