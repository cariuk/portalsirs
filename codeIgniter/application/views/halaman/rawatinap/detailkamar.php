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

    <title>RSIA Ananda - Detail Junior Suite Room</title>
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
        <h2><span>Instalasi Rawat Inap</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="<?=base_url()?>">Beranda</a></li>
            <li><a href="<?=base_url()?>fasilitaslayanan">Fasilitas & Layanan</a></li>
            <li><a href="<?=base_url()?>fasilitaslayanan/instalasirawatinap">Instalasi Rawat Inap</a></li>
			<li class="active"><?php echo $detail[0]->kategori; ?></li>
        </ul>
    </div>
</div>
<!-- Main Banner Starts -->
<div class="main-banner <?php echo $class; ?>">
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Doctor Profile Starts -->
        <div class="col-sm-12 col-xs-12">
            <div class="profile-details">
                <h4><b>Fasilitas <?php echo $detail[0]->kategori; ?></b></h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" bgcolor="#BBBCBE">Fasilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($detail as $row){
                            ?>
                        <tr>
                            <td>-<?php echo $row->fasilitas; ?></td>
                        </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Doctor Profile Ends -->
    <!-- Spacer Block Starts -->
    <div class="spacer-block"></div>
    <!-- Spacer Block Ends -->
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