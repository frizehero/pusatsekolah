<div class="content">
    <!--  section  -->
    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
        <div class="container">
            <!--<div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Edit Profil</a><span>Main page</span></div>-->
            <!--Tariff Plan menu-->
            <div class="tfp-btn"><span>Beralih Ke : </span>
                <a href="tampilan-beranda-user.html"><strong>Tampilan Sekolah</strong></a>
            </div>
            <!--Tariff Plan menu end-->
            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                <h1><span>Emak Sukses</span></h1>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="dashboard-header fl-wrap" style="height: 80px;">
            <div class="container">
                <div class="dashboard-header_conatiner fl-wrap">
                    <div class="dashboard-header-avatar">
                        <img src="images/avatar/4.jpg" alt="">
                        <a href="tampilan-edit-profiluser.html" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
        <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
            <div class="circle_bg-bal circle_bg-bal_small"></div>
        </div>
        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:40%;bottom:-70px;">
            <div class="circle_bg-bal circle_bg-bal_middle"></div>
        </div>
        <div class="circle-wrap" style="right:40%;top:-10px;">
            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
        <div class="circle-wrap" style="right:55%;top:90px;">
            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
    </section>
    <!--  section  end-->
    <!--  section  -->
    <section class="gray-bg main-dashboard-sec" id="sec1">
        <div class="container">
            <!--  dashboard-menu-->
            <div class="col-md-3">
                <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                <div class="clearfix"></div>
                <div class="fixed-bar fl-wrap" id="dash_menu">
                    <div class="user-profile-menu-wrap fl-wrap block_box">
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>AKUN SAYA</h3>
                            <ul class="no-list-style">
                                <li><a href="<?php echo base_url('tampilan_inbox'); ?>"><i class="fal fa-envelope"></i> Inbox<span>3</span></a></li>
                                <li><a href="<?php echo base_url('tampilan_favoritsaya'); ?>"><i class="fal fa-heart"></i>Favorit Saya</a></li>
                                <li><a href="<?php echo base_url('tampilan_terakhirdilihat'); ?>"><i class="fal fa-dot-circle"></i>Terakhir Dilihat <span>7</span></a></li>
                                <li><a href="<?php echo base_url('tampilan_hasilreport'); ?>"><i class="fal fa-times-circle"></i> Hasil Report</a></li>
                                <li><a href="<?php echo base_url('tampilan_akunsaya'); ?>" class="user-profile-act"><i class="fal fa-user-edit"></i> Edit profil</a></li>
                                <li><a href="<?php echo base_url('tampilan_alumniuser'); ?>"><i class="fal fa-layer-plus"></i>Alumni</a></li>
                                <li><a href="<?php echo base_url('tampilan_undangteman'); ?>"><i class="fal fa-user-plus"></i>Undang Teman</a></li>
                                <li><a href="<?php echo base_url('tampilan_ubahpassword'); ?>"><i class="fal fa-key"></i>Ubah Password</a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>BANTUAN</h3>
                            <ul class="no-list-style">
                                <li><a href="<?php echo base_url('pusat_bantuan'); ?>"><i class="fal fa-th-list"></i> Pusat Bantuan </a></li>
                                <li><a href="<?php echo base_url('tampilan_nilaikami'); ?>"><i class="fal fa-comments-alt"></i> Suka Pusat Sekolah? Nilai Kami! </a></li>
                                <li><a href="<?php echo base_url('tampilan_hapusakun'); ?>"><i class="fal fa-edit"></i> Ajukan Penghapusan Akun</a></li>
                                <li><a href="<?php echo base_url('tampilan_chatps'); ?>"><i class="fal fa-envelope"></i> Chat Dengan Pusat Sekolah <span>3</span></a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <button class="logout_btn color2-bg">Log Out <i class="fas fa-sign-out"></i></button>
                    </div>
                </div>
                <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Tampilan Profil<i class="fas fa-caret-up"></i></a>
                <div class="clearfix"></div>
            </div>
            <!-- dashboard-menu  end-->
            <!-- dashboard content-->
            <div class="col-md-9">
                <div class="dashboard-title   fl-wrap">
                    <h3>Terakhir Dilihat</h3>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="gallery-item sd" style="width: 280px;">
                    <article class="geodir-category-listing fl-wrap" style="width: 270px;">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/sekolah/sd1.jpg" alt="" style="height: 160px;">
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                    </div>
                                    <br>
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="pagination">
                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                    <a href="#">1</a>
                    <a href="#" class="current-page">2</a>
                    <a href="#">3</a>
                    <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                </div>
                <!-- profile-edit-container end-->
            </div>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>