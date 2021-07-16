<!-- content-->
<div class="content">
<!--section  -->
<section style="margin-top: -65px;">
    <div class="container big-container">
        <div class="section-title">
            <h2><span>Sekolah Probolinggo Terpopuler</span></h2>
            <div class="section-subtitle">Sekolah Terpopuler</div>
            <span class="section-separator"></span>
            <p>Sekolah populer pilihan kami ini mungkin cocok untuk kamu</p>
        </div>
        <!--tab -->
            <div id="filters-search" class="tab-content  first-tab ">
                <div class="fl-wrap">
                    <div class="row">
                        <!-- listsearch-input-item-->
                        <div class="col-md-4">
                            <div class="listsearch-input-item">
                                <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                <input type="text" placeholder="Apa Yang Sedang Kamu Cari ?" value=""/>
                            </div>
                        </div>
                        <!-- listsearch-input-item end-->
                        <!-- listsearch-input-item-->
                        <div class="col-md-3">
                            <div class="listsearch-input-item">
                                <select data-placeholder="Location" class="chosen-select no-search-select" >
                                    <option>Urutakan sesuai ABJAD</option>
                                    <option>Urutkan Sesuai Sekolah Paling Banyak</option>
                                    <option>Urutkan Sesuai Sekolah Paling Sedikit</option>
                                </select>
                            </div>
                        </div>
                        <!-- listsearch-input-item end-->
                        <!-- listsearch-input-item-->
                        <div class="col-md-3">
                            <div class="listsearch-input-item">
                                <select data-placeholder="City/Location" class="chosen-select no-search-select" >
                                    <option>Terpopuler</option>
                                    <option>Sering dikunjungi</option>
                                </select>
                            </div>
                        </div>
                        <!-- listsearch-input-item end-->  
                        <!-- listsearch-input-item-->
                        <div class="col-md-2">
                            <div class="listsearch-input-item">
                                <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                            </div>
                        </div>
                        <!-- listsearch-input-item end-->                                         
                    </div>
                </div>
        <div class="limit-box fl-wrap"></div>
        <!--tab end-->
        <section style="padding-top: 20px; padding-bottom: 10px;">
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
                                        <h3 class="title-sin_map"><a href="<?php echo base_url('daftar_smk/detailsekolah/'.$rowS->id_p_sekolah); ?>"><?php echo $rowS->nama_sekolah;?></a><!--<span class="verified-badge"><i class="fal fa-check"></i>--></span></h3>
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
            <!-- listing-item-container -->
            <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid" style="padding-top: 0;">                                                      
                <div class="pagination fwmpag">
                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                    <a href="#">1</a>
                    <a href="#" class="current-page">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">7</a>
                    <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                </div>
            </div>
            <!-- listing-item-container end -->
        </section>
    </div>
</section>
<!--section end-->
</div>
<!--content end-->