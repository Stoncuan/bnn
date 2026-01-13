<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $admin_session['username'] ?></span>
                        <img class="img-profile rounded-circle"
                            src="<?php echo base_url('') ?>assets/admin/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('admin/editProfilUser') ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Update Profile
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data P4GN</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table P4GN</h6>
                </div>
                <div class="card-body">
                    <?php if ($this->session->flashdata('flash')): ?>
                        <?php echo $this->session->flashdata('flash'); ?>.
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Pemohon</th>
                                    <th>Instansi</th>
                                    <th>Alamat</th>
                                    <th>No</th>
                                    <th>Tanggal Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama Pemohon</th>
                                    <th>Instansi</th>
                                    <th>Alamat</th>
                                    <th>No</th>
                                    <th>Tanggal Waktu</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($p4gn as $p): ?>
                                    <tr>
                                        <td><?php echo $p['nama_pemohon'] ?></td>
                                        <td><?php echo $p['instansi'] ?></td>
                                        <td><?php echo $p['alamat'] ?></td>
                                        <td><?php echo $p['no'] ?></td>
                                        <td><?php echo $p['tanggal_waktu'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>Home/hapusP4gn/<?php echo $p['id'] ?>"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                            <a target="_blank" class="btn btn-success btn-sm"
                                                href="<?php echo base_url() ?>assets/file_/<?php echo $p['surat'] ?>">Lihat
                                                File</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->