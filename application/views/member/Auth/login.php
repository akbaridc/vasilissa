<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <h3>Login | Member</h3>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                      <?php if(!empty($this->session->flashdata("erorr"))){
                      ?>
                      <button class="btn btn-small btn-danger"><?php echo $this->session->flashdata("erorr"); ?></button>
                      <?php }else{ ?>
                      <h4>Login</h4>
                      <?php } ?>
                    </div>
                    <div class="card-body" style="padding-top:0px !important">
                      <?php echo form_open(base_url().'login_member', array('method' => 'post')); ?>
                        <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>

                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="float-right mb-2">
                                        <a href="<?= base_url('member/auth/lupa_password') ?>" class="text-small">
                                            Lupa Password?
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
                        <!-- </form> -->
                      <?php echo form_close(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
