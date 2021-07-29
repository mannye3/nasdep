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
		                <a href="{{ route('index') }}"><span class="title">Home</span></a>
		            </li>
		              <li>
		                <a href="{{ route('about') }}"><span class="title">About</span></a>
		            </li>

		              <li>
		                <a href="{{ route('pricing') }}"><span class="title">Pricing</span></a>
		            </li>
		              <li>
		                <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
		            </li>


	                           <li class="user_setting">
						<div class="dropdown">
	                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown">
                                @if(Auth::user()->avatar == "")
                                <img class="rounded-circle" src="{{ asset('images/user.png')}}" height="30px" width="30px">
                                @else
                                <img class="rounded-circle" src="{{ Auth::user()->avatar}}" height="50px">
                                @endif
                                <span class="dn-1366"> {{ Auth::user()->name}} <span class="fa fa-angle-down"></span></span></a>


						    <div class="dropdown-menu">
						    	<div class="user_set_header">
                                    @if(Auth::user()->avatar == "")
						    		<img class="float-left" src="{{ asset('images/user.png')}}" height="50px">
                                    @else
                                    <img class="float-left" src="{{ Auth::user()->avatar}}" height="50px">
                                    @endif

							    	<p>{{ Auth::user()->name}}<br><span class="address">{{ Auth::user()->email}}</a></span></p>
                                    <div class="user_setting_content">
                                        <a class="dropdown-item active" href="{{ route('dashboard') }}">My Profile</a>

                                        <form  method="POST" id="logout-form" action="{{ route('logout')}}">@csrf</form>
                                        <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>

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
		               <a href="{{ route('index') }}"><span class="title">Home</span></a>
		            </li>
		              <li>
		                <a href="{{ route('about') }}"><span class="title">About</span></a>
		            </li>

		              <li>
		                <a href="{{ route('pricing') }}"><span class="title">Pricing</span></a>
		            </li>
		              <li>
		                <a href="{{ route('contact') }}"><span class="title">Contact</span></a>
		            </li>
			</ul>
		</nav>
	</div>
