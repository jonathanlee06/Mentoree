<?php
    $clearURL = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $host = $clearURL["host"];
    $user = $clearURL["user"];
    $pass = $clearURL["pass"];
    $db = substr($clearURL["path"],1);
    $conn = mysqli_connect($host, $user, $pass, $db);

    $query = "SELECT * FROM users WHERE users.id=".$_SESSION['userid']."";
    $query_location = "SELECT DISTINCT location FROM users";

    $run  = mysqli_query($conn, $query);
    $run_loc = mysqli_query($conn, $query_location);

    while($rs = mysqli_fetch_array($run)) {
        ?>
            <form id = "form_edit_profile_tutor" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Username</label>
                            <input type="text" name = "edit_t_username" id="edit_t_username" class="form-control" placeholder="'Enter new username'" value="<?php echo $rs['username'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Location of Campus</label>
                          <select class="nice-select" name = "edit_t_location" id="edit_t_location">
                              <option value="" selected disabled hidden>Select Location</option>
                              <?php
                                while($rs_loc = mysqli_fetch_array($run_loc)){
                                    ?>
                                        <option value="<?php echo $rs_loc['location'] ?>"><?php echo $rs_loc['location'] ?></option>
                                    <?php
                                }
                              ?>
                              <!-- <option value="UOW Malaysia KDU Utropolis, Glenmarie">UOW Malaysia KDU Utropolis, Glenmarie</option>
                              <option value="UOW Malaysia KDU College Damansara Jaya">UOW Malaysia KDU College Damansara Jaya</option>
                              <option value="UOW Malaysia KDU Georgetown, Penang">UOW Malaysia KDU Georgetown, Penang</option>
                              <option value="UOW Malaysia KDU Batu Kawan, Penang">UOW Malaysia KDU Batu Kawan, Penang</option> -->
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
                        <input type="text" name = "edit_t_phone" id="edit_t_phone" class="form-control" placeholder="eg. 012345678" value="<?php echo $rs['phone'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row form-group mb-5">
                      <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Email Address</label>
                        <input type="text" name = "edit_t_email" id="edit_t_email" class="form-control" placeholder="eg. person@email.com" value="<?php echo $rs['email'] ?>">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                          <label class="font-weight-bold" for="fullname">Course</label>
                          <input type="text" name = "edit_t_course" id="edit_t_course" class="form-control" placeholder="eg. Bachelor of Computer" value="<?php echo $rs['course'] ?>">
                        </div>
                      </div>
                  </div>
                </div>
                

                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Description </label>
                    <textarea class="single-textarea" name = "edit_t_description" id="edit_t_description" cols="30" rows="5"><?php echo $rs['description'] ?></textarea>
                  </div>
                </div>

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
                url: 'php/view-profile.php',
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