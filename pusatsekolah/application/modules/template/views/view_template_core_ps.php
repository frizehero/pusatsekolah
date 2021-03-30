<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pusat Sekolah</title>
    <meta name="viewport
        content=" width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Rumah Sakit Terbaik Di Pasuruan.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="<?php echo base_url() ?>main.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.ico">
</head>

<style type="text/css">
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place front is invalid - may break your css so removed */
        padding-top: 100px;
        /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
        left: 0;
        right: 0;
        /* Full width (left and right 0) */
        top: 0;
        bottom: 0;
        /* Full height top and bottom 0 */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        z-index: 9999;
        /* Sit on top - higher than any other z-index in your site*/


    }

    .modal-backdrop {
        z-index: -1;
    }
</style>


<body>


    <?php



    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

    $menu = $uri_segments[2];

    ?>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div>
                    <a href="<?php echo base_url('beranda'); ?>">
                        <img src="<?php echo base_url() ?>assets/images/logoatas.png" style="width: 150px;">
                    </a>
                </div>
                <div class="header-btn-lg pr-0"></div>
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-dots">
                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                    <span class="icon-wrapper-bg bg-danger"></span>
                                    <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                </span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header mb-0">
                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                        <div class="menu-header-image opacity-1" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city3.jpg');"></div>
                                        <div class="menu-header-content text-dark">
                                            <h5 class="menu-header-title">Notifikasi</h5>
                                            <h6 class="menu-header-subtitle">Seluruh Notifikasi anda ada disini!</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                            <span>Chat</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                            <span>Umum</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                            <span>Pusat Sekolah</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="no-results pt-3 pb-0">
                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                        <span class="swal2-success-line-tip"></span>
                                                        <span class="swal2-success-line-long"></span>
                                                        <div class="swal2-success-ring"></div>
                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="results-subtitle">Hari ini tidak ada Pesan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="widget-content card-body">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="avatar-icon-wrapper">
                                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                                </div>
                                                                <div class="avatar-icon">
                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/2.jpg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Suharji</b> Telah menyukai postingan anda.</div>
                                                            <span class="text-muted d-inline-flex align-items-center align-middle">1 Hari yang lalu</span>
                                                        </div>
                                                    </div>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="avatar-icon-wrapper">
                                                                <div class="badge badge-bottom badge-success badge-dot badge-dot-lg">
                                                                </div>
                                                                <div class="avatar-icon">
                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/21.jpeg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Abdul Hasan</b> Telah mengomentari potingan anda.</div>
                                                            <span class="text-muted d-inline-flex align-items-center align-middle">2 Hari yang lalu</span>
                                                        </div>
                                                    </div>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="avatar-icon-wrapper">
                                                                <div class="badge badge-bottom badge-secondary badge-dot badge-dot-lg">
                                                                </div>
                                                                <div class="avatar-icon">
                                                                    <img src="<?php echo base_url() ?>assets/images/avatars/6.jpg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div><b>Farhan Ariyanto</b> Telah membagikan halaman sekolah anda</div>
                                                            <span class="text-muted d-inline-flex align-items-center align-middle">3 Hari yang lalu</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php echo base_url() ?>assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('<?php echo base_url() ?>assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle" src="<?php echo base_url() ?>assets/images/avatars/1.jpg" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Dhinda Rek</div>
                                                                    <div class="widget-subheading opacity-8">Admin Pusat Sekolah</div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <a href="<?php echo base_url('login/logoutApp'); ?>" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scroll-area-xs" style="height: 150px;">
                                                    <div class="scrollbar-container ps">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">Akun</li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Profil Saya
                                                                    <div class="ml-auto badge badge-pill badge-info">8</div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="javascript:void(0);" class="nav-link">Daftar Tindakan
                                                                    <div class="ml-auto badge badge-success">New</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm"> Open Messages </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading"> Alina Mclourd </div>
                                    <div class="widget-subheading"> Admin Sekolah </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-btn-lg">
                        <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                            <span class="fa fa-cog fa-w-16 fa-2x"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-fw fsize-2"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="main-card mb-3 card">
                    <div class="card-header">Tanyakan ke Pusat Sekolah</div>
                    <div class="scroll-area-lg">
                        <div class="scrollbar-container">
                            <div class="chat-wrapper p-1">
                                <div class="chat-box-wrapper">
                                    <div>
                                        <div class="avatar-icon-wrapper mr-1">
                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                <img src="<?php echo base_url() ?>assets/images/avatars/13.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="chat-box">Halo, ada yang bisa kami bantu?</div>
                                        <small class="opacity-6">
                                            11:01 AM
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="chat-box-wrapper chat-box-wrapper-right">
                                        <div>
                                            <div class="chat-box">Halo admin, bagaimana cara mendaftar menjadi alumni sekolah?</div>
                                            <small class="opacity-6">
                                                11:01 AM
                                            </small>
                                        </div>
                                        <div>
                                            <div class="avatar-icon-wrapper ml-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-box-wrapper">
                                    <div>
                                        <div class="avatar-icon-wrapper mr-1">
                                            <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                            <div class="avatar-icon avatar-icon-lg rounded">
                                                <img src="<?php echo base_url() ?>assets/images/avatars/13.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="chat-box">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, pariatur numquam soluta, est eveniet consequuntur, mollitia ratione nulla officia quas iusto quam. Repudiandae temporibus soluta quae debitis dicta. Blanditiis, natus!
                                        </div>

                                        <small class="opacity-6">
                                            11:01 AM
                                        </small>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="chat-box-wrapper chat-box-wrapper-right">
                                        <div>
                                            <div class="chat-box">Denouncing pleasure and praising pain was born and I will give you a complete account.</div>
                                            <small class="opacity-6">
                                                11:01 AM
                                            </small>
                                        </div>
                                        <div>
                                            <div class="avatar-icon-wrapper ml-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="chat-box-wrapper chat-box-wrapper-right">
                                        <div>
                                            <div class="chat-box">The master-builder of human happiness.</div>
                                            <small class="opacity-6">
                                                11:01 AM
                                            </small>
                                        </div>
                                        <div>
                                            <div class="avatar-icon-wrapper ml-1">
                                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                                <div class="avatar-icon avatar-icon-lg rounded">
                                                    <img src="<?php echo base_url() ?>assets/images/avatars/3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input placeholder="Ketik Pesan..." type="text" class="form-control-lg form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu <?php echo "string" . $this->session->flashdata('msg'); ?></li>

                            <?php if ($menu == "beranda") { ?><li class="mm-active"><?php } else { ?>
                                <li><?php } ?>
                                <a href="<?php echo base_url('beranda'); ?>">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Beranda
                                </a>
                                </li>

                                <?php if ($menu == "data_guru") { ?><li class="mm-active"><?php } else { ?>
                                    <li><?php } ?>
                                    <a href="<?php echo base_url('data_guru'); ?>">
                                        <i class="metismenu-icon pe-7s-science"></i>Data Guru
                                    </a>
                                    </li>

                                    <?php if ($menu == "data_alumni") { ?><li class="mm-active"><?php } else { ?>
                                        <li><?php } ?>
                                        <a href="<?php echo base_url('data_alumni'); ?>">
                                            <i class="metismenu-icon pe-7s-users"></i>Data Alumni
                                        </a>
                                        </li>

                                        <?php if ($menu == "prestasi") { ?><li class="mm-active"><?php } else { ?>
                                            <li><?php } ?>
                                            <a href="<?php echo base_url('prestasi'); ?>">
                                                <i class="metismenu-icon pe-7s-medal"></i>Prestasi
                                            </a>
                                            </li>

                                            <?php if ($menu == "pesan") { ?><li class="mm-active"><?php } else { ?>
                                                <li><?php } ?>
                                                <a href="<?php echo base_url('pesan'); ?>">
                                                    <i class="metismenu-icon pe-7s-chat"></i>Pesan
                                                </a>
                                                </li>

                                                <?php if ($menu == "event_sekolah") { ?><li class="mm-active"><?php } else { ?>
                                                    <li><?php } ?>
                                                    <a href="<?php echo base_url('event_sekolah'); ?>">
                                                        <i class="metismenu-icon pe-7s-world"></i>Event
                                                    </a>
                                                    </li>

                                                    <?php if ($menu == "produk") { ?><li class="mm-active"><?php } else { ?>
                                                        <li><?php } ?>
                                                        <a href="<?php echo base_url('produk'); ?>">
                                                            <i class="metismenu-icon pe-7s-diamond"></i>Produk
                                                        </a>
                                                        </li>

                                                        <?php if ($menu == "ppdb") { ?><li class="mm-active"><?php } else { ?>
                                                            <li><?php } ?>
                                                            <a href="<?php echo base_url('ppdb'); ?>">
                                                                <i class="metismenu-icon pe-7s-id"></i>PPDB
                                                            </a>
                                                            </li>

                                                            <?php if ($menu == "media") { ?><li class="mm-active"><?php } else { ?>
                                                                <li><?php } ?>
                                                                <a href="<?php echo base_url('media'); ?>">
                                                                    <i class="metismenu-icon pe-7s-folder"></i>Media
                                                                </a>
                                                                </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <?php $this->load->view($namamodule . '/' . $namafileview); ?>
            </div>
        </div>
    </div>
    <div class="app-drawer-wrapper">
        <div class="drawer-nav-btn">
            <button type="button" class="hamburger hamburger--elastic is-active">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <div class="drawer-content-wrapper">
            <div class="scrollbar-container">
                <h3 class="drawer-heading">Pengaturan</h3>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading"> <?php echo "string" . $this->session->flashdata('msg'); ?></li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Pengaturan
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <?php if ($menu == "sekolah") { ?><li class="mm-active"><?php } else { ?>
                                        <li><?php } ?>
                                        <a href="<?php echo base_url('sekolah'); ?>">
                                            <i class="metismenu-icon"></i>Sekolah
                                        </a>
                                        </li>
                                        <?php if ($menu == "log") { ?><li class="mm-active"><?php } else { ?>
                                            <li><?php } ?>
                                            <a href="<?php echo base_url('log'); ?>">
                                                <i class="metismenu-icon"></i>Log Aktifitas
                                            </a>
                                            </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>Bantuan & Dukungan
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <?php if ($menu == "sekolah") { ?><li class="mm-active"><?php } else { ?>
                                        <li><?php } ?>
                                        <a href="<?php echo base_url('sekolah'); ?>">
                                            <i class="metismenu-icon"></i>Pusat Bantuan
                                        </a>
                                        </li>
                                        <?php if ($menu == "log") { ?><li class="mm-active"><?php } else { ?>
                                            <li><?php } ?>
                                            <a href="<?php echo base_url('log'); ?>">
                                                <i class="metismenu-icon"></i>Kotak Masuk Dukungan
                                            </a>
                                            </li>
                                            <?php if ($menu == "log") { ?><li class="mm-active"><?php } else { ?>
                                                <li><?php } ?>
                                                <a href="<?php echo base_url('log'); ?>">
                                                    <i class="metismenu-icon"></i>Laporkan Masalah
                                                </a>
                                                </li>
                                </ul>
                            </li>
                            </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-drawer-overlay d-none animated fadeIn"></div>

    <script type="text/javascript" src="<?php echo base_url('assets/') ?>scripts/main.js"></script>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url('assets/') ?>scripts/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/') ?>scripts/popper.min.js"></script>



<!-- data table -->
<script src="<?php echo base_url('assets/') ?>scripts/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/') ?>scripts/dataTables.bootstrap4.min.js" type="text/javascript"></script>



<script>
    $(document).ready(function() {
        $('#myTable').DataTable({

            "lengthMenu": true,
            "bLengthChange": true,
            "scrollX": true,
            "responsive": true,
            lengthMenu: [10, 20, 50, 100, 200, 500],

        });
    });
</script>


<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ditolak?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <h5 h5 class="card-title">Keterangan Ditolak</h5>
                            <textarea rows="1" class="form-control autosize-input" style="height: 100px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


</html>



<script>
    $(document).ready(function() {


        load_data();

        load_datatanah();

        function load_data(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>inventory_peralatan/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });


        function load_datatanah(query) {
            $.ajax({
                url: "<?php echo base_url(); ?>inventory_peralatan/fetch",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            })
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_datatanah(search);
            } else {
                load_datatanah();
            }
        });


    });
</script>