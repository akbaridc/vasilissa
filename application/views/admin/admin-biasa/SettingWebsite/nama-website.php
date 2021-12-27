<div class="card">
    <div class="card-header">
        <h4>nama website</h4>
        <div class="card-header-action">
            <a id="namaWebsiteAdd" class="btn btn-icon btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Tambah Data"> <i class="fas fa-plus"></i></a>
            <a id="namaWebsiteEdit" class="btn btn-icon btn-warning text-white" data-toggle="tooltip" data-placement="top" title="Edit Data"> <i class="fas fa-marker"></i></a>
        </div>
    </div>
    <div id="namaWebsite_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/nama_website') ?>" class="form-horizontal" id="form_namaWebsite" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label>nama website</label>
                        <input type="text" name="nama_website" class="form-control <?php if (form_error('nama_website')) echo 'is-invalid'; ?>" id="nama_website" placeholder="Nama Website" value="<?= set_value('nama_website') ?>">
                        <?= form_error('nama_website', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>
                </div>

                <div class="container ml-2">
                    <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div id="EditnamaWebsite_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/edit_nama_website') ?>" class="form-horizontal" id="form_EdutnamaWebsite" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label>nama website</label>
                        <input type="text" name="nama_website" class="form-control <?php if (form_error('nama_website')) echo 'is-invalid'; ?>" id="nama_website" value="<?= isset($data['nama_website']) ? $data['nama_website'] : set_value('nama_website') ?>">
                        <?= form_error('nama_website', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>
                </div>

                <div class="container ml-2">
                    <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>nama website</label>
            <input type="text" name="nama_website" class="form-control" id="nama_website" value="<?= isset($data['nama_website']) ? $data['nama_website'] : 'Data Masih Kosong' ?>" disabled>
        </div>
    </div>
</div>