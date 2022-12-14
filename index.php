<?php
$servername = "localhost";
$database = "wedding_yohannricky";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ricky & Yohanna's Wedding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
		type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	<link rel="stylesheet" href="https://cdn.plyr.io/3.6.12/plyr.css" />
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.modal.modal-fullscreen .modal-dialog,
		.modal.modal-fullscreen .modal-content {
			bottom: 0;
			left: 0;
			position: absolute;
			right: 0;
			top: 0;
		}

		.modal.modal-fullscreen .modal-dialog {
			margin: 0;
			width: 100%;
			animation-duration: 0.6s;
		}

		.modal.modal-fullscreen .modal-content {
			border: none;
			-moz-border-radius: 0;
			border-radius: 0;
			-webkit-box-shadow: inherit;
			-moz-box-shadow: inherit;
			-o-box-shadow: inherit;
			box-shadow: inherit;
		}

		.modal.modal-fullscreen.force-fullscreen .modal-body {
			padding: 0;
		}

		.modal.modal-fullscreen.force-fullscreen .modal-header,
		.modal.modal-fullscreen.force-fullscreen .modal-footer {
			left: 0;
			position: absolute;
			right: 0;
		}

		.modal.modal-fullscreen.force-fullscreen .modal-header {
			top: 0;
		}

		.modal.modal-fullscreen.force-fullscreen .modal-footer {
			bottom: 0;
		}

		@font-face {
			font-family: PhotographSignatureFont;
			src: url("./fonts/photograph_signature/Photograph Signature.ttf");
		}

		.fontsignature {
			src: local(".\fonts\photograph_signature\Photograph Signature.ttf");
			font-family: PhotographSignatureFont !important;
		}

		/* .fh5co-cover{
				background-image:url("images/img_bg_2.jpg");
			} */
		/* Custom, iPhone Retina */
		@media screen and (min-width : 320px) {
			.fh5co-cover {
				background-size: cover;
				background-image: url("images/cover-small-device.jpg");
			}

			#fh5co-header {
				/* height: 816px !important; */
			}

			.fh5co-cover h1.fontsignature {
				font-size: 50px !important;
				/* color:yellow !important; */
			}
		}

		/* Extra Small Devices, Phones */
		@media screen and (min-width : 480px) {
			.fh5co-cover {
				background-image: url("images/cover-small-device.jpg");
			}
		}

		/* Small Devices, Tablets */
		@media screen and (min-width : 768px) {
			.fh5co-cover {

				background-image: url("images/cover-small-device.jpg");
			}

			#fh5co-header {
				height: 968px !important;
			}
		}

		/* Medium Devices, Desktops */
		@media screen and (min-width : 992px) {
			.fh5co-cover {
				background-size: cover;
				background-position: center center;
				/* margin-left: -10px; */
				background-image: url("images/img_bg_2.jpg");
			}
		}

		/* Large Devices, Wide Screens */
		@media screen and (min-width : 1200px) {
			.fh5co-cover {
				background-size: cover;
				background-image: url("images/img_bg_2.jpg");
			}
		}

		@media screen and (min-width : 320px) {

			.imageinmodal {
				margin-top: 30px !important;
			}

			.h2inmodal {
				font-size: 45px !important;
			}

			.pinmodal {
				margin-top: 60px !important;
				font-size: 15px !important;
			}

			.buttoninmodal {
				margin-top: 40px !important;
			}
		}

		@media screen and (min-width : 768px) {

			.imageinmodal {
				margin-top: 100px !important;
			}

			.h2inmodal {
				margin-top: 50px !important;
				font-size: 95px !important;
			}

			.pinmodal {
				margin-top: 60px !important;
				font-size: 20px !important;
			}

			.buttoninmodal {
				margin-top: 40px !important;
			}
		}

		@media screen and (min-width : 1280px) {

			.imageinmodal {
				margin-top: 0px !important;
			}

			.h2inmodal {
				margin-top: 30px !important;
				font-size: 55px !important;
			}

			.pinmodal {
				margin-top: 30px !important;
				font-size: 20px !important;
			}

			.buttoninmodal {
				margin-top: 30px !important;
			}
		}

		.hitungmundur {
			color: #fff;
			/* margin: 0 auto; */
			/* text-align: center; */
		}

		.hitungmundur h1 {
			font-weight: normal;
			letter-spacing: .125rem;
			text-transform: uppercase;
		}

		.hitungmundur li {
			display: inline-block;
			font-size: 0.9em;
			list-style-type: none;
			padding: 2em;
			text-transform: uppercase;
		}

		.hitungmundur li span {
			display: block;
			font-size: 6.5rem;
		}

		.hitungmundur .emoji {
			display: none;
			padding: 1rem;
		}

		.hitungmundur .emoji span {
			font-size: 4rem;
			/* padding: 0 .5rem; */
		}

		/* @media all and (max-width: 320px) {
  .hitungmundur h1 {
    font-size: calc(1.5rem * var(--smaller));
  }
  
  .hitungmundur li {
    font-size: calc(2.125rem * var(--smaller)) !important;
  }
  
  .hitungmundur li span {
    font-size: calc(10.275rem * var(--smaller));
  }
} */
		@media all and (min-width: 320px) and (max-width: 767px) {
			.hitungmundur li {
				font-size: 0.7em;
				margin-bottom: 40px;
			}

			.hitungmundur li span {
				font-size: 2.0em !important;
			}
		}
	</style>
