<!-- ======= Hero Section ======= -->
<?php $this->load->view('user/component/hero') ?>
<!-- End Hero Section -->

<div id="main">
    <!-- ======= About Section ======= -->
    <?php $this->load->view('user/component/about') ?>
    <!-- End About Section -->

    <!-- ======= Product Section ======= -->
    <?php $this->load->view('user/component/product') ?>
    <!-- End Values Section -->


    <!-- ======= Pricing Section ======= -->
    <?php $this->load->view('user/component/product_paket') ?>
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <?php $this->load->view('user/component/faq') ?>
    <!-- End F.A.Q Section -->


    <!-- ======= Testimonials Section ======= -->
    <?php $this->load->view('user/component/testimonials') ?>
    <!-- End Testimonials Section -->
</div>


<!-- Modal -->
<div class="modal fade" id="regis-member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrasi Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="nama anda" name="name">
                </div>

                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="email anda" name="email">
                </div>

                <label for="basic-url" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password anda">
                    <span class="input-group-text"><i class="bi bi-eye"></i></span>
                </div>

                <div class="form-group mb-3">
                    <label>No. Telepon</label>
                    <input type="number" class="form-control" placeholder="telp anda" name="telp">
                </div>

                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="alamat anda" name="alamat">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" id="regis-submit" class="btn btn-primary">Daftar</button>
            </div>
        </div>
    </div>
</div>