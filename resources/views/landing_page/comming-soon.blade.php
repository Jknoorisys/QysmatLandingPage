<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Qysmat</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500" rel="stylesheet">
	
	<!-- Favicon -->
	<link href="assets/img/logo.png" rel="icon">

	<link href="assets/css/ionicons.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="assets/css/jquery.classycountdown.css" />
		
	<link href="assets/css/styles.css" rel="stylesheet">
	
	<link href="assets/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<?php
		$contactDetails = DB::table('contact_details')->get();
		$instagram = $contactDetails->firstWhere('contact_type', 'instagram');
		$facebook = $contactDetails->firstWhere('contact_type', 'facebook');
		$twitter = $contactDetails->firstWhere('contact_type', 'twitter');
		$linkedin = $contactDetails->firstWhere('contact_type', 'linkedin');
	?>

	<div class="main-area-wrapper">
		<div class="main-area center-text" style="background-image:url(assets/img/countdown-7-1600x900.jpg);" >
			
			<div class="display-table">
				<div class="display-table-cell">
					
					<h1 class="title" style="padding-bottom:100px;"><b>Coming Soon</b></h1>
					<!-- <p class="desc font-white">Our website is currently undergoing scheduled maintenance.
						We Should be back shortly. Thank you for your patience.</p>
						
					<div id="normal-countdown" data-date="2018/01/01"></div>
					
					<a class="notify-btn" href="#"><b>NOTIFY US</b></a> -->
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						&copy; <a class="border-bottom" href="#">QYSMAT</a>, All Right Reserved.

						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed By <a class="border-bottom" href="https://noorisys.com/">Noorisys
							Technologies Pvt
							Ltd.</a>

						<div class="d-flex pt-2">
							<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-outline-light btn-social" href=""><i
									class="fab fa-facebook-f"></i></a>
							<a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
							<a class="btn btn-outline-light btn-social" href=""><i
									class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
					<div class="col-md-6 text-center text-md-end">
						{{-- <div class="footer-menu">
							<a href="{{ route('faqs') }}" class="text-white">FAQs</a> |
							<a href="{{ route('contact-us') }}" class="text-white">Contact Us</a> |
							<a href="{{ route('terms-conditions') }}" class="text-white">Terms & Conditions</a> |
							<a href="{{ route('privacy-policy') }}" class="text-white">Privacy Policy</a>
						</div> --}}
						<div class="footer-menu">
							<a href="#" class="text-white">FAQs</a> |
							<a href="{{ route('contact-us') }}" class="text-white">Contact Us</a> |
							<a href="#" class="text-white">Terms & Conditions</a> |
							<a href="{{ route('privacy-policy') }}" class="text-white">Privacy Policy</a>
						</div>
					</div>
					<ul class="social-btn">
						<!-- <li class="list-heading">Follow us for update</li> -->
						<li><a href="{{ strip_tags($facebook->details) }}"><i class="ion-social-facebook"></i></a></li>
						<li><a href="{{ strip_tags($twitter->details) }}"><i class="ion-social-twitter"></i></a></li>
						<li><a href="{{ route('/') }}"><i class="ion-social-googleplus"></i></a></li>
						<li><a href="{{ strip_tags($instagram->details) }}"><i class="ion-social-instagram"></i></a></li>
						<!-- <li><a href="#"><i class="ion-social-pinterest"></i></a></li> -->
					</ul>
					
				</div><!-- display-table -->
				
			</div><!-- display-table-cell -->

			
		</div><!-- main-area -->

		
	</div><!-- main-area-wrapper -->
	
	<!-- SCIPTS -->
	
	<!-- <script src="common-js/jquery-3.1.1.min.js"></script> -->
	
	<!-- <script src="common-js/jquery.countdown.min.js"></script> -->
	
	<!-- <script src="common-js/scripts.js"></script> -->
	
</body>
</html>