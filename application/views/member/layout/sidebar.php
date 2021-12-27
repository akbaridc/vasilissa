<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?= base_url('member') ?>" class="logo d-flex align-items-center justify-content-center">
                <img src="<?= base_url('assets/vasilissa/website/' . $data['logo_icon']) ?>" width="30" alt="">
                &nbsp;<span><?= $data['nama_website'] ?> Member</span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('member') ?>">Nl</a>
        </div>
        <ul class="sidebar-menu">
            <li <?= $active == 'member' ? 'class="active"' : '' ?>>
                <a href="<?= base_url('member') ?>" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Data Master</li>
            <li <?php if ($active == 'Paket' || $active == 'Item') {
                    echo 'class="nav-item dropdown active"';
                } ?>>
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-layer-group"></i> <span>Data Produk</span></a>
                <ul class="dropdown-menu">
                    <li <?= $active == 'Paket' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/produk-paket') ?>"><i class="fas fa-box-open"></i> <span>Paket</span></a></li>
                    <li <?= $active == 'Item' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/produk-item') ?>"><i class="fas fa-box-open"></i> <span>Item</span></a></li>
                </ul>
            </li>


            <li class="menu-header">Tracking</li>
            <li <?= $active == 'TrackingLevel' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/TrackingLevel') ?>"><i class="fas fa-chart-line"></i> <span>Tracking Level</span></a></li>

            <li class="menu-header">Transaksi</li>
            <li <?= $active == 'input' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/Withdraw/input') ?>"><i class="fas fa-exchange-alt"></i> <span>Withdraw</span></a></li>
            <li <?= $active == 'history' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/Withdraw/history') ?>"><i class="fas fa-history"></i> <span>History Withdraw</span></a></li>

            <li class="menu-header">Setting</li>
            <li <?= $active == 'SettingAkun' ? 'class="active"' : '' ?>><a class="nav-link" href="<?= base_url('member/akun') ?>"><i class="fas fa-user-cog"></i> <span>Setting Akun</span></a></li>
            <li><a class="nav-link" href="<?= base_url(); ?>logout_member"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </aside>
</div>