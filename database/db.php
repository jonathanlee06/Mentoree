<?php

class Database 
{

    private $con;

    public function connect(){
        include_once("constants.php");
        // $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        // $server = $url["host"];
        // $username = $url["user"];
        // $password = $url["pass"];
        // $db = substr($url["path"], 1);

        // $this->con = new mysqli($server, $username, $password, $db);


        $this->con = new Mysqli(HOST,USER,PASS,DB);

        if ($this->con){
            //echo "CONNECTED";
            return $this->con;
        }
        return "DATABASE_CONNECTION_FAIL";
    }
}

//$db = new Database();
//$db ->connect();
?>