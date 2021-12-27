<section class="section">
    <div class="section-header">
        <h1>Data Member</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Member</h2>
        <p class="section-lead">
            Berikut ini adalah data seluruh user yang menjadi member
        </p>

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="mr-auto">
                            <a href="<?= base_url('admin/DataMember/tambah') ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
                            <a href="<?= base_url('admin/DataMember/cetak') ?>" class="btn btn-success"> <i class="fas fa-print"></i> Cetak Data</a>
                        </div>
                        <div class="ml-auto">
                            <a href="#" class="btn btn-danger btn-icon icon-left ml-1 hapus-multi">
                                <i class="fas fa-trash"></i> Dipilih <span class="badge badge-transparent">2</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td width="5%" rowspan="2" class="align-middle"><input type="checkbox" id="check-all"></td>
                                        <td width="7%" rowspan="2" class="align-middle">No.</td>
                                        <td rowspan="2" class="align-middle">Nama</td>
                                        <td rowspan="2" class="align-middle">Level Member</td>
                                        <td colspan="2">Produk Yang Terjual</td>
                                        <td rowspan="2" class="align-middle">Avatar</td>
                                    </tr>
                                    <tr>
                                        <td width="10%">Paket</td>
                                        <td width="10%">Pcs</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class='check-item' id="id" name="id[]"></td>
                                        <td>1</td>
                                        <td>Akbar Imawan Dwi Cahya
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                                <div class="bullet"></div>
                                                <a class="badge badge-warning text-white" href="<?= base_url('admin/DataMember/edit') ?>">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="badge badge-danger text-white delete">Hapus</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-primary">Level 1</div>
                                        </td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>
                                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><input type="checkbox" class='check-item' id="id" name="id[]"></td>
                                        <td>2</td>
                                        <td>M. Ali Romadoni
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                                <div class="bullet"></div>
                                                <a class="badge badge-warning text-white" href="<?= base_url('admin/DataMember/edit') ?>">Edit</a>
                                                <div class="bullet"></div>
                                                <a href="#" class="badge badge-danger text-white delete">Hapus</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-primary">Level 1</div>
                                        </td>
                                        <td>1</td>
                                        <td>6</td>
                                        <td>
                                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
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
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
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
                        <td>Avatar</td>
                        <td>:</td>
                        <td>
                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
                        </td>
                    </tr>

                    <tr>
                        <td>Terjual paket</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Terjual item</td>
                        <td>:</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Level Member</td>
                        <td>:</td>
                        <td>
                            <div class="badge badge-primary">Level 1</div>
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
        $('#test').DataTable({
            columnDefs: [{
                sortable: false,
                targets: [0]
            }],
        });

        // Ketika halaman sudah siap (sudah selesai di load)
        $("#check-all").click(function() {
            // Ketika user men-cek checkbox all
            if ($(this).is(":checked"))
                // Jika checkbox all diceklis
                $(".check-item").prop("checked", true);
            // ceklis semua checkbox siswa dengan class "check-item"
            // Jika checkbox all tidak diceklis
            else $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
        });

        $('.is-member').on('click', function() {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "anda akan menjadikan user menjadi member",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'User telah menjadi member',
                        'success'
                    )
                }
            })
        });

        $('.delete').on('click', function() {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus data user ini!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Data User berhasil di hapus',
                        'success'
                    )
                }
            })
        });

        $('.hapus-multi').on('click', function() {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Ingin menghapus data user yang terpilih!!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Yakin'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Data User berhasil di hapus',
                        'success'
                    )
                }
            })
        });
    });
</script>