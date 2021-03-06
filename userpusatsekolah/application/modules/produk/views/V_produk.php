<div class="content">
    <form action="<?php echo base_url('produk/tampildetail') ?>" method="POST" enctype="multipart/form-data">
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
                        <li><a href="tampilan-beranda-sekolah.html"><i class="fal fa-images"></i>Beranda</a></li>
                        <li><a href="tampilan-data-guru.html"><i class="fal fa-info"></i>Guru</a></li>
                        <li><a href="tampilan-data-alumni.html"><i class="fal fa-image"></i>Alumni</a></li>
                        <li><a href="tampilan-beranda-event-sekolah.html"><i class="fal fa-utensils"></i>Event</a></li>
                        <li><a class="act-scrlink" href="tampilan-produk-sekolah.html"><i class="fal fa-comments-alt"></i>Produk</a></li>
                        <li><a href="tampilan-media-sekolah.html"><i class="fal fa-images"></i>Media</a></li>
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
        <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
            <div class="container" style="padding-top: 20px;">
                <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                <div class="fl-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <div class=" fl-wrap lws_mobile">
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap block_box">
                                    <div class="box-widget-item-header">
                                        <h3>Cari Produk</h3>
                                    </div>
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <div class="search-widget">
                                                <form action="#" class="fl-wrap">
                                                    <input name="se" id="se" type="text" class="search" placeholder="Cari..." value="" />
                                                    <button class="search-submit color2-bg" style="margin-top: 25px; margin-right: 30px;" id="submit_btn"><i class="fal fa-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->  
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap block_box">
                                    <div class="box-widget-item-header">
                                        <h3>Tentukan Harga</h3>
                                    </div>
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <div class="price-rage-wrap shop-rage-wrap fl-wrap">
                                                <a href="#" class="srw_btn color-bg" >Temukan</a>
                                                <div class="price-rage-item fl-wrap">
                                                    <input type="text" class="shop-price" data-min="0" data-max="1000"  name="shop-price"  data-step="10" value="$$">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end --> 
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap block_box">
                                    <div class="box-widget-item-header">
                                        <h3>Kategori Produk</h3>
                                    </div>
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <ul class="cat-item no-list-style">
                                                <li><a href="#">Makanan</a> <span><?php echo $totalproduk?></span></li>
                                                <li><a href="#">Minuman</a> <span> </span></li>
                                                <li><a href="#">Kerajinan</a> <span> </span></li>
                                                <li><a href="#">dll</a> <span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->                                            
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap block_box">
                                    <div class="box-widget-item-header">
                                        <h3>Product Tags</h3>
                                    </div>
                                    <div class="box-widget fl-wrap">
                                        <div class="box-widget-content">
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#">Market</a>
                                                <a href="#">Hot</a>
                                                <a href="#">Drinks</a>
                                                <a href="#">Coffee</a>
                                                <a href="#">Restourant</a>                                                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->                                            
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!-- list-main-wrap-header-->
                            <div class="list-main-wrap-header fl-wrap block_box no-vis-shadow">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2>Tampilkan <span> 1–8 </span> dari   19 Produk</h2>
                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt-->
                                    <div class="price-opt">
                                        <span class="price-opt-title">Filter :</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                <option>Terpopuler</option>
                                                <option>Terlaris</option>
                                                <option>Harga Termurah</option>
                                                <option>Harga Termahal</option>
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
                                <!-- shop-item  -->
                                <?php $no = 1; foreach ($tampil as $rowP) { ?>
                                    <div class="shop-item">
                                        <div class="shop-item-media">
                                            <a href="tampilan-detail-produk.html">
                                                <img src="<?php echo base_url() ?>assets/images/produk/<?php echo $rowP->foto_produk; ?>" style="width: 400px; height: 260px;">
                                                <div class="overlay"></div>
                                            </a>
                                            <div class="geodir-category-opt">
                                                <div class="listing-rating-count-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                    <br>
                                                    <div class="reviews-count">12 reviews</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-item_title">
                                            <h4><?php echo $rowP->nama_produk; ?></h4>
                                            <span class="shop-item_price">Rp. <?php echo $rowP->harga_produk; ?></span>
                                            <a href="<?php echo base_url('produk/detailproduk/' . encrypt_url($rowP->id_produk)); ?>" class="shop-item_link color-bg">Details</a>
                                        </div>
                                    </div>
                                <?php $no++;} ?>
                                <!-- shop-item end -->                                            
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section end-->
        <div class="limit-box fl-wrap"></div>
    </form>

</div>