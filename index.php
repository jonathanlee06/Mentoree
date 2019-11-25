	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Mentoree</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
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
			<!-- <link rel="stylesheet" href="css/bootstrap-tagsinput.css"> -->
			<link rel="stylesheet" href="css/main.css">
		
			<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous"></script>

		</head>
		<body>
			
			<!-- <h2>Modal Login Form</h2> -->

			<!-- <button onclick="document.getElementById('form_login').style.display='block'" style="width:auto;">Login</button> -->
			

			<?php include "nav.html"; ?>

			<?php include "modal.html"; ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
			
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center" style="padding-top:3%">
						<!-- <div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span>1500+</span> Jobs posted last week				
							</h1>	
							<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
						</div> -->
						<div class="col-md-4">
							<div class="empty-space marg-lg-b100 marg-sm-b30"></div>
							<h1 class="title">
								P2P Tutoring Platform				
							</h1>
							<br>
							<button class="ticker-btn" id="ga"  onclick="document.getElementById('id02').style.display='block'; document.body.style.overflow = 'hidden';"><span>Get Started</span></button>
						</div>
						<div class="col-md-8">
							<!-- <div class="empty-space marg-lg-b100 marg-sm-b30"></div> -->
							<img src="img/group-presentation-5-2.svg" class="">
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about Area -->
			<section class="features-area" style="background-color:#F9FCFF" id="about">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="title" style="padding-top:20%">What is Mentoree?</h2><br>
							<p style="font-weight:500;font-size:16px;color:#939393">Mentoree is a platform for students of UOWMKDU to interact with each other where students facing troubles with their courses can seek help from their peers. This platform allows students to participate as a mentor or mentee, where mentors will teach the mentees the subjects they are concerned with. This portal allows students to easily find a mentor if they require one and also be a small source of income for those interested in becoming mentors.</p>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5">
							<img src="img/knowledge.svg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End features Area -->

			<!-- Start features Area -->
			<section class="features-area" id="works">
			<div class="col-md-12">
				<h1 class="title text-center" style="padding-top:5%">
					How Mentoree Works?				
				</h1>
				<br><br>
				<nav>
					<div class="nav works-nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="works-nav-item nav-link text-center active" id="nav-tutor-pane" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-tutor" aria-selected="true" style="font-size:18px">For Tutor</a>
						<a class="works-nav-item nav-link text-center" id="nav-student-pane" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-student" aria-selected="false" style="font-size:18px">For Student</a>
					</div>
				</nav>
			</div>
			<div class="container">
				<div class="col-md-12">
					<div class="works-tab-content py-3 px-3 px-sm-0 align-items-center justify-content-center" id="nav-tabContent" style="padding-bottom:5%">
						<div class="tab-pane fade show active text-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/user.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Create an Account</h4>
									<br>
									<p style="font-weight:500;color:#939393">Create an account on our website using school email</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/search.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Search For Tutoring Job</h4>
									<br>
									<p style="font-weight:500;color:#939393">Search for student listings around the area selected and subject interested</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/link.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Connect</h4>
									<br>
									<p style="font-weight:500;color:#939393">Tutor can then connect with the student using the contact information provided</p>
								</div>
							</div>		
						</div>
						<div class="tab-pane fade text-center" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/user.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Create an Account</h4>
									<br>
									<p style="font-weight:500;color:#939393">Create an account on our website using school email</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/search.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Search For Tutor</h4>
									<br>
									<p style="font-weight:500;color:#939393">Search for tutor listings around the area selected and subject interested</p>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<img src="img/icons/mail.svg" alt="" style="width:70px;height:70px">
									<br><br>
									<h4>Approach</h4>
									<br>
									<p style="font-weight:500;color:#939393">Student can then connect with the tutor or get approached by the tutor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
						
			</section>
			

			<!-- Start callto-action Area -->
			<section class="callto-action-area" id="join" style="background-color:#F9FCFF">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-5">
							<img src="img/productive.svg" alt="">
						</div>
						<div class="col-lg-1"></div>
						<div class="menu-content col-lg-6" style="padding-top:10%">
							<div class="title">
								<h1 class="mb-10 text-white">Join us today! It is free!</h1>
								
							</div>
							<p style="font-weight:500;color:#939393">
							Facing trouble with your subjects and don’t know who to go to? 
							Having asked your lecturer multiple times and still have no idea what you’re doing?
							Extra time on your hands and don’t want it to go to waste?
							This portal will be your gateway to finding what you need. 
							Just register and pick if you want to be a mentor or mentee!
							</p>
							
							<button class="ticker-btn" id="ga" style="width:30%;height:15%;border-radius:35px" onclick="document.getElementById('id02').style.display='block'; document.body.style.overflow = 'hidden';"><span>Register Now</span></button>
						</div>
						
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->
		
			<?php include "footer.html"; ?>		
			
			<a href="#home" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
			<div id="preloader"></div>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<!-- <script src="js/vendor/jquery-3.4.1.min.js"></script> -->

			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
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
			<!-- <script src="js/tagsinput.js"></script> -->
			<script src="js/main.js"></script>
				
		</body>
	</html>



