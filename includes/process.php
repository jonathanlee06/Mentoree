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
    $name = $_SESSION['username'];

    $result = $obj->addStudentListing($name,$subject,$level,$location,$budget,$duration,$phone,$email,$requirements,$studentID);
    //$result = $obj->addJobListing($name,$subject,$level,$location,$budget,$duration,$phone,$email,$requirements,$studentID);
    echo $result;
}

if(isset($_POST["edit_username"]) AND isset($_POST["edit_location"]) AND isset($_POST["edit_phone"])){

    $obj = new User();

    $username = $_POST["edit_username"];
    $email = $_POST["edit_email"];
    $phone = $_POST["edit_phone"];
    $description = $_POST["edit_description"];
    $location = $_POST["edit_location"];
    $course = $_POST["edit_course"];
    $studentID = $_SESSION['userid'];


    $result = $obj->editUserProfile($username,$email,$phone,$description,$location,$course,$studentID); 
    //$result = $obj->addJobListing($name,$subject,$level,$location,$budget,$duration,$phone,$email,$requirements,$studentID);
    echo $result;
}

if(isset($_POST["edit_t_username"]) AND isset($_POST["edit_t_location"]) AND isset($_POST["edit_t_phone"])){

    $obj = new User();

    $username = $_POST["edit_t_username"];
    $email = $_POST["edit_t_email"];
    $phone = $_POST["edit_t_phone"];
    $description = $_POST["edit_t_description"];
    $location = $_POST["edit_t_location"];
    $course = $_POST["edit_t_course"];
    $subject = $_POST["edit_t_subject"];
    $level = $_POST["edit_t_level"];
    $time = $_POST["edit_t_time"];
    $rate = $_POST["edit_t_rate"];
    $status = $_POST["edit_t_status"];
    $tutorID = $_SESSION['userid'];

    $result = $obj->editTutorProfile($username,$email,$phone,$description,$location,$course,$subject,$level,$time,$rate,$status,$tutorID);

    //$result = $obj->addJobListing($name,$subject,$level,$location,$budget,$duration,$phone,$email,$requirements,$studentID);
    echo $result;
}

if(isset($_POST["postid"])){
    $obj = new DBOperation();

    $postid = $_POST["postid"];
    $userid = $_SESSION['userid'];

    $result = $obj->addFavoriteListing($postid,$userid);
    echo $result;
}

if(isset($_POST["like-postid"]) AND isset($_POST["like-userid"])){
    $obj = new DBOperation();

    $postid = $_POST["like-postid"];
    $userid = $_POST["like-userid"];

    $result = $obj->deleteFavoriteListing($postid,$userid);
    echo $result;
}

if(isset($_POST["del-postid"])){
    $obj = new DBOperation();

    $postid = $_POST["postid"];
    $userid = $_SESSION['userid'];

    $result = $obj->deleteStudentListing($postid,$userid);
    echo $result;
}

if(isset($_POST["del-postid-tutor"])){
    $obj = new DBOperation();

    $postid = $_POST["del-postid-tutor"];
    $userid = $_SESSION['userid'];

    $result = $obj->deleteTutorListing($postid,$userid);
    echo $result;
}

?>