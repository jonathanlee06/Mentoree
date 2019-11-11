<?php
include_once("../database/constants.php");
include_once("user.php");

//REGISTER processing 
if(isset($_POST["reg_username"]) AND isset($_POST["reg_email"]) AND isset($_POST["reg_password"])){

    $user = new User();
    $userType = "";


    if(isset($_POST["reg_student"])){
        $userType = "Student";
    }
    
    if (isset($_POST["reg_tutor"])){
        $userType = "Tutor";
    }

    $result = $user->createUserAccount($_POST["reg_username"], $_POST["reg_email"], $_POST["reg_password"], $userType);
    echo $result;

}

//LOGIN processing
if(isset($_POST["log_email"]) AND isset($_POST["log_password"])){
    $user = new User();
    $result = $user->userLogin($_POST["log_email"], $_POST["log_password"]);
    echo $result;
}

?>