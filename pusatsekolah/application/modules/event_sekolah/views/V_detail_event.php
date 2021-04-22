<div class="app-main__inner">
    <?php tampilnotif() ?>
    <form action="<?php echo base_url('event_sekolah/tampildetail') ?>" method="POST" enctype="multipart/form-data">
        <div class="card mb-2">
            <div class="card-body">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <img style="width: 40px; height: auto;" src="<?php echo base_url() ?>assets/images/avatars/3.jpg"
                            class="d-block ui-w-40 rounded-circle" alt="">
                        <div class="media-body ml-3">
                            <a href="javascript:void(0)">SMK Negeri 1 Kota Probolinggo</a>
                            <div class="text-muted small">4 hari yang lalu</div>
                        </div>
                    </div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="fa fa-fw"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="fa fa-fw"></i>&nbsp;<span>Edit Event</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="pe-7s-trash"></i>&nbsp;<span>Hapus Event</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header"><?php echo $tampil['judul_event'] ?></div>
                <div class="card-body">
                    <p>
                        <?php echo $tampil['text_event'] ?>
                    </p>
                    <div class="card-body">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner"  style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/pamflet.jpg'); width: auto; height: 278px; background-size: 278px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pb-3">
                    <div class="row col-lg-12">
                        <div class="col-lg-4 col-xl-4 text-center">
                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle ">
                                <i class="ion ion-ios-heart text-danger fsize-3"></i>&nbsp;
                                <span class="align-middle">86</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-xl-4 text-center">
                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle ml-3">
                                <i class="pe-7s-comment fsize-3"></i>&nbsp;
                                <span class="align-middle">3</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-xl-4 text-center">
                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-right align-middle ml-3">
                                <i class="fa fa-fw fsize-2"></i>&nbsp;
                                <span class="align-middle">9</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div tabindex="-1" class="dropdown-divider"></div>
                <div class="card-body">
                    <div id="exampleAccordion" data-children=".item">
                        <div class="item">
                            <button type="button" aria-expanded="true" aria-controls="exampleAccordion1"
                                data-toggle="collapse" href="#collapseExample"
                                class="m-0 p-0 btn btn-link">Tampilkan Komentar</button>
                            <div data-parent="#exampleAccordion" id="collapseExample" class="collapse show">
                                <div class="widget-content card-body">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <input name="komen" id="komen" placeholder="Tulis komentar..." type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="widget-content card-body">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Alina Mcloughlin</div>
                                            <div>Aenean vulputate eleifend tellus.</div>
                                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Suka</a>
                                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Balas</a>
                                            <span class="text-muted d-inline-flex align-items-center align-middle">2 Hari yang lalu</span>
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" 
                                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                    <i class="fa fa-fw"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                    class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                        <i class="pe-7s-trash"></i>&nbsp;<span>Hapus Komentar</span>
                                                    </button>
                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                        <i class="fa fa-fw"></i>&nbsp;<span>Report Komentar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="widget-content card-body">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Alina Mcloughlin</div>
                                            <div>Aenean vulputate eleifend tellus.</div>
                                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Suka</a>
                                            <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Balas</a>
                                            <span class="text-muted d-inline-flex align-items-center align-middle">2 Hari yang lalu</span>
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                            <div class="btn-group dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" 
                                                    aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                    <i class="fa fa-fw"></i>
                                                </button>
                                                <div tabindex="-1" role="menu" aria-hidden="true"
                                                    class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                        <i class="pe-7s-trash"></i>&nbsp;<span>Hapus Komentar</span>
                                                    </button>
                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                        <i class="fa fa-fw"></i>&nbsp;<span>Report Komentar</span>
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
        </div>
    </form>
</div>