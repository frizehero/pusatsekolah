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
                    <li><a href="<?php echo base_url('beranda_su'); ?>"><i class="fal fa-images"></i>Beranda</a></li>
                    <li><a href="<?php echo base_url('data_guru'); ?>"><i class="fal fa-info"></i>Guru</a></li>
                    <li><a href="<?php echo base_url('data_alumni'); ?>"><i class="fal fa-image"></i>Alumni</a></li>
                    <li><a class="act-scrlink" href="<?php echo base_url('event_su'); ?>"><i class="fal fa-utensils"></i>Event</a></li>
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
    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container" style="padding-top: 30px;">
            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                <div class="share-container  isShare"></div>
            </div>
            <div class="post-container fl-wrap">
                <div class="row">
                    <!-- blog content-->
                    <div class="col-md-8">
                        <!-- article> --> 
                        <?php $no = 1;
                        foreach ($tampil as $rowP) { ?>
                            <div class="list-single-main-item fl-wrap block_box" id="sec4">
                                <div class="list-single-main-item_content fl-wrap">
                                    <!--   rooms-container -->
                                    <div class="rooms-container fl-wrap">
                                        <!--  rooms-item -->
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img style="height: 150px;" src="http://localhost/pusatsekolah/pusatsekolah/assets/images/event/<?php echo $rowP->dokumentasi_event; ?>" alt="">
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <a href="tampilan-detail-event.html">
                                                                <h3><?php echo $rowP->judul_event; ?></h3>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="show-more-snopt"><i class="fal fa-ellipsis-h"></i></div>
                                                            <div class="show-more-snopt-tooltip">
                                                                <a href="tampilan-beranda-sekolah.html"> <i class="fas fa-comment-alt"></i> Lihat Lengkap</a>
                                                                <a href="#"> <i class="fas fa-flag-alt"></i> Report</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <h5>20 Nov 2020<span> - 2 Hari Lagi</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p><?php echo $rowP->text_event; ?> </p>
                                            </div>
                                        </div>
                                        <!--  rooms-item end -->
                                    </div>
                                    <!--   rooms-container end -->
                                </div>
                            </div>
                        <?php $no++;
                        } ?>
                        <!-- article end -->                                         
                        <div class="pagination">
                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="current-page">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">7</a>
                            <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                    <!-- blog conten end-->
                    <!-- blog sidebar -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap fl-wrap fixed-bar">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Cari Event</h3>
                                </div>
                                        <div style="margin-top: 15px;">
                                        </div>
                                        <div class="scrl-content filter-sidebar    fs-viscon" style="margin-bottom: 10px;">
                                            <!--tabs -->                       
                                            <div class="tabs-container fl-wrap">
                                                <!--tab -->
                                                <div class="tab">
                                                    <div id="filters-search" class="tab-content  first-tab " style="margin-bottom: 10px;">
                                                        <!-- listsearch-input-item-->
                                                        <div class="listsearch-input-item">
                                                            <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                                            <input type="text" placeholder="Apa yang sedang kamu cari?" value=""/>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                        <!-- listsearch-input-item-->
                                                        <div class="listsearch-input-item">
                                                            <select data-placeholder="Categories" class="chosen-select no-search-select" >
                                                                <option>Terbaru</option>
                                                                <option>Terlama</option>
                                                            </select>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                        <!-- listsearch-input-item-->
                                                        <div class="listsearch-input-item">
                                                            <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                    </div>
                                                </div>
                                                <!--tab end-->
                                            </div>
                                            <!--tabs end-->                         
                                        </div>
                            </div>
                            <!--box-widget-item end -->                                    
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Paling Ditunggu</h3>
                                </div>
                                <div class="box-widget  fl-wrap">
                                    <div class="box-widget-content">
                                        <!--widget-posts-->
                                        <div class="widget-posts  fl-wrap">
                                            <ul class="no-list-style">
                                                <li>
                                                    <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a></div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">SMK Negeri 1 Probolinggo Rayakan Dies Natalis Ke-98</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 22 Des 2020</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a></div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">Pusat Sekolah Berkunjung ke Istana Presiden</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 12 May 2018</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a> </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">SMPN 10 Karanganyar Mulai Buka PPDB 2021</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i>22 Feb  2018</a></div>
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
                                    <h3>Tagar</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="list-single-tags tags-stylwrap">
                                            <a href="#">#SMK</a>
                                            <a href="#">#LKS2020</a>
                                            <a href="#">#OSN2021</a>
                                            <a href="#">#JalanSantai</a>                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->                                     
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Kategoris</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <ul class="cat-item no-list-style">
                                            <li><a href="#">Terbaru</a> <span>3</span></li>
                                            <li><a href="#">Paling Disukai</a> <span>6 </span></li>
                                            <li><a href="#">Paling Disukai</a> <span>12 </span></li>
                                            <li><a href="#">Terdekat</a> <span>4</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->                                   
                        </div>
                    </div>
                    <!-- blog sidebar end -->
                </div>
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>
</div>
<?php $no++;} ?>
<!--content end-->