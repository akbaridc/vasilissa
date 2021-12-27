<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Produk Per Paket</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <!-- <h2 class="section-title">Badges</h2>
        <p class="section-lead">
            Examples for badges, our small count and labeling component.
        </p> -->

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                    <?php echo form_open(base_url() . 'member/FormPaket_edit', array('method' => 'post')); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Produk Paket</label>
                                    <input type="hidden" name="id" class="form-control" value="<?= $paket->id ?>">
                                    <select name="paket" id="paket_tambah" class="form-control" required>
                                        <option value="<?= $paket->id_pd ?>"><?= $paket->kode_produk ?> - <?= $paket->nama_produk; ?></option>
                                        <?php foreach ($produk as $value) { ?>
                                            <option value="<?= $value->id_pd ?>"><?= $value->kode_pd ?> - <?= $value->nama_pd ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Harga / paket
                                        <?php if ($paket->diskon_produk != 0) { ?>
                                            <small class="text-danger diskon-paket ml-2">Diskon <?= $paket->diskon_produk ?> %</small>
                                        <?php } ?>
                                    </label>
                                    <?php
                                    $harga1 = $paket->diskon_produk * $paket->harga_produk / 100;
                                    $harga = $paket->harga_produk - $harga1;

                                    $tot_bay = $paket->qty * $harga;
                                    ?>
                                    <input type="text" class="form-control" name="harga" id="harga_paket" placeholder="Harga Produk" required readonly value="<?= $harga ?>">
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Paket Dibeli</label>
                                    <input type="number" class="form-control" name="qty" id="qty_paket" placeholder="Jumlah produk paket dibeli" required min="1" value="<?= $paket->qty ?>">
                                </div>

                                <div class="form-group">
                                    <label>Total Harga</label>
                                    <input type="text" class="form-control" name="total" id="total_harga_paket" placeholder="Total Harga" required readonly value="<?= $tot_bay ?>">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-shopping-cart"> Simpan</i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Deskripsi Produk</h4>
                                <div id="deskripsi_paket">
                                    <?= $paket->deskripsi_produk ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section