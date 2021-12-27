<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Foto Produk</h1>
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
                    <div class="card-body">
                        <form action="<?= base_url('admin/tambah_foto_proses') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tambah Foto Produk</label>
                                    <input type="hidden" name="id_produk" value="<?= $id_produk ?>" class="form-control">
                                    <input type="file" name="foto_produkk" id="foto_produkk" class="form-control">
                                    <button type="submit" class="btn btn-icon btn-left btn-primary mt-3" name="submit"><i class="fas fa-save"> Simpan Produk</i></button>
                                </div>
                            </div>
                        </form>

                        <div class="col-md-12 col-xl-12 mt-4">
                            <b>Foto Produk : </b>
                        </div>

                        <div class="col-md-12 col-xl-12" style="text-align:center">
                            <div class="row">
                                <?php
                                if ($foto_produk != null) {
                                    foreach ($foto_produk as $data) {  ?>
                                        <div class="col-md-4 col-xl-3" style="padding:10px;text-align:center">
                                            <img src="<?= base_url('assets/vasilissa/admin/produk/' . $data->foto) ?>" width="220px" height="200px">
                                            <div class="mt-3">
                                                <a href="<?= base_url('admin/hapus_foto_produk/' . $data->id . '/' . $data->id_produk) ?>" class="btn btn-danger delete"><i class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                <?php }
                                } else {
                                    echo "<div class='col-md-12 col-xl-12' style='padding:30px'>";
                                    echo "Belum Ada Foto Produk";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>