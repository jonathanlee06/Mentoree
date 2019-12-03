<!DOCTYPE html>
<html lang="en">
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
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/nice-select.css">					
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="css/main.css">

    </head>
  <body>

    <?php session_start(); ?>
    <?php include "php/nav-home.php" ?>  

    <div class="short-banner-area relative" id="post">
      <div class="container"  style="padding-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="title">
              Edit Profile Listing			
            </h1>	
          </div>											
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
            <div class="container">
              <?php include "php/get-php/tutor-listings.php" ?>
            </div>
            <div class="container p-5 bg-white" id="message">
              <h2 class="text-center">Posted Successfully! Redirecting you to homepage in 5 seconds...</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
		
		<?php include "html/footer.html" ?>
    <!-- End footer Area -->		

    <script src="js/vendor/jquery-2.2.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>			
      <script src="js/easing.min.js"></script>			
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>	
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>			
    <script src="js/parallax.min.js"></script>		
    <script src="js/main.js"></script>
    
  </body>
</html>