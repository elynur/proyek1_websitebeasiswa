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
                                    <form action="<?php echo base_url('prodi/tambah')?>" method="POST">
                                        <tr>
                                            <td>Nama Prodi</td>
                                            <td><input type="text" class="form-control" name="nama_prodi" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Jurusan</td>
                                            <td>
                                            <select name="nama_jurusan" id="" class="form-control" required>
                                                <?php foreach( $getDataJurusan AS $rowJurusan ) { ?>
                                                    <option value="<?php echo $rowJurusan['id_jurusan'] ?>"><?php echo $rowJurusan['nama_jurusan'] ?></option>
                                                <?php } ?>
                                            </select>
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