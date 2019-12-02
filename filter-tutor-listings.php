<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "mentoree");


    if($_SESSION['usertype'] == 'Student'){
        $query = "SELECT * FROM tutors,users WHERE tutors.tutorID = users.id ";
        $query_row = "SELECT * FROM tutors,users WHERE tutors.tutorID = users.id ";

        if(isset($_POST["ram"]))
        {   
            // echo $_POST["ram"];
            $ram_filter = implode("','", $_POST["ram"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
            AND users.location LIKE ('%".$ram_filter."%')
            ";
        }

        if(isset($_POST["level"]))
        {   
            // echo $_POST["ram"];
            $level_filter = implode("','", $_POST["level"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
             AND tutors.level_of_teaching IN('".$level_filter."')
            ";
        }

        $query .= " ORDER BY profileID DESC;";
        $row_num = mysqli_query($conn, $query_row);
        $count = mysqli_num_rows($row_num);
        $num_of_rows = ceil($count/5);

        $run  = mysqli_query($conn, $query);
        $count1 = mysqli_num_rows($run);
        $num_of_rows1 = ceil($count1/5);

        if($count1 >= 1){
            while($rs = mysqli_fetch_array($run)) {
                ?>
                <div class="single-post d-flex flex-row justify-content-start align-items-start">
                    
                    <div class="details col-lg-12">
                        <div class="row">
                            <!-- <div class="col-1"></div> -->
                            <div class="col-md-3 text-center" style="padding-left:2%;padding-right:2%">
                                <div class="thumb justify-content-between">
                                    <img src="img/profile/user.png" alt="">
                                </div>
                                <br>
                                <button class="ticker-btn" style="width:auto" onclick="view_profile('<?php echo $rs['profileID']?>')">
                                    View Profile
                                </button>  
                            </div>
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-9">
                                <div class="title justify-content-between" style="cursor: pointer">
                                    <div class="titles">
                                        <h4><?php echo $rs['username']?></h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                            <h6><strong>Budget:               </strong>RM<?php echo $rs['rate'] ?> Per Session</h6>	
                                            <h6><strong>Subject:               </strong><?php echo $rs['subjects'] ?></h6>	
                                            <h6><strong>Phone:                  </strong><?php echo $rs['phone'] ?></h6>
                                            <h6><strong>Email:                  </strong><?php echo $rs['email'] ?></h6>
                                            <h6><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <!-- <div class="col-md-4">		
                                                
                                            </div> -->
                                            <div class="col-md-3">
                                                <button class="btn-secondary like" name="like" id="like" onclick="like('<?php echo $rs['profileID'] ?>')">
                                                    <i class="fa fa-heart" hidden aria-hidden="true"></i> Like
                                                </button>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                                        
                                    </div>
                                    <ul class="btns">
                                        <!-- <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <?php
                // if($count1 >= 5){
                // echo $rs['id'].' -> '.$rs['first_name'].'<br>';
            }
        }
        else{
            ?>
            <div class="container">
                <h4 class="text-center">No Results</h4><br><br><br><br>
            </div>
            
            <?php
        }

    }
    else if($_SESSION['usertype'] == 'Tutor'){
        $query = "SELECT * FROM joblistings,users WHERE joblistings.studentID = users.id ";
        $query_row = "SELECT * FROM joblistings,users WHERE joblistings.studentID = users.id ";

        if(isset($_POST["ram"]))
        {   
            // echo $_POST["ram"];
            $ram_filter = implode("','", $_POST["ram"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
            AND users.location IN('".$ram_filter."')
            ";
        }

        if(isset($_POST["level"]))
        {   
            // echo $_POST["ram"];
            $level_filter = implode("','", $_POST["level"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
             AND joblistings.level_of_teaching IN('".$level_filter."')
            ";
        }

        $query .= " ORDER BY jobID DESC;";
        $row_num = mysqli_query($conn, $query_row);
        $count = mysqli_num_rows($row_num);
        $num_of_rows = ceil($count/5);

        $run  = mysqli_query($conn, $query);
        $count1 = mysqli_num_rows($run);
        $num_of_rows1 = ceil($count1/5);

        if($count1 >= 1){
            while($rs = mysqli_fetch_array($run)) {
                ?>
                <div class="single-post d-flex flex-row justify-content-start align-items-start">
                
                    <div class="details col-md-12">
                        <div class="row">
                        <div class="col-md-3 text-center">
                                <div class="thumb justify-content-between">
                                    <img src="img/profile/user.png" alt="">
                                </div>
                                <br>
                                <button class="ticker-btn" style="width:auto" value="<?php echo $rs['jobID']?>" onclick="view_profile('<?php echo $rs['jobID']?>')">
                                    View Profile
                                </button>  
                            </div>
                            <div class="col-md-9">
                                <div class="title justify-content-between" style="cursor: pointer">
                                    <div class="titles">
                                        <h4><?php echo $rs['username']?></h4>
                                        <div class="row">
                                            <div class="col-md-9">
                                            <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                            <h6><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?> Per Session</h6>	
                                            <h6><strong>Duration:               </strong><?php echo $rs['duration'] ?> Hour(s) Per Session</h6>
                                            <h6><strong>Preferred Frequency:   </strong><?php echo $rs['frequency'] ?> Session(s) Per Week</h6>	
                                            <h6><strong>Student Level:        </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                            <h6><strong>Description:    </strong><?php echo $rs['job_description'] ?></h6>	
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn-secondary like" name="like" id="like" onclick="like('<?php echo $rs['jobID'] ?>')">
                                                    <i class="fa fa-heart" hidden aria-hidden="true"></i> Like
                                                </button>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                                    
                                    </div>
                                    <ul class="btns">
                                        <!-- <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                            
                        
                        
                        
                        <!-- <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                    </div>
        
        
                </div>
                <?php
                // if($count1 >= 5){
                // echo $rs['id'].' -> '.$rs['first_name'].'<br>';
            }
        }
        else{
            ?>
            <div class="container">
                <h4 class="text-center">No Results</h4><br><br><br><br>
            </div>
            
            <?php
        }
    }
    else{
        echo "You Noob";
    }
    
    ?>
            <div id="id07" class="modal">
                <div class="model-content card mx-auto" style="margin-top:1%; margin-bottom:0; padding-top:0">
                            
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

        function view_profile(jobID){
                $.ajax({
                    url: 'view-profile.php',
                    type: 'POST',
                    data: {
                        'jobid':jobID
                    },
                    success: function(data){
                        $('#view-profile').html(data);
                        document.getElementById('id07').style.display='block';
                    }
                });
            }
    </script>
    <?php

    
    // }
?>