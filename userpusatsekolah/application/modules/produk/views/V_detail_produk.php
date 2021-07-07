<!-- content-->
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
                    <li><a href="tampilan-event-sekolah.html"><i class="fal fa-utensils"></i>Event</a></li>
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
    <!--section-->
    <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
        <div class="container" style="padding-top: 20px;">
            <div class="share-holder hid-share sing-page-share top_sing-page-share">
            </div>
            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
            <div class="fl-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class=" fl-wrap lws_mobile">
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Kategori Produk</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <ul class="cat-item no-list-style">
                                            <li><a href="#">Makanan</a> <span><?php echo $totalproduk?></span></li>
                                            <li><a href="#">Minuman</a> <span><?php echo $totalproduk?> </span></li>
                                            <li><a href="#">Kerajinan</a> <span> <?php echo $totalproduk?> </span></li>
                                            <li><a href="#">Dan lain-lain</a> <span> <?php echo $totalproduk?> </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->  
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Produk Lain</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <ul class="cart-modal-list no-list-style fl-wrap">
                                            <li>
                                                <a class="cart-modal-image" href="product-single.html">
                                                <img src="images/shop/4.jpg" alt="">
                                                </a>
                                                <div class="cart-modal-det">
                                                    <a href="product-single.html">Grilled Filet of Cod</a>
                                                    <div class="quantity"> <span class="woocommerce-Price-amount">Rp. 56.000</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="cart-modal-image" href="product-single.html">
                                                <img src="images/shop/2.jpg" alt="">
                                                </a>
                                                <div class="cart-modal-det">
                                                    <a href="product-single.html">Saute Crispy Goats</a>
                                                    <div class="quantity"> <span class="woocommerce-Price-amount">Rp. 17.000</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="cart-modal-image" href="product-single.html">
                                                <img src="images/shop/3.jpg" alt="">
                                                </a>
                                                <div class="cart-modal-det">
                                                    <a href="product-single.html">Warm Chocolate Pudding</a>
                                                    <div class="quantity"> <span class="woocommerce-Price-amount">Rp. 90.200</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="cart-modal-image" href="product-single.html">
                                                <img src="images/shop/1.jpg" alt="">
                                                </a>
                                                <div class="cart-modal-det">
                                                    <a href="product-single.html">Warm Chocolate Pudding</a>
                                                    <div class="quantity"> <span class="woocommerce-Price-amount">Rp. 90.200</span></div>
                                                </div>
                                            </li>
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
                        <div class="fl-wrap block_box product-header">
                            <div class="product-header-details">
                                <div class="row">
                                
                                    <div class="col-md-6">
                                        <div class="single-slider-wrap shop-media-img">
                                            <div class="single-slider fl-wrap">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper lightgallery">
                                                        <div class="hov_zoom"><img src="<?php echo base_url() ?>assets/images/produk/<?php echo $tampil['foto_produk'] ?>" style="width:400px; height:auto;" alt=""><a href="<?php echo base_url() ?>assets/images/produk/<?php echo $tampil['foto_produk'] ?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>

                                                        <!-- <div class="swiper-slide hov_zoom"><img src="images/shop/15.jpg" alt=""><a href="images/shop/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom"><img src="images/shop/11.jpg" alt=""><a href="images/shop/11.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        <div class="col-md-6">
                                            <h3><?php echo $tampil['nama_produk'] ?></h3>
                                            <span class="product-header-details_price">Rp. <?php echo $tampil['harga_produk'] ?></span>
                                            <div class="listing-rating-count-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                <div class="reviews-count">(12 reviews)</div>
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="clearfix"></div>
                                            <p><?php echo $tampil['deskripsi_produk'] ?></p>
                                            <span class="fw-separator"></span>
                                            <div class="custom-form product-header_form ">
                                                <a href="tampilan-inbox-user.html">
                                                <button class="color-bg">Kirim pesan</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <span class="fw-separator"></span>  
                                <div class="list-single-tags tags-stylwrap">
                                    <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                    <a href="#">Market</a>
                                    <a href="#">Hot</a>
                                    <a href="#">Drinks</a>
                                    <a href="#">Coffee</a>
                                    <a href="#">Restourant</a>                                                                                 
                                </div>
                            </div>
                        </div>
                        <!-- shop-tabs--> 
                        <div class="tabs-act fl-wrap">
                            <div class="shop-tabs-menu " id="st-menu">
                                <ul class="tabs-menu fl-wrap no-list-style">
                                    <li class="current"><a href="#shop-tab1" id="tab-0"> Deskripsi</a></li>
                                    <li><a href="#shop-tab2" id="tab-1">Info Produk</a></li>
                                    <li><a href="#shop-tab3" id="tab-2">Reviews</a></li>
                                </ul>
                            </div>
                            <!-- shop-tabs--> 
                            <!-- shop-tabs--> 
                            <div class="shop-tabs fl-wrap block_box">
                                <!--tabs -->                       
                                <div class="tabs-container fl-wrap">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="shop-tab1" class="tab-content  first-tab ">
                                            <div class="shop-tab-container">
                                                <p><?php echo $tampil['deskripsi_produk'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab --> 
                                    <div class="tab">
                                        <div id="shop-tab2" class="tab-content">
                                            <div class="shop-tab-container">
                                                <ul class="no-list-style shop-list fl-wrap">
                                                    <li><span>Nama Produk : </span>Batik SMEA</li>
                                                    <li><span>Bahan : </span>kain</li>
                                                    <li><span>Ukuran : </span>3 meter</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab --> 
                                    <div class="tab">
                                        <div id="shop-tab3" class="tab-content">
                                            <div class="shop-tab-container">
                                                <div class="reviews-comments-wrap">
                                                    <!-- reviews-comments-item -->  
                                                    <div class="reviews-comments-item">
                                                        <div class="review-comments-avatar">
                                                            <img src="images/avatar/4.jpg" alt=""> 
                                                        </div>
                                                        <div class="reviews-comments-item-text fl-wrap">
                                                            <div class="reviews-comments-header fl-wrap">
                                                                <h4><a href="#">Liza Rose</a></h4>
                                                                <div class="review-score-user">
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                </div>
                                                            </div>
                                                            <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                            <div class="reviews-comments-item-footer fl-wrap">
                                                                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span></div>
                                                                <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Sukai  <span>2</span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--reviews-comments-item end--> 
                                                    <!-- reviews-comments-item -->  
                                                    <div class="reviews-comments-item">
                                                        <div class="review-comments-avatar">
                                                            <img src="images/avatar/6.jpg" alt=""> 
                                                        </div>
                                                        <div class="reviews-comments-item-text fl-wrap">
                                                            <div class="reviews-comments-header fl-wrap">
                                                                <h4><a href="#">Adam Koncy</a></h4>
                                                                <div class="review-score-user">
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                </div>
                                                            </div>
                                                            <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                            <div class="reviews-comments-item-footer fl-wrap">
                                                                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span></div>
                                                                <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Sukai  <span>4</span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--reviews-comments-item end-->                                                                  
                                                </div>
                                            </div>
                                            <span class="fw-separator"></span>                                                       
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="shop-review-box fl-wrap">
                                                <!-- Review Comment -->
                                                <div class="leave-rating-wrap">
                                                    <span class="leave-rating-title">Beri Review : </span>
                                                    <div class="leave-rating">
                                                        <input type="radio" name="rating" id="rating-1" value="1"/>
                                                        <label for="rating-1" class="fas fa-star"></label>
                                                        <input type="radio" name="rating" id="rating-2" value="2"/>
                                                        <label for="rating-2" class="fas fa-star"></label>
                                                        <input type="radio" name="rating" id="rating-3" value="3"/>
                                                        <label for="rating-3" class="fas fa-star"></label>
                                                        <input type="radio" name="rating" id="rating-4" value="4"/>
                                                        <label for="rating-4" class="fas fa-star"></label>
                                                        <input type="radio" name="rating" id="rating-5" value="5"/>
                                                        <label for="rating-5" class="fas fa-star"></label>
                                                    </div>
                                                </div>
                                                <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><i class="fal fa-user"></i></label>
                                                                <input type="text" placeholder="Nama Anda*" value=""/>
                                                            </div>
                                                        </div>
                                                        <textarea cols="40" rows="3" placeholder="Masukkan Review Anda :"></textarea>
                                                        <div class="clearfix"></div>
                                                        <button class="btn  color2-bg  float-btn">Kirim <i class="fal fa-paper-plane"></i></button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <!-- Add Review Box / End -->                                                            
                                        </div>
                                    </div>
                                </div>
                                <!--tab end-->                                                    
                            </div>
                            <!--tabs end-->                                         
                        </div>
                        <!-- shop-tabs end-->                                
                    </div>
                </div>
            </div>
    </section>
    <!--section end-->
    <div class="limit-box fl-wrap"></div>
</form>
</div>
<!--content end-->   