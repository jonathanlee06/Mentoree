<?php
include_once("../database/constants.php");
include_once("user.php");
include_once("DBOperation.php");

// $user = "";
// $user = isset($_POST['type']) ? $_POST['type'] : "";

// if($user === ""){
    
//     echo "No value passed!";
// }
// else{
//     $userType = $_POST['type'];
//     
// }

// $name = $_POST["type"]; //the var you put in your ajax data:{}
// echo $name;

//REGISTER processing 
if(isset($_POST["reg_username"]) AND isset($_POST["reg_email"]) AND isset($_POST["reg_password"]) AND isset($_POST["userType"])){
    
    $user = new User();

    $result = $user->createUserAccount($_POST["reg_username"], $_POST["reg_email"], $_POST["reg_password"], $_POST['userType']);
    
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
    $budget = $_POST["job_budget"];
    $duration = $_POST["job_duration"];
    $phone = $_POST["job_phone"];
    $email = $_POST["job_email"];
    $requirements = $_POST["job_requirements"];
    $studentID = $_SESSION['userid'];

    $result = $obj->addJobListing($level,$subject,$location,$budget,$duration,$phone,$email,$requirements,$studentID);
    echo $result;
}

?>