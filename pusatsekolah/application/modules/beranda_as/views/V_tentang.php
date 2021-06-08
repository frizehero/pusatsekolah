
<div class="app-main__inner p-0">
<?php $no=1; foreach ($tampilkompetensi AS $rowP ) { ?>
    <div class="tabs-animation">
        <div class="col-mb-12">
            <div class="card-shadow-primary card-border text-white card bg-light">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner" style="background-image: url('<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_sampul;?>');">
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
                            <div class="widget-content-left mr-3 avatar-icon-xl">
                                <a href="#">
                                <img class="avatar-icon" src="<?php echo base_url() ?>assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>" alt="">
                                </a>
                            </div>
                            <div class="widget-content-left" style="color: black;">
                                <div class="widget-heading"><b><?php echo $rowP->nama_sekolah;?></b></div>
                                <div class="widget-subheading">2,391 Followers</div>
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
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                            <ul class="nav">
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-0" class="active nav-link dropdown-item">
                                        Sejarah Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-1" class="nav-link dropdown-item">
                                        Tentang Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-2" class="nav-link dropdown-item">
                                        Kontak Sekolah
                                    </a>
                                </li>
                                <li class="nav-item col-md-12">
                                    <a data-toggle="tab" href="#tab-eg8-3" class="nav-link dropdown-item">
                                        Alamat Sekolah
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                                    <div class="tab-pane active" id="tab-eg8-0" role="tabpanel">
                                            <div class="card-body">
                                                <h5 class="card-title">Sejarah Sekolah</h5>
                                                <?php echo $rowP->sejarah_sekolah;?>
                                            </div>
                                            <button class="btn-shadow btn-wide float-right btn-pill btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $no ?>">
                                                <a>Edit</a>
                                            </button>
                                            <!-- Modal Edit Popup -->
                                            <div class="modal fade" id="edit<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Sejarah Sekolah</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <form action="<?php echo base_url('p_sekolah/edit') ?>" method="POST" enctype="multipart/form-data">
                                                    <input name="id" value="<?php echo $tampilsejarah?>" type="text" class="form-control">
                                                        <div class="modal-body">
                                                            <!--<input name="sjrhs" value="<?php echo $tampilsejarah?>" type="text" class="form-control" size="50">-->
                                                            <textarea rows="1" class="form-control autosize-input" placeholder="Ketik Sejarah Sekolah disini" style="max-height: 200px; height: 265px; margin-top: 0px; margin-bottom: 0px;" size="50"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Perbarui</button>
                                                        </div>
                                                    </form>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-1" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Tentang Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Jenjang Sekolah</b> :
                                                                <?php echo $rowP->jjg_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Status Sekolah</b> :
                                                                <?php echo $rowP->stt_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>NPSN Sekolah</b> :
                                                                <?php echo $rowP->npsn_sekolah;?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Akreditasi Sekolah</b> :
                                                                <?php echo $rowP->akre_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Deskripsi Sekolah</b> :
                                                                <?php echo $rowP->desk_sekolah;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-2" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Kontak Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Email </b> :
                                                                <?php echo $rowP->email;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Telephone </b> :
                                                                <?php echo $rowP->telphone;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Facebook </b> :
                                                                <?php echo $rowP->facebook;?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Instagram </b> :
                                                                <?php echo $rowP->instagram;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Twitter </b> :
                                                                <?php echo $rowP->twitter;?>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Link Website Sekolah </b> :
                                                                <a href="<?php echo $rowP->link_web;?>"><?php echo $rowP->link_web;?></a>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Link Video Profil Sekolah</b> :
                                                                <a href="<?php echo $rowP->link_video;?>"><?php echo $rowP->link_video;?></a>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-eg8-3" role="tabpanel">
                                        <div class="card-body">
                                            <h5 class="mb-3 card-title">Alamat Sekolah</h5>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Alamat Lengkap</b> :
                                                                <?php echo $rowP->almtlengkap_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Provinsi</b> :
                                                                <?php echo $rowP->provinsi;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kota/Kabupaten</b> :
                                                                <?php echo $rowP->kota_kab;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kelurahan</b> :
                                                                <?php echo $rowP->kelurahan;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kecamatan</b> :
                                                                <?php echo $rowP->kecamatan;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <li class="nav-item-divider mb-2 nav-item"></li>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left center-elem mr-2">
                                                            <i class="pe-7s-user text-muted fsize-2"></i>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Kode Pos</b> :
                                                                <?php echo $rowP->kpos_sekolah;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="clearfix">
                                            <a href="<?php echo base_url('p_sekolah'); ?>"class="btn-shadow btn-wide float-right btn-pill btn btn-primary">Edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $no++;} ?>
    </div>
</div>
</div>