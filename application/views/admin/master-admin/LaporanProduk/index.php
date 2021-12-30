<section class="section">
    <div class="section-header">
        <h1>Laporan Produk</h1>
        <?= $breadcumbnya; ?>
    </div>
    <div class="section-body">
        <h2 class="section-title">Laporan Produk Terjual</h2>
        <p class="section-lead">
            Berikut laporan produk terjual setiap bulannya
        </p>

        <div class="row mt-sm-4">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <input type="month" class="form-control mb-2">
                            </div>
                            <div class="col-md-3">
                                <select name="" id="" class="form-control mb-2">
                                    <option value="">Paket</option>
                                    <option value="">Item</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-icon btn-primary" style="width: 100%;"><i class="fas fa-filter"> Filter</i></button>
                            </div>

                            <div class="col-md-12 mt-3">
                                <h4>Hasil Filter : <span style="font-size: 15px;">Bulan <b>Desember</b>, Produk <b>Paket</b></span></h4>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped" id="test">
                                <thead class="text-white bg-primary">
                                    <tr>
                                        <td widtd="7%">No.</td>
                                        <td>Kode Produk</td>
                                        <td>Nama Produk</td>
                                        <td>Tanggal</td>
                                        <td>Qty</td>
                                        <td>Harga</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PKT-001</td>
                                        <td>Paket Vasilissa 1</td>
                                        <td>15 Desember 2021</td>
                                        <td>3</td>
                                        <td>Rp. 790.768</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>PKT-002</td>
                                        <td>Paket Vasilissa 2</td>
                                        <td>10 Desember 2021</td>
                                        <td>5</td>
                                        <td>Rp. 1.790.768</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#test').DataTable();
    });
</script>