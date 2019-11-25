<?php
    if(isset($_POST['profileid'])){
        $conn = mysqli_connect("localhost", "root", "", "mentoree");

        $query = "SELECT * FROM tutors,users WHERE tutors.profileID=".$_POST['profileid']." AND tutors.tutorID = users.id";

        $run  = mysqli_query($conn, $query);

        while($rs = mysqli_fetch_array($run)) {
            ?>  
                <div class="row">
                    <div class="col-md-12">
                        <span onclick="document.getElementById('id05').style.display='none'; document.body.style.overflow = '';" class="close" title="Close Modal" style="color: #000;">&times;</span>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <div class="thumb justify-content-center text-center">
                            <img src="img/profile/user.png" alt="">
                        </div><br>
                        <h4 class="card-title text-center"><?php echo $rs['username'] ?></h4>
                        <h6 class="card-subtitle text-center"><?php echo $rs['email'] ?></h6>
                        
                        <br>
                        <!-- <div class = "login-button text-center" >
                            <button href="#" class="ticker-btn-red" style="font-size:16px;border-radius:40px;width:40%; height: 50px;" onclick="delete_like('<?php echo $rs['favID'] ?>', '<?php echo $_SESSION['userid'] ?>')">Yes</button>
                            <br>
                            <button href="#" class="ticker-btn-form" style="width:40%; height: 50px;" onclick="document.getElementById('id04').style.display='none';">Cancel</button>
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <p><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                        <p><strong>Budget:               </strong>RM<?php echo $rs['rate'] ?></h6>	
                        <p><strong>Subject:               </strong><?php echo $rs['subjects'] ?></h6>	
                        <p><strong>Phone:                  </strong><?php echo $rs['phone'] ?></h6>
                        <p><strong>Email:                  </strong><?php echo $rs['email'] ?></h6>
                        <p><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                        </div>
                    </div>
                
 
            <?php
        }
    }

    if(isset($_POST['jobid'])){
        $conn = mysqli_connect("localhost", "root", "", "mentoree");

        $query = "SELECT * FROM joblistings,users WHERE joblistings.jobID=".$_POST['jobid']." AND joblistings.studentID = users.id";

        $run  = mysqli_query($conn, $query);

        while($rs = mysqli_fetch_array($run)) {
            ?>  
                <div class="row">
                    <div class="col-md-12">
                        <span onclick="document.getElementById('id05').style.display='none'; document.body.style.overflow = '';" class="close" title="Close Modal" style="color: #000;">&times;</span>
                    </div>
                    <br><br>
                    <div class="col-md-12">
                        <div class="thumb justify-content-center text-center">
                            <img src="img/profile/user.png" alt="">
                        </div><br>
                        <h4 class="card-title text-center"><?php echo $rs['username'] ?> (<?php echo $rs['usertype'] ?>)</h4>
                        <h6 class="card-subtitle text-center"><?php echo $rs['email'] ?></h6>
                        
                        <br>
                        <!-- <div class = "login-button text-center" >
                            <button href="#" class="ticker-btn-red" style="font-size:16px;border-radius:40px;width:40%; height: 50px;" onclick="delete_like('<?php echo $rs['favID'] ?>', '<?php echo $_SESSION['userid'] ?>')">Yes</button>
                            <br>
                            <button href="#" class="ticker-btn-form" style="width:40%; height: 50px;" onclick="document.getElementById('id04').style.display='none';">Cancel</button>
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <p><strong>Location:             </strong><?php echo $rs['location'] ?></h6>
                        <p><strong>Budget:               </strong>RM<?php echo $rs['budget'] ?></h6>	
                        <p><strong>Subject:               </strong><?php echo $rs['subject'] ?></h6>	
                        <p><strong>Phone:                  </strong><?php echo $rs['phone'] ?></h6>
                        <p><strong>Email:                  </strong><?php echo $rs['email'] ?></h6>
                        <p><strong>Level of Teaching:      </strong><?php echo $rs['level_of_teaching'] ?></h6>
                        </div>
                    </div>
                
 
            <?php
        }
    }

?>