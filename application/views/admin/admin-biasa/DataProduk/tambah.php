<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= base_url('admin/DataProduk') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Produk</h1>
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
                    <?php echo form_open(base_url() . 'admin/tambah_produk', array('method' => 'post')); ?>
                    <div class="card-body">
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Produk</label>
                                    <select id="jenis" name="jenis" required class="form-control">
                                        <option value="">Pilih Jenis Produk</option>
                                        <option value="1">Produk Paket</option>
                                        <option value="2">Produk /Item</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" required class="form-control" name="nama" id="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Diskon Produk</label>
                                    <input type="number" required class="form-control" name="diskon" id="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Produk</label>
                                    <input type="text" required class="form-control" name="kode" id="kode" placeholder="Kode otomatis generate" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="number" required class="form-control" name="harga" id="harga" placeholder="Harga">
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>
                                    <input type="number" required class="form-control" name="stok" id="stok" placeholder="Stok produk">
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
                                    <textarea required class="summernote form-control" placeholder="Type a reply ..." name="deskripsi"></textarea>
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
        $('#jenis').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('admin/get_kode_produk'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    $('#kode').val(data);
                }
            });
            return false;
        });
    });

    $(document).ready(function() {
        // logo website
        $('#tambah-foto').bind('click', function(e) {
            $('#form_foto').slideToggle(500);
            $('#foto_form')[0].reset();
        });

        var dropzone = new Dropzone("#mydropzone", {
            url: "#"
        });

        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function(files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function(file, totalSteps, step) {
                        return function() {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }
    });
</script>