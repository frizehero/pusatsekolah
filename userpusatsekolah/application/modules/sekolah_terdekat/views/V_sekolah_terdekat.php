<!-- content-->
<div class="content">
<!-- Map -->
<div class="map-container column-map right-pos-map fix-map hid-mob-map">
    <div id="map-main"></div>
    <ul class="mapnavigation no-list-style">
        <li><a href="#" class="prevmap-nav mapnavbtn"><span><i class="fas fa-caret-left"></i></span></a></li>
        <li><a href="#" class="nextmap-nav mapnavbtn"><span><i class="fas fa-caret-right"></i></span></a></li>
    </ul>
    <div class="scrollContorl mapnavbtn tolt"   data-microtip-position="top-left" data-tooltip="Enable Scrolling"><span><i class="fal fa-unlock"></i></span></div>
    <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location"><span><i class="fal fa-location"></i></span></div>
    <div class="map-close"><i class="fas fa-times"></i></div>
</div>
<!-- Map end -->
<div class="col-list-wrap novis_to-top" style="padding-top: 20px; background-color: #ffffff">
    <!-- list-main-wrap-header end-->
    <div class="container">
        <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
        <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
    </div>
    <!-- listsearch-input-wrap-->
    <div class="listsearch-input-wrap lws_mobile fl-wrap tabs-act" id="lisfw">
        <div class="clearfix"></div>
        <div class="container">
            <!--tabs -->                       
            <div class="tabs-container fl-wrap">
                <!--tab -->
                <div class="tab" style="height: 150px;">
                    <div id="filters-search" class="tab-content  first-tab ">
                        <div class="fl-wrap">
                            <div class="row">
                                <!-- listsearch-input-item-->
                                <div class="col-md-4">
                                    <div class="listsearch-input-item">
                                        <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                        <input type="text" placeholder="Apa yang sedang Anda cari ?" value=""/>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->
                                <div class="col-md-4">
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Lokasi" class="chosen-select no-search-select" >
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
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->
                                <div class="col-md-4">
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Kota" class="chosen-select no-search-select" >
                                            <option>Semua Kota</option>
                                            <option>Jakarta</option>
                                            <option>Surabaya</option>
                                            <option>Jogja</option>
                                            <option>Malang</option>
                                            <option>Bandung</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->  
                                <!-- listsearch-input-item-->
                                <div class="col-md-9">
                                    <div class="listsearch-input-item location autocomplete-container">
                                        <span class="iconn-dec"><i class="far fa-map-marker"></i></span>
                                        <input type="text" placeholder="Where to look?" class="autocomplete-input" id="autocompleteid3" value=""/>
                                        <a href="#"><i class="fal fa-location"></i></a>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->  
                                <!-- listsearch-input-item-->
                                <div class="col-md-3">
                                    <div class="listsearch-input-item">
                                        <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->                                         
                            </div>
                            <!-- hidden-listing-filter -->
                            <div class="hidden-listing-filter fl-wrap">
                                <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tasks"></i>More Filters</div>
                                <div class="fl-wrap mar-btoom">
                                    <div class="row">
                                        <!-- listsearch-input-item-->
                                        <div class="col-md-3">
                                            <div class="listsearch-input-item">
                                                <button class="toggle-filter-btn tsb_act "><i class="fal fa-clock"></i> <span>Open Now</span></button>
                                            </div>
                                        </div>
                                        <!-- listsearch-input-end-->                                        
                                        <!-- listsearch-input-item-->
                                        <div class="col-md-3">
                                            <div class="listsearch-input-item clact date-container">
                                                <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                <input type="text" placeholder="Event Date"     name="datepicker-here"   value=""/>
                                                <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                            </div>
                                        </div>
                                        <!-- listsearch-input-end--> 
                                        <!-- listsearch-input-item-->
                                        <div class="col-md-6">
                                            <div class="listsearch-input-item">
                                                <div class="price-rage-wrap fl-wrap">
                                                    <div class="price-rage-wrap-title"><i class="fal fa-hand-holding-usd"></i> Price :</div>
                                                    <div class="price-rage-item fl-wrap">
                                                        <input type="text" class="price-range" data-min="0" data-max="4"  name="price-range1"  data-step="1" value="$$">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- listsearch-input-end-->                                            
                                    </div>
                                </div>
                                <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tags"></i>Facilities</div>
                                <!-- listsearch-input-item-->
                                <div class="listsearch-input-item">
                                    <div class=" fl-wrap filter-tags">
                                        <ul class="no-list-style">
                                            <li>
                                                <input id="check-aa" type="checkbox" name="check">
                                                <label for="check-aa">Elevator in building</label>
                                            </li>
                                            <li>
                                                <input id="check-b" type="checkbox" name="check">
                                                <label for="check-b">Friendly workspace</label>
                                            </li>
                                            <li>
                                                <input id="check-c" type="checkbox" name="check" checked>
                                                <label for="check-c">Instant Book</label>
                                            </li>
                                            <li>
                                                <input id="check-d" type="checkbox" name="check">
                                                <label for="check-d">Wireless Internet</label>
                                            </li>
                                            <li>
                                                <input id="check-d2" type="checkbox" name="check" checked>
                                                <label for="check-d2">Free WiFi</label> 
                                            </li>
                                            <li>
                                                <input id="check-d3" type="checkbox" name="check" checked>
                                                <label for="check-d3">Free Parking</label> 
                                            </li>
                                            <li>   
                                                <input id="check-d4" type="checkbox" name="check">
                                                <label for="check-d4">Smoking Allowed</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->
            </div>
            <!--tabs end-->
        </div>
    </div>
    <!-- listsearch-input-wrap end-->
    <!-- listing-item-container -->
    <div class="listing-item-container init-grid-items fl-wrap">
        <div class="container">
            <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/sekolah/sd2.jpg" alt="" style="height: 250px;"> 
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logosd2.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">3.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                    <br>
                                    <div class="reviews-count">4 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">SDN Ardimulyo 1</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Malang, Jawa Timur, Probolinggo</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <!--<div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </article>
                </div>
            <!-- listing-item end -->                                       
            <!-- listing-item  -->
            <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/sekolah/tk1.jpg" alt="" style="height: 250px;"> 
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logotk1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">5.0</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>                                                
                                    <div class="reviews-count">4 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="listing-single.html">TK Barnadian Uta</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Surabaya, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <!--<div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </article>
                </div>
            <!-- listing-item end -->                                         
            <!-- listing-item  -->
            <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="tampilan-beranda-sekolah.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/sekolah/sd1.jpg" alt="" style="height: 250px;"> 
                            </a>
                            <div class="listing-avatar"><a href="tampilan-beranda-sekolah.html"><img src="images/sekolah/logosd1.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                            </div>
                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.2</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    <br>                                                
                                    <div class="reviews-count">6 reviews</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap ">
                                <div class="geodir-category-content-title-item">
                                    <br>
                                    <h3 class="title-sin_map"><a href="tampilan-beranda-sekolah.html">SDN Sukabumi 2</a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Probolinggo, Jawa Timur, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                                <!--<div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </article>
                </div>
            <!-- listing-item end -->                                       
            <!-- listing-item  -->
            <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                            <img src="images/sekolah/paud2.jpg" alt="" style="height: 250px;"> 
                            </a>
                            <div class="listing-avatar"><a href="author-single.html"><img src="images/sekolah/logopaud2.png" alt="" style="background: #ffffff"></a>
                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
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
                                    <h3 class="title-sin_map"><a href="listing-single.html">PAUD Bhayangkara 205</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Lebak Bulus, Jakarta, Indonesia</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text">Bekerjasama dengan TNI AD mendidik anak - anak bunda berprestasi.</p>
                                <!--<div class="facilities-list fl-wrap">
                                    <div class="facilities-list-title">Facilities : </div>
                                    <ul class="no-list-style">
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                        <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </article>
                </div>
            <!-- listing-item end -->                                         
            <!-- listing-item  -->
            <div class="listing-item">
                <article class="geodir-category-listing fl-wrap">
                    <div class="geodir-category-img">
                        <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                        <img src="images/all/28.jpg" alt=""> 
                        </a>
                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/5.jpg" alt=""></a>
                            <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                        </div>
                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                        <div class="geodir-category-opt">
                            <div class="listing-rating-count-wrap">
                                <div class="review-score">4.7</div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                <br>
                                <div class="reviews-count">9 reviews</div>
                            </div>
                        </div>
                    </div>
                    <div class="geodir-category-content fl-wrap">
                        <div class="geodir-category-content-title fl-wrap">
                            <div class="geodir-category-content-title-item">
                                <h3 class="title-sin_map"><a href="listing-single.html">Handmade Shop</a></h3>
                                <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                            </div>
                        </div>
                        <div class="geodir-category-text fl-wrap">
                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            <div class="facilities-list fl-wrap">
                                <div class="facilities-list-title">Facilities : </div>
                                <ul class="no-list-style">
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="geodir-category-footer fl-wrap">
                            <a class="listing-item-category-wrap">
                                <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                <span>Shopping</span>
                            </a>
                            <div class="geodir-opt-list">
                                <ul class="no-list-style">
                                    <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                    <li><a href="#5" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                    <li>
                                        <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/28.jpg'},{'src': 'images/all/29.jpg'}, {'src': 'images/all/30.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-level geodir-category_price">
                                <span class="price-level-item" data-pricerating="3"></span>
                                <span class="price-name-tooltip">Pricey</span>
                            </div>
                            <div class="geodir-category_contacts">
                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                <ul class="no-list-style">
                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!-- listing-item end -->                                       
            <!-- listing-item  -->
            <div class="listing-item">
                <article class="geodir-category-listing fl-wrap">
                    <div class="geodir-category-img">
                        <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                        <img src="images/all/18.jpg" alt=""> 
                        </a>
                        <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                            <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                        </div>
                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close Now</div>
                        <div class="geodir-category-opt">
                            <div class="listing-rating-count-wrap">
                                <div class="review-score">4.1</div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                <br>
                                <div class="reviews-count">26 reviews</div>
                            </div>
                        </div>
                    </div>
                    <div class="geodir-category-content fl-wrap">
                        <div class="geodir-category-content-title fl-wrap">
                            <div class="geodir-category-content-title-item">
                                <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in Manhattan</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                <div class="geodir-category-location fl-wrap"><a href="#6" class="map-item"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ,  USA</a></div>
                            </div>
                        </div>
                        <div class="geodir-category-text fl-wrap">
                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                            <div class="facilities-list fl-wrap">
                                <div class="facilities-list-title">Facilities : </div>
                                <ul class="no-list-style">
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                    <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="geodir-category-footer fl-wrap">
                            <a class="listing-item-category-wrap">
                                <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                <span>Restaurants</span>
                            </a>
                            <div class="geodir-opt-list">
                                <ul class="no-list-style">
                                    <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                    <li><a href="#6" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>6</strong></span> </a></li>
                                    <li>
                                        <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/18.jpg'},{'src': 'images/all/21.jpg'}, {'src': 'images/all/22.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-level geodir-category_price">
                                <span class="price-level-item" data-pricerating="2"></span>
                                <span class="price-name-tooltip">Moderate</span>
                            </div>
                            <div class="geodir-category_contacts">
                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                <ul class="no-list-style">
                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <!-- listing-item end -->                                                                                   
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
    </div>
    <!-- listing-item-container end -->
    <!--<div class="avatar-img" data-srcav="http://citybook.kwst.net/images/avatar/4.jpg"></div>-->
</div>
<div class="limit-box fl-wrap"></div>
</div>
<!--content end-->