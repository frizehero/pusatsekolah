<div class="app-main__inner">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="col-12 col-md-9 p-0 mb-3">
                            <div class="search-wrapper active">
                                <div class="input-holder" style="background-color: #fff;">
                                    <input type="text" class="search-input" placeholder="Cari...">
                                    <button class="search-icon" style="background-color: #fff;"><span></span></button>
                                </div>
                            </div>  
                        </div>
                        <div>
                            <a href="<?php echo base_url('event_sekolah/tambahview'); ?>">
                                <button type="button" class="btn btn-shadow btn-wide btn-primary">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus fa-w-20"></i>
                                    </span>
                                    Buat Event
                                </button>
                            </a >
                        </div>
                    </div>
                    <?php tampilnotif() ?>
                    <div class="card mb-3">
                        <div class="card-header pl-0 pr-0">
                            <div class="row no-gutters w-100 align-items-center">
                                <div class="col">
                                    <div class="row no-gutters align-items-center" style="margin-left: 25px;">
                                        <div class="col-2">Event</div>
                                    </div>
                                </div>
                                <div class="col-4 text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">Like</div>
                                        <div class="col-7">Terakhir di update</div>
                                        <div class="col-3">tool</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $no = 1; foreach ($tampil as $rowP) { ?>
                        <div class="row">
                                <div class="card-body py-3">
                                    <style type="text/css">
                                       .upper { text-transform: uppercase; }
                                       .lower { text-transform: lowercase; }
                                       .cap   { text-transform: capitalize; }
                                       .small { font-variant:   small-caps; }
                                    </style>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col cap" style="margin-left: 20px; font-size: 18px;">
                                            <a href="<?php echo base_url('event_sekolah/detailview/' . encrypt_url($rowP->id_event)); ?>" class="text-big"><?php echo $rowP->judul_event; ?></a>
                                            <span class="badge badge-success align-text-bottom ml-1">Baru</span>
                                            <div class="small mt-1 lower">Di upload 2 hari yang lalu</div>
                                        </div>
                                        <div class="d-none d-md-block col-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-2">12</div>
                                                <div class="media col-7 align-items-center">
                                                    <img style="width: 40px; height: auto;" src="assets/images/avatars/3.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                                    <div class="media-body flex-truncate ml-2">
                                                        <div class="line-height-1 text-truncate">1 hari yang lalu</div>
                                                        <a href="tampilan-beranda-admin-sekolah.html" class="text-muted small text-truncate">SMKN 1 Kota Probolinggo</a>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <button class="btn btn-warning" data-toggle="modal" data-target="#hapus<?php echo $no ?>" style="margin: 5px;">
                                                            <i class="fa fa-trash fa-w-16"></i>
                                                    </button>
                                                </div>

                                                <!-- Modal HAPUS -->
                                                <div class="modal fade" id="hapus<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Menghapus Postingan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form action="<?php echo base_url('event_sekolah/hapus') ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <!--Modal body-->
                                                                <p class="text-semibold text-main"></p>
                                                                <p>Anda Yakin Ingin Menghapus Postingan Ini? </p>

                                                                <input name="id"  type="hidden" value="<?php echo $rowP->id_event ?>" class="form-control">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                            <button class="btn btn-primary" type="submit" >Hapus</button>
                                                        </div>
                                                        </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><hr>
                                    </div>
                                </div>
                        </div>
                        <?php $no++;} ?>
                    </div>
        
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <nav>
                                <ul class="pagination mb-5">
                                    <li class="page-item disabled"><a class="page-link" href="javascript:void(0)">«</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">»</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
        
                </div>

