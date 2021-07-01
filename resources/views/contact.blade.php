@extends('layouts.master')

@section('content')




    <!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Contact Us</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Contact -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_info_widget mb30-smd">
						<h3 class="m_title">Our Office</h3>
						<div class="ciw_box mb50">
							<h4 class="title"></h4>
							<ul class="list-unstyled">
								<li class="df"><span class="flaticon-pin mr15"></span><a href="#">9th Floor, UBA House, 57 Marina, Lagos State, Nigeria</a></li>
								<li><span class="flaticon-phone mr15"></span><a href="#">+234-902-455-9686</a></li>
								<li><span class="flaticon-email mr15"></span><a href="#"><span class="__cf_email__">info@ventureramp.com.ng</span></a></li>
							</ul>
							<a class="tdu text-thm direction" href="https://goo.gl/maps/LoA9cWRWyUvrF7VVA" target="blank_">Get Direction</a>
						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="form_grid">
						<h3 class="title mb5">Need Assistance? Please Complete The Contact Form</h3>
			            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
							<div class="row">
				                <div class="col-md-12">
				                    <div class="form-group">
										<input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
									</div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="text" placeholder="Phone">
				                    </div>
				                </div>
				                <div class="col-sm-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
		                            </div>
				                    <div class="form-group mb0">
					                    <button type="button" class="btn btn-lg btn-thm">Send Message</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="our-map p0">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="h600" id=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5201338557504!2d3.3809745500001687!3d6.4555835953067815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b0be6e6c2f7%3A0x191517fc2747f07f!2sNASD%20PLC!5e0!3m2!1sen!2sng!4v1623324390171!5m2!1sen!2sng" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
				</div>
			</div>
		</div>
	</section>

    @endsection
