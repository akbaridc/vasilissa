<section class="section">
    <div class="section-header">
        <h1>Withdraw</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Withdraw</h2>
        <p class="section-lead">
            Berikut ini form untuk melakukan withdraw
        </p>

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="alert alert-info alert-has-icon">
                            <div class="alert-icon"><i class="fas fa-info"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">Informasi</div>
                                Withdraw disetujui admin ketika anda melakukan withdraw di 1 bulan sekali dan di setiap levelnya
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="reward-up" data-toggle="tab" href="#reward" role="tab" aria-controls="profile" aria-selected="false">Reward</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="tab-content no-padding" id="myTab2Content">
                                    <div class="tab-pane fade show active" id="reward" role="reward" aria-labelledby="profile-tab4">
                                        <form action="" action="POST">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Level</label>
                                                        <select class="form-control">
                                                            <option>Level 1</option>
                                                            <option>Level 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" name="name" id="name" value="Akbar Imawan Dwi Cahya">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>No. Telepon</label>
                                                                <input type="text" class="form-control" name="telp" id="telp" value="083*********">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Reward yang didapatkan</label>
                                                                <input type="text" class="form-control" name="cash" id="cash" value="-">
                                                            </div>
                                                        </div>

                                                        <div class="ml-auto mr-3">
                                                            <button class="btn btn-icon btn-primary"><i class="fas fa-save"> Withdraw</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>