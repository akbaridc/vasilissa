<section class="section">
    <div class="section-header">
        <h1>Setting Akun</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Hi, Akbar Imawan Dwi Cahya</h2>
        <p class="section-lead">
            Ubah informasi tentang diri anda di halaman ini
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="d-flex flex-column align-items-center">
                        <img src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" style="margin: -35px 0 0 0;" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3 mb-3" style="width: 100%;">
                            <div class="container">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>Akbar Imawan Dwi Cahya</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>akbarimawan18@gmail.com</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-user"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                                    <i class="fas fa-key"></i> Password</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent5">
                            <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="Ujang" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Maman" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="ujang@maman.com" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Avatar / Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                            <label class="custom-file-label">Choose File</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                <div class="form-group">
                                    <label>Password baru</label>
                                    <input type="password" class="form-control" value="*****" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" class="form-control" value="*****" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the email
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>