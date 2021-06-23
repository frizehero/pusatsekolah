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
                            <div class="col-md-5"></div>
                            <div class="col-md-4">
                                <button type="button" data-target="#exampleModal" data-toggle="modal" class="btn btn-link" style="padding-top: 15px;">
                                    <div class="badge badge-pill badge-dark">New Chat</div>
                                </button>
                                <!--<button type="button" class="fa fa-fw" data-toggle="modal" data-target="#exampleModal" style="width: 30px; padding-top: 20px; padding-right: 10px;">
                                    Basic Modal
                                </button>
                                <div type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw" aria-hidden="true" title="Copy to use plus-circle" style="width: 30px; padding-top: 20px; padding-right: 10px;"></i></div>-->
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
                        <?php $no = 1;
                        foreach ($tampil as $rowP) { ?>
                            <div class="vertical-timeline--animate vertical-timeline--one-column">
                                <ul class="nav flex-column">
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
                                </ul>
                            </div>
                        <?php $no++;
                        } ?>
                        <div class="ps__rail-y" style="top: 12px; right: 0px; height: 500px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 2px; height: 39px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Pesan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <!--<h5 class="card-title">Buat Pesan Baru</h5>-->
                    <div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input placeholder="username" type="text" class="form-control">
                        </div>
                        <br>
                        <div class="input-group">
                            <textarea name="text" id="exampleText" placeholder="ketik pesan ...." class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>