</head>

<body>

	<audio id="track">
		<source src="./music/Kenny G  - Loving You.mp3" type="audio/mpeg" />
	</audio>

	<div id="player-container" class="musicbtn">
		<div id="play-pause" class="play">Play</div>
	</div>
	<div id="CovidProtocol" class="modal fade modal-fullscreen" role="dialog" data-backdrop="static"
		style="z-index: 9999;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<!-- <div class="modal-header text-center">
				</div> -->
				<div class="modal-body">
					<center>
						<div class="row">
							<div class="col-md-12 ">
								<br><br>
								<img class="imageinmodal" src="images/img_1.jpg" alt="user"
									style="height: 150px;border-radius: 50%;border: 5px solid #000;box-shadow: 0px -10px 30px #ccc;">
							</div>
							<div class="col-md-12">
								<h2 class="fontsignature h2inmodal" style="font-size:5rem; padding-top: 50px;">Ricky &
									Yohanna</h2>
								<p class="pinmodal">
                                <i>Dengan segala kerendahan hati dan dengan ungkapan syukur atas karunia Tuhan, kami mengundang:</i>

									</br><b>
										Bapak/Ibu/Saudara/i</b></br>
									Jumat, 2 Desember 2022 | 10.00 WIB<br/>
									Sopo Adian Nalambok
								</p>
							</div>
							<div class="col-md-12">
								<button type="button" class="btn btn-danger buttoninmodal" data-dismiss="modal"
									id="closemodalplaymusic">Open Invitation</button>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
	<div id="CovidProtocols" class="modal fade modal-fullscreen" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content" style="background: url('./images/pexels-gradienta-7130555.jpg') no-repeat fixed">
				<!-- <div class="modal-header" style="height: 50px;">
					<button type="button" class="close" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Modal Header</h4>
				</div> -->
				<div class="modal-body text-center">
					<div class="row">
						<div class="col-md-12">
							<img src="images/couple-2_1.jpg" alt="user"
								style="height: 150px;border-radius: 50%;border: 5px solid #000;box-shadow: 0px -10px 30px #ccc;">
						</div>
					</div>
					<div class="row fh5co-headings" style="margin:0;">
						<div class="col-md-12">
							<h2 class="fontsignature" style="font-size:5rem;">Ricky & Yohanna</h2>
						</div>
					</div>
					<p style="font-weight:bold; margin:0; font-size: 1.3rem;">Patuhi Protokol Kesehatan Selama Pandemi
						Covid-19.</p>
					<br>

					<div class="row">
						<div class="col-xs-4 col-md-2">
							<div class="card h-100">
								<div class="card-body">
									<img src="./images/protocol/covid-wash-hand.svg" class="img-fluid mb-3" alt="">
									<h6 class="text-black">Wash Your Hands</h6>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-md-2">
							<div class="card h-100">
								<div class="card-body">
									<img src="./images/protocol/covid-wear-mask.svg" class="img-fluid mb-3" alt="">
									<h6 class="text-black">Wear Mask Properly</h6>
								</div>
							</div>
						</div>
			
						<div class="col-xs-4 col-md-2">
							<div class="card h-100">
								<div class="card-body">
									<img src="./images/protocol/covid-keep-distance.svg" class="img-fluid mb-3" alt="">
									<h6 class="text-black">Keep Distance</h6>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-md-2">
							<div class="card h-100">
								<div class="card-body">
									<img src="./images/protocol/covid-avoid-crowds.svg" class="img-fluid mb-3" alt="">
									<h6 class="text-black">Avoid Crowds</h6>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-md-2">
							<div class="card h-100">
								<div class="card-body">
									<img src="./images/protocol/covid-body-temperature-check.svg" class="img-fluid mb-3"
										alt="">
									<h6 class="text-black">Temperature Check</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button type="button" class="btn btn-default" data-dismiss="modal"
								id="closemodalplaymusic">Okay, I
								Understand. Open Invitation</button>
						</div>
					</div>
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div> -->
			</div>
		</div>
	</div>

	<div class="fh5co-loader"></div>

	<div id="page" class="page">
		<header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h2>Traditional Wedding Ceremony<br/><i>Pesta Adat</i></h2>
								<h1 class="fontsignature">Ricky &amp; Yohanna</h1>
								
								<!-- <h1 style="font-size:50px;">Save the date</h1> -->
								<!-- <div class="simply-countdown simply-countdown-one"></div> -->

								<div class="hitungmundur">
									<!-- <h1 id="headline">Countdown to Our Wedding</h1> -->
									<div id="countdown">
										<ul style="margin-left: -40px;">
											<li><span id="days"></span>days</li>
											<li><span id="hours"></span>Hours</li>
											<li><span id="minutes"></span>Minutes</li>
											<li><span id="seconds"></span>Seconds</li>
										</ul>
									</div>
								</div>
								<a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=M2o2NGI1cDhiZHBrcHFxcjRxbDlnOWEwcjcgaG92ZWx5d3pzaW1hdHVwYW5nQG0&tmsrc=hovelywzsimatupang%40gmail.com"
									class="btn btn-success" target="_blank">Add to My Calender</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-couple">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2 class="fontsignature">Horas!</h2>
						<h3>On Friday, December 2nd, 2022</h3>
						<p>You are cordially invited to celebrate our traditional wedding ceremony (pesta adat)</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<img src="images/groom.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-groom">
							<h3>Ricky Zulkarnaen Sianturi</h3>
							<p style="font-size: 14px;">Son of Mr. Ch. Sianturi & Mrs. D. Manalu</p>
						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2"></i></p>
					<div class="couple-half">
						<div class="bride">
							<img src="images/bride.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-bride">
							<h3>Yohanna Putri A. Siburian</h3>
							<p style="font-size: 14px;">Daughter of Mr. J. Siburian (???) & Mrs. D. Sianipar</p>
						</div>
					</div>
                    <br/>
                    <br/>
                    <br/>

                    <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						
					

                    </div>
				</div>
				</div>
        
				<br/>	
					<br/>	
					<br/>
				<div class="well well-large">
				<p><center>Kami ingin merasakan kasih-Mu dalam rumah tangga kami, ya Tuhan. Kami ingin api cinta Kristus-Mu mengalir selalu pada darah dan nadi jiwa kami. Agar kami selalu menjadi keluarga yang harmonis. Dalam nama Kristus, sang Juruselamat, kami berdoa. <br/>Amin</center>
  				</div>
			</div>
            
		</div>

                                    

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>Our Special Events</span>
						<h2 class="fontsignature">Traditional Ceremony</h2>
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-12 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Pesta Adat & Resepsi</h3>
										<div class="event-col">
											<i class="icon-calendar"></i>
											<span>Friday 02</span>
											<span>December, 2022</span>
										</div>
										<div class="event-col">
											<i class="icon-clock"></i>
											<span>10:00 PM</span>
											<span>End</span>
										</div>

										<i class="icon-map"></i>
										<p>Sopo Adian Nalambok</p>
										<span style="font-size:12px;margin-top:-20px;">Jl. Nuri Gambir Baru, Kecamatan Kota Kisaran Timur
											Kabupaten Asahan, Sumatera Utara 21264</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services" class="fh5co-section-gray">
			<div class="container">

				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2 class="fontsignature">Direction</h2>
						<p>You can use Google Maps to reach to our venue</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12 animate-box">
						<div class="" style="padding-bottom: 20px;">
							<style>
								#map {
									height: 400px;
									width: 100%;
								}
							</style>

							<body>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.448661521356!2d99.63750277901119!3d2.99258951498703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30324d4bd5f54a51%3A0xbe231579842c90bc!2sSopo%20Adian%20Nalambok%20Gdg.%20II!5e0!3m2!1sid!2sid!4v1667191995574!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</body>
						
							<div class="overlay"></div>
						</div>
					</div>
				</div>
				<div class="row">
				
					<div class="col-md-12">
						<center>
							<div class="feature-lefts animate-box" data-animate-effect="fadeInRight">
								<div class="feature-copy">
									<span class="icon" style="font-size: 29px;">
										<i class="icon-location"></i>
									</span>
									<h3>Sopo Adian Nalambok</h3>
									<p>Jl. Nuri Gambir Baru, Kecamatan Kota Kisaran Timur
										Kabupaten Asahan, Sumatera Utara 21264</p>
									<a href="https://goo.gl/maps/fQXW7cvSEvpz5gaj8" target="_blank" id="maps"
										class="btn btn-default btn-sm">Get Direction to Sopo Adian Nalambok
									</a>
								</div>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<span>You Can Support Us With</span>
						<h2 class="fontsignature">Gift</h2>
						<!-- <h6 class="" style="color:#fff; font-size: 13px;margin-bottom: 0;">Apabila Bapak/Ibu/Saudara/i
							ingin berbagi kebahagian bersama kami dengan mengirimkan wedding gift, tanpa mengurangi rasa
							hormat, berikut informasi yang dapat kami berikan</h6> -->
					</div>
				</div>
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-10 col-md-offset-1">
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Address</h3>
										<i class="icon-map"></i>
										<p>Home</p>
										<br>
										<span id="address" style="font-size:12px;margin-top:-20px;"><b>Penerima :</b>
											Yohanna Simatupang <br> <b>No HP :</b> 0853 9794 2801 <br> Jl. Seriti II, Gg. Amal, Kisaran Timur Kota, Kab. Asahan, Sumatera Utara</span>
										<button id="btnaddress" onclick="copyToClipboard('#address')" class="btn btn-xs"
											style="font-size: 12px; padding: 5px;">Copy</button>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Bank Account</h3>

										<img src="./images/bca-png-7.png" alt=""
											style="height: 15px;">
										<p id="bank2" style="margin: 0; font-weight: bold;">8000884724</p>
										<button id="btnbank2" onclick="copyToClipboard('#bank2')" class="btn btn-xs"
											style="font-size: 12px; padding: 5px;">Copy</button>
										<span style="font-size:12px;"><b>BCA a.n. Ricky Zulkarnaen Sianturi</b></span>


										<img src="./images/bank-mandiri.svg" alt="" style="height: 15px;">
										<p id="bank1" style="margin: 0; font-weight: bold;">1060013779254</p>
										<button id="btnbank1" onclick="copyToClipboard('#bank1')" class="btn btn-xs"
											style="font-size: 12px; padding: 5px;">Copy</button>
										<span style="font-size:12px;"><b>Mandiri a.n. Yohanna Putri Simatupang</b></span>

										
									</div>
								</div>
								<div class="col-md-4 col-sm-6 text-center">
									<div class="event-wrap animate-box">
										<h3>Digital Wallet</h3>
										<img src="./images/qris/dana.jpg" alt="" style="height: 170px;">
										<p>0853 9794 2801</p>
										<span style="font-size:12px;margin-top:-20px;">Dana a.n Yohanna Putri Simatupang</span>
									
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-testimonial">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2 class="fontsignature" style="color: #F14E95;">Share Wishes!</h2>
						<p>Please Fill-up the form for best wishes to us. Thanks.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1">
                        <form class="form-inlines" method="POST">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="ig" class="sr-only">Instagram</label>
									<input type="text" class="form-control" id="ig" placeholder="Instagram">
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="message">My Best Wishes</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control"
										placeholder="Write us your best wishes"></textarea>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<!-- <button type="submit" class="btn btn-default btn-block">Send Message</button> -->
								
							    <button onclick="submit_wishes()" class="btn-primary">Send Wishes</button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-testimonial" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<span>Best Wishes</span>
							<h2 class="fontsignature">Friends Wishes</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="wrap-testimony">
								<div class="owl-carousel-fullwidth">
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="images/wishes.png" alt="user">
											</figure>
											<span>Ester, @ <a href="#" class="twitter">esterafriany</a></span>
											<blockquote>
												<p>"Semoga Tuhan memberkati.."</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="images/wishes.png" alt="user">
											</figure>
											<span>No Name, @ <a href="#" class="twitter">noname</a></span>
											<blockquote>
												<p>"Happy for your family."</p>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="images/wishes.png" alt="user">
											</figure>
											<span>No Name, @ <a href="#" class="twitter">noname</a></span>
											<blockquote>
												<p>"God bless."</p>
											</blockquote>
										</div>
									</div>

                                    <?php 
										$sql = "SELECT * FROM wishes";
										$result = $conn->query($sql);
										
										if ($result->num_rows > 0) {
											// output data of each row
											while($row = $result->fetch_assoc()) {

												?>

									<div class="item">
										<div class="testimony-slide active text-center">
											<figure>
												<img src="images/wishes.png" alt="user">
											</figure>
											<span><?=$row["name"]?>, (<?=$row["instagram"]?>)</span>
											<blockquote>
												<p>"<?=$row["wishes"]?>"</p>
											</blockquote>
										</div>
									</div>
									<?php
											}
										} else {
								// 			echo "0 results";
										}

									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2022. All Rights Reserved.</small>
							</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<script src="https://cdn.plyr.io/3.6.12/plyr.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		var d = new Date(new Date().getTime());
		console.log("ini wktunya " + d);

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: false
		});
	</script>

