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
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Subject To Learn</label>
                  <input type="text" name = "job_subject" id="job_subject" class="form-control" placeholder="eg. Computer Architecture">
                  <small id="subject_error" class="form-text text-muted text-center"></small>
                </div>
              </div>
           
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-select" id="default-select">
                        <label class="font-weight-bold" for="fullname">Preferred Tutor Qualification Level</label>
                        <select class="nice-select" name = "job_level" id="job_level">
                        <option value="" selected disabled hidden>Select Qualification</option>
                        <option value="Pre-U">Pre-U/Foundation</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Degree">Degree</option>
                        <option value="Master">Master</option>
                        </select>
                    </div>
                    <small id="level_error" class="form-text text-muted text-center"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row form-group mb-5">
                    <div class="col-md-12">
                    <label class="font-weight-bold" for="fullname">Budget (RM)</label>
                    </div>
                    <div class="col-md-12 mb-3 input-group">
                      <div class="input-group-prepend" style="height:100%;padding-top:8px;">
                        <span class="input-group-text" id="budget_label">RM</span>
                      </div>
                      <input type="number" name = "job_budget" id="job_budget" class="form-control" placeholder="e.g. 10" aria-describedby="budget_label">
                      <div class="input-group-append" style="height:100%;padding-top:8px;">
                        <span class="input-group-text" id="budget_label">Per Session</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <small id="budget_error" class="form-text text-muted text-center"></small>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="row form-group mb-5">
                    <div class="col-md-12">
                    <label class="font-weight-bold" for="fullname">Preferred Tuition Frequency</label>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-0 input-group">
                      <input type="number" name = "job_freq" id="job_freq" class="form-control" placeholder="eg. 2">
                      <div class="input-group-append" style="height:100%;padding-top:8px;">
                        <span class="input-group-text" id="budget_label">Session(s) Per Week</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <small id="freq_error" class="form-text text-muted text-center"></small>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row form-group ">
                    <div class="col-md-12">
                    <label class="font-weight-bold" for="fullname">Preferred Duration of Tuition</label>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-0 input-group">
                      
                      <input type="number" name = "job_duration" id="job_duration" class="form-control" placeholder="eg. 3">
                      <div class="input-group-append" style="height:100%;padding-top:8px;">
                        <span class="input-group-text" id="budget_label">Hour(s) Per Session</span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <small id="duration_error" class="form-text text-muted text-center"></small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Listing Description  </label>
                  <textarea class="single-textarea" name = "job_requirements" id="job_requirements" cols="30" rows="10"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-2">
                  <button type="submit" value="Post" class="ticker-btn  py-2 px-5" style="height:40px">Post</button>
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
		
		<?php include "html/footer.html" ?>
    <!-- End footer Area -->		

    <script src="js/vendor/jquery-2.2.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
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