<div class="app-main__inner">
    <?php tampilnotif() ?>
    <form action="<?php echo base_url('data_alumni/tampildetail') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card-shadow-primary card-border mb-3 card">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-primary">
                            <br><br>
                            <div class="menu-header-image" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city2.jpg');"></div>
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper avatar-icon-lg">
                                    <div class="avatar-icon rounded btn-hover-shine">
                                        <img src="<?php echo base_url() ?>assets/images/avatars/23.png" alt="Avatar 5">
                                    </div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title"><?php echo $tampil['nama_alumni'] ?></h5>
                                    <h6 class="menu-header-subtitle">Alumni <?php echo $tampil['thlulus_alumni'] ?></h6>
                                </div>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-shadow-primary card-border mb-3 card">
                            <div>
                                <div>
                                    <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Profil</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Nama : <?php echo $tampil['nama_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-id text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>NISN : <?php echo $tampil['nisn'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-map-2 text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Tempat Lahir : <?php echo $tampil['tmplahir_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-date text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Tanggal Lahir : <?php echo $tampil['tgllahir_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-home text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Alamat : <?php echo $tampil['alamatlengkap_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-ribbon text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Status : <?php echo $tampil['status_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-notebook text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Sekolah/Tempat Bekerja : <?php echo $tampil['sekolah_bekerja'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 121px;"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-6">
                        <div class="card-shadow-primary card-border mb-3 card">
                            <div>
                                <div>
                                    <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Riwayat Pendidikan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-study text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>
                                                            <?php echo $tampil['riwayat_sd'] ?>
                                                            <br>
                                                            <?php echo $tampil['riwayat_smp'] ?>
                                                            <br>
                                                            <?php echo $tampil['riwayat_sma'] ?>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Sosial Media</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user-female text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Instagram : <?php echo $tampil['instagram_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user-female text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Facebook : <?php echo $tampil['facebook_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user-female text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div>Twitter : <?php echo $tampil['twitter_alumni'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 121px;"></div></div></div>
                            </div>
                            <div class="text-center d-block card-footer">
                                <a href="<?php echo base_url('pesan'); ?>">
                                    <button class="border-0 btn-transition btn btn-outline-success">Kirim Pesan</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>  