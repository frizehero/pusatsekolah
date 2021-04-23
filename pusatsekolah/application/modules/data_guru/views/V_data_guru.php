<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-9 p-0 mb-3">
                    <div class="search-wrapper active">
                        <div class="input-holder" style="background-color: #fff;">
                            <input type="text" class="search-input" placeholder="Cari...">
                            <button class="search-icon" style="background-color: #fff;"><span></span></button>
                        </div>
                    </div>
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <div class="mb-2 mr-2 btn-group">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle btn-shadow btn btn-primary">Filter
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
                                        <input type="checkbox" class="form-check-input"> IPA
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> IPS
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Sejarah
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Matematika
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Bahasa Jawa
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Bahasa Inggris

                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Bahasa Jawa
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <a href="<?php echo base_url('data_guru/tambahview'); ?>" class="btn btn-shadow btn-wide btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Tambah Guru
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php tampilnotif() ?>
    <div class="row">
        <?php $no = 1;
        foreach ($tampil as $rowP) { ?>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card-shadow-primary card-border mb-3 card">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-info">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon">
                                        <img src="<?php echo base_url() ?>assets/images/avatars/18.png" alt="Avatar 5">
                                    </div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title"><?php echo $rowP->nama_guru; ?></h5>
                                    <h6 class="menu-header-subtitle"><?php echo $rowP->mapel_guru; ?></h6>
                                </div>
                                <div class="menu-header-btn-pane pt-1">
                                    <a href="<?php echo base_url('data_guru/detailprofil/' . encrypt_url($rowP->id_guru)); ?>">
                                        <button class="btn-icon btn btn-warning btn-sm">Profil Lengkap</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-block card-footer">
                        <button class="mr-2 border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus Guru</button>
                        <a href="<?php echo base_url('pesan'); ?>">
                            <button class="border-0 btn-transition btn btn-outline-success">Kirim Pesan</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Modal HAPUS -->
            <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url('data_guru/hapus') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_guru ?></b> ? </p>

                                <input name="id" type="hidden" value="<?php echo $rowP->id_guru ?>" class="form-control">
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
    <div class="text-center">
        <button class="mb-3 btn-shadow btn-wide btn-pill btn btn-primary">
            Lihat Lainnya
        </button>
    </div>
</div>