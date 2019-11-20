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
    public function addJobListing($level,$subject,$location,$duration,$budget,$tutor_requirements,$studentID){

        $pre_stmt = $this->con->prepare("INSERT INTO `joblisting`(`level`, `subject`, `location`, `duration`, `budget`, `tutor_requirements`, `studentID`) 
        VALUES (?,?,?,?,?,?,?)");
        $pre_stmt->bind_param("sssssss",$level, $subject,$location,$duration,$budget,$tutor_requirements,$studentID);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result){
            return "LISTING_ADDED";
        }else{
            return 0;
        }

    }
}

//$dbop = new DBOperation();
//echo $dbop->addJobListing("Degree","Computer Architecture","KDU College Damansara Jaya","2hrs","rm60/hr","must be handsome","19");
?>