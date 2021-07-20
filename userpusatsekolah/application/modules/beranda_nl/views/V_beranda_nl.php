<!-- content-->
<div class="content">
    <!--section  -->
    <section class="hero-section"   data-scrollax-parent="true">
        <div class="bg-tabs-wrap">
            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                <!--ms-container-->
                <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/sekolah2.jpg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide ">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/sekolah3.jpg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/sekolah1.jpg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                        </div>
                    </div>
                </div>
                <!--ms-container end-->
            </div>
        </div>
        <div class="container small-container">
            <div class="intro-item fl-wrap">
                <span class="section-separator"></span>
                <div class="bubbles">
                    <h1>Temukan Sekolah Terbaikmu</h1>
                </div>
                <h2 style="color: #ffffff">Pilih sekolah berdasarkan tempat, jenjang, atau kriteriamu</h2>
            </div>
            <!-- main-search-input-tabs-->
            <div class="main-search-input-tabs  tabs-act fl-wrap">                      
                <div class="tabs-container fl-wrap  ">
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-inpt1" class="tab-content first-tab">
                            <div class="main-search-input-wrap fl-wrap">
                                <div class="main-search-input fl-wrap">
                                    <div class="main-search-input-item">
                                        <label><i class="fal fa-keyboard"></i></label>
                                        <input type="text" placeholder="Apa yang sedang kamu cari ?" value=""/>
                                    </div>
                                    <div class="main-search-input-item location autocomplete-container">
                                        <label><i class="fal fa-map-marker-check"></i></label>
                                        <input type="text" placeholder="Kota / Provinsi" class="autocomplete-input" id="autocompleteid" value=""/>
                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                    </div>
                                    <div class="main-search-input-item">
                                        <select data-placeholder="Semua kategori" class="chosen-select" >
                                            <option>Semua kategori</option>
                                            <option>PAUD</option>
                                            <option>TK</option>
                                            <option>SD</option>
                                            <option>SMP</option>
                                            <option>SMA</option>
                                            <option>SMK</option>
                                        </select>
                                    </div>
                                    <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Cari <i class="far fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>                                  
                </div>
                <!--tabs end-->
            </div>
            <!-- main-search-input-tabs end-->
            <div class="hero-categories fl-wrap">
                <h4 class="hero-categories_title">Sedang mencari sesuatu? Temukan dengan mudah menggunakan kategori :</h4>
                <ul class="no-list-style">
                    <li><a href="<?php echo base_url('nl_daftar_paud'); ?>"><i class="far fa-user"></i><span>PAUD</span></a></li>
                    <li><a href="<?php echo base_url('nl_daftar_tk'); ?>"><i class="far fa-user-friends"></i><span>TK</span></a></li>
                    <li><a href="<?php echo base_url('nl_daftar_sd'); ?>"><i class="far fa-user-plus"></i><span>SD</span></a></li>
                    <li><a href="<?php echo base_url('nl_daftar_smp'); ?>"><i class="far fa-play"></i><span>SMP</span></a></li>
                    <li><a href="<?php echo base_url('nl_daftar_sma'); ?>"><i class="far fa-envelope"></i><span>SMA</span></a></li>
                    <li><a href="<?php echo base_url('nl_daftar_smk'); ?>"><i class="far fa-handshake-alt"></i><span>SMK</span></a></li>
                </ul>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
        </div>
    </section>
    <!--section end-->
    <!--section  -->
    <section class="slw-sec" id="sec1">
        <div class="section-title">
            <h2>Informasi Sekolah</h2>
            <div class="section-subtitle">Berita Terbaru</div>
            <span class="section-separator"></span>
            <p>Berbagai informasi tentang sekolah bisa kamu temukan di PusatSekolah.com</p>
        </div>
        <div class="listing-slider-wrap fl-wrap">
            <div class="listing-slider fl-wrap">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--  swiper-slide  -->
                        <div class="swiper-slide">
                            <div class="listing-slider-item fl-wrap">
                                <!-- listing-item  -->
                                <div class="listing-item listing_carditem">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="<?php echo base_url('nl_tampilan_event'); ?>" class="geodir-category-img-wrap fl-wrap">
                                            <img src="images/sekolah/event1.jpg" alt="" style="height: 270px;"> 
                                            </a>
                                            <div class="geodir-category-opt">
                                                <div class="listing_carditem fl-wrap">
                                                    <div class="section-title">
                                                        <h2 style="color: #ffffff;">EVENT SEKOLAH</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end -->                                                   
                            </div>
                        </div>
                        <!--  swiper-slide end  -->  
                        <!--  swiper-slide  -->
                        <div class="swiper-slide">
                            <div class="listing-slider-item fl-wrap">
                                <!-- listing-item  -->
                                <div class="listing-item listing_carditem">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="<?php echo base_url('nl_ppdb_user'); ?>" class="geodir-category-img-wrap fl-wrap">
                                            <img src="images/sekolah/ppdb1.jpg" alt="" style="height: 270px;"> 
                                            </a>
                                            <div class="geodir-category-opt">
                                                <div class="listing_carditem fl-wrap">
                                                    <div class="section-title">
                                                        <h2 style="color: #ffffff;">PPDB 2021</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end -->                                                   
                            </div>
                        </div>
                        <!--  swiper-slide end  -->                                                                                                                      
                        <!--  swiper-slide  -->
                        <div class="swiper-slide">
                            <div class="listing-slider-item fl-wrap">
                                <!-- listing-item  -->
                                <div class="listing-item listing_carditem">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <a href="<?php echo base_url('nl_tampilan_produk'); ?>" class="geodir-category-img-wrap fl-wrap">
                                            <img src="images/sekolah/produk1.jpg" alt="" style="height: 270px;"> 
                                            </a>
                                            <div class="geodir-category-opt">
                                                <div class="listing_carditem fl-wrap">
                                                    <div class="section-title">
                                                        <h2 style="color: #ffffff;">PRODUK SEKOLAH</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end -->                                                   
                            </div>
                        </div>
                        <!--  swiper-slide end  -->                                  
                    </div>
                </div>
                <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
                <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
            </div>
            <div class="tc-pagination_wrap">
                <div class="tc-pagination2"></div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="soc-log" style="width: 400px;">
                <a href="tampilan-signin-signup.html" class="facebook-log"> Daftarkan Sekolah Anda di PusatSekolah.com</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <section>
        <div class="container big-container">
            <div class="section-title">
                <h2><span>Sekolah Terpopuler</span></h2>
                <div class="section-subtitle">PALING POPULER</div>
                <span class="section-separator"></span>
                <p>Sekolah populer pilihan kami ini mungkin cocok untuk kamu</p>
            </div>
            <div class="listing-filters gallery-filters fl-wrap">
                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">Semua Jenjang</a>
                <a href="#" class="gallery-filter" data-filter=".paud">PAUD</a>
                <a href="#" class="gallery-filter" data-filter=".tk">TK</a>
                <a href="#" class="gallery-filter" data-filter=".sd">SD</a>
                <a href="#" class="gallery-filter" data-filter=".smp">SMP</a>
                <a href="#" class="gallery-filter" data-filter=".sma">SMA</a>
                <a href="#" class="gallery-filter" data-filter=".smk">SMK</a>
            </div>
            <div class="grid-item-holder gallery-items fl-wrap">
                <?php $no = 1;
                foreach ($tampil as $rowP) { ?>
                    <div class="gallery-item paud">
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                    <img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_sampul; ?>" alt="" style="height: 185px;"> 
                                    </a>
                                    <div class="listing-avatar"><a href="tampilan-beranda-sekolah.html"><img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_profil; ?>" alt="" style="background: #ffffff"></a>
                                        <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                    </div>
                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">
                                            <div class="review-score">4.8</div>
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                            <br>
                                            <div class="reviews-count">12 reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <br>
                                            <h3 class="title-sin_map"><a href="<?php echo base_url('nl_beranda_su'); ?>"><?php echo $rowP->nama_sekolah; ?></a></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> <?php echo $rowP->kota_kab_sekolah; ?>, <?php echo $rowP->provinsi_sekolah; ?>, Indonesia</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text"><?php echo $rowP->nama_sekolah; ?> adalah sekolah yang baik untuk anak - anak bunda.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->                              
                    </div>
                <?php $no++;
                } ?>                                                                                    
            </div>
        </div>
    </section>

    <section class="parallax-section small-par" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="images/sekolah/sma1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay  op7"></div>
        <div class="container">
            <div class=" single-facts single-facts_2 fl-wrap">
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num=""></div>
                            </div>
                        </div>
                        <h6>Total Pengunjung Website</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="<?php echo $totalsekolah?>"></div>
                            </div>
                        </div>
                        <h6>Jumlah Sekolah Terdaftar</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="<?php echo $totalakun?>"></div>
                            </div>
                        </div>
                        <h6>Jumlah Akun Terdaftar</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="<?php echo $totalkomentar?>"></div>
                            </div>
                        </div>
                        <h6>Komentar Ditulis Hari Ini</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
            </div>
        </div>
    </section>

    <section>
        <div class="container big-container">
            <div class="section-title">
                <h2><span>Sekolah Terdekat</span></h2>
                <div class="section-subtitle">REKOMENDASI</div>
                <span class="section-separator"></span>
            </div>
            <div class="grid-item-holder gallery-items fl-wrap">

                <div class="gallery-item sd">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 185px;"> 
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                    <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                </div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.2</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        <br>                                                
                                        <div class="reviews-count">6 reviews</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap ">
                                    <div class="geodir-category-content-title-item">
                                        <br>
                                        <h3 class="title-sin_map"><a href="tampilan-beranda-sekolah.html">SDN Sukabumi 2</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Probolinggo, Jawa Timur, Indonesia</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                    <!--<div class="facilities-list fl-wrap">
                                        <div class="facilities-list-title">Facilities : </div>
                                        <ul class="no-list-style">
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->  
                </div>

                <div class="gallery-item smk">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/smk1.jpg" alt="" style="height: 185px;"> 
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosmk1.png" alt="" style="background: #ffffff"></a>
                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                </div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.1</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        <br>
                                        <div class="reviews-count">26 reviews</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <br>
                                        <h3 class="title-sin_map"><a href="tampilan-beranda-sekolah.html">SMK Negeri 1 Probolinggo</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <p class="small-text">Bekerjasama dengan TNI AD mendidik anak - anak bunda berprestasi.</p>
                                    <!--<div class="facilities-list fl-wrap">
                                        <div class="facilities-list-title">Facilities : </div>
                                        <ul class="no-list-style">
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->                                                        
                </div>

                <div class="gallery-item smp">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/smp2.jpeg" alt="" style="height: 185px;"> 
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosmp2.png" alt="" style="background: #ffffff"></a>
                                    <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                </div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.7</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <br>
                                        <div class="reviews-count">9 reviews</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <br>
                                        <h3 class="title-sin_map"><a href="tampilan-beranda-sekolah.html">SMP Negeri 34 Probolinggo</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Probolinggo, Jawa Timur, Indoneisa</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                    <!--<div class="facilities-list fl-wrap">
                                        <div class="facilities-list-title">Facilities : </div>
                                        <ul class="no-list-style">
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                        </ul>
                                    </div>-->
                                </div>
                        </article>
                    </div>
                    <!-- listing-item end -->                                           
                </div>

                <div class="gallery-item sma">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sma1.jpg" alt="" style="height: 185px;"> 
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosma1.png" alt="" style="background: #ffffff"></a>
                                    <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                </div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.2</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        <br>                                                
                                        <div class="reviews-count">6 reviews</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap ">
                                    <div class="geodir-category-content-title-item">
                                        <br>
                                        <h3 class="title-sin_map"><a href="tampilan-beranda-sekolah.html">SMA Negeri 8 Probolinggo</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Probolinggo, Jawa Timur, Indonesia</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                    <!--<div class="facilities-list fl-wrap">
                                        <div class="facilities-list-title">Facilities : </div>
                                        <ul class="no-list-style">
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                        </ul>
                                    </div>-->
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->  
                </div>          
            </div>
            <a href="<?php echo base_url('nl_sekolah_terdekat'); ?>" class="btn  dec_btn  color2-bg">Lihat Sekolah Terdekat Lainnya<i class="fal fa-arrow-alt-right"></i></a>
        </div>
    </section>

    <section   class="gray-bg hidden-section particles-wrapper">
        <div class="container">
            <div class="section-title">
                <h2>Pilihan Kota Untuk Kamu</h2>
                <div class="section-subtitle">Pilih kota belajarmu</div>
            </div>
            <div class="listing-item-grid_container fl-wrap">
                <div class="row">
                    <!--  listing-item-grid  -->
                    <div class="col-sm-4">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="images/sekolah/yogyakarta.jpg"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-counter color2-bg"><span>160 </span> Sekolah Terdaftar</div>
                            <div class="listing-item-grid_title">
                                <h3><a href="<?php echo base_url('nl_kota_pilihan'); ?>">Yogyakarta</a></h3>
                                <p>Constant care and attention to the patients makes good record</p>
                            </div>
                        </div>
                    </div>
                    <!--  listing-item-grid end  -->
                    <!--  listing-item-grid  -->
                    <div class="col-sm-4">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="images/sekolah/jakarta.jpg"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-counter color2-bg"><span>220 </span> Sekolah Terdaftar</div>
                            <div class="listing-item-grid_title">
                                <h3><a href="tampilan-kota-pilihan.html">Jakarta</a></h3>
                                <p>Constant care and attention to the patients makes good record</p>
                            </div>
                        </div>
                    </div>
                    <!--  listing-item-grid end  -->                                
                    <!--  listing-item-grid  -->
                    <div class="col-sm-4">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="images/sekolah/surabaya.jpg"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-counter color2-bg"><span>189 </span> Sekolah Terdaftar</div>
                            <div class="listing-item-grid_title">
                                <h3><a href="listing.html">Surabaya</a></h3>
                                <p>Constant care and attention to the patients makes good record</p>
                            </div>
                        </div>
                    </div>
                    <!--  listing-item-grid end  -->
                    <!--  listing-item-grid  -->
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="images/sekolah/aceh.jpg"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-counter color2-bg"><span>213 </span> Sekolah Terdaftar</div>
                            <div class="listing-item-grid_title">
                                <h3><a href="listing.html">Aceh</a></h3>
                                <p>Constant care and attention to the patients makes good record</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="listing-item-grid">
                            <div class="bg"  data-bg="images/sekolah/malang.jpg"></div>
                            <div class="d-gr-sec"></div>
                            <div class="listing-counter color2-bg"><span>170 </span> Sekolah Terdaftar</div>
                            <div class="listing-item-grid_title">
                                <h3><a href="listing.html">Malang</a></h3>
                                <p>Constant care and attention to the patients makes good record</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                                                                                                                    
                </div>
            </div>
            <a href="<?php echo base_url('nl_kota_lainnya'); ?>" class="btn dec_btn   color2-bg">Lihat Kota Lainnya<i class="fal fa-arrow-alt-right"></i></a>
        </div>
    </section>

    <!--section end-->   
    <!--section  -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2> Kata Mereka Tentang Pusat Sekolah</h2>
                <div class="section-subtitle">Clients Reviews</div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="testimonilas-carousel-wrap fl-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
            <div class="testimonilas-carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Saya merasa terbantu dengan adanya Pusat Sekolah ini, saya tidak perlu repot - repot mencari informasi tentang sekolah yang saya inginkan, atau bahkan harus mencari kontak alumninya, semua lengkap."</p>
                                    <a href="#" class="testi-link" target="_blank">Lihat Profil</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Andy Dimasky</h3>
                                        <h4>Siswa SMK Ngeri 1 Probolinggo</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="images/sekolah/profil1.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Semenjak ada Pusat Sekola, saya yang notabene sering pindah - pindah koota tinggal tidak perlu repot - repot untuk mendatangi sekolah yang akan menjadi sekolah anak saya nantinya."</p>
                                    <a href="#" class="testi-link" target="_blank">Lihat Profil</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Jamiani Dwi</h3>
                                        <h4>Ibu Rumah Tangga</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Semenjak ada Pusat Sekolah, sekolah saya memiliki website yang aktraktif dan informatif, sehingga lebih mudah menjangkau peserta didik baru."</p>
                                    <a href="#" class="testi-link" target="_blank">Lihat Profil</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Budi Pamungkas</h3>
                                        <h4>Kepala Sekolah</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="images/sekolah/logotk2.jpg" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>"Desain yang simple dan mudah dipahami dari Pusat Sekolah membuat kami mudah dalam mengaplikasikannya. Tentunya hal seperti ini sangat dibutuhkan seluruh sekolah di Indonesia untuk informasi sekolah mereka."</p>
                                    <a href="#" class="testi-link" target="_blank">Lihat Profil</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>SMK Negeri 1 Kota Probolinggo</h3>
                                        <h4>Sekolah</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                    </div>
                </div>
            </div>
            <div class="tc-pagination"></div>
        </div>

        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgMiddle">
            <div class="wave-bg-anim waveMiddle" style="background-image: url('images/wave-top.png')"></div>
            </div>

            <div class="waveWrapperInner bgBottom">
            <div class="wave-bg-anim waveBottom" style="background-image: url('images/wave-top.png')"></div>
            </div>
        </div>
    </section>
    <!--section end-->                
    <!--section  -->
    <section class="gray-bg">
        <div class="container">
            <div class="clients-carousel-wrap fl-wrap">
                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                <div class="clients-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/sekolah/logobawah1.png" alt="" style="height: 80px; width: auto;"></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/sekolah/logobawah2.png" alt="" style="height: 80px; width: auto;"></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/sekolah/logosmk1.png" alt="" style="height: 80px; width: auto;"></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/logoatas.png" alt="" style="height: 60px; width: auto;"></a>
                            </div>
                            <div class="swiper-slide"></div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/sekolah/logosmk2.png" alt="" style="height: 80px; width: auto;"></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="images/sekolah/logotk1.png" alt="" style="height: 100px; width: auto;"></a>
                            </div>
                            <!--client-item end-->                                                                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
