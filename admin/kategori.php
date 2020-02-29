
        <!-- Header -->
        <?php
        include('includes/header.php');
        ?>
        <!-- End Header -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Daftar Kategori</h1>
                        <hr>
                        <button class="btn btn-primary">Tambah Kategori</button>
                        <button class="btn btn-danger">Hapus Semua Kategori</button>
                        <br>&nbsp;
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama Kategori</th>
                                                <center><th></th></center>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Hardware</td>
                                                <td><center>
                                                    <button class="btn btn-success">UBAH</button>
                                                    <button class="btn btn-danger">DELETE</button>
                                                </center></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Laptop</td>
                                                <td><center>
                                                    <button class="btn btn-success">UBAH</button>
                                                    <button class="btn btn-danger">DELETE</button>
                                                </center></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Accessories</td>
                                                <td><center>
                                                    <button class="btn btn-success">UBAH</button>
                                                    <button class="btn btn-danger">DELETE</button>
                                                </center></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Network</td>
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
