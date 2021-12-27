<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="javascript:history.back()" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Tambah Data Transaksi Produk</h1>
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
                                    <label>Produk Paket / Item</label>
                                    <select name="level" id="level" class="form-control select2">
                                        <option value="" selected>Paket</option>
                                        <option value="">Item</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kode Produk</label>
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
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="name_produk" id="name_produk" placeholder="Nama Produk...">
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="harga" class="form-control" name="harga" id="harga" placeholder="Harga...">
                                </div>

                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="diskon" class="form-control" name="diskon" id="diskon" placeholder="diskon...">
                                </div>
                                <div class="form-group">
                                    <label>Qty</label>
                                    <input type="number" name="qty" id="qty" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Member / User</label>
                                    <select name="name" id="name" class="form-control select2">
                                        <option value="" selected>AKbar Imawan Dwi Cahya</option>
                                        <option value="">M. ALi Romadoni</option>
                                        <option value="">Faizal Fikri Hamdani</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
                                </div>

                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input type="number" class="form-control" name="telp" id="telp" placeholder="No. Telepon...">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <input type="number" name="level" id="level" class="form-control" placeholder="1">
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
    </div>
    </div>
</section