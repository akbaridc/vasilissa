<section id="paket" class="pricing">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Produk Paket</h2>
            <p>Cek Produk Paket</p>
        </header>

        <div class="pricing-slider swiper" data-aos="fade-left" data-aos-delay="200">
            <div class="swiper-wrapper">
                <?php foreach ($produk_paket as $data) { ?>
                    <div class="swiper-slide">
                        <div class="box">
                            <h3><?= $data->nama_pd ?></h3>
                            <div class="price">
                                <?php
                                $di = $data->diskon * $data->harga / 100;
                                ?>
                                <span>Rp. <?= number_format($data->harga, 0, ',', '.') ?></span>
                                Rp. <?= number_format($di, 0, ',', '.') ?>
                            </div>
                            <img src="<?= base_url('assets/vasilissa/admin/produk/' . $data->foto) ?>" class="img-fluid" alt="">
                            <div class="scroll-list">
                                <h5>Deskripsi : </h5>
                                <?= $data->deskripsi ?>
                            </div>
                            <a href="https://wa.me/+6283111693720?text=Hi, saya ingin membeli produk paket ini" target="_BLANK" class="btn-buy">Beli Sekarang</a>
                        </div>
                    </div><!-- End testimonial item -->
                <?php } ?>



            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>