<?php
    $conn = mysqli_connect("localhost", "root", "", "mentoree");

    $query = "SELECT * FROM users WHERE users.id=".$_SESSION['userid']."";
    $query_location = "SELECT DISTINCT location FROM users";

    $run  = mysqli_query($conn, $query);
    $run_loc = mysqli_query($conn, $query_location);

    while($rs = mysqli_fetch_array($run)) {
        ?>
            <form id = "form_edit_profile" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" name = "edit_username" id="edit_username" class="form-control" placeholder="enter new username" value="<?php echo $rs['username'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Location of Campus</label>
                          <select class="nice-select" name = "edit_location" id="edit_location">
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
                        <input type="text" name = "edit_phone" id="edit_phone" class="form-control" placeholder="eg. 012345678" value="<?php echo $rs['phone'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Email Address</label>
                        <input type="text" name = "edit_email" id="edit_email" class="form-control" placeholder="eg. person@email.com"value="<?php echo $rs['email'] ?>">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="font-weight-bold" for="fullname">Course</label>
                          <input type="text" name = "edit_course" id="edit_course" class="form-control" placeholder="eg. Bachelor of Computer" value="<?php echo $rs['course'] ?>">
                        </div>
                      </div>
                  </div>
                </div>
                

                <!-- <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Description </label>
                    <textarea class="single-textarea" name = "edit_description" id="edit_description" cols="30" rows="5"></textarea>
                  </div>
                </div> -->

                <div class="row form-group">
                  <div class="col-md-2">
                    <button type="submit" value="Post" class="ticker-btn  py-2 px-5" style="width:200px;height:40px">Submit Changes</button>
                    <!--<small id="after-message" class="form-text text-muted"></small>-->
                  </div>
                </div>


              </form>
        <?php
        // if($count1 >= 5){
        // echo $rs['id'].' -> '.$rs['first_name'].'<br>';
    }

        ?>
            <div id="id05" class="modal">
                <div class="model-content card mx-auto" style="margin-top:1%; margin-bottom:0">
                            
                    <div class="card-body" id="view-profile">
                        
                         
                    </div>


                </div>
            </div>
        <?php
    
    ?>
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

        function like_tutor(profileID){
            $.ajax({
                url: 'includes/process.php',
                type: 'POST',
                data: {
                    'profileid':profileID
                },
                success: function(data){
                    alert(data);
                }
            });
        }

        function view_profile(profileID){
            $.ajax({
                url: 'view-profile.php',
                type: 'POST',
                data: {
                    'profileid':profileID
                },
                success: function(data){
                    $('#view-profile').html(data);
                    document.getElementById('id05').style.display='block';
                }
            });
        }
    </script>
    <?php

    
    // }
?>