<div id="content-wrapper">
            <div class="container-fluid">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Jurusan </div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="<?php echo base_url('jurusan/tambah')?>" method="POST">
                                        <tr>
                                            <td>Nama Jurusan</td>
                                            <td><input type="text" class="form-control" name="nama_jurusan" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Politeknik</td>
                                            <td>
                                            <select name="nama_politeknik" id="" class="form-control" required>
                                                <?php foreach( $getDataPoliteknik AS $rowPoliteknik ) { ?>
                                                    <option value="<?php echo $rowPoliteknik['id_politeknik'] ?>"><?php echo $rowPoliteknik['nama_politeknik'] ?></option>
                                                <?php } ?>
                                            </select>
                                            </td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                   
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->