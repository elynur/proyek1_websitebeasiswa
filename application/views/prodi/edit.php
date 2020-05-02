<div id="content-wrapper">
            <div class="container-fluid">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Prodi</div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="?id_prodi=<?php echo $identitas['id_prodi'] ?>" method="POST">
                                        <tr>
                                            <td>ID Prodi</td>
                                            <td><input type="hidden" class="form-control" name="id_prodi" value="<?= $identitas['id_prodi'] ?>" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Prodi</td>
                                            <td><input type="text" class="form-control" name="nama_prodi" value="<?= $identitas['nama_prodi'] ?>" required></td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" value="Edit Prodi" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                   
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->