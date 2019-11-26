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
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
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
				if(!isset($_SESSION['username'])){
					header("Location: index.php");
				}	
				
				include "nav-home.php";
			?>
			<!-- Start tab Area -->
			<section class="short-banner-area relative" id="fa">
			<div class="container about-content" style="padding-bottom:2%">
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
													<input type="text" class="form-control" name="search" id="search" placeholder="Search by Subject?">
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
										echo '<h1 class="title text-center">Search Job</h1>';
										echo '<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
										<form action="search-student.php" class="serach-form-area" id="search-tutor" method="POST">
											<div class="row justify-content-center form-wrap">
												<div class="col-lg-6 form-cols">
													<input type="text" class="form-control" name="search" id="search" placeholder="Search by Subject">
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
						<div class="col-lg-3 sidebar">
							<div class="single-slidebar">
								<h4>Filter by Location</h4>
								<div class="list-group">
									<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="location" value="UOW Malaysia KDU Utropolis, Glenmarie"  > Glenmarie</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="location" value="UOW Malaysia KDU College Damansara Jaya"  > Damansara Jaya</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="location" value="UOW Malaysia KDU Batu Kawan, Penang"  > Batu Kawan, Penang</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="location" value="UOW Malaysia KDU Georgetown, Penang"  > Goergetown, Penang</label>
									</div>
									</div>
								</div>
								<br>
								<h4>Filter by Level</h4>
								<div class="list-group">
								<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="level" value="Pre-U"  > Pre-U / Foundation</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="level" value="Diploma"  > Diploma</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="level" value="Degree"  > Degree</label>
									</div>
									<div class="list-group-item">
										<label><input type="checkbox" name="selector" class="level" value="Master"  > Master</label>
									</div>
									</div>
								</div>

							</div>						

						</div>
						<div class="col-lg-9 post-list">
							
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
						<div class="col-lg-9 post-list filter">
							
						

						</div>
						
					</div>
				</div>	
			</section>
			<!-- End post Area -->
		
			<!-- start footer Area -->		
			<?php include "footer.html"; ?>
			<!-- End footer Area -->		
			<script>
                function like(postID){
                    $.ajax({
                        url: 'includes/process.php',
                        type: 'POST',
                        data: {
                            'postid':postID
                        },
                        success: function(data){
                            alert(data);
                        }
                    });
                }
            </script>  
			
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



