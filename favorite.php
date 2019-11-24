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
        $query = "SELECT * FROM studentlistings,favorite WHERE studentlistings.postID = favorite.postID AND favorite.userID = ".$user."";
        $query_row = "SELECT * FROM studentlistings,favorite WHERE studentlistings.postID = favorite.postID AND favorite.userID = ".$user."";
    }
    else{
        $user = $_SESSION['userid'];
        $query = "SELECT * FROM studentlistings,favorite WHERE studentlistings.postID = favorite.postID AND favorite.userID = ".$user."";
        $query_row = "SELECT * FROM studentlistings,favorite WHERE studentlistings.postID = favorite.postID AND favorite.userID = ".$user."";
    }


    //$query .= " ORDER BY postID DESC;";
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
                                    <h4><?php echo $rs['requester_name']?></h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6><br>
                                        <h6><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?></h6><br>
                                        <h6><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6><br>
                                        <h6><strong>Phone:                  </strong><?php echo $rs['tel'] ?></h6><br>
                                        <h6><strong>Email:                  </strong><?php echo $rs['email'] ?></h6><br>
                                        <h6><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                        </div>
                                        <!-- <div class="col-md-2"></div>
                                        <div class="col-md-4">		
                                            
                                        </div> -->
                                    </div>
                                    
                                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button class="ticker-btn-red" onclick="document.getElementById('id04').style.display='block';">Remove Favorite</button>

                            <!-- Register Confirmation -->
                            <div id="id04" class="modal">
                                    <div class="model-content card mx-auto">
                                                
                                        <div class="card-body">
                                            
                                            <h2 class="card-title text-center">Warning!</h2>
                                            <h2 class="card-title text-center">Are you sure you want to remove this favorite listing?</h2>
                                            
                                            <br>
                                            <div class = "login-button text-center" >
                                                <button href="#" class="ticker-btn-red" style="font-size:16px;border-radius:40px;width:40%; height: 50px;" onclick="delete_like('<?php echo $rs['postID'] ?>', '<?php echo $_SESSION['userid'] ?>')">Yes</button>
                                                <br>
                                                <button href="#" class="ticker-btn-form" style="width:40%; height: 50px;" onclick="document.getElementById('id04').style.display='none';">Cancel</button>
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
        <!-- <div class="container">
            <ul class="pagination justify-content-center" id="pagination">
                <?php
                    // if($num_of_rows1 < 0 || $num_of_rows < 0){
                    //     echo "<li ";
                    //     echo ' class="active"';
                    //     echo "><a>1</a></li>";
                    // }
                    // else{
                    //     for($i = 1; $i <= $num_of_rows; $i++){
                    //         echo "<li ";
                    //         if(isset($_GET['page'])){
                    //             $page = $_GET['page'];
                    //             if($page == $i){
                    //                 echo ' class="active"';
                    //             }
                    //         }
                    //         else{
                    //             $page = 1;
                    //             if($page == $i){
                    //                 echo ' class="active"';
                    //             }
                    //         }
                    //         echo "><a href='?page=$i'>$i</a></li>";
                            
                    //     }
                    // }
                    
                ?>
            </ul>
        </div> -->
        <script>
            function delete_like(postID,userID){
                $.ajax({
                    url: 'includes/process.php',
                    type: 'POST',
                    data: {
                        'like-postid':postID,
                        'like-userid':userID
                    },
                    success: function(data){
                        alert(data);
                    }
                });
            }
        </script>

            
        <?php

    

                  
    
    // }
?>