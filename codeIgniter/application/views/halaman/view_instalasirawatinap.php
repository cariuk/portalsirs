<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RSIA Ananda - Undercontraction</title>
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
        <h2><span>Instalasi Rawat Inap</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="../index.html">Beranda</a></li>
            <li><a href="<?=base_url()?>fasilitaslayanan">Fasilitas & Layanan</a></li>
            <li class="active">Instalasi Rawat Inap</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <?php include("rawatinap/listkamarrawatinap.php"); ?>
        </div>
    </div>
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