<section id="tentang" class="about">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>Tentang</h3>
            <p><?= $data['nama_website'] ?></p>
        </header>

        <div class="row gx-0">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <?= $data['deskripsi'] ?>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url('assets/vasilissa/website/' . $data['foto_perusahaan']) ?>" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section>