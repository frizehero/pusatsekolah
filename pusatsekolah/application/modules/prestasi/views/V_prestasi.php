<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="col-12 col-md-9 p-0 mb-3">
                    <div class="search-wrapper active">
                        <div class="input-holder" style="background-color: #fff;">
                            <?php echo form_open('prestasi/search') ?>
                            <input type="text" name="nama" class="search-input" placeholder="Cari...">
                            <button class="search-icon" style="background-color: #fff;"><span></span></button>
                            <?php echo form_close() ?>
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
                                        <input type="checkbox" class="form-check-input"> Akademi
                                    </label>
                                </div>
                            </div>
                            <div class="form-check">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Non Akademi
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                    <a href="<?php echo base_url('prestasi/tambahview'); ?>" class="btn btn-shadow btn-wide btn-primary">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Upload Prestasi
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php tampilnotif() ?>
    <div class="row">
        <?php $no = 1; foreach ($tampil as $rowP) { ?>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-3 widget-chart">
                    <div class="widget-chart-content">
                        <div class="wrapper rounded">
                            <div class="wrapper rounded"></div>
                            <img src="<?php echo base_url() ?>assets/images/gambar_prestasi/<?php echo $rowP->gambar_prestasi; ?>" style="width: 250px; height: 250px;">
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-subheading fsize-1 pt-2 opacity-10 text-dark font-weight-bold">
                                            <h5><b><?php echo $rowP->nama_prestasi; ?></b></h5>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="align-middle mb-0 table table-borderless" style="background-color: rgba(255 255 255 1); color: b">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">
                                                            <i class="pe-7s-ribbon text-muted fsize-2"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left flex2">
                                                                        <div class=" " style="font-weight: bold;">Jenis</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left">
                                                            <?php echo $rowP->jenis_prestasi; ?>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">
                                                            <i class="pe-7s-world text-muted fsize-2"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left flex2">
                                                                        <div class=" " style="font-weight: bold;">Tingkat</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left"><?php echo $rowP->tingkat_prestasi; ?></td>
                                                    <tr>
                                                        <td class="text-center text-muted">
                                                            <i class="pe-7s-medal text-muted fsize-3"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left flex2">
                                                                        <div class=" " style="font-weight: bold;">Juara</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left"><?php echo $rowP->juara; ?></td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">
                                                            <i class="pe-7s-date text-muted fsize-2"></i>
                                                        </td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left flex2">
                                                                        <div class=" " style="font-weight: bold;">Tanggal</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-left"><?php echo $rowP->tgl_prestasi; ?></td>
                                                    </tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center d-block card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="mr-2 border-0 btn-transition btn btn-outline-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus</button>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo base_url('prestasi/editview/' . encrypt_url($rowP->id_prestasi)); ?>" class="mr-2 border-0 btn-transition btn btn-outline-primary">Edit
                                </a>
                            </div>
                        </div>
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

                        <form action="<?php echo base_url('prestasi/hapus') ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $rowP->nama_prestasi ?></b> ? </p>

                                <input name="id" type="hidden" value="<?php echo $rowP->id_prestasi ?>" class="form-control">
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
    <?php echo  $pagination; ?>
</div>