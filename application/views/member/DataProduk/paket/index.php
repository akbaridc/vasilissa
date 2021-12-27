<section class="section">
    <div class="section-header">
        <h1>Data Produk Paket</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Produk Paket </h2>
        <p class="section-lead">
            Berikut ini adalah data produk paket
        </p>

        <div class="row">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">

                        <a href="<?= base_url('member/produk-paket/beli') ?>">
                            <button class="btn btn-primary btn-md"><b> + Beli Produk Paket</b></button>
                        </a>
                        <br>
                        <br>

                        <div class="table-responsive">
                            <table width="100%" class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td width="5%">No.</td>
                                        <td width="35%">Kode Produk</td>
                                        <td width="7%">Qty Paket</td>
                                        <td width="20%">Total Harga</td>
                                        <td width="13%">Tanggal Beli</td>
                                        <td width="10%">Bukti Pembayaran</td>
                                        <td width="10%">Status Pembelian</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($paket as $value) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->kode_produk ?>
                                                <div class=" table-links">
                                                    <a class="badge badge-info text-white paketModalDetail" style="cursor: pointer;" data-id="<?= $value->id ?>">Lihat</a>
                                                    <?php if ($value->status == 0 || $value->status == 1) { ?>
                                                        <div class="bullet"></div>
                                                        <a class="badge badge-warning text-white" href="<?= base_url('member/DataProduk/paket_edit/' . $value->id) ?>">Edit</a>
                                                        <div class="bullet"></div>
                                                        <a class="badge badge-danger text-white delete" href="<?= base_url('member/hapus_produk_paket/' . $value->id) ?>">Hapus</a>
                                                    <?php } ?>

                                                </div>

                                            </td>
                                            <td><?= $value->qty ?> Paket</td>
                                            <td>Rp. <?= number_format($value->harga, 0, ',', '.') ?></td>
                                            <td><?= format_indo($value->tanggal_beli) ?></td>
                                            <td>
                                                <?php if ($value->foto_tf != null) { ?>
                                                    <button class="badge badge-primary" style="border: 0;" disabled>Anda sudah upload bukti</button>
                                                <?php } else { ?>
                                                    <button data-toggle="modal" data-target="#buktiPembayaranPaket" data-kode_produk="<?= $value->kode_produk ?>" data-nama_produk="<?= $value->nama_produk ?>" data-qty="<?= $value->qty ?>" data-harga="<?= $value->harga ?>" data-id="<?= $value->id; ?>" class="btn btn-icon btn-warning"><i class="fas fa-images"> Bukti Pembayaran</i></button>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($value->status == 0) { ?>
                                                    <div class="badge badge-info">Menunggu Konfirmasi Admin</div>
                                                <?php } elseif ($value->status == 1) { ?>
                                                    <div class="badge badge-warning">Pembelian anda pending</div>
                                                <?php } else { ?>
                                                    <div class="badge badge-success">Pembelian Produk telah diverifikasi</div>
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
<div class="modal fade" tabindex="-1" role="dialog" id="paketModalDetail">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <td width="10%">Kode Produk</td>
                        <td width="2%">:</td>
                        <td width="88%" id="kode_produk"></td>
                    </tr>
                    <tr>
                        <td width="10%">Nama Produk</td>
                        <td>:</td>
                        <td id="nama_produk"></td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td>:</td>
                        <td id="qty"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td id="harga"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Beli</td>
                        <td>:</td>
                        <td id="tanggal_beli"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Dikonfirmasi</td>
                        <td>:</td>
                        <td id="tanggal_konfirmasi"></td>
                    </tr>

                    <tr>
                        <td>Bukti Pembayaran</td>
                        <td>:</td>
                        <td id="bukti"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td id="status"></td>
                    </tr>
                    <tr>
                        <td colspan="3">Deskripsi</td>
                    </tr>
                    <tr>
                        <td colspan="3" id="deskripsi"></td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="buktiPembayaranPaket">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Upload Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart(base_url() . 'member/uploadPembayaran_paket', array('method' => 'post')); ?>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <input type="hidden" name="id" id="id" class="form-control">
                        <th width="10%">Kode Produk</th>
                        <td width="2%">:</td>
                        <td width="88%"><b id="kode_produk"></b></td>
                    </tr>
                    <tr>
                        <th>Nama Produk</th>
                        <td>:</td>
                        <td><b id="nama_produk"></b> </td>
                    </tr>
                    <tr>
                        <th>Qty</th>
                        <td>:</td>
                        <td><b id="qty"></b></td>
                    </tr>
                    <tr>
                        <th>Total Harga</th>
                        <td>:</td>
                        <td><b id="harga"></b></td>
                    </tr>
                    <tr>
                        <th colspan="3">Upload Bukti Pembyaran</th>
                    </tr>
                    <tr>
                        <td colspan="3">

                            <input type="file" name="bukti_tf" id="bukti_tf" class="form-control" required>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#test').DataTable();

        // logo website
        $('#tambah-foto').bind('click', function(e) {
            $('#form_foto').slideToggle(500);
            $('#foto_form')[0].reset();
        });
    });
</script>