 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
     <div class="container">
         <ol>
             <li><a href="<?= base_url('/') ?>">Home</a></li>
             <li>Produk Detail</li>
         </ol>
         <h2><?= $produk->nama_pd ?></h2>

     </div>
 </section><!-- End Breadcrumbs -->

 <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details">
     <div class="container">

         <div class="portfolio-info row">
             <div class="col-lg-5">
                 <div class="portfolio-details-slider swiper">
                     <div class="swiper-wrapper align-items-center">
                         <?php foreach ($foto_produk as $data) { ?>
                             <div class="swiper-slide">
                                 <img src="<?= base_url('assets/vasilissa/admin/produk/' . $data->foto) ?>" alt="">
                             </div>
                         <?php } ?>

                     </div>
                     <div class="swiper-pagination"></div>
                 </div>
             </div>

             <div class="col-lg-7">
                 <div class="portfolio-info">
                     <h3><?= $produk->nama_pd ?></h3>
                     <?php
                        $di = $produk->diskon * $produk->harga / 100;
                        ?>
                     <div class="d-flex">
                         <p class="text-danger" style="text-decoration: line-through;font-size:25px;font-weight:400">Rp. <?= number_format($data->harga, 0, ',', '.') ?></p>
                         <p class="text-gray" style="font-size:25px;font-weight:400;margin-left:10px">Rp. <?= number_format($di, 0, ',', '.') ?></p>
                     </div>

                     <div class="d-flex">
                         <input type="number" value="1" step="1" name="qty" id="qty" min="0">
                         <div style="margin-left: 20px;margin-top:7px"><?= $produk->stok ?> Tersisa</div>
                     </div>

                     <div class="text-center mt-5">
                         <a href="https://wa.me/+6283111693720?text=Hi, saya ingin membeli produk ini" target="_BLANK" type="button" class="btn btn-icon btn-warning text-white"><i class="bi bi-bag"></i> Beli Sekarang</a>
                         <button type="button" class="btn btn-icon btn-primary"><i class="bi bi-cart3"></i> Masukan Keranjang</button>
                     </div>
                 </div>
             </div>
         </div>

         <div class="portfolio-info col-lg-12 mt-3 row">
             <h3>Deskripsi Produk</h3>
             <p>
                 <?= $produk->deskripsi ?>
             </p>
         </div>
     </div>
 </section><!-- End Portfolio Details Section -->

 <script>
     const config = {
         decrementButton: "<strong> <i class='bi bi-dash-circle text-danger fs-5'></i> </strong>",
         incrementButton: "<strong> <i class='bi bi-plus-circle text-success fs-5'></i> </strong>",
         groupClass: "custom-class-input", // css class of the resulting input-group
         buttonsClass: "btn-outline-warning",
         textAlign: "center",
         autoDelay: 500, // ms holding before auto value change
         autoInterval: 100, // speed of auto value change
     }
     $("#qty").inputSpinner(config);
 </script>