<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <div class="col-5 m-auto">
            <div class="card mt-5">
                <div class="card-body">
                    <div>
                        <h4 class="mb-3" style="text-align: center;">Update Profile</h4>
                    </div>
                    <?php if ($this->session->flashdata('flash')): ?>
                        <?php echo $this->session->flashdata('flash'); ?>.
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="mb-3" hidden>
                            <label for="exampleFormControlInput1" class="form-label">role_id</label>
                            <input type="text" name="id" class="form-control" id="exampleFormControlInput1"
                                value="<?php echo $admin['id'] ?>">
                        </div>

                        <div class="mb-3" hidden>
                            <label for="exampleFormControlInput1" class="form-label">role_id</label>
                            <input type="text" name="role_id" class="form-control" id="exampleFormControlInput1"
                                value="<?php echo $admin['role_id'] ?>">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input readonly type="text" name="username" class="form-control"
                                id="exampleFormControlInput1" value="<?php echo $admin['username'] ?>">
                            <?php echo form_error('username', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="exampleFormControlInput1">
                            <?php echo form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>


                        <div class="form-group" hidden>
                            <label for="role_id">role id</label>
                            <input type="text" class="form-control" id="role_id" name="role_id" value="1">
                            <small class="form-text text-danger">
                                <?php echo form_error('role_id'); ?>
                            </small>
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url('admin/dataUser') ?>" class="btn btn-secondary">Batal</a>
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