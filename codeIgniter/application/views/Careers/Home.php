<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rumah Sakit Ibu dan Anak Ananda Bergerak Dibidang Kesehatan Khususnya Ibu dan Anak Kami Mencari Orang-orang Berbakat di Bidang Kesehatan dan Teknologi Untuk Bergabung dan Berkembang Bersama Kami">
    <meta name="author" content="Akash Bhadange">
    <title>Careers RSIA Ananda</title>
    <link rel="icon" type="<?=base_url()?>image/png" href="<?=base_url()?>assets/images/fevicon.png">

    <!-- Bootstrap -->
    <link href="assets/careers/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/careers/css/style.css?_<?=date('Ymdhis')?>" rel="stylesheet">
    <link href="assets/careers/css/themify-icons.css" rel="stylesheet">
    <link href='assets/careers/css/dosis-font.css' rel='stylesheet' type='text/css'>
    <link href='assets/careers/css/sweetalert.css' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/careers/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/careers/js/bootstrap.min.js"></script>
    <script src="assets/careers/js/jquery.easing.min.js"></script>
    <script src="assets/careers/js/scrolling-nav.js"></script>
    <script src="assets/careers/js/validation/validate.min.js"></script>
    <script src="assets/careers/js/sweetalert.min.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".side-menu">
<nav class="side-menu">
    <ul>
        <li class="hidden active">
            <a class="page-scroll" href="#page-top"></a>
        </li>
        <li>
            <a href="#home" class="page-scroll">
                <span class="menu-title">Home</span>
                <span class="dot"></span>
            </a>
        </li>
        <li>
            <a href="#speakers" class="page-scroll">
                <span class="menu-title">Lowongan</span>
                <span class="dot"></span>
            </a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <!-- Start: Header -->
    <div class="row hero-header" id="home">
        <div class="col-md-7">
            <img src="<?=base_url()?>assets/careers/images/ananda-logos-lg.png" class="img-responsive">
            <h1>AVAILABLE JOBS</h1>
            <h3><strong>Rumah Sakit Ibu dan Anak Ananda</strong> Bergerak Dibidang Kesehatan Khususnya Ibu dan Anak</h3>
            <h3>Kami Mencari Orang-orang Berbakat di Bidang Kesehatan dan Teknologi</h3>
            <h3>Untuk Bergabung dan Berkembang Bersama Kami</h3>
        </div>
        <div class="col-md-5">
            <div  class="col-md-12 hidden-xs">
                <img src="<?=base_url()?>assets/careers/images/administrasi-dan-hrd.png" class="rocket animated bounce">
                <br />
            </div>
            <div class="col-lg-12">
                <h3>Silahkan Cari Data Lamaran Lalu Upload Berkas Anda Dibawah ini</h3>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <input id="pencarian" type="text" class="form-control input-lg" placeholder="Cari Data Lamaranku...">
                    Input Nomor Tlp Anda Ex: 08123xxxxxxxxx
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button id="getpelamar" class="btn btn-lg btn-danger">Cari</button>
                </div>
            </div>
        </div>
        <br />
    </div>
    <!-- End: Header -->
</div>
<?php
if (count($lowongan)!=0){
    ?>
    <div class="container">
        <div class="row me-row content-ct speaker" id="speakers">
            <h2 class="row-title">Lowongan Yang Di Buka</h2>
            <?php
            foreach ($lowongan as $row){
                ?>
                <div class="col-lg-6 col-lg-offset-3 feature">
                    <h3><?=$row->nama?></h3>
                    <?=$row->deskripsi?>
                    <p>
                        <a id="<?=$row->id?>" href="#" class="btn btn-lg btn-red lamar_kerja">Lamar Sekarang
                            <span class="ti-arrow-right" style="font-size: 1em;"></span>
                        </a>
                    </p>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- End: Speakers -->
    </div>
    <?php
}else{
    ?>
    <div class="container">
        <div class="row me-row content-ct speaker" id="speakers">
            <h2 class="row-title">Lamaran Telah Ditutup</h2>
        </div>
        <!-- End: Speakers -->
    </div>
    <?php
}
?>
<!-- Start: Footer -->
<div class="container-fluid footer">
    <div class="row footer-credit">
        <div class="col-md-6 col-sm-6">
            <p>&copy; 2017, <a href="<?=base_url()?>">anandahospital.co.id</a> | All rights reserved.</p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="footer-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Condition</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End: Footer -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-29231762-2', 'auto');
    ga('send', 'pageview');

    $(document).ready(function(){
        $(".lamar_kerja").click(function () {
            var idlowongan = $(this).attr('id');
            $.ajax({
                url: "<?=base_url('careers/formlowongan')?>",
                type: "POST",
                data:{"id_lowongan":idlowongan},
                dataType: "json",
                success: function (data) {
                    $("#myModal .modal-title").html(data.title);
                    $("#myModal .modal-body").html(data.html);
                    $("#myModal").modal("show");
                },
                beforeSend: function () {},
                complete: function () {},
                error: function (xhr, thrownError, err) {}
            });
            return false;
        });

        $("#getpelamar").click(function(){
            var pencarian = $("#pencarian").val();
            $.ajax({
                url: "<?=base_url('careers/caripelamar')?>",
                type: "POST",
                data:{"cari":pencarian},
                dataType: "json",
                success: function (data) {
                    $("#myModal .modal-title").html(data.title);
                    $("#myModal .modal-body").html(data.html);
                    $("#myModal").modal("show");
                },
                beforeSend: function () {},
                complete: function () {},
                error: function (xhr, thrownError, err) {}
            });
            return false;
        });
    });
</script>
</body>
</html>