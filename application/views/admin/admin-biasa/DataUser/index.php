<section class="section">
    <div class="section-header">
        <h1>Data User</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data User</h2>
        <p class="section-lead">
            Berikut ini adalah data seluruh user
        </p>

        <div class="row">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="mr-auto">
                            <a href="<?= base_url('admin/DataUser/tambah') ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
                            <a href="<?= base_url('admin/DataUser/cetak') ?>" class="btn btn-success"> <i class="fas fa-print"></i> Cetak Data</a>
                        </div>
                        <!-- <div class="ml-auto">
                            <a href="#" class="btn btn-danger btn-icon icon-left ml-1 hapus-multi">
                                <i class="fas fa-trash"></i> Dipilih <span class="badge badge-transparent">2</span>
                            </a>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <!-- <td width="5%"><input type="checkbox" id="check-all"></td> -->
                                        <td width="7%">No.</td>
                                        <td>Nama</td>
                                        <td>Email</td>
                                        <td>No. Telepon</td>
                                        <td>Foto</td>
                                        <td>Member</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $value) { ?>
                                        <tr>
                                            <!-- <td><input type="checkbox" class='check-item' id="id" name="id[]"></td> -->
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama ?>
                                                <div class="table-links">
                                                    <a class="badge badge-info text-white userModalDetail" style="cursor: pointer;" data-id="<?= $value->id_user ?>">Lihat</a>
                                                    <div class="bullet"></div>
                                                    <a class="badge badge-warning text-white" href="<?= base_url('admin/DataUser/edit/' . $value->id_user) ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?= base_url('admin/hapus_user/' . $value->id_user) ?>" class="badge badge-danger text-white delete">Hapus</a>
                                                </div>
                                            </td>
                                            <td><?= $value->email ?></td>
                                            <td><?= $value->no_telp != null ? $value->no_telp : "-" ?></td>
                                            <td>
                                                <img alt="image" src="<?= base_url('assets/vasilissa/admin/user/' . $value->foto) ?>" width="80" class="rounded-circle m-2">
                                            </td>
                                            <td>
                                                <?php if ($value->is_member == 0) { ?>
                                                    <button type="button" disabled class="btn btn-info">User telah menjadi member</button>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('admin/is_member/' . $value->id_user) ?>" class="btn btn-primary is-member">Approve ke Member</a>
                                                <?php } ?>

                                            </td>
                                        </tr>
                                    <?php } ?>
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
<div class="modal fade" tabindex="-1" role="dialog" id="userModalDetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-name"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td id="name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td id="email"></td>
                        </tr>
                        <tr>
                            <td>No. Telepon</td>
                            <td>:</td>
                            <td id="telp"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td id="date"> </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td id="alamat"> </td>
                        </tr>
                        <tr>
                            <td>Status Member</td>
                            <td>:</td>
                            <td id="status"></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>
                            <td id="foto"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#test').DataTable();
    });
</script>