</div>
<!--content end-->
<!--footer -->
<footer class="main-footer fl-wrap">
    <!-- footer-header-->
    <div class="footer-header fl-wrap grad ient-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div  class="subscribe-header">
                        <h3>Subscribe Pusat Sekolah untuk <span>notifikasi terbaru</span></h3>
                        <p>Kamu hanya perlu menuliskan alamat emailmu</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="subscribe-widget">
                        <div class="subcribe-form">
                            <form id="subscribe">
                                <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Tulis Email Anda ..." spellcheck="false" type="text">
                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-envelope"></i></button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-header end-->
    <!--footer-inner-->
    <div class="footer-inner   fl-wrap">
        <div class="container">
            <div class="row">
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-logo"><a href="index.html"><img src="<?php echo base_url() ?>images/logoatas.png" alt=""></a></div>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>Pusat Sekolah hadir sebagai salah satu sara mudah bagi sekolah - sekolah di selurh Indonesia agar saling terhubung dan mudah dalam menyampaikan informasi tentang sekolah mereka.   </p>
                            <ul  class="footer-contacts fl-wrap no-list-style">
                                <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="" target="_blank">cp@pusatsekolah.com</a></li>
                                <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="" target="_blank">Ngijo, Malang, Jawa Timur, Indonesia</a></li>
                                <li><span><i class="fal fa-phone"></i> Phone :</span><a href="">(+62)8213567331</a></li>
                            </ul>
                            <div class="footer-social">
                                <span>Find  us on: </span>
                                <ul class="no-list-style">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <h3>Event Terbaru</h3>
                        <div class="footer-widget-posts fl-wrap">
                            <ul class="no-list-style">
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/4.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">SMK Negeri 1 Probolinggo Rayakan Dies Natalis Ke-98</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 21 Mar 09.05 </span> 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/2.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Pusat Sekolah Berkunjung ke Istana Presiden</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 18.21 </span> 
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="<?php echo base_url() ?>images/all/7.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">SMPN 10 Karanganyar Mulai Buka PPDB 2021</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 16.42 </span>
                                    </div>
                                </li>
                            </ul>
                            <a href="<?php echo base_url('tampilan_event'); ?>" class="footer-link">Baca lebih banyak <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget  -->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap ">
                        <h3>Pusat Sekolah</h3>
                        <div>
                            <ul  class="footer-contacts no-list-style">
                                <li><a href="<?php echo base_url('nl_job_user'); ?>" target="_blank">Job Pusat Sekolah</a></li>
                                <li><a href="<?php echo base_url('tampilan_nilaikami'); ?>" target="_blank">Nilai Kami !</a></li>
                                <li><a href="<?php echo base_url('nl_pusat_bantuan'); ?>" target="_blank">Layanan Bantuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
            </div>
        </div>
        <!-- footer bg-->
        <div class="footer-bg" data-ran="4"></div>
        <div class="footer-wave">
            <svg viewbox="0 0 100 25">
                <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
            </svg>
        </div>
        <!-- footer bg  end-->
    </div>
    <!--footer-inner end -->
    <!--sub-footer-->
    <div class="sub-footer  fl-wrap">
        <div class="container">
            <div style="align-items: center; color: #ffffff"> &#169; Pusat Sekolah 2021</div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
<!--footer end --> 