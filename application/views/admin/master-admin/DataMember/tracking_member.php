<style>
    .table>tbody>tr.activee>td {
        background: #949ff3;
        color: #fff;
    }
</style>

<section class="section">
    <div class="section-header">
        <h1>Tracking Level Member</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tracking Level Member</h2>
        <p class="section-lead">
            informasi mengenai level member
        </p>

        <!-- <div class="alert alert-info alert-has-icon">
            <div class="alert-icon"><i class="fas fa-info"></i></div>
            <div class="alert-body">
                <div class="alert-title">Informasi</div>
                Level anda akan naik secara otomatis ketika anda mendapatkan member baru yang menggunakan kode reveral anda, batas level adalah 10.
            </div>
        </div> -->

        <div class="mt-sm-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="test">
                        <thead class="bg-primary text-white">
                            <tr>
                                <td width="5%">#</td>
                                <td>Nama</td>
                                <td>Level</td>
                                <td>info</td>
                                <td>User Member</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Akbar Imawan Dwi Cahya
                                    <div class="table-links">
                                        <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewUser" href="#">Lihat</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-primary">Level 1</div>
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i> Info Level</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('master-admin/DataMember/UserMember') ?>" class="btn btn-icon btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>M. Ali Romadoni
                                    <div class="table-links">
                                        <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewUser" href="#">Lihat</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="badge badge-primary">Level 2</div>
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#exampleModal1" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i> Info Level</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('master-admin/DataMember/UserMember') ?>" class="btn btn-icon btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal view -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Akbar Imawan Dwi Cahya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Akbar Imawan Dwi Cahya</td>
                    </tr>
                    <tr>
                        <td>Avatar</td>
                        <td>:</td>
                        <td>
                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
                        </td>
                    </tr>

                    <tr>
                        <td>Terjual paket</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Terjual item</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Level Member</td>
                        <td>:</td>
                        <td>
                            <div class="badge badge-primary">Level 1</div>
                        </td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <div class="badge badge-success">Aktif</div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!-- modal view -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="alert alert-success">
                        <div class="alert-title">Member berada di level 1</div>
                        terus tingkatkan penjualan dan semangat untuk naik ke level 2 <br>
                        <b>10 / 100</b>
                    </div>

                    <div class="mt-2">
                        <h3>Reward di level 1</h3>
                        <table class="table table-striped table-bordered">
                            <thead class="text-white bg-info">
                                <tr class="text-center">
                                    <td colspan="2">Produk Paket</td>
                                    <td colspan="2">Produk Item</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Cash</td>
                                    <td>Reward</td>
                                    <td>Cash</td>
                                    <td>Reward</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Rp. 100.000</td>
                                    <td>-</td>
                                    <td>Rp. 100.000</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<!-- modal view -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="alert alert-danger">
                        <div class="alert-title">Member berada di level 1</div>
                        terus tingkatkan penjualan dan semangat untuk naik ke level 2 <br>
                        <b>10 / 100</b>
                    </div>

                    <div class="mt-2">
                        <h3>Reward di level 2</h3>
                        <table class="table table-striped table-bordered">
                            <thead class="text-white bg-info">
                                <tr class="text-center">
                                    <td colspan="2">Produk Paket</td>
                                    <td colspan="2">Produk Item</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Cash</td>
                                    <td>Reward</td>
                                    <td>Cash</td>
                                    <td>Reward</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Rp. 500.000</td>
                                    <td>-</td>
                                    <td>Rp. 500.000</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#test').DataTable();
    });
</script>