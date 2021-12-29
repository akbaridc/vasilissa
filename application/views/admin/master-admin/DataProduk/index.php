<section class="section">
    <div class="section-header">
        <h1>Data Produk</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Produk</h2>
        <p class="section-lead">
            Berikut ini adalah data seluruh produk
        </p>

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <!-- <td width="5%"><input type="checkbox" id="check-all"></td> -->
                                        <td width="7%">No.</td>
                                        <td width="25%">Kode Produk</td>
                                        <td>Nama Produk</td>
                                        <td>Jenis Produk</td>
                                        <td style="text-align:center">Stok</td>
                                        <td>Harga Produk</td>
                                        <td style="text-align:center">Diskon</td>
                                        <td>Foto</td>
                                        <td style="text-align:center">Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($produk as $value) {
                                        $cek = $value->jenis;
                                        $jenis = '';
                                        if ($cek == 1) {
                                            $jenis = 'Produk Paket';
                                        } else {
                                            $jenis = 'Produk /Item';
                                        }
                                    ?>
                                        <tr>
                                            <!-- <td><input type="checkbox" class='check-item' id="id" name="id[]" value="<?= $value->id_pd; ?>"></td> -->
                                            <td><?= $no++; ?></td>
                                            <td><b><?= $value->kode_pd; ?></b>
                                                <div class="table-links">
                                                    <a class="badge badge-info text-white modalDetail" style="cursor: pointer;" data-id="<?= $value->id_pd ?>">Lihat</a>
                                                </div>
                                            </td>
                                            <td><?= $value->nama_pd; ?></td>
                                            <td>
                                                <?php if ($value->jenis == 1) {
                                                    echo "<b class='btn btn-warning btn-sm'>Produk Paket</b>";
                                                } else {
                                                    echo "<b class='btn btn-dark btn-sm'>Produk /Item</b>";
                                                } ?></td>
                                            <td style="text-align:center"><b><?= $value->stok; ?></b></td>
                                            <td>Rp <?= $value->harga; ?>,00</td>
                                            <td style="text-align:center"><b><?= $value->diskon; ?> %</b></td>
                                            <td>
                                                <a data-id="<?= $value->id_pd ?>" style="cursor: pointer;" class="text-white btn btn-info modalFotoDetail">Foto</a>
                                            </td>
                                            <td style="text-align:center">
                                                <?php if ($value->status == 1) { ?>
                                                    <button type="button" disabled class="btn btn-sm btn-success">Aktif</button>
                                                <?php } else { ?>
                                                    <button type="button" disabled class="btn btn-sm btn-danger">NonAktif</button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>

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
<div class="modal fade" tabindex="-1" role="dialog" id="modalFotoDetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Foto Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row foto-produkk">
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
<div class="modal fade" tabindex="-1" role="dialog" id="modalDetail">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table width="100%" class="table table-striped">
                        <thead>
                            <tr>
                                <td width="10%">Kode Produk</td>
                                <td width="2%">:</td>
                                <td width="88%"><b id="kode"></b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Produk</td>
                                <td>:</td>
                                <td><b id="nama"></b></td>
                            </tr>
                            <tr>
                                <td>Jenis Produk</td>
                                <td>:</td>
                                <td><b id="jenis"></b></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>:</td>
                                <td><b id="harga"></b></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td>:</td>
                                <td><b id="stok"></b></td>
                            </tr>
                            <tr>
                                <td>Diskon</td>
                                <td>:</td>
                                <td><b id="diskon"></b></td>
                            </tr>
                            <tr>
                                <td colspan="3">Deskrpsi Produk </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <pre style="font-style: Calibri" id="deskripsi"></pre>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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