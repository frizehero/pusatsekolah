
<div class="app-main__inner p-0">
    <div class="tabs-animation">
        <div class="col-mb-12">
            <div class="card-shadow-primary card-border text-white card bg-light">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner" style="background-image: url('<?php echo base_url() ?>assets/images/originals/smkn1p.jpg');">
                        <div class="menu-header-btn-pane pt-5">
                            <div class="pt-5">
                                <div class="pt-5">
                                    <div class="pt-5">
                                            <div class="widget-content p-1">
                                                <div class="text-right d-block">
                                                    <div class="btn-group dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                            <b class="btn-shadow-dark btn-wider btn btn-primary">Edit Sampul</b>
                                                        </button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                                            class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                            <button type="button" tabindex="0" class="dropdown-item">
                                                                <i class="dropdown-icon pe-7s-copy-file"></i><span>Pilih Foto</span>
                                                            </button>
                                                            <button type="button" tabindex="0" class="dropdown-item">
                                                                <i class="dropdown-icon pe-7s-expand1"> </i><span>Ubah Posisi</span>
                                                            </button>
                                                            <div tabindex="-1" class="dropdown-divider"></div>
                                                            <button type="button" tabindex="0" class="dropdown-item">
                                                                <i class="dropdown-icon pe-7s-trash"> </i><span>Hapus</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="widget-content-left card-footer">
                            <div class="widget-content-left mr-3 avatar-icon-xl">
                                <a href="#">
                                <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                </a>
                            </div>
                            <div class="widget-content-left" style="color: black;">
                                <div class="widget-heading"><b>SMK Negeri 1 Kota Probolinggo</b></div>
                                <div class="widget-subheading">2,391 Followers</div>
                                <select id="css-stars">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="btn-actions-pane-right">
                                <a href="tampilan-pesan.html">
                                    <button class="btn-shadow-dark btn btn-primary">Pesan</button>
                                </a>
                                <a href="tampilan-tentang-sekolah.html">
                                    <button class="btn-shadow-dark btn btn-primary">Tentang Sekolah</button>
                                </a>
                                    <button class="btn-shadow-dark btn btn-primary">Bagikan Sekolah</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <?php tampilnotif()?>
    <div class="app-main__inner">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                            <ul class="nav">
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-0" class="active nav-link dropdown-item">
                                        Sejarah Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-1" class="nav-link dropdown-item">
                                        Tentang Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-2" class="nav-link dropdown-item">
                                        Kontak Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-3" class="nav-link dropdown-item">
                                        Alamat Sekolah
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <?php $no=1; foreach ($tampilkompetensi AS $rowP ) { ?>
                    <div class="col-md-8">
                        <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="card-title">Sejarah Sekolah</h5>
                                            <?php echo $rowP->sejarah_sekolah;?>
                                        </div>
                                        <button class="btn-shadow btn-wide float-right btn-pill btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $no ?>">
                                            <a>Edit</a>
                                        </button>
                                        <!-- Modal Edit Popup -->
                                        <div class="modal fade" id="edit<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Sejarah Sekolah<?php echo $idnya?><?php echo $idsekolah['id_sekolah']?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="<?php echo base_url('beranda_as/edit') ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <textarea rows="1" class="form-control autosize-input" placeholder="Ketik Sejarah Sekolah disini" style="max-height: 200px; height: 265px; margin-top: 0px; margin-bottom: 0px;"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="button" class="btn btn-primary">Perbarui</button>
                                                        </div>
                                                        </form>

                                                        </div>
                                                    </div>
                                                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Tentang Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Jenjang Sekolah</b> :
                                                                <?php echo $rowP->jjg_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Status Sekolah</b> :
                                                                <?php echo $rowP->stt_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>NPSN Sekolah</b> :
                                                                <?php echo $rowP->npsn_sekolah;?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Akreditasi Sekolah</b> :
                                                                <?php echo $rowP->akre_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Deskripsi Sekolah</b> :
                                                                <?php echo $rowP->desk_sekolah;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Kontak Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Email </b> :
                                                                <?php echo $rowP->email;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Telephone </b> :
                                                                <?php echo $rowP->telphone;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Facebook </b> :
                                                                <?php echo $rowP->facebook;?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Instagram </b> :
                                                                <?php echo $rowP->instagram;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Twitter </b> :
                                                                <?php echo $rowP->twitter;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Link Website Sekolah </b> :
                                                                <?php echo $rowP->link_web;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Link Video Profil Sekolah</b> :
                                                                <?php echo $rowP->link_video;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-3" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Alamat Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Alamat Lengkap</b> :
                                                                <?php echo $rowP->almtlengkap_sekolah	;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Provinsi</b> :
                                                                <?php echo $rowP->provinsi_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kota/Kabupaten</b> :
                                                                <?php echo $rowP->kota_kab_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kelurahan</b> :
                                                                <?php echo $rowP->kel_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kecamatan</b> :
                                                                <?php echo $rowP->kec_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kode Pos</b> :
                                                                <?php echo $rowP->kpos_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $no++;} ?>
