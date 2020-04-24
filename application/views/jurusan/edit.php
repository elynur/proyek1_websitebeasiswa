<div id="content-wrapper">
            <div class="container-fluid">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Jurusan</div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="?id_jurusan=<?php echo $identitas['id_jurusan'] ?>" method="POST">
                                        <tr>
                                            <td>ID Jurusan</td>
                                            <td><input type="text" class="form-control" name="id_jur" value="<?= $identitas['id_jurusan'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Jurusan</td>
                                            <td><input type="text" class="form-control" name="nama_jur" value="<?= $identitas['nama_jurusan'] ?>"></td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" value="Edit Jurusan" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                   
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->