<div class="content">
	<form action="<?php echo base_url('data_guru/tampildetail') ?>" method="POST" enctype="multipart/form-data">
	    <!--  section  -->
	    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
	        <div class="container">
	            <!--Tariff Plan menu-->
	            <!--Tariff Plan menu end-->
	            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
	                <h1>   <span><?php echo $tampil['nama_guru'] ?></span></h1>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	        <div class="dashboard-header fl-wrap">
	            <div class="container">
	                <div class="dashboard-header_conatiner fl-wrap">
	                    <div class="dashboard-header-avatar">
	                        <img src="<?php echo base_url() ?>images/avatar/25.png" alt="">
	                    </div>
	                    <!--  dashboard-header-stats-wrap end -->
	                    <br><br><br>
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
	                            <ul class="no-list-style">
	                                <li><a href="tampilan-profil-user.html" class="user-profile-act"><i class="fal fa-user-edit"></i> Profil</a></li>
	                                <li><a href="tampilan-messages-user.html"><i class="fal fa-envelope"></i> Messages </a></li>
	                            </ul>
	                        </div>
	                        <!-- user-profile-menu end-->
	                        <!-- user-profile-menu-->
	                        <!-- user-profile-menu end-->
	                    </div>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <!-- dashboard-menu  end-->
	            <!-- dashboard content-->
	            <div class="col-md-9">
	                <!-- profile-edit-container-->
	                <div class="profile-edit-container fl-wrap block_box">
	                    <div class="custom-form">
	                        <div class="row">
	                            <div class="col-sm-6">
	                                <label>Username <i class="fal fa-user"> </i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['username_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Nama Lengkap <i class="fal fa-user"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['nama_guru'] ?>" value=""/>
	                            </div>

	                            <div class="col-sm-6">
	                                <label>NIP <i class="fal fa-credit-card-front"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['nip_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Tempat, Tanggal Lahir <i class="fal fa-calendar"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['tmplahir_guru'] ?>, <?php echo $tampil['tgllahir_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Alamat <i class="fal fa-map-marker"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['alamat_guru'] ?>, <?php echo $tampil['kelurahan_guru'] ?>, <?php echo $tampil['kecamatan_guru'] ?>, <?php echo $tampil['kotakab_guru'] ?>, <?php echo $tampil['provinsi_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Status <i class="fal fa-user"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['status_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-4">
	                                <label>Riwayat Pendidikan <i class="fal fa-bookmark"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['riwayat_pendidikan1'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-4">
	                                <label> <br> <i class="fal fa-bookmark"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['riwayat_pendidikan2'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-4">
	                                <label> <br> <i class="fal fa-bookmark"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['riwayat_pendidikan3'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Mata Pelajaran <i class="fal fa-bookmark"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['mapel_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Email <i class="far fa-envelope"></i>  </label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['email_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Telephone<i class="far fa-phone"></i>  </label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['telepon_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Facebook <i class="fab fa-facebook"></i></label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['facebook_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label>Twitter<i class="fab fa-twitter"></i>  </label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['twitter_guru'] ?>" value=""/>
	                            </div>
	                            <div class="col-sm-6">
	                                <label> Instagram <i class="fab fa-instagram"></i>  </label>
	                                <input disabled="text" type="text" placeholder="<?php echo $tampil['instagram_guru'] ?>" value=""/>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- profile-edit-container end-->
	                <!-- profile-edit-container-->
	                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
	                    <!-- listing-item  -->
	                    <!-- <div class="listing-item" style="height: 494px;">
	                        <article class="geodir-category-listing fl-wrap">
	                            <div class="geodir-category-img">
	                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
	                                <img src="<?php echo base_url() ?>images/avatar/10.png" alt="" style="height: 200px;"> 
	                                </a>
	                                <div class="listing-avatar"><a href="author-single.html">
	                                    <img src="<?php echo base_url() ?>images/avatar/25.png" alt=""></a>
	                                </div>
	                            </div>
	                            <div class="geodir-category-content fl-wrap title-sin_item">
	                                <div class="geodir-category-content-title fl-wrap">
	                                    <div class="geodir-category-content-title-item">
	                                        <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $tampil['nama_alumni'] ?></a></h3>
	                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $tampil['riwayat_sd'] ?></div>
	                                    </div>
	                                </div>
	                                <div class="geodir-category-text fl-wrap">
	                                    <br>
	                                    <p class="small-text">
	                                        Nama: <?php echo $tampil['nama_alumni'] ?> <br>
	                                        NISN : <?php echo $tampil['nisn'] ?> <br>
	                                        Angkatan : <?php echo $tampil['thlulus_alumni'] ?>
	                                    </p>
	                                    <br>
	                                </div>
	                            </div>
	                        </article>
	                    </div> -->
	                    <!-- listing-item end -->                                       
	                    <!-- listing-item  -->
	                    <!-- <div class="listing-item" style="height: 494px;">
	                        <article class="geodir-category-listing fl-wrap">
	                            <div class="geodir-category-img">
	                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
	                                <img src="<?php echo base_url() ?>images/avatar/40.png" alt="" style="height: 200px;"> 
	                                </a>
	                                <div class="listing-avatar"><a href="author-single.html">
	                                    <img src="<?php echo base_url() ?>images/avatar/25.png" alt=""></a>
	                                </div>
	                            </div>
	                            <div class="geodir-category-content fl-wrap title-sin_item">
	                                <div class="geodir-category-content-title fl-wrap ">
	                                    <div class="geodir-category-content-title-item">
	                                        <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $tampil['nama_alumni'] ?></a></h3>
	                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  <?php echo $tampil['riwayat_smp'] ?> </a></div>
	                                    </div>
	                                </div>
	                                <div class="geodir-category-text fl-wrap">
	                                    <br>
	                                    <p class="small-text">
	                                        Nama : <?php echo $tampil['nama_alumni'] ?> <br>
	                                        NISN : <?php echo $tampil['nisn'] ?> <br>
	                                        Angkatan : <?php echo $tampil['thlulus_alumni'] ?>
	                                    </p>
	                                    <br>
	                                </div>
	                            </div>
	                        </article>
	                    </div> -->
	                    <!-- listing-item end -->                                         
	                    <!-- listing-item  -->
	                    <!-- <div class="listing-item" style="height: 494px;">
	                        <article class="geodir-category-listing fl-wrap">
	                            <div class="geodir-category-img">
	                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
	                                <img src="<?php echo base_url() ?>images/avatar/41.png" alt="" style="height: 200px;"> 
	                                </a>
	                                <div class="listing-avatar">
	                                    <a href="author-single.html"><img src="<?php echo base_url() ?>images/avatar/25.png" alt=""></a>
	                                </div>
	                            </div>
	                            <div class="geodir-category-content fl-wrap title-sin_item">
	                                <div class="geodir-category-content-title fl-wrap">
	                                    <div class="geodir-category-content-title-item">
	                                        <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $tampil['nama_alumni'] ?></a></h3>
	                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $tampil['riwayat_sma'] ?></a></div>
	                                    </div>
	                                </div>
	                                <div class="geodir-category-text fl-wrap">
	                                    <br>
	                                    <p class="small-text">
	                                        Nama : <?php echo $tampil['nama_alumni'] ?> <br>
	                                        NISN : <?php echo $tampil['nisn'] ?> <br>
	                                        Angkatan : <?php echo $tampil['thlulus_alumni'] ?>
	                                    </p>
	                                    <br>
	                                </div>
	                            </div>
	                        </article>
	                    </div> -->
	                    <!-- listing-item end --> 
	                <!-- profile-edit-container end-->
	            </div>
	            <!-- dashboard content end-->
	        </div>
	    </section>
	    <!--  section  end-->
	    <div class="limit-box fl-wrap"></div>
	</form>
</div>