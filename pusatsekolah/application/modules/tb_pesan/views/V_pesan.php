<div class="app-main__inner p-0">
    <div class="app-inner-layout chat-layout">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content card">

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
                <?php tampilnotif() ?>
                <ul class="nav flex-column">
                    <?php $no = 1;
                    foreach ($tampil as $rowP) { ?>
                        <li class="nav-item">
                            <a href="<?php echo base_url('tb_pesan/detailpesan/' . encrypt_url($rowP->id_user)); ?>">
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
        </div>
    </div>
</div>