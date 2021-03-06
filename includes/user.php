<?php

class User
{

    private $con;

    function __construct(){
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db ->connect();
    }

    private function emailExists($email){
        $pre_stmt = $this->con->prepare("SELECT id FROM users WHERE email = ? ");
        $pre_stmt->bind_param("s",$email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if($result->num_rows > 0){
            return 1;
        }else{
            return 0;
        }
    }

    public function createUserAccount($username,$email,$phone,$location,$course,$password,$type){
        //to protect your application from sql attack you can use prepare statement
        if($this->emailExists($email)){
            echo "EMAIL_ALREADY_EXISTS";
        }else{
            
            $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
            //$date = date("Y-m-d");  
            $pre_stmt = $this->con->prepare("INSERT INTO `users`(`username`, `email`, `phone`, `location`, `course`, `password`,`userType`) 
            VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("sssssss", $username,$email,$phone,$location,$course,$pass_hash,$type);
            $result = $pre_stmt->execute() or die($this->con->error);
            if($result){
                return $this->con->insert_id;
            }else{
                return "SOME_ERROR";
            }
        }

    }

    //return 1 if email&password is matched 
    public function userLogin($email,$password){
        $pre_stmt = $this->con->prepare("SELECT id,username,password,userType,location,phone FROM users WHERE email = ?");
        $pre_stmt->bind_param("s",$email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();

        if($result->num_rows< 1){
            return "NOT_REGISTERED";
        }else{
            $row = $result->fetch_assoc();
            if(password_verify($password,$row["password"])){
                $_SESSION["userid"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["useremail"] = $email;
                $_SESSION["usertype"] = $row["userType"];
                $_SESSION["userphone"] = $row["phone"];
                $_SESSION["userarea"] = $row["location"];
                if($result){
                    return 1;
                }else{
                    return 0;
                }
            }else{
                return "PASSWORD_NOT_MATCHED";
            }
        }
    }

    public function editUserProfile($username,$email,$phone,$description,$location,$course,$userID){
        //to protect your application from sql attack you can use prepare statement
        $stmt = $this->con->prepare("UPDATE `users` SET `username`= ?,`email`= ? ,`phone`= ? ,`description`= ? ,`location`= ?
        ,`course`= ? WHERE `id` = ? ");
        $stmt->bind_param("ssssssi", $username,$email,$phone,$description,$location,$course,$userID);
        $result = $stmt->execute() or die($this->con->error);
        if($result){
            return "Updated";
        }else{
            return 0;
        }
    }

    public function editTutorProfile($level,$time,$subject,$rate,$status,$tutorID){
        
        $stmt = $this->con->prepare("UPDATE `tutors` SET `level_of_teaching`=?,`time`=?,`subjects`=?,`rate`=?,`status`=? WHERE `tutorID` = ? ");
        $stmt->bind_param("sssssi", $level,$time,$subject,$rate,$status,$tutorID);
        $result = $stmt->execute() or die($this->con->error);
        if($result){
            return "Updated";
        }else{
            return 0;
        }

    }

    public function addTutorProfile($level,$time,$subject,$rate,$status,$tutorID){
        
        $stmt = $this->con->prepare("INSERT INTO `tutors`(`level_of_teaching`,`time`,`subjects`,`rate`,`status`,`tutorID`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssssi", $level,$time,$subject,$rate,$status,$tutorID);
        $result = $stmt->execute() or die($this->con->error);
        if($result){
            return "Added";
        }else{
            return 0;
        }

    }


}  
//$user = new User();
//echo $user->createUserAccount("Jin","jin@gmail.com","1234","Tutor");
//echo $user -> userlogin("bob@gmail.com", "1234");
//echo $_SESSION["username"];
?>