<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "mentoree");


    if($_SESSION['usertype'] == 'Student'){
        $query = "SELECT * FROM mentorlistings";
        $query_row = "SELECT * FROM mentorlistings ";

        if(isset($_POST["ram"]))
        {   
            // echo $_POST["ram"];
            $ram_filter = implode("','", $_POST["ram"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
            WHERE location IN('".$ram_filter."')
            ";
        }

        if(isset($_POST["level"]))
        {   
            // echo $_POST["ram"];
            $level_filter = implode("','", $_POST["level"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
             AND level_of_teaching IN('".$level_filter."')
            ";
        }

        $query .= " ORDER BY postID DESC;";
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
                                <button class="ticker-btn" style="width:auto">
                                    View Profile
                                </button>  
                            </div>
                            <!-- <div class="col-md-1"></div> -->
                            <div class="col-md-9">
                                <div class="title justify-content-between" style="cursor: pointer">
                                    <div class="titles">
                                        <h4><?php echo $rs['requester_name']?></h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                            <h6><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?></h6>	
                                            <h6><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6>	
                                            <h6><strong>Phone:                  </strong><?php echo $rs['tel'] ?></h6>
                                            <h6><strong>Email:                  </strong><?php echo $rs['email'] ?></h6>
                                            <h6><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                            </div>
                                            <div class="col-md-3"></div>
                                            <!-- <div class="col-md-4">		
                                                
                                            </div> -->
                                            <div class="col-md-3">
                                                <button class="btn-secondary like" name="like" id="like" onclick="like('<?php echo $rs['postID'] ?>')">
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
        $query = "SELECT * FROM studentlistings";
        $query_row = "SELECT * FROM studentlistings ";

        if(isset($_POST["ram"]))
        {   
            // echo $_POST["ram"];
            $ram_filter = implode("','", $_POST["ram"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
            WHERE location IN('".$ram_filter."')
            ";
        }

        if(isset($_POST["level"]))
        {   
            // echo $_POST["ram"];
            $level_filter = implode("','", $_POST["level"]);
            // $ram_filter = $_POST["ram"];
            $query .= "
             AND level_of_teaching IN('".$level_filter."')
            ";
        }

        $query .= " ORDER BY postID DESC;";
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
                                <button class="ticker-btn" style="width:auto" value="<?php echo $rs['requester_name']?>" onclick="call_name('<?php echo $rs['requester_name']?>')">
                                    View Profile
                                </button>  
                            </div>
                            <div class="col-md-9">
                                <div class="title justify-content-between" style="cursor: pointer">
                                    <div class="titles">
                                        <h4><?php echo $rs['requester_name']?></h4>
                                        <div class="row">
                                            <div class="col-md-9">
                                            <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                            <h6><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?></h6>	
                                            <h6><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6>	
                                            <h6><strong>Student Level:        </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                            <h6><strong>Description:    </strong><?php echo $rs['description'] ?></h6>	
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn-secondary like" name="like" id="like" onclick="like('<?php echo $rs['postID'] ?>')">
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
                    alert("Liked")
                }
            });
        }
    </script>
    <?php

    
    // }
?>