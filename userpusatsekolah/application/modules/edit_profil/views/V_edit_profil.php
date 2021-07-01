<div class="content">
                    <!--  section  -->
    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
        <div class="container">
            <!--<div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Edit Profil</a><span>Main page</span></div>-->
            <!--Tariff Plan menu-->
            <div   class="tfp-btn"><span>Beralih Ke : </span>
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
        <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
            <div class="circle_bg-bal circle_bg-bal_middle"></div>
        </div>
        <div class="circle-wrap" style="right:40%;top:-10px;"  >
            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
        <div class="circle-wrap" style="right:55%;top:90px;"  >
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
                                <li><a href="<?php echo base_url('tampilan_akunsaya'); ?>"  class="user-profile-act"><i class="fal fa-user-edit"></i> Edit profil</a></li>
                                <li><a href="<?php echo base_url('tampilan_alumniuser'); ?>"><i class="fal fa-layer-plus"></i>Alumni</a></li>
                                <li><a href="<?php echo base_url('tampilan_undangteman'); ?>"><i class="fal fa-user-plus"></i>Undang Teman</a></li>
                                <li><a href="<?php echo base_url('tampilan_ubahpassword'); ?>"><i class="fal fa-key"></i>Ubah Password</a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>BANTUAN</h3>
                            <ul  class="no-list-style">
                                <li><a href="<?php echo base_url('pusat_bantuan'); ?>"><i class="fal fa-th-list"></i> Pusat Bantuan  </a></li>
                                <li><a href="<?php echo base_url('tampilan_nilaikami'); ?>"><i class="fal fa-comments-alt"></i> Suka Pusat Sekolah? Nilai Kami! </a></li>
                                <li><a href="<?php echo base_url('tampilan_hapusakun'); ?>"><i class="fal fa-edit"></i> Ajukan Penghapusan Akun</a></li>
                                <li><a href="<?php echo base_url('tampilan_chatps'); ?>"><i class="fal fa-envelope"></i> Chat Dengan Pusat Sekolah <span>3</span></a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <button class="logout_btn color2-bg"><a href="<?php echo base_url('login/logoutApp'); ?>" style="color:white;">Log Out </a>Log Out <i class="fas fa-sign-out"></i></button>
                    </div>
                </div>
                <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Tampilan Profil<i class="fas fa-caret-up"></i></a>
                <div class="clearfix"></div>
            </div>
            <!-- dashboard-menu  end-->
            <!-- dashboard content-->
        <form action="<?php echo base_url('edit_profil') ?>" method="POST" enctype="multipart/form-data">
            <input name="id" value="<?php echo $tampil['id_admin'] ?>" type="hidden" class="form-control">
            <div class="col-md-9">
                <div class="dashboard-title fl-wrap">
                    <h3>Data Profil</h3>
                </div>
                <!-- profile-edit-container-->
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <label> Nama Depan <i class="fal fa-user"></i></label>
                                <input type="text" placeholder="Jessie" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <label> Nama Belakang <i class="fal fa-user"></i></label>
                                <input type="text" placeholder="Manrty" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <label> Email<i class="far fa-envelope"></i>  </label>
                                <input type="text" placeholder="JessieManrty@domain.com" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <label> Nomor Telepon<i class="far fa-phone"></i>  </label>
                                <input type="text" placeholder="(+62)8321178900" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <label> Profesi <i class="far fa-globe"></i>  </label>
                                <input type="text" placeholder="Guru" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <label> Alamat <i class="fas fa-map-marker"></i>  </label>
                                <input type="text" placeholder="Jl. Juanda, Surabaya, Jawa Timur, Indonesia" value=""/>
                            </div>
                        </div>
                        <label> Deskripsi</label>
                        <textarea cols="40" rows="3" placeholder="Ceritakan sedikit tentangmu ..." style="margin-bottom:20px;"></textarea>
                        <div class="clearfix"></div>
                        <label>Ubah Foto Profil</label> 
                        <div class="clearfix"></div>
                        <div class="listsearch-input-item fl-wrap">
                            <div class="fuzone">
                                <form>
                                    <div class="fu-text">
                                        <span><i class="fal fa-images"></i> klik dan upload foto</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                    </div>
                                    <input type="file" class="upload" multiple>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-title  dt-inbox fl-wrap">
                    <h3>Lokasi</h3>
                </div>
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Longitude<i class="fal fa-long-arrow-alt-right"></i>  </label>
                                <input type="text" placeholder="Map Longitude" id="long" value="">
                            </div>
                            <div class="col-md-6">
                                <label>Latitude<i class="fal fa-long-arrow-alt-down"></i> </label>
                                <input type="text" placeholder="Map Latitude" id="lat" value="">
                            </div>
                        </div>
                        <div class="map-container">
                            <div id="singleMap" class="drag-map" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Ups! Ada sesuatu yang salah.</div><div class="gm-err-message">Halaman ini tidak memuat Google Maps dengan benar. Lihat konsol JavaScript untuk mengetahui detail teknisnya.</div></div></div></div></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Kota</label>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="City" class="chosen-select no-search-select" style="display: none;">
                                        <option>All Cities</option>
                                        <option>New York</option>
                                        <option>London</option>
                                        <option>Paris</option>
                                        <option>Kiev</option>
                                        <option>Moscow</option>
                                        <option>Dubai</option>
                                        <option>Rome</option>
                                        <option>Beijing</option>
                                    </select><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current">All Cities</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="All Cities" class="option selected focus">All Cities</li><li data-value="New York" class="option">New York</li><li data-value="London" class="option">London</li><li data-value="Paris" class="option">Paris</li><li data-value="Kiev" class="option">Kiev</li><li data-value="Moscow" class="option">Moscow</li><li data-value="Dubai" class="option">Dubai</li><li data-value="Rome" class="option">Rome</li><li data-value="Beijing" class="option">Beijing</li></ul></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Kecamatan</label>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="City" class="chosen-select no-search-select" style="display: none;">
                                        <option>All Cities</option>
                                        <option>New York</option>
                                        <option>London</option>
                                        <option>Paris</option>
                                        <option>Kiev</option>
                                        <option>Moscow</option>
                                        <option>Dubai</option>
                                        <option>Rome</option>
                                        <option>Beijing</option>
                                    </select><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current">All Cities</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="All Cities" class="option selected">All Cities</li><li data-value="New York" class="option">New York</li><li data-value="London" class="option">London</li><li data-value="Paris" class="option">Paris</li><li data-value="Kiev" class="option">Kiev</li><li data-value="Moscow" class="option">Moscow</li><li data-value="Dubai" class="option">Dubai</li><li data-value="Rome" class="option">Rome</li><li data-value="Beijing" class="option">Beijing</li></ul></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Kelurahan</label>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="City" class="chosen-select no-search-select" style="display: none;">
                                        <option>All Cities</option>
                                        <option>New York</option>
                                        <option>London</option>
                                        <option>Paris</option>
                                        <option>Kiev</option>
                                        <option>Moscow</option>
                                        <option>Dubai</option>
                                        <option>Rome</option>
                                        <option>Beijing</option>
                                    </select><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current">All Cities</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="All Cities" class="option selected">All Cities</li><li data-value="New York" class="option">New York</li><li data-value="London" class="option">London</li><li data-value="Paris" class="option">Paris</li><li data-value="Kiev" class="option">Kiev</li><li data-value="Moscow" class="option">Moscow</li><li data-value="Dubai" class="option">Dubai</li><li data-value="Rome" class="option">Rome</li><li data-value="Beijing" class="option">Beijing</li></ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile-edit-container end-->
                <div class="dashboard-title dt-inbox fl-wrap">
                    <h3>Sosial Media</h3>
                </div>
                <!-- profile-edit-container-->
                <div class="profile-edit-container fl-wrap block_box">
                    <div class="custom-form">
                        <label> Facebook <i class="fab fa-facebook"></i></label>
                        <input type="text" placeholder="https://www.facebook.com/" value=""/>
                        <label> Twitter<i class="fab fa-twitter"></i>  </label>
                        <input type="text" placeholder="https://twitter.com/" value=""/>
                        <label> Whatsapp<i class="fab fa-whatsapp"></i>  </label>
                        <input type="text" placeholder="https://www.whatsapp.com" value=""/>
                        <label> Instagram <i class="fab fa-instagram"></i>  </label>
                        <input type="text" placeholder="https://www.instagram.com/" value=""/>
                        <button class="btn    color2-bg  float-btn">Simpn Perubahan<i class="fal fa-save"></i></button>
                    </div>
                </div>
                <!-- profile-edit-container end-->
            </div>
        </form>

        <?php $no++;
        } ?>
            <!-- dashboard content end-->
        </div>
    </section>
    <!--  section  end-->
    <div class="limit-box fl-wrap"></div>
</div>