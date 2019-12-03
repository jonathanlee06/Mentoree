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
        <!-- <link rel="stylesheet" href="css/bootstrap-tagsinput.css"> -->
        <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <?php include "html/nav.html"; ?>

    <?php include "html/modal.html"; ?>

    <div class="short-banner-area relative" id="post">	
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="title">
              Edit Profile				
            </h1>	
            <p><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
          </div>											
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 3%;">
        <div class="row m-y-2">
            <!-- edit form column -->
            <div class="col-lg-4 text-lg-center">
            <div class="empty-space marg-lg-b200 marg-sm-b30"></div>
            </div>
            <div class="col-lg-8">
                <!-- <div class="alert alert-info alert-dismissable"> <a class="panel-close close" data-dismiss="alert">×</a>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div> -->
            </div>
            <div class="col-lg-8 push-lg-4 personal-info">
                <form role="form">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;"> First name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="Jane" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Last name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="Bishop" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" value="email@gmail.com" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Company</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Website</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="url" value="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="" placeholder="Street" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;"></label>
                        <div class="col-lg-6">
                            <input class="form-control" type="text" value="" placeholder="City" />
                        </div>
                        <div class="col-lg-3">
                            <input class="form-control" type="text" value="" placeholder="State" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Time Zone</label>
                        <div class="col-lg-9 default-select">
                            <select id="user_time_zone" class="form-control" size="0">
                                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                <option value="Alaska">(GMT-09:00) Alaska</option>
                                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                <option value="Arizona">(GMT-07:00) Arizona</option>
                                <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                <option value="Central Time (US &amp; Canada)"
                                selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Username</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="janeuser" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" value="11111122333" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;">Confirm password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" value="11111122333" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label" style="margin-top:2%;"></label>
                        <div class="col-lg-9">
                            <input type="reset" class="btn btn-secondary" value="Cancel" />
                            <input type="button" class="btn btn-primary" value="Save Changes" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 pull-lg-8 text-xs-center" style="margin-left:2%;">
                    <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar" />
                    <h6 class="m-t-2">Upload a different photo</h6>
                    <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                    </label>
            </div>
        </div>
    </div>

    <?php include "html/footer.html"; ?>		

    <script src="js/vendor/jquery-2.2.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>			
    <script src="js/easing.min.js"></script>			
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>	
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>			
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>			
    <script src="js/parallax.min.js"></script>		
    <script src="js/mail-script.js"></script>	
    <!-- <script src="js/tagsinput.js"></script> -->
    <script src="js/main.js"></script>

</body>

</html>