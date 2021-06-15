<div class="app-main__inner p-0">
    <div class="app-inner-layout chat-layout">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content card">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6"><img src="<?php echo base_url() ?>assets/images/chat.jpg" style="width: 300px; padding-top: 100px; opacity: 50%;"></div>
                    <div class="col-md-3"></div>
                </div>
            </div>
            <div class="app-inner-layout__sidebar card">
                <div class="app-inner-layout__sidebar-header">
                    <ul class="nav flex-column">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="widget-content p-0">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers text-focus" style="padding-left: 20px;">Pesan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7"></div>
                            <div class="col-md-2">
                                <a href="<?php echo base_url('data_guru/tambahview'); ?>"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-circle" style="width: 30px; padding-top: 20px; padding-right: 10px;"></i></a>
                            </div>
                        </div>
                        <li class="pt-3 pl-3 pr-3 pb-2 nav-item">
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
                <?php tampilnotif() ?>
                <div class="scroll-area-sm">
                    <div class="scrollbar-container ps ps--active-y">
                        <div class="vertical-timeline--animate vertical-timeline--one-column">
                            <ul class="nav flex-column">
                                <?php $no = 1;
                                foreach ($tampil as $rowP) { ?>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('tb_pesan/detailpesan/' . encrypt_url($rowP->id_penerima)); ?>">
                                            <button type="button" tabindex="0" class="dropdown-item">
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
                                                            <div class="widget-heading"><?php echo $rowP->nama_penerima; ?></div>
                                                            <div class="widget-subheading"><?php echo $rowP->pesan; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </li>
                                <?php $no++;
                                } ?>
                            </ul>
                        </div>
                        <div class="ps__rail-y" style="top: 12px; right: 0px; height: 200px;"><div class="ps__thumb-y" tabindex="0" style="top: 2px; height: 39px;"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>