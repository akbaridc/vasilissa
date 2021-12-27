<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= base_url('') ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url('assets/vasilissa/website/' . $data['logo_website']) ?>" alt="">
            <!-- <span>Navilissa</span> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#tentang">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#produk">Produk</a></li>
                <li class="dropdown">
                    <a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#paket">Produk Paket</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#testimoni">Testimoni</a></li>
                    </ul>
                </li>

                <!-- <li class="nav-item text-uppercase mb-0 position-relative d-flex">
                    <div id="cart" class="d-none"></div>
                    <a href="#" class="cart position-relative d-inline-flex" aria-label="View your shopping cart">
                        <i class="bi bi-heart" style="font-size: 30px;"></i>
                        <span class="cart-basket d-flex align-items-center justify-content-center">
                            0
                        </span>
                    </a>
                </li> -->

                <li class="nav-item">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#regis-member" class="button-member">Daftar Member</button>
                </li>

                <li class="nav-item text-uppercase mb-0 position-relative d-flex">
                    <div id="cart" class="d-none"></div>
                    <a href="#" class="cart position-relative d-inline-flex dropdown" aria-label="View your shopping cart">
                        <i class="bi bi-cart3" style="font-size: 30px;"></i>
                        <span class="cart-basket d-flex align-items-center justify-content-center">
                            0
                        </span>
                    </a>
                </li>
                <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->

                <!-- <li><a class="shopping-cart" href="#"><i class="fas fa-shopping-cart"></i></a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->