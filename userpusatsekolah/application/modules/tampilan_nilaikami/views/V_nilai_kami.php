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
                                <li><a href="tampilan-inbox-user.html"><i class="fal fa-envelope"></i> Inbox<span>3</span></a></li>
                                <li><a href="tampilan-favoritsaya.html"><i class="fal fa-heart"></i>Favorit Saya</a></li>
                                <li><a href="tampilan-terakhirdilihat-user.html"><i class="fal fa-dot-circle"></i>Terakhir Dilihat <span>7</span></a></li>
                                <li><a href="tampilan-hasilreport-user.html"><i class="fal fa-times-circle"></i> Hasil Report</a></li>
                                <li><a href="tampilan-edit-profiluser.html"><i class="fal fa-user-edit"></i> Edit profil</a></li>
                                <li><a href="tampilan-alumni-user.html"><i class="fal fa-layer-plus"></i>Alumni</a></li>
                                <li><a href="tampilan-undang-teman.html"><i class="fal fa-user-plus"></i>Undang Teman</a></li>
                                <li><a href="tampilan-ubah-password.html"><i class="fal fa-key"></i>Ubah Password</a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>BANTUAN</h3>
                            <ul class="no-list-style">
                                <li><a href="tampilan-pusatbantuan.html"><i class="fal fa-th-list"></i> Pusat Bantuan </a></li>
                                <li><a href="tampilan-nilaips-user.html" class="user-profile-act"><i class="fal fa-comments-alt"></i> Suka Pusat Sekolah? Nilai Kami! </a></li>
                                <li><a href="tampilan-hapusakun-user.html"><i class="fal fa-edit"></i> Ajukan Penghapusan Akun</a></li>
                                <li><a href="tampilan-chatps-user.html"><i class="fal fa-envelope"></i> Chat Dengan Pusat Sekolah <span>3</span></a></li>
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
                <!-- profile-edit-container-->
                <div class="list-single-main-item fl-wrap block_box" id="sec6">
                    <div class="list-single-main-item-title fl-wrap">
                        <h3>Nilai Pusat Sekolah</h3>
                    </div>
                    <!-- Add Review Box -->
                    <div id="add-review" class="add-review-box">
                        <!-- Review Comment -->
                        <form id="add-comment" class="add-comment  custom-form" name="rangeCalc">
                            <fieldset>
                                <div class="review-score-form fl-wrap">
                                    <div class="review-range-container">
                                        <!-- review-range-item-->
                                        <div class="review-range-item">
                                            <div class="range-slider-title">Membantu</div>
                                            <div class="range-slider-wrap ">
                                                <input type="text" class="rate-range" data-min="0" data-max="5" name="rgcl" data-step="1" value="4">
                                            </div>
                                        </div>
                                        <!-- review-range-item end -->
                                        <!-- review-range-item-->
                                        <div class="review-range-item">
                                            <div class="range-slider-title">Informatif</div>
                                            <div class="range-slider-wrap ">
                                                <input type="text" class="rate-range" data-min="0" data-max="5" name="rgcl" data-step="1" value="1">
                                            </div>
                                        </div>
                                        <!-- review-range-item end -->
                                        <!-- review-range-item-->
                                        <div class="review-range-item">
                                            <div class="range-slider-title">Pelayanan</div>
                                            <div class="range-slider-wrap ">
                                                <input type="text" class="rate-range" data-min="0" data-max="5" name="rgcl" data-step="1" value="5">
                                            </div>
                                        </div>
                                        <!-- review-range-item end -->
                                        <!-- review-range-item-->
                                        <div class="review-range-item">
                                            <div class="range-slider-title">Fitur</div>
                                            <div class="range-slider-wrap">
                                                <input type="text" class="rate-range" data-min="0" data-max="5" name="rgcl" data-step="1" value="3">
                                            </div>
                                        </div>
                                        <!-- review-range-item end -->
                                    </div>
                                    <div class="review-total">
                                        <span><input type="text" name="rg_total" data-form="AVG({rgcl})" value="0"></span>
                                        <strong>Your Score</strong>
                                    </div>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <textarea cols="40" rows="3" placeholder="Tambahkan Komentar :"></textarea>
                                    <div class="clearfix"></div>
                                    <button class="btn  color2-bg  float-btn">Kirim Reviev <i class="fal fa-paper-plane"></i></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Add Review Box / End -->
                </div>
                <!-- profile-edit-container end-->
            </div>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>