<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('master-admin/DataUser') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color: #c72e20;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-user float-left" style="font-size: 50px;color:#ffff;"></i>
                                    </div>
                                    <div class="media-body text-right text-white">
                                        <h3><?= $user ?> User</h3>
                                        <span>Total User</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('master-admin/DataMember') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color: #589ae0">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex text-white">
                                    <div class="align-self-center">
                                        <i class="fas fa-user-check float-left" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><?= $member ?> Member</h3>
                                        <span>Total Member</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('master-admin/DataProduk') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color: #a8e4a0;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex text-white">
                                    <div class="align-self-center">
                                        <i class="fas fa-box-open float-left" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><?= $produk ?> Produk</h3>
                                        <span>Total Produk</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('master-admin/DataProduk') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color: #f8b500;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex text-white">
                                    <div class="align-self-center">
                                        <i class="fas fa-people-carry float-left" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><?= $produk_terjual ?> Terjual</h3>
                                        <span>Total Produk Terjual</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('master-admin/DataReward') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color: #f4511e;">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex text-white">
                                    <div class="align-self-center">
                                        <i class="fas fa-gift float-left" style="font-size: 50px;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><?= $reward ?> Reward</h3>
                                        <span>Total Reward</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card" style="background-color: #32cd32;">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch text-white">
                                <div class="align-self-center">
                                    <i class="fas fa-gifts warning font-large-2 mr-2" style="font-size: 50px;"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Total Reward</h4>
                                    <span>pengeluaran barang reward</span>
                                </div>
                                <div class="align-self-center">
                                    <h1>3</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card" style="background-color: #1ab621;">
                    <div class="card-content">
                        <div class="card-body cleartfix">
                            <div class="media align-items-stretch text-white">
                                <div class="align-self-center">
                                    <h1 class="mr-2">Rp. 4.450.000</h1>
                                </div>
                                <div class="media-body">
                                    <h4>Total Cash</h4>
                                    <span>Pengeluaran Bonus cash</span>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-donate success font-large-2" style="font-size: 50px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <label>Filter berdasarkan tahun</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="tahun" id="tahun" class="form-control">
                                        <option value="1">2018</option>
                                        <option value="2">2019</option>
                                        <option value="3">2020</option>
                                        <option value="4">2021</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-icon btn-primary"><i class="fas fa-filter"> Filter</i></button>
                                </div>
                            </div>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <label>Filter berdasarkan bulan</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="month" name="month" id="month" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-icon btn-primary"><i class="fas fa-filter"> Filter</i></button>
                                </div>
                            </div>
                            <canvas id="examChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <canvas id="doughnut-chart" width="800" height="450"></canvas>
                            <br>
                            <b class="text-center"><span class="fa fa-square"></span> Total biaya cash yang harus disiapkan <br> Rp 4.500.000,00</b><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    new Chart(document.getElementById("lineChart"), {
        type: 'line',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: "Total penjualan",
                backgroundColor: ["#6777ef"],
                data: [560000, 450000, 230000, 790000, 470000, 370000, 670000, 750000, 800000, 456000, 226000, 650000],
                lineTension: 0,
                fill: false,
                borderColor: 'blue',
                backgroundColor: 'transparent',
                borderDash: [5, 5],
                pointBorderColor: 'blue',
                pointBackgroundColor: 'rgba(0,0,255,0.8)',
                pointRadius: 5,
                pointHoverRadius: 10,
                pointHitRadius: 30,
                pointBorderWidth: 2,
                pointStyle: 'rectRounded'
            }]
        },
        options: {
            responsive: true,
            legend: {
                display: false,
                position: 'top',
            },
            title: {
                display: true,
                text: 'Penjualan produk pertahun'
            }
        }
    });

    new Chart(document.getElementById("examChart"), {
        type: 'bar',
        data: {
            labels: ["Ms Glow", "Scarlet", "Wardah", "Emina"],
            datasets: [{
                label: "Total Penjualan",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9"],
                data: [560000, 450000, 230000, 790000]
            }]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Penjualan produk perbulan'
            }
        }
    });


    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: ["Total Keseluruhan Penjualan Produk"],
            datasets: [{
                label: "Total Penjualan Produk",
                backgroundColor: ["#3e95cd"],
                data: [4450000]
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Total Penjualan Produk'
            }
        }
    });
</script>