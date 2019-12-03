<?php
session_start();

$clearURL = parse_url(getenv("CLEARDB_DATABASE_URL"));

define("HOST",$clearURL["host"]);
define("USER",$clearURL["user"]);
define("PASS",$clearURL["pass"]);
define("DB", substr($clearURL["path"],1));

define("DOMAIN","https://mentoree.herokuapp.com");
?>