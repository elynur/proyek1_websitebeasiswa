<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<div id="content-wrapper">
      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-users"></i>
            Data Jurusan</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url('jurusan/tambah/')?>" class="btn btn-primary mb-3">Tambah Jurusan</a>
              <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Nama Politeknik</th>
                    <th>Previledge</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                    foreach($data as $rowData){?>
                      <tr>
                        <td><?= $rowData['id_jurusan']?></td>
                        <td><?= $rowData['nama_jurusan']?></td>
                        <td><?= $rowData['nama_politeknik']?></td>
                        <td>
                          <a href="<?php echo base_url('jurusan/edit/'.$rowData['id_jurusan'])?>" class="badge badge-success">Edit</a>
                          <a href="<?php echo base_url('jurusan/hapus/'. $rowData['id_jurusan']) ?>" onclick="return confirm('Are you sure you want to delete this item?');"
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
          $('#datatable').DataTable();
      } );
      </script>