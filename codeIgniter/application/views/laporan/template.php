<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RSIA Ananda | Portal Web Profil</title>

    <link href="<?=base_url()?>assets/laporan/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/laporan/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/laporan/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/laporan/css/style.css" rel="stylesheet">
    <!-- FooTable -->
    <link href="<?=base_url()?>assets/laporan/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/laporan/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>assets/laporan/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>assets/laporan/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>assets/laporan/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Data picker -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- Sparkline -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?=base_url()?>assets/laporan/js/demo/sparkline-demo.js"></script>
    <!-- FooTable -->
    <script src="<?=base_url()?>assets/laporan/js/plugins/footable/footable.all.min.js"></script>
</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" src="<?=base_url()?>assets/laporan/img/ananda-logo-lg.png" style="width: 150px;" />
                             </span>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="<?=base_url()?>dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="<?=base_url()?>laporan/daerahoperasi"><i class="fa fa-file-text-o"></i> <span class="nav-label">Infeksi Daerah Operasi</span></a>
                </li>
                <li>
                    <a href="<?=base_url()?>laporan/salurankemih"><i class="fa fa-file-text-o"></i> <span class="nav-label">Infeksi Saluran Kemih</span></a>
                </li>
                <li>
                    <a href="<?=base_url()?>laporan/phlebitis"><i class="fa fa-file-text-o"></i> <span class="nav-label">Infeksi Phlebitis </span></a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <!--form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.3/search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div>
                    </form-->
                </div>
                <!--ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                    </li>
                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul-->
            </nav>
        </div>
        <div class="wrapper wrapper-content">
            <?php echo $html; ?>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> IT RSIA Ananda &copy; 2016
            </div>
        </div>
    </div>
</div>
</body>
</html>
