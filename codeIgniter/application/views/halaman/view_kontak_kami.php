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

    <title>RSIA Ananda - Kontak Kami</title>
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
<div class="main-banner five">
    <div class="container">
        <h2><span>Kontak Kami</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="../index.html">Beranda</a></li>
            <li class="active">Kontak Kami</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Contact Info Section Starts -->
    <div class="contact-info-box">
        <div class="row">
            <div class="col-md-5 col-xs-12 hidden-sm hidden-xs">
                <div class="box-img">
                    <img src="assets/images/contact/contact-info-box-img1.png" alt="Image" />
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="info-box">
                    <h3>We'd love to hear from you</h3>
                    <h5>
                        Sampaikan pertanyaan, keluhan atau saran Anda mengenai produk dan layanan Kamir
                        melalui Customer Service. kami siap melayani selama 24 jam dalam 7 hari.
                    </h5>
                    <div class="row">
                        <h4 class="col-sm-6 col-xs-12">Tel: 0411-874596</h4>
                        <h4 class="col-sm-6 col-xs-12">Fax: 0411-874596</h4>
                    </div>
                    <h4>Email: <a href="mailto:info@anandahospital.com">care@anandahospital.com</a></h4>
                </div>
            </div>
            <div class="col-md-1 col-xs-12 hidden-sm hidden-xs"></div>
        </div>
    </div>
    <!-- Contact Info Section Ends -->
    <!-- Contact Content Starts -->
    <div class="contact-content">
        <div class="row">
            <!-- Contact Form Starts -->
            <div class="col-sm-8 col-xs-12">
                <h3>Get in touch by filling the form below</h3>
                <div class="status alert alert-success contact-status"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="http://www.sainathchillapuram.com/BS/mediplus/V1/demos/hospital/html-fullwidth/sendemail.php" role="form">
                    <div class="row">
                        <!-- Name Field Starts -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name </label>
                                <input type="text" class="form-control" name="name" id="name" required="required">
                            </div>
                        </div>
                        <!-- Name Field Ends -->
                        <!-- Email Field Starts -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email Address </label>
                                <input type="text" class="form-control" name="email" id="email" required="required">
                            </div>
                        </div>
                        <!-- Email Field Ends -->
                        <!-- Phone No Field Starts -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneno">Contact Number </label>
                                <input type="text" class="form-control" name="phoneno" id="phoneno" required="required">
                            </div>
                        </div>
                        <!-- Phone No Field Ends -->
                        <!-- Subject Field Starts -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subject">Subject </label>
                                <input type="text" class="form-control" name="subject" id="subject" required="required">
                            </div>
                        </div>
                        <!-- Subject Field Ends -->
                        <!-- Message Field Starts -->
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="message">Your Comments: </label>
                                <textarea class="form-control" rows="8" name="message" id="message" required="required"></textarea>
                            </div>
                        </div>
                        <!-- Message Field Ends -->
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-black text-uppercase" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
            <!-- Address Starts -->
            <div class="col-sm-4 col-xs-12">
                <!-- Box #1 Starts -->
                <div class="cblock-1">
                    <span class="icon-wrap"><i class="fa fa-car"></i></span>
                    <h4>Datang Dan Kunjungi</h4>
                    <ul class="list-unstyled">
                        <li>Jl. Landak Baru No.63, Makassar,</li>
                        <li>Sulawesi Selatan, Indonesia.</li>
                        <li>0411-874596</li>
                    </ul>
                </div>
                <!-- Box #1 Ends -->
                <!-- Box #2 Starts -->
                <div class="cblock-1">
                    <span class="icon-wrap red"><i class="fa fa-ambulance"></i></span>
                    <h4>Perawatan Darurat?</h4>
                    <ul class="list-unstyled">
                        <li>Jika Anda mengalami keadaan darurat,</li>
                        <li>Silahkan Hubungi Kami.</li>
                        <li>0411-874596</li>
                        <li>atau mengunjungi pusat darurat terdekat</li>
                    </ul>
                </div>
                <!-- Box #2 Ends -->
            </div>
            <!-- Address Ends -->
        </div>
    </div>
    <!-- Contact Content Ends -->
</div>
<!-- Main Container Ends -->
<!-- Google Map Starts -->
<div class="map"></div>
<!-- Google Map Ends -->
<!-- Footer Starts -->
<footer class="main-footer">
    <?php $this->load->view("view_footer") ?>
</footer>
<!-- Footer Ends -->
<!-- JS Files -->
<?php $this->load->view("view_js"); ?>

</body>
</html>