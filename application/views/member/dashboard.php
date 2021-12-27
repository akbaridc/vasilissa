<section class="section">
    <div class="section-header">
        <h1>Dashboard Member Vasillissa</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
                <div class="alert alert-secondary alert-has-icon">
                    <div class="alert-icon"><i class="fas fa-info" style="color:#000"></i></div>
                    <div class="alert-body">
                        <div class="alert-title" style="color:#000">Anda sekarang berada di <span>Level 3</span></div>
                        <p style="color:#000">Tingkatkan terus penjualan dengan membangun koneksi member kamu dan menangkan hadiah reward !</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('member/DataProduk/paket') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color:#c72e20">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-box-open float-left" style="font-size: 50px;color:#ffff;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 style="color:#ffff;">
                                            <?php
                                            $paketi = $this->db->select("COUNT(mp.id) as id")
                                                ->from("member_produk_tbl mp")
                                                ->join("produk_tbl p", "p.id_pd = mp.id_produk")
                                                ->join("member_tbl m", "m.id_member = mp.id_member")
                                                ->where("mp.id_member", $this->session->userdata('id'))
                                                ->where("p.jenis", 1)
                                                ->get()->row();
                                            ?>
                                            <?= $paketi->id ?> Paket
                                        </h3>
                                        <span style="color:#ffff"><b>Total Produk Paket</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('member/DataProduk/item') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color:#d1c936">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-box float-left" style="font-size: 50px;color:#ffff;"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 style="color:#ffff;">
                                            <?php
                                            $itemi = $this->db->select("COUNT(mp.id) as id")
                                                ->from("member_produk_tbl mp")
                                                ->join("produk_tbl p", "p.id_pd = mp.id_produk")
                                                ->join("member_tbl m", "m.id_member = mp.id_member")
                                                ->where("mp.id_member", $this->session->userdata('id'))
                                                ->where("p.jenis", 2)
                                                ->get()->row();
                                            ?>
                                            <?= $itemi->id ?> Item
                                        </h3>
                                        <span style="color:#ffff"><b>Total Produk Item</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-6 col-12">
                <a href="<?= base_url('admin/DataProduk') ?>" class="text-decoration-none text-dark">
                    <div class="card" style="background-color:#589ae0">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="fas fa-users float-left" style="font-size: 50px;color:#ffff"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 style="color:#ffff">12 Member</h3>
                                        <span style="color:#ffff"><b>Total Member dimiliki</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <canvas id="examChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color:#fff">
                    <div class="card-content">
                        <div class="card-body" style="text-align:center">
                            <div>
                                <h4 style="color:#000"><b>POINT REWARD </b> </h4>
                                <hr>
                                <!-- <br> -->
                                <div style="overflow-y: auto;max-height:260px">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr style="background-color:#c5d1c8">
                                                <td><b>No.</b></td>
                                                <td><b>Level</b></td>
                                                <td><b>Reward</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. </td>
                                                <td>Level 1</td>
                                                <td>12 Point</td>
                                            </tr>
                                            <tr>
                                                <td>2. </td>
                                                <td>Level 2</td>
                                                <td>10 Point</td>
                                            </tr>
                                            <tr>
                                                <td>3. </td>
                                                <td>Level 3</td>
                                                <td>9 Point</td>
                                            </tr>
                                            <!-- <tr>
                                        <td>4. </td>
                                        <td>Level 4</td>
                                        <td>6 Point</td>
                                      </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <h5 style="color:#000"><b>Total Point : 31 Point <i class="fas fa-star" style="color:yellow;font-size:20px"></i></b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    new Chart(document.getElementById("examChart"), {
        type: 'bar',
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei"],
            datasets: [{
                label: "Jumlah Produk",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#589ae0"],
                data: [2, 3, 4, 5, 1]
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Grafik Produk Perbulan'
            }
        }
    });
</script>