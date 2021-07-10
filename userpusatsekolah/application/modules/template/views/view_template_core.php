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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/shop.css">
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
    <!-- <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div> -->
    <!--loader end-->
    <!-- header -->
    <header class="main-header">
        <!-- logo-->
        <a href="<?php echo base_url('beranda_user'); ?>" class="logo-holder"><img src="<?php echo base_url() ?>images/logoatas.png" alt=""></a>
        <!-- logo end-->
        <!-- header-search_btn-->
        <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
        <!-- header-search_btn end-->
        <!-- header opt -->
        <a href="pusatsekolah/signup-adminsekolah.html" class="add-list color-bg">Daftarkan Sekolahmu<span><i class="fal fa-layer-plus"></i></span></a>
        <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
        <div class="header-user-menu">
            <div class="header-user-name">
                <span><img src="<?php echo base_url ()?>assets/images/fotouser/<?php echo $nama['fotop_user']?>" alt=""></span>
                Hai, <?php echo $nama['nama'] ?>
            </div>
            <ul>
                <li><a href="<?php echo base_url('edit_profil'); ?>"> Akun Saya</a></li>
                <li><a href="<?php echo base_url('tampilan_nilaikami'); ?>"> Nilai Kami! </a></li>
                <li><a href="<?php echo base_url('login/logoutApp'); ?>">Log Out</a></li>
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
                        <a href="<?php echo base_url('tampilan_event'); ?>">Event</a>
                    </li>
                    <li>
                        <a href="#">Kami <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul style="width: 180px;">
                            <li><a href="<?php echo base_url('tentang_kami'); ?>">Tentang Kami</a></li>
                            <li><a href="<?php echo base_url('kontak_user'); ?>">Kontak</a></li>
                            <li><a href="<?php echo base_url('pusat_bantuan'); ?>">Pusat Bantuan</a></li>
                            <li><a href="<?php echo base_url('syaratketentuan_umum'); ?>">Syarat & Ketentuan</a></li>
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
                            <div class="widget-posts-img"><a href="<?php echo base_url('beranda_su'); ?>"><img src="<?php echo base_url() ?>images/sekolah/sd1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="<?php echo base_url('beranda_su'); ?>">SDN Ardimulyo 1</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur, Probolinggo</a></div>
                                <div class="widget-posts-descr-link"><a href="<?php echo base_url('daftar_sd'); ?>">Sekolah Dasar </a></div>
                                <div class="widget-posts-descr-score">4.1</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="<?php echo base_url('beranda_su'); ?>"><img src="<?php echo base_url() ?>images/sekolah/tk1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="<?php echo base_url('beranda_su'); ?>">TK Barnadian Uta</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Surabaya, Jawa Timur, Indonesia </a></div>
                                <div class="widget-posts-descr-link"><a href="<?php echo base_url('daftar_tk'); ?>">Taman Kanak-Kanak </a> </div>
                                <div class="widget-posts-descr-score">5.0</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="<?php echo base_url('beranda_su'); ?>"><img src="images/sekolah/paud2.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="<?php echo base_url('beranda_su'); ?>">PAUD Bhayangkara 205</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>Lebak Bulus, Jakarta, Indonesia</a></div>
                                <div class="widget-posts-descr-link"><a href="<?php echo base_url('daftar_paud'); ?>">Pendidikan Anak Usia Dini</a> </div>
                                <div class="widget-posts-descr-score">4.2</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="<?php echo base_url('beranda_su'); ?>"><img src="<?php echo base_url() ?>images/sekolah/smk1.jpg" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="<?php echo base_url('beranda_su'); ?>">SMK Negeri 1 Probolinggo</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                <div class="widget-posts-descr-link"><a href="<?php echo base_url('daftar_smp'); ?>">Sekolah Menengah Kejuruan</a> <a href="listing.html">Gym</a> </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwQIUGOL2hDmYztuBIyda_TXzK7S8OtRI&callback"></script>
<script>
    // variabel global marker
    var marker;

    function taruhMarker(peta, posisiTitik) {

        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta,
                icon: "http://localhost/pusatsekolah/pusatsekolah/assets/images/logomaps.ico"
            });
        }

        // isi nilai koordinat ke form
        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();

    }

    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-7.900074, 112.6046973),
            zoom: 11,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });

    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>