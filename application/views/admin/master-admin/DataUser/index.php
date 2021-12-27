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
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td width="7%">No.</td>
                                        <td>Nama</td>
                                        <td>Email</td>
                                        <td>No. Telepon</td>
                                        <td>Avatar</td>
                                        <td>Member</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Akbar Imawan Dwi Cahya
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>akbarimawan18@gmail.com</td>
                                        <td>083657874637</td>
                                        <td>
                                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" disabled>Belum jadi Member</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>M. Ali Romadoni
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>akbarimawan18@gmail.com</td>
                                        <td>083657874637</td>
                                        <td>
                                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" disabled>Belum jadi Member</button>
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
                <table class="table table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Akbar Imawan Dwi Cahya</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>akbarimawan18@gmail.com</td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:</td>
                        <td>083657435687</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique maiores corrupti nobis eveniet molestias rem deleniti illo asperiores ex, quibusdam qui vitae ratione! At, hic.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>
                            <div class="badge badge-danger">Masih menunggu approve admin</div>
                        </td>
                    </tr>
                    <tr>
                        <td>Avatar</td>
                        <td>:</td>
                        <td>
                            <img alt="image" src="<?= base_url('') ?>assets/admin/img/avatar/avatar-1.png" width="80" class="rounded-circle m-2">
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