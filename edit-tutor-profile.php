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
      <div class="container"  style="padding-top:5%">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="title">
              Edit Profile				
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
              <form id = "form_edit_profile_tutor" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Username</label>
                            <input type="text" name = "edit_t_username" id="edit_t_username" class="form-control" placeholder="enter new username">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Location of Campus</label>
                          <select class="nice-select" name = "edit_t_location" id="edit_t_location">
                              <option value="" selected disabled hidden>Select Location</option>
                              <option value="Glenmarie">UOW Malaysia KDU Utropolis, Glenmarie</option>
                              <option value="Damansara Jaya">UOW Malaysia KDU College Damansara Jaya</option>
                              <option value="Penang">UOW Malaysia KDU Georgetown, Penang</option>
                              <option value="Batu Kawan">UOW Malaysia KDU Batu Kawan, Penang</option>
                          </select>
                       </div>
                      
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="row form-group ">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Phone Number</label>
                        <input type="text" name = "edit_t_phone" id="edit_t_phone" class="form-control" placeholder="eg. 012345678">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Email Address</label>
                        <input type="text" name = "edit_t_email" id="edit_t_email" class="form-control" placeholder="eg. person@email.com">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="font-weight-bold" for="fullname">Course</label>
                          <input type="text" name = "edit_t_course" id="edit_t_course" class="form-control" placeholder="eg. Bachelor of Computer">
                        </div>
                      </div>
                  </div>
                </div>
                

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Description </label>
                    <textarea class="single-textarea" name = "edit_t_description" id="edit_t_description" cols="30" rows="5"></textarea>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Level of Teaching</label>
                          <select class="nice-select" name = "edit_t_level" id="edit_t_level">
                              <option value="" selected disabled hidden>Select Location</option>
                              <option value="Pre-U">Pre-U</option>
                              <option value="Diploma">Diploma</option>
                              <option value="Degree">Degree</option>
                          </select>
                       </div>
                      
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="row form-group ">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Preferred Time</label>
                        <input type="text" name = "edit_t_time" id="edit_t_time" class="form-control" placeholder="eg. Monday (3pm-5pm)">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Subjects </label>
                    <textarea class="single-textarea" name = "edit_t_subject" id="edit_t_subject" cols="30" rows="5" placeholder = "eg. Computer Architecture, Data structures..."></textarea>
                  </div>
                </div>  

                <div class="row">

                    <div class="col-md-6">
                        <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Preferred Rate</label>
                            <input type="text" name = "edit_t_rate" id="edit_t_rate" class="form-control" placeholder="eg. 50/hr">
                        </div>
                        </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Availability Status</label>
                          <select class="nice-select" name = "edit_t_status" id="edit_t_status">
                              <option value="" selected disabled hidden>Select Status</option>
                              <option value="Available">AVAILABLE</option>
                              <option value="Busy">BUSY</option>
                              <option value="Not Available">NOT AVAILABLE</option>
                          </select>
                       </div>
                      
                    </div>
                  </div>

                  
                </div>

                <div class="row form-group">
                  <div class="col-md-2">
                    <button type="submit" value="Post" class="ticker-btn  py-2 px-5">Submit Changes</button>
                    <!--<small id="after-message" class="form-text text-muted"></small>-->
                  </div>
                </div>


              </form>
            </div>
            <div class="container p-5 bg-white" id="message">
              <h2 class="text-center">Posted Successfully! Redirecting you to homepage in 5 seconds...</h2>
            </div>
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