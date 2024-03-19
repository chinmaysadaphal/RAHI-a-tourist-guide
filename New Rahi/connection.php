<?php

error_reporting(0);             // not show error
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "travelers";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
   // echo "Connection Ok";
}
else{
echo "Connection Failed";
}

?>