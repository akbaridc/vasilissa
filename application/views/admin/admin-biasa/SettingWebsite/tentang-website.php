<div class="card">
    <div class="card-header">
        <h4>Tentang Vasilissa</h4>
        <div class="card-header-action">
            <a id="tentangAdd" class=" btn btn-icon btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Tambah Data / Edit Data"> <i class="fas fa-plus"></i> / <i class="fas fa-marker"></i></a>
        </div>
    </div>
    <div id="tentang_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/tentang') ?>" enctype="multipart/form-data" class="form-horizontal" id="form_tentang" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>logo perusahaan</label>
                        <br>
                        <?= isset($data['foto_perusahaan']) ? '<img width="300" class="img-responsive" src="' . base_url() . 'assets/vasilissa/website/' . $data['foto_perusahaan'] . '" />' : '<p class="text-center text-danger">Foto masih kosong</p>' ?>
                        <br>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>deskripsi perusahaan</label>
                        <textarea class="ckeditor form-control" name="deskripsi" id="deskripsi"><?= isset($data['deskripsi']) ? $data['deskripsi'] : '' ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>deskripsi singkat perusahaan</label>
                        <input class="form-control" name="deskripsi_singkat" id="deskripsi_singkat" value="<?= isset($data['deskripsi_singkat']) ? $data['deskripsi_singkat'] : '' ?>" placeholder="Deskripsi singkat perusahaan">
                    </div>

                </div>

                <div class="container ml-2">
                    <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="text-center">
            <img width="300" src="<?= base_url('assets/vasilissa/website/' . $data['foto_perusahaan']) ?>" alt="">
        </div>
        <div class="mt-3">
            <p class="badge badge-info">Deskripsi Singkat</p>
            <br>
            <?= $data['deskripsi_singkat'] ?>
        </div>
        <div class="mt-3">
            <p class="badge badge-info">Deskripsi</p>
            <?= $data['deskripsi'] ?>
        </div>
    </div>
</div>