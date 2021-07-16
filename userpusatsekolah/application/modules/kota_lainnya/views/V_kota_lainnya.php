<!--section  -->
<section style="margin-top: -65px;">
    <div class="container big-container">
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
            <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                <?php $no=1; foreach ($idkotalainnya AS $rowL ) { ?>
                <!-- shop-item  -->
                <div class="gallery-item">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/sekolah/yogyakarta.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>160 </span> Sekolah Terdaftar</div>
                        <div class="listing-item-grid_title">
                            <h3><a href=""><?php echo $rowL->kota_kab;?></a></h3>
                            <p>Constant care and attention to the patients makes good record</p>
                        </div>
                    </div>
                </div>
                <!-- shop-item end -->
                <?php $no++;} ?>
            </div>
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