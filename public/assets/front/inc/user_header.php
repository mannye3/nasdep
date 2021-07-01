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
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<link href="datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />


<link href="datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Title -->
<title>NASD ENTERPRISE PORTAL</title><!-- Favicon -->
<link href="https://nasdotcng.com/issuersportal/assets/images/newNasdIcon.jpg" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="https://nasdotcng.com/issuersportal/assets/images/newNasdIcon.jpg" sizes="128x128" rel="shortcut icon" />
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 dashbord menu-fixed main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		   <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.svg" alt="header-logo.svg">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="index.html" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="https://www.nasdep.com/img/logos/nasdep-150.png" alt="header-logo.svg">
		            <img class="logo2 img-fluid" src="https://www.nasdep.com/img/logos/nasdep-150.png" alt="header-logo2.svg">
		          
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				<div class="ht_left_widget style2 float-left">
				<!-- 	<ul>
						<li class="list-inline-item">
							<div class="ht_search_widget">
								<div class="header_search_widget inner_page">
									<form class="form-inline mailchimp_form">
										<input type="text" class="custom_search_with_menu_trigger form-control" placeholder="What are you looking for?" data-toggle="modal" data-target="#staticBackdrop">
										<button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
									</form>
								</div>
							</div>
						</li>
					</ul> -->
				</div>
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
		                <a href="index.php"><span class="title">Home</span></a>
		            </li>
		              <li>
		                <a href="about.php"><span class="title">About</span></a>
		            </li>
		            
		              <li>
		                <a href="princing"><span class="title">Pricing</span></a>
		            </li>
		              <li>
		                <a href="contact.php"><span class="title">Contact</span></a>
		            </li>
		           
		            
	                           <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"> <span class="dn-1366"> John Paul <span class="fa fa-angle-down"></span></span></a>
						    <div class="dropdown-menu">
						    	<div class="user_set_header">
						    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
							    	<p>John Paul <br><span class="address"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" >Paul@gmail.com
						    	<div class="user_setting_content">
									<a class="dropdown-item active" href="#">My Profile</a>
									<a class="dropdown-item" href="#">Messages</a>
									<a class="dropdown-item" href="#">Purchase history</a>
									<a class="dropdown-item" href="#">Help</a>
									<a class="dropdown-item" href="#">Log out</a>
						    	</div>
						    </div>
						</div>
			        </li>
	               <!--  <li class="list-inline-item add_listing"><a href="page-add-new-listing.html"><span class="icon">+</span><span class="dn-lg"> Add Listing</span></a></li> -->
	               
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
			<div class="main_logo_home2 text-left">
		            <img class="nav_logo_img img-fluid mt15" src="https://www.nasdep.com/img/logos/nasdep-150.png" alt="header-logo2.svg">
		           
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item"></li>
	                <li class="list-inline-item"></li>
					<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
		               <a href="index.php"><span class="title">Home</span></a>
		            </li>
		              <li>
		                <a href="about.php"><span class="title">About</span></a>
		            </li>
		           
		              <li>
		                <a href="pricing.php"><span class="title">Pricing</span></a>
		            </li>
		              <li>
		                <a href="contact.php"><span class="title">Contact</span></a>
		            </li>
			</ul>
		</nav>
	</div>

	
	<!-- Our Dashbord -->
	<section class="extra-dashboard-menu dn-992">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ed_menu_list mt5">
						<ul>
							<li><a class="" href="user_dashboard.php"><span class="flaticon-web-page"></span> Dashboard</a></li>
							<li><a href=""><span class="flaticon-list"></span>Enterprises</a></li>
							<li><a href="analysts.php"><span class="flaticon-list"></span>Analysts</a></li>
							<li><a href="investors.php"><span class="fa fa-list"></span>Investors</a></li>
							<li><a href="incubators.php"><span class="fa fa-list"></span>incubators</a></li>
							<li><a href=""><span class="fa fa-check-circle"></span> Pool</a></li>
							<li><a href=""><span class="fa fa-close"></span> Unpool</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="dashboard_navigationbar dn db-992">
						<div class="dropdown">
							<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
							<ul id="myDropdown" class="dropdown-content">
								<li><a class="active" href="user_dashboard.php"><span class="flaticon-web-page"></span> Dashboard</a></li>
							<li><a href=""><span class="flaticon-list"></span>Enterprises</a></li>
							<li><a href="analysts.php"><span class="flaticon-list"></span>Analysts</a></li>
							<li><a href="investors.php"><span class="fa fa-list"></span>Investors</a></li>
							<li><a href="incubators.php"><span class="fa fa-list"></span>incubators</a></li>
							<li><a href=""><span class="fa fa-check-circle"></span> Pool</a></li>
							<li><a href=""><span class="fa fa-close"></span> Unpool</a></li>
							</ul>
						</div>
					</div>
				</div>