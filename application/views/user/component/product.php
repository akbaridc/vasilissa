<section id="produk" class="values">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Produk</h2>
            <p>Produk kami</p>
        </header>

        <div class="row">
            <?php foreach ($produk_item as $data) { ?>
                <div class="col-lg-3 col-md-3 mt-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card" style="box-shadow: 1px 1px 2px 2px #D6D6D6;">
                        <div class="card-body">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="<?= base_url('produk-detail/' . $data->id_pd) ?>" class="image">
                                        <img class="img-1" src="<?= base_url('assets/vasilissa/admin/produk/' . $data->foto) ?>">
                                    </a>
                                    <!-- <span class="product-hot-label">hot</span> -->
                                    <!-- <span class="product-discount-label">-30%</span> -->
                                    <ul class="product-links">
                                        <!-- <li><a href="#"><i class="bi bi-heart-fill"></i></a></li> -->
                                        <li><a href="#"><i class="bi bi-cart-fill"></i></a></li>
                                    </ul>
                                    <!-- <a href="<?= base_url('assets/img/team/team-1.jpg') ?>" class="product-view portfokio-lightbox"><i class="bi bi-eye-fill" style="font-size: 25px;"></i></a> -->
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="<?= base_url('produk-detail/' . $data->id) ?>"><?= $data->nama_pd ?></a></h3>
                                    <div class="price">Rp. <?= number_format($data->harga, 0, ',', '.') ?>
                                        <!-- <span>Rp.1.200.0000</span>
                                        Rp. 6.900.000 -->
                                    </div>
                                    <div class="inform">
                                        <div class="terjual"><i class="bi bi-bag-check"> 1 terjual</i></div>
                                        <div class="stok"><i class="bi bi-box-seam"> <?= $data->stok ?> Stok</i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="text-center mt-3">
            <a href="<?= base_url('semua-produk') ?>" class="btn btn-icon btn-primary">
                <i class="bi bi-columns-gap"> Semua Produk</i>
            </a>
        </div>

    </div>

</section>