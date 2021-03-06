<div class="tabs-animation">
<?php $no=1; foreach ($tampilkompetensi AS $rowP ) { ?>
    <div class="col-mb-12">
        <div class="card-shadow-primary card-border text-white card bg-light">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner" style="background-image: url('<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_sampul;?>'); background-repeat: no-repeat; ">
                    <div class="menu-header-btn-pane pt-5">
                        <div class="pt-5">
                            <div class="pt-5">
                                <div class="pt-5">
                                    <div class="pt-5">
                                        <!--<div class="widget-content p-1">
                                            <div class="text-right d-block">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <b class="btn-shadow-dark btn-wider btn btn-primary">Edit Sampul</b>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="dropdown-icon pe-7s-copy-file"></i><span>Pilih Foto</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="dropdown-icon pe-7s-expand1"> </i><span>Ubah Posisi</span>
                                                        </button>
                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="dropdown-icon pe-7s-trash"> </i><span>Hapus</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-content-left card-footer">
                <div class="widget-content-left mr-3 avatar-icon-wrapper avatar-icon-xl">
                    <img class="avatar-icon" src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>" style="border: none">
                </div>
                <div class="widget-content-left" style="color: black;">
                    <div class="widget-heading"><b><?php echo $rowP->nama_sekolah;?></b></div>
                    <div class="widget-subheading">2,391 Pengikut</div>
                    <select id="css-stars">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="btn-actions-pane-right">
                    <a href="<?php echo base_url('tb_pesan'); ?>">
                        <button class="btn-shadow-dark btn btn-primary">Pesan</button>
                    </a>
                    <a href="<?php echo base_url('beranda_as/tentangview'); ?>">
                        <button class="btn-shadow-dark btn btn-primary">Tentang Sekolah</button>
                    </a>
                    <button class="btn-shadow-dark btn btn-primary">Bagikan Sekolah</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-main__inner">
<?php tampilnotif()?>
    <div class="row">
        <div class="col-sm-12 col-lg-8">
        <form action="<?php echo base_url('beranda_as/tambah') ?>" method="POST" enctype="multipart/form-data">
        <input name="id" value="<?php echo $idsekolah['id_sekolah']?>" type="hidden" class="form-control">
            <div class="card mb-2">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <img class="avatar-icon d-block ui-w-40" src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>" style="border: none;">
                        <div class="media-body ml-3">
                            <a href="<?php echo base_url('beranda_as'); ?>"><?php echo $rowP->nama_sekolah;?></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <textarea name="posts" id="" placeholder="Lagi Mikirin Aku ya :)" type="text" class="form-control autosize-input" style="max-height: 200px; height: 100px;"></textarea>
                </div>
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                    <div class="px-4 pt-3">
                        <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">
                            <i class="pe-7s-camera text-success fsize-3"></i>&nbsp;
                            <span class="align-middle">Foto/Video</span>&nbsp;
                            <input name="postfoto" type="file" class="form-control-file">
                        </a>
                    </div>
                    <div class="px-4 pt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="ion ion-md-create"></i>&nbsp;Posting
                        </button>
                    </div>
                </div>
            </div>
        </form>
            <?php $no=1; foreach ($tampil AS $rowO ) { ?>
            <div class="card mb-2">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                    <img class="avatar-icon d-block ui-w-40" src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>" style="border: none;">
                        <div class="media-body ml-3">
                            <a href="<?php echo base_url('beranda_as'); ?>"><?php echo $rowP->nama_sekolah;?></a>
                            <div class="text-muted small">4 hari yang lalu</div> 
                        </div>
                    </div>
                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="fa fa-fw"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <button class="dropdown-item" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                <i class="pe-7s-trash"></i></i>&nbsp;<span>Hapus Postingan</span>
                                </button>
                            </div>
                        </div>
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

                                <form action="<?php echo base_url('beranda_as/hapus') ?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <!--Modal body-->
                                        <p class="text-semibold text-main"></p>
                                        <p>Anda Yakin Ingin Menghapus Postingan Ini? </p>

                                        <input name="id"  type="hidden" value="<?php echo $rowO->id_beranda_as ?>" class="form-control">
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
                <div class="card-body">
                    <p>
                        <?php echo $rowO->post_sekolah;?><br><br>
                        <?php if ($rowO->post_foto_sekolah==""){?>

                        <?php }else{ ?>
                        <img src="<?php echo base_url() ?>assets/images/postsekolah/<?php echo $rowO->post_foto_sekolah;?>" style="width: 240px; height: 160px;">
                        <?php }?>
                    </p>
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
                            <button type="button" aria-expanded="true" aria-controls="exampleAccordion1" data-toggle="collapse" href="#tampilkanKomentar1" class="m-0 p-0 btn btn-link">Tampilkan Komentar
                            </button>
                            <div data-parent="#exampleAccordion" id="tampilkanKomentar1" class="collapse show">


                                <!--Tambah Komentar-->

                                <form action="<?php echo base_url('beranda_as/tambahkomen') ?>" method="POST" enctype="multipart/form-data">
                                <input name="idu" value="<?php echo $idnya?>" type="hidden" class="form-control">
                                <input name="idp" value="<?php echo $rowO->id_beranda_as?>" type="hidden" class="form-control">
                                    <div class="widget-content card-body">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="avatar-icon-wrapper">
                                                    <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                    </div>
                                                    <div class="avatar-icon">
                                                        <img src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0">
                                                <input name="koment" placeholder="Tulis komentar..." type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </form>


                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="widget-content card-body">
                                
                                    <?php $komentarnya = $this->M_beranda_as->ambilkomentar($rowO->id_beranda_as); ?>
                                    
                                    <?php if ($komentarnya==null){?>

                                    <?php }else{ ?>
                                    <?php $noK=1; foreach ($komentarnya AS $rowK ) { ?>
                                                                        
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="avatar-icon-wrapper">
                                                    <div class="badge badge-bottom badge-success badge-dot badge-dot-lg"></div>
                                                    <div class="avatar-icon">
                                                        <img class="avatar-icon d-block ui-w-40" src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowK->foto_profil;?>" style="border: none;">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="widget-content-left">
                                                <a href="<?php echo base_url('beranda_as'); ?> "><?php echo $rowK->nama_sekolah;?></a>
                                                <div><?php echo $rowK->isi_komentar;?></div>
                                                <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Suka</a>
                                                <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle">Balas</a>
                                                <span class="text-muted d-inline-flex align-items-center align-middle">2 Hari yang lalu</span>
                                            </div>

                                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                        <i class="fa fa-fw"></i>
                                                    </button>
                                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#hapusq<?php echo $noK ?>">
                                                            <i class="pe-7s-trash"></i>&nbsp;<span>Hapus komentar</span>
                                                        </button>
                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                            <i class="fa fa-fw"></i>&nbsp;<span>Report Komentar</span>
                                                        </button>
                                                    </div>


                                                    <!-- Modal HAPUS -->
                                                    <div class="modal fade" id="hapusq<?php echo $noK ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Menghapus Komentar</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <form action="<?php echo base_url('beranda_as/hapuskomen') ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <!--Modal body-->
                                                                    <p class="text-semibold text-main"></p>
                                                                    <p>Anda Yakin Ingin Menghapus Komentar Ini? </p>

                                                                    <input name="id"  type="hidden" value="<?php echo $rowK->id_komentar ?>" class="form-control">
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
                                            </div>
                                        </div>
                                        <div tabindex="-1" class="dropdown-divider"></div>

                                        <?php $noK++;}?>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $no++;} ?>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div class="card-hover-shadow card-border mb-2 card">
                <div class="card-header">KEPALA SEKOLAH</div>
                <div class="card-body">
                    <div class="dropdown-menu-header">
                        <div class="dropdown-menu-header-inner bg-dark">
                            <div class="menu-header-content">
                                <div class="avatar-icon-wrapper mb-3 avatar-icon-xl">
                                    <div class="avatar-icon rounded">
                                        <img src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_kepsek;?>" alt="Avatar 5">
                                    </div>
                                </div>
                                <div>
                                    <h5 class="menu-header-title">Kepala Sekolah</h5>
                                    <h6 class="menu-header-subtitle"><?php echo $rowP->nama_kepalasekolah;?></h6>
                                </div>
                                <div class="menu-header-btn-pane pt-1">
                                    <a href="<?php echo $rowP->link_akunkepsek;?>" class="btn-icon btn btn-warning btn-sm">Cek Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="card-hover-shadow card-border mb-2 card">
                    <div class="card-header ">Kopetensi Keahlian <!--<?php echo $idnya?><?php echo $idsekolah['id_sekolah']?>--></div>
                    <div class="card-body">
                        <div>
                            <p>1. <?php echo $rowP->kompetensi1;?></p>
                        </div>
                        <div>
                            <p>2. <?php echo $rowP->kompetensi2;?></p>
                        </div>
                        <div>
                            <p>3. <?php echo $rowP->kompetensi3;?></p>
                        </div>
                        <div>
                            <p>4. <?php echo $rowP->kompetensi4;?></p>
                        </div>
                        <div>
                            <p>5. <?php echo $rowP->kompetensi5;?></p>
                        </div>
                    </div>
                </div>
            <div class="card-hover-shadow card-border mb-2 card">
                <div class="card-header">Jam Operasional</div>
                <div class="card-body">
                    <p>Senin -  <?php echo $rowP->senin_m;?> s/d    <?php echo $rowP->senin_p;?></p>
                    <p>Selasa - <?php echo $rowP->selasa_m;?> s/d   <?php echo $rowP->selasa_p;?></p>
                    <p>Rabu -   <?php echo $rowP->rabu_m;?> s/d     <?php echo $rowP->rabu_p;?></p>
                    <p>Kamis -  <?php echo $rowP->kamis_m;?> s/d    <?php echo $rowP->kamis_p;?></p>
                    <p>Jum'at - <?php echo $rowP->jumat_m;?> s/d    <?php echo $rowP->jumat_p;?></p>
                    <p>Sabtu -  <?php echo $rowP->sabtu_m;?> s/d    <?php echo $rowP->sabtu_p;?></p>
                </div>
            </div>
            <?php $no++;} ?>
        </div>
    </div>
</div>