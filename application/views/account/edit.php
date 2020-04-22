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
                                    <form action="?nisn=<?php echo $identitas['nisn'] ?>" method="POST">
                                        <tr>
                                            <td>Nama</td>
                                            <td><input type="text" class="form-control" name="name" value="<?= $identitas['name'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><input type="text" class="form-control" name="email" value="<?= $identitas['email'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td><input type="text" class="form-control" name="username" value="<?= $identitas['username'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" class="form-control" name="password" value="<?= $identitas['password'] ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Level</td>
                                            <td><input type="text" class="form-control" name="level" value="<?= $identitas['level'] ?>"></td>
                                        </tr>
                                </table>
                                <input type="submit" name="submit" value="Edit akun" class="btn btn-primary">
                        </div>
                        </form>
                        </table>
                   
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->