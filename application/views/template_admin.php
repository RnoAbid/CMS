<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="<?= base_url("assets/chameleon-admin-master/") ?>ThemeSelect">
    <title><?= $judul_halaman ?></title>
    <link rel="apple-touch-icon" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/css/pages/dashboard-ecommerce.css">
    <script src="https://cdn.tiny.cloud/1/3y9p2g68tg9hca4dpomd6auk2ep3hfgs8qz9159p1oiyh68l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>

                        </li>
                    </ul>

                    <ul class="nav navbar-nav float-right">
                        <li class="mt-2 "><?= $judul_halaman ?></li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?= $this->session->userdata('nama'); ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= site_url('auth/logout'); ?>"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?= base_url(); ?>"><img class="brand-logo" alt="Chameleon admin logo" src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/images/logo/logo.png" />
                        <h3 class="brand-text">CMS Admin</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <?php $menu = $this->uri->segment(2); ?>
                <li class="nav-item  <?php if ($menu == 'home') {
                                            echo "active";
                                        } ?>"><a href="<?= site_url('admin/home') ?>"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <?php if ($this->session->userdata('level') == 'Admin') { ?>
                    <li class="nav-item  <?php if ($menu == 'caraousel') {
                                                echo "active";
                                            } ?>"><a href="<?= site_url('admin/caraousel') ?>"><i class="la la-code-fork"></i><span class="menu-title" data-i18n="">Caraousel</span></a>
                    <?php } ?>
                    </li>
                    <?php if ($this->session->userdata('level') == 'Admin') { ?>
                        <li class="nav-item  <?php if ($menu == 'kategori') {
                                                    echo "active";
                                                } ?>"><a href="<?= site_url('admin/kategori') ?>"><i class="la la-clone"></i><span class="menu-title" data-i18n="">Kategori Konten</span></a>
                        <?php } ?>
                        </li>
                        <li class="nav-item  <?php if ($menu == 'konten') {
                                                    echo "active";
                                                } ?>"><a href="<?= site_url('admin/konten') ?>"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Konten</span></a>

                        </li>
                        <?php if ($this->session->userdata('level') == 'Admin') { ?>
                            <li class=" nav-item  <?php if ($menu == 'user') {
                                                        echo "active";
                                                    } ?>"><a href="<?= site_url('admin/user') ?>"><i class="la la-group"></i><span class="menu-title" data-i18n="">User</span></a>
                            </li>
                        <?php } ?>
                        <?php if ($this->session->userdata('level') == 'Admin') { ?>

                            <li class=" nav-item  <?php if ($menu == 'konfigurasi') {
                                                        echo "active";
                                                    } ?>"><a href="<?= site_url('admin/konfigurasi') ?>"><i class="la la-tasks"></i><span class="menu-title" data-i18n="">Konfigurasi</span></a>
                            </li>
                        <?php } ?>

                        <li class="nav-item  <?php if ($menu == 'saran') {
                                                    echo "active";
                                                } ?>"><a href="<?= site_url('admin/saran') ?>"><i class="la la-commenting"></i><span class="menu-title" data-i18n="">Saran</span></a>
                        </li>
                        <li class="nav-item  <?php if ($menu == 'galeri') {
                                                    echo "active";
                                                } ?>"><a href="<?= site_url('admin/galeri') ?>"><i class="la la-photo"></i><span class="menu-title" data-i18n="">Galeri</span></a>
                        </li>
                        <li class="nav-item  <?php if ($menu == 'recent_log') {
                                                    echo "active";
                                                } ?>"><a href="<?= site_url('admin/recent_log') ?>"><i class="la la-info"></i><span class="menu-title" data-i18n="">Aktivitas Pengguna</span></a>
                        </li>

            </ul>
            <div class="navigation-background"></div>
        </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content">
        <div class="content-header-left col-md-4 col-12 mt-2">
            <?= $contents; ?>
        </div>

        <!-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
          <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018  © Copyright <a class="text-bold-800 grey darken-2" href="" target="_blank">PonBid</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
              <li class="list-inline-item"><a class="my-1" href="" target="_blank"> More themes</a></li>
              <li class="list-inline-item"><a class="my-1" href="" target="_blank"> Support</a></li>
              <li class="list-inline-item"><a class="my-1" href="" target="_blank"> Purchase</a></li>
            </ul>
          </div>
        </footer> -->

        <!-- BEGIN VENDOR JS-->
        <script src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN CHAMELEON  JS-->
        <script src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
        <script src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/js/core/app-lite.js" type="text/javascript"></script>
        <!-- END CHAMELEON  JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="<?= base_url("assets/chameleon-admin-master/") ?>theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
        <script>
            $('#ngilang').delay('slow').slideDown('slow').delay(2000).slideUp(600);
            let table = new DataTable('#myTable');
        </script>
        <script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
        <script>
            tinymce.init({
                selector: 'textarea',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        </script>
</body>

</html>