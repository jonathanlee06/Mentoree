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

    $query = "SELECT * FROM joblistings,users WHERE joblistings.studentID = users.id";
    $query_row = "SELECT * FROM joblistings,users WHERE joblistings.studentID = users.id";

    if(isset($_POST["search"]) || isset($_POST["area"])){
        $query .= " AND users.location LIKE '%".$_POST["area"]."%' AND joblistings.subject LIKE '%".$_POST["search"]."%'";
    }

    // echo $_POST["ram"];

    // if(isset($_POST["ram"]))
    // {   
    //     // echo $_POST["ram"];
    //     // $ram_filter = implode("','", $_POST["ram"]);
    //     $ram_filter = $_POST["ram"];
    //     $query .= "
    //     WHERE gender IN('".$ram_filter."')
    //     ";
    // }

    $query .= " ORDER BY jobID DESC LIMIT ".$page1. ", " .$rows_per_page."";
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
                                <br><br>
                                <h4 class="titles"><?php echo $rs['username'] ?></h4>
                            </div>
                            <br>
                            <button class="ticker-btn" style="width:auto" value="<?php echo $rs['username']?>" onclick="view_profile('<?php echo $rs['jobID']?>')">
                                View Profile
                            </button>  
                        </div>
                        <div class="col-md-9">
                            <div class="title justify-content-between" style="cursor: pointer">
                                <div class="titles">
                                    <h4><?php echo $rs['subject']?></h4>
                                    <div class="row">
                                        <div class="col-md-9">
                                        <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                        <h6><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?> Per Session</h6>	
                                        <h6><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6>	
                                        <h6><strong>Student Level:        </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                        <h6><strong>Description:    </strong><?php echo $rs['job_description'] ?></h6>	
                                        </div>
                                        <!-- <div class="col-md-2"></div> -->
                                        <!-- <div class="col-md-4">		
                                            
                                        </div> -->
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

    


    // if($count1 >= 5){
        ?>
        <div class="container">
            <ul class="pagination justify-content-center" id="pagination">
                <?php
                    if($count1 < 5){
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
    // }

    ?>
            <div id="id06" class="modal">
                <div class="model-content card mx-auto" style="margin-top:1%; margin-bottom:0; padding-top:0">
                            
                    <div class="card-body" id="view-profile">
                        
                         
                    </div>


                </div>
            </div>
        <?php
        
    ?>
        <script>
            function call_name(nama){
                alert(nama);
            }

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

            function view_profile(jobID){
                $.ajax({
                    url: 'view-profile.php',
                    type: 'POST',
                    data: {
                        'jobid':jobID
                    },
                    success: function(data){
                        $('#view-profile').html(data);
                        document.getElementById('id06').style.display='block';
                    }
                });
            }
        </script>
    <?php
?>