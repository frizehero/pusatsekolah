<div class="app-main__inner">
    <div class="">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="col-12 col-md-9 p-0 mb-3">
                <div class="search-wrapper active">
                    <div class="input-holder" style="background-color: #fff;">
                        <input type="text" class="search-input" placeholder="Cari...">
                        <button class="search-icon" style="background-color: #fff;"><span></span></button>
                    </div>
                </div>  
            </div>
        </div>
    </div>
<?php tampilnotif()?>
    <div class="card mb-3">
        <div class="card-body">
            <ul class="tabs-animated-shadow tabs-animated nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('media_sekolah'); ?>">
                        <span>Foto Sekolah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('media_fasilitas'); ?>">
                        <span>Foto Fasilitas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link active" id="tab-c-0" data-toggle="tab" href="#tab-animated-1">
                        <span>Video</span>
                    </a>
                </li>
                    <div class="btn-actions-pane-right text-capitalize">
                        <a href="<?php echo base_url('media_video/tambahview'); ?>">
                            <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-link">Tambah Foto</button>
                        </a>
                    </div>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-animated-0" role="tabpanel">
                    <div class="row">
                        <?php $no=1; foreach ($tampil AS $rowP ) { ?>
                            <div class="col-md-12">
                                <?php echo $rowP->video_media ?>
                            </div>
                        <?php $no++;} ?>

                        <!-- <div class="col-md-12 col-lg-3">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header" style="background-image: url('assets/images/dropdown-header/city4.jpg'); width: auto; height: 200px;">
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" 
                                                        aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-trash"></i>&nbsp;<span>Hapus Video</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-download"></i>&nbsp;<span>Download Video</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br>
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right">
                                                <p>1:00</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-3">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header" style="background-image: url('assets/images/dropdown-header/city1.jpg'); width: auto; height: 200px;">
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" 
                                                        aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-trash"></i>&nbsp;<span>Hapus Video</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-download"></i>&nbsp;<span>Download Video</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br>
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right">
                                                <p>1:00</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-3">
                            <div class="card-shadow-primary card-border mb-3 card">
                                <div class="dropdown-menu-header" style="background-image: url('assets/images/dropdown-header/city3.jpg'); width: auto; height: 200px;">
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" 
                                                        aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <i class="fa fa-fw" aria-hidden="true" title="Copy to use edit"></i>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                                        class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-trash"></i>&nbsp;<span>Hapus Video</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="lnr-download"></i>&nbsp;<span>Download Video</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br>
                                        <div class="menu-header-content btn-pane-right">
                                            <div class="btn-actions-pane-right">
                                                <p>1:00</p>
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