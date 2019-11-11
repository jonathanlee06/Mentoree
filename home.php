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
			<?php session_start(); ?>
			<?php include "nav-home.php"; ?>

			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<!-- <div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span>1500+</span> Jobs posted last week				
							</h1>	
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
						</div>											 -->
						<div class="col-md-5">
							<div class="empty-space marg-lg-b100 marg-sm-b30"></div>
							<h1 class="title">
								P2P Tutoring Platform				
							</h1>
							<br>
							<button class="ticker-btn"><span>Get Started</span></button>
						</div>
						<div class="col-md-7">
							<!-- <div class="empty-space marg-lg-b100 marg-sm-b30"></div> -->
							<img src="img/group-presentation-5-2.svg" class="">
						</div>
					</div>
				</div>
			</section>


			<!-- Start tab Area -->
			<section class="features-area" id="fa">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-tutor-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-tutor" aria-selected="true">Find Tutor</a>
									<a class="nav-item nav-link" id="nav-student-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-student" aria-selected="false">Find Student</a>
								</div>
							</nav>
						</div>
						<div class="col-md-12">
							<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
							</div>
						</div>
					</div>
				</div>
						
			</section>
			<!-- End tab Area -->
			
			<!-- Start feature-cat Area -->
			<section class="feature-cat-area pt-100" id="category">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Featured Job Categories</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o1.png" alt="">
								</a>
								<p>Accounting</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o2.png" alt="">
								</a>
								<p>Development</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o3.png" alt="">
								</a>
								<p>Technology</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o4.png" alt="">
								</a>
								<p>Media & News</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o5.png" alt="">
								</a>
								<p>Medical</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-4 col-sm-6">
							<div class="single-fcat">
								<a href="category.html">
									<img src="img/o6.png" alt="">
								</a>
								<p>Goverment</p>
							</div>			
						</div>																											
					</div>
				</div>	
			</section>
			<!-- End feature-cat Area -->

			<!-- Start post Area -->
			<section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">
							
						<?php include "listing.php"; ?>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Top rated job posts</h4>
								<div class="active-relatedjob-carusel">
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>
									<div class="single-rated">
										<img class="img-fluid" src="img/r1.jpg" alt="">
										<a href="single.html"><h4>Creative Art Designer</h4></a>
										<h6>Premium Labels Limited</h6>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
										</p>
										<h5>Job Nature: Full time</h5>
										<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
										<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
										<a href="#" class="btns text-uppercase">Apply job</a>
									</div>																		
								</div>
							</div>							

							<div class="single-slidebar">
								<h4>Jobs by Category</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
								</ul>
							</div>

							<div class="single-slidebar">
								<h4>Carrer Advice Blog</h4>
								<div class="blog-list">
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
									<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
										<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												 <span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>																		
								</div>
							</div>							

						</div>
					</div>
				</div>	
			</section>
			<!-- End post Area -->
				

			<!-- Start callto-action Area -->
			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="#">I am a Candidate</a>
								<a class="primary-btn" href="#">Request Free Demo</a>
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->

			<!-- Start download Area -->
			<section class="download-area section-gap" id="app">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 download-left">
							<img class="img-fluid" src="img/d1.png" alt="">
						</div>
						<div class="col-lg-6 download-right">
							<h1>Download the <br>
							Mentoree App Today!</h1>
							<p class="subs">
								It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
							</p>
							<div class="d-flex flex-row">
								<div class="buttons">
									<i class="fa fa-apple" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on App Store
											</p>
										</a>
									</div>
								</div>
								<div class="buttons">
									<i class="fa fa-android" aria-hidden="true"></i>
									<div class="desc">
										<a href="#">
											<p>
												<span>Available</span> <br>
												on Play Store
											</p>
										</a>
									</div>
								</div>									
							</div>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End download Area -->
		
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



