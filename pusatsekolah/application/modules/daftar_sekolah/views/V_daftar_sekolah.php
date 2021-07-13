<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pusat Sekolah</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url() ?>main.css" rel="stylesheet"></head>
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.ico">

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="bg-plum-plate bg-animation">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div><br></div>
                        <div><br></div>
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <div class="h5 modal-title text-center">
                                                <h4 class="mt-2">
                                                    <div>Hallo, ingin promosikan sekolahmu ?</div>
                                                    <span>Daftarkan sekolahmu di Pusat Sekolah dengan mudah.</span>
                                                </h4>
                                            <div class="divider"></div>
                                            </div>
                                            <form action="<?php echo base_url('daftar_sekolah/tambah') ?>" method="POST" enctype="multipart/form-data">
                                                <div>
                                                    <div>
                                                        <h5 class="card-title">JENJANG SEKOLAH</h5>
                                                        <select name="jjg_sekolah" class="multiselect-dropdown form-control">
                                                            <option>PAUD</option>
                                                            <option>TK</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA</option>
                                                            <option>SMK</option>
                                                        </select>
                                                        <br>
                                                        <div>
                                                            <h5 class="card-title">NAMA SEKOLAH</h5>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <!--<span class="input-group-text"> </span>-->
                                                                </div>
                                                                <input name="nama_sekolah" id="text" placeholder="SMA Negeri 1 Kota Malang" type="text" class="form-control">
                                                            </div>
                                                            <br>
                                                            <h5 class="card-title">STATUS SEKOLAH</h5>
                                                            <div class="input-group">
                                                                <input placeholder=". . . . . . . . ." type="text" class="form-control">
                                                                <div name="stt_sekolah" id="text" class="input-group-append">
                                                                    <span class="input-group-text">Negeri / Swasta</span>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <h5 class="card-title">NPSN SEKOLAH</h5>
                                                                    <input name="npsn_sekolah" id="number" placeholder=". . . . . . . . ." type="number" class="form-control">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h5 class="card-title">AKREDITASI SEKOLAH</h5>
                                                                    <select name="akre_sekolah" class="multiselect-dropdown form-control">
                                                                        <option>A</option>
                                                                        <option>B</option>
                                                                        <option>C</option>
                                                                    </select>
                                                                </div>
                                                            </div>   
                                                            <br>
                                                            <h5 class="card-title">DESKRIPSI SEKOLAH</h5>
                                                            <div class="position-relative form-group">
                                                                <textarea placeholder=". . . . . . . . ." name="desk_sekolah" id="text" class="form-control"></textarea>
                                                            </div>
                                                            <div class="divider"></div>
                                                            <div class="card mb-3 widget-content bg-plum-plate">
                                                                <div class="widget-content-wrapper text-white">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">UPLOAD FOTO SURAT KERJASAMA</div>
                                                                        <div class="widget-subheading">File upload maximal 1 Mb</div>
                                                                        <br>
                                                                        <input name="file" type="file" class="form-control-file">
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="widget-subheading">Download format surat ?</div>
                                                                        <button class="mb-2 mr-2 btn-pill btn-hover-shine btn btn-light"><i class="lnr-file-empty btn-icon-wrapper"></i> Download Format </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="divider"></div>
                                                            <div class="form-row">
                                                                <div class="col-md-9">
                                                                    <div class="position-relative form-group">
                                                                        <h5 class="card-title">ALAMAT SEKOLAH</h5>
                                                                        <input name="almtlengkap_sekolah" id="text" placeholder=". . . . . . . . ." type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="position-relative form-group">
                                                                        <h5 class="card-title">KODEPOS</h5>
                                                                        <input name="kpos_sekolah" id="number" placeholder=". . . . . . . . ." type="number" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-md-3">
                                                                    <h5 class="card-title">Provinsi</h5>
                                                                    <select name="provinsi_sekolah" class="form-control" id="provinsi_sekolah">
                                                                    <option value="<?php echo $tampilkompetensi['provinsi_sekolah']?>"><?php echo $tampilkompetensi['provinsi_sekolah']?></option>
                                                                    <?php 
                                                                        foreach($provinsi as $prov)
                                                                        {
                                                                            echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
                                                                        }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h5 class="card-title">Kota / Kabupaten</h5>
                                                                    <select name="kota_kab_sekolah" class="form-control" id="kabupaten">
                                                                    <option value="<?php echo $tampilkompetensi['kota_kab_sekolah']?>"><?php echo $tampilkompetensi['kota_kab']?></option>
                                                                </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h5 class="card-title">Kelurahan</h5>
                                                                    <select name="kel_sekolah" class="form-control" id="desa">
                                                                    <option value="<?php echo $tampilkompetensi['kel_sekolah']?>"><?php echo $tampilkompetensi['kelurahan']?></option>
                                                                </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <h5 class="card-title">Kecamatan</h5>
                                                                    <select name="kec_sekolah" class="form-control" id="kecamatan">
                                                                    <option value="<?php echo $tampilkompetensi['kec_sekolah']?>"><?php echo $tampilkompetensi['kecamatan']?></option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="main-card mb-3 card">
                                                                <div class="card-body">
                                                                    <div class="card-title">Tentukan Titik Koordinat</div>
                                                                    <div id="googleMap" style="width:100%;height:380px;"></div>
                                                                
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <h5 class="card-title">Latitude</h5>
                                                                                <input type="text" id="lat" name="latitude" value="<?php echo $tampilkompetensi['latitude']?>" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <h5 class="card-title">Longitude</h5>
                                                                                <input type="text" id="lng" name="longitude" value="<?php echo $tampilkompetensi['longitude']?>" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="divider"></div>
                                            <div class="mt-4 d-flex align-items-center">
                                                <!--ss="mb-0">Sudah memiliki akun untuk sekolahmu ?
                                                    <a href="javascript:void(0);" class="text-primary">Sign in</a>
                                                </h5>-->
                                                <div class="ml-auto">
                                                    <button type="button" class="btn-wide btn-pill btn-shadow btn-hover-shine btn bg-plum-plate btn-lg text-white" data-toggle="modal" data-target="#exampleModalLong">Buat Akun </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-white opacity-8 mt-3">Copyright ©Pusat Sekolah 2021</div>
                            <div><br></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>

<!--BUAT AKUN-->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center" id="exampleModalLongTitle">Selamat !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="no-results">
                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                        <span class="swal2-success-line-tip"></span>
                        <span class="swal2-success-line-long"></span>
                        <div class="swal2-success-ring"></div>
                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                    </div>
                    <div class="results-subtitle mt-4">Data sekolah kamu sudah kami terima</div>
                    <div class="widget-subheading">Selanjutnya kamu bisa melihat sekolahmu untuk mengubah tampilan dan melengkapi data tambahan.</div>
                    <div class="mt-3 mb-3"></div>
                    <div class="text-center">
                        <a href="tampilan-beranda-admin-sekolah.html">
                            <button class="btn-shadow btn-wide btn btn-success btn-lg">Lihat Sekolahku</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:41 GMT -->

<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script></body>


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:40 GMT -->
</html>