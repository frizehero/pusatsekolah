<div class="tab-content">
    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
        <div class="card-body">
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
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle btn btn-primary">Filter
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
                                                <input type="checkbox" class="form-check-input"> Makanan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Minuman
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Kain
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Lain - lain
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                            <a href="<?php echo base_url('produk/tambahview'); ?>">
                                <button type="button" class="btn btn-shadow btn-wide btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                    Tambah Produk
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
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="widget-chart-content">
                                <div class="wrapper rounded">
                                    <div class="wrapper rounded"></div>
                                    <img src="<?php echo base_url() ?>assets/images/produk/<?php echo $rowP->foto_produk; ?>" style="width: 240px; height: 160px;">
                                </div>
                            </div>
                            <div style="height: 120px;">
                                <div class="widget-subheading fsize-1 pt-2 opacity-10 text-dark font-weight-bold">
                                    <?php echo $rowP->nama_produk; ?>
                                </div>
                                <div class="widget-description opacity-8">
                                    <?php echo $rowP->deskripsi_produk; ?>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h3><small class="opacity-5"><?php echo "Rp. "; ?></small><span style="font-size: 24px;"><?php echo $rowP->harga_produk; ?></span></h3>
                                </div>
                                <div class="col-md-5">
                                    <a href="<?php echo base_url('produk/editview/' . encrypt_url($rowP->id_produk)); ?>" class="btn btn-primary">
                                        <i class="fa fa-pen fa-w-16"></i>
                                    </a>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                        <i class="fa fa-trash fa-w-16"></i>
                                    </button>
                                </div>
                                <!-- Modal HAPUS -->
                                <div class="modal fade" id="hapus<?php echo $no ?>" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Produk?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="<?php echo base_url('produk/hapus') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <!--Modal body-->
                                                    <p class="text-semibold text-main"></p>
                                                    <p>Anda Yakin Ingin Menghapus Produk <b><?php echo $rowP->nama_produk ?></b> ? </p>

                                                    <input name="id" type="hidden" value="<?php echo $rowP->id_produk ?>" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                    <button class="btn btn-primary" type="submit">Hapus</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $no++;
                } ?>
            </div>
            <div class="text-center">
                <button class="btn-shadow btn-wide btn-pill btn btn-primary">
                    Lihat Lainnya
                </button>
            </div>
        </div>
    </div>
</div>