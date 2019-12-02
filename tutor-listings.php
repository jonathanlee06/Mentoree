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

    $query = "SELECT * FROM tutors,users WHERE tutors.tutorID = users.id";
    $query_row = "SELECT * FROM tutors,users WHERE tutors.tutorID = users.id";

    if(isset($_POST["search"])){
        if(isset($_POST["area"])){
            $query .= " AND tutors.subjects LIKE '%".$_POST["search"]."%' AND users.location LIKE '%".$_POST["area"]."%'";
        }
        
    }

    // echo $_POST["ram"];

    // if(isset($_POST["ram"]))
    // {   
    //     // echo $_POST["ram"];
    //     $ram_filter = implode("','", $_POST["ram"]);
    //     // $ram_filter = $_POST["ram"];
    //     $query .= "
    //     WHERE location IN('".$ram_filter."')
    //     ";
    // }

    $query .= " ORDER BY profileID DESC LIMIT ".$page1. ", " .$rows_per_page.";";
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
                            <button class="ticker-btn" style="width:auto" onclick="view_profile('<?php echo $rs['profileID'] ?>')">
                                View Profile
                            </button>  
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-9">
                            <div class="title justify-content-between">
                                <div class="titles">
                                    <h4><?php echo $rs['username']?></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                        <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                        <h6><strong>Rate:               </strong>RM<?php echo $rs['rate'] ?> Per Session</h6>	
                                        <h6><strong>Subject:               </strong><?php echo $rs['subjects'] ?></h6>	
                                        <h6><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <!-- <div class="col-md-4">		
                                            
                                        </div> -->
                                        <div class="col-md-3">
                                            <button class="btn-secondary like" name="like" id="like" onclick="like_tutor('<?php echo $rs['profileID'] ?>')">
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

    ?>
        <div class="container">
            <ul class="pagination justify-content-center" id="pagination">
                <?php
                    if($num_of_rows1 < 0 || $num_of_rows < 0){
                        echo "<li ";
                        echo ' class="active"';
                        echo "><a>1</a></li>";
                    }
                    else{
                        for($i = 1; $i <= $num_of_rows; $i++){
                            echo "<li ";
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                                if($page == $i){
                                    echo ' class="active"';
                                }
                            }
                            else{
                                $page = 1;
                                if($page == $i){
                                    echo ' class="active"';
                                }
                            }
                            echo "><a href='?page=$i'>$i</a></li>";
                            
                        }
                    }
                    
                ?>
            </ul>
        </div>
        <?php


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