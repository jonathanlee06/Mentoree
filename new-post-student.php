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

    </head>
  <body>

    <?php session_start(); ?>
    <?php include "nav-home.php" ?>  

    <div class="short-banner-area relative" id="post">
      <div class="container" style="padding-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="title">
              Post a Listing				
            </h1>	
          </div>											
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-12 mb-5">
          
			     <form id = "form-student-post" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-select" id="default-select">
                        <label class="font-weight-bold" for="fullname">Preferred Tutor Qualification Level</label>
                        <select class="nice-select" name = "job_level" id="job_level">
                        <option value="" selected disabled hidden>Select Qualification</option>
                        <option value="foundation">Foundation</option>
                        <option value="diploma">Diploma</option>
                        <option value="degree">Degree</option>
                        <option value="master">Master</option>
                        </select>
                    </div>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-select" id="default-select">
                        <label class="font-weight-bold" for="fullname">Preferred Tutor Location of Campus</label>
                        <select class="nice-select" name = "job_campus" id="job_campus">
                            <option value="" selected disabled hidden>Select Location</option>
                            <option value="glen">UOW Malaysia KDU Utropolis, Glenmarie</option>
                            <option value="dj">UOW Malaysia KDU College Damansara Jaya</option>
                            <option value="george">UOW Malaysia KDU Georgetown, Penang</option>
                            <option value="batu">UOW Malaysia KDU Batu Kawan, Penang</option>
                        </select>
                    </div>
                    
                  </div>
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Subject To Learn</label>
                  <input type="text" name = "job_subject" id="job_subject" class="form-control" placeholder="eg. Computer Architecture">
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row form-group ">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Preferred Duration of Tuition</label>
                      <input type="text" name = "job_duration" id="job_duration" class="form-control" placeholder="eg. 2 hours (optional)">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Budget</label>
                      <input type="text" name = "job_budget" id="job_budget" class="form-control" placeholder="eg. RM60/hour (optional)">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row form-group ">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Phone Number</label>
                      <input type="text" name = "job_phone" id="job_phone" class="form-control" placeholder="eg. 012345678">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="fullname">Email Address</label>
                      <input type="text" name = "job_email" id="job_email" class="form-control" placeholder="eg. person@email.com">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Listing Description  </label>
                  <textarea class="single-textarea" name = "job_requirements" id="job_requirements" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-2">
                  <button type="submit" value="Post" class="ticker-btn  py-2 px-5">Post</button>
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>
		
		<?php include "footer.html" ?>
    <!-- End footer Area -->		

    <script src="js/vendor/jquery-2.2.4.min.js"></script>

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