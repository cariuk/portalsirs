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

    <title>RSIA Ananda - Profil Dokter</title>
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
        <h2><span>Profil Dokter</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li><a href="<?=base_url()?>dokterkami">Dokter Kami</a></li>
            <li class="active">Profil Dokter</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <?php foreach($profildokter as $row){ ?>
    <!-- Doctor Profile Starts -->
    <div class="row">
        <div class="col-sm-5 col-xs-12">
            <div class="profile-block">
                <div class="panel panel-profile">
                    <div class="panel-heading">
                        <img src="<?=base_url()?>assets/images/doctors/<?php echo $row->foto; ?>" alt="Doctor Profile Image" class="img-responsive img-center-xs" style="width: 100%">
                        <h3 class="panel-title"><?php echo $row->gelar_depan; ?>. <?php echo $row->nama; ?></h3>
                        <p class="caption">Gynecology, Health Care &amp; Obstetrics</p>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li class="row">
                                <span class="col-sm-4 col-xs-12"><strong>Spesialis</strong></span>
                                <span class="col-sm-8 col-xs-12"><?php echo $row->spesialis; ?></span>
                            </li>
                            <li class="row">
                                <span class="col-sm-4 col-xs-12"><strong>Pendidikan</strong></span>
                                <span class="col-sm-8 col-xs-12"><?php echo $row->gelar_belakang; ?></span>
                            </li>
                            <li class="row">
                                <span class="col-sm-4 col-xs-12"><strong>Hari Kerja</strong></span>
                                <span class="col-sm-8 col-xs-12">Monday, Wednesday, Thursday</span>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer text-center-md text-center-sm text-center-xs">
                        <div class="row">
                            <!--div class="col-lg-6 col-xs-12">
                                <ul class="list-unstyled list-inline sm-links">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div-->
                            <div class="col-lg-12 col-xs-12 text-center">
                                <a href="#" class="btn btn-secondary text-uppercase">Book An Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-xs-12">
            <div class="profile-details">
                <h3 class="main-heading2"><?php echo $row->gelar_depan; ?>. <?php echo $row->nama; ?>, <?php echo $row->gelar_belakang; ?></h3>
                <h4>Jadwal Praktek Dokter</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Waktu / Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jum'at</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Minggu</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Doctor Profile Ends -->
    <!-- Spacer Block Starts -->
    <div class="spacer-block"></div>
    <!-- Spacer Block Ends -->
    <?php
    }
    ?>
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