<div class="card">
    <div class="card-header">
        <h4>Kontak</h4>
        <div class="card-header-action">
            <a id="kontakAdd" class="btn btn-icon btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Tambah Data / Edit Data"> <i class="fas fa-plus"></i> / <i class="fas fa-edit"></i></a>
        </div>
    </div>
    <div id="kontak_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/kontak_website') ?>" class="form-horizontal" id="form_kontak" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email_kontak" class="form-control <?php if (form_error('email_kontak')) echo 'is-invalid'; ?>" id="email_kontak" placeholder="Email perusahaan" value="<?= set_value('email_kontak') ?>">
                        <?= form_error('email_kontak', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="number" min="0" name="telp_kontak" class="form-control <?php if (form_error('telp_kontak')) echo 'is-invalid'; ?>" id="telp_kontak" value="<?= set_value('telp_kontak') ?>" placeholder="No. Telepon">
                        <?= form_error('telp_kontak', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Alamat perusahaan</label>
                        <input type="text" name="alamat_kontak" id="alamat_kontak" class="form-control <?php if (form_error('alamat_kontak')) echo 'is-invalid'; ?>" placeholder="Alamat perusahaan" value="<?= set_value('alamat_kontak') ?>">
                        <?= form_error('alamat_kontak', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
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
            <label>Email</label>
            <input type="email" class="form-control" value="<?= $data['email'] ?>" disabled>
        </div>

        <div class="form-group">
            <label>No. Telepon</label>
            <input type="number" class="form-control" value="<?= $data['telepon'] ?>" disabled>
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" value="<?= strip_tags($data['alamat']) ?>" disabled>
        </div>
    </div>
</div>