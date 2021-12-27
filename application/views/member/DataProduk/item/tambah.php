<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Beli - Produk Item</h1>
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
                    <?php echo form_open(base_url() . 'member/FormItem_tambah', array('method' => 'post')); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Produk Item</label>
                                    <select name="item" id="item_tambah" class="form-control" required>
                                        <option disabled>Pilih Produk Item</option>
                                        <?php foreach ($produk as $value) { ?>
                                            <option value="<?= $value->id_pd ?>"><?= $value->kode_pd ?> - <?= $value->nama_pd ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Harga / Paket <small class="text-danger diskon-item ml-2"></small></label>
                                    <input type="text" class="form-control" name="harga" id="harga_item" placeholder="Harga Produk" required readonly>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah Item Dibeli</label>
                                    <input type="number" class="form-control" name="qty" id="qty_item" placeholder="Jumlah produk item dibeli" required value="1" min="1">
                                </div>

                                <div class="form-group">
                                    <label>Total Harga</label>
                                    <input type="text" class="form-control" name="total" id="total_harga_item" placeholder="Total Harga" required readonly>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-shopping-cart"> Beli Produk</i></button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4>Deskripsi Produk</h4>
                                <div id="deskripsi_item"></div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="card-footer">
                        
                    </div> -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>