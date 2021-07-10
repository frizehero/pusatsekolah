<!-- content-->
<?php $no=1; foreach ($tampilkompetensi AS $rowP ) { ?>
<div class="content">
    <section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
        <div class="bg-parallax-wrap">
            <div class="bg par-elem "  data-bg="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_sampul;?>" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
        </div>
        <div class="container">
            <div class="list-single-header-item  fl-wrap">
                <div class="row">
                    <div class="col-md-9">
                        <h1><?php echo $rowP->nama_sekolah;?><span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i><?php echo $rowP->almtlengkap_sekolah;?></a> <a href="#"> <i class="fal fa-phone"></i><?php echo $rowP->telphone;?></a> <a href="#"><i class="fal fa-envelope"></i><?php echo $rowP->email;?></a></div>
                    </div>
                    <div class="col-md-3">
                        <a class="fl-wrap list-single-header-column custom-scroll-link " href="<?php echo base_url('tampilan_inbox'); ?>">
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
                    <span><?php echo $rowP->stt_sekolah;?></span>
                </a>
                <div class="list-single-author"> <a href="author-single.html"><span class="author_avatar"> <img alt='' src='http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>'>  </span></a></div>
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
                    <li><a class="act-scrlink" href="<?php echo base_url('beranda_su'); ?>"><i class="fal fa-images"></i>Beranda</a></li>
                    <li><a href="<?php echo base_url('data_guru'); ?>"><i class="fal fa-info"></i>Guru</a></li>
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
    <section class="gray-bg no-top-padding">
        <div class="container">
            <div class="clearfix"></div>
            <div class="row">
                <!-- list-single-main-wrapper-col -->
                <div class="col-md-8">
                        <?php $no=1; foreach ($tampilposting AS $rowO ) { ?>
                    <!-- list-single-main-wrapper -->
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <!-- list-single-main-item -->
                        <div class="list-single-main-item fl-wrap block_box">
                            <div class="list-single-main-item_content fl-wrap">
                                <div class="reviews-comments-wrap">
                                    <!-- reviews-comments-item -->
                                        <div class="list-single-author"><span class="author_avatar"> <img alt='' src='http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>'></span><b><?php echo $rowP->nama_sekolah;?></b></div>
                                        <div class="fl-wrap">
                                        <div style="text-align: left; margin-left: 67px;">
                                            <?php echo $rowO->post_sekolah;?><br><br>
                                            <?php if ($rowO->post_foto_sekolah==""){?>

                                            <?php }else{ ?>
                                            <img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/postsekolah/<?php echo $rowO->post_foto_sekolah;?>" style="width: 240px; height: 160px;">
                                            <?php }?>
                                        </div>
                                            <div class="reviews-comments-item-footer fl-wrap">
                                                <div class="row">
                                                    <div class="col-lg-4 col-xl-4" style="padding-right: 85px">
                                                        <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Like  <span>2</span> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4" style="padding-right: 85px">
                                                        <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Komen  <span>2</span> </a>
                                                    </div>
                                                    <div class="col-lg-4 col-xl-4" style="padding-right: 85px">
                                                        <a href="#" class="rate-review"> <i class="fas fa-share"></i> Bagikan </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reviews-comments-item-footer fl-wrap">
                                                <form action="<?php echo base_url('daftar_smk/tambahkomen') ?>" method="POST" enctype="multipart/form-data">
                                                <input name="idu" value="<?php echo $idnya?>" type="hidden" class="custom-form">
                                                <input name="tampungid" value="<?php echo $tampungid?>" type="hidden" class="custom-form">
                                                <input name="idp" value="<?php echo $rowO->id_beranda_as?>" type="hidden" class="custom-form">
                                                    <div class="list-single-author"><span class="author_avatar"> <img alt='' src='http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_profil;?>'></span><b>Emak</b></div>
                                                    <div class="fl-wrap">
                                                            <fieldset>
                                                                <div class="list-single-main-item_content">
                                                                    <input name="koment" placeholder="Tulis komentar..." type="text" class="custom-form" style="height: 50px; padding: 10px; margin-left: 30px;">
                                                                </div>
                                                            </fieldset>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php $komentarnya = $this->M_beranda_as->ambilkomentar($rowO->id_beranda_as); ?>
                                    
                                            <?php if ($komentarnya==null){?>

                                            <?php }else{ ?>
                                            <?php $noK=1; foreach ($komentarnya AS $rowK ) { ?>
                                            <div class="reviews-comments-item-footer fl-wrap">
                                                <div class="list-single-author"><span class="author_avatar"> <img alt='' src='http://localhost/pusatsekolah/userpusatsekolah/assets/images/fotouser/<?php echo $rowK->fotop_user;?>'></span><b><?php echo $rowK->nama;?></b></div>
                                                <div class="fl-wrap">
                                                    <p style="padding-left: 70px"><?php echo $rowK->isi_komentar;?></p>
                                                    <div style="padding-right: 585px">
                                                        <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> Like  <span>2</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $noK++;}?>
                                            <?php } ?>
                                        </div>
                                    <!--reviews-comments-item end-->
                                </div>
                            </div>
                        </div>
                        <!-- list-single-main-item end -->
                    </div>
                        <?php $no++;} ?>
                </div>
                <!-- list-single-main-wrapper-col end -->
                <!-- list-single-sidebar -->
                <div class="col-md-4">
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Kepala Sekolah</h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-author fl-wrap">
                                <div class="box-widget-author-title">
                                    <div class="box-widget-author-title-img">
                                        <img src="http://localhost/pusatsekolah/pusatsekolah/assets/images/fotoprofil/<?php echo $rowP->foto_kepsek;?>" alt="">
                                    </div>
                                    <div class="box-widget-author-title_content">
                                        <a><?php echo $rowP->nama_kepalasekolah;?></a>
                                    </div>
                                    <div class="box-widget-author-title_opt">
                                        <a href="<?php echo $rowP->link_akunkepsek;?>" class="tolt green-bg" data-microtip-position="top" data-tooltip="View Profile"><i class="fas fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Jam Operasional</h3>
                        </div>
                        <div class="box-widget opening-hours fl-wrap">
                            <div class="box-widget-content">
                                <ul class="no-list-style">
                                    <li class="mon"><span class="opening-hours-day">Senin </span><span class="opening-hours-time"><?php echo $rowP->senin_m;?> - <?php echo $rowP->senin_p;?></span></li>
                                    <li class="tue"><span class="opening-hours-day">Selasa </span><span class="opening-hours-time"><?php echo $rowP->selasa_m;?> - <?php echo $rowP->selasa_p;?></span></li>
                                    <li class="wed"><span class="opening-hours-day">Rabu </span><span class="opening-hours-time"><?php echo $rowP->rabu_m;?> - <?php echo $rowP->rabu_p;?></span></li>
                                    <li class="thu"><span class="opening-hours-day">Kamis </span><span class="opening-hours-time"><?php echo $rowP->kamis_m;?> - <?php echo $rowP->kamis_p;?></span></li>
                                    <li class="fri"><span class="opening-hours-day">Jum'at </span><span class="opening-hours-time"><?php echo $rowP->jumat_m;?> - <?php echo $rowP->jumat_p;?></span></li>
                                    <li class="sat"><span class="opening-hours-day">Sabtu </span><span class="opening-hours-time"><?php echo $rowP->sabtu_m;?> - <?php echo $rowP->sabtu_p;?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->                                       
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Kompetensi Keahlian</h3>
                        </div>
                        <div class="box-widget">
                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><p><?php echo $rowP->kompetensi1;?></p></li>
                                        <li><p><?php echo $rowP->kompetensi2;?></p></li>
                                        <li><p><?php echo $rowP->kompetensi3;?></p></li>
                                        <li><p><?php echo $rowP->kompetensi4;?></p></li>
                                        <li><p><?php echo $rowP->kompetensi5;?></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Lokasi Sekolah</h3>
                        </div>
                        <div class="box-widget">
                            <div class="map-container">
                            <div id="googleMap" style="width:100%;height:380px;"></div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                    <!--box-widget-item -->
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Event Terbaru</h3>
                        </div>
                        <div class="box-widget  fl-wrap">
                            <div class="box-widget-content">
                                <!--widget-posts-->
                                <div class="widget-posts  fl-wrap">
                                    <ul class="no-list-style">
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url() ?>images/gallery/thumbnail/1.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                                                <div class="widget-posts-descr-score">4.1</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url() ?>images/gallery/thumbnail/2.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                                                <div class="widget-posts-descr-score">5.0</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url() ?>images/gallery/thumbnail/3.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                                                <div class="widget-posts-descr-score">4.2</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-img"><a href="listing-single.html"><img src="<?php echo base_url() ?>images/gallery/thumbnail/4.png" alt=""></a>
                                            </div>
                                            <div class="widget-posts-descr">
                                                <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                                <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
                                                <div class="widget-posts-descr-score">5.0</div>
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
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Tags</h3>
                        </div>
                        <div class="box-widget opening-hours fl-wrap">
                            <div class="box-widget-content">
                                <div class="list-single-tags tags-stylwrap">
                                    <a href="#">Hotel</a>
                                    <a href="#">Hostel</a>
                                    <a href="#">Room</a>
                                    <a href="#">Spa</a>
                                    <a href="#">Restourant</a>
                                    <a href="#">Parking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->
                </div>
                <!-- list-single-sidebar end -->
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>
</div>
<?php $no++;} ?>
<!--content end-->