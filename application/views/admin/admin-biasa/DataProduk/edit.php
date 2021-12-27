<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Produk</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <!-- <h2 class="section-title">Badges</h2>
        <p class="section-lead">
            Examples for badges, our small count and labeling component.
        </p> -->

        <div class="row">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card">
                    <?php echo form_open(base_url() . 'admin/edit_produk', array('method' => 'post')); ?>
                    <div class="card-body">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Produk</label>
                                    <input type="hidden" name="id" value="<?= base64_encode($produk->id_pd); ?>" id="id_awal">
                                    <select id="jenis2" name="jenis" required class="form-control">
                                        <option value="1" <?= ($produk->jenis == 1) ? 'selected' : '' ?>>Produk Paket</option>
                                        <option value="2" <?= ($produk->jenis == 2) ? 'selected' : '' ?>>Produk /Item</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" required value="<?= $produk->nama_pd; ?>" class="form-control" name="nama" id="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Diskon Produk</label>
                                    <input type="number" required class="form-control" value="<?= $produk->diskon; ?>" name="diskon" id="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Produk</label>
                                    <input type="text" required class="form-control" name="kode" value="<?= $produk->kode_pd; ?>" id="kode2" placeholder="Kode otomatis generate" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="number" required class="form-control" value="<?= $produk->harga; ?>" name="harga" id="harga" placeholder="Harga">
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>
                                    <input type="number" required class="form-control" value="<?= $produk->stok; ?>" name="stok" id="stok" placeholder="Stok produk">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- <div>
                                  <label>Gambar Produk</label>
                                  <div class="dropzone" id="mydropzone">
                                      <div class="fallback">
                                          <input name="file" type="file" multiple />
                                      </div>
                                  </div>
                              </div> -->
                                <!-- <br> -->
                                <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <textarea required class="summernote form-control" placeholder="Type a reply ..." name="deskripsi"><?= $produk->deskripsi; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-save"> Simpan Produk</i></button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $("#jenis2").change(function() {
            var id = $(this).val();
            var id_awal = $("#id_awal").val();
            $.ajax({
                url: "<?= base_url('admin/get_kode_produk_edit'); ?>",
                method: "POST",
                data: {
                    id: id,
                    id_awal: id_awal,
                },
                async: true,
                dataType: "json",
                success: function(data) {
                    // console.log(data);
                    $("#kode2").val(data);
                },
            });
            return false;
        });
    });
</script>