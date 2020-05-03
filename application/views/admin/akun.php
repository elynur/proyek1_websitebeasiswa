<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Akun</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url('akun/tambah/')?>" class="btn btn-primary mb-3">Tambah Admin</a>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <!-- <th>NISN</th> -->
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Privelege</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($akun as $rowAkun){?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $rowAkun['name']?></td>
                        <td><?= $rowAkun['email']?></td>
                        <td><?= $rowAkun['username']?></td>
                        <td><?= $rowAkun['password']?></td>
                        <td><?= $rowAkun['level']?></td>
                        <td>
                        <a href="<?php echo base_url('akun/edit/'.$rowAkun['id_user'])?>" class="badge badge-success">Edit</a>
                        <a href="<?php echo base_url('akun/hapus/'.$rowAkun['id_user'])?>" onclick="return confirm('Are you sure you want to delete this item?');"
                           class="badge badge-danger">Delete</a>
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
        $(document).ready( function () {
          $('#dataTable').DataTable();
      } );
      </script>
      