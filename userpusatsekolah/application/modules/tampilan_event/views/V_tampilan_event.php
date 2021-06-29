<div class="content">
    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="images/sekolah/smp2.jpeg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>Event Sekolah</span></h2>
                <span class="section-separator"></span>
                <h4>Temukan envt sekolah yang kamu inginkan, agar lebih mudah melihat hal apa saja yang telah mereka lakukan.</h4>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section>
    <!--  section  end-->
    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                <a href="#">Home</a><a href="#">Beranda</a> <span>Event Sekolah</span>
                <div class="showshare brd-show-share color2-bg"> <i class="fas fa-share"></i> Bagikan </div>
            </div>
            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                <div class="share-container  isShare"></div>
            </div>
            <div class="post-container fl-wrap">
                <div class="box-widget-wrap fl-wrap">
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget-item-header">
                            <h3>Cari Sekolah</h3>
                        </div>
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="search-widget">
                                            <form action="#" class="fl-wrap">
                                                <input name="se" id="se" type="text" class="search" placeholder="Cari ..." value="" />
                                                <button class="search-submit color2-bg" id="submit_btn"><i class="fal fa-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Location" class="chosen-select no-search-select">
                                                <option>Semua Jenjang</option>
                                                <option>PAUD</option>
                                                <option>TK</option>
                                                <option>SD</option>
                                                <option>SMP</option>
                                                <option>SMA</option>
                                                <option>SMK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="City/Location" class="chosen-select no-search-select">
                                                <option>Jakarta</option>
                                                <option>Surabaya</option>
                                                <option>Balikpapan</option>
                                                <option>Bandung</option>
                                                <option>Jogja</option>
                                                <option>Jepara</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- blog content-->
                    <div class="col-md-8">
                        <!-- article> -->
                        <div class="list-single-main-item fl-wrap block_box" id="sec4">
                            <div class="list-single-main-item-title">
                                <h3>Event Sekolah Terdekat</h3>
                            </div>
                            <div class="list-single-main-item_content fl-wrap">
                                <!--   rooms-container -->
                                <div class="rooms-container fl-wrap">
                                    <!--  rooms-item -->
                                    <?php $no = 1;
                                    foreach ($tampil as $rowP) { ?>
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img style="height: 150px;" src="http://localhost/pusatsekolah/pusatsekolah/assets/images/event/<?php echo $rowP->dokumentasi_event; ?>" alt="">
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <a href="tampilan-beranda-sekolah.html">
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
                                                <p><?php echo $rowP->text_event; ?></p>
                                            </div>
                                        </div>
                                    <?php $no++;
                                    } ?>
                                    <!--  rooms-item end -->
                                </div>
                                <!--   rooms-container end -->
                            </div>
                        </div>
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
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i>22 Feb 2018</a></div>
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