
$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

    if(document.getElementById("default-select")){
          $('select').niceSelect();
    };

    if(document.getElementById("default-selects")){
          $('select').niceSelect();
    };   

    if(document.getElementById("default-selects2")){
          $('select').niceSelect();
    };        

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });


    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("lnr-chevron-up lnr-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });


    $(document).ready(function() {

    $('html, body').hide();

        if (window.location.hash) {

        setTimeout(function() {

        $('html, body').scrollTop(0).show();

        $('html, body').animate({

        scrollTop: $(window.location.hash).offset().top

        }, 1000)

        }, 0);

        }

        else {

        $('html, body').show();

        }

    });
  

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  })


    $('.active-relatedjob-carusel').owlCarousel({
        items:1,
        autoplay:true,
        loop:true,
        margin:30,
        dots: true
    });

    $('.active-review-carusel').owlCarousel({
        items:2,
        margin:30,
        autoplay:true,
        loop:true,
        dots: true,       
            responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            }
        }
    });

    $('.active-popular-post-carusel').owlCarousel({
        items:2,
        margin:30,
        autoplay:true,
        loop:true,
        dots: true,       
            responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
            },
            768: {
                items: 1,
            },
            961: {
                items: 2,
            }
        }
    });




    //  Start Google map 

            // When the window has finished loading create our google map below

            if(document.getElementById("map")){
            
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
    }


        $(document).ready(function() {
            $('#mc_embed_signup').find('form').ajaxChimp();
        });      


////////  Login/Register  ///////

// Get the modal
var loginModal = document.getElementById('id01');
var registerModal = document.getElementById('id02');
var infoModal = document.getElementById('id02-1');
var userTypeModal = document.getElementById('id02-2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == loginModal) {
      loginModal.style.display = "none";
      document.body.style.overflow = '';
    }
    else if (event.target == registerModal) {
      registerModal.style.display = "none";
      document.body.style.overflow = '';
    }
    else if (event.target == infoModal) {
      infoModal.style.display = "none";
      document.body.style.overflow = '';
    }
    else if (event.target == userTypeModal) {
      userTypeModal.style.display = "none";
      document.body.style.overflow = '';
    }
}


////////  Login/Register END ///////


// When the modal is shown, we want a fixed body
document.body.style.position = 'fixed';
document.body.style.top = `-${window.scrollY}px`;


// When the modal is hidden, we want to remain at the top of the scroll position
const scrollY = document.body.style.top;
document.body.style.position = '';
document.body.style.top = '';
window.scrollTo(0, parseInt(scrollY || '0') * -1);

// Tab
// var tutor = document.getElementById('nav-tutor-tab');
// var student = document.getElementById('nav-student-tab');

// window.onclick = function(event) {
//   if (event.target == tutor) {
//     tutor.style.borderRadius = "20px 0px 0px 0px";
//   }
//   else if (event.target == registerModal) {
//     registerModal.style.display = "none";
//     document.body.style.overflow = '';
//   }
// }

  $('#form_userType').on("submit",function() {

    var buttonValue = $('input[id=Tutor]').val();
    // var serialize = $(this).serialize();
    var value = $(this).serialize();
    $.ajax({
        url: "includes/process.php", //assuming that your html file is in the same folder as 
              //your php script. 
        type: "POST",
        data: "type="+buttonValue,
        dataType: "text",
        cache: false,
        async: true,
        error : function(jqXHR, exception) {
          if (jqXHR.status === 0) {
              alert('Not connected.\nPlease verify your network connection.');
          } else if (jqXHR.status === 404) {
              alert('The requested page not found. [404]');
          } else if (jqXHR.status === 500) {
              alert('Internal Server Error [500].');
          } else if (exception === 'parsererror') {
              alert('Requested JSON parse failed.');
          } else if (exception === 'timeout') {
              alert('Time out error.');
          } else if (exception === 'abort') {
              alert('Ajax request aborted.');
          } else {
              alert('Uncaught Error.\n' + jqXHR.responseText);
          }
      }
    }).done(function(response){
      console.log("get " + buttonValue);
      console.log("post " + response);
      alert(response);
      document.getElementById('id02-2').style.display='none'; 
      document.getElementById('id02').style.display='block';
    });

    // $.post('includes/process.php', {'type': buttonValue})
    //   .done(function(data){
    //     alert(data);
    //     document.getElementById('id02-2').style.display='none'; 
    //     document.getElementById('id02').style.display='block';
    //   });

  });

