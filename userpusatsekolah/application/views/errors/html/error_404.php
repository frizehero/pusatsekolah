<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>404 Halaman Tidak Ditemukan</title>
    <meta name="viewportx" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="msapplication-tap-highlight" content="no">
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href=">css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/dashboard-style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <link type="text/css" rel="stylesheet" href="css/shop.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/logo.ico">
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
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section small-par" data-scrollax-parent="true" style="padding: 130px;">
                        <div class="bg"  data-bg="images/bg/hero/5.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="error-wrap">
                                <div class="bubbles">
                                    <h2 style="font-size: 120px;">404</h2><br><h2 style="font-size: 72px;">Halaman Tidak Ditemukan</h2>
                                    <!-- <h2><?php echo $heading; ?></h2> -->
                                </div>
								<br><br><br><br><br>
                                <p>Halaman Yang Kamu Cari Tidak Dapat Ditemukan</p>
                                <!-- <p><?php echo $message; ?></p> -->
								<br><br><br><br>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                </div>
                <!--content end-->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>