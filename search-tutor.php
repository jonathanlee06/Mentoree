

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Mentoree</title>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
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

        <?php include "nav-home.php"; ?>


        <!-- start banner Area -->
        <div class="short-banner-area relative" id="post">	
        <div class="container" style="margin-bottom:0; padding-bottom:0;">
            <div class="row d-flex align-items-center justify-content-center" style="padding-top:5%">
            <div class="about-content col-lg-12">
                <h1 class="title">
                Search Tutor				
                </h1>
                <div class="col-md-12">
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form class="serach-form-area" id="search-tutor" method="POST" onsubmit="return false">
                            <div class="row justify-content-center form-wrap">
                                <div class="col-lg-6 form-cols">
                                    <input type="text" class="form-control" name="search" id="search" placeholder="what are you looking for student?">
                                    <small id="s_error" class="form-text text-muted text-center"></small>
                                </div>
                                <div class="col-lg-4 form-cols">
                                    <div class="default-select" id="default-selects">
                                        <select name="area" id="area">
                                            <option value="" selected hidden disabled style="font-weight:bold">Select Area</option>
                                            <option value="Glenmarie">Glenmarie</option>
                                            <option value="Damansara Jaya">Damansara Jaya</option>
                                            <option value="Penang">Penang</option>
                                            <option value="Batu Kawan">Batu Kawan</option>
                                        </select>
                                    </div>
                                    <small id="a_error" class="form-text text-muted text-center"></small>
                                </div>
                                <div class="col-lg-2 form-cols">
                                    <button type="submit" class="ticker-btn-search">
                                        <span class="lnr lnr-magnifier" id="mag" style="color:white"></span> Search
                                    </button>
                                </div>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>	
            </div>											
            </div>
        </div>
        </div>
        <!-- End banner Area -->	
        
        <!-- Start post Area -->
        <section class="post-area">
            <div class="container">
                <div class="row justify-content-center d-flex">
                <!-- <div class="col-lg-4 sidebar">
                        <div class="single-slidebar">
                            <h4>Filter by Location</h4>
                            <div class="list-group">
                                <h3>Brand</h3>
                                <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                <div class="list-group-item">
                                    <label><input type="radio" name="selector" class="brand" value="Male"  > Male</label>
                                </div>
                                <div class="list-group-item">
                                    <label><input type="radio" name="selector" class="brand" value="Female"  > Female</label>
                                </div>
                                <div class="list-group-item">
                                    <label><input type="radio" name="selector" class="brand" value="No Preference"  > No Preference</label>
                                </div>
                                </div>
                            </div>

                        </div>						

                    </div> -->
                <div class="col-lg-12 post-list" id="tutor-list">
                    
                    <!-- Start PHP Dynamic Post-->
                    <?php include "tutor-listings.php" ?>
                    <!-- End PHP Dynamic Post-->	

                </div>
                    
                </div>
            </div>	
        </section>

        

        <!-- End post Area -->		
    
        <!-- start footer Area -->		
        <?php include "footer.html" ?>
        <!-- End footer Area -->
        
        <!-- <script>
            $(document).ready(function(){

                // filter_data();

                function filter_data()
                {
                    // $('.filter_data').html('<div id="loading" style="" ></div>');
                    // var action = 'fetch_data';
                    // var minimum_price = $('#hidden_minimum_price').val();
                    // var maximum_price = $('#hidden_maximum_price').val();
                    // var brand = get_filter('brand');
                    var ram = get_filter('ram');
                    console.log(ram);
                    // var storage = get_filter('storage');
                    $.ajax({
                        url:"tutor-listings.php",
                        method:"POST",
                        data:{ram:ram},
                        success:function(data){
                            // $('.filter_data').html(data);
                            console.log(data);
                        }
                    });
                }

                function get_filter(class_name)
                {
                    var filter = [];
                    $('.'+class_name+':checked').each(function(){
                        filter.push($(this).val());
                    });
                    return filter;
                }

                $('#checkbox').change(function(){
                    if($(this).is(":checked")) {
                        console.log("clicked");
                    }
                    
                    console.log("clicked");
                    filter_data();
                });

                
            });
        </script> -->

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



