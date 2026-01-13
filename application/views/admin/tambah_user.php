<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <div class="col-5 m-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <div>
                        <h4 class="mb-3" style="text-align: center;">Tambah User</h4>
                    </div>
                    <form action="<?php echo base_url() ?>admin/tambahUser" method="post">
                        <div class="form-group">
                            <label for="username" class="text-gray-900">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <small class="form-text text-danger">
                                <?php echo form_error('username'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-gray-900">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                            <small class="form-text text-danger">
                                <?php echo form_error('password'); ?>
                            </small>
                        </div>


                        <div class="form-group" hidden>
                            <label for="role_id">role id</label>
                            <input type="text" class="form-control" id="role_id" name="role_id" value="1">
                            <small class="form-text text-danger">
                                <?php echo form_error('role_id'); ?>
                            </small>
                        </div>


                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>

        </div>
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