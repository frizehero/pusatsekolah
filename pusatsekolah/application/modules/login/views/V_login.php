<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pusat Sekolah</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="<?php echo base_url() ?>main.css" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div>
                            <a href="">
                                <img src="assets/images/logo1.png" style="width: 150px; margin-left: 360px;">
                            </a>
                        </div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Login</div>
                                        </h4>
                                    </div>
                                    <form action="<?php echo base_url('login/proses_login' ) ?>" class="login-form" method="post">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                <button class="mb-2 mr-2 btn btn-outline-success btn-lg btn-block">Login dengan Akun Google</button>
                                            </div></div>
                                            <div class="col-md-12">
                                            <div class="modal-body text-center">
                                                <h6 class="mt-2">Atau login dengan</h6>
                                            </div></div>
                                            <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="username" placeholder="Username" type="text" class="form-control">
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password" id="examplePassword" placeholder="Password" type="password" class="form-control">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <input name="check" id="exampleCheck" type="checkbox" class="form-check-input">
                                            <label for="exampleCheck" class="form-check-label">Ingat saya</label>
                                        </div>
                                        <div class="divider"></div>
                                        <h6 class="mb-0">Belum punya akun Pusat Sekolah?<a href="<?php echo base_url('login/register' ) ?>" class="text-primary">Daftar Sekarang</a></h6>
                                </div>
                                        <div class="modal-footer clearfix">
                                            <div class="float-left">
                                                <a href="lupa-password.html" class="btn-lg btn btn-link">Lupa password</a>
                                            </div>
                                            <div class="float-right">
                                            <button class="btn btn-primary btn-lg" type="submit">Login</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © Pusat Sekolah 2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script></body>


<!-- Mirrored from demo.dashboardpack.com/architectui-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 08:03:40 GMT -->
</html>