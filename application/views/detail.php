<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/arsha/'); ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/arsha/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/arsha/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/arsha/'); ?>assets/css/style.css" rel="stylesheet">


    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html"><?= $konfig->judul_website; ?></a></h1> <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
           
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= site_url() ?>">Home</a></li>
                    <!-- <li><a class="nav-link scrollto active" href="#about">About</a></li> -->
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                    <li><a class="nav-link scrollto active" href="<?= site_url('home/galeri') ?>">Gallery</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->

                    </li>
                    <li class="dropdown"><a href="#"><span class="nav-link scrollto active">Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="">
                            <li><?php foreach ($kategori as $kate) { ?>
                                    <a class="dropdown-item" href="<?= site_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?>
                                    </a>
                                <?php } ?>
                            </li>

                        </ul>
                    </li>
                    <li><a class="nav-link scrollto active" href="<?= site_url('home/contact'); ?>">Contact</a></li>
                    <li><a class="getstarted scrollto active" href="<?= site_url('auth') ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->




    <section id="hero" class="d-flex align-items-center">

        <div class="container">


            <li><a href="<?= site_url() ?>">Home</a></li>

            <h2><?= $konten->judul; ?></h2>

        </div>
    </section>

    <div class="container mt-2">

        <div class="row gy-4">

            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>


            <div class="portfolio-img mt-5"><img style="width:100%; height:100%;" src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" class="img-fluid"></div>
            <div class="col mb-5">
                <div class="portfolio-info">
                    <h3>Informasi</h3>

                    <ul>
                        <li><strong>Kategori</strong>: <?= $konten->nama_kategori; ?></li>
                        <li><strong>User</strong>: <?= $konten->nama; ?></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Detail Informasi</h2>
                    <p>
                        <?= $konten->keterangan; ?>
                    </p>
                </div>
            </div>

        </div>

    </div>










    <!-- ======= Footer ======= -->
    <footer id="footer">

        < <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><?= $konfig->judul_website; ?></h3>
                        <p>

                            <strong>Alamat:</strong> <?= $konfig->alamat; ?><br><br>
                            <strong>Phone:</strong> <?= $konfig->no_wa; ?><br>
                            <strong>Email:</strong> <?= $konfig->email; ?><br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url() ?>">Home</a></li>
                            <?php foreach ($kategori as $aa) { ?>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= site_url('home/kategori/' . $aa['id_kategori']) ?>"><?= $aa['nama_kategori'] ?></a></li>
                            <?php } ?>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Recent Post</h4>
                        <?php foreach ($konten2 as $uu) { ?>
                            <div class="col-lg-6">
                                <div class="member d-flex align-items-start aos-init aos-animate mb-3" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="member-info">
                                        <h4><a href="<?= site_url('home/artikel/' . $uu['slug']) ?>"><?= $uu['judul'] ?> </a></h4>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p> <?= $konfig->profil_website; ?></p>
                        <div class="social-links mt-3">
                            <a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="<?= $konfig->instagram; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>

                        </div>
                    </div>
                </div>

            </div>
            </div>
            </div>

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>PonBid</span></strong>. All Rights Reserved
                </div>




            </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/arsha/'); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/arsha/'); ?>assets/js/main.js"></script>

</body>

</html>