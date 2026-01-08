<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg- d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome admin</h1>
                                </div>
                                <div class="mt-2">
                                    <?php echo $this->session->flashdata('massage') ?>
                                </div>
                                <form class="user" action="<?php base_url('auth/index') ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email"
                                            name="username" placeholder="Enter username...">
                                        <?php echo form_error('username', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="Password"
                                            name="password" placeholder="Password">
                                        <?php echo form_error('password', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <button href="index.html" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>