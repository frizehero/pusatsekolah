<div class="content">
    <section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
        <div class="bg-parallax-wrap">
            <!--ms-container-->
            <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/39.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide ">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/40.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="images/bg/41.png"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                    </div>
                </div>
            </div>
            <!--ms-container end-->
            <div class="overlay"></div>
        </div>
        <div class="slide-progress-wrap">
            <div class="slide-progress"></div>
        </div>
        <!-- <div class="bg-parallax-wrap"> 
            <div class="overlay"></div>
            <div class="media-container video-parallax">
                <div class="bg mob-bg par-elem" data-bg="images/bg/9.jpg"></div>
                <div class="video-container">
                    <video autoplay  loop muted  class="bgvid">
                        <source src="video/2.mp4" type="video/mp4" data-scrollax="properties: { translateY: '30%' }">
                    </video>
                </div> -->
                <!--
                    Vimeo code

                     <div  class="background-vimeo" data-vim="97871257"> </div> -->
                <!--
                    Youtube code

                     <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
            <!-- </div>
        </div> -->
        <?php $no = 1; foreach ($tampil as $rowA) { ?>
        <div class="container">
            <div class="list-single-header-item  fl-wrap">
                <div class="row">
                    <div class="col-md-9">
                        <h1>PPDB SEKOLAH</h1>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  <?php echo $rowA->alamat_sekolah; ?></a> <a href="#"> <i class="fal fa-phone"></i><?php echo $rowA->telp_sekolah; ?></a> <a href="#"><i class="fal fa-envelope"></i> <?php echo $rowA->email_sekolah; ?> </a></div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
            <div class="list-single-header_bottom fl-wrap">
                <a class="listing-item-category-wrap">
                    <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                    <span>Events</span>
                </a>
                <div class="list-single-author"> <a href="author-single.html"><span class="author_avatar"> <img alt='' src='images/avatar/5.jpg'>  </span>By  Alisa Noory</a></div>
                <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>15 July 2021</div>
                <div class="box-widget counter-widget" data-countDate="09/12/2021">
                    <div class="countdown">
                        <div class="countdown-item">
                            <span class="days rot">00</span>
                            <p>Hari </p>
                        </div>
                        <div class="countdown-item">
                            <span class="hours rot">00</span>
                            <p>Jam </p>
                        </div>
                        <div class="countdown-item">
                            <span class="minutes rot2">00</span>
                            <p>Menit </p>
                        </div>
                        <div class="countdown-item">
                            <span class="seconds rot2">00</span>
                            <p>Detik </p>
                        </div>
                    </div>
                </div>
                <div class="list-single-stats cws">
                    <ul class="no-list-style">
                        <li><span class="viewed-counter"><i class="fas fa-eye"></i> Dilihat -  560 </span></li>
                        <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Disimpan -  450 </span></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $no++;
        } ?>
    </section>
    <!-- scroll-nav-wrapper-->
    <div class="scroll-nav-wrapper fl-wrap">
        <div class="container">
            <nav class="scroll-nav scroll-init">
                <ul class="no-list-style">
                    <li><a class="act-scrlink" href="#sec2"><i class="fal fa-images"></i> Detail</a></li>
                    <li><a href="#sec3"><i class="fal fa-info"></i>Alur</a></li>
                    <li><a href="#sec4"><i class="fal fa-calendar-check"></i>Panitia</a></li>
                    <!-- <li><a href="#sec4"><i class="fal fa-microphone"></i>Panitia</a></li>
                    <li><a href="#sec5"><i class="fal fa-comments-alt"></i>Review</a></li> -->
                </ul>
            </nav>
            <div class="scroll-nav-wrapper-opt">
                <a href="#" class="scroll-nav-wrapper-opt-btn"> <i class="fas fa-heart"></i> Simpan </a>
                <a href="#" class="scroll-nav-wrapper-opt-btn showshare"> <i class="fas fa-share"></i> Bagikan </a>
                <div class="share-holder hid-share">
                    <div class="share-container  isShare"></div>
                </div>
                <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#"> <i class="fas fa-comment-alt"></i> Comment</a>
                    <a href="#"> <i class="fas fa-flag-alt"></i> Report </a>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-nav-wrapper end-->
    <section class="gray-bg no-top-padding">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                <!-- list-single-main-wrapper-col -->
                <div class="col-md-8">
                    <!-- list-single-main-wrapper -->
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <?php $no = 1; foreach ($tampil as $rowP) { ?>
                            <div class="list-single-main-media fl-wrap">
                                <div class="single-slider-wrap">
                                    <div class="single-slider fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper lightgallery">
                                                <div class="hov_zoom">
                                                    <img src="http://localhost/pusatsekolah/pusatsekolah/assets/ppdb/<?php echo $rowP->pamflet_ppdb;?>" alt="">
                                                    <a href="http://localhost/pusatsekolah/pusatsekolah/assets/ppdb/<?php echo $rowP->pamflet_ppdb;?>" class="box-media-zoom   popup-image">
                                                        <i class="fal fa-search"></i>
                                                    </a>
                                                </div>
                                                <!-- <div class="swiper-slide hov_zoom">
                                                    <img src="images/bg/43.png" alt="">
                                                    <a href="images/bg/43.png" class="box-media-zoom   popup-image">
                                                        <i class="fal fa-search"></i>
                                                    </a>
                                                </div>
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="images/bg/44.jpg" alt="">
                                                    <a href="images/bg/44.jpg" class="box-media-zoom   popup-image">
                                                        <i class="fal fa-search"></i>
                                                    </a>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="listing-carousel_pagination">
                                        <div class="listing-carousel_pagination-wrap">
                                            <div class="ss-slider-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i class="fal fa-long-arrow-right"></i></div> -->
                                </div> 
                            </div>
                        
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="list-single-main-item-title">
                                    <h3>Description</h3>
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <p>
                                        <?php echo $rowP->deskripsi_ppdb; ?>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- list-single-main-item end -->
                            <!-- list-single-main-item -->
                            <div class="list-single-main-item fl-wrap block_box">
                                <div class="list-single-main-item-title">
                                    <h3>Fasilitas</h3>                                    
                                </div>
                                <div class="list-single-main-item_content fl-wrap">
                                    <div class="listing-features fl-wrap">
                                        <p><?php echo $rowP->fasilitas_sekolah; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- list-single-main-item end -->
                            <!-- accordion-->
                            <div class="accordion mar-top" id="sec3">
                                <a class="toggle act-accordion" href="#"> Pendaftaran PPDB <span>   </span></a>
                                <div class="accordion-inner visible">
                                    <p><?php echo $rowP->pendaftaran_ppdb; ?></p>
                                </div> 
                                <a class="toggle" href="#"> Validasi / Pemberkasan <span>  </span></a>
                                <div class="accordion-inner">
                                    <p><?php echo $rowP->validasi_pemberkasan; ?></p>
                                </div> 
                                <a class="toggle" href="#"> Verifikasi / Daftar Ulang <span>  </span></a>
                                <div class="accordion-inner">
                                    <p><?php echo $rowP->verifikasi_daftarulang; ?></p>
                                </div> 
                            </div>
                        <?php $no++;} ?>
                        <!-- accordion end -->
                        <!-- list-single-main-item-->
                        
                        <div class="list-single-main-item fl-wrap block_box" id="sec4">
                            <div class="list-single-main-item-title">
                                <h3>Panitia PPDB</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap" >
                                <div class="team-holder fl-wrap">
                                <!-- team-item -->
                                <?php $no = 1; foreach ($tampilpanitia as $rowZ) { ?>
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <img src="http://localhost/pusatsekolah/pusatsekolah/assets/ppdb/<?php echo $rowZ->foto_panitia;?>" alt="" class="respimg team-photo" style="width: 230px; height: 230px;">
                                        </div>
                                        <div class="team-info fl-wrap">
                                            <h3><a href="#"><?php echo $rowZ->nama_panitia; ?></a></h3>
                                            <h4><?php echo $rowZ->tugas_panitia; ?></h4>
                                            <p>Nama Panitia : <?php echo $rowZ->nama_panitia; ?>
                                                <br>
                                                No.Telephone Panitia : <?php echo $rowZ->telephone_panitia; ?>
                                                <br>
                                                Email Panitia : <?php echo $rowZ->email_panitia; ?>  
                                            </p>
                                            <div class="team-social">
                                                <ul class="no-list-style">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php $no++;} ?>
                                <!-- team-item end  -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->
                        <!-- <div class="list-single-main-item fl-wrap block_box" id="sec5">
                            <div class="list-single-main-item-title">
                                <h3> Review  <span>  </span></h3>
                            </div> -->
                            <!--reviews-score-wrap-->
                            <!-- <div class="reviews-score-wrap fl-wrap">
                                <div class="review-score-total">
                                    <span class="review-score-total-item">
                                    4.1
                                    </span>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                </div> -->
                                <!-- <div class="review-score-detail"> -->
                                    <!-- review-score-detail-list-->
                                    <!-- <div class="review-score-detail-list"> -->
                                        <!-- rate item-->
                                        <!-- <div class="rate-item">
                                            <div class="rate-item-title"><span>Kualitas</span></div>
                                            <div class="rate-item-bg" data-percent="100%">
                                                <div class="rate-item-line gradient-bg"></div>
                                            </div>
                                            <div class="rate-item-percent">5.0</div>
                                        </div> -->
                                        <!-- rate item end-->
                                        <!-- rate item-->
                                        <!-- <div class="rate-item">
                                            <div class="rate-item-title"><span>Lokasi</span></div>
                                            <div class="rate-item-bg" data-percent="90%">
                                                <div class="rate-item-line gradient-bg"></div>
                                            </div>
                                            <div class="rate-item-percent">4.0</div>
                                        </div> -->
                                        <!-- rate item end-->
                                        <!-- rate item-->
                                        <!-- <div class="rate-item">
                                            <div class="rate-item-title"><span>Fasilitas</span></div>
                                            <div class="rate-item-bg" data-percent="60%">
                                                <div class="rate-item-line gradient-bg"></div>
                                            </div>
                                            <div class="rate-item-percent">3.0</div>
                                        </div> -->
                                        <!-- rate item end-->
                                        <!-- rate item-->
                                        <!-- <div class="rate-item">
                                            <div class="rate-item-title"><span>Pelayanan</span></div>
                                            <div class="rate-item-bg" data-percent="80%">
                                                <div class="rate-item-line gradient-bg"></div>
                                            </div>
                                            <div class="rate-item-percent">4.0</div>
                                        </div> -->
                                        <!-- rate item end-->
                                    <!-- </div> -->
                                    <!-- review-score-detail-list end-->
                                </div>
                            </div>
                            <!-- reviews-score-wrap end -->
                            <!-- <div class="list-single-main-item_content fl-wrap">
                                <div class="reviews-comments-wrap"> -->
                                    <!-- reviews-comments-item -->
                                    <!-- <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="images/avatar/4.jpg" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text fl-wrap">
                                            <div class="reviews-comments-header fl-wrap">
                                                <h4><a href="#">Liza Rose</a></h4>
                                                <div class="review-score-user">
                                                    <span class="review-score-user_item">4.2</span>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                </div>
                                            </div>
                                            <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                            <div class="reviews-comments-item-footer fl-wrap">
                                                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span></div>
                                                <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>2</span> </a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--reviews-comments-item end-->
                                    <!-- reviews-comments-item -->
                                    <!-- <div class="reviews-comments-item">
                                        <div class="review-comments-avatar">
                                            <img src="images/avatar/6.jpg" alt="">
                                        </div>
                                        <div class="reviews-comments-item-text fl-wrap">
                                            <div class="reviews-comments-header fl-wrap">
                                                <h4><a href="#">Adam Koncy</a></h4>
                                                <div class="review-score-user">
                                                    <span class="review-score-user_item">5.0</span>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                </div>
                                            </div>
                                            <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                            <div class="review-images ">
                                                <a href="images/all/18.jpg" class="image-popup"><img src="images/all/18.jpg" alt=""></a>
                                                <a href="images/all/24.jpg" class="image-popup"><img src="images/all/24.jpg" alt=""></a>
                                            </div>
                                            <div class="reviews-comments-item-footer fl-wrap">
                                                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span></div>
                                                <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>4</span> </a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!--reviews-comments-item end-->
                                <!-- </div>
                            </div>
                        </div> -->
                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->
                        <!-- <div class="list-single-main-item fl-wrap block_box" id="sec6">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Tambahkan Review</h3>
                            </div> -->
                            <!-- Add Review Box -->
                            <!-- <div id="add-review" class="add-review-box"> -->
                                <!-- Review Comment -->
                                <!-- <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                                    <fieldset>
                                        <div class="review-score-form fl-wrap">
                                            <div class="review-range-container"> -->
                                                <!-- review-range-item-->
                                                <!-- <div class="review-range-item">
                                                    <div class="range-slider-title">Kualitas</div>
                                                    <div class="range-slider-wrap ">
                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="4">
                                                    </div>
                                                </div> -->
                                                <!-- review-range-item end -->
                                                <!-- review-range-item-->
                                                <!-- <div class="review-range-item">
                                                    <div class="range-slider-title">Lokasi</div>
                                                    <div class="range-slider-wrap ">
                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1"  value="1">
                                                    </div>
                                                </div> -->
                                                <!-- review-range-item end -->
                                                <!-- review-range-item-->
                                                <!-- <div class="review-range-item">
                                                    <div class="range-slider-title">Fasilitas</div>
                                                    <div class="range-slider-wrap ">
                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="5" >
                                                    </div>
                                                </div> -->
                                                <!-- review-range-item end -->
                                                <!-- review-range-item-->
                                                <!-- <div class="review-range-item">
                                                    <div class="range-slider-title">Pelayanan</div>
                                                    <div class="range-slider-wrap">
                                                        <input type="text" class="rate-range" data-min="0" data-max="5"  name="rgcl"  data-step="1" value="3">
                                                    </div>
                                                </div> -->
                                                <!-- review-range-item end -->
                                            <!-- </div>
                                            <div class="review-total">
                                                <span><input type="text" name="rg_total"   data-form="AVG({rgcl})" value="0"></span>
                                                <strong>Rating Darimu</strong>
                                            </div>
                                        </div>
                                        <div class="list-single-main-item_content fl-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><i class="fal fa-user"></i></label>
                                                    <input type="text" placeholder="Username *" value=""/>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><i class="fal fa-envelope"></i>  </label>
                                                    <input type="text" placeholder="Alamat Email *" value=""/>
                                                </div>
                                            </div>
                                            <textarea cols="40" rows="3" placeholder="Review Darimu :"></textarea>
                                            <div class="clearfix"></div>
                                            <div class="listsearch-input-item fl-wrap">
                                                <div class="fuzone">
                                                    <form>
                                                        <div class="fu-text">
                                                            <span><i class="fal fa-images"></i> Click Here Or Drop Files To Upload</span>
                                                            <div class="photoUpload-files fl-wrap"></div>
                                                        </div>
                                                        <input type="file" class="upload" multiple>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button class="btn color2-bg  float-btn"> Simpan Review <i class="fal fa-paper-plane"></i></button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div> -->
                            <!-- Add Review Box / End -->
                        <!-- </div> -->
                        <!-- list-single-main-item end -->
                    <!-- </div>
                </div> -->
                <!-- list-single-main-wrapper-col end -->
                <!-- list-single-sidebar -->
                <div class="col-md-4">
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Daftar Sekarang!</h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-content">
                                DAFTARKAN DIRIMU SEKARANG
                                <form class="add-comment custom-form">
                                    <!-- <fieldset>
                                        <label><i class="fal fa-user"></i></label>
                                        <input type="text" placeholder="Nama Lengkap *" value=""/>
                                        <div class="clearfix"></div>
                                        <label><i class="fal fa-envelope"></i>  </label>
                                        <input type="text" placeholder="Email *" value=""/>
                                        <div class="clearfix"></div>
                                        <label><i class="fal fa-phone"></i>  </label>
                                        <input type="text" placeholder="No. Telephone *" value=""/>
                                    </fieldset> -->
                                    <button class="btn color2-bg url_btn float-btn" onclick="window.location.href='<?php echo base_url('ppdb_pendaftaran'); ?>'"> Daftar Sekarang <i class="fal fa-bookmark"></i></button>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Lokasi / Contact Admin  </h3>
                        </div>
                        <?php $no = 1; foreach ($tampil as $rowF) { ?>
                            <div class="box-widget">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
                                </div>
                                <div class="box-widget-content bwc-nopad">
                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-map-marker"></i> Alamat :</span> <a href="#"><?php echo $rowF->alamat_sekolah; ?></a></li>
                                            <li><span><i class="fal fa-phone"></i> Telephone :</span> <a href="#"><?php echo $rowF->telp_sekolah; ?></a></li>
                                            <li><span><i class="fal fa-envelope"></i> Email :</span> <a href="#"><?php echo $rowF->email_sekolah; ?></a></li>
                                            <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#"><?php echo $rowF->website_sekolah; ?></a></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <div class="bottom-bcw-box_link"><a href="#" class="show-single-contactform tolt" data-microtip-position="top" data-tooltip="Kirim Pesan"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        <?php $no++; } ?>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <!--box-widget-item end --> 
                    <!--box-widget-item -->
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Tentang Kami :</h3>
                        </div>
                        <div class="box-widget  fl-wrap">
                            <div class="box-widget-content">
                                <!--widget-posts-->
                                <div class="widget-posts  fl-wrap">
                                    <ul class="no-list-style">
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="data_guru">Data Guru</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                                                <!-- <div class="widget-posts-descr-score">4.1</div> -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="data_alumni">Data Alumni</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                                                <!-- <div class="widget-posts-descr-score">5.0</div> -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="event_sekolah">Event Sekolah</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                                                <!-- <div class="widget-posts-descr-score">4.2</div> -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="produk_su">Produk Sekolah</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
                                                <!-- <div class="widget-posts-descr-score">5.0</div> -->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- widget-posts end-->
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <!--box-widget-item end -->
                </div>
                <!-- list-single-sidebar end -->
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>
</div>