<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Data Member</h1>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama..." value="Akbar Imawan Dwi Cahya">
                                </div>

                                <div class="form-group">
                                    <label>Level Member</label>
                                    <select name="level" id="level" class="form-control select2">
                                        <option value="" selected>Level 1</option>
                                        <option value="">Level 2</option>
                                        <option value="">Level 3</option>
                                        <option value="">Level 4</option>
                                        <option value="">Level 5</option>
                                        <option value="">Level 6</option>
                                        <option value="">Level 7</option>
                                        <option value="">Level 8</option>
                                        <option value="">Level 9</option>
                                        <option value="">Level 10</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Produk Terjual Paket</label>
                                            <input type="text" name="Ppaket" id="Ppaket" class="form-control" value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Produk Terjual Item</label>
                                            <input type="text" name="Pitem" id="Pitem" class="form-control" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Avatar / Gambar</label>
                                    <div class="row container mb-3">
                                        <img alt="image" src="<?= base_url('') ?>assets/admin/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg" class="rounded-circle m-2" width="200" height="200">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="avatar" class="custom-file-input" id="avatar">
                                        <label class="custom-file-label">Choose File</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-icon btn-left btn-primary" name="submit"><i class="fas fa-save"> Simpan</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section