<script>
		function submit_wishes() {
			var name = document.getElementById('name').value;
			var ig = document.getElementById('ig').value;
			var message = document.getElementById('message').value;
			// //store all the submitted data in astring.
			var formdata = 'name=' + name + '&ig=' + ig + '&message=' + message;

			console.log(formdata);
			// validate the form input
			if (name == '') {
				// alert("Please Enter Your Name");
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Nama Tidak Boleh Kosong!',
				// footer: '<a href="">Why do I have this issue?</a>'
				});
				return false;
			}
			if (ig == '') {
				// alert("Please Enter Your Instagram Username");
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Instagram Tidak Boleh Kosong!',
				// footer: '<a href="">Why do I have this issue?</a>'
				});
				return false;
			}
			if (message == '') {
				// alert("Please Enter Your Message");
				Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Pesan Tidak Boleh Kosong!',
				// footer: '<a href="">Why do I have this issue?</a>'
				});
				return false;
			} else {
				// AJAX code to submit form.
				$.ajax({
					type: "POST",
					url: "submit.php",
					data: formdata,
					cache: false,
					success: function (html) {
					
						let timerInterval
						Swal.fire({
							icon: 'success',
							title: 'Pesan Anda Berhasil di Simpan!',
							html: 'Mohon Tunggu, Anda akan diarahkan ke halaman utama secara otomatis dalam <b></b> milliseconds.',
							timer: 5000,
							timerProgressBar: true,
							didOpen: () => {
								Swal.showLoading()
								const b = Swal.getHtmlContainer().querySelector('b')
								timerInterval = setInterval(() => {
									b.textContent = Swal.getTimerLeft()
								}, 100)
							},
							willClose: () => {
								clearInterval(timerInterval)
							}
						}).then(function () {
							window.location = "http://localhost/yohanna_ricky/";
						});

					}
				});
			}
			return false;
		}
	</script>

	<script>
		$(document).ready(function () {
			$('#CovidProtocol').modal('show');
		});
	</script>
	<script>
		var track = document.getElementById('track');

		var closemodalprotocol = document.getElementById('closemodalplaymusic');

		var controlBtn = document.getElementById('play-pause');

		function playPause() {
			if (track.paused) {
				track.play();
				//controlBtn.textContent = "Pause";
				controlBtn.className = "pause";
			} else {
				track.pause();
				//controlBtn.textContent = "Play";
				controlBtn.className = "play";
			}
		}

		controlBtn.addEventListener("click", playPause);
		closemodalprotocol.addEventListener("click", playPause);
		track.addEventListener("ended", function () {
			controlBtn.className = "play";
		});
	</script>

	<script>
		function copyToClipboard(element) {
			console.log(element);
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val($(element).text()).select();
			document.execCommand("copy");
			if (element == '#bank1') {
				document.getElementById('btnbank1').innerHTML = "Copied";
				document.getElementById('btnbank2').innerHTML = "Copy";
				document.getElementById('btnaddress').innerHTML = "Copy";
			} else if (element == '#bank2') {
				document.getElementById('btnbank1').innerHTML = "Copy";
				document.getElementById('btnbank2').innerHTML = "Copied";
				document.getElementById('btnaddress').innerHTML = "Copy";
			} else {
				document.getElementById('btnbank1').innerHTML = "Copy";
				document.getElementById('btnbank2').innerHTML = "Copy";
				document.getElementById('btnaddress').innerHTML = "Copied";
			}
			$temp.remove();
		}
	</script>

	<script>
		const player = new Plyr('#player');
	</script>

	<script>
		(function () {
			const second = 1000,
				minute = second * 60,
				hour = minute * 60,
				day = hour * 24;

			//I'm adding this section so I don't have to keep updating this pen every year :-)
			//remove this if you don't need it
			let today = new Date(),
				dd = String(today.getDate()).padStart(2, "0"),
				mm = String(today.getMonth() + 1).padStart(2, "0"),
				yyyy = today.getFullYear(),
				nextYear = yyyy + 1,
				dayMonth = "12/02/",
				birthday = dayMonth + yyyy;

			today = mm + "/" + dd + "/" + yyyy;
			if (today > birthday) {
				birthday = dayMonth + nextYear;
			}
			//end

			const countDown = new Date(birthday).getTime(),
				x = setInterval(function () {

					const now = new Date().getTime(),
						distance = countDown - now;

					document.getElementById("days").innerText = Math.floor(distance / (day)),
						document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
						document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
						document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

					//do something later when date is reached
					if (distance < 0) {
						document.getElementById("headline").innerText = "Today is The Day!";
						document.getElementById("countdown").style.display = "none";
						document.getElementById("content").style.display = "block";
						clearInterval(x);
					}
					//seconds
				}, 0)
		}());
	</script>
</body>

</html>