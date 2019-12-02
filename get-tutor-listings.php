<?php
    $conn = mysqli_connect("localhost", "root", "", "mentoree");

    $query = "SELECT * FROM tutors,users WHERE tutors.tutorID = users.id AND users.id=".$_SESSION['userid']."";
    $query_location = "SELECT DISTINCT location FROM users";

    $run  = mysqli_query($conn, $query);
    $run_loc = mysqli_query($conn, $query_location);

    if($rs = mysqli_fetch_array($run)) {
        ?>
            <form id = "form_edit_listing_tutor" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">

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
                        <input type="text" name = "edit_t_time" id="edit_t_time" class="form-control" placeholder="eg. Monday (3pm-5pm)" value="<?php echo $rs['time'] ?>">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Subjects </label>
                    <textarea class="single-textarea" name = "edit_t_subject" id="edit_t_subject" cols="30" rows="5" placeholder = "eg. Computer Architecture, Data structures..."><?php echo $rs['subjects'] ?></textarea>
                  </div>
                </div>  

                <div class="row">

                    <div class="col-md-6">
                        <div class="row form-group ">
                          <div class="col-md-12">
                            <label class="font-weight-bold" for="fullname">Preferred Rate</label>
                          </div>
                          <div class="col-md-12 mb-3 mb-md-0 input-group">
                            <div class="input-group-prepend" style="height:100%;padding-top:8px;">
                              <span class="input-group-text" id="budget_label">RM</span>
                            </div>
                            <input type="text" name = "edit_t_rate" id="edit_t_rate" class="form-control" placeholder="eg. 50/hr" value="<?php echo $rs['rate'] ?>">
                            <div class="input-group-append" style="height:100%;padding-top:8px;">
                              <span class="input-group-text" id="budget_label">Per Hour</span>
                            </div>
                          </div>
                        </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Availability Status</label>
                          <select class="nice-select" name = "edit_t_status" id="edit_t_status">
                              <option value="" selected disabled hidden>Select Status</option>
                              <option value="AVAILABLE">AVAILABLE</option>
                              <option value="BUSY">BUSY</option>
                              <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                          </select>
                       </div>
                      
                    </div>
                  </div>

                  
                </div>

                <!-- <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Description </label>
                    <textarea class="single-textarea" name = "edit_t_description" id="edit_t_description" cols="30" rows="5" placeholder = "eg. I can help on..."><?php echo $rs['description'] ?></textarea>
                  </div>
                </div>  -->

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
    else {
      ?>
            <form id = "form_add_listing_tutor" onsubmit = "return false" method = "POST" action="#" class="p-5 bg-white">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Select Level of Teaching</label>
                          <select class="nice-select" name = "add_t_level" id="add_t_level">
                              <option value="" selected disabled hidden>Select Level of Teaching</option>
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
                        <input type="text" name = "add_t_time" id="add_t_time" class="form-control" placeholder="eg. Monday (3pm-5pm)">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Subjects </label>
                    <textarea class="single-textarea" name = "add_t_subject" id="add_t_subject" cols="30" rows="5" placeholder = "eg. Computer Architecture, Data structures..."></textarea>
                  </div>
                </div>  

                <div class="row">

                    <div class="col-md-6">
                        <div class="row form-group ">
                        <div class="col-md-12">
                          <label class="font-weight-bold" for="fullname">Preferred Rate (RM)</label>
                        </div>
                        <div class="col-md-12 mb-3 mb-md-0 input-group">
                          <div class="input-group-prepend" style="height:100%;padding-top:8px;">
                            <span class="input-group-text" id="budget_label">RM</span>
                          </div>
                          <input type="text" name = "add_t_rate" id="add_t_rate" class="form-control" placeholder="eg. 50">
                          <div class="input-group-append" style="height:100%;padding-top:8px;">
                            <span class="input-group-text" id="budget_label">Per Hour</span>
                          </div>
                        </div>
                        </div>
                    </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-select" id="default-select">
                          <label class="font-weight-bold" for="fullname">Availability Status</label>
                          <select class="nice-select" name = "add_t_status" id="add_t_status">
                              <option value="" selected disabled hidden>Select Status</option>
                              <option value="AVAILABLE">AVAILABLE</option>
                              <option value="BUSY">BUSY</option>
                              <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                          </select>
                       </div>
                      
                    </div>
                  </div>

                  
                </div>

                <!-- <div class="row form-group">
                  <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname">Description </label>
                    <textarea class="single-textarea" name = "add_t_description" id="add_t_description" cols="30" rows="5" placeholder = "eg. I can help on..."></textarea>
                  </div>
                </div>  -->

                <div class="row form-group">
                  <div class="col-md-2">
                    <button type="submit" value="Post" class="ticker-btn  py-2 px-5" style="width:200px;height:40px">Submit</button>
                    <!--<small id="after-message" class="form-text text-muted"></small>-->
                  </div>
                </div>


              </form>
        <?php
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