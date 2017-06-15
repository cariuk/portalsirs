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

	<title>RSIA Ananda</title>
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
<!-- Slider Section Starts -->
<section class="slider clearfix">
	<div id="camera_wrap_1" class="camera_wrap camera_white_skin">
		<?php $this->load->view("halaman/beranda/slider") ?>
	</div>
</section>
<!-- Slider Section Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
	<!-- Notification Boxes Starts -->
	<div class="notification-boxes row">
		<!-- Box #1 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="box">
				<i class="fa fa-user-md"></i>
				<h4>Dokter Berkualitas</h4>
				<p>
				</p>
				<a href="#" class="btn btn-transparent">Read More</a>
			</div>
		</div>
		<!-- Box #1 Ends -->
		<!-- Box #2 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="box">
				<i class="fa fa-stethoscope"></i>
				<h4>Pemeriksaan Rutin</h4>
				<p>
				</p>
				<a href="#" class="btn btn-transparent">Read More</a>
			</div>
		</div>
		<!-- Box #2 Ends -->
		<!-- Box #3 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="box">
				<i class="fa fa-flask"></i>
				<h4>Uji <br /> Laboratorium</h4>
				<p>
				</p>
				<a href="#" class="btn btn-transparent">Read More</a>
			</div>
		</div>
		<!-- Box #3 Ends -->
		<!-- Box #4 Starts -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="box">
				<i class="fa fa-comments-o"></i>
				<h4>Berita <br /> Poli Klinik</h4>
				<p>
				</p>
				<a href="#" class="btn btn-transparent">Read More</a>
			</div>
		</div>
		<!-- Box #4 Ends -->
	</div>
	<!-- Notification Boxes Ends -->
	<!-- Welcome Section Starts -->
	<section class="welcome-area">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<h2 class="main-heading1 lite">Kami Menawarkan Pelayanan Cepat &amp; Handal</h2>
				<h2 class="main-heading2">Medis &amp; Kebutuhan Kesehatan</h2>
				<p>
					Motto kami <i><strong>"Melayani Dengan Tulus"</strong></i> dengan harapan
					ibu hamil, anak mendapatkan perawatan bersama keluarganya merasa nyaman seperti
					berada dirumah sendiri, Insya Allah. Semoga hal itu benar-benar mendaji kenyataan
					dan dapat membawa Rumah Sakit Ibu dan Anak Ananda menjadi dambaan Masyarakat.
				</p>
			</div>
			<div class="col-md-6 col-xs-12">
				<img src="<?=base_url()?>assets/images/image1.jpg" alt="image" class="img-responsive img-style1" width="100%">
			</div>
		</div>
	</section>
	<!-- Welcome Section Ends -->
</div>
<!-- Main Container Ends -->
<!-- Meet Our Doctors Section Starts -->
<section class="featured-doctors">
	<!-- Nested Container Starts -->
	<?php $this->load->view("halaman/beranda/dokterkami");  ?>
	<!-- Nested Container Ends -->
