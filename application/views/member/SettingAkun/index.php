<section class="section">
    <div class="section-header">
        <h1>Setting Akun</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Hi, <?= $akun['nama']; ?></h2>
        <p class="section-lead">
            Silahkan Masukkan Data diri Anda dengan lengkap
        </p>
        <b class="btn btn-primary btn-md">
            <i class="fas fa-info"></i>
            Kode dapat digunakan sebagai kode referral untuk membangun jaringan member Anda
        </b>

        <div class="row mt-sm-4">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                    <div class="d-flex flex-column align-items-center">
                        <?php if ($akun['foto_member'] == '') { ?>
                            <img src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" style="margin: -35px 0 0 0;" alt="Admin" class="rounded-circle" width="160" height="160">
                        <?php } else { ?>
                            <img src="<?= base_url('') ?>assets/member/<?= $akun['foto_member']; ?>" style="margin: -35px 0 0 0;" alt="Admin" class="rounded-circle" width="160" height="160">
                        <?php } ?>
                        <div class="mt-3 mb-3" style="width: 100%;">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Nama </td>
                                            <td>:</td>
                                            <td><b><?= $akun['nama']; ?><b></td>
                                        </tr>
                                        <tr>
                                            <td>Email </td>
                                            <td>:</td>
                                            <td><b><?= $akun['email']; ?></b></td>
                                        </tr>

                                        <tr>
                                            <td>Alamat </td>
                                            <td>:</td>
                                            <td><b><?= $akun['alamat']; ?><b></td>
                                        </tr>
                                        <tr>
                                            <td>Telepon </td>
                                            <td>:</td>
                                            <td><b><?= $akun['no_telp']; ?></b></td>
                                        </tr>

                                        <tr>
                                            <td>Kode </td>
                                            <td>:</td>
                                            <td><b style="background-color:black;color:#fff;padding:4px"><?= $akun['kode_member']; ?><b></td>
                                        </tr>
                                        <tr>
                                            <td>Mendaftar</td>
                                            <td>:</td>
                                            <td><b><?= date('d-F-Y', strtotime($akun['date'])); ?></b></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-7">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4>Ubah Profil Akun</h4>
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
                                <?php echo form_open_multipart(base_url() . 'member/edit_akun', array('method' => 'post')); ?>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Lengkap</label>
                                        <input type="hidden" class="form-control" name="id" value="<?= base64_encode($akun['id_member']); ?>" required>
                                        <input type="text" class="form-control" name="nama" value="<?= $akun['nama']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" value="<?= $akun['email']; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>No.Telepon</label>
                                        <input type="text" class="form-control" name="no_telp" value="<?= $akun['no_telp']; ?>" required>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Foto Profil</label>
                                        <input type="file" name="foto_member" class="form-control" id="avatar">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Alamat Lengkap</label>
                                        <textarea class="form-control" style="height:150px" required name="alamat"><?= $akun['alamat']; ?></textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="btn btn-md btn-success" type="submit">SIMPAN DATA</button>
                                    </div>
                                </div>
                                <?= form_close(); ?>
                            </div>


                            <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                <?php echo form_open(base_url() . 'member/edit_password', array('method' => 'post')); ?>
                                <div class="form-group">
                                    <label>Password baru</label>
                                    <input type="hidden" class="form-control" name="id" value="<?= base64_encode($akun['id_member']); ?>" required>
                                    <input type="password" class="form-control" value="" name="password1" minlength="6" placeholder="*****" required="1">
                                </div>

                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" class="form-control" value="" name="password2" minlength="6" placeholder="*****" required="1">
                                    <br>
                                    <button class="btn btn-md btn-success" type="submit">UBAH PASSWORD</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>