<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="airbnb, booking, city guide, directory, events, hotel booking, listings, marketing, places, restaurant, restaurant">
<meta name="description" content="Guido - Directory & Listing HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/front/css/style.css')}}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css')}}">
<!-- Title -->
<title>NASD ENTERPRISE PORTAL</title>
<!-- Favicon -->
<link href="https://nasdotcng.com/issuersportal/assets/images/newNasdIcon.jpg" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="https://nasdotcng.com/issuersportal/assets/images/newNasdIcon.jpg" sizes="128x128" rel="shortcut icon" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



@include('includes.navigation')

@yield('content')













	<!-- Our Footer -->
	<section class="footer_one home1">
		<div class="container pb70">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li class="text-white df"><span class="flaticon-pin mr15"></span><a href="#">9th Floor, UBA House, 57 Marina, Lagos State, Nigeria</a></li>
							<li class="text-white"><span class="flaticon-phone mr15"></span><a href="#">+234-902-455-9686</a></li>
							<li class="text-white"><span class="flaticon-email mr15"></span><a href="#"><span class="__cf_email__" data-cfemail="f3808683839c8187b380989c9f92dd909c9e">info@nasdep.com</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-2 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>Useful links</h4>
						<ul class="list-unstyled">
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Privacy Notice</a></li>
							<li><a href="#">Terms & Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-5 col-md-6 col-lg-2 col-xl-2">
					<!-- <div class="footer_qlink_widget pl0">
						<h4>Discover</h4>
						<ul class="list-unstyled">
							<li><a href="#">Chicago</a></li>
							<li><a href="#">Los Angels</a></li>
							<li><a href="#">Miami</a></li>
							<li><a href="#">New York</a></li>
							<li><a href="#">Florida</a></li>
							<li><a href="#">Boston</a></li>
						</ul>
					</div> -->
				</div>
				<div class="col-sm-7 col-md-6 col-lg-4 col-xl-4">
					<div class="footer_social_widget">
						<h4>Subscribe</h4>
				    	<p class="text-white mb20">We don’t send spam so don’t worry.</p>
						<form class="footer_mailchimp_form">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control" id="inlineFormInput" placeholder="Enter your email">
							    	<button type="submit" class="btn btn-primary">Subscribe</button>
							    </div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container pt20 pb30">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="copyright-widget mt10 mb15-767">
						<p>© NASD - All rights reserved.</p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="footer_logo_widget text-center mb15-767">
						<div class="wrapper">
							<div class="logo text-center">

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="footer_social_widget text-right tac-smd mt10">
						<ul class="mb0">
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome text-thm3" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->

<script src="{{ asset('assets/front/js/jquery-3.6.0.js')}}"></script>
<script src="{{ asset('assets/front/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{ asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/front/js/jquery.mmenu.all.js')}}"></script>
<script src="{{ asset('assets/front/js/ace-responsive-menu.js')}}"></script>
<script src="{{ asset('assets/front/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/front/js/isotop.js')}}"></script>
<script src="{{ asset('assets/front/js/snackbar.min.js')}}"></script>
<script src="{{ asset('assets/front/js/simplebar.js')}}"></script>
<script src="{{ asset('assets/front/js/parallax.js')}}"></script>
<script src="{{ asset('assets/front/js/chart.min.js')}}"></script>
<script src="{{ asset('assets/front/js/chart.min.js')}}"></script>
<script src="{{ asset('assets/front/js/scrollto.js')}}"></script>
<script src="{{ asset('assets/front/js/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{ asset('assets/front/js/jquery.counterup.js')}}"></script>
<script src="{{ asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/front/js/progressbar.js')}}"></script>
<script src="{{ asset('assets/front/js/slider.js')}}"></script>
<script src="{{ asset('assets/front/js/timepicker.js')}}"></script>
<script src="{{ asset('assets/front/js/a076d05399.js')}}"></script>
<!-- Custom script for all pages -->
<script src="{{ asset('assets/front/js/script.js')}}"></script>




</body>

</html>











