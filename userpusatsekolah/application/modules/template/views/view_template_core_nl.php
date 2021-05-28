<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from townhub.kwst.net/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:54:06 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Pusat Sekolah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>images/logo.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!-- logo-->
                <a href="<?php echo base_url('beranda_nl'); ?>" class="logo-holder"><img src="<?php echo base_url() ?>images/logoatas.png" alt=""></a>
                <!-- logo end-->
                <!-- header-search_btn-->         
                <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
                <a href="<?php echo base_url('login'); ?>" class="link">
                    <div class="show-reg-form avatar-img"><i class="fal fa-user"></i>Sign In</div>
                </a>
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
                                <a href="<?php echo base_url('beranda_nl'); ?>" class="act-link">Home</a>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="<?php echo base_url('nl_tampilan_event'); ?>">Event</a>
                            </li>
                            <li>
                                <a href="#">Kami <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul style="width: 180px;">
                                    <li><a href="<?php echo base_url('nl_tentang_kami'); ?>">Tentang Kami</a></li>
                                    <li><a href="<?php echo base_url('nl_kontak_user'); ?>">Kontak</a></li>
                                    <li><a href="<?php echo base_url('nl_pusat_bantuan'); ?>">Pusat Bantuan</a></li>
                                    <li><a href="<?php echo base_url('nl_syaratketentuan_umum'); ?>">Syarat & Ketentuan</a></li>
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
                                <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2" value=""/>
                                <a href="#"><i class="fal fa-dot-circle"></i></a>
                            </div>
                            <!-- header-search-input end -->                                        
                            <!-- header-search-input --> 
                            <div class="header-search-input header-search_selectinpt ">
                                <select data-placeholder="Category" class="chosen-select no-radius" >
                                    <option>Semua kategori</option>
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
                            <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i> Cari </button>
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
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>  
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                                        <div class="widget-posts-descr-score">4.1</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                                        <div class="widget-posts-descr-score">5.0</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                                        <div class="widget-posts-descr-score">4.2</div>
                                        <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                        <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
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
                        <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
                        <div class="close-header-modal"><i class="far fa-times"></i></div>
                    </div>
                </div>
                <!--wishlist-wrap end --> 
            </header>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                <?php $this->load->view($namamodule . '/' . $namafileview); ?>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->    
        </div>
        <!-- Main end -->
    </body>
    
    <!--=============== scripts  ===============-->
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>        
    <script src="js/map-single.js"></script>     

<!-- Mirrored from townhub.kwst.net/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:54:12 GMT -->
</html>