<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSIA Ananda - Pengumuman Lolos Berkas</title>
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
        <h2><span>Pengumuman Lolos Berkas</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="../index.html">Beranda</a></li>
            <li><a href="<?=base_url()?>fasilitaslayanan">Tips & Berita</a></li>
            <li class="active">Pengumuman Lolos Berkas</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Nested Row Starts -->
    <div class="row">
        <!-- Mainarea Starts -->
        <div class="col-md-9 col-xs-12">
            <!-- News Post Single Starts -->
            <div class="news-post-single">
                <!-- News Post Starts -->
                <article class="news-post">
                    <img src="<?=base_url()?>images/tipsberita/pengumuman.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
                    <div class="inner">
                        <h4>Pengumuman Lolos Berkas Penerimaan Karyawan</h4>
                        <ul class="list-unstyled list-inline post-meta">
                            <li>
                                <i class="fa fa-calendar"></i>
                                Posted on Juni 30, 2016
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                By <a href="#">Admin</a>
                            </li>
                            <!--li>
                                <a href="#">
                                    <i class="fa fa-comments-o"></i> 10 Comments
                                </a>
                            </li-->
                            <li>
                                <i class="fa fa-tag"></i>
                                <a href="#">Pengumuman</a>,
                                <a href="#">Calon Karyawan</a>
                            </li>
                        </ul>
                        <div class="news-post-content">
                            <blockquote>
                            <p>*Diharapkan bagi yang lolos berkas untuk mengikuti <strong>TES TULIS</strong> dan <strong>WAWANCARA</strong> yang akan di laksanakan pada : </p>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-calendar-o"></i> Jum'at, 1 Juli 2016</li>
                                        <li><i class="fa fa-clock-o"></i> 10:00 WITA</li>
                                        <li><i class="fa fa-location-arrow"></i> Aula lantai 8 RSIA Ananda Makassar</li>
                                    </ul>
                                </div>
                            </div>
                            </blockquote>
                            <p class="text-center">Daftar Nama dan Nomor Telepon Lolos Berkas </p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor Telepon</th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td colspan="3" class="text-center"><strong>Perawat & Bidan</strong></td>
                                </tr>
                                <?php
                                $i=1;
                                foreach($perawatbidan as $row){
                                    ?>
                                    <tr>
                                        <td class="text-center" ><?php echo $i; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->nomor_tlp; ?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                <tr>
                                    <td colspan="3" class="text-center"><strong>Kasir</strong></td>
                                </tr>
                                <?php
                                $i=1;
                                foreach($kasir as $row){
                                    ?>
                                    <tr>
                                        <td class="text-center" ><?php echo $i; ?></td>
                                        <td><?php echo $row->nama; ?></td>
                                        <td><?php echo $row->nomor_tlp; ?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
                <!-- News Post Ends -->
            </div>
            <!-- News Post Single Ends -->
        </div>
        <!-- Mainarea Ends -->
        <!-- Sidearea Starts -->
        <div class="col-md-3 col-xs-12">
            <!-- Categories Starts -->
            <h4 class="side-heading1 top">Categories</h4>
            <ul class="list-unstyled list-style-1">
                <li><a href="#">Primary Health Care</a></li>
                <li><a href="#">Diagnosis With Precise</a></li>
                <li><a href="#">Major Surgery</a></li>
                <li><a href="#">Outpatient Rehabilitation</a></li>
                <li><a href="#">Cardiac Clinic</a></li>
                <li><a href="#">Ophthalmology</a></li>
                <li><a href="#">24x7 Ambulance </a></li>
            </ul>
            <!-- Categories Ends -->
            <!-- Tags Starts -->
            <h4 class="side-heading1">Tags</h4>
            <ul class="list-unstyled list-inline list-tags">
                <li><a href="#">General</a></li>
                <li><a href="#">Primary Health</a></li>
                <li><a href="#">Outpatient Surgery</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Friendly Staff</a></li>
                <li><a href="#">Pediatric Clinic</a></li>
                <li><a href="#">Body</a></li>
            </ul>
            <!-- Tags Ends -->
        </div>
        <!-- Sidearea Ends -->
    </div>
    <!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Starts -->
<footer class="main-footer">
    <?php $this->load->view("view_footer") ?>
</footer>
<!-- Footer Ends -->
<!-- JS Files -->
<?php $this->load->view("view_js"); ?>
</body>
</html>