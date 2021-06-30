<div class="content">
    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="images/sekolah/smk1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>Daftar Sekolah Menengah Kejuruan</span></h2>
                <span class="section-separator"></span>
                <h4>Kami akan menampilkan seluruh daftar Sekolah Menengah Kejuruan sesuai dengan apa yang Anda pilih.</h4>
            </div>
            <div class="hero-categories fl-wrap">
                <ul class="no-list-style">
                    <li><a href="<?php echo base_url('daftar_paud'); ?>"><i class="far fa-user"></i><span>PAUD</span></a></li>
                    <li><a href="<?php echo base_url('daftar_tk'); ?>"><i class="far fa-user-friends"></i><span>TK</span></a></li>
                    <li><a href="<?php echo base_url('daftar_sd'); ?>"><i class="far fa-user-plus"></i><span>SD</span></a></li>
                    <li><a href="<?php echo base_url('daftar_smp'); ?>"><i class="far fa-play"></i><span>SMP</span></a></li>
                    <li><a href="<?php echo base_url('daftar_sma'); ?>"><i class="far fa-envelope"></i><span>SMA</span></a></li>
                    <li><a href="<?php echo base_url('daftar_smk'); ?>"><i class="far fa-handshake-alt"></i><span>SMK</span></a></li>
                </ul>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section>
    <!--  section  end-->
    <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                <a href="#">Home</a><span>SMK</span>
            </div>
            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i> Filters</div>
            <div class="fl-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- list-main-wrap-header-->
                        <div class="list-main-wrap-header fl-wrap block_box no-vis-shadow">
                            <!-- list-main-wrap-title-->
                            <div class="listsearch-input-item" style="width: 400px;">
                                <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                <input type="text" placeholder="Apa Yang Sedang Kamu Cari ?" value="" />
                            </div>
                            <!-- list-main-wrap-title end-->
                            <!-- list-main-wrap-opt-->
                            <div class="list-main-wrap-opt">
                                <!-- price-opt-->
                                <div class="price-opt">
                                    <span class="price-opt-title">Filter :</span>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                            <option>Terpopuler</option>
                                            <option>Paling Banyak Dicari</option>
                                            <option>Rating Tertinggi</option>
                                            <option>Terdekat</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- price-opt end-->
                            </div>
                            <!-- list-main-wrap-opt end-->
                        </div>
                        <!-- list-main-wrap-header end-->
                        <!-- listing-item-container -->
                        <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                            <?php $no=1; foreach ($semuasekolah AS $rowS ) { ?>
                            <!-- shop-item  -->
                            <div class="gallery-item <?php echo $rowS->jjg_sekolah;?>">
                                <!-- listing-item  -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                            <a href="<?php echo base_url('beranda_su'); ?>" class="geodir-category-img-wrap fl-wrap">
                                                <img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowS->foto_sampul;?>" alt="" style="height: 185px;">
                                            </a>
                                            <div class="listing-avatar"><a href="<?php echo base_url('beranda_su'); ?>"><img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowS->foto_profil;?>" alt="" style="background: #ffffff"></a>
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
                                                    <h3 class="title-sin_map"><a href="<?php echo base_url('beranda_su'); ?>"><?php echo $rowS->nama_sekolah;?></a><!--<span class="verified-badge"><i class="fal fa-check"></i>--></span></h3>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i><?php echo $rowS->almtlengkap_sekolah;?></a></div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-text fl-wrap">
                                                <p class="small-text"><?php echo $rowS->desk_sekolah;?></p>
                                            </div>
                                            <div class="geodir-category-footer fl-wrap">
                                                <a class="listing-item-category-wrap">
                                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                    <span><?php echo $rowS->stt_sekolah;?></span>
                                                </a>
                                                <div class="geodir-opt-list">
                                                    <ul class="no-list-style">
                                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="geodir-category_contacts">
                                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                    <ul class="no-list-style">
                                                        <li><span><i class="fal fa-phone"></i> Telephone : </span><a href="#"><?php echo $rowS->telphone;?></a></li>
                                                        <li><span><i class="fal fa-envelope"></i> Email : </span><a href="#"></i><?php echo $rowS->email;?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end -->
                            </div>
                            <!-- shop-item end -->
                            <?php $no++;} ?>
                        </div>
                        <!-- listing-item-container end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
    <div class="limit-box fl-wrap"></div>
</div>