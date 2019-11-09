<?php
    $conn = mysqli_connect("localhost", "root", "", "pagination");

    $rows_per_page = 10;

    $page = $_GET['page'];
    if($page == "" || $page == "1"){
        $page1 = 0;
    }
    else {
        $page1 = ($page*10)-10;
    }

    $query = "SELECT * FROM listing LIMIT ".$page1. ", " . $rows_per_page;
    $query_row = "SELECT * FROM listing";
    $row_num = mysqli_query($conn, $query_row);
    $count = mysqli_num_rows($row_num);
    $num_of_rows = ceil($count/10);

    $run  = mysqli_query($conn, $query);

    while($rs = mysqli_fetch_array($run)) {
        ?>
        <div class="single-post d-flex flex-row">
            <div class="row">
                
                
                <div class="col-md-12 col-lg-12">
                    <div class="details">
                        <div class="thumb">
                            <img src="img/post.png" alt="">
                        </div>
                        <div class="title d-flex flex-row">
                            <div class="titles">
                                <a href="single.html"><h4><?php echo $rs['first_name'].' '.$rs['last_name'] ?></h4></a>
                                <h6><?php echo $rs['email'] ?></h6>					
                            </div>
                            <ul class="btns">
                                <!-- <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                <li><a href="#">Apply</a></li> -->
                            </ul>
                        </div>
                        <p>
                            <?php echo $rs['gender'] ?>
                        </p>
                        <!-- <h5>Job Nature: Full time</h5>
                        <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                        <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p> -->
                    </div>
                </div>
            </div>
            
            
        </div>
        <?php
        // echo $rs['id'].' -> '.$rs['first_name'].'<br>';
    }

    ?>