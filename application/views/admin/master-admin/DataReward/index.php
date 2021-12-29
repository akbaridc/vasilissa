<section class="section">
    <div class="section-header">
        <h1>Data Reward</h1>
        <?= $breadcumbnya; ?>
    </div>

    <div class="section-body">
        <h2 class="section-title">Data Reward</h2>
        <p class="section-lead">
            Berikut ini adalah data seluruh Reward
        </p>

        <div class="row">
            <div id="flash-data" data-type="<?= isset($_SESSION['notif']['status']) ? $_SESSION['notif']['status'] : ''; ?>" data-message="<?= isset($_SESSION['notif']['title']) ? $_SESSION['notif']['title'] : ''; ?>"></div>
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="mr-auto">
                            <a href="<?= base_url('admin/DataReward/tambah') ?>" class="btn btn-primary"> <i class="fas fa-plus"></i> Tambah Data</a>
                            <a href="<?= base_url('admin/DataReward/cetak') ?>" class="btn btn-success"> <i class="fas fa-print"></i> Cetak Data</a>
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
                                    <tr class="text-center">
                                        <!-- <td width="5%"><input type="checkbox" id="check-all"></td> -->
                                        <td width="15%">Level</td>
                                        <td width="20%">Reward</td>
                                        <td width="10%">Point</td>
                                        <td width="10%">Status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($reward as $values) { ?>
                                        <tr>
                                            <!-- <td><input type="checkbox" class='check-item' id="id" name="id[]"></td> -->
                                            <td><?= $values->level ?>
                                                <div class="table-links">
                                                    <a class="badge badge-info text-white rewardModalDetail" style="cursor: pointer;" data-id="<?= $values->id ?>">Lihat</a>
                                                </div>
                                            </td>
                                            <td class="text-center"><?= $values->reward ?></td>
                                            <td class="text-center"><?= $values->point ?> Point</td>
                                            <td class="text-center">
                                                <?php if ($values->status == 1) { ?>
                                                    <button type="button" disabled class="btn btn-sm btn-success status">Aktif</button>
                                                <?php } else { ?>
                                                    <button type="button" disabled class="btn btn-sm btn-danger status">NonAktif</button>
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
<div class="modal fade" tabindex="-1" role="dialog" id="rewardModalDetail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Ms Glow</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td width="10%">Level</td>
                        <td width="2%">:</td>
                        <td width="100%" id="level_reward"></td>
                    </tr>
                    <tr>
                        <td>Reward Level</td>
                        <td>:</td>
                        <td id="reward_level"></td>
                    </tr>
                    <tr>
                        <td>point</td>
                        <td>:</td>
                        <td id="point_reward"></td>
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