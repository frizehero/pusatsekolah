<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-9 p-0 mb-3">
                    <div class="search-wrapper active">
                        <div class="input-holder" style="background-color: #fff;">
                            <?php echo form_open('data_alumni/search') ?>
                                <input type="text" name="nama" class="search-input" placeholder="Cari...">
                                <button class="search-icon" style="background-color: #fff;"><span></span></button>
                            <?php echo form_close() ?>
                        </div>
                    </div>  
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <div class="mb-3 mr-3 btn-group">
                        <button type="button" aria-haspopup="true" aria-expanded="false"
                            data-toggle="dropdown" class="dropdown-toggle btn-shadow btn btn-primary">Filter
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                            <h6 tabindex="-1" class="dropdown-header">Filter</h6>
                            <div class="nav-item-divider nav-item"></div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Semua
                                    </label>
                                </div>
                            </div>
                            <div class="nav-item-divider nav-item"></div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Angkatan
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Tahun Lulus
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Alumni Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Alumni Laki-Laki
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Alumni Terpopuler
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Alumni Berprestasi Akademik
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Alumni Berprestasi Non-Akademik
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="card mb-3 widget-content bg-night-fade">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Alumni Perempuan</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><?php echo $totalperempuan?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Alumni Laki-Laki</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><?php echo $totallaki?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="card mb-3 widget-content bg-happy-green">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Alumni</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><?php echo $totalalumni?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php tampilnotif() ?>
    <div class="row">
        <?php $no = 1;
        foreach ($tampilkan as $rowP) { ?>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card-shadow-primary card-border mb-3 card">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-dark">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon">
                                        <img src="<?php echo base_url() ?>assets/images/avatars/18.png" alt="Avatar 5">
                                    </div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title"><?php echo $rowP->nama_alumni; ?></h5>
                                    <h6 class="menu-header-subtitle">Alumni <?php echo $rowP->thlulus_alumni; ?></h6>
                                </div>
                                <div class="menu-header-btn-pane pt-1">
                                    <a href="<?php echo base_url('data_alumni/detailprofil/' . encrypt_url($rowP->id_alumni)); ?>">
                                        <button class="btn-icon btn btn-warning btn-sm">Profil Lengkap</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left center-elem mr-2">
                                        <i class="pe-7s-user text-muted fsize-2"></i>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Nama : <?php echo $rowP->nama_alumni;?></div>
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
                                        <div class="widget-heading">Tempat Lahir : <?php echo $rowP->tmplahir_alumni; ?></div>
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
                                        <div class="widget-heading">Tanggal Lahir : <?php echo $rowP->tgllahir_alumni; ?></div>
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
                                        <div class="widget-heading">Alamat : <?php echo $rowP->alamatlengkap_alumni; ?></div>
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
                                        <div class="widget-heading">Status : <?php echo $rowP->status_alumni; ?></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center d-block card-footer">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus Alumni</button>
                        <a href="<?php echo base_url('pesan'); ?>">
                            <button class="border-0 btn-transition btn btn-outline-success">Kirim Pesan</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url('data_alumni/hapus') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_alumni ?></b> ? </p>

                                <input name="id" type="hidden" value="<?php echo $rowP->id_alumni ?>" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                <button class="btn btn-primary" type="submit">Hapus</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        <?php $no++;
        } ?>
    </div>
    <?php echo  $pagination; ?>
</div>
