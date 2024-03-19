<?php
include("../connection.php");

$name = $_GET['names'];

$query = "DELETE FROM tours WHERE names='$name'";

$data = mysqli_query($conn,$query);

if($data){
    // echo "<font color = 'red'> Record Deleted";
    echo "<script> alert('Record Deleted from Database') </script>";
    } 
        ?>



<!-- Page will refresh 0 sec to refresh and after that URL will be executed -->
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL= 
    http://localhost:8080/new%20Rahi/Admin/display.php">








<!-- else{ -->
<!-- // echo "<font color = 'green'>Record not Deleted"; -->
<!-- echo "<script> alert('UnSuccessful data deleted') </script>"; -->
        <!-- // header("Location: delete.php"); -->
<!-- } -->
<!-- ?> -->
