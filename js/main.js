
$(document).ready(function(){
  $('#nav-home').attr('style','color:white;');
  $('#nav-home a').attr('style','color:white;');
  $('#drop-bar a').attr('style','color:black;');
  $('.post-list').show();
  $("#message").hide();
  $("#form-tutor-post").show();

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
      $('#logo-img').attr('src','img/web-logo-4.png');
      $('#nav-home').attr('style','color:black;');
      $('#nav-home a').attr('style','color:black;')
    } else {
      $('#header').removeClass('header-scrolled');
      $('#logo-img').attr('src','img/web-logo-2.png');
      $('#nav-home').attr('style','color:white;');
      $('#nav-home a').attr('style','color:white;')
      $('#drop-bar a').attr('style','color:black;')
    }
  }) 


////////  Login/Register  ///////

// Get the modal
var loginModal = document.getElementById('id01');
var registerModal = document.getElementById('id02');
var infoModal = document.getElementById('id02-1');
var deleteModal = document.getElementById('id03');
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
    else if (event.target == deleteModal) {
      deleteModal.style.display = "none";
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
var DOMAIN = "https://mentoree.herokuapp.com";
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
              url : "/includes/process.php",
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
                    }else if(data == "Robot Verification Failed"){
                      $("#v_error").html("<span class = 'text-danger'> Please verify that you are not a robot.</span>");
                    }else if(data == 1){
                        //console.log(data);
                        grecaptcha.reset();
                        window.location.href = "/home.php"
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
        var phone = $("#reg_phone");
        var course = $("#reg_course");
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

      if (phone.val() == "") {
        phone.addClass("border-danger");
        $("#r_phone_error").html("<span class= 'text-danger'>Please enter phone number</span>");
        status = false;
      }else{
        phone.removeClass("border-danger");
        $("#r_phone_error").html("");
        status = true;
      }

      if (course.val() == "") {
        course.addClass("border-danger");
        $("#r_course_error").html("<span class= 'text-danger'>Please enter the course you are taking</span>");
        status = false;
      }else{
        phone.removeClass("border-danger");
        $("#r_course_error").html("");
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
              }else if(data == "Robot Verification Failed"){
                $("#vr_error").html("<span class = 'text-danger'> Please verify that you are not a robot.</span>");
              }else{
                //alert(data);
                grecaptcha.reset();
                document.getElementById('id02').style.display='none'; 
                document.getElementById('id01-1').style.display='block';
                // test your git
              }
            }
          })
        }
    })

    var number = 5;
    function countDown() {
      setTimeout(countDown, 500);
      $("#message").html("<h2 class='text-center'>Posted Successfully! Redirecting you to homepage in " + number + " seconds...</h2>");
      number--;

      if(number < 0){
        window.location = "home.php"
        number = 0;
      }
    }

    //job listing upload 
    $("#form-tutor-post").on("submit",function(){

      var status = true;

      if(status){
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#form_jobListing").serialize(),
          success : function(data){
            $("#form-tutor-post").hide();
            $("#message").show();
            countDown();
          }
        })
      }

    });

    //job listing upload 
    $("#form-student-post").on("submit",function(){
      var subject = $("#job_subject");
      var level= $("#job_level");
      var budget = $("#job_budget");
      var freq = $("#job_freq");
      var duration = $("#job_duration");
      var status = true;

      if (subject.val() == "") {
          subject.addClass("border-danger");
          $("#subject_error").html("<span class= 'text-danger'>Please enter at least one subject</span>");
          status = false;
      }else{
          subject.removeClass("border-danger");
          $("#subject_error").html("");
          status = true;
      }

      if (level.val() == "") {
        level.addClass("border-danger");
        $("#level_error").html("<span class= 'text-danger'>Please select qualification level</span>");
        status = false;
      }else{
          level.removeClass("border-danger");
          $("#level_error").html("");
          status = true;
      }

      if (budget.val() == "") {
        budget.addClass("border-danger");
        $("#budget_error").html("<span class= 'text-danger'>Please enter valid budget</span>");
        status = false;
      }else{
        budget.removeClass("border-danger");
        $("#budget_error").html("");
        status = true;
      }

      if (freq.val() == "") {
        freq.addClass("border-danger");
        $("#freq_error").html("<span class= 'text-danger'>Please enter valid frequency</span>");
        status = false;
      }else{
        freq.removeClass("border-danger");
        $("#freq_error").html("");
        status = true;
      }

      if (duration.val() == "") {
        duration.addClass("border-danger");
        $("#duration_error").html("<span class= 'text-danger'>Please enter valid duration</span>");
        status = false;
      }else{
        duration.removeClass("border-danger");
        $("#duration_error").html("");
        status = true;
      }

      

      if(status){
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#form-student-post").serialize(),
          success : function(data){
            // alert(data)
            $("#form-student-post").hide();
            $("#message").show();
            countDown();
          }
        })
      }

    });

    // Checkboxes
    function filter_data()
    {
        $('.post-list').hide();
        $('.filter').show();
        $('.filter').html('<div id="loading" style="text-align:center; background: url("img/elements/loader.gif") no-repeat center; height: 150px;" ></div>');
        // var action = 'fetch_data';
        // var minimum_price = $('#hidden_minimum_price').val();
        // var maximum_price = $('#hidden_maximum_price').val();
        var level = get_filter('level');
        var ram = get_filter('location');
        console.log(ram);
        // var storage = get_filter('storage');
        $.ajax({
            url:"php/filter-tutor-listings.php",
            method:"POST",
            data:{ram:ram,level:level},
            success:function(data){

              $('.filter').html(data);
                
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

    $("input[type=radio]").change(function(){
        if($(this).is(":checked")) {
          
          filter_data();
        }

        
    });

    $("input[type=checkbox]").click(function(){
      
        filter_data();
      

      
    });


    // SEARCH TUTOR
    $("#search-tutor").on("submit",function(){
      var query_type = $("#search");
      var area = $('#area option:selected').val()
      //red text border and error message if no email
      if (query_type.val() == "") {
          query_type.addClass("border-danger");
          $("#s_error").html("<span class= 'text-danger'>Please enter search query</span>");
          status = false;
      }else{
          // email.removeClass("border-danger");
          // $("#e_error").html("");
          status = true;
      }

      //red text border and error message is no password
      if (area == "") {
          $("#a_error").html("<span class= 'text-danger' style='margin-top:10px'>Please Select Area</span>");
          status = false;
      }else{
          // pass.removeClass("border-danger");
          // $("#p_error").html("");
          status = true;
      }

      if(status){
        $.ajax({
            url : "php/tutor-listings.php",
              method : "POST",
              data : $('#search-tutor').serialize(),
              async: true,
              success : function(data){
                $('#tutor-list').html(data);
                console.log(data);
              }
        });
      }   
    });

    // Search Student
    $("#search-student").on("submit",function(){
      var query_type = $("#search");
      var area = $('#area option:selected').val()
      //red text border and error message if no email
      if (query_type.val() == "") {
          query_type.addClass("border-danger");
          $("#s_error").html("<span class= 'text-danger'>Please enter search query</span>");
          status = false;
          alert("You Noob");
      }else{
          // email.removeClass("border-danger");
          // $("#e_error").html("");
          status = true;
      }

      //red text border and error message is no password
      if (area == "") {
          alert("You Noob area");
          status = false;
      }else{
          // pass.removeClass("border-danger");
          // $("#p_error").html("");
          status = true;
      }

      if(status){
        $.ajax({
            url : "php/student-listings.php",
              method : "POST",
              data : $('#search-student').serialize(),
              async: true,
              success : function(data){
                $('#student-list').html(data);
                console.log(data);
              }
        });
      }   
    });
    

    // LIKE SYSTEM
    // $('.like').on('click', function(){
    //   if(! $('.like').parent().data('bookmark')){
    //     $('.like').parent().data('bookmark', 1);
    //     $('.like').html('<i class="fa fa-heart" aria-hidden="true"></i>');
    //     $('.like').children('.fa-heart').addClass('animate-like');
    //     var postid = $('.like').data("id");
    //     // var postid = get_filter_id('like');

    //     $.ajax({
    //       url: 'includes/process.php',
    //       type: 'POST',
    //       data: {
    //         'postid': postid
    //       },
    //       success: function(data){
    //         alert(data);
    //         alert("Liked")
    //       }
    //     });
    //   }

      
    // });
    $('#like-form').on('submit', function() {
      if(! $('#like').parent().data('bookmark')){
        $('#like').parent().data('bookmark', 1);
        $('#like').html('<i class="fa fa-heart" aria-hidden="true"></i>');
        $('#like').children('.fa-heart').addClass('animate-like');
        var postid = $('#like').val();
        console.log(postid);
        // var postid = get_filter_id('like');

        $.ajax({
          url: 'includes/process.php',
          type: 'POST',
          data: $('#like-form').serialize(),
          success: function(data){
            alert(data);
            alert("Liked")
          }
        });
      }
    });

    function get_filter_id(class_name)
    {
        var filter = "";
        $('.'+class_name+'').each(function(){
            filter = ($(this).val());
        });
        return filter;
    }

    function call_name(nama){
      alert(nama);
    }

    $('#view-profile').on('click', function() {
      
    });

    $('#form_edit_profile').on('submit', function() {
        $.ajax({
          url: 'includes/process.php',
          type: 'POST',
          data: $('#form_edit_profile').serialize(),
          success: function(data){
            alert(data);
            window.location.href='home.php';
            //alert("SUCCESS");
          }
        });
    });

    $('#form_edit_profile_tutor').on('submit', function() {
      $.ajax({
        url: 'includes/process.php',
        type: 'POST',
        data: $('#form_edit_profile_tutor').serialize(),
        success: function(data){
          alert(data);
          windows.location ='home.php';
        }
      });
  });

  $('#form_add_listing_tutor').on('submit', function() {
    $.ajax({
      url: 'includes/process.php',
      type: 'POST',
      data: $('#form_add_listing_tutor').serialize(),
      success: function(data){
        alert(data);
        windows.location.href='home.php';
      }
    });
});

  $('#form_edit_listing_tutor').on('submit', function() {
    $.ajax({
      url: 'includes/process.php',
      type: 'POST',
      data: $('#form_edit_listing_tutor').serialize(),
      success: function(data){
        alert(data);
        windows.location.href='home.php';
      }
    });
  });
  
 });