</section>
<!-- Meet Our Doctors Section Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
	<!-- Medical Services Section Starts -->
	<section class="medical-services">
		<h2 class="main-heading1 lite">Terbaik Dari Kami</h2>
		<h2 class="main-heading2">Pelayanan Medis</h2>
		<!-- Medical Services List Starts -->
		<ul class="list-unstyled row text-center">
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/band-aid.png" alt="Band Aid">
				</div>
				<h5>Pertolongan Pertama</h5>
			</li>
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/fetus.png" alt="Fetus Care">
				</div>
				<h5>Persalinan <br /> Normal</h5>
			</li>
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/ambulance.png" alt="24x7 Ambulance">
				</div>
				<h5>24x7 <br /> Ambulance</h5>
			</li>
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/nurse.png" alt="Qualified Doctors">
				</div>
				<h5>Dokter <br /> Berkualitas</h5>
			</li>
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/rawat inap.png" alt="Medical Pharmacy">
				</div>
				<h5>Farmasi <br /> Kedokteran</h5>
			</li>
			<li class="col-md-2 col-sm-4 col-xs-12">
				<div class="icon">
					<img src="assets/images/icons/rawat jalan.png" alt="Pulmonary">
				</div>
				<h5>Perawatan <br />Bayi & Anak</h5>
			</li>
		</ul>
		<!-- Medical Services List Ends -->
	</section>
	<!-- Medical Services Section Ends -->
	<!-- Content Starts -->
	<div class="row">
		<!-- Latest News Section Starts -->
		<section class="col-md-8 col-xs-12">
			<div class="main-block1">
				<h2 class="main-heading1 lite">Terbaru</h2>
				<h2 class="main-heading2">Tips &amp; Berita</h2>
				<!-- Latest News Carousel Starts -->
				<div id="news-carousel" class="news-carousel carousel slide" data-ride="carousel">
					<!-- Wrapper for Slides Starts -->
					<div class="carousel-inner">
						<!-- Slide #1 Starts -->
						<div class="item active">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<!-- News Post Starts -->
									<div class="news-post-box">
										<img src="assets/images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
										<div class="inner">
											<h5>
												<a href="#">Latest News Post Heading</a>
											</h5>
											<ul class="list-unstyled list-inline post-meta">
												<li>
													<i class="fa fa-calendar"></i> Sept 25, 2015
												</li>
												<li><a href="#">
														<i class="fa fa-comments-o"></i> 10
													</a></li>
											</ul>
											<p>
												<!--Kontent-->
											</p>
											<a href="#" class="btn btn-secondary">
												<i class="fa fa-arrow-circle-right"></i>
												Read More
											</a>
										</div>
									</div>
									<!-- News Post Ends -->
								</div>
								<div class="col-sm-6 col-xs-12">
									<!-- News Post Starts -->
									<div class="news-post-box">
										<img src="assets/images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
										<div class="inner">
											<h5>
												<a href="#">Latest Tip Post Heading</a>
											</h5>
											<ul class="list-unstyled list-inline post-meta">
												<li>
													<i class="fa fa-calendar"></i> Sept 15, 2015
												</li>
												<li><a href="#">
														<i class="fa fa-comments-o"></i> 10
													</a></li>
											</ul>
											<p>
												<!--Kontent-->
											</p>
											<a href="#" class="btn btn-secondary">
												<i class="fa fa-arrow-circle-right"></i>
												Read More
											</a>
										</div>
									</div>
									<!-- News Post Ends -->
								</div>
							</div>
						</div>
						<!-- Slide #1 Ends -->
						<!-- Slide #2 Starts -->
						<div class="item">
							<div class="row">
								<div class="col-sm-6 col-xs-12">
									<!-- News Post Starts -->
									<div class="news-post-box">
										<img src="assets/images/news/news-thumb-img1.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
										<div class="inner">
											<h5>
												<a href="#">Latest News Post Heading</a>
											</h5>
											<ul class="list-unstyled list-inline post-meta">
												<li>
													<i class="fa fa-calendar"></i> Sept 25, 2015
												</li>
												<li><a href="#">
														<i class="fa fa-comments-o"></i> 10
													</a></li>
											</ul>
											<p>
												<!--Kontent-->
											</p>
											<a href="#" class="btn btn-secondary">
												<i class="fa fa-arrow-circle-right"></i>
												Read More
											</a>
										</div>
									</div>
									<!-- News Post Ends -->
								</div>
								<div class="col-sm-6 col-xs-12">
									<!-- News Post Starts -->
									<div class="news-post-box">
										<img src="assets/images/news/news-thumb-img2.jpg" alt="Blog Image" class="img-responsive img-center-sm img-center-xs">
										<div class="inner">
											<h5>
												<a href="#">Latest Tip Post Heading</a>
											</h5>
											<ul class="list-unstyled list-inline post-meta">
												<li>
													<i class="fa fa-calendar"></i> Sept 15, 2015
												</li>
												<li><a href="#">
														<i class="fa fa-comments-o"></i> 10
													</a></li>
											</ul>
											<p>
												<!--Kontent-->
											</p>
											<a href="#" class="btn btn-secondary">
												<i class="fa fa-arrow-circle-right"></i>
												Read More
											</a>
										</div>
									</div>
									<!-- News Post Ends -->
								</div>
							</div>
						</div>
						<!-- Slide #2 Ends -->
					</div>
					<!-- Wrapper for Slides Ends -->
					<!-- Controls Starts -->
					<a class="left carousel-control" href="#news-carousel" role="button" data-slide="prev">
						<span class="fa fa-angle-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#news-carousel" role="button" data-slide="next">
						<span class="fa fa-angle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<!-- Controls Ends -->
				</div>
				<!-- Latest News Carousel Ends -->
			</div>
		</section>
		<!-- Latest News Section Ends -->
		<!-- Medical Department aside Starts -->
		<aside class="col-md-4 col-xs-12">
			<div class="main-block1">
				<h2 class="main-heading1 lite">Unit</h2>
				<h2 class="main-heading2">Pelayanan 24 Jam</h2>
				<!-- Accordion Starts -->
				<div class="panel-group" id="accordion">
					<!-- Accordion #1 Starts -->
					<div class="panel">
						<!-- Panel Heading Starts -->
						<div class="panel-heading">
							<h5 class="panel-title">
								<i class="icon fa fa-hospital-o"></i>
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									Unit Gawat Darurat
								</a>
							</h5>
						</div>
						<!-- Panel Heading Ends -->
						<!-- Panel Body Starts -->
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<p>
									RSIA Ananda Makassar juga memiliki layanan UGD 24 jam dengan
									beberapa dokter umum yang melayaninya. UGD 24 jam melayani
									kasus-kasus khususnya gawat darurat.
								</p>
								<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
							</div>
						</div>
						<!-- Panel Body Ends -->
					</div>
					<!-- Accordion #1 Ends -->
					<!-- Accordion #2 Starts -->
					<div class="panel">
						<!-- Panel Heading Starts -->
						<div class="panel-heading">
							<h5 class="panel-title">
								<i class="icon fa fa-user-md"></i>
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									Laboratorium
								</a>
							</h5>
						</div>
						<!-- Panel Heading Ends -->
						<!-- Panel Body Starts -->
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<p>
									RSIA Ananda memiliki pelayanan pemeriksaan
									laboratorium guna untuk mempermudah
									pemeriksaan tingkat lanjut.
								</p>
								<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
							</div>
						</div>
						<!-- Panel Body Ends -->
					</div>
					<!-- Accordion #2 Ends -->
					<!-- Accordion #3 Starts -->
					<div class="panel">
						<!-- Panel Heading Starts -->
						<div class="panel-heading">
							<h5 class="panel-title">
								<i class="icon fa fa-medkit"></i>
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									Farmasi
								</a>
							</h5>
						</div>
						<!-- Panel Heading Ends -->
						<!-- Panel Body Starts -->
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<p>
									Apotek 24 jam RSIA Ananda untuk memudahkan pasien mendapatkan
									kebutuhan obat dan alat kesehatan yang diperlukan oleh pasien.
								</p>
								<a href="#" class="btn btn-sm btn-transparent inverse">Details</a>
							</div>
						</div>
						<!-- Panel Body Ends -->
					</div>
					<!-- Accordion #3 Ends -->
				</div>
				<!-- Accordion Ends -->
			</div>
		</aside>
		<!-- Medical Department aside Ends -->
	</div>
	<!-- Content Ends -->
	<!-- Book Appointment Box Starts -->
	<!--div class="book-appointment-box">
		<div class="row">
			<div class="col-md-5 col-xs-12 text-center-sm text-center-xs">
				<h4>Online Hassle Free Appointment Booking</h4>
				<h3><i class="fa fa-phone-square"></i> +1 874 801 8014</h3>
			</div>
			<div class="col-md-4 col-xs-12 text-center-sm text-center-xs">
				<a href="doctor-profile.html" class="btn btn-main text-uppercase">Book your Appointment</a>
			</div>
			<div class="col-md-3 col-xs-12 hidden-sm hidden-xs">
				<div class="box-img">
					<img src="images/appointment-booking-img1.png" alt="" />
				</div>
			</div>
		</div>
	</div>
	<!-- Book Appointment Box Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Starts -->
<footer class="main-footer">
	<?php $this->load->view("view_footer") ?>
</footer>
<!-- Footer Ends -->
<!-- JS Files -->
<?php $this->load->view("view_js"); ?>
<script>
	$(document).ready(function(){
		setInterval(function(){$(".camera_next").trigger("click");},8000);
	});
</script>
</body>

</html>
