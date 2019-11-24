<?php
    if(isset($_POST['profileid'])){
        $conn = mysqli_connect("localhost", "root", "", "mentoree");

        $query = "SELECT * FROM tutors,users WHERE tutors.profileID=".$_POST['profileid']." AND tutors.tutorID = users.id";

        $run  = mysqli_query($conn, $query);

        while($rs = mysqli_fetch_array($run)) {
            ?>
                <h2 class="card-title text-center"><?php echo $rs['username'] ?></h2>
                <h2 class="card-subtitle text-center">Are you sure you want to remove this favorite listing?</h2>
                
                <br>
                <div class = "login-button text-center" >
                    <button href="#" class="ticker-btn-red" style="font-size:16px;border-radius:40px;width:40%; height: 50px;" onclick="delete_like('<?php echo $rs['favID'] ?>', '<?php echo $_SESSION['userid'] ?>')">Yes</button>
                    <br>
                    <button href="#" class="ticker-btn-form" style="width:40%; height: 50px;" onclick="document.getElementById('id04').style.display='none';">Cancel</button>
                    <!--<span><a href='#'>&nbsp;Register</a></span>-->
                </div> 
            <?php
        }
    }

?>