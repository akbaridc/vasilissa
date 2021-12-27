<div class="card">
    <div class="card-header">
        <h4>logo website</h4>
        <div class="card-header-action">
            <a id="logoWebsiteAdd" class="btn btn-icon btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Tambah Data / Edit Data"><i class="fas fa-plus"></i> / <i class="fas fa-marker"></i></a>
        </div>
    </div>
    <div id="form_container" style="display:none;">
        <div class="card">
            <ul class="nav nav-tabs" id="myTab5" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                        Logo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                        Logo Icon
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent5">
                <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                    <form action="<?= base_url('admin/SettingWebsite/logo') ?>" enctype="multipart/form-data" class="form-horizontal" id="form_vendor" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>logo website</label>
                                <br>
                                <?= isset($data['logo_website']) ? '<img width="300" class="img-responsive" src="' . base_url() . 'assets/vasilissa/website/' . $data['logo_website'] . '" />' : '<p class="text-center text-danger">Foto masih kosong</p>' ?>
                                <br>
                                <input type="file" name="logo" id="logo" class="form-control <?php if (form_error('logo')) echo 'is-invalid'; ?>">
                            </div>
                        </div>

                        <div class="container ml-2">
                            <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                    <form action="<?= base_url('admin/SettingWebsite/logoIcon') ?>" enctype="multipart/form-data" class="form-horizontal" id="form_vendor" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>logo website</label>
                                <br>
                                <?= isset($data['logo_icon']) ? '<img width="300" class="img-responsive" src="' . base_url() . 'assets/vasilissa/website/' . $data['logo_icon'] . '" />' : '<p class="text-center text-danger">Foto masih kosong</p>' ?>
                                <br>
                                <input type="file" name="logo-icon" id="logo-icon" class="form-control <?php if (form_error('logo-icon')) echo 'is-invalid'; ?>">
                            </div>
                        </div>

                        <div class="container ml-2">
                            <button id="save" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab5" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#logow" role="tab" aria-controls="home" aria-selected="true">
                    Logo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#logoi" role="tab" aria-controls="profile" aria-selected="false">
                    Logo Icon
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent5">
            <div class="tab-pane fade show active" id="logow" role="tabpanel" aria-labelledby="home-tab5">
                <div class="text-center">
                    <img width="300" src="<?= base_url('assets/vasilissa/website/' . $data['logo_website']) ?>" alt="">
                </div>
            </div>
            <div class="tab-pane fade" id="logoi" role="tabpanel" aria-labelledby="profile-tab5">
                <div class="text-center">
                    <img width="300" src="<?= base_url('assets/vasilissa/website/' . $data['logo_icon']) ?>" alt="">
                </div>
            </div>
        </div>

    </div>
</div>