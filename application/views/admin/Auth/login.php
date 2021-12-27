<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <h3>Login | Admin</h3>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <?php if (!empty($this->session->flashdata("erorr"))) {
                        ?>
                            <button class="btn btn-small btn-danger"><?php echo $this->session->flashdata("erorr"); ?></button>
                        <?php } else { ?>
                            <h4>Login Sebagai</h4>
                        <?php } ?>
                    </div>
                    <?php echo form_open(base_url() . 'login_admin', array('method' => 'post')); ?>
                    <div class="container ml-2 d-flex">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="hak_akses" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Master Admin</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="hak_akses" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Admin</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                <div class="float-right mb-2">
                                    <a href="<?= base_url('login/pihak/lupa-password') ?>" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                            </button>
                        </div>

                        <!-- <div class="mt-1 mb-2 text-muted text-center">
                                Don't have an account? <a href="auth-register.html">Create One</a>
                            </div> -->
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>