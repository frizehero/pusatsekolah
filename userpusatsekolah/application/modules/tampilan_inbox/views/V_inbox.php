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
                                <li><a href="<?php echo base_url('tampilan_inbox'); ?>" class="user-profile-act"><i class="fal fa-envelope"></i> Inbox<span>3</span></a></li>
                                <li><a href="<?php echo base_url('tampilan_favoritsaya'); ?>"><i class="fal fa-heart"></i>Favorit Saya</a></li>
                                <li><a href="<?php echo base_url('tampilan_terakhirdilihat'); ?>"><i class="fal fa-dot-circle"></i>Terakhir Dilihat <span>7</span></a></li>
                                <li><a href="<?php echo base_url('tampilan_hasilreport'); ?>"><i class="fal fa-times-circle"></i> Hasil Report</a></li>
                                <li><a href="<?php echo base_url('tampilan_akunsaya'); ?>"><i class="fal fa-user-edit"></i> Edit profil</a></li>
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
                        <button class="logout_btn color2-bg"><a href="<?php echo base_url('login/logoutApp'); ?>" style="color:white;">Log Out </a><i class="fas fa-sign-out"></i></button>
                    </div>
                </div>
                <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Tampilan Profil<i class="fas fa-caret-up"></i></a>
                <div class="clearfix"></div>
            </div>
            <!-- dashboard-menu  end-->
            <!-- dashboard content-->
            <div class="col-md-9">
                <!-- dashboard-list-box-->
                <div class="dashboard-list-box fl-wrap">
                    <div class="dashboard-header color-bg fl-wrap">
                        <h3>Indox</h3>
                    </div>
                    <div class="chat-wrapper fl-wrap">
                        <div class="row">
                            <!-- chat-box-->
                            <div class="col-sm-8">
                                <div class="chat-box fl-wrap">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-6"><img src="<?php echo base_url() ?>assets/images/chat.jpg" style="width: 350px; padding-top: 80px; opacity: 50%;"></div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- chat-box end-->
                            <!-- chat-contacts-->
                            <?php tampilnotif() ?>
                            <div class="col-sm-4">
                                <div class="chat-contacts fl-wrap">
                                    <!-- chat-contacts-item-->
                                    <?php $no = 1;
                                    foreach ($tampil as $rowP) { ?>
                                        <a class="chat-contacts-item" href="<?php echo base_url('tampilan_inbox/detailpesan/' . encrypt_url($rowP->id_penerima)); ?>">
                                            <div class="dashboard-message-avatar">
                                                <img src="images/avatar/2.jpg" alt="">
                                                <div class="message-counter">2</div>
                                            </div>
                                            <div class="chat-contacts-item-text">
                                                <h4><?php echo $rowP->nama_penerima; ?></h4>
                                                <span>27 Dec 2018 </span>
                                                <p><?php echo $rowP->pesan; ?></p>
                                            </div>
                                        </a>
                                    <?php $no++;
                                    } ?>
                                </div>
                            </div>
                            <!-- chat-contacts end-->
                        </div>
                    </div>
                    <!-- dashboard-list-box end-->
                </div>
            </div>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>