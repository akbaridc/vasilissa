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
                    <?php echo form_open(base_url() . 'member/FormItem_edit', array('method' => 'post')); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Produk Paket</label>
                                    <input type="hidden" name="id" class="form-control" value="<?= $item->id ?>">
                                    <select name="item" id="item_tambah" class="form-control" required>
                                        <option value="<?= $item->id_pd ?>"><?= $item->kode_produk ?> - <?= $item->nama_produk; ?></option>
                                        <?php foreach ($produk as $value) { ?>
                                            <option value="<?= $value->id_pd ?>"><?= $value->kode_pd ?> - <?= $value->nama_pd ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Harga / item
                                        <?php if ($item->diskon_produk != 0) { ?>
                                            <small class="text-danger diskon-paket ml-2">Diskon <?= $item->diskon_produk ?> %</small>
                                        <?php } ?>
                                    </label>
                                    <?php
                                    $harga1 = $item->diskon_produk * $item->harga_produk / 100;
                                    $harga = $item->harga_produk - $harga1;

                                    $tot_bay = $item->qty * $harga;
                                    ?>
                                    <input type="text" class="form-control" name="harga" id="harga_item" placeholder="Harga Produk" required readonly value="<?= $harga ?>">
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Item Dibeli</label>
                                    <input type="number" class="form-control" name="qty" id="qty_item" placeholder="Jumlah produk item dibeli" required min="1" value="<?= $item->qty ?>">
                                </div>

                                <div class="form-group">
                                    <label>Total Harga</label>
                                    <input type="text" class="form-control" name="total" id="total_harga_item" placeholder="Total Harga" required readonly value="<?= $tot_bay ?>">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-shopping-cart"> Simpan</i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Deskripsi Produk</h4>
                                <div id="deskripsi_item">
                                    <?= $item->deskripsi_produk ?>
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