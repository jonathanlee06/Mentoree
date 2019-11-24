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
                            <div class="title justify-content-between" style="cursor: pointer">
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
                                
                                <button class="ticker-btn-red" onclick="document.getElementById('id03').style.display='block';">Delete Listing</button>
                                
                                <!-- Register Confirmation -->
                                <div id="id03" class="modal">
                                    <div class="model-content card mx-auto">
                                                
                                        <div class="card-body">
                                            
                                            <h2 class="card-title text-center">Warning!</h2>
                                            <h2 class="card-title text-center">Are you sure you want to delete this listing?</h2>
                                            
                                            <br>
                                            <div class = "login-button text-center" >
                                                <button href="#" class="ticker-btn-red" style="font-size:16px;border-radius:40px;width:40%; height: 50px;" onclick="delete_list('<?php echo $rs['postID'] ?>', '<?php echo $_SESSION['usertype'] ?>')">Yes</button>
                                                <br>
                                                <button href="#" class="ticker-btn-form" style="width:40%; height: 50px;" onclick="document.getElementById('id03').style.display='none';">Cancel</button>
                                                <!--<span><a href='#'>&nbsp;Register</a></span>-->
                                            </div>  
                                        </div>


                                    </div>
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

            function delete_like(postID){
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

            function delete_list(postID, userType){

                if(userType == "Student"){
                    $.ajax({
                        url: 'includes/process.php',
                        type: 'POST',
                        data: {
                            'del-postid':postID
                        },
                        success: function(data){
                            alert(data);
                        }
                    });
                }
                else {
                    $.ajax({
                        url: 'includes/process.php',
                        type: 'POST',
                        data: {
                            'del-postid-tutor':postID
                        },
                        success: function(data){
                            alert(data);
                            location.reload();
                        }
                    });
                }

                
            }
        </script>
    <?php
?>