<section class="section">
    <div class="section-header">
        <h1>History Withdraw</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">History Withdraw</h2>
        <p class="section-lead">
            Berikut ini history withdraw anda
        </p>

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td width="7%">No.</td>
                                        <td>Level</td>
                                        <td>Reward di Withdraw</td>
                                        <td>Tanggal Withdraw</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Level 1
                                            <div class="table-links">
                                                <a href="#" data-toggle="modal" data-target="#detail" class="badge badge-info text-white">Detail</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="badge badge-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-primary">Rp. 100.000</div>
                                        </td>
                                        <td>15 Desember 2021</td>
                                        <td>
                                            <div class="badge badge-success">terverifikasi</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Level 2
                                            <div class="table-links">
                                                <a href="#" data-toggle="modal" data-target="#detail" class="badge badge-info text-white">Detail</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="badge badge-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-primary">Handphone</div>
                                        </td>
                                        <td>1 Januari 2022</td>
                                        <td>
                                            <div class="badge badge-warning">pending</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Level 2
                                            <div class="table-links">
                                                <a href="#" data-toggle="modal" data-target="#detail" class="badge badge-info text-white">Detail</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="badge badge-danger text-white">Hapus</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-primary">Rp. 1.000.000</div>
                                        </td>
                                        <td>3 Januari 2022</td>
                                        <td>
                                            <div class="badge badge-danger">Gagal</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal view -->
<div class="modal fade" tabindex="-1" role="dialog" id="detail">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail History Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <td width="10%">Level</td>
                        <td>Level 1</td>
                    </tr>
                    <tr>
                        <td>Reward</td>
                        <td>
                            <div class="badge badge-primary">
                                Rp. 1.000.000
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Withdraw</td>
                        <td>3 Januari 2022</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <div class="badge badge-danger">Gagal</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="alert alert-danger alert-has-icon">
                                <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                <div class="alert-body">
                                    <div class="alert-title">Withdraw gagal</div>
                                    dikarenakan anda telah withdraw di level yang sama dan di bulan yang sama, silahkan withdraw bulan depan. Terimakasih
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#test').DataTable();
    });
</script>