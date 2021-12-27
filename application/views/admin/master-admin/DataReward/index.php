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
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <td>Level</td>
                                        <td>Omzet Produk (Pcs)</td>
                                        <td>Cash</td>
                                        <td>Reward</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>10</td>
                                        <td>Rp. 100.000</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>2
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>100</td>
                                        <td>Rp. 500.000</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>3
                                            <div class="table-links">
                                                <a class="badge badge-info text-white" data-toggle="modal" data-target="#exampleModal" href="#">Lihat</a>
                                            </div>
                                        </td>
                                        <td>500</td>
                                        <td>Rp. 1.000.000</td>
                                        <td>Handphone</td>
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
                <h5 class="modal-title">Data Ms Glow</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Omzet Produk (pcs)</td>
                        <td>:</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Cash</td>
                        <td>:</td>
                        <td>Rp. 100.000</td>
                    </tr>
                    <tr>
                        <td>Reward</td>
                        <td>:</td>
                        <td>-</td>
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