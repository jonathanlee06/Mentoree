<?php
include_once("../database/constants.php");
include_once("user.php");
include_once("DBOperation.php");

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

//job listing processing
if(isset($_POST["job_level"]) AND isset($_POST["job_subject"]) AND isset($_POST["job_campus"])){

    $obj = new DBOperation();

    $level = $_POST["job_level"];
    $subject = $_POST["job_subject"];
    $location = $_POST["job_campus"];
    $duration = $_POST["job_duration"];
    $budget = $_POST["job_budget"];
    $tutor_requirements = $_POST["job_requirements"];

    $result = $obj->addJobListing($level,$subject,$location,$duration,$budget,$tutor_requirements,$_SESSION["userid"]);
    echo $result;
}

?>