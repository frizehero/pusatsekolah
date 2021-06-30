<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from townhub.kwst.net/login-sign.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:55:24 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Pusat Sekolah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>images/logo.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!--login-column  -->
            <div class="login-column">
                <div class="login-column_header">
                    <img src="<?php echo base_url() ?>images/logoatas.png" alt="">
                    <div class="clearfix"></div>
                    <h4>Selamat Bergabung Dengan Kami</h4>
                </div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap">
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form action="<?php echo base_url('login/proses_login' ) ?>" class="login-form" method="post">
                                            <label>Username<span>*</span> </label>
                                            <input name="username" type="text">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" id="examplePassword" type="password">
                                            <button type="submit" class="btn color2-bg">Log in<i class="fas fa-caret-right"></i></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="check">
                                                <label for="check-a3">Ingat Saya</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#" class="show-lpt">Lupa Password?</a>
                                            <div class="lost-password-tootip">
                                                <p>Masukkan alamat email anda untuk kami lakukan verifikasi.</p>
                                                <input name="email" type="text"   onClick="this.select()" value="">
                                                <button type="submit"  class="btn float-btn color2-bg"> Kirim<i class="fas fa-caret-right"></i></button>
                                                <div class="close-lpt"><i class="far fa-times"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Nama Lengkap <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Username <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="btn float-btn color2-bg"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>Atau masuk dengan</p>
                                <a href="#" class="facebook-log"> Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--login-column end-->
            <!--login-column-bg  -->
            <div class="login-column-bg gradient-bg">
                <!--ms-container-->
                <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/tk1.jpg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide ">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/sd1.jpg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap full-height">
                                    <div class="bg" data-bg="images/sekolah/smp2.jpeg"></div>
                                    <div class="overlay op7"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                        </div>
                    </div>
                </div>
                <!--ms-container end-->    
                <div class="login-promo-container">
                    <div class="container">
                        <div class="video_section-title fl-wrap">
                            <h4>Kami hadir untuk seluruh sekolah di Indonesia</h4>
                            <h2>Saling membantu dalam mempermudah meroleh pendidikan yang layak untuk semua.</h2>
                        </div>
                        <!--<a href="https://vimeo.com/253953667" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>-->
                    </div>
                </div>
            </div>
            <!--login-column-bg end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
    </body>

<!-- Mirrored from townhub.kwst.net/login-sign.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:55:25 GMT -->
</html>