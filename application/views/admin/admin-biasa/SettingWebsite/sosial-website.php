<div class="card">
    <div class="card-header">
        <h4>Sosial Media</h4>
        <div class="card-header-action">
            <a id="sosialMediaAdd" class="btn btn-icon btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Tambah Data"> <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div id="sosial_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/sosmed') ?>" class="form-horizontal" id="form_sosial" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <div class="d-flex">
                            <label>icon sosial media</label>
                            <button type="button" class="btn btn-info btn-icon ml-auto m-2 list-add" data-toggle="tooltip" data-placement="top" title="List nama icon sosial media">
                                <i class="ion ion-alert"> List Icon</i>
                            </button>
                        </div>
                        <input type="text" name="icon_sosial" class="form-control <?php if (form_error('icon_sosial')) echo 'is-invalid'; ?>" id="icon_sosial" placeholder="tuliskan code icon. Ex: ion ion-social-facebook" value="<?= set_value('icon_sosial') ?>">
                        <?= form_error('icon_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>link</label>
                        <input type="text" name="link_sosial" class="form-control <?php if (form_error('link_sosial')) echo 'is-invalid'; ?>" id="link_sosial" placeholder="link sosial media" value="<?= set_value('link_sosial') ?>">
                        <?= form_error('link_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                </div>

                <div class="container ml-2">
                    <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- edit data -->
    <div id="edit_sosial_form" style="display:none;">
        <div class="card">
            <form action="<?= base_url('admin/SettingWebsite/edit') ?>" class="form-horizontal" id="form_sosial" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <div class="d-flex">
                            <label>icon sosial media</label>
                            <button type="button" class="btn btn-info btn-icon ml-auto m-2 list-add" data-toggle="tooltip" data-placement="top" title="List nama icon sosial media">
                                <i class="ion ion-alert"> List Icon</i>
                            </button>
                        </div>
                        <input type="text" name="icon_sosial" class="form-control <?php if (form_error('icon_sosial')) echo 'is-invalid'; ?>" id="icon_sosial" placeholder="tuliskan code icon. Ex: ion ion-social-facebook" value="<?= set_value('icon_sosial') ?>">
                        <?= form_error('icon_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>link</label>
                        <input type="text" name="link_sosial" class="form-control <?php if (form_error('link_sosial')) echo 'is-invalid'; ?>" id="link_sosial" placeholder="link sosial media" value="<?= set_value('link_sosial') ?>">
                        <?= form_error('link_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                </div>

                <div class="container ml-2">
                    <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center">
                        <th width="3%">#</th>
                        <th width="7%">icon</th>
                        <th width="15%">link</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($icon as $item) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><i class="<?= $item['icon'] ?>"></i></td>
                            <td><a target="_BLANK" href="<?= $item['link'] ?>"><?= $item['link'] ?></a></td>
                            <td>
                                <div class="d-flex">
                                    <a href="javascript:;" data-id="<?= $item['id'] ?>" data-icon="<?= $item['icon'] ?>" data-link="<?= $item['link'] ?>" data-toggle="modal" data-target="#edit-data-sosial-modal">
                                        <button style="border:0" type="button" class="badge btn-icon badge-warning" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fa fa-marker"></i>
                                        </button>
                                    </a>
                                    <!-- <a style="cursor: pointer" data-id="<?= $item['id'] ?>" id="modal-edit-sosial" class="badge btn-icon badge-warning text-white" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></a> -->
                                    <button type="button" style="cursor: pointer;border:0" href="<?= base_url('admin/SettingWebsite/hapus/' . $item['id']) ?>" class="badge btn-icon badge-danger text-white ml-1 delete" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>