<div class="app-main__inner p-0">
    <div class="app-inner-layout chat-layout">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content card">
                <div class="table-responsive">
                    <div class="app-inner-layout__top-pane">
                        <div class="pane-left">
                            <div class="mobile-app-menu-btn">
                                <button type="button" class="hamburger hamburger--elastic">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <div class="avatar-icon-wrapper mr-2">
                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                </div>
                                <div class="avatar-icon avatar-icon-xl rounded">
                                    <img width="82" src="assets/images/avatars/3.jpg" alt="">
                                </div>
                            </div>
                            <h4 class="mb-0 text-nowrap">Chad Evans
                                <div class="opacity-7">Terakhir Online:
                                    <span class="opacity-8">10 menit yang lalu.</span>
                                </div>
                            </h4>
                        </div>
                        <div class="pane-right">
                            <div class="btn-group dropdown">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="ml-2 dropdown-toggle btn btn-primary">
                                    <span class="opacity-7 mr-1">
                                        <i class="fa fa-cog"></i>
                                    </span>
                                    Menu
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <ul class="nav flex-column">
                                        <li class="nav-item-header nav-item">Pengaturan</li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Hapus Pesan
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Block User
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">Tambah Pesan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-wrapper" style="height: 500px;">
                        <div class="chat-box-wrapper">
                            <div>
                                <div class="avatar-icon-wrapper mr-1">
                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                    </div>
                                    <div class="avatar-icon avatar-icon-lg rounded">
                                        <img src="assets/images/avatars/3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- <div>
                                <div class="chat-box">But I must explain to you how all this mistaken idea of
                                    denouncing pleasure and praising pain was born and I will give you a complete
                                    account of the system.</div>
                                <small class="opacity-6">
                                    <i class="fa fa-calendar-alt mr-1"></i>
                                    11:01 AM | Kemarin
                                </small>XXX
                            </div> -->
                        </div>
                        <?php tampilnotif() ?>
                        <?php $no = 1;
                        foreach ($tampil as $rowP) { ?>
                            <div class="float-right">
                                <div class="chat-box-wrapper chat-box-wrapper-right">
                                    <div>
                                        <div class="chat-box"><?php echo $rowP->pesan; ?></div>
                                        <small class="opacity-6">
                                            <i class="fa fa-calendar-alt mr-1"></i>
                                            11:01 AM | Kemarin
                                        </small>
                                    </div>
                                    <div>
                                        <div class="avatar-icon-wrapper ml-1">
                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                            </div>
                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                <img src="assets/images/avatars/4.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php $no++;
                        } ?>
                    </div>
                    <form action="<?php echo base_url('tb_pesan/tambah') ?>" method="POST" enctype="multipart/form-data">
                        <div class="app-inner-layout__bottom-pane d-block text-center">
                            <div class="mb-0 position-relative row form-group">
                                <div class="col-sm-10">
                                    <input name="iduser" id="idnya" value="<?php echo $idnya; ?>" type="hidden" class="form-control">
                                    <input name="namauser" id="namanya" value="<?php echo $idnya; ?>" type="hidden" class="form-control">
                                    <input name="pesan" id="text" placeholder="Ketik pesan" type="text" class="form-control-lg form-control">
                                </div>
                                <div class="col-sm-2">
                                    <button name="signup" value="Sign up" type="submit" id="" class="btn btn-primary"><i class="pe-7s-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="app-inner-layout__sidebar card">
                <div class="app-inner-layout__sidebar-header">
                    <ul class="nav flex-column">
                        <li class="pt-4 pl-3 pr-3 pb-3 nav-item">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <input placeholder="Cari..." type="text" class="form-control">
                            </div>
                        </li>
                        <li class="nav-item-header nav-item">Online</li>
                    </ul>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <button type="button" tabindex="0" class="dropdown-item active">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="avatar-icon-wrapper">
                                            <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                            </div>
                                            <div class="avatar-icon">
                                                <img src="assets/images/avatars/3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Richad</div>
                                        <div class="widget-subheading">Vivamus elementum semper nisi.</div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() ?>">
                            <button type="button" tabindex="0" class="dropdown-item active">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left mr-3">
                                            <div class="avatar-icon-wrapper">
                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                </div>
                                                <div class="avatar-icon">
                                                    <img src="assets/images/avatars/2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Alina Mcloughlin</div>
                                            <div class="widget-subheading">Aenean vulputate eleifend tellus.</div>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>