<section class="section">
    <div class="section-header">
        <h1>Transaksi Produk</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Transaksi Produk</h2>
        <p class="section-lead">
            Berikut data pembelian produk dari member dan user
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="test">
                                <thead class="text-white bg-primary">
                                    <tr>
                                        <td widtd="7%">No.</td>
                                        <td>Nama</td>
                                        <td>Kode Produk</td>
                                        <td>Tanggal</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Akbar Imawan Dwi Cahya
                                            <div class=" table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewTCash" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>BRG001</td>
                                        <td>15 Desember 2021</td>
                                        <td>
                                            <button class="btn btn-icon btn-primary" disabled><i class="fas fa-spinner"> Menunggu Approve</i></button>
                                            <button class="btn btn-icon btn-success" disabled><i class="fas fa-check"> Approve</i></button>
                                            <button class="btn btn-icon btn-danger" disabled><i class="fa fa-times"> Tolak</i></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>M. ALi Romadoni
                                            <div class=" table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewTCash" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>BRG002</td>
                                        <td>20 Desember 2021</td>
                                        <td>
                                            <button class="btn btn-icon btn-primary" disabled><i class="fas fa-spinner"> Menunggu Approve</i></button>
                                            <button class="btn btn-icon btn-success" disabled><i class="fas fa-check"> Approve</i></button>
                                            <button class="btn btn-icon btn-danger" disabled><i class="fa fa-times"> Tolak</i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal view -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewTCash">
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
                        <td>Kode Barang</td>
                        <td>:</td>
                        <td>BRG001</td>
                    </tr>
                    <tr>
                        <td>Nama Produk</td>
                        <td>:</td>
                        <td>MS Glow</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp. 160.000</td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Akbar Imawan Dwi Cahya</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>083*******</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>Jln. Blater no 88 Rt.003/Rw.025, Desa Cangkring, Kec. Jenggawah, Kab. Jember</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>15 Desember 2021</td>
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

<script>
    $(document).ready(function() {
        $('#test').DataTable();
    });
</script>