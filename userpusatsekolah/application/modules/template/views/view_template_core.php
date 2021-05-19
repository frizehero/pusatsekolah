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
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="msapplication-tap-highlight" content="no">
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/logo.ico">
</head>

<style type="text/css">
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place front is invalid - may break your css so removed */
        padding-top: 100px;
        /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
        left: 0;
        right: 0;
        /* Full width (left and right 0) */
        top: 0;
        bottom: 0;
        /* Full height top and bottom 0 */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        z-index: 9999;
        /* Sit on top - higher than any other z-index in your site*/


    }

    .modal-backdrop {
        z-index: -1;
    }
</style>


<body>


    <?php



    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

    $menu = $uri_segments[3];

    ?>
    <header class="main-header">
        <!-- logo-->
        <a href="tampilan-beranda-user.html" class="logo-holder"><img src="images/logoatas.png" alt=""></a>
        <!-- logo end-->
        <!-- header-search_btn-->         
        <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
        <!-- header-search_btn end-->
        <!-- header opt --> 
        <a href="pusatsekolah/signup-adminsekolah.html" class="add-list color-bg">Daftarkan Sekolahmu<span><i class="fal fa-layer-plus"></i></span></a>
        <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
        <div class="header-user-menu">
            <div class="header-user-name">
                <span><img src="images/avatar/4.jpg" alt=""></span>
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
                        <a href="tampilan-beranda-user.html" class="act-link">Home</a>
                        <!--second level end-->
                    </li>
                    <!--<li>
                        <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                        second level
                        <ul>
                            <li><a href="listing.html">Column map</a></li>
                            <li><a href="listing2.html">Column map 2</a></li>
                            <li><a href="listing3.html">Fullwidth Map</a></li>
                            <li><a href="listing4.html">Fullwidth Map 2</a></li>
                            <li><a href="listing5.html">Without Map</a></li>
                            <li><a href="listing6.html">Without Map 2</a></li>
                            <li>
                                <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                third  level
                                <ul>
                                    <li><a href="listing-single.html">Style 1</a></li>
                                    <li><a href="listing-single2.html">Style 2</a></li>
                                    <li><a href="listing-single3.html">Style 3</a></li>
                                    <li><a href="listing-single4.html">Style 4</a></li>
                                </ul>
                                third  level end
                            </li>
                        </ul>
                        second level end
                    </li>-->
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
                        <input type="text" placeholder="Apa yang sedang kamu cari ?"   value=""/>  
                    </div>
                    <!-- header-search-input end -->  
                    <!-- header-search-input --> 
                    <div class="header-search-input location autocomplete-container">
                        <label><i class="fal fa-map-marker"></i></label>
                        <input type="text" placeholder="Lokasi..." class="autocomplete-input" id="autocompleteid2" value=""/>
                        <a href="#"><i class="fal fa-dot-circle"></i></a>
                    </div>
                    <!-- header-search-input end -->                                        
                    <!-- header-search-input --> 
                    <div class="header-search-input header-search_selectinpt ">
                        <select data-placeholder="Category" class="chosen-select no-radius" >
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
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html" >Sekolah Dasar </a></div>
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
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html" >Taman Kanak-Kanak </a>  </div>
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
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html" >Pendidikan Anak Usia Dini</a> </div>
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
                                <div class="widget-posts-descr-link"><a href="tampilan-beranda-sekolah.html" >Sekolah Menengah Kejuruan</a> <a href="listing.html" >Gym</a> </div>
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

    <script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url('assets/') ?>scripts/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/popper.min.js"></script>



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