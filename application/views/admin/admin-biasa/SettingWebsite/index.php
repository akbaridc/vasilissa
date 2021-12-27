<section class="section">
    <div class="section-header">
        <h1>Setting Website</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Setting Website</h2>
        <p class="section-lead">
            Ubah informasi website anda di halaman ini
        </p>

        <div class="row">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-lg-6 col-md-6">
                <!-- nama website -->
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/nama-website') ?>
                <!-- end nama website -->

                <!-- logo website -->
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/logo-website') ?>
                <!-- end logo website -->

                <!-- sosial media website -->
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/sosial-website') ?>
                <!-- end sosial media website -->
            </div>



            <div class="col-12 col-lg-6 col-md-6">
                <!-- tentang website -->
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/tentang-website') ?>
                <!-- end tentang website -->

                <!-- contact us website -->
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/kontak-website') ?>
                <!-- end contact us website -->
            </div>
        </div>

    </div>
</section>


<!-- modal list icon -->
<div class="modal fade" tabindex="-1" role="dialog" id="list-icon" style="z-index: 9999999999;">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>list icon sosia media</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php $this->load->view('admin/admin-biasa/SettingWebsite/list-icon') ?>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- modal list icon -->
<div class="modal fade" tabindex="-1" role="dialog" id="edit-data-sosial-modal">
    <div class="modal-dialog modal-md" role="document">
        <form action="<?= base_url('admin/SettingWebsite/edit') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Edit Data</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="d-flex">
                            <label>icon sosial media</label>
                            <button type="button" class="btn btn-info btn-icon ml-auto m-2 list-add" data-toggle="tooltip" data-placement="top" title="List nama icon sosial media">
                                <i class="ion ion-alert"> List Icon</i>
                            </button>
                        </div>
                        <input id="id_edit" name="id_edit" required="1" type="hidden" class="form-control">
                        <input type="text" name="edit_icon_sosial" class="form-control <?php if (form_error('edit_icon_sosial')) echo 'is-invalid'; ?>" id="edit_icon_sosial" placeholder="tuliskan code icon. Ex: ion ion-social-facebook" value="<?= set_value('edit_icon_sosial') ?>">
                        <?= form_error('edit_icon_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>link</label>
                        <input type="text" name="edit_link_sosial" class="form-control <?php if (form_error('edit_link_sosial')) echo 'is-invalid'; ?>" id="edit_link_sosial" placeholder="link sosial media" value="<?= set_value('edit_link_sosial') ?>">
                        <?= form_error('edit_link_sosial', '<small class="text-danger" style="margin-top:3px;">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>