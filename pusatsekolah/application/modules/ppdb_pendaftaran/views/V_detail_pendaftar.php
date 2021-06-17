<div class="app-main__inner">
    <form action="<?php echo base_url('ppdb_pendaftaran/tampildetail') ?>" method="POST" enctype="multipart/form-data">
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
                                    <h5 class="menu-header-title"><?php echo $tampil['nama_lengkap'] ?></h5>
                                    <h6 class="menu-header-subtitle"><?php echo $tampil['nisn'] ?></h6>
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
                                                            <div class="widget-heading">Profil Pendaftar</div>
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
                                                            <div>Nama : <?php echo $tampil['nama_lengkap'] ?></div>
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
                                                            <div>Tempat Lahir : <?php echo $tampil['tempat_lahir'] ?></div>
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
                                                            <div>Tanggal Lahir : <?php echo $tampil['tanggal_lahir'] ?></div>
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
                                                            <div>Alamat : <?php echo $tampil['alamat_lengkap'] ?>, <?php echo $tampil['kelurahan'] ?>, <?php echo $tampil['kecamatan'] ?>, <?php echo $tampil['kabupaten_kota'] ?>, <?php echo $tampil['provinsi'] ?> 
                                                            </div>
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
                                                            <div>Kode Pos : <?php echo $tampil['kode_pos'] ?></div>
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
                                                            <div>Asal Sekolah : <?php echo $tampil['asal_sekolah'] ?></div>
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
                                                            <div>No. Telephone : <?php echo $tampil['no_telephone'] ?></div>
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
                                                            <div>Email : <?php echo $tampil['email'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Profil Walimurid</div>
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
                                                            <div>Nama : <?php echo $tampil['namalengkap_wali'] ?></div>
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
                                                            <div>Alamat : <?php echo $tampil['alamatlengkap_wali'] ?></div>
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
                                                            <div>Pekerjaan Wali : <?php echo $tampil['pekerjaan_wali'] ?></div>
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
                                                            <div>No. Telephone Wali : <?php echo $tampil['telephone_wali'] ?></div>
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
                                                            <div>Email Wali : <?php echo $tampil['email_wali'] ?></div>
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
                                                        <div class="widget-heading">Berkas Pendaftaran</div>
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
                                                        <div>Kartu Pelajar : <?php echo $tampil['foto_kartupelajar'] ?></div>
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
                                                        <div>KTP Wali : <?php echo $tampil['foto_ktpwali'] ?></div>
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
                                                        <div>Kartu Keluarga : <?php echo $tampil['foto_kartukeluarga'] ?></div>
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
                                                        <div>Akta Kelahiran : <?php echo $tampil['foto_aktakelahiran'] ?></div>
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
                                                        <div>Nilai Raport : <?php echo $tampil['foto_nilairaport'] ?></div>
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
                                                        <div>Bukti Kelulusan : <?php echo $tampil['foto_buktikelulusan'] ?></div>
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
                                                        <div>Ijazah : <?php echo $tampil['foto_ijazah'] ?></div>
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
                                                        <div>SKHUN : <?php echo $tampil['foto_skhun'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 121px;"></div></div></div>
                            </div>
                            <!-- <div class="text-center d-block card-footer">
                                <a href="<?php echo base_url('pesan'); ?>">
                                    <button class="border-0 btn-transition btn btn-outline-success">Kirim Pesan</button>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>  