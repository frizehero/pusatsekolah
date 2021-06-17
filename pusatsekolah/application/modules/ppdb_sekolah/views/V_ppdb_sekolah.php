<div class="app-main__inner">
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"> </i>
                                                PPDB Sekolah
                                            </div>
                                        </div>
                                        <div class="p-0 card-body">
                                            <!-- <div class="dropdown-menu-header mt-0 mb-0">
                                                <div class="dropdown-menu-header-inner bg-heavy-rain" style="height: 200px;">
                                                    <div class="menu-header-image" style="background-image: url('assets/pamflet_ppdb/');"></div>
                                                </div>
                                            </div> -->
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-0">
                                                        <span>Informasi PPDB</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" href="<?php echo base_url('ppdb_panitia'); ?>">
                                                        <span>Panitia PPDB</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" href="<?php echo base_url('ppdb_pendaftaran'); ?>">
                                                        <span>Pendaftaran</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                                                    <?php $no=1; foreach ($tampil AS $rowP ) { ?>
                                                        <!-- <div class="scroll-area-sm">
                                                            <div class="scrollbar-container"> -->
                                                                <div class="p-3">
                                                                    <div class="notifications-box">
                                                                        <div align="center">
                                                                            <img src="<?php echo base_url() ?>assets/ppdb/<?php echo $rowP->pamflet_ppdb;?>"  style="width: 600px; height: auto;">
                                                                        </div>
                                                                        <br><br>
                                                                        <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Alamat Sekolah</h2>
                                                                                        <p><?php echo $rowP->alamat_sekolah; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">No. Telephone Sekolah</h2>
                                                                                        <p><?php echo $rowP->telp_sekolah; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Email Sekolah</h2>
                                                                                        <p><?php echo $rowP->email_sekolah; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Website Sekolah</h2>
                                                                                        <p><?php echo $rowP->website_sekolah; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Deskripsi PPDB</h2>
                                                                                        <p><?php echo $rowP->deskripsi_ppdb; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Fasilitas Sekolah</h2>
                                                                                        <p><?php echo $rowP->fasilitas_sekolah; ?></p>
                                                                                        <span class="vertical-timeline-element-date"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                                <div>
                                                                                    <span class="vertical-timeline-element-icon bounce-in">
                                                                                        <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                                    </span>
                                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                                        <h2 class="timeline-title">Alur PPDB</h2>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12 col-lg-6 col-xl-4">
                                                                                                <h6 class="timeline-subtitle">Pendaftaran PPDB</h6>
                                                                                                <p><?php echo $rowP->pendaftaran_ppdb; ?></p>
                                                                                            </div>
                                                                                            <div class="col-md-12 col-lg-6 col-xl-4">
                                                                                                <h6 class="timeline-subtitle">Validasi / Pemberkasan</h6>
                                                                                                <p><?php echo $rowP->validasi_pemberkasan; ?></p>
                                                                                            </div>
                                                                                            <div class="col-md-12 col-lg-6 col-xl-4">
                                                                                                <h6 class="timeline-subtitle">Verifikasi / Daftar Ulang</h6>
                                                                                                <p><?php echo $rowP->verifikasi_daftarulang; ?></p>
                                                                                            </div>
                                                                                                <span class="vertical-timeline-element-date"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>
                                                                        <!-- <div class="col-md-12 col-lg-6 col-xl-4">
                                                                            <div class="card-hover-shadow card-border mb-3 card">
                                                                                <div class="dropdown-menu-header">
                                                                                    <div class="dropdown-menu-header-inner bg-warning">
                                                                                        <div class="menu-header-content">
                                                                                            <div><a href="javascript:void(0);" class="avatar-icon-wrapper btn-hover-shine avatar-icon-xl">
                                                                                                    <div class="avatar-icon rounded">
                                                                                                        <img src="assets/images/avatars/3.jpg" alt="Avatar 5">
                                                                                                    </div>
                                                                                                </a>
                                                                                            </div>
                                                                                            <div>
                                                                                                <h5 class="menu-header-title"><?php echo $rowP->nama_panitia; ?></h5>
                                                                                                <h6 class="menu-header-subtitle"><?php echo $rowP->tugas_panitia; ?></h6>
                                                                                            </div>
                                                                                            <div class="menu-header-btn-pane">
                                                                                                <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                                                                <button class="btn-icon btn-icon-only btn btn-primary btn-sm">
                                                                                                    <i class="pe-7s-config btn-icon-wrapper"> </i>
                                                                                                </button>
                                                                                            </div> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <p> Nama Panitia : <?php echo $rowP->nama_panitia; ?>
                                                                                        <br>
                                                                                        No.Telephone Panitia : <?php echo $rowP->telephone_panitia; ?>
                                                                                        <br>
                                                                                        Email Panitia : <?php echo $rowP->email_panitia; ?>
                                                                                    </p>
                                                                                    <p class="mb-0">Since the 1500s, when an unknown printer took a galley of type and scrambled.
                                                                                    </p>
                                                                                </div>
                                                                                <div class="d-block text-right card-footer">
                                                                                    <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                                                                    <button class="btn-shadow-primary btn btn-primary btn-lg">Hapus Panitia</button>
                                                                                </div>
                                                                            </div>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            <!-- </div>
                                                        </div> -->
                                                    <?php $no++;} ?>
                                                </div>
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-btn text-center pt-4 pb-3 nav-item">
                                                        <a class="btn-shadow btn-wide btn-pill btn btn-dark text-white" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                                            <!-- <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span> -->
                                                            Hapus PPDB
                                                        </a>
                                                        <!-- Modal Hapus -->
                                                        <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <form action="<?php echo base_url('ppdb_sekolah/hapus') ?>" method="POST" enctype="multipart/form-data">
                                                                        <div class="modal-body">
                                                                            <!--Modal body-->
                                                                            <p class="text-semibold text-main"></p>
                                                                            <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->deskripsi_ppdb ?></b> ? </p>

                                                                            <input name="id" type="hidden" value="<?php echo $rowP->id_ppdb ?>" class="form-control">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                                                            <button class="btn btn-primary" type="submit">Hapus</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="<?php echo base_url('ppdb_sekolah/editview/' . encrypt_url($rowP->id_ppdb)); ?>" class="btn-shadow btn-wide btn-pill btn btn-dark">
                                                            <!-- <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span> -->
                                                            Edit PPDB
                                                        </a>
                                                        <!-- <a href="<?php echo base_url('ppdb_sekolah/tambahview'); ?>" class="btn-shadow btn-wide btn-pill btn btn-dark"> -->
                                                            <!-- <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span> -->
                                                            <!-- Tambah Informasi PPDB
                                                        </a> -->
                                                    </li>
                                                </ul>
                                                <!-- <div class="tab-pane" id="tab-animated-1" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at
                                                                                    <b class="text-danger">12:00 PM</b>
                                                                                </p>
                                                                                <p>Yet another one, at
                                                                                    <span class="text-success">15:00 PM</span>
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                                    incididunt ut labore et dolore magna elit enim at
                                                                                    minim veniam quis nostrud
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                                    minim veniam quis nostrud
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at
                                                                                    <a href="javascript:void(0);">12:00 PM</a>
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <p>Another meeting today, at
                                                                                    <b class="text-danger">12:00 PM</b>
                                                                                </p>
                                                                                <p>Yet another one, at
                                                                                    <span class="text-success">15:00 PM</span>
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                                    incididunt ut labore et dolore magna elit enim at
                                                                                    minim veniam quis nostrud
                                                                                </p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div>
                                                                            <span class="vertical-timeline-element-icon bounce-in">
                                                                                <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                            </span>
                                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                                <h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                                    minim veniam quis nostrud</p>
                                                                                <span class="vertical-timeline-element-date"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-animated-2" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="card-body">
                                                    <div class="app-inner-layout__content card">
                                                <div>
                                                    <div class="bg-white">
                                                        <div class="table-responsive">
                                                            <table class="text-nowrap table-lg mb-0 table table-hover">
                                                                <tbody>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">John Smith</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">But I must explain to you how all this mistaken idea
                                                                            of denouncing pleasure ...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">But I must explain to you how all this mistaken idea
                                                                            of denouncing pleasure ...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                            
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">Create stunning UIs for your pages with these layout
                                                                            components...</td>
                                                                            <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">Etiam sit amet orci eget eros faucibus...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/6.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Alina Mcloughlin</div>
                                                                                        <div class="widget-subheading">Last seen online 15 minutes ago</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/7.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">But I must explain to you how all this mistaken idea
                                                                            of denouncing pleasure ...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Eliot Huber</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">But I must explain to you how all this mistaken idea
                                                                            of denouncing pleasure ...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        
                                                                        <td>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Ella-Rose Henry</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-left">Create stunning UIs for your pages with these layout components...</td>
                                                                        <td class="text-left">Nullam dictum felis eu pede mollis pretium.</td>
                                                                        <td><a href="<?php echo base_url('ppdb/editview/'. encrypt_url($rowP->id_ppdb)); ?>" class="btn btn-primary"><i class="fa fa-pen fa-w-16"></i></a>
                                                                        </td>
                                                                        <td><button class="btn btn-warning" data-toggle="modal" data-target="#hapus1">
                                                                        <i class="fa fa-trash fa-w-16"></i>
                                                                        </button></td>
                                                                       
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
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>