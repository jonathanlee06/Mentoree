<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Mentoree</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<?php 
				session_start();
				// if(!isset($_SESSION['username'])){
				// 	header("Location: about-us.html");
				// }	
				
			?>
			<?php include "nav-home.php"; ?>

			


			<!-- Start tab Area -->
			<section class="short-banner-area relative" id="fa">
			<div class="container about-content">
					<div class="row">
						<div class="col-md-12" style="padding-top:5%; padding-bottom:5%">
							<?php
								if(isset($_SESSION['usertype'])){
									$userType = $_SESSION['usertype'];
									if($userType == "Student"){
										echo '<h1 class="title text-center">Search Tutor</h1>';
										echo '<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
										<form action="search-tutor.php" class="serach-form-area" id="search-tutor" method="POST">
											<div class="row justify-content-center form-wrap">
												<div class="col-lg-6 form-cols">
													<input type="text" class="form-control" name="search" id="search" placeholder="what are you looking for student?">
													<small id="s_error" class="form-text text-muted text-center"></small>
												</div>
												<div class="col-lg-4 form-cols">
													<div class="default-select" id="default-selects">
														<select class="nice-select" name="area" id="area">
															<option value="" selected disabled style="font-weight:bold">Select Area</option>
															<option value="Glenmarie">Glenmarie</option>
															<option value="Damansara Jaya">Damansara Jaya</option>
															<option value="Penang">Penang</option>
															<option value="Batu Kawan">Batu Kawan</option>
														</select>
													</div>
												</div>
												<!-- <div class="col-lg-3 form-cols">
													<div class="default-select" id="default-selects2">
														<select>
															<option value="1">All Category</option>
															<option value="2">Medical</option>
															<option value="3">Technology</option>
															<option value="4">Goverment</option>
															<option value="5">Development</option>
														</select>
													</div>										
												</div> -->
												<div class="col-lg-2 form-cols">
													<button type="submit" class="ticker-btn-search">
														<span class="lnr lnr-magnifier" id="mag" style="color:white"></span> Search
													</button>
												</div>								
											</div>
										</form>
									</div>
									</div>';
									}
									else{
										echo '<h1 class="title text-center">Search Student</h1>';
										echo '<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
										<form action="search.html" class="serach-form-area">
											<div class="row justify-content-center form-wrap">
												<div class="col-lg-4 form-cols">
													<input type="text" class="form-control" name="search" placeholder="what are you looking for?">
												</div>
												<div class="col-lg-3 form-cols">
													<div class="default-select" id="default-selects">
														<select>
															<option value="1">Select area</option>
															<option value="2">Dhaka</option>
															<option value="3">Rajshahi</option>
															<option value="4">Barishal</option>
															<option value="5">Noakhali</option>
														</select>
													</div>
												</div>
												<div class="col-lg-3 form-cols">
													<div class="default-select" id="default-selects2">
														<select>
															<option value="1">All Category</option>
															<option value="2">Medical</option>
															<option value="3">Technology</option>
															<option value="4">Goverment</option>
															<option value="5">Development</option>
														</select>
													</div>										
												</div>
												<div class="col-lg-2 form-cols">
													<button type="button" class="ticker-btn-search">
														<span class="lnr lnr-magnifier"></span> Search
													</button>
												</div>								
											</div>
										</form>
									</div>
									</div>';
									}
								}
								else {
									echo "You Noob";
								}
							?>
							
						</div>
						
						<!-- <div class="col-md-6">
							<nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<?php
										// if(isset($_SESSION['usertype'])){
										// 	$userType = $_SESSION['usertype'];
										// 	if($userType == "Student"){
										// 		echo '<a class="nav-item nav-link" id="nav-tutor-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-tutor" aria-selected="true">Find Tutor</a>';
										// 	}
										// 	else{
										// 		echo '<a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-student" aria-selected="false">Find Student</a>';
										// 	}
										// }
										// else {
										// 	echo "You Noob";
										// }
									?>
									
									
								</div>
							</nav>
						</div>
						<div class="col-md-12">
							<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
								
								
							</div>
						</div> -->
					</div>
				</div>
						
			</section>
			<!-- End tab Area -->

			<!-- Start post Area -->
			<section class="post-area">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-12 post-list">
							
						<?php
							if(isset($_SESSION['usertype'])){
								$userType = $_SESSION['usertype'];
								if($userType == "Student"){
									include "tutor-listings.php";
								}
								else{
									include "student-listings.php";
								}
							}
							else {
								echo "You Noob";
							}
						?>

						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->
		
			<!-- start footer Area -->		
			<footer class="footer-area section-gap-footer">
				<div class="container">
						<div class="row">

							<!-- Grid column -->
							<div class="col-md-4 mt-md-0 mt-3">
						
								<!-- Content -->
								<img src="img/web-logo-2.png" alt="" style="width: 200px; height: 55px;">
								<h5 class="text-uppercase">Footer Content</h5>
								<p>Mentoree is a platform where tutor and student can find each other to learn and teach together</p>
						
							</div>
							<!-- Grid column -->
						
							<hr class="clearfix w-100 d-md-none pb-3">
						
							<!-- Grid column -->
							<div class="col-md-3 mb-md-0 mb-3">
								
								<!-- Links -->
								<h5 class="text-uppercase footer-title">For Students</h5>
								
								<ul class="list-unstyled">
								<li>
									<a href="#!" class="text-white">Become a student</a>
								</li>
								<li>
									<a href="#!" class="text-white">Find tutors</a>
								</li>
								<li>
									<a href="#!" class="text-white">FAQ</a>
								</li>
								</ul>
						
							</div>
							<!-- Grid column -->
						
							<!-- Grid column -->
							<div class="col-md-3 mb-md-0 mb-3">
						
								<!-- Links -->
								<h5 class="text-uppercase footer-title">For Tutors</h5>
								
								<ul class="list-unstyled">
								<li>
									<a href="#!" class="text-white">Become a tutor</a>
								</li>
								<li>
									<a href="#!" class="text-white">Find students</a>
								</li>
								<li>
									<a href="#!" class="text-white">FAQ</a>
								</li>
								</ul>
						
							</div>
							<!-- Grid column -->
							
							<!-- Grid column -->
							<div class="col-md-2 mb-md-0 mb-3">
						
								<!-- Links -->
								<h5 class="text-uppercase footer-title">Contact Us</h5>
								
								<ul class="list-unstyled">
								<li>
									<a href="#!" class="text-white">About Us</a>
								</li>
								<li>
									<a href="#!" class="text-white">Contact</a>
								</li>
								<li>
									<a href="#!" class="text-white">Our Vision</a>
								</li>
								</ul>
						
							</div>
							<!-- Grid column -->

						</div>
						<!-- Grid row -->

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <a href="index.php" target="_blank">Mentoree</a> <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