<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-left">
                <div class="footer-dots">
                    <div class="dropdown">
                        <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                            <i class="dot-btn-icon lnr-bullhorn icon-gradient bg-mean-fruit"></i>
                            <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Notifications</div>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                            class="dropdown-menu-xl rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header mb-0">
                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                    <div class="menu-header-image opacity-1" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city3.jpg');"></div>
                                    <div class="menu-header-content text-dark">
                                        <h5 class="menu-header-title">Notifications</h5>
                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                    </div>
                                </div>
                            </div>
                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                <li class="nav-item">
                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
                                        <span>Events</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
                                        <span>System Errors</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div class="notifications-box">
                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Yet another one, at 
                                                                        <span class="text-success">15:00 PM</span>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release
                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                    </h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Something not important
                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/1.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/2.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/4.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/5.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/9.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/7.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="avatar-icon-wrapper avatar-icon-sm">
                                                                                <div class="avatar-icon">
                                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/8.jpg" alt="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                            </div>
                                                                        </div>
                                                                    </h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">This dot has an info state</h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Yet another one, at 
                                                                        <span class="text-success">15:00 PM</span>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release
                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                    </h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">This dot has a dark state</h4>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-events-header1" role="tabpanel">
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
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
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
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="no-results pt-3 pb-0">
                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                    <span class="swal2-success-line-tip"></span>
                                                    <span class="swal2-success-line-long"></span>
                                                    <div class="swal2-success-ring"></div>
                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                </div>
                                                <div class="results-subtitle">All caught up!</div>
                                                <div class="results-title">There are no system errors!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dots-separator"></div>
                    <div class="dropdown">
                        <a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                            <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                    <div class="menu-header-image opacity-05" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city2.jpg');"></div>
                                    <div class="menu-header-content text-center text-white">
                                        <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                    </div>
                                </div>
                            </div>
                            <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large US"></span> USA
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large FR"></span>France
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large ES"></span>Spain
                            </button>
                            <div tabindex="-1" class="dropdown-divider"></div>
                            <h6 tabindex="-1" class="dropdown-header">Others</h6>
                            <button type="button" tabindex="0" class="dropdown-item active">
                                <span class="mr-3 opacity-8 flag large DE"></span>Germany
                            </button>
                            <button type="button" tabindex="0" class="dropdown-item">
                                <span class="mr-3 opacity-8 flag large IT"></span> Italy
                            </button>
                        </div>
                    </div>
                    <div class="dots-separator"></div>
                    <div class="dropdown">
                        <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                            <i class="dot-btn-icon lnr-pie-chart icon-gradient bg-love-kiss"></i>
                            <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">Notifications</div>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-premium-dark">
                                    <div class="menu-header-image" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/abstract4.jpg');"></div>
                                    <div class="menu-header-content text-white">
                                        <h5 class="menu-header-title">Users Online</h5>
                                        <h6 class="menu-header-subtitle">Recent Account Activity Overview</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-chart">
                                <div class="widget-chart-content">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                                        <i class="lnr-users text-white"></i>
                                    </div>
                                    <div class="widget-numbers">
                                        <span>344k</span>
                                    </div>
                                    <div class="widget-subheading pt-2"> Profile views since last login</div>
                                    <div class="widget-description text-danger">
                                        <span class="pr-1"> <span>176%</span></span>
                                        <i class="fa fa-arrow-left"></i>
                                    </div>
                                </div>
                                <div class="widget-chart-wrapper">
                                    <div id="dashboard-sparkline-carousel-4-pop"></div>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider mt-0 nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                        <i class="fa fa-cog fa-spin mr-2"></i> View Details
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-footer-right">
                <ul class="header-megamenu nav">
                    <li class="nav-item">
                        <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                            Footer Menu
                            <i class="fa fa-angle-up ml-2 opacity-8"></i>
                        </a>
                        <div class="rm-max-width rm-pointers">
                            <div class="d-none popover-custom-content">
                                <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-6">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Overview</li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span>Contacts</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                            <i class="nav-link-icon lnr-book"></i>
                                                            <span>Incidents</span>
                                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">
                                                            <i class="nav-link-icon lnr-picture"></i>
                                                            <span>Companies</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a disabled="" class="nav-link disabled">
                                                            <i class="nav-link-icon lnr-file-empty"></i>
                                                            <span>Dashboards</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6 col-xl-6">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Produk Sekolah &amp; Marketing</li>
                                                    <li class="nav-item"><a class="nav-link">Queues</a></li>
                                                    <li class="nav-item"><a class="nav-link">Resource Groups</a></li>
                                                    <li class="nav-item">
                                                        <a class="nav-link">Goal Metrics
                                                            <div class="ml-auto badge badge-warning">3</div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link">Campaigns</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                            Grid Menu
                            <div class="badge badge-dark ml-0 ml-1">
                                <small>NEW</small>
                            </div>
                            <i class="fa fa-angle-up ml-2 opacity-8"></i>
                        </a>
                        <div class="rm-max-width rm-pointers">
                            <div class="d-none popover-custom-content">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-tempting-azure">
                                        <div class="menu-header-image opacity-1" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city5.jpg');"></div>
                                        <div class="menu-header-content text-dark">
                                            <h5 class="menu-header-title">Two Column Grid</h5>
                                            <h6 class="menu-header-subtitle">Easy grid navigation inside popovers</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"></i>Automation
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>Reports
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>Activity
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"></i>Settings
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn clearfix nav-item">
                                        <div class="float-left">
                                            <button class="btn btn-link btn-sm">Link Button</button>
                                        </div>
                                        <div class="float-right">
                                            <button class="btn-shadow btn btn-info btn-sm">Info Button</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>