<div id="content-wrapper">
            <div class="container-fluid">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Akun</div>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <form action="<?php echo base_url('akun/tambah')?>" method="POST">
                                        <tr>
                                            <td>NISN</td>
                                            <td><input type="text" class="form-control" name="nisn"></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td><input type="text" class="form-control" name="username"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" class="form-control" name="password"></td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" Tam akun" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                   
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->