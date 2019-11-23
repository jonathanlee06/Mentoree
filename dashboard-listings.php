<?php
    $conn = mysqli_connect("localhost", "root", "", "mentoree");

    $rows_per_page = 5;

    // $page = $_POST['page'];
    

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page == null || $page == "1"){
            $page1 = 0;
        }
        else {
            $page1 = ($page*5)-5;
        }
    }
    else {
        $page1 = 0;
    }

    if($_SESSION['usertype'] == 'Tutor'){
        $user = $_SESSION['userid'];
        $query = "SELECT * FROM mentorlistings WHERE userid = ".$user." ORDER BY postID DESC;";
        $query_row = "SELECT * FROM mentorlistings WHERE userid = ".$user."";
    }
    else{
        $user = $_SESSION['userid'];
        $query = "SELECT * FROM studentlistings WHERE userid = ".$user." ORDER BY postID DESC;";
        $query_row = "SELECT * FROM studentlistings WHERE userid = ".$user."";
    }


    // $query .= " ORDER BY id DESC;";
    // $row_num = mysqli_query($conn, $query_row);
    // $count = mysqli_num_rows($row_num);
    // $num_of_rows = ceil($count/5);

    $run  = mysqli_query($conn, $query);
    $count1 = mysqli_num_rows($run);
    $num_of_rows1 = ceil($count1/5);

    if($count1 >= 1){
        while($rs = mysqli_fetch_array($run)) {
            ?>
            <div class="profile-sec-list d-flex flex-row justify-content-start align-items-start">
                
                <div class="details col-lg-12">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="title justify-content-between" onclick="location.href='single.html';" style="cursor: pointer">
                                <div class="titles">
                                    <h4><?php echo $rs['subject']?></h4>
                                    <br>
                                    <div class="row">
                                        <?php
                                            if($_SESSION['usertype'] == 'Student'){
                                                echo '
                                                    <div class="col-md-12">
                                                    <h6><strong>Listed By:             </strong>'.$rs['requester_name'].'</h6><br>
                                                    <h6><strong>Location:             </strong>'.$rs['location'].'</h6><br>
                                                    <h6><strong>Budget:               </strong>RM'.$rs['budget'].'</h6><br>
                                                    <h6><strong>Subject:               </strong>'.$rs['subject'].'</h6><br>
                                                    <h6><strong>Description:                  </strong>'.$rs['description'].'</h6>
                                                    </div>
                                                ';
                                            }
                                            else {
                                                echo '
                                                    <div class="col-md-12">
                                                    <h6><strong>Location:             </strong>'.$rs['location'].'</h6><br>
                                                    <h6><strong>Budget:               </strong>RM'.$rs['budget'].'</h6><br>
                                                    <h6><strong>Subject:               </strong>'.$rs['subject'].'</h6><br>
                                                    <h6><strong>Phone:                  </strong>'.$rs['tel'].'</h6><br>
                                                    <h6><strong>Email:                  </strong>'.$rs['email'].'</h6><br>
                                                    <h6><strong>Level of Teaching:      </strong>'.$rs['level_of_teaching'].'</h6>
                                                    </div>
                                                ';
                                            }
                                        ?>
                                        
                                        <!-- <div class="col-md-2"></div>
                                        <div class="col-md-4">		
                                            
                                        </div> -->
                                    </div>
                                    
                                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <!-- <button class="ticker-btn-red" value="<?php echo $rs['postID'] ?>">Delete Listing</button> -->
                                <button class="btn-secondary like" name="like" id="like" onclick="like('<?php echo $rs['postID'] ?>')">
                                    <i class="fa fa-heart" hidden aria-hidden="true"></i> Like
                                </button>
                            
                            
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
?>