<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSIA Ananda - Tentang Kami</title>
    <?php $this->load->view("view_style"); ?>

</head>
<body>
<!-- Header Starts -->
<header class="main-header">
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Top Bar Starts -->
        <div class="top-bar hidden-sm hidden-xs">
            <?php $this->load->view("view_topbar"); ?>
        </div>
        <!-- Top Bar Ends -->
        <!-- Navbar Starts -->
        <nav id="nav" class="navbar navbar-default" role="navigation">
            <?php $this->load->view("view_navbar"); ?>
        </nav>
        <!-- Navbar Ends -->
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Ends -->
<!-- Main Banner Starts -->
<div class="main-banner one">
    <div class="container">
        <h2><span>Tentang Kami</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li class="active">Tentang Kami</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container">
    <!-- About Intro Text Starts -->
    <section class="about">
        <div class="row">
            <div class="col-md-6 col-xs-12 about-col">
                <h3 class="main-heading1">Selamat Datang Di RSIA Ananda</h3>
                <h3 class="main-heading2">
                    Best Medical &amp; Healthcare Needs to Our Patients
                </h3>
                <p class="text-justify">
                    Rumah Sakit Ibu dan Anak Ananda berstatus Swasta, yang didirikan oleh
                    Yayasan Ananda berdasarkan akta notaris Nomor 01 oleh Notaris Abdul Muis, SH, MKn
                    dan telah disahkan oleh Menteri Hukum dan HAM Republik Indonesia dengan SK No. AHU-10187.50.10.2014
                    Tentang Pengesahan Perndirian Yayasan Ananda Idy Bersaudara.
                </p>
                <p class="text-justify">
                    Rumah Sakit Ibu dan Anak Ananda telah beroperasi sejak 28 oktober 1995 dengan niat dan
                    updaya untuk dapat membantu masyarakat yang membuhtukan pelayanan kesehatan, dalam hal ini memberikan
                    pelayanan asuhan kebidanan, asuhan keperawatan dan layanan kesehatan lainnya sebagaimana layaknya
                    yaitu melaksanakan fungsi RUmah Sakit yang beroperasi 1 x 24 jam, selama 7 Hari
                    dalam Seminggu.
                </p>
                <p class="text-justify">
                    Rumah Sakit Ibu dan Anak Ananda berlokasi did poros jalan raya yang strategis dan mudah
                    dijangkau, di Jl. Landak Baru No. 63 Makassar. Loaksi Rumah Sakit berada dan dikelilingi oleh
                    Sarana Penunjang, Toko kebutuhan bayi dan anak, Restoran dan Rumah Makan yang memenuhi syarat
                    kesehatan.
                </p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <p class="visible-xs"><br></p>
                <!-- Tabs Starts -->
                <div class="tabs-wrap-2">
                    <!-- Nav Tabs Starts -->
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" aria-controls="tab-1" data-toggle="tab">
                                Motto
                            </a>
                        </li>
                        <li>
                            <a href="#tab-2" aria-controls="tab-2" data-toggle="tab">
                                Visi
                            </a>
                        </li>
                        <li>
                            <a href="#tab-3" aria-controls="tab-3" data-toggle="tab">
                                Misi
                            </a>
                        </li>
                    </ul>
                    <!-- Nav Tabs Ends -->
                    <!-- Tab Content Starts -->
                    <div class="tab-content">
                        <!-- Tab #1 Starts -->
                        <div class="tab-pane fade in active" id="tab-1">
                            <img src="assets/images/image2.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
                            <br />
                            <p style="color:black;">
                                Motto kami "Melayani Dengan Tulus", dengan harapan agar ibu hamil
                                , anak yang mendapatkan perawatan bersama keluarga merasa nyaman seperti
                                berada dirumah sendiri, Insya Allah. Semoga hal itu benar-benar menjadi
                                kenyataan dan dapat membawa Rumah Sakit Ibu dan Anak Ananda menjadi dambaan
                                Masyarakat
                            </p>
                        </div>
                        <!-- Tab #1 Ends -->
                        <!-- Tab #2 Starts -->
                        <div class="tab-pane fade" id="tab-2">
                            <img src="assets/images/image3.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
                            <br />
                            <p style="color:black;">
                                Menjadikan Rumah Sakit Ibu dan Anak
                                terbaik di Kota Makassar dengan
                                mengutamakan mutu dalam pelayanan pada masyarakat
                            </p>
                        </div>
                        <!-- Tab #2 Ends -->
                        <!-- Tab #2 Starts -->
                        <div class="tab-pane fade" id="tab-3">
                            <img src="assets/images/image3.jpg" alt="Image" class="img-responsive img-center-sm img-center-xs">
                            <p>
                            <ul class="">
                                <li>Melayani dengan senyum</li>
                                <li>Simpatik dan hati yang tulus</li>
                                <li>Mengutamakan keselamatan pasien <i>(patient sefety)</i></li>
                                <li>Memberikan pelayanan yang bermutu dengan SDM Profesional</li>
                            </ul>
                            </p>
                        </div>
                        <!-- Tab #2 Ends -->
                    </div>
                    <!-- Tab Content Ends -->
                </div>
                <!-- Tabs Ends -->
            </div>
        </div>
    </section>
    <!-- About Intro Text Ends -->
</div>
<!-- Main Container Ends -->
<!-- About Featured Section Starts -->
<section class="about-featured parallax">
    <div class="container">
        <h2 class="lite"><span>Layanan</span> Rumah Sakit Kami</h2>
        <ul class="list-unstyled list row">
            <!-- List #2 Starts -->
            <li class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa fa-heartbeat"></i>
                <h4>Dokter, Bidan &amp; Perawat</h4>
                <p>

                 </p>
            </li>
            <!-- List #2 Ends -->
            <!-- List #3 Starts -->
            <li class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa fa-ambulance"></i>
                <h4>Layanan Darurat 24/7</h4>
                <p>

                 </p>
            </li>
            <!-- List #3 Ends -->
            <li class="clearfix visible-md"></li>
            <!-- List #5 Starts -->
            <li class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa fa-user-md"></i>
                <h4>Teknologi Terbaru</h4>
                <p>

                </p>
            </li>
            <!-- List #5 Ends -->
            <!-- List #6 Starts -->
            <li class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa fa-medkit"></i>
                <h4>Perawatan Kesehatan Profesional</h4>
                <p>

                 </p>
            </li>
            <!-- List #6 Ends -->
            <!-- List #7 Starts -->
            <li class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa fa-medkit"></i>
                <h4>Farmasi Kedokteran &amp; Laboratorium</h4>
                <p>

                </p>
            </li>
            <!-- List #7 Ends -->
        </ul>
        <p class="text-center"><a href="#" class="btn btn-transparent text-uppercase">Daftarkan Segera<i class="fa fa-chevron-right"></i></a></p>
    </div>
</section>
<!-- Footer Starts -->
<footer class="main-footer">
    <?php $this->load->view("view_footer") ?>
</footer>
<!-- Footer Ends -->
<!-- JS Files -->
<?php $this->load->view("view_js"); ?>
</body>
</html>