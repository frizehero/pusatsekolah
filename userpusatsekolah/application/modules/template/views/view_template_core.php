<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pusat Sekolah</title>
    <meta name="viewportx" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="msapplication-tap-highlight" content="no">
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/dashboard-style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>images/logo.ico">
</head>

<body>


    <?php



    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

    $menu = $uri_segments[3];

    ?>

    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- header -->
    <header class="main-header">
        <!-- logo-->
        <a href="tampilan-beranda-user.html" class="logo-holder"><img src="<?php echo base_url() ?>images/logoatas.png" alt=""></a>
        <!-- logo end-->
        <!-- header-search_btn-->
        <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
        <!-- header-search_btn end-->
        <!-- header opt -->
        <a href="pusatsekolah/signup-adminsekolah.html" class="add-list color-bg">Daftarkan Sekolahmu<span><i class="fal fa-layer-plus"></i></span></a>
        <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
        <div class="header-user-menu">
            <div class="header-user-name">
                <span><img src="<?php echo base_url() ?>images/avatar/4.jpg" alt=""></span>
                Hai, Emak
            </div>
            <ul>
                <li><a href="tampilan-edit-profiluser.html"> Akun Saya</a></li>
                <li><a href="tampilan-nilaips-user.html"> Nilai Kami! </a></li>
                <li><a href="tampilan-beranda-nonlogin.html">Log Out</a></li>
            </ul>
        </div>
        <!-- lang-wrap end-->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap color-bg">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul class="no-list-style">
                    <li>
                        <a href="<?php echo base_url('beranda_user'); ?>" class="act-link">Home</a>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="tampilan-event-sekolah.html">Event</a>
                    </li>
                    <li>
                        <a href="#">Kami <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul style="width: 180px;">
                            <li><a href="tampilan-tentangkami-user.html">Tentang Kami</a></li>
                            <li><a href="tampilan-kontakps-user.html">Kontak</a></li>
                            <li><a href="tampilan-pusatbantuan.html">Pusat Bantuan</a></li>
                            <li><a href="tampilan-pusatbantuan-syaratketentuanumum.html">Syarat & Ketentuan</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
        <!-- header-search_container -->
        <div class="header-search_container header-search vis-search">
            <div class="container small-container">
                <div class="header-search-input-wrap fl-wrap">
                    <!-- header-search-input -->
                    <div class="header-search-input">
                        <label><i class="fal fa-keyboard"></i></label>
                        <input type="text" placeholder="Apa yang sedang kamu cari ?" value="" />
                    </div>
                    <!-- header-search-input end -->
                    <!-- header-search-input -->
                    <div class="header-search-input location autocomplete-container">
                        <label><i class="fal fa-map-marker"></i></label>
                        <input type="text" placeholder="Lokasi..." class="autocomplete-input" id="autocompleteid2" value="" />
                        <a href="#"><i class="fal fa-dot-circle"></i></a>
                    </div>
                    <!-- header-search-input end -->
                    <!-- header-search-input -->
                    <div class="header-search-input header-search_selectinpt ">
                        <select data-placeholder="Category" class="chosen-select no-radius">
                            <option>Semua kategori</option>
                            <option>PAUD</option>
                            <option>TK</option>
                            <option>SD</option>
                            <option>SMP</option>
                            <option>SMA</option>
                            <option>SMK</option>
                        </select>
                    </div>
                    <!-- header-search-input end -->
                    <button class="header-search-button green-bg" onclick="window.location.href='tampilan-beranda-user.html'"><i class="far fa-search"></i> Cari </button>
                </div>
                <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
            </div>
        </div>
        <!-- header-search_container  end -->
        <!-- wishlist-wrap-->
        <div class="header-modal novis_wishlist">
            <!-- header-modal-container-->
            <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                <!--widget-posts-->
                <div class="widget-posts  fl-wrap">
                    <ul class="no-list-style">
                        <li>
                            <div class="widget-posts-img"><a href="tampilan-beranda-sekolah.html"><img src="images/sekolah/sd1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="tampilan-beranda-sekolah.html">SDN Ardimulyo 1</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur, Probolinggo</a></div>
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html">Sekolah Dasar </a></div>
                                <div class="widget-posts-descr-score">4.1</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="tampilan-beranda-sekolah.html"><img src="images/sekolah/tk1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="tampilan-beranda-sekolah.html">TK Barnadian Uta</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Surabaya, Jawa Timur, Indonesia </a></div>
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html">Taman Kanak-Kanak </a> </div>
                                <div class="widget-posts-descr-score">5.0</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="tampilan-beranda-sekolah.html"><img src="images/sekolah/paud2.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="tampilan-beranda-sekolah.html">PAUD Bhayangkara 205</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>Lebak Bulus, Jakarta, Indonesia</a></div>
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html">Pendidikan Anak Usia Dini</a> </div>
                                <div class="widget-posts-descr-score">4.2</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="tampilan-beranda-sekolah.html"><img src="images/sekolah/smk1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="tampilan-beranda-sekolah.html">SMK Negeri 1 Probolinggo</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html">Sekolah Menengah Kejuruan</a> <a href="listing.html">Gym</a> </div>
                                <div class="widget-posts-descr-score">5.0</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- widget-posts end-->
            </div>
            <!-- header-modal-container end-->
            <div class="header-modal-top fl-wrap">
                <h4>Sekolah Disukai : <span><strong></strong> Sekolah</span></h4>
                <div class="close-header-modal"><i class="far fa-times"></i></div>
            </div>
        </div>
        <!--wishlist-wrap end -->
    </header>
    <!-- header end-->

    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <?php $this->load->view($namamodule . '/' . $namafileview); ?>
        </div>
        <!--content end-->
    </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS 
<script src="<?php echo base_url('assets/') ?>scripts/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/popper.min.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/plugins.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>        
<script src="<?php echo base_url('assets/') ?>scripts/map-single.js"></script>  
-->
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
<script src="js/map-single.js"></script>


<!-- data table -->
<script src="<?php echo base_url('assets/') ?>scripts/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/') ?>scripts/dataTables.bootstrap4.min.js" type="text/javascript"></script>



<script>
    $(document).ready(function() {
        $('#myTable').DataTable({

            "lengthMenu": true,
            "bLengthChange": true,
            "scrollX": true,
            "responsive": true,
            lengthMenu: [10, 20, 50, 100, 200, 500],

        });
    });
</script>


<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ditolak?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <h5 h5 class="card-title">Keterangan Ditolak</h5>
                            <textarea rows="1" class="form-control autosize-input" style="height: 100px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

</html>

<script>
    $(document).ready(function() {


        load_data();

        load_datatanah();

        function load_data(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>inventory_peralatan/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });


        function load_datatanah(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>inventory_peralatan/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_datatanah(search);
            } else {
                load_datatanah();
            }
        });


    });
</script>