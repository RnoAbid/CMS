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
                    <form action="<?= site_url('home') ?>" method="post">
                        <div class="position-relative has-icon-right full-width m-4">
                            <div class="row">
                                <div class="col-10 p-0 m-0">
                                    <input class="form-control " name="keyword" id="search" type="text" placeholder="Search here..."></input>

                                </div>
                                <div class="col-2 p-0 m-0">
                                    <input class="btn btn-primary navbar-search-close" type="submit" name="submit" value="search"><i class="la la-search"></i></input>
                                </div>
                            </div>

                        </div>
                    </form>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- ======= Header ======= -->

    <!-- End Header -->



    <!-- ======= Hero Section ======= -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $no = 1;
            foreach ($caraousel as $aa) { ?>
                <div class="carousel-item <?php if ($no == 1) {
                                                echo 'active';
                                            } ?>">
                    <img src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" class="d-block w-100">
                </div>
            <?php $no++;
            } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- ======= About Us Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2>Welcome</h2>
                <h1 class="mb-4">Content</h1>
            </div>

            <div class="row">
                <?php foreach ($results as $uu) { ?>
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start aos-init aos-animate mb-3" data-aos="zoom-in" data-aos-delay="400">
                            <div><img src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" class="img-fluid"></div>
                            <div class="member-info">
                                <h4><?= $uu['judul'] ?></h4>
                                <span></i> <?= $uu['nama'] ?></span>
                                <span></i> <?= $uu['nama_kategori'] ?></span>
                                <a href="<?= site_url('home/artikel/' . $uu['slug']) ?>" class="btn btn-primary px-4 mx-auto my-2">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


        </div>


        <?= $this->pagination->create_links(); ?>



    </section><!-- End About Us Section -->



    <!-- ======= Footer ======= -->
    <footer id="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
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
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>">Home</a></li>
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