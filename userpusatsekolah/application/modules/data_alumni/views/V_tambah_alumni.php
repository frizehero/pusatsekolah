<div class="content">
    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container">
            <br><br>
            <!-- <div class="list-main-wrap-title single-main-wrap-title fl-wrap align-center">
                <h2>Daftar Sebagai Alumni<span></span></h2>
            </div> -->
            <form action="<?php echo base_url('data_alumni/tambah') ?>" method="POST" enctype="multipart/form-data">
                <div class="fl-wrap ">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <!-- <ul id="progressbar" class="no-list-style">
                                <li class="active"><span class="tolt" data-microtip-position="top" data-tooltip="Profil Lengkap">01.</span></li>
                                <li><span class="tolt" data-microtip-position="top" data-tooltip="Alamat Lengkap">02.</span></li>
                                <li><span class="tolt" data-microtip-position="top" data-tooltip="Foto Profil">03.</span></li>
                                <li><span class="tolt" data-microtip-position="top" data-tooltip="Konfirmasi">04.</span></li>
                            </ul> -->
                            <div class="bookiing-form-wrap block_box fl-wrap">
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <form>
                                                <fieldset class="fl-wrap">
                                                   <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Profil Lengkap</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Username <i class="far fa-user"></i></label>
                                                            <input name="username_alumni" type="text" placeholder="Username" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Nama Lengkap <i class="far fa-user"></i></label>
                                                            <input name="nama_alumni" type="text" placeholder="Nama Lengkap" value=""/> 
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Tahun Lulus <i class="far fa-user"></i></label>
                                                            <input name="thlulus_alumni" type="text" placeholder="Tahun Lulus" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">NISN <i class="far fa-user"></i></label>
                                                            <input name="nisn" type="text" placeholder="NISN" value=""/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label"> Tempat Lahir <i class="fal fa-barcode"></i> </label>
                                                            <input type="text" placeholder="Tempat Lahir" value=""/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label"> Tanggal Lahir <i class="fal fa-calendar"></i> </label>
                                                            <input type="text" placeholder="Tanggal Lahir" value=""/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <label class="vis-label"> Jenis Kelamin <i class="fal fa-barcode"></i> </label>
                                                        <div class="listsearch-input-item ">
                                                            <select name="jenis_kelamin" data-placeholder="Your Country" class="chosen-select no-search-select" style="display: none;">
                                                                <option>Jenis Kelamin</option>
                                                                <option>Perempuan</option>
                                                                <option>Laki-laki</option>
                                                            </select>
                                                            <div class="nice-select chosen-select no-search-select" tabindex="0">
                                                                <span class="current">Jenis Kelamin</span>
                                                                <div class="nice-select-search-box">
                                                                    <input type="text" class="nice-select-search" placeholder="Search...">
                                                                </div>
                                                                <ul class="list">
                                                                    <li data-value="Jenis Kelamin" class="option selected">Jenis Kelamin</li><li data-value="Perempuan" class="option">Perempuan</li>
                                                                    <li data-value="Laki-laki" class="option">Laki-laki</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Status Alumni <i class="far fa-user"></i></label>
                                                            <input name="status_alumni" type="text" placeholder="Status Alumni" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Tempat Sekolah/Bekerja <i class="far fa-user"></i></label>
                                                            <input name="sekolah_bekerja" type="text" placeholder="Tempat Sekolah/Bekerja" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Fakultas/Pekerjaan <i class="far fa-user"></i></label>
                                                            <input name="pekerjaan_fakultas" type="text" placeholder="Tempat Sekolah/Bekerja" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Email<i class="far fa-envelope"></i>  </label>
                                                            <input name="email_alumni" type="text" placeholder="Email" value=""/>                                                  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">No. Telephone<i class="far fa-phone"></i>  </label>
                                                            <input name="telephone_alumni" type="text" placeholder="No. Telephone" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Facebook <i class="far fa-user"></i></label>
                                                            <input name="facebook_alumni" type="text" placeholder="Facebook" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Instagram <i class="far fa-user"></i></label>
                                                            <input name="instagram_alumni" type="text" placeholder="Instagram" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Twitter <i class="far fa-user"></i></label>
                                                            <input name="twitter_alumni" type="text" placeholder="Twitter" value=""/>
                                                        </div>
                                                        <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Alamat Lengkap</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Provinsi <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Provinsi" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kabupaten/Kota <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kota" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kecamatan <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kecamatan" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kelurahan <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kelurahan" value=""/>
                                                        </div>
                                                            <div class="col-sm-8">
                                                                <label class="vis-label">Alamat Lengkap <i class="fal fa-road"></i> </label>
                                                                <input type="text" placeholder="Alamat Lengkap" value=""/>                                                  
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label class="vis-label">Kode Pos<i class="fal fa-barcode"></i> </label>
                                                                <input type="text" placeholder="123456" value=""/>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Foto Profil</h3> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="list-single-main-item-title fl-wrap">
                                                                <h3>Foto Sampul</h3>
                                                            </div>
                                                            <label class="vis-label"> <i class="far fa-user"></i></label>
                                                            <div class="fuzone">
                                                                <div class="fu-text">
                                                                    <span><i class="fal fa-images"></i> Upload File (.pdf) </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input name="foto" type="file" class="upload" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Deskripsi</h3>
                                                    </div>
                                                    <textarea name="deskripsi_alumni" cols="40" rows="3" placeholder="Notes"></textarea>
                                                    <span class="fw-separator"></span>
                                                    </div>
                                                    </div>
                                                    <!-- <span class="fw-separator"></span>
                                                    <div class="clearfix"></div> -->
                                                    <button name="signup" value="Sign up" type="submit"  class="next-form action-button color-bg">Simpan</button>
                                                    <!-- <button name="signup" value="Sign up" type="submit" id="" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-dark">Tambah</button> -->
                                                </fieldset>
                                                <!-- <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Alamat Lengkap</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Provinsi <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Provinsi" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kabupaten/Kota <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kota" value=""/>  
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kecamatan <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kecamatan" value=""/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="vis-label">Kelurahan <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Kelurahan" value=""/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="vis-label">Alamat Lengkap <i class="fal fa-road"></i> </label>
                                                            <input type="text" placeholder="Alamat Lengkap" value=""/>                                                  
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="vis-label">Kode Pos<i class="fal fa-barcode"></i> </label>
                                                            <input type="text" placeholder="123456" value=""/>
                                                        </div>
                                                    </div>
                                                    <a  href="#"  class="previous-form action-button back-form   color2-bg">Kembali</a>
                                                    <a  href="#"  class="next-form   action-button color-bg">Selanjutnya</a>
                                                </fieldset>
                                                <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Foto Profil</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label class="vis-label">Foto Profil<i class="far fa-user"></i></label>
                                                            <div class="fuzone">
                                                                <div class="fu-text">
                                                                    <span><i class="fal fa-images"></i> Upload File (.pdf) </span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input type="file" class="upload" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Deskripsi</h3>
                                                    </div>
                                                    <textarea cols="40" rows="3" placeholder="Notes"></textarea>
                                                    <span class="fw-separator"></span>
                                                    <a  href="#"  class="previous-form  back-form action-button    color2-bg">Kembali</a>
                                                    <a  href="#"  class="next-form  action-button   color-bg">Selanjutnya</a>                                               
                                                </fieldset>
                                                <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Konfirmasi</h3>
                                                    </div>
                                                    <div class="success-table-container">
                                                        <div class="success-table-header fl-wrap">
                                                            <i class="fal fa-check-circle decsth"></i>
                                                            <h4>Terima Kasih!</h4>
                                                            <div class="clearfix"></div>
                                                            <p>Datamu Telah Berhasil Terinput.</p>
                                                        </div>
                                                    </div>
                                                    <span class="fw-separator"></span>
                                                    <a  href="#"  class="previous-form action-button  back-form   color2-bg">Kembali</a>
                                                    <a href="invoice.html" class="previous-form action-button  back-form   color2-bg">Data Alumni</a>
                                                </fieldset> -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--   list-single-main-item end -->
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="cart-details-wrap fl-wrap">
                                <div class="cart-details-item-header">
                                    <h3> Your Booking Cart</h3>
                                </div> -->
                                <!--cart-details  --> 
                                <!-- <div class="cart-details fl-wrap block_box"> -->
                                    <!--cart-details_header--> 
                                    <!-- <div class="cart-details_header">
                                        <a href="#"  class="widget-posts-img"><img src="images/all/48.jpg" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#">40 Journal Square Plaza, NJ, USA</a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                                        </div>
                                    </div> -->
                                    <!--cart-details_header end-->       
                                    <!--ccart-details_text-->          
                                    <!-- <div class="cart-details_text">
                                        <ul class="cart_list no-list-style">
                                            <li>Date <span>04.11.19</span></li>
                                            <li>Hour <span>5:30 PM</span></li>
                                            <li>Guests<span>2 Adults</span></li>
                                        </ul>
                                    </div> -->
                                    <!--cart-details_text end --> 
                                <!-- </div> -->
                                <!--cart-details end --> 
                                <!--cart-total --> 
                                <!-- <div class="cart-total color2-bg fl-wrap">
                                    <span class="cart-total_item_title">Total Cost</span>
                                    <strong>$190</strong>                                
                                </div> -->
                                <!--cart-total end --> 
                            <!-- </div> -->
                            <!--box-widget-item -->
                            <!-- <div class="box-widget-item fl-wrap">
                                <div class="banner-wdget fl-wrap">
                                    <div class="overlay"></div>
                                    <div class="bg"  data-bg="images/bg/12.jpg"></div>
                                    <div class="banner-wdget-content fl-wrap">
                                        <h4>Still need help in filling out the form  ? Visit our help page. </h4>
                                        <a href="help.html" class="color-bg" > Visit now</a>
                                    </div>
                                </div>
                            </div> -->
                            <!--box-widget-item end -->                                     
                        <!-- </div> -->
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>