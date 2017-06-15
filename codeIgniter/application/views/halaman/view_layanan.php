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
        <h2><span>Fasilitas & Layanan Kami</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li class="active">Fasilitas & Layanan</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Services Tab Starts -->
    <div class="tabs-wrap">
        <!-- Nav Tabs Starts -->
        <ul class="nav nav-tabs">
        <?php foreach($kategori as $row){ ?>
            <li>
                <a href="#tab-1" aria-controls="tab-1" data-toggle="tab">
                    <div class="icon hidden-sm hidden-xs">
                        <img src="images/icons/<?php echo $row->nama; ?>.png" alt="Pulmonary">
                    </div>
                    <h5><?php echo $row->nama; ?></h5>
                </a>
            </li>
            <?php
        }
        ?>
        </ul>
        <!-- Nav Tabs Ends -->
        <!-- Tab Content Starts -->
        <div class="tab-content">
            <!-- Tab #1 Starts -->
            <div class="tab-pane fade in active" id="tab-1">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img4.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img6.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>First Aid</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #1 Ends -->
            <!-- Tab #2 Starts -->
            <div class="tab-pane fade" id="tab-2">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img6.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img4.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img4.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Dental Care</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #2 Ends -->
            <!-- Tab #3 Starts -->
            <div class="tab-pane fade" id="tab-3">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img6.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>24x7 Ambulance</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #3 Ends -->
            <!-- Tab #4 Starts -->
            <div class="tab-pane fade" id="tab-4">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img4.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img6.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Qualified Doctors</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #4 Ends -->
            <!-- Tab #5 Starts -->
            <div class="tab-pane fade" id="tab-5">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Medical Pharmacy</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #5 Ends -->
            <!-- Tab #6 Starts -->
            <div class="tab-pane fade" id="tab-6">
                <div class="row">
                    <!-- Box #1 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img6.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #1 Ends -->
                    <!-- Box #2 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img5.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #2 Ends -->
                    <!-- Box #3 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img4.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #3 Ends -->
                    <!-- Box #4 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img3.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #4 Ends -->
                    <!-- Box #5 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #5 Ends -->
                    <!-- Box #6 Starts -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="box1 text-center-xs">
                            <img src="images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                            <div class="inner">
                                <h4>Pulmonary</h4>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. When an unknown printer took a galley of type and scrambled.
                                </p>
                                <a href="#" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Box #6 Ends -->
                </div>
            </div>
            <!-- Tab #6 Ends -->
        </div>
        <!-- Tab Content Ends -->
    </div>
    <!-- Services Tab Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Top Bar Starts -->
<section class="footer-top-bar">
    <div class="container clearfix text-center-sm text-center-xs">
        <h3 class="pull-left">Get in touch to join our community</h3>
        <a href="contact.html" class="btn btn-black text-uppercase pull-right">Contact Our Office</a>
    </div>
</section>
<!-- Footer Top Bar Ends -->
<!-- Footer Starts -->
<footer class="main-footer">
    <?php $this->load->view("view_footer") ?>
</footer>
<!-- Footer Ends -->
<!-- JS Files -->
<?php $this->load->view("view_js"); ?>
</body>
</html>