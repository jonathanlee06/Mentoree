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

    public function createUserAccount($username,$email,$password,$type){
        //to protect your application from sql attack you can use prepare statement
        if($this->emailExists($email)){
            echo "EMAIL_ALREADY_EXISTS";
        }else{
            
            $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
            //$date = date("Y-m-d");  
            $pre_stmt = $this->con->prepare("INSERT INTO `users`(`username`, `email`, `password`,`userType`) 
            VALUES (?,?,?,?)");
            $pre_stmt->bind_param("ssss", $username,$email,$pass_hash,$type);
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
        $pre_stmt = $this->con->prepare("SELECT id,username,password,userType FROM users WHERE email = ?");
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
}   

//$user = new User();
//echo $user->createUserAccount("Jin","jin@gmail.com","1234","Tutor");
//echo $user -> userlogin("bob@gmail.com", "1234");
//echo $_SESSION["username"];
?>