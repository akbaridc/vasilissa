<section class="section">
    <div class="section-header">
        <h1>Transaksi Withdraw Reward</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Transaksi Withdraw Reward</h2>
        <p class="section-lead">
            Berikut data transaksi member yang melakukan withdraw ( penukaran)
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="test">
                                <thead class="text-white bg-primary">
                                    <tr>
                                        <td widtd="7%">No.</td>
                                        <td>Nama</td>
                                        <td>Level</td>
                                        <td>Tanggal</td>
                                        <td>Reward Withdraw</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Akbar Imawan Dwi Cahya
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewTCash" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>15 Desember 2021</td>
                                        <td>Handphone</td>
                                        <td>
                                            <a href="#" class="btn btn-icon btn-primary approve"><i class="fas fa-check"> Approve</i></a>
                                            <a href="#" class="btn btn-icon btn-danger tolak"><i class="fa fa-times"> Tolak</i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Akbar Imawan Dwi Cahya
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#viewTCash" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>25 Januari 2022</td>
                                        <td>Laptop</td>
                                        <td>
                                            <a href="#" class="btn btn-icon btn-primary approve"><i class="fas fa-check"> Approve</i></a>
                                            <a href="#" class="btn btn-icon btn-danger tolak"><i class="fa fa-times"> Tolak</i></a>
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
<div class="modal fade" tabindex="-1" role="dialog" id="viewTCash">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Akbar Imawan Dwi Cahya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Akbar Imawan Dwi Cahya</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>083*******</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Reward diporoleh</td>
                        <td>:</td>
                        <td>Handphone</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>15 Desember 2021</td>
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
    })

    $('.approve').on('click', function() {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "anda akan mengapprove withdraw ini",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Berhasil!',
                    'Transaksi Withdraw berhasil',
                    'success'
                )
            }
        })
    });

    $('.tolak').on('click', function() {
        Swal.fire({
            title: "Kenapa?",
            text: "alasan kenapa transaksi withdraw ditolak:",
            input: 'text',
            showCancelButton: true
        }).then((result) => {
            if (result.value) {
                // console.log("Result: " + result.value);
                Swal.fire(`Result: ${result.value}`)
            }
        });
    });
</script>