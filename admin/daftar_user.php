
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!-- End Header -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Daftar User</h1>
                        <hr>
                        <button class="btn btn-primary">Tambah User</button>
                        <button class="btn btn-danger">Hapus Semua User</button>
                        <br>&nbsp;
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>E-Mail</th>
                                                <th>No HP</th>
                                                <th>Username</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Aisyah</td>
                                                <td>Aisyah@gmail.com</td>
                                                <td>0123456789</td>
                                                <td>aisyah123</td>
                                                <td><center>
                                                    <button class="btn btn-success">UBAH</button>
                                                    <button class="btn btn-danger">DELETE</button>
                                                </center></td>
                                            </tr>
                                            <tr>
                                                <td>Ayu</td>
                                                <td>Ayu@gmail.com</td>
                                                <td>0987654321</td>
                                                <td>ayu123</td>
                                                <td><center>
                                                    <button class="btn btn-success">UBAH</button>
                                                    <button class="btn btn-danger">DELETE</button>
                                                </center></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;  AISYAH AYU M</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
