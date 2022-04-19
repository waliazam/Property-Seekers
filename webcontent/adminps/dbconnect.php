<?php 
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="realestate-313333d804";

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
  }

 ?>