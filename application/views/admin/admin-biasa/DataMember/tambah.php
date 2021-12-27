<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Member</h1>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password <small class="text-danger">Default : 12345</small></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
                                </div>
                            </div>

                            <div class="col-md-4">
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
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Produk Terjual Paket</label>
                                    <input type="number" name="Ppaket" id="Ppaket" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Produk Terjual Item</label>
                                    <input type="number" name="Pitem" id="Pitem" class="form-control" placeholder="0">
                                </div>
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