//login
var DOMAIN = "http://localhost/Mentoree";
  //user login
  $("#form_login").on("submit",function(){
      var email = $("#log_email");
      var pass = $("#log_password");
      var status = false;
      //red text border and error message if no email
      if (email.val() == "") {
          email.addClass("border-danger");
          $("#e_error").html("<span class= 'text-danger'>Please enter Email Address</span>");
          status = false;
      }else{
          email.removeClass("border-danger");
          $("#e_error").html("");
          status = true;
      }

      //red text border and error message is no password
      if (pass.val() == "") {
          pass.addClass("border-danger");
          $("#p_error").html("<span class= 'text-danger'>Please enter password</span>");
          status = false;
      }else{
          pass.removeClass("border-danger");
          $("#p_error").html("");
          status = true;
      }
        if(status){
          $.ajax({
              url : DOMAIN+"/includes/process.php",
                method : "POST",
                data : $('#form_login').serialize(),
                success : function(data){
                    //error msg if user not registered
                    if(data == "NOT_REGISTERED"){
                        email.addClass("border-danger");
                        $("#e_error").html("<span class = 'text-danger'> Email address is not registered</span>");
                    //error msg if password not matched
                    }else if(data == "PASSWORD_NOT_MATCHED"){
                        pass.addClass("border-danger");
                        $("#p_error").html("<span class = 'text-danger'> Password did not matched</span>");
                    }else if(data == 1){
                        //console.log(data);
                        window.location.href = DOMAIN+"/home.php?page=1"
                    }else{
                        console.log(data);
                    }
                      
                }
          });
        }   
    });

    

    //registration
    $("#form_register").on("submit",function(){

        var username = $("#reg_username");
        var email = $("#reg_email");
        var pass = $("#reg_password");
        var confirmPass = $("#reg_confirmPass");
        var status = true;

      if (username.val() == "") {
          username.addClass("border-danger");
          $("#r_user_error").html("<span class= 'text-danger'>Please enter an username</span>");
          status = false;
      }else{
          username.removeClass("border-danger");
          $("#r_user_error").html("");
          status = true;
      }

      if (email.val() == "") {
        email.addClass("border-danger");
        $("#r_email_error").html("<span class= 'text-danger'>Please enter Email Address</span>");
        status = false;
      }else{
        email.removeClass("border-danger");
        $("#r_email_error").html("");
        status = true;
      }

      if (pass.val() == "") {
          pass.addClass("border-danger");
          $("#r_pass_error").html("<span class= 'text-danger'>Please enter password</span>");
          status = false;
      }else{
          pass.removeClass("border-danger");
          $("#r_pass_error").html("");
          status = true;
      }

      if (confirmPass.val() == "") {
        confirmPass.addClass("border-danger");
        $("#r_confirm_pass_error").html("<span class= 'text-danger'>Please enter your password again</span>");
        status = false;
      }else{

        if(pass.val() != confirmPass.val()){
          confirmPass.addClass("border-danger");
          $("#r_confirm_pass_error").html("<span class= 'text-danger'>Password does not match</span>");
          status = false;
        }else{
          confirmPass.removeClass("border-danger");
          $("#r_confirm_pass_error").html("");
          status = true;
        }
      }
      
        if(status){
          $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#form_register").serialize(),
            success : function(data){
              if(data == "EMAIL_ALREADY_EXISTS"){
                email.addClass("border-danger");
                $("#r_email_error").html("<span class= 'text-danger'>Email is taken by another user</span>");
              }else{
                // alert(data)
                document.getElementById('id02').style.display='none'; 
                document.getElementById('id02-1').style.display='block';
                // test your git
              }
            }
          })
        }
    })

    //job listing upload 
    $("#form_jobListing").on("submit",function(){

      var status = true;

      if(status){
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#form_jobListing").serialize(),
          success : function(data){
            alert(data);
          }
        })
      }

    })
 });

// function submit_userType(){
//   var type=$("input[id=Tutor]").val();

//   var dataTosend='type='+type;

//   $.ajax({
//     url: 'test.php',
//     type: "POST",
//     data: {'type': type},
//     dataType: 'text',
//     async: true,
//     success: function (data) {
//       alert(data);
//       document.getElementById('id02-2').style.display='none'; 
//       document.getElementById('id02').style.display='block';
//     },
//   });
// }
