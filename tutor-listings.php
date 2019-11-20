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

    $query = "SELECT * FROM studentlistings";
    $query_row = "SELECT * FROM studentlistings ";

    if(isset($_POST["search"]) || isset($_POST["area"])){
        echo $_POST["area"];
        echo $_POST["search"];
        $query .= " WHERE subject LIKE '%".$_POST["search"]."%' AND location='".$_POST["area"]."'";
    }

    // echo $_POST["ram"];

    if(isset($_POST["ram"]))
    {   
        // echo $_POST["ram"];
        // $ram_filter = implode("','", $_POST["ram"]);
        $ram_filter = $_POST["ram"];
        echo $ram_filter;
        $query .= "
        WHERE gender IN('".$ram_filter."')
        ";
    }

    $query .= " ORDER BY id DESC LIMIT ".$page1. ", " .$rows_per_page.";";
    $row_num = mysqli_query($conn, $query_row);
    $count = mysqli_num_rows($row_num);
    $num_of_rows = ceil($count/5);

    $run  = mysqli_query($conn, $query);

    while($rs = mysqli_fetch_array($run)) {
        ?>
        <div class="single-post d-flex flex-row justify-content-start align-items-start">
            
                    <div class="details">
                            
                                <div class="thumb justify-content-between">
                                    <!-- <img src="img/post.png" alt=""> -->
                                </div>
                            
                                <div class="title justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4><?php echo $rs['requester_name']?></h4></a>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <h6><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                                            <h6><strong>Budget:               </strong>RM<?php echo $rs['Budget'] ?></h6>	
                                            <h6><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6>	
                                            <h6><strong>Prefered Days:        </strong><?php echo $rs['preferred_days'] ?></h6>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <div class="col-md-4">
                                                <h6><strong>Student Level:        </strong><?php echo $rs['level_of_teaching'] ?></h6>
                                                <h6><strong>Prefered Tutor Level: </strong><?php echo $rs['tutor_qualifications'] ?></h6>		
                                                <h6><strong>Gender Preference:    </strong><?php echo $rs['gender'] ?></h6>	
                                            </div>
                                        </div>
                                        
                                        				
                                    </div>
                                    <ul class="btns">
                                        <!-- <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                        <li><a href="#">Apply</a></li> -->
                                    </ul>
                                </div>
                                <p>
                                    
                                </p>
                        
                        
                        
                        <!-- <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                    </div>
            
            
        </div>
        <?php
        // echo $rs['id'].' -> '.$rs['first_name'].'<br>';
    }

    ?>
    <div class="container">
        <ul class="pagination justify-content-center" id="pagination">
            <li class="disabled"><a href="">&laquo;</a></li>
            <?php
                for($i = 1; $i <= $num_of_rows; $i++){
                    echo "<li ";
                    if ($page1 == $i) {
                        echo ' class="active"';
                    }
                    echo "><a href='?page=$i'>$i</a></li>";
                    
                }
            ?>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
    <?php
?>