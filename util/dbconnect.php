<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "onepage";

$dbconnect = new mysqli($host, $username, $password, $database);
if(mysqli_connect_errno()){
	die("cannot access the database ".mysqli_connect_errno());
}

 ?>