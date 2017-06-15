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

    <title>RSIA Ananda - Dokter Kami</title>
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
<div class="main-banner six">
    <div class="container">
        <h2><span>Dokter</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li class="active">Dokter Kami</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Doctors Desigination Filters Starts -->
    <ul id="doctors-filter" class="list-unstyled list-inline">
        <li><a href="#" class="active" data-group="all">Semua Unit</a></li>
        <li><a href="#" class="active" data-group="Obstetri & Ginekologi">Dokter Obgyn</a></li>
        <li><a href="#" class="active" data-group="Anak">Dokter Anak</a></li>
        <li><a href="#" class="active" data-group="Saraf atau Neurolog">Dokter Saraf atau Neurolog</a></li>
        <li><a href="#" class="active" data-group="Penyakit Dalam">Dokter Penyakit Dalam</a></li>
        <li><a href="#" class="active" data-group="Umum">Dokter Umum</a></li>
    </ul>
    <!-- Doctors Desigination Filters Ends -->
    <!-- Doctors Bio List Starts -->
    <ul id="doctors-grid" class="row grid">
    <?php foreach($dokter_kami as $row){?>
        <!-- Doctor Bio #1 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "<?php echo $row->spesialis; ?>"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="assets/images/doctors/<?php echo $row->foto; ?>" alt="Doctor" class="img-responsive img-center-sm img-center-xs" style="width: 100%;">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="<?=base_url()?>dokterkami/profildokter/<?php echo $row->nama; ?>"><i class="fa fa-list"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4><?php echo $row->gelar_depan; ?>. <?php echo $row->nama; ?></h4>
                    <p class="designation"><?php echo $row->spesialis; ?></p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                    </p>
                </div>
                <a href="<?=base_url()?>dokterkami/profildokter/<?php echo $row->nama; ?>" class="btn btn-secondary text-uppercase">Profil Dokter</a>
            </div>
        </li>
        <!-- Doctor Bio #1 Ends -->
    <?php
    }
    ?>
    </ul>
    <!-- Doctors List Ends -->
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

<!-- Mirrored from www.sainathchillapuram.com/BS/mediplus/V1/demos/hospital/html-fullwidth/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 May 2016 23:53:45 GMT -->
</html>