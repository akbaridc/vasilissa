<style>
    .table>tbody>tr.activee>td {
        background: #cbcff2;
        color: #fff;
    }
</style>

<section class="section">
    <div class="section-header">
        <h1>Tracking Level</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tracking Level</h2>
        <p class="section-lead">
            informasi mengenai level member anda di website kami
        </p>

        <div class="alert alert-info alert-has-icon">
            <div class="alert-icon"><i class="fas fa-info"></i></div>
            <div class="alert-body">
                <div class="alert-title">Informasi</div>
                Level anda akan naik secara otomatis ketika anda mendapatkan member baru yang menggunakan kode reveral anda, batas level adalah 10.
            </div>
        </div>

        <div class="mt-sm-4">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered" id="test">
                        <thead class="text-white bg-primary">
                            <tr class="text-center">
                                <td widtd="5%">#</td>
                                <td>Level</td>
                                <td>info</td>
                                <td>User Member</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="activee">
                                <td>1</td>
                                <td>
                                    <div class="badge badge-primary">Level 1</div>
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i> Info Level</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('member/TrackingLevel/UserMember') ?>" class="btn btn-icon btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="badge badge-primary">Level 2</div>
                                </td>
                                <td>
                                    <button data-toggle="modal" data-target="#exampleModal1" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i> Info Level</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('member/TrackingLevel/UserMember') ?>" class="btn btn-icon btn-primary"><i class="fas fa-info-circle"></i> Detail</a>
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
                        <div class="alert-title">Anda berada di level 1</div>
                        terus tingkatkan penjualan dan semangat untuk naik ke level 1 <br>
                        <b>120 / 100</b>
                    </div>

                    <!-- <div class="mt-2">
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
                    </div> -->
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
                        <div class="alert-title">Anda berada di level 2</div>
                        terus tingkatkan penjualan dan semangat untuk naik ke level 3 <br>
                        <b>120 / 500</b>
                    </div>

                    <!-- <div class="mt-2">
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
                    </div>/ -->
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