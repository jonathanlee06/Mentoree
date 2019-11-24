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
        
        <style>
            .side {
                position: fixed;
                width: 300px;
                z-index: 1;
                margin-top: 8%;
            }

            .profile-sec {
                background-color: #F9FCFF;
                border-radius: 30px;
                box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
                padding: 10%;
            }

            .profile-sec-list {
                margin-left: 350px;
                padding: 30px;
                /* background-color: rgb(243, 243, 243); */
                background-color: #F9FCFF;
                box-shadow: 0px 3px 10px rgba(0, 0, 0, .1);
                border-radius: 30px;
                margin-bottom: 30px;
            }

            .list-sec {
                margin-top: 18%;
                height: 400px;
                overflow-y: scroll;
            }

            .selection-tab {
                margin-top: 7%;
                padding-top: 2%;
                padding-bottom: 1%;
                margin-left: 170px;
                position: fixed;
                z-index: 1;
                background-color: white;
            }

        </style>

    </head>
    <body>
        
        <!-- <h2>Modal Login Form</h2> -->

        <!-- <button onclick="document.getElementById('form_login').style.display='block'" style="width:auto;">Login</button> -->
        
        <?php session_start(); 
        
            if(!isset($_SESSION['username'])){
                header("Location: index.php");
            }	
        ?>

        <?php include "nav-dashboard.php"; ?>

        <?php include "modal.html"; ?>
        
        <!-- Start post Area -->
        <section class="post-area">
            <div class="col-md-12 selection-tab">
                <nav>
                    <div class="nav works-nav-tabs" id="nav-tab" role="tablist">
                        <a class="list-nav-item nav-link text-center active" id="nav-mylisting-pane" data-toggle="tab" href="#nav-mylist" role="tab" aria-controls="nav-tutor" aria-selected="true" style="font-size:18px">My Listings</a>
                        <a class="list-nav-item nav-link text-center" id="nav-favlisting-pane" data-toggle="tab" href="#nav-favlist" role="tab" aria-controls="nav-student" aria-selected="false" style="font-size:18px">Favorite Listings</a>
                    </div>
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="side">
                        <div class="profile-sec d-flex flex-row justify-content-start align-items-start">
                            <div class="details col-lg-12">
                                <div class="row">
                                <!-- <div class="col-1"></div> -->
                                <div class="col-md-12 text-center" style="padding-left:5%">
                                        <div class="thumb text-center">
                                            <img src="img/profile/user.png" alt="">
                                        </div>
                                        <br>
                                        <h3><?php echo $_SESSION['username'] ?></h3>
                                        
                                        <p><?php echo $_SESSION['useremail'] ?></p>
                                        <button class="ticker-btn" style="width:auto">
                                            Edit Profile
                                        </button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="container py-3 px-3 px-sm-0 align-items-center justify-content-center  list-sec" id="nav-tabContent" style="padding-bottom:5%">
                            <div class="fade show active" id="nav-mylist" role="tabpanel" aria-labelledby="nav-home-tab">
                              
                                <?php include "dashboard-listings.php" ?>
                            </div>
                            <div class="fade" id="nav-favlist" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <?php include "favorite.php" ?>  
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            

            
        </section>
        <!-- End post Area -->	

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



