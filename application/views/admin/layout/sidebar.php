<?php if ($this->uri->segment(1) == 'admin') { ?>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="<?= base_url('admin') ?>" class="logo d-flex align-items-center justify-content-center">
                    <img src="<?= base_url('assets/vasilissa/website/' . $data['logo_icon']) ?>" width="30" alt="">
                    &nbsp;<span><?= $data['nama_website'] ?> Admin</span>
                </a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="<?= base_url('admin') ?>">Nl</a>
            </div>
            <ul class="sidebar-menu">
                <li <?= $active == 'admin' ? 'class="active"' : '' ?>">
                    <a href="<?= base_url('admin') ?>" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-header">Master</li>
                <li <?php if ($active == 'DataUser' || $active == 'DataProduk' || $active == 'DataReward') {
                        echo 'class="nav-item dropdown active"';
                    } ?>>
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-layer-group"></i> <span>Data Master</span></a>
                    <ul class="dropdown-menu">
                        <li <?= $active == 'DataUser' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/DataUser') ?>"><i class="fas fa-user"></i> <span>Data User</span></a></li>
                        <li <?= $active == 'DataProduk' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/DataProduk') ?>"><i class="fas fa-box-open"></i> <span>Data Produk</span></a></li>
                        <li <?= $active == 'DataReward' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/DataReward') ?>"><i class="fas fa-gift"></i> <span>Data Reward</span></a></li>
                    </ul>
                </li>

                <li class="menu-header">Member</li>
                <li <?= $active == 'DataMember' || $active == 'TrackingLevelMember' ? 'class="nav-item dropdown active"' : '' ?>>
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-check"></i> <span>Data Member</span></a>
                    <ul class="dropdown-menu">
                        <li <?= $active == 'DataMember' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/DataMember') ?>"><i class="fas fa-user-check"></i> <span>Data Member</span></a></li>
                        <li <?= $active == 'TrackingLevelMember' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/DataMember/TrackingLevelMember') ?>"><i class="fas fa-chart-line"></i> <span>Tracking Level</span></a></li>
                    </ul>
                </li>

                <li class="menu-header">Transaksi</li>
                <li <?= $this->uri->segment(2) == 'TransaksiProduk' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/TransaksiProduk') ?>"><i class="fas fa-boxes"></i> <span>Transaksi Produk</span></a></li>
                <!-- <li <?= $this->uri->segment(2) == 'TransaksiWithdrawCash' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/TransaksiWithdrawCash') ?>"><i class="fas fa-money-bill-wave"></i> <span>Transaksi Withdraw Cash</span></a></li> -->
                <li <?= $this->uri->segment(2) == 'TransaksiWithdrawReward' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/TransaksiWithdrawReward') ?>"><i class="fas fa-box"></i> <span>Transaksi Withdraw Reward</span></a></li>


                <li class="menu-header">Setting</li>
                <li <?= $this->uri->segment(2) == 'akun' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/akun') ?>"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
                <li <?= $this->uri->segment(2) == 'SettingWebsite' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('admin/SettingWebsite') ?>"><i class="fas fa-cogs"></i> <span>Setting Website</span></a></li>
                <li><a class="nav-link text-danger" href="<?= base_url('logout_admin') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </aside>
    </div>
<?php } elseif ($this->uri->segment(1) == 'master-admin') { ?>
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="<?= base_url('master-admin') ?>" class="logo d-flex align-items-center justify-content-center">
                    <img src="<?= base_url('assets/vasilissa/website/' . $data['logo_icon']) ?>" width="30" alt="">
                    &nbsp;<span><?= $data['nama_website'] ?> Master</span>
                </a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="<?= base_url('master-admin') ?>">Nl</a>
            </div>
            <ul class="sidebar-menu">
                <li <?= $active == 'master-admin' ? 'class="active"' : '' ?>">
                    <a href="<?= base_url('master-admin') ?>" class="nav-link">
                        <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-header">Master</li>
                <li <?php if ($active == 'DataUser' || $active == 'DataProduk' || $active == 'DataReward') {
                        echo 'class="nav-item dropdown active"';
                    } ?>>
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-layer-group"></i> <span>Data Master</span></a>
                    <ul class="dropdown-menu">
                        <li <?= $active == 'DataUser' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/DataUser') ?>"><i class="fas fa-user"></i> <span>Data User</span></a></li>
                        <li <?= $active == 'DataProduk' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/DataProduk') ?>"><i class="fas fa-box-open"></i> <span>Data Produk</span></a></li>
                        <li <?= $active == 'DataReward' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/DataReward') ?>"><i class="fas fa-gift"></i> <span>Data Reward</span></a></li>
                    </ul>
                </li>

                <li class="menu-header">Member</li>
                <li <?php if ($active == 'DataMember' || $active == 'TrackingLevelMember') {
                        echo 'class="nav-item dropdown active"';
                    } ?>>
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-check"></i> <span>Data Member</span></a>
                    <ul class="dropdown-menu">
                        <li <?= $active == 'DataMember' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/DataMember') ?>"><i class="fas fa-user-check"></i> <span>Data Member</span></a></li>
                        <li <?= $active == 'TrackingLevelMember' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/DataMember/TrackingLevelMember') ?>"><i class="fas fa-chart-line"></i> <span>Tracking Level</span></a></li>
                    </ul>
                </li>

                <li class="menu-header">Laporan</li>
                <li <?php if ($active == 'LaporanProduk' || $active == 'LaporanOmset') {
                        echo 'class="nav-item dropdown active"';
                    } ?>>
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i> <span>Laporan</span></a>
                    <ul class="dropdown-menu">
                        <li <?= $active == 'LaporanProduk' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/LaporanProduk') ?>"><i class="fas fa-box"></i> <span>Laporan Produk</span></a></li>
                        <li <?= $active == 'LaporanOmset' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/LaporanOmset') ?>"><i class="fas fa-donate"></i> <span>Laporan Omset</span></a></li>
                    </ul>
                </li>

                <li class="menu-header">Transaksi</li>
                <li <?= $this->uri->segment(2) == 'TransaksiProduk' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/TransaksiProduk') ?>"><i class="fas fa-boxes"></i> <span>Transaksi Produk</span></a></li>
                <!-- <li <?= $this->uri->segment(2) == 'TransaksiWithdrawCash' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/TransaksiWithdrawCash') ?>"><i class="fas fa-money-bill-wave"></i> <span>Transaksi Withdraw Cash</span></a></li> -->
                <li <?= $this->uri->segment(2) == 'TransaksiWithdrawReward' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/TransaksiWithdrawReward') ?>"><i class="fas fa-box"></i> <span>Transaksi Withdraw Reward</span></a></li>


                <li class="menu-header">Setting</li>
                <li <?= $active == 'akun' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('master-admin/SettingAkun') ?>"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
                <li><a class="nav-link text-danger" href="<?= base_url('logout_admin') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </aside>
    </div>
<?php } ?>