<?php

class DBOperation
{

    private $con;

    function __construct()
    {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
    }

    //add to submission database
    public function addJobListing($name,$subject,$level,$location,$budget,$duration,$tel,$email,$description,$studentID){

        $pre_stmt = $this->con->prepare("INSERT INTO `mentorlistings`(`requester_name`,`subject`, `level_of_teaching`, `location`, `budget`, `duration`,`tel`, `email`, `description`,`userid`) 
        VALUES (?,?,?,?,?,?,?,?,?,?)");
        $pre_stmt->bind_param("ssssssssss",$name,$subject,$level,$location,$budget,$duration,$tel,$email,$description,$studentID);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "LISTING_ADDED";
        }else{
            return 0;
        }
    }

    //add to submission database
    public function addStudentListing($subject,$level,$budget,$frequency,$duration,$description,$studentID){

        $pre_stmt = $this->con->prepare("INSERT INTO `joblistings`(`subject`,`level_of_teaching`, `budget`, `frequency`, `duration`, `job_description`,`studentID`) 
        VALUES (?,?,?,?,?,?,?)");
        $pre_stmt->bind_param("ssssssi",$subject,$level,$budget,$frequency,$duration,$description,$studentID);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "LISTING_ADDED";
        }else{
            return "Noob";
        }
    }

    //add to submission database
    public function addFavoriteStudentListing($jobid,$userid){

        $pre_stmt = $this->con->prepare("INSERT INTO `favorite`(`jobID`,`userID`) 
        VALUES (?,?)");
        $pre_stmt->bind_param("ss",$jobid,$userid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "FAVORITE_ADDED";
        }else{
            return 0;
        }
    }

    //add to submission database
    public function addFavoriteTutorListing($profileid,$userid){

        $pre_stmt = $this->con->prepare("INSERT INTO `favorite`(`profileID`,`userID`) 
        VALUES (?,?)");
        $pre_stmt->bind_param("ss",$profileid,$userid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "FAVORITE_ADDED";
        }else{
            return 0;
        }
    }

    //delete listing from database
    public function deleteStudentListing($postid,$userid){

        $pre_stmt = $this->con->prepare("DELETE FROM `joblistings` WHERE `jobID`=?");
        $pre_stmt->bind_param("i",$postid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "DELETED";
        }else{
            return 0;
        }
    }

    public function deleteTutorListing($postid,$userid){

        $pre_stmt = $this->con->prepare("DELETE FROM `mentorlistings` WHERE `postID`=?");
        $pre_stmt->bind_param("i",$postid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "DELETED";
        }else{
            return 0;
        }
    }

    public function deleteFavoriteListing($postid,$userid){

        $pre_stmt = $this->con->prepare("DELETE FROM `favorite` WHERE `postID`=? AND `userID`=?");
        $pre_stmt->bind_param("ss",$postid,$userid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "DELETED";
        }else{
            return 0;
        }
    }

    public function deleteFavoriteStudentListing($favid,$userid){

        $pre_stmt = $this->con->prepare("DELETE FROM `favorite` WHERE `favID`=? AND `userID`=?");
        $pre_stmt->bind_param("is",$favid,$userid);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "DELETED";
        }else{
            return 0;
        }
    }
}

// $dbop = new DBOperation();
// echo $dbop->addJobListing("Degree","Computer Architecture","KDU College Damansara Jaya","2hrs","rm60/hr","must be handsome","email@email.com");
?>