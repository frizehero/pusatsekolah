<!-- content-->
<div class="content">
<section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
    <div class="bg-parallax-wrap">
        <div class="bg par-elem "  data-bg="images/bg/smkn1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="list-single-header-item  fl-wrap">
            <div class="row">
                <div class="col-md-9">
                    <h1>SMK Negeri 1 Kota Probolinggo<span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Probolingo, Jawa Timur, Indonesia</a> <a href="#"> <i class="fal fa-phone"></i>0335421121</a> <a href="#"><i class="fal fa-envelope"></i>admin@smkn1probolinggo.sch.id</a></div>
                </div>
                <div class="col-md-3">
                    <a class="fl-wrap list-single-header-column custom-scroll-link " href="tampilan-inbox-user.html">
                        <div class="listing-rating-count-wrap single-list-count">
                            <div class="review-score">4.1</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                            <br>
                            <div class="reviews-count">2 Rating</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list-single-header_bottom fl-wrap">
            <a class="listing-item-category-wrap" href="#">
                <div class="listing-item-category  red-bg"><i class="fal fa-cheeseburger"></i></div>
                <span>Negeri</span>
            </a>
            <div class="list-single-author"> <a href="author-single.html"><span class="author_avatar"> <img alt='' src='images/avatar/5.jpg'>  </span>By  Rois Antono</a></div>
            <div class="geodir_status_date gsd_open">Online</div>
            <div class="list-single-stats">
                <ul class="no-list-style">
                    <li><span class="viewed-counter"><i class="fas fa-eye"></i> Di lihat -  156 </span></li>
                    <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Pengikut 24 </span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- scroll-nav-wrapper-->
<div class="scroll-nav-wrapper fl-wrap">
    <div class="container">
        <nav class="scroll-nav">
            <ul class="no-list-style">
                <li><a href="<?php echo base_url('beranda_su'); ?>"><i class="fal fa-images"></i>Beranda</a></li>
                <li><a class="act-scrlink" href="<?php echo base_url('data_guru'); ?>"><i class="fal fa-info"></i>Guru</a></li>
                <li><a href="<?php echo base_url('data_alumni'); ?>"><i class="fal fa-image"></i>Alumni</a></li>
                <li><a href="<?php echo base_url('event_su'); ?>"><i class="fal fa-utensils"></i>Event</a></li>
                <li><a href="<?php echo base_url('produk_su'); ?>"><i class="fal fa-comments-alt"></i>Produk</a></li>
                <li><a href="<?php echo base_url('media_su'); ?>"><i class="fal fa-images"></i>Media</a></li>
            </ul>
        </nav>
        <div class="scroll-nav-wrapper-opt">
            <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Ikuti </a>
            <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Bagikan </a>
            <div class="share-holder hid-share">
                <div class="share-container  isShare"></div>
            </div>
            <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
            <div class="show-more-snopt-tooltip">
                <a href="#"> <i class="fas fa-comment-alt"></i> Write a review</a>
                <a href="#"> <i class="fas fa-flag-alt"></i> Report </a>
            </div>
        </div>
    </div>
</div>
<!-- scroll-nav-wrapper end-->
<div class="container">
    <div id="filters-search" class="tab-content  first-tab ">
        <div class="container" style="padding-top: 20px;"></div>
            <div class="fl-wrap">
                <div class="row" >
                    <div class="col-md-4">
                        <div class="listsearch-input-item">
                            <form method="post" action="<?php echo site_url('data_guru/filter') ?>">
                                <div class="row">
                                    <div class="col-md-9">
                                        <select name="mapel" data-placeholder="City/Location" class="chosen-select no-search-select" >
                                                <option>- Mata Pelajaran -</option>
                                            <?php
                                            foreach ($tampil_mapel as $mapel) {?>
                                                <option value="<?php echo $mapel->mapel_guru?>"><?php echo $mapel->mapel_guru?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="header-search-button color-bg">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="search-widget">
                            <form action="#" class="fl-wrap">    
                                <?php echo form_open('data_guru/search') ?>
                                <input type="text" name="Nama" placeholder="Apa Yang Sedang Kamu Cari ?" value=""/>
                                <?php echo form_close() ?>
                            </form>                                                
                            <button type="search-submit" class="search-submit color2-bg">cari </button>
                        </div>
                    </div>  
                </div>
            </div>
    <div class="limit-box fl-wrap"></div>
    <!--tab end-->
        <section style="padding-top: 20px; padding-bottom: 10px;">
            <?php $no = 1;
            foreach ($tampil as $rowP) { ?>
                <div class="gallery-item">
                    <!-- listing-item  -->
                    <div class="listing-item" style="height: 433px;">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Favoritkan</span></div>
                                <a href="<?php echo base_url('data_guru/profilguru/' . encrypt_url($rowP->id_guru)); ?>" class="geodir-category-img-wrap fl-wrap">
                                <img src="images/avatar/26.png" alt="" style="height: 250px;"> 
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/27.png" alt=""></a>
                                    <span class="avatar-tooltip"><strong><?php echo $rowP->nama_guru; ?></a></strong></span>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="<?php echo base_url('profil_user'); ?>"><?php echo $rowP->nama_guru; ?></a></a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-user-alt"></i><b>Mengajar <?php echo $rowP->mapel_guru; ?></a></b></a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <br><br>
                                    <p class="small-text">
                                    Nama : <?php echo $rowP->nama_guru; ?></a>
                                    <br>
                                    NIP : <?php echo $rowP->nip_guru; ?></a>
                                    <br>
                                    Mengajar Mapel : <?php echo $rowP->mapel_guru; ?></a>
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->                              
                </div>
            <?php $no++;
            } ?>
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
</div>
<!--content end-->