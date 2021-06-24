<div class="app-main__inner">
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <br><br>
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-warning"></div>
                                            <i class="pe-7s-bell text-warning"></i>
                                        </div>
                                        <div class="widget-heading fsize-1 pt-2 opacity-10 text-dark font-weight-bold"><span>Jumlah Followers</span>
                                        </div>
                                        <div class="widget-subheading fsize-2 pt-2 opacity-10 text-warning font-weight-bold"><?php echo $totalalumni?></div>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-1"></div>
                                    </div>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <br><br>
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-danger"></div>
                                            <i class="lnr-graduation-hat text-danger"></i>
                                        </div>
                                        <div class="widget-heading fsize-1 pt-2 opacity-10 text-dark font-weight-bold"><span>Alumni Terdaftar</span></div>
                                        <div class="widget-subheading fsize-2 pt-2 opacity-10 text-danger font-weight-bold"><?php echo $totalalumni?></div>
                                        <br><br>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-xl-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-chart-content">
                                        <br><br>
                                        <div class="icon-wrapper rounded">
                                            <div class="icon-wrapper-bg bg-info"></div>
                                            <i class="ion-android-contact text-info"></i>
                                        </div>
                                        <div class="widget-heading fsize-1 pt-2 opacity-10 text-dark font-weight-bold"><span>Guru Pengajar Terdaftar</span></div>
                                        <div class="widget-subheading fsize-2 pt-2 opacity-10 text-info font-weight-bold"><?php echo $totalpengajar?></div>
                                        <br><br>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparklines-simple-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Statistik Mata Pelajaran</h5>
                                        <canvas id="myChart"></canvas>
                                            <?php
                                            //Inisialisasi nilai variabel awal
                                            $nama_mapel= "";
                                            $jumlah=null;
                                            foreach ($hasil as $item)
                                            {
                                                $gur=$item->mapel_guru;
                                                $nama_mapel .= "'$gur'". ", ";
                                                $jum=$item->total;
                                                $jumlah .= "$jum". ", ";
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Statistik Data Alumni</h5>
                                        <div id="piechart" style="width: 470px; height: 228px;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 card">
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="pe-7s-users text-dark opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">KUNJUNGAN</div>
                                            <div class="widget-numbers"><?php echo $totalalumni?></div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                    <br><br>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class="lnr-heart text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">LIKE</div>
                                            <div class="widget-numbers"><span><?php echo $totalalumni?></span></div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                    <br>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="ion-android-alert text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">REPORT</div>
                                            <div class="widget-numbers"><span><?php echo $totalalumni?></span></div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="lnr-inbox text-dark opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">INBOX MASUK</div>
                                            <div class="widget-numbers"><?php echo $totalalumni?></div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                    <br><br>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class="lnr-bookmark text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">PENDAFTARAN TERAKHIR</div>
                                            <div class="widget-numbers"><span><?php echo $totalalumni?></span></div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                    <br>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <br>
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="pe-7s-note2 text-white"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-heading">NOTIFIKASI</div>
                                            <div class="widget-numbers"><span><?php echo $totalalumni?></span></div>
                                            <div class="widget-subheading">
                                                Pembaruan
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                            <div class="card">
                                <div class="no-gutters row">
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Event</div>
                                                                    <div class="widget-subheading">Event Terlaksana dan Terupload</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-primary"><?php echo $totalevent?></div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 43%;">
                                                                    </div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    <div class="sub-label-left"></div>
                                                                    <div class="sub-label-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Kerjasama</div>
                                                                    <div class="widget-subheading">Kerjasama Dengan Perusahaan</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-success"><?php echo $totalalumni?></div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-success" role="progressbar"
                                                                        aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 43%;">
                                                                    </div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    <div class="sub-label-left"></div>
                                                                    <div class="sub-label-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Produk</div>
                                                                    <div class="widget-subheading">Total Penjualan 
                                                                        <br>
                                                                    dan Pembelian</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-danger">
                                                                        <small></small>
                                                                        <?php echo $totalproduk?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                                        aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 43%;">
                                                                    </div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    <div class="sub-label-left"></div>
                                                                    <div class="sub-label-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-3">
                                        <div class="pt-0 pb-0 card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Prestasi</div>
                                                                    <div class="widget-subheading">Pencapaian Sekolah</div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-focus"><?php echo $totalprestasi?></div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper">
                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-focus" role="progressbar"
                                                                        aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 43%;">
                                                                    </div>
                                                                </div>
                                                                <div class="progress-sub-label">
                                                                    <div class="sub-label-left"></div>
                                                                    <div class="sub-label-right"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?php echo base_url()?>/assets/js/Chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_mapel; ?>],
            datasets: [{
                label:'Data Mapel Guru ',
                backgroundColor: ['#00a8ff', '#4cd137', '#8c7ae6','#fbc531','#e84118','#FDA7DF','#0652DD','#EE5A24','#C4E538','#6F1E51'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['jenis kelamin', 'Total'],
            <?php
            foreach ($dataSiswa as $siswa) {
                echo "['" . $siswa['jk_alumni'] . "'," . $siswa['total'] . "],";
            }
            ?>
        ]);
        var options = {
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>