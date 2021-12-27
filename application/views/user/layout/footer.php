 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="footer-top">
         <div class="container">
             <div class="row gy-4">
                 <div class="col-lg-5 col-md-12 footer-info">
                     <a href="<?= base_url('') ?>" class="logo d-flex align-items-center">
                         <img src="<?= base_url('assets/vasilissa/website/' . $data['logo_website']) ?>" alt="">
                     </a>
                     <p><?= $data['deskripsi_singkat'] ?></p>
                     <div class="social-links mt-3">
                         <?php foreach ($icon as $item) : ?>
                             <a target="_BLANK" href="<?= $item['link'] ?>"><i style="font-size: 30px;" class="<?= $item['icon'] ?>"></i></a>
                         <?php endforeach; ?>
                     </div>
                 </div>

                 <div class="col-lg-4 col-6 footer-links">
                     <h4>Link rujukan</h4>
                     <ul>
                         <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('') ?>">Beranda</a></li>
                         <li><i class="bi bi-chevron-right"></i> <a href="#tentang">Tentang</a></li>
                         <li><i class="bi bi-chevron-right"></i> <a href="#produk">Produk</a></li>
                         <li><i class="bi bi-chevron-right"></i> <a href="#paket">Produk Paket</a></li>
                         <li><i class="bi bi-chevron-right"></i> <a href="#faq">FAQ</a></li>
                         <li><i class="bi bi-chevron-right"></i> <a href="#testimoni">Testimoni</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                     <h4>Kontak Kami</h4>
                     <p>
                         <?= $data['alamat'] ?> <br><br>
                         <strong>Telepon:</strong> <?= $data['telepon'] ?><br>
                         <strong>Email:</strong> <?= $data['email'] ?><br>
                     </p>

                 </div>

             </div>
         </div>
     </div>

     <div class="container d-flex footer-copyright">
         <div class="copyright mr-auto">
             &copy; Copyright <strong><span>Vasilissa</span></strong>. All Rights Reserved
         </div>
         <div class="credits" style="margin-left: auto;">
             Designed by <a target="_BLANK" href="https://bootstrapmade.com/">BootstrapMade</a>
         </div>
